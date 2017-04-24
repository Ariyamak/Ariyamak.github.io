<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
    <title>Account System</title>
           <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <style type="text/css">
        nav ul a:hover{
          color: #FFF;
          text-decoration: none;
        }
      </style>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style type="text/css">
        th{
          border-bottom:inset;
          background-color: #ff9100 ;
        }
        th:not(:last-child),td:not(:last-child){
           border-right:inset;
        }.footer {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 1rem;
            text-align: center;
}
      </style>
    <?php include ('../header.html'); ?>
    </head>

    <body style="background:url(../direct-inverse.jpg);font-size: 120%;">


    <?php include ('../menu.php'); ?>

    <div style="background-color: rgba(255,255,255,0.9); width: 90%; height:auto; border-radius: 5px; display:block; margin: 30px auto; padding: 10px; min-height: 650px;">

      <h3 style="text-align: center;">บันทึกการโดยสารทั้งหมด</h3>


      <div style="display: block; margin: auto; width: 80%;">
        <table class="highlight" style="padding-top: 10px;width: 100%;border-collapse: inherit;">
          <thead style="color:#FFF">
            <tr>
              <th>วันที่</th>
              <th>รถ</th>
              <th>พนักงานขับรถ</th>
              <th>พนักงานเก็บค่าโดยสาร</th>
              <th>เริ่มหน้าตั๋ว</th>
              <th>สิ้นสุดหน้าตั๋ว</th>
              <th>จำนวนเงิน</th>
              <th>ผู้ทำบัญชี</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
              echo fetch_data();
             ?>
          </tbody>
  </table>


</div>
<div class="footer">
<nav aria-label="Page navigation" style="background-color: transparent;box-shadow: none">
<ul class="pagination pagination pagination-lg">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</div>
</div>
    </body>
</html>

<?php

function fetch_data(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mbus_database";
    $output = '';
    $driver = '';
    $ticker = '';
    $connect = mysqli_connect($servername,$username, $password,$dbname);
    $sql_data = "SELECT DISTINCT logaccount.date_time , bus.bus_no , bus.bus_id , A.name_emp, B.name_emp,
                        ticket.start_ticket , ticket.end_ticket , account.total_price ,
                        account.username
                 FROM  account , bus , logaccount ,ticket ,employee as A , employee as B
                 WHERE account.id_acc = logaccount.id_acc AND account.username = logaccount.username
                 AND account.id_ticket = ticket.id_ticket AND account.license_no = ticket.license_no
                 AND bus.licence_no  = account.license_no
                 AND B.personal_id = account.id_emp_driver AND A.personal_id = account.id_emp_ticker
                 ORDER BY logaccount.date_time ";

    $result_data = mysqli_query($connect, $sql_data);

    while($row = mysqli_fetch_array($result_data)){

      $output .= '<tr>
                          <td>'.$row["date_time"].'</td>
                            <td>'.$row["bus_no"].'-'.$row["bus_id"].'</td>
                          <td>'.$row["name_emp"].'</td>
                          <td>'.$row["name_emp"].'</td>
                          <td>'.$row["start_ticket"].'</td>
                          <td>'.$row["end_ticket"].'</td>
                          <td>'.$row["total_price"].'</td>
                          <td>'.$row["username"].'</td>
                          <td><a class="btn-floating orange" href="account-record.php"><i class="material-icons">build</i></a></td>
                  </tr>';



       }



       return $output;
}


 ?>
