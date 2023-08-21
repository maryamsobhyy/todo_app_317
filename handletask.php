<?php
session_start();
$conn = mysqli_connect("localhost","root","","todo_app_g317");
if ($_SERVER['REQUEST_METHOD']=="POST" && (isset($_POST['task']))){
    $task=$_POST['task'];
    if (strlen($task)==0){
        $_SESSION['error'] ="please enter a task ";
        header("location:./task.php");

    }
    else{
    $task=trim(htmlspecialchars(htmlentities($_POST['task'])));
    $sql="INSERT INTO `tasks`(`task`,`user_id`) VALUES ('$task',1)" ;
    $result= mysqli_query($conn,$sql);
    if ( mysqli_affected_rows($conn)==1){
        $_SESSION['sucess']="data inserted sucessfuly";
    };
    header("location:./task.php");
}


}
?>