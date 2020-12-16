<html>
    <head>
        <title>Test_example</title>
    </head>
    <body>
        <a href="admin.php" ><img src="back.png" height="25" width="25" /></a>
<?php
require_once('connect.php');
$count = 1;
    $sql ="select *FROM choices";
    $result =  $cn->query($sql);
    if($result->num_rows > 0)
    {
		echo "<h3> Existing subjects:</h3>" ;
		echo "<form>" ;
        while($row = $result->fetch_assoc() )
		{
			//echo $row;
            echo $count ."&nbsp&nbsp&nbsp&nbsp" .$row["Subjects"] ;?>
            <br>
			<?php
			$count++ ;
        }
		echo "</form>" ;
    }
    else{
        echo "Error:" ;
    }
?>

        <form name="myform" action="#" method="POST">
            <label>Enter subject name:</label>
            <label>!Subject name does not contain any spaces:  Example =>  ruby_on_rails, Java_web...  </label>
       <input type="text" name="t1" required="" />
       <input type="submit" name="submit1" value="Add" />
       <input type="reset" name="submit2" value="Reset" />
        </form>
    </body>
    </html>
    

<?php
if(isset($_POST['submit1']))
{
    $text1=$_POST['t1'];
    $var = mysqli_query($cn,"INSERT into choices (Subjects) values ('$text1')") ;
    if($var===TRUE)
    {
        echo "<script>alert('Subject inserted successfully!');window.location.href='../test/admin.php';</script>" ;
    }
    else{
        echo "<script>alert('Error: This subject is already exist!');window.location.href='../test/admin.php';</script>" ;
    }
$sql = "CREATE TABLE $text1 (col_1 Varchar(255) UNIQUE NOT NULL, col_2 Varchar(255) NOT NULL, col_3 Varchar(255) NOT NULL, col_4 Varchar(255) NOT NULL, col_5 Varchar(255) NOT NULL, ans Varchar(255) NOT NULL) " ;
if($cn->query($sql)===TRUE)
{
    echo "Table created successfully" ;
}
else {
    echo "Error in creating table" ;
}
}
$cn->close();
    ?>