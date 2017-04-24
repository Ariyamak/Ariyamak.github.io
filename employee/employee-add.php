<!DOCTYPE html>
  <html>
    <head>
    <meta charset="utf-8">
    <title>Employee System</title>


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php include ('../header.html'); ?>
    </head>

    <body style="background:url(../direct-inverse.jpg);font-size: 120%;">



    <?php include ('../menu.php'); ?>

    <div style="background-color: rgba(255,255,255,0.9); width: 90%; height:auto; border-radius: 5px; display:block; margin: 30px auto; padding: 10px; min-height: 650px;">

<h3 style="text-align: center">เพิ่มพนักงาน</h3>
  <div>
    <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >


  <div class="row" style="display:block; width:40%; margin: auto;">
    <div class="file-field input-field" style="width: 100%">
      <div class="btn" style="background-color: #ff9100 ">
        <span >File</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="อัพโหลดรูปภาพ">
      </div>
    </div>
  </div>



  <div class="row" style="display:block; width:40%; margin: auto;">
    <div class="input-field col s6" style="width: 100%">
      <i class="material-icons prefix">account_circle</i>
      <input name="fname" id="fname" type="text" class="validate">
      <label for="name">ชื่อ</label>
    </div>
  </div>
  <div class="row" style="display:block; width:40%; margin: auto;">
    <div class="input-field col s6" style="width: 100%">
      <i class="material-icons prefix">account_circle</i>
      <input name="lname" type="text" class="validate">
      <label for="name">นามสกุล</label>
    </div>
  </div>
      <div class="row" style="display:block; width:40%; margin: auto;">
          <div class="input-field col s6" style="width: 100%">
            <i class="material-icons prefix">av_timer</i>
            <input name="birth_date" type="date" class="datepicker">
            <label for="birth">วัน เดือน ปีเกิด</label>
          </div>
      </div>

      <div class="row" style="display:block; width:40%; margin: auto;">
        <div class="input-field col s6" style="width: 100%">
          <i class="material-icons prefix">assignment_ind</i>
          <input name="citizen_id" type="text" class="validate">
          <label for="citizen_id">หมายเลขบัตรประชาชน</label>
        </div>
      </div>

    <div class="row" style="display:block; width:40%; margin: auto;">
    <p style="text-align: center;">
    <h5 style="font-size:18px">ประเภท</h5>
    <input class="with-gap" name="group3" type="radio" id="addEmployee1" value="1" checked>
    <label for="addEmployee1">พนักงานขับรถ</label>
    <input class="with-gap" name="group3" type="radio" id="addEmployee2" value="2" >
    <label for="addEmployee2">พนักงานเก็บค่าโดยสาร</label>
    </p>
    </div>

    <div class="row" style="display:block; width:40%; margin: auto;">
      <div class="input-field col s6" style="width: 100%">
        <i class="material-icons prefix">picture_in_picture</i>
        <input name ="drive_id" type="text" class="validate">
        <label for="drive_id">หมายเลขใบอนุญาตขับขี่/เก็บค่าโดยสาร</label>
      </div>
    </div>

    <div class="row" style="display:block; width:40%; margin: auto;">
          <div class="input-field col s6" style="width: 100%">
            <i class="material-icons prefix">subtitles</i>
            <input name="expire_date" id="expire_date" type="date" class="datepicker">
            <label for="expire_date">วันหมดอายุบัตร</label>
          </div>
      </div>

      <div class="row" style="display:block; width:40%; margin: auto;">
          <div class="row">
            <div class="input-field col s6" style="width: 100%">
              <i class="material-icons prefix">location_on</i>
              <textarea name="address" class="materialize-textarea"></textarea>
              <label for="address">ที่อยู่</label>
            </div>
          </div>
      </div>

      <div class="row" style="display:block; width:40%; margin: auto;">
        <div class="input-field col s6" style="width: 100%">
          <i class="material-icons prefix">phone</i>
          <input name="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">หมายเลขโทรศัพท์</label>
        </div>
      </div>
        <div class="row" style="text-align: center;">
        <button class="waves-effect waves-light btn" style="background-color:#ff9100 " value="submit" type="submit" name="submit" >ตกลง</button>
        <a class="waves-effect waves-light btn"  style="background-color:#ff9100 " href = "employee-add.php" >ยกเลิก</a>
        </div>
    </form>
  </div>
</body>
</html>
<script type="text/javascript" src="/mbus/js/materialize.min.js"></script>

<script type="text/javascript">
  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 100, // Creates a dropdown of 15 years to control year
    format:'yyyy/mm/dd' ,
    formatSubmit: 'yyyy/mm/dd'
  });


  </script>



  <?php
  if(isset($_POST['fname'])) {
  // echo "testing when you submit.";
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mbus_database";

  $fname = $_POST["fname"];
  $lname = $_POST["lname"] ;
  $birth_date = $_POST["birth_date"];
  $citizen_id =  $_POST["citizen_id"];
  $type_emp = $_POST['group3'];
  $drive_id = $_POST['drive_id'];
  $expire_date = $_POST['expire_date'];
  $address =  $_POST['address'];
  $telephone =  $_POST['icon_telephone'];
  $id_emp = '';
  // echo "$birth_date";
  $connect = mysqli_connect($servername,$username, $password,$dbname);

  if($type_emp == 1){
    $sql_data1 = "SELECT COUNT(*) FROM employee WHERE employee.type_emp = 1 ";
    $result_data1 = mysqli_query($connect, $sql_data1);
    $id = 1+mysqli_fetch_array($result_data1)[0];
    $id_emp = 'D_'.$id;

  }else if($type_emp == 2){
    $sql_data2 = "SELECT COUNT(*) FROM employee WHERE employee.type_emp = 2 ";
    $result_data2 = mysqli_query($connect, $sql_data2);
    $id = 1+mysqli_fetch_array($result_data2)[0];
    $id_emp = 'B_'.$id;
  }

  $sql_name = "INSERT INTO employee(personal_id,id_emp ,name_emp,lastname_emp,birth_emp,address ,type_emp,conductor_licence_no,expire_date,tel,status)
               VALUES('$citizen_id', '$id_emp' ,'$fname' ,'$lname' ,'$birth_date',
                      '$address' , '$type_emp' ,'$drive_id', '$expire_date',
                      '$telephone' ,1)" ;


  if (mysqli_query($connect, $sql_name)) {
    // echo "Record updated successfully";
    // $Ans_output = 'alert(การส่งข้อมูลสำเร็จ)';
  } else {
    // echo "Error updating record: " . mysqli_error($connect);
  }

  mysqli_close($connect);
  // return $Ans_output;

}
?>
