<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
    
<form action="handleLogin.php" method="POST">
<div class="container">
<div  class="row ">
    <div style="border:black solid 1px;" class="col-8">
        <div class="m-auto">
            <div class="col-12 text-center">

                <h1 class="text-center color-waring my-5" >login</h1>
<?php 
if(isset($_SESSION['error'])){
    echo $_SESSION["error"];
    unset($_SESSION['error']);
}
?>



            </div>
            <div class="col-12 text-center p-2">

                <input type="text" name="email" placeholder="email">
            </div>
            <div class="col-12 text-center p-2">

                <input type="password" name="password" placeholder="password">
            </div>
            <div class="col-12 text-center p-2">

                <input type="submit" >
            </div>
        </div>
    </div>
</div>

</div>



</form>










<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>