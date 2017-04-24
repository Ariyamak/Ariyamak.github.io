<!DOCTYPE html>
  <html>
    <head>
    <title>Employee System</title>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style type="text/css">
        nav ul a:hover{
          color: #FFF;
          text-decoration: none;
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
        th{
          border-bottom:inset;
          background-color: #ff9100 ;
        }
        th:not(:last-child),td:not(:last-child){
           border-right:inset;
        }
      </style>
    <?php include ('../header.html'); ?>
    </head>

    <body style="background:url(../direct-inverse.jpg);font-size: 120%;">
    <script type="text/javascript" src="../js/materialize.min.js"></script>

    <?php include ('../menu.php'); ?>

    <div style="background-color: rgba(255,255,255,0.9); width: 90%; height:auto; border-radius: 5px; display:block; margin: 30px auto; padding: 10px; min-height: 650px;">

      <h3 style="text-align: center;">ระเบียนพนักงาน</h3>

      <div style="display: block; margin: auto; width: 80%;">
        <table class="highlight" style="padding-top: 10px;width: 100%;border-collapse: inherit;">
          <thead style="color:#FFF">
            <tr>
              <th>ชื่อ</th>
              <th>นามสกุล</th>
              <th>สถานะ</th>
              <th>หมายเหตุ</th>
            </tr>
          </thead>
      <?php
echo fetch_data();
       ?>
            </tr>

          </tbody>
  </table>
</div>
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
    $status ='';
    $connect = mysqli_connect($servername,$username, $password,$dbname);
    $sql_data = "SELECT employee.name_emp , employee.lastname_emp, employee.note , employee.status
                 FROM  employee
                 ORDER BY employee.name_emp


                 ";

    $result_data = mysqli_query($connect, $sql_data);

    while($row = mysqli_fetch_array($result_data)){
      if($row["status"] == 1){
           $status ='<td style = "color:green">'."ทำงาน".'</td>';
      }else if($row["status"] == 0){

           $status ='<td style = "color:red">'."ลาออก".'</td>';
        }
      $output .= '<tr>

                          <td>'.$row["name_emp"].'</td>
                          <td>'.$row["name_emp"].'</td>
                          '.$status.'
                          <td>'.$row["note"].'</td>

                  </tr>';



       }



       return $output;
}



 ?>
