<!DOCTYPE HTML>
<html>
<head>
    <title>SCM system</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="jquery-ui/external/jquery/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>
<body>
<!--header-->
<div class="header-w3l">
    <h1 class="text-primary"> Scrap System Login</h1>
</div>
<!--//header-->

<!--main-->
<div class="main-content-agile">
    <div class="sub-main-w3">
        <div class="error"></div>
        <form id="loginForm">
            <input placeholder="Username" id="Name" name="Name" class="user" type="text" required="" autofocus autocomplete="off"><br>
            <input  placeholder="Password" id="Password" name="Password" class="pass" type="password" required="" autocomplete="off"><br>
            <input type="submit" value="" >
        </form>
    </div>
</div>
<!--//main-->

<!--footer-->
<div class="footer">
    <p>&copy; <?php echo Date('Y'); ?>  All Rights reserved |  Designed By Scrap Group </p>
</div>
<!--//footer-->
<script src="js/loginFunction.js"></script>

</body>
</html>