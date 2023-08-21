<?Php session_start();
$conn=mysqli_connect("localhost","root","","todo_app_g317");
$sql = "SELECT * FROM  tasks  ORDER BY id";
$result= mysqli_query($conn,$sql);
?>
<form action="./handletask.php" method="POST">
    <label for="task">Task:</label><br>
    <?php if (isset( $_SESSION['error'])):?>
        <div class=" alert alert-danger text-center">
            <?php echo $_SESSION['error'];

            unset ($_SESSION['error']); 
            ?>
        </div>
    <?php endif ;?>
   
    <input type="text" id="task" name="task"><br>

    <input type="submit" value="Add Task">
    <?php if (isset( $_SESSION['sucess'])):?>
        <div class=" alert alert-danger text-center">
            <?php echo $_SESSION['sucess'];

            unset ($_SESSION['sucess']); 
            ?>
        </div>
    <?php endif ;?>
    
  </form>

</body>
</html>
<link  href="../users.css" rel="stylesheet">
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>CONTENT</th>
            <th>ACTIONS</th>
            <th>ACTIONS</th>
            
        </tr>
    </thead>
    <tbody>
        <?php   while($Row=mysqli_fetch_assoc($result)):?>
        
        <tr>
            <td><?php echo $Row['id'];?></td>
            <td><?php echo $Row['task'];?> </td>
            <td>
                <a href="#">Delete</a>
            </td>
            <td>
                <a href="#">Update</a>
            </td>
           
        </tr>
        <?php endwhile; die;?>
        
    </tbody>
</table>