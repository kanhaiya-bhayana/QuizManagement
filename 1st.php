<?php
require_once('connect.php');
session_start() ;
if(isset($_SESSION['username']))
{
	echo "<h2>Welcome " .$_SESSION['fullname'] ."</h2><br>" ;
?>
<?php

if(isset($_POST['submit']))
{
	$var =$_POST['submit'];
	$sql ="select *FROM $var";
	
    $result =  $cn->query($sql);
    if($result->num_rows > 0)
    {
		echo "<h3> Quiz $var </h3>" ; ?>
	<form action="check_ans.php" method="POST">
		<?php
		$i =0;
		$count = 1;
        while($row = $result->fetch_assoc() )
		{
			echo "Q.".$count ."&nbsp&nbsp&nbsp&nbsp" .$row["col_1"] ;?>
            <br>
			<input type="radio"   name="r[<?php echo $i;?>]" id="id-a" value="<?php echo $row["col_2"];?>"/><?php echo $row["col_2"];?>
			<br>
			<input type="radio"  name="r[<?php echo $i;?>]" id="id-b" value="<?php echo $row["col_3"];?>"/><?php echo $row["col_3"];?>
			<br>
			<input type="radio"  name="r[<?php echo $i;?>]" id="id-c" value="<?php echo $row["col_4"];?>"/><?php echo $row["col_4"];?>
			<br>
			<input type="radio"  name="r[<?php echo $i;?>]" id="id-d" value="<?php echo $row["col_5"];?>"/><?php echo $row["col_5"];?>
			<br>
			<br>
			<input type="hidden" name="correct_ans[<?php $i ; ?>]" value="<?php echo $row["ans"];?>" />
			<br>
			<br>
			<input type="hidden" name="question[<?php $i ; ?>]" value="<?php echo $row["col_1"];?>" />
			<br>
			<br>
			<input type="hidden" name="table_name" value="<?php echo $var ;?>" />
					
			<?php
			$count++ ;
			$i++ ;
		}
		?>
		<input type="hidden" name="i" value="<?php echo $i;?>" />
		<input type="submit" name="next" value="Next" />
	</form>
		<?php
    }
    else{
        echo "Error:" ;
    }
    
}
}

$cn->close();
?>