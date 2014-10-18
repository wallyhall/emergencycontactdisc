<?php
if (!isset($_POST['generate'])) {
	header('Location: '.dirname($_SERVER['PHP_SELF']).'/');
	exit();
}

require_once ('fpdf.php');

$pdf = new fpdf('P', 'mm', 'A4');

/***/

$pdf->AddPage();
$pdf->Image('background.png', 10, 6, -200);

/***/

$pdf->SetFont('Arial', 'B', 22);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetXY(10, 40.5);
$pdf->MultiCell(90, 7, "EMERGENCY\nCONTACT\nDISC", 0, 'C');

/***/

$pdf->SetDrawColor(255, 255, 255);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(24, 111, 62, 59, 'DF');
$pdf->Rect(24, 201, 62, 59, 'DF');

/***/

$pdf->SetFont('Arial', 'BU', 11);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(10, 114);
$pdf->Cell(90, 5, "Emergency Contact Information", 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(90, 6, "Name:", 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(90, 6, $_POST['nok']['name'], 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(90, 6, "Relation:", 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(90, 6, $_POST['nok']['relation'], 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(90, 6, "Phone:", 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(90, 6, $_POST['nok']['tel'], 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(90, 6, "Address:", 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(90, 6, $_POST['nok']['address'], 0, 1, 'C');

/***/

$pdf->SetFont('Arial', 'BU', 12);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(10, 204);
$pdf->Cell(90, 5, "Medical Alert Information", 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(90, 6, "Name:", 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(90, 6, $_POST['mai']['name'], 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(90, 6, "Date of Birth:", 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(90, 6, $_POST['mai']['dob'], 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 10);

$pdf->SetTextColor(255, 0, 0);
$pdf->Cell(90, 6, "Medical alert:", 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
if (trim($_POST['mai']) != '') {
	$pdf->MultiCell(90, 6, $_POST['mai']['alert'], 0, 'C');
} else {
	$pdf->MultiCell(90, 6, 'N/A - no medical alerts', 0, 'C');
}

/***/

$pdf->SetFont('Arial', 'B', 16);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(100, 220);
$pdf->MultiCell(90, 6, "ATTENTION\nEMERGENCY SERVICES!", 0, 'C');
$pdf->SetTextColor(255, 255, 255);
$pdf->SetXY(100, 233);
$pdf->MultiCell(90, 6, "OPEN DISC\nFOR DRIVER DETAILS\nMEDICAL INFORMATION", 0, 'C');

/***/

$pdf->SetXY(100, 253);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(90, 4, "Produced online at:", 0, 1, 'C');
$pdf->SetX(100);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(90, 4, "soggysoftware.co.uk/emergencycontactdisc", 0, 1, 'C');
$pdf->SetX(100);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(90, 4, "Based on original idea and design by:", 0, 1, 'C');
$pdf->SetX(100);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(90, 4, "@MalvernCops", 0, 1, 'C');

/***/

$pdf->SetFont('Arial', '', 10);
$pdf->SetTextColor(50, 50, 50);
$pdf->SetXY(105, 10);
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
