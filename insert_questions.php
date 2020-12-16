<?php
require_once('connect.php') ;
error_reporting(0);
//session_start();

?>
<html>
    <head>
        <title>Test_example</title>
    </head>
    <body>
    <?php

if(isset($_POST['submit']))
{
    $var2 =$_POST['r1'] ;

if(empty($var2))
{
    echo "<script>alert('Please Select Any Subject First!');window.location.href='../test/admin.php';</script>" ;
}
}
if(isset($_POST['submit_insert']))
{
	$sub =$_POST['sub'];
    $ques =$_POST['ques'];
    $o1 =$_POST['o1'];
    $o2 =$_POST['o2'];
    $o3 =$_POST['o3'];
    $o4 =$_POST['o4'];
    $ans =$_POST['ans'] ;
    
   $sql = mysqli_query($cn,"INSERT into $sub (col_1,col_2,col_3,col_4,col_5,ans) values ('$ques','$o1','$o2','$o3','$o4','$ans')") ;
   
   
    if($sql === TRUE){
        echo "<script>alert('Question inserted successfully!');window.location.href='../test/admin.php';</script>" ;
    }
    else{
        echo "<script>alert('Error, Try Again !');window.location.href='../test/admin.php';</script>" ;
    }
}
$cnt ="SELECT COUNT(*) AS count FROM $var2" ;
$res =mysqli_query($cn,$cnt) ;
while($row = mysqli_fetch_assoc($res))
{
    $output = $row['count'];
}
?>
        <a href="admin.php" ><img src="back.png" height="25" width="25" /></a>
        <h3>Insert questions: <?php echo $var2 ; ?></h3>
        <label>Existing Questions: <?php echo $output ;?></label>
 <form method="POST" action="insert_questions.php"><br><br>
	<input type="hidden" name="sub" value="<?php echo $var2 ?>"/><br>
    <label>Write question: </label>
    <input type="text" required="" name="ques"/><br>
    <label>Option 1 </label>
    <input type="text" required="" name="o1" /><br>
    <label>Option 2 </label>
    <input type="text" required="" name="o2" /><br>
    <label>Option 3</label>
    <input type="text" required="" name="o3" /><br>
    <label>Option 4 </label>
    <input type="text" required="" name="o4" /><br>
    <label>Answer </label>
    <input type="text" required="" name="ans" /><br>
    <input type="submit" name="submit_insert" value="Insert" /><br>
    </form>

<h3>OR</h3>
<form enctype="multipart/form-data" action="insert_csv.php" method="POST" >
<h4>Upload Only CSV File</h4>
<input type="hidden" name="table_name" value="<?php echo $var2 ; ?>"/><br>
<input type="file" name="csvfile"><br>
<input type="submit" name="upload" value="Upload" /><br>
<a href="book.csv"> Download Sample File</a>
</form>



</body>
</html>