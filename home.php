

<!DOCTYPE html>
  <html>
    <head>
    <meta charset="utf-8">
    <title>HOME</title>
           <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

      <style type="text/css">
        th{
          border-bottom:inset;
          background-color: #ff9100 ;
        }
        th:not(:last-child),td:not(:last-child){
           border-right:inset;
        }        nav ul a:hover{
          color: #FFF;
          text-decoration: none;
        }
      </style>
    </head>

    <body style="background:url(direct.jpg);font-size: 120%;">
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<!--     <script> $(function(){ $("#menu").load("menu.html"); });</script>
    <div id="menu"></div> -->
    <?php include ('menu.php'); ?>

    <h4 style="text-align: center;">สรุปรายรับ</h4>

    <div id="myfirstchart" style="height: 450px;width: 700px;background-color: rgba(255,255,255,0.9);padding: 5px;margin-left: 400px;"></div>

    </body>
    <?php

echo fetch_data();

     ?>

</html>

<!-- <script type="text/javascript">
  new Morris.Bar({

  element: 'myfirstchart',

  data: [
    { month: '11-16', value: 13 },
    { month: '12-16', value: 10 },
    { month: '01-17', value: 15 },
    { month: '02-17', value: 20 },
    { month: '03-17', value: 5 }

  ],
  xkey: 'month',
  ykeys: ['value'],
  labels: ['Value']
});
</script> -->


<?php

function fetch_data(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mbus_database";
    $output = '';
    $connect = mysqli_connect($servername,$username, $password,$dbname);
    $status = '';
    $month = date('m');
    $year = date('Y');

    if($month == 04 || $month == 06 || $month == 09 || $month == 11  ){

      $day = 30;

    }else if($month == 02){

      $day = 28;

    }else{

      $day = 31;

    }


    $date1 = $year.'-'.$month.'-'.$day.' 00:00:00';
    $date2 = $year.'-'.$month.'-01 00:00:00';


//    $sql_data = "SELECT DISTINCT  bus.bus_no , bus.bus_id ,(SELECT COUNT(account.license_no) FROM account , logaccount WHERE logaccount.id_acc = account.id_acc AND  bus.licence_no = account.license_no ) FROM bus , account WHERE bus.licence_no = account.license_no  ORDER BY bus.bus_id";
    $sql_data = "SELECT DISTINCT  bus.bus_no , bus.bus_id ,
    (SELECT COUNT(account.license_no) FROM account , logaccount WHERE logaccount.id_acc = account.id_acc
    AND  bus.licence_no = account.license_no ) FROM bus , account WHERE bus.licence_no = account.license_no
    AND account.current_time <= '$date1' AND account.current_time >= '$date2'
    ORDER BY bus.bus_id";

    $result_data = mysqli_query($connect, $sql_data);

    while($row = mysqli_fetch_array($result_data)){
      $string_val =  $row["bus_no"].".".$row["bus_id"];
      $output .= '
                    { bus_number: '.$string_val.', value: '.$row[2].' },

                ';

       }

       $status .= "
       <script type='text/javascript'>
         new Morris.Bar({

         element: 'myfirstchart',

         data: [
           $output

         ],
         xkey: ['bus_number'],
         ykeys: ['value'],
         labels: ['จำนวนวันที่ออก']
       });
       </script>";

       return $status;
}





 ?>
