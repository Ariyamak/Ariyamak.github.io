<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .modal-header, h4, .close {
      background-color: #FF5900;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>
</head>
<body background="direct.jpg">

<div class="container">

  <!-- Modal -->
  <div  class="modal-dialog" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <form action="checkLogin.php" method="post" name="Login_Form" class="form-signin">
        <div class="modal-body" style="padding:40px 50px;">
          <!-- <form role="form"> -->
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control"  name="username" id="username" placeholder="Enter Usrname">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" name="password" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button class="btn btn-success btn-block" style="background-color: #ff6d00; border-color: #ff6d00 " name="form_submit" value="Enter" type="submit" ><span class="glyphicon glyphicon-off"></span> Login</button>

          <!-- </form> -->
        </div>
      </form>
        <div class="modal-footer">
<!--           <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button> -->
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>

    </div>
  </div>
</div>

</body>
</html>
