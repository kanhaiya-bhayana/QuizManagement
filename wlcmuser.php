<?php
session_start() ;
if(isset($_SESSION['username']))
{
    echo "<h2>Welcome " .$_SESSION['fullname'] ."</h2><br>" ;
echo '<a href="logout.php?logout">Logout</a>' ;
}
else
{
    header("location:index.html") ;
}
?>
<html>
    <head>
        <title>Test_example</title>
    </head>
    <body>
        <br>
      <!-- <a href="admin.php">admin</a>-->
        
    </body>
    </html>


<?php

require_once('connect.php');


$sql ="select *FROM choices";
$result =  $cn->query($sql);
if($result->num_rows > 0)
{
    echo "<h3> Your Choices.</h3>" ;?>
    <form action="1st.php" method="POST">
        <?php
    while($row = $result->fetch_assoc() )
    {
        //echo $row;
        ?>
        
        <input type="submit" name="submit" value="<?php echo $row["Subjects"];?>" />
        <br><br>
        <?php
        //$count++ ;
    }?>
    </form>
    <?php
}

?>
