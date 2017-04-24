<!DOCTYPE html>
  <html lang="en">
    <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>Employee System</title>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style type="text/css">
        nav li a:hover{
          text-decoration:none;
          color: #FFF;
        }
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

    <div style="background-color: rgba(255,255,255,0.9); width: 90%; height:auto; border-radius: 5px; display:block; margin: 30px auto; padding: 10px; min-height: 650px;">

      <h3 style="text-align: center;">รายชื่อพนักงาน</h3>
      <div style="display: block; margin: auto; width: 80%;">
        <table class="highlight" style="padding-top: 10px;width: 100%;border-collapse: inherit;">
          <thead style="color:#FFF">
            <tbody>
        <?php echo fetch_data(); ?>
            </tr>

          </tbody>
  </table>

      <div class="fixed-action-btn horizontal">
    <a class="btn-floating btn-large light-green accent-3">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      <li><a class="btn-floating red" href="employee-record.php"><i class="material-icons">reorder</i></a></li>
      <li><a class="btn-floating yellow darken-1" href="employee-add.php"><i class="material-icons">add</i></a></li>
<!--       <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li> -->
    </ul>
  </div>
</div>

<!-- <div class="footer">
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
</div> -->

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
    $connect = mysqli_connect($servername,$username, $password,$dbname);
    $status = '';

    //set this page when use for the first time.
    if(!isset($_GET['page'])){
      $page = "1";
    }else {
      $page = $_GET["page"];
    }

    if($page == "" ||$page >= "1"){
      // echo "this data is page ".$page;
      $pagel = ($page*5)-5;

    }

    $sql_data = "SELECT * FROM employee WHERE employee.status =1 ORDER BY employee.id_emp limit $pagel,5";

    $result_data = mysqli_query($connect, $sql_data);

    $output .= '<tr>
                        <th>'."เลขประจำตัว".'</th>
                        <th>'."ชื่อ".'</th>
                        <th>'."นามสกุล".'</th>
                        <th>'."ประเภท".'</th>
                        <th>'."แก้ไข/ลบ".'</th>
                        </tr>';





    while($row = mysqli_fetch_array($result_data)){

      if($row["type_emp"] == 1){
        $status = "พนักงานขับรถ";
      }else if($row["type_emp"] == 2){
        $status = "พนักงานเก็บค่าโดยสาร";
      }

      $output .= '<tr>

                          <td>'.$row["id_emp"].'</td>
                          <td>'.$row["name_emp"].'</td>
                          <td>'.$row["lastname_emp"].'</td>
                          <td>'.$status.'</td>
                          <td>'.'<a class="btn-floating orange" href="/mbus/account/account-detail.php?id_emp='.$row["id_emp"].'"><i class="material-icons">build</i></a>'.'</td>


                </tr>';



       }
       //this for counting page
       $sql_datal = mysqli_query($connect,"SELECT * FROM employee WHERE employee.status =1 ORDER BY employee.id_emp ");
       $cou = mysqli_num_rows($sql_datal);
       $a = $cou/5;
       $a = ceil($a);


       $link_output = '
       <div class="footer">
       <nav aria-label="Page navigation" style="background-color: transparent;box-shadow: none">
       <ul class="pagination pagination pagination-lg">
           <li>
             <a href="#" aria-label="Previous">
               <span aria-hidden="true">&laquo;</span>
             </a>
           </li>

       ';
        for($b = 1 ; $b <= $a ; $b++){

          $link_output .= '<li><a href="/mbus/employee/employee-table.php?page='.$b.'">'.$b.'</a></li>';
        }
          $link_output .= '<li>
            <a href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
      </div>
      ';
       return $output . $link_output;
}


 ?>
