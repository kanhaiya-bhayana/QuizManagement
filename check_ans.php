<?php
error_reporting(0) ;
require_once('connect.php');
session_start() ;
?>
<center>
<?php
if(isset($_SESSION['username']))
{
echo "<h2>Welcome " .$_SESSION['fullname'] ."</h2><br>" ;
$uname = $_SESSION['fullname'] ;
}
?>

<?php
if(isset($_POST['next']))
{
	$count_ans = count($_POST['r']) ;
		$count_que = count($_POST['question']);
		$table_name =$_POST['table_name'] ;
		date_default_timezone_set('Asia/Kolkata');
		$current_date = date("Y-m-d H:i:s");
		
		echo "<h2>Quiz:".$table_name."</h2>"."<br>" ;
	if(empty($_POST['r']))
	{
		echo "You Attemped: 0 " . " Out of: ".$count_que ."<br>";
	}
	elseif(!empty($_POST['r']))
	{
		
		//echo "You Attemped: ". $count_ans . " Out of: ".$count_que ."<br>";
		echo "<br>";
	}
	
	$count = 1;
	$i = 0;
	$u_s = 0;
	$j = $_POST['i'];
	$que = $_POST['question'] ;
		$u_a = $_POST['r'] ;
		$c_a = $_POST['correct_ans'] ;
		?>
		<table border="1" cellpadding="5" cellspacing="0">
		<thead>
			<tr>
				<th>Q . No</th>
				<th>Questions</th>
				<th>Your Answer</th>
				<th>Correct Answer</th>
			</tr>
		</thead>
		<tbody>
			<?php
	while($i<$j)
	{
        
		if($u_a[$i] == '')
		{
			$u_a[$i] = 'Not attempt' ;
		}
		
		if($u_a[$i] == $c_a[$i]){
			$u_s++ ;
		}
		?>
            <tr>
				<td><?php echo $count ;?></td>
				<td><?php echo $que[$i] ; ?></td>
                <td><?php echo $u_a[$i] ;?></td>
                <td><?php echo $c_a[$i] ;?></td>
            </tr>
		<?php		
		$i++ ;
		$count++ ;
	}
	?>
	</tbody>
    </table>
	<?php
	//echo "Your Score is: ".$u_s ."<br>" ;
	$sql =mysqli_query($cn,"INSERT INTO result (user_name,quiz_name,date_time,total_questions,user_attempt,total_score) VALUES ('$uname','$table_name','$current_date','$count_que','$count_ans','$u_s')") ;
	
    
    
    /*$question =array($_POST['question[<?php --$count ; ?>]']) ;
    $u_ans =array($_POST['r1[<?php --$count ; ?>]']);
    $c_ans =array($_POST['correct_ans[<?php --$count ; ?>]']) ;
    $table_name =array($_POST['table_name[<?php --$count ; ?>]']) ;
    echo "User Answer:" .$u_ans."<br>" ;
    echo "Correct Answer:".$c_ans."<br>" ;
    echo "Table name:".$table_name."<br>" ;
*/
}

    
?>

<table border="1" cellspacing="10" cellpadding="10">
<tr >
	<td colspan="2"><h3 align="center"> Result</h3> </td></tr>
	<tr> <td>
	<h3>Total Questions:</h3>
</td>
<td> <?php echo "<h3>".$count_que."</h3>" ?> </td>

</tr>
<tr> <td>
	<h3>You Attempted:</h3>
</td>
<td> <?php echo "<h3>".$count_ans ."</h3>" ?> </td>

</tr>
<tr> <td>
	<h3>Correct Answers:</h3>
</td>
<td> <?php echo "<h3>".$u_s ."</h3>" ?> </td>

</tr>
<tr> <td>
	<h3>Your Total Score:</h3>
</td>
<td> <?php echo "<h3>".$u_s."</h3>" ; ?> </td>

</tr>
</tabel>

</center>
<?php
echo "<a href='wlcmuser.php'>Back</a>"."<br>";

echo "<a href='index.php'>Logout</a>";
$cn->close();
?>
