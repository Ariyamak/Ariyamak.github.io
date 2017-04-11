<?php
 function fetch_data()
 {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dreamhome";
    $output = '';
    $connect = mysqli_connect($servername,$username, $password,$dbname);
    $sql = "SELECT Client.clientno, Client.fname, Client.lname ,Viewing.viewdate FROM Client INNER JOIN Viewing ON Client.clientno = Viewing.clientno";
    $result = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_array($result))
    {
    $output .= '<tr>
                        <td>'.$row["clientno"].'</td>
                        <td>'.$row["fname"].'</td>
                        <td>'.$row["lname"].'</td>
                        <td>'.$row["viewdate"].'</td>

                   </tr>
                        ';
      }
      return $output;
 }

if(isset($_POST["create_xml"])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dreamhome";
    $output = '';
    $connect = mysqli_connect($servername,$username, $password,$dbname);
    $sql = "SELECT Client.clientno, Client.fname, Client.lname ,Viewing.viewdate FROM Client INNER JOIN Viewing ON Client.clientno = Viewing.clientno";
    $result = mysqli_query($connect, $sql);
    if(mysqli_num_rows($result) > 0){
       $content = '';
       $content .= '
       <table class="table" bordered="1">
               <tr>
                 <th>Clientno</th>
                 <th>FristName</th>
                 <th>LastName</th>
                 <th>Viewdate</th>
               </tr>
      ';

      $content .= fetch_data();
      $content .= '</table>';
      header('Content-Type: application/xls');
      header('Content-Disposition: attachment; filename=download.xls');

    }
 }else if(isset($_POST["create_CSV"])){
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "dreamhome";
   $output = '';
   $content = '';
   $connect = mysqli_connect($servername,$username, $password,$dbname);
   $sql = "SELECT Client.clientno, Client.fname, Client.lname ,Viewing.viewdate FROM Client INNER JOIN Viewing ON Client.clientno = Viewing.clientno";
   $result = mysqli_query($connect, $sql);
   $filName = "csv.csv";
   $objWrite = fopen("csv.csv", "w");
   fwrite($objWrite, "\"Clientno\",\"FristName\",\"LastName\",\"Viewdate\" \n");
   while($row = mysqli_fetch_array($result)){
       fwrite($objWrite, "".$row["clientno"].",".$row["fname"].",".$row["lname"].",".$row["viewdate"]."\n");

   }
   fclose($objWrite);
   echo "<br>Generate CSV Done.<br><a href=$filName>Download</a>";
   $content = $filName;



}

else if(isset($_POST["create_pdf"])){
      require_once('tcpdf/tcpdf.php');
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
      $obj_pdf->SetCreator(PDF_CREATOR);
      $obj_pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
      $obj_pdf->SetDefaultMonospacedFont('helvetica');
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
      $obj_pdf->setPrintHeader(false);
      $obj_pdf->setPrintFooter(false);
      $obj_pdf->SetAutoPageBreak(TRUE, 10);
      $obj_pdf->SetFont('helvetica', '', 12);
      $obj_pdf->AddPage();
      $content = '';
      $content .= '

      <table border="1" cellspacing="0" cellpadding="4">
           <tr>
             <th width="20%">Clientno</th>
             <th width="30%">FristName</th>
             <th width="30%">LastName</th>
             <th width="20%">Viewdate</th>
           </tr>
      ';
      $content .= fetch_data();
      $content .= '</table>';
      $obj_pdf->writeHTML($content);
      $obj_pdf->Output('sample.pdf', 'I');
 }




?>

<!DOCTYPE html>
<html>
<body>
  <br /><br />
             <div class="container" style="width:500px;">
                  <div class="table-responsive">
                       <table class="table table-bordered">
                            <tr>
                                 <th width="5%">Clientno</th>
                                 <th width="10%">FristName</th>
                                 <th width="10%">LastName</th>
                                 <th width="5%">Viewdate</th>
                            </tr>
                       <?php
                       echo fetch_data();
                       ?>
                       </table>
                       <br />
                       <form method="post">
                            <input type="submit" name="create_pdf" class="btn btn-danger" value="Create PDF" />
                            <input type="submit" name="create_xml" class= "btn btn-danger" value="Create XML" />
                            <input type="submit" name="create_CSV" class= "btn btn-danger" value="Create CSV" />
                       </form>
                  </div>
             </div>
</body>
</html>
