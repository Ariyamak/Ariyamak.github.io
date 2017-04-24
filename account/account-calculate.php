<!DOCTYPE html>
  <html>
    <head>
    <title>Account System</title>
      <meta charset="utf-8">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   <?php include ('../header.html'); ?>
    </head>

    <body style="background:url(../direct-inverse.jpg);font-size: 120%;">


      <!--Import jQuery before materialize.js-->
      <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
      <!-- <script type="text/javascript" src="../js/materialize.min.js"></script> -->
      <?php include ('../menu.php'); ?>


    <div style="background-color: rgba(255,255,255,0.9); width: 95%; height:auto; border-radius: 5px; display:block; margin: 30px auto; padding: 10px; min-height: 650px;">

    <div class="content" style="padding-left: 80px;padding-right: 60px; ">
      <h3 style="text-align: center;">ระบบบัญชี</h3>
      <p style="text-align: center;">
      <input class="with-gap" name="group3" type="radio" id="percent" onclick="displayPercent()" checked>
      <label for="percent">เปอร์เซ็นต์</label>
      <input class="with-gap" name="group3" type="radio" id="rent" onclick="displayRent()">
      <label for="rent">เช่าเหมา</label>
      </p>

      <div class="row ">
        <div class="col s8" id="percentForm">
          <form class="col s12" method = "post">

            <div class="row">
              <div class="input-field col s6">
                <i class="material-icons prefix">av_timer</i>
                <input id="current_date" name = "date_per"type="date" class="datepicker">
                <label for="current_date">วันที่</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s3">
                <select name = "bus_no_per"class="browser-default">
                  <option value="" disabled selected>สาย</option>
                  <?php
                  echo no_bus();

                   ?>
                </select>
              </div>

               <div class="input-field col s3">
                <select name = "bus_id_per" class="browser-default">
                  <option value="" disabled selected>หมายเลขรถ</option>
                      <?php
                        echo id_bus();
                       ?>
                </select>
              </div>

            </div>

            <div class="row">
              <div class="input-field col s3">
                <select name= "round_per"  class="browser-default">
                  <option value="" disabled selected>รอบโดยสาร</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
              </div>

                <div class="input-field col s4">
                <i class="material-icons prefix">receipt</i>
                <input id="icon_receipt" type="text" class="validate">
                <label for="icon_receipt">ก๊าซ</label>
              </div>
            </div>


            <div class="row">
              <div class="input-field col s6">
                <i class="material-icons prefix">receipt</i>
                <input id="icon_receipt" type="text" class="validate">
                <label for="icon_receipt">เริ่มต้นหน้าตั๋ว</label>
              </div>

              <div class="input-field col s6">
                  <i class="material-icons prefix">receipt</i>
                  <input id="icon_receipt" type="text" class="validate">
                  <label for="icon_receipt">สิ้นสุดหน้าตั๋ว</label>
              </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">perm_identity</i>
                  <input id="employ1" type="text" class="validate">
                  <label for="employ1">พนักงานขับรถ</label>
                </div>

                <div class="input-field col s6">
                  <i class="material-icons prefix">perm_identity</i>
                  <input id="employ2" type="text" class="validate">
                  <label for="employ2">พนักงานเก็บค่าโดยสาร</label>
                </div>
            </div>

          </form>
        </div>
        <div class="col s8" id="rentForm" style="display: none" >
          <form class="col s12" method="post">
            <div class="row">
              <div class="input-field col s6">
                <i class="material-icons prefix">av_timer</i>
                <input id="current_date"  name= "date_rent" type="date" class="datepicker">
                <label for="current_date">วันที่</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s3">
                <select name = "bus_no_rent" class="browser-default">
                  <option value="" disabled selected>สาย</option>
                  <?php
                  echo no_bus();

                   ?>
                </select>
              </div>

               <div class="input-field col s3">
                <select  name = "bus_id_per"class="browser-default">
                  <option value="" disabled selected>หมายเลขรถ</option>
                  <?php
                  echo id_bus();

                   ?>
                </select>
              </div>

            </div>

            <div class="row">
              <div class="input-field col s3">
                <p>
                  <br><br>
                  <label style="color:black;font-size:120%">ราคา</label>
                  <input class="with-gap" name="price" type="radio" id="mon-fri" checked>
                  <label for="mon-fri">2200บาท (จันทร์-ศุกร์)</label><br><br><br>

                  <input class="with-gap" name="price" type="radio" id="sat-sun">
                  <label for="sat-sun">2000บาท (เสาร์-อาทิตย์)</label><br><br><br>

                  <input class="with-gap" name="price" type="radio" id="vacation">
                  <label for="vacation">2000บาท (วันหยุดนักขัตฤกษ์)</label><br><br><br>

                  <input class="with-gap" name="price" type="radio" id="etc">
                  <label for="etc">อื่นๆ</label>
                  <input id="etcInput" type="text" class="with-gap">
                </p>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <i class="material-icons prefix">perm_identity</i>
                <input id="employ1" name= "emp1_rent" type="text" class="validate">
                <label for="employ1">พนักงานขับรถ</label>
              </div>
              <div class="input-field col s6">
                <i class="material-icons prefix">perm_identity</i>
                <input id="employ2" name= "emp2_rent" type="text" class="validate">
                <label for="employ2">พนักงานกระเป๋ารถเมล์</label>
              </div>
            </div>


          </form>
        </div>
        <div class = "col s4" style="border-style: groove;border-radius: 10px;background-color: #ffd180">
          <h5> สรุปรายการเดินบัญชี </h5>
          <p>วันที่: <br>
          พนักงานขับรถ:<br>
          พนักงานเก็บค่าโดยสาร:<br>
          จำนวนเงิน:<br>
          </p>

          <div class="row" style="text-align: center;">
            <button class="waves-effect waves-light btn" href="account-table.php" style="background-color:#ff9100 " value="submit" type="submit" name="submit" >ตกลง</button>
          </div>
        </div>
      </div>

    </div>
  </body>
