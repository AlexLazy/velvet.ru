<?php
session_start();
if (isset($_POST['submit'])) {
	require_once ('date/sql.cfg.php');
	if ($_POST['username'] == $username && $_POST['password'] == $password) {
		$_SESSION['check'] = true;
		header('Location: index.php');
	}
}
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>VELVET!</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="smarty/css/custom.css" rel="stylesheet">
  </head>

  <body style="background:#F7F7F7;">
      <div id="wrapper">
        <div id="login" class=" form">
          <section class="login_content">
            <form method="post">
              <h1>Форма входа</h1>
              <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" />
              </div>
              <div>
              <input type="submit" value="Войти" id="form_submit" name="submit" class="btn btn-default submit">
              </div>
              <div class="clearfix"></div>
              <div class="separator">
                <div class="clearfix"></div>
                <br />
                <div>
                  <h1><i class="fa fa-paw" style="font-size: 26px;"></i> VELVET!</h1>
                  <p>©2016 All Rights Reserved. VELVET!</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
  </body>
</html>