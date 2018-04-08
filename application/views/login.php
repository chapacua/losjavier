<!DOCTYPE html>
<html>
    <head>
        <!--Assets-->
        <!-- Reset-->
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
        <script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/andytran/pen/GJOBZj?limit=all&page=8&q=login" />
        <!-- Boostrap css 3.0 -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <!-- Fuentes -->
        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'><link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'><link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <!-- Css propio -->
        <link rel="stylesheet" href="<?php echo base_url("application/views/public/css/loginStyle.css"); ?>">

    </head>
    <body>
      <div class="container">
        <div class="info">
          <h1>Premios Javier</h1><span><i class="fa fa-heart"></i></span>
        </div>
      </div>
      <div class="form">
        <div class="thumbnail"><img src="<?php echo base_url("application/views/public/img/oscar.png"); ?>"/></div>
        <?php echo form_open('login/ingresar', 'class="login-form" id="loginForm"');?>
          <input type="text" placeholder="Ingresa tú código" name="codigo"/>
          <button type="submit">Ingresar</button>
        <?php echo form_close(); ?>
      </div>
      <!-- Jquery -->
      <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <!-- Boostrap js 3.0 -->
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
      <!-- Sweet Alert -->
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <!-- JS propio -->
      <script src="<?php echo base_url("application/views/public/js/loginJs.js"); ?>"></script>
    </body>
</html>