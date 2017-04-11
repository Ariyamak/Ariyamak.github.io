<html>
<head>
  <title>Resume</title>
  <link rel="stylesheet" type="text/css" href="CSS.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


</head>

<body class="pageForm" >

  <h1 class="header">Resume</h1>

    <?php
    $provinceSalogan = $firstName = $lastName = $gender = $province = $day = $month = $year = $date = "";
    $imageMale  = "maleAge.gif";
    $imgeFemale = "femaleAge.gif";
    $imgBoy =  "boy.gif";
    $imgGirl = "girl.gif";




    $brith_dayS = $_POST["brith_day"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $gender = $_POST["gender"];
    $province = $_POST["province"];
    $provinceSalogan = fopen("Allprovince.txt", "r") or die("Unable to open file!");


     ?>


  <div class="platForm">
    <form name="showDetail">

      FirstName : <?php
      echo $firstName;
      ?><br><br>
      LastName  : <?php
      echo $lastName;
      ?><br><br>
      Brithday  : <?php
      echo $brith_dayS;
      ?><br><br>
      Gender  : <?php
      echo $gender;
      ?><br><br>
      Province : <?php
      echo $province;
      ?><br><br>
      Province's slogan : <?php
      echo $provinceSalogan;
      ?><br><br>

    </form>
  </div>


<!-- <script src="myscript.js">
</script> -->

  </body>
  </html>