</html>
<script type="text/javascript" src="/mbus/js/materialize.min.js"></script>
<script type="text/javascript">
  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });

function displayRent(){

  // var type_cal = "rent";
  // $.ajax({
  //   url: "account-calculate.php",
  //   dataType: "text",
  //   type: "post",
  //   data:{
  //     "type_cal": type_cal
  //   },
  //   success:function(data){
  //     console.log(data);
  //   },
  //   complete:function(data){
  //     console.log(data);
  //   }
  // });
  // echo "RENT";
  $("#percentForm").css("display", "none");
  $("#rentForm").css("display", "block");
}

function displayPercent(){

  // var type_cal = "percent";
  // $.ajax({
  //   url: "account-calculate.php?type_cal='rent'",
  //   dataType: "text",
  //   type: "post",
  //   data:{
  //     "type_cal": type_cal
  //   },
  //   success:function(data){
  //     console.log(data);
  //   },
  //   complete:function(data){
  //     console.log(data);
  //   }
  // });
  // echo "PERCENT";
  $("#percentForm").css("display", "block");
  $("#rentForm").css("display", "none");
}



// $(document).ready(function(){
  // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
  // $('#calPercent').modal();
  // $('#calRent').modal();
  // });


</script>



<?php

function percent(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mbus_database";


//how to get this value in form


$date = $_POST["date_per"];
$bus_no = $_POST["bus_no_per"];
$bus_id  = $_POST["bus_no_per"];
$start_ticket = $_POST["start_ticket"];
$end_ticket = $_POST["end_ticket"] ;
$round = $_POST["round_per"];
$gas = $_POST["gas"];
$employ1 = $_POST["employ1"];
$employ2 =  $_POST["employ2"];
$date = $_POST['date_save'];

//conecting with database.
$connect = mysqli_connect($servername,$username, $password,$dbname);

//for get count of ticket.
$sql_data1 = "SELECT COUNT(*) FROM ticket";
$result_data1 = mysqli_query($connect, $sql_data1);
$id_ticket = 1+mysqli_fetch_array($result_data1)[0];

//for get license_no of bus.
$sql_data2 = "SELECT licence_no FROM bus WHERE bus.bus_no = '$bus_no' AND bus.bus_id = '$bus_id' ";
$result_data2 = mysqli_query($connect, $sql_data2);
$license_no = mysqli_fetch_array($result_data2)[0];

//for count ticket.
$count = '' ;
if(substr($start_ticket,0,3) == substr($end_ticket,0,3)){
$count = $start_ticket-$end_ticket;
$count = substr($count,3,0);
}else{
$count = (1000 - intval(substr($start_ticket,-3,0)))+ intval(substr($end_ticket,-3,0));
}

// count , idticket , license_no
//insert new table ticket.
$sql_name_ticket = "INSERT INTO ticket(id_ticket,start_ticket,end_ticket,price,license_no,count)
                  VALUES('$id_ticket','$start_ticket','$end_ticket','9','$license_no','$count')
                  ";
if (mysqli_query($connect, $sql_name_ticket)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($connect);
}

//Creates id_acc
$sql_data3 = "SELECT count(id_acc) FROM account ";
$result_data3 = mysqli_query($connect, $sql_data3);
$id_acc = 1+mysqli_fetch_array($result_data3)[0];

//get username
$username = $_SESSION["username"];

//get total price
$total_price = intval($count)*9;

//
$current_time = date('Y-m-d G:i:s');

//insert new table account.
$sql_name = "INSERT INTO account(id_acc,license_no,id_emp_driver,id_emp_ticker,id_ticket,username,current_time,total_price,tax,gas)
             VALUES('$id_acc','$license_no','$employ1','$employ2','$id_ticket','$username','$current_time' , '$total_price','$gas')" ;


if (mysqli_query($connect, $sql_name)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($connect);
}

mysqli_close($connect);
echo"<br>ส่งข้อมูลเรียบร้อย";

}




