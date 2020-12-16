<html>
    <head>
        <title>Test_example</title>
    </head>
    <body>
        <a href="admin.php" ><img src="back.png" height="25" width="25" /></a>

<?php
require_once('connect.php');
$count = 1;
//if(isset($_POST['submit']))
//{
    //$var =$_POST['submit'];
    $sql ="select *FROM choices";
    $result =  $cn->query($sql);
    if($result->num_rows > 0)
    {
        echo "<h3>Delete Subjects</h3>" ;
        ?>
		<form action="del_subject.php" method="POST">
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
        <input type="submit" name="submit" value="Delete" />
		
    </form>
        <?php
    }
    else{
        echo "Error:" ;
    }
   
//}

if(isset($_POST['submit']))
{
    $r1 =$_POST['r1'];
    if(empty($r1))
    {
        echo "<script>alert('Please Select Any Subject First!');window.location.href='../test/admin.php';</script>" ;
    }
    else
    {
    $query= "DELETE FROM choices WHERE Subjects = '$r1' " ;
    $query1= mysqli_query($cn,"DROP TABLE $r1 ") ; 

    $rslt =$cn->query($query) ;
    if($rslt === TRUE)
    {
        echo "<script>alert('Subject Deleted successfully!');window.location.href='../test/admin.php';</script>" ;
    }
    else
    {
        echo "<script>alert('Error: Try Again!');window.location.href='../test/admin.php';</script>" ;
    }
}
}
$cn->close();

?>
</body>
</html>