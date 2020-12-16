<?php
require_once('connect.php') ;
//session_start();
?>
<html>
    <head>
        <title>Test_example</title>
    </head>
    <body>
        <a href="admin.php" ><img src="back.png" height="25" width="25" /></a>
        <h3>Select your course to insert questions.</h3>

<?php
$sql ="select *FROM choices";
    $result =  $cn->query($sql);
    //$sql ="select FROM choices";
    $result1 =  $cn->query($sql);
   // $result1 =  $cn->query($sql1);
   // $row1= mysqli_num_rows($result1) ;
    if($result->num_rows > 0)
    {
        
        ?>
		<form action="insert_questions.php" method="POST">
        <input type="hidden" name="subm" />
        <?php
        while($row = $result->fetch_assoc() )
		{
			?>
			<input type="radio" name="r1" value="<?php echo $row["Subjects"];?>"/><?php echo $row["Subjects"];?>
        
			<br>
			<br>
			<?php
			//$count++ ;
        }?>
        <input type="submit" name="submit" value="Next" />
		
        </form>
        <?php
    }
    else{
        echo "Error:" ;
    }
   
 

?>
</body>
</html>