<?php
 
class PdfGenerator
{
  public function generate($html,$filename)
  {
    // define('DOMPDF_ENABLE_AUTOLOAD', false);
    require_once("dompdf/dompdf_config.inc.php");

    $paper_size = array(0, 0, 700, 792);
    
    $dompdf = new DOMPDF();

	$dompdf->set_paper($paper_size);
    $dompdf->load_html($html);
    $dompdf->render();
    $dompdf->stream($filename.'.pdf',array("Attachment"=>0));
  }
}