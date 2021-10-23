<!DOCTYPE html>
<html>
<head>
  <title>Accordion</title>
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>

</head>
<body>
  
<div class="container-fluid">

  <div class="row">
    <div class="col-md-offset-4 col-md-4 col-xs-offset-2 col-xs-10">
      <div class="panel panel-default">
        <div class="panel-body text-center">
          <h2 class="text-center">Sign In</h2>
            <form action="php/login.php" method="post" >
              <div class="col-md-12">
                <div class="mat-div">
                  <label for="useremail" >Email</label>
                  <input type="text" class="form-control" name="useremail">
                </div>
              </div>               
              <div class="col-md-12">
                <div class="mat-div">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password">
                </div><br><br>
              </div>
              <center>
                <button type="submit" class="btn  btn-md btn-primary">Sign in</button><br><br>
              </center>
            </form>
        </div>  
      </div>
    </div>