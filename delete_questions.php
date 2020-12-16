<a href="admin.php" ><img src="back.png" height="25" width="25" /></a><br>
<?php
require_once('connect.php') ;
//echo "working" ;
$sql ="select *FROM choices";
$result =$cn->query($sql);
if($result->num_rows >0)
{
echo "<h4>Select your subject for Delete records.</h4>" ;
?>
    <form action="delete_questions1.php" method="POST">
    <?php
    while($row =$result->fetch_assoc())
    {
    ?>
        <input type="radio" name="r_btn" value="<?php echo $row["Subjects"] ; ?>" /><?php echo $row["Subjects"] ; ?>
        <br><br>
    <?php
        
    }
    ?>
   
    <input type="submit" name="update" value="Next" />
    </form>

    <?php
}





?>