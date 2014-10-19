<?php
if (!isset($_POST['generate'])) {
	header('Location: '.dirname($_SERVER['PHP_SELF']).'/');
	exit();
}

/***/

/* Code knocked up very quickly, and in a rush.
 * Ugly short-cuts taken everywhere.  You have been warned!
 */

define ('DOTS', '.......................');

(empty($_POST['nok']['name'])) 			&& $_POST['nok']['name'] 		= DOTS;
(empty($_POST['nok']['relation']))		&& $_POST['nok']['relation'] 	= DOTS;
(empty($_POST['nok']['tel'])) 			&& $_POST['nok']['tel'] 		= DOTS;
(empty($_POST['nok']['address'])) 		&& $_POST['nok']['address'] 	= DOTS;
(empty($_POST['mai']['name'])) 			&& $_POST['mai']['name'] 		= DOTS;
(empty($_POST['mai']['dob'])) 			&& $_POST['mai']['dob'] 		= DOTS;
(empty($_POST['mai']['alert'])) 		&& $_POST['mai']['alert'] 		= 'N/A - no medical alerts';

/***/

/* Simple use counter. */
if ($fp = fopen(dirname(__FILE__)."/hits.dat", "c+")) {
	if (flock($fp, LOCK_EX | LOCK_NB)) {
		$hits = intval(fgets($fp)) + 1;
		ftruncate($fp, 0);
		fseek($fp, 0);
		fwrite($fp, "$hits");
		flock($fp, LOCK_UN);
	}
	fclose($fp);
}

/***/

/* Assumes fpdf is installed in some default include path. */
require_once ('fpdf.php');

$pdf = new fpdf('P', 'mm', 'A4');

/***/

$pdf->AddPage();
$pdf->Image('background.png', 11, 11, -220);

/***/

$pdf->SetFont('Arial', 'B', 21);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetXY(11, 41.5);
$pdf->MultiCell(81.5, 7, "EMERGENCY\nCONTACT\nDISC", 0, 'C');

/***/

$pdf->SetDrawColor(255, 255, 255);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(23.5, 105, 56, 56, 'DF');
$pdf->Rect(23.5, 187, 56, 56, 'DF');

/***/

$pdf->SetFont('Arial', 'BU', 10);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(11, 107);
$pdf->Cell(81.5, 5, "Emergency Contact Information", 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(81.5, 6, "Name:", 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(81.5, 6, $_POST['nok']['name'], 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(81.5, 6, "Relation:", 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(81.5, 6, $_POST['nok']['relation'], 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(81.5, 6, "Phone:", 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(81.5, 6, $_POST['nok']['tel'], 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(81.5, 6, "Address:", 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(81.5, 6, $_POST['nok']['address'], 0, 1, 'C');

/***/

$pdf->SetFont('Arial', 'BU', 12);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(11, 189);
$pdf->Cell(81.5, 5, "Medical Alert Information", 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(81.5, 6, "Name:", 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(81.5, 6, $_POST['mai']['name'], 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(81.5, 6, "Date of Birth:", 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(81.5, 6, $_POST['mai']['dob'], 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 10);

$pdf->SetTextColor(255, 0, 0);
$pdf->Cell(81.5, 6, "Medical alert:", 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(81.5, 6, $_POST['mai']['alert'], 0, 'C');

/***/

$pdf->SetFont('Arial', 'B', 16);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(93, 204.5);
$pdf->MultiCell(81.5, 6, "ATTENTION\nEMERGENCY SERVICES!", 0, 'C');
$pdf->SetTextColor(255, 255, 255);
$pdf->SetXY(93, 217);
$pdf->MultiCell(81.5, 6, "OPEN DISC\nFOR DRIVER DETAILS\nMEDICAL INFORMATION", 0, 'C');

/***/

$pdf->SetXY(93, 235);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(81.5, 3.5, "Produced online at:", 0, 1, 'C');
$pdf->SetX(93);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(81.5, 3.5, "soggysoftware.co.uk/emergencycontactdisc", 0, 1, 'C');
$pdf->SetX(93);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(81.5, 3.5, "Based on original idea and design by:", 0, 1, 'C');
$pdf->SetX(93);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(81.5, 3.5, "@MalvernCops", 0, 1, 'C');

/***/

$pdf->SetFont('Arial', '', 10);
$pdf->SetTextColor(50, 50, 50);
$pdf->SetXY(96, 10.5);
$pdf->MultiCell(90, 5, "1. Cut along black lines for square tax disc holders, or around blue for circular holders.".
	"\n\n2. Fold with 'EMERGENCY CONTACT DISC' on front (for window side) and 'ATTENTION' on back.".
	"\n\n---\n".
	"\nAll credit goes to @MalvernCops for original idea and design.".
	"\n\n---\n".
	"\nGo to soggysoftware.co.uk/emergencycontactdisc to generate another disc.".
	"\n\n---\n".
	"\nBOTH THE SOFTWARE PROVIDED TO PRINT THIS DISC AND THE DISC ITSELF ARE ".
	"PROVIDED ON AN 'AS IS' BASIS, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR ".
	"IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, ".
	"FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE ".
	"AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER ".
	"LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, ".
	"OUT OF OR IN CONNECTION WITH THE SOFTWARE/DISC OR THE USE OR OTHER DEALINGS ".
	"IN THE SOFTWARE/DISC.", 0, 'L');

/***/

$pdf->Output();
