<!--JavaScript - Select/Unselect (Check/Uncheck) all CheckBoxes on Button Click.-->
<?php

require_once('connect.php') ;
$i =0;
$q =1;
?>
<html>
	<head>
		<title>Example</title>
	</head>
<body>
<a href="admin.php" ><img src="back.png" height="25" width="25" /></a><br>
<?php
echo "Working <br>" ;
if(isset($_POST['update']))
{
    $t_name=$_POST['r_btn'];
    if(empty($t_name))
    {
        echo "<script>alert('Please Select Any Subject First!');window.location.href='../test/admin.php';</script>" ;
    }
else
{
?>
<center>
    <h1>Select Questions First From Quiz <?php echo $t_name; ?></h1><br>
<form action="finally_delete.php" method="POST">
    <table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
        <th>Select Checkbox</th>
            <th>Q . No</th>
            <th>Questions</th>
            <th>Option 1</th>
            <th>Option 2</th>
            <th>Option 3</th>
            <th>Option 4</th>
            <th>Answers</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $query=mysqli_query($cn,"select *FROM $t_name");
            
            while($row = mysqli_fetch_array($query))
            {?>
            <tr>
            <td><input type="checkbox" name="chkbox[]" value="<?php echo $row["col_1"] ; ?>" /></td>
                <td><?php echo $q ; ?></td>
                <td><?php echo $row["col_1"] ; ?></td>
                <td><?php echo $row["col_2"] ; ?></td>
                <td><?php echo $row["col_3"] ; ?></td>
                <td><?php echo $row["col_4"] ; ?></td>
                <td><?php echo $row["col_5"] ; ?></td>
                <td><?php echo $row["ans"] ; ?></td>
                
            </tr>
        <?php
        $q++;
            }
        ?>
    </tbody>
        </table><br><br>
        <input type="submit" name="submit" value="DELETE" />
   <input type="hidden" name="tname" value="<?php echo $t_name ;?>" />
        </form>
        </center>
        <?php
}
}

?>
</body>
</html>