//--------------------------------------------------------------------------------for function rent.----------------------------------------------------------------------//

function rent(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mbus_database";



//how to get this value in form 

$date = $_POST["date_rent"];
$bus_no = $_POST["bus_no_rent"];
$bus_id  = $_POST["bus_no_rent"];
$employ1 = $_POST["emp1_rent"];
$employ2 =  $_POST["emp2_rent"];
$date = $_POST['date_save'];


//conecting with database.
$connect = mysqli_connect($servername,$username, $password,$dbname);

//for get count of ticket.
$sql_data1 = "SELECT COUNT(*) FROM ticket";
$result_data1 = mysqli_query($connect, $sql_data1);
$id_ticket = 1+mysqli_fetch_array($result_data1)[0];

//for get license_no of bus.
$sql_data2 = "SELECT license_no FROM bus WHERE bus.bus_no = '$bus_no' AND bus.bus_id = '$bus_id' ";
$result_data2 = mysqli_query($connect, $sql_data2);
$license_no = mysqli_fetch_array($result_data2)[0];

// count , idticket , license_no
//insert new table ticket.
$sql_name_ticket = "INSERT INTO ticket(id_ticket,start_ticket,end_ticket,price,license_no,count)
                  VALUES('$id_ticket','000000','000000','9','$license_no','0')
                  ";
if (mysqli_query($connect, $sql_name_ticket)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($connect);
}

//Creates id_acc
$sql_data3 = "SELECT count(id_acc) FROM account ";
$result_data3 = mysqli_query($connect, $sql_data3);
$id_acc = 1+mysqli_fetch_array($result_data3)[0];

//get username
$username = $_SESSION["username"];

//get total price
$total_price = 0;

//
$current_time = date('Y-m-d G:i:s');

//insert new table account.
$sql_name = "INSERT INTO account(id_acc,license_no,id_emp_driver,id_emp_ticker,id_ticket,username,current_time,total_price,tax,gas)
             VALUES('$id_acc','$license_no','$employ1','$employ2','$id_ticket','$username','$current_time' , '$total_price','$gas')" ;


if (mysqli_query($connect, $sql_name)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($connect);
}

mysqli_close($connect);
echo"<br>ส่งข้อมูลเรียบร้อย";

}






//------------------------------------------------------------------------------------------------------------------------------------------------------------------//




function id_bus(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mbus_database";
  $output = '';


  $connect = mysqli_connect($servername,$username, $password,$dbname);
  $sql_data = "SELECT DISTINCT bus.bus_id
               FROM  bus
               ORDER BY bus.bus_id";

  $result_data = mysqli_query($connect, $sql_data);

  while($row = mysqli_fetch_array($result_data)){

    $output .= '<option value ="">'.$row["bus_id"].'</option>';



     }



     return $output;
}



function no_bus(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mbus_database";
    $output = '';

    $connect = mysqli_connect($servername,$username, $password,$dbname);
    $sql_data = "SELECT DISTINCT bus.bus_no
                 FROM  bus
                 ORDER BY bus.bus_no";

    $result_data = mysqli_query($connect, $sql_data);

    while($row = mysqli_fetch_array($result_data)){

      $output .= '<option value ='.$row["bus_no"].'>'.$row["bus_no"].'</option>';



       }



       return $output;
}




 ?>
