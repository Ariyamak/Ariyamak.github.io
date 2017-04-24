<?php
	session_start();
 ?>

<!-- <ul id="busMenu" class="dropdown-content">

 <li><a href="bus-table.html"><span class="new badge">3</span>ประกันภัย/กรมธรรม์/ภาษี</a></li>
  <li class="divider"></li>
  <li><a href="bus-add.html">เพิ่มรถเมล์</a></li>
</ul> -->

<!-- <ul id="setting" class="dropdown-content">
  <li><a href="#!">ค่าโดยสาร</a></li>
  <li><a href="#!">สายรถเมล์</a></li>

</ul>

<ul id="userMenu" class="dropdown-content">
  <li><a href="login.php">ออกจากระบบ</a></li>
  <li class="divider"></li>
  <li><a href="#!">แก้ไขข้อมูล</a></li>
</ul> -->

<!-- <nav>
  <div class="nav-wrapper" style="background-color: #ff6d00; padding-left: 15px;" >
    <a href="home.php" class="brand-logo">M-BUS</a>
    <ul class="left hide-on-med-and-down" style="padding-left: 320px;">

      <li><a href="account-table.php">ระบบบัญชี</a></li>
      <li><a href="employee-table.php">ระบบบพนักงาน</a></li>

       <li><a href="insurance-noti.php" data-activates="busMenu">รายการค้างชำระ <span class="new badge blue darken-3">3</span>
       </a></li>

      <li><a class="dropdown-button" href="#!" data-activates="setting">การตั้งค่า<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
    <ul class="right" style="padding-right: 15px;">
      <li><a class="dropdown-button" href="#!" data-activates="userMenu">Ariyamak<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>

    <form class="navbar-form navbar-right" role="search">
      <div class="form-group">
      <ul class="right" style="padding-right: 15px;">
       <li> <input type="text" class="form-control" style="color: white" placeholder="Search"></li>

      <li><a class="material-icons" href="account-record.html">search</a></li>
      </ul>
      </div>
    </form>

  </div>

</nav> -->

<nav class="nav-wrapper" style="background-color: #ff6d00; padding-left: 15px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" style="font-size: 120%">อิทธิกรและเพื่อนทรานสปอร์ต</a>

    </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li id="home"><a href="/mbus/home.php">หน้าแรก </a></li>
        <li id="account"><a href="/mbus/account/account-table.php">ระบบบัญชี </a></li>
        <li id="employee"><a href="/mbus/employee/employee-table.php">ระบบพนักงาน </a></li>
        <li id="insurance"><a href="/mbus/insurance/insurance-noti.php">รายการค้างชำระ <span class="new badge light-green accent-3">3</span></a></li>
         <li class="dropdown">
          <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">อื่นๆ <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">ค่าโดยสาร</a></li>
            <li><a href="#">เพิ่ม/แก้ไขสายรถเมล์</a></li>
          </ul>

      </ul>

      <ul class="nav navbar-nav navbar-right">
       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION["username"]; ?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/mbus/login.php">ออกจากระบบ</a></li>
            <li><a href="#">แก้ไขข้อมูลส่วนตัว</a></li>
          </ul>


      </ul>
        </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<!--  <script type="text/javascript">

  var url = window.location.href.split("/");
  var cutphp = url[url.length-1].split(".");
  var name = url[url.length-2]+"_"+cutphp[0];
  $("li").removeClass();
  $("#"+name).addClass("active");

</script> -->
