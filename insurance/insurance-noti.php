  <!DOCTYPE html>
  <html>
    <head>
    <meta charset="utf-8">
    <TITLE>Bus System</TITLE>


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
    <script type="text/javascript" src="../js/materialize.min.js"></script>

    <?php include ('../menu.php'); ?>

    <div style="background-color: rgba(255,255,255,0.9); width: 80%; height:auto; border-radius: 5px; display:block; margin: 30px auto; padding: 10px; min-height: 650px;">

    <h3 style="text-align: center;">อิทธิกรและเพื่อนทรานสปอต</h3>
    <p style="text-align: center;">
    <input class="with-gap" name="group3" type="radio" id="no_twelve" onclick="displaySix()"checked>
    <label for="no_twelve">สาย6</label>
    <input class="with-gap" name="group3" type="radio" id="no_six" onclick="displayTwelve()" >
    <label for="no_six">สาย12</label>
    </p>


    <div class="row" id=dataSix>
      <div style="display: block; margin: auto; width: 80%;">
        <table class="highlight" style="padding-top: 10px;width: 100%;border-collapse: inherit;">
          <thead style="color:#FFF">
            <tr>
              <th>เบอร์</th>
              <th>ทะเบียน</th>
              <th>วันหมดอายุประกันภัย</th>
              <th>วันหมดอายุกรมธรรม์</th>
              <th>วันหมดอายุภาษีประจำปี</th>
              <th>แก้ไข</th>
            </tr>
          </thead>
          <tbody>
            <?php

            echo fetch_data(6);

             ?>
          </tbody>
      </table>
    </div>
  </div>

    <div class="row" id=dataTwelve style="display: none;>
      <div  margin: auto; width: 60%;">
        <table class="highlight" style="padding-top: 10px;width: 100%;border-collapse: inherit;">
          <thead style="color:#FFF">
            <tr>
              <th>เบอร์</th>
              <th>ทะเบียน</th>
              <th>วันหมดอายุประกันภัย</th>
              <th>วันหมดอายุกรมธรรม์</th>
              <th>วันหมดอายุภาษีประจำปี</th>
              <th>แก้ไข</th>
            </tr>
          </thead>
          <tbody>

        <?php

        echo fetch_data(12);

         ?>

          </tbody>
      </table>
    </div>
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

<script type="text/javascript">

function displaySix(){
  $("#dataTwelve").css("display", "none");
  $("#dataSix").css("display", "block");

}

function displayTwelve(){
  $("#dataTwelve").css("display", "block");
  $("#dataSix").css("display", "none");

}

</script>


<?php


function fetch_data($bus_number){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mbus_database";
    $output = '';
    $in1 = '' ;
    $in2 = '' ;
    $connect = mysqli_connect($servername,$username, $password,$dbname);
    $sql_data = "SELECT bus.bus_no , bus.bus_id , A.insur_ens , B.insur_ens , taxation.date_expire
FROM  taxation , bus , insurance as A  , insurance  as B
WHERE  bus.bus_no = '$bus_number' AND  A.type = 1 AND B.type = 2 AND taxation.id_reciept = bus.id_reciept AND  A.id_insur  =  bus.id_insur AND B.id_insur = bus.id_insur  ORDER BY bus.bus_id ";

    $result_data = mysqli_query($connect, $sql_data);
    while($row = mysqli_fetch_array($result_data)){

      $output .= '<tr>

                          <td>'.$row["bus_no"].'</td>
                          <td>'.$row["bus_id"].'</td>
                          <td>'.$row["insur_ens"] .'</td>
                          <td>'.$row["insur_ens"] .'</td>
                          <td>'.$row["date_expire"].'</td>
                          <td><a class="btn-floating orange" href="account-record.php"><i class="material-icons">build</i></a></td>

                </tr>';



       }



       return $output;
}



 ?>
