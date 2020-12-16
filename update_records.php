<?php
// in this page we are selecting the subject from admin in which subject admin want to update the records...........

require_once('connect.php') ;
$sql ="select *FROM choices";
$result =$cn->query($sql);
if($result->num_rows >0)
{
echo "<h4>Select your subject for update records.</h4>" ;
?>
    <form action="update_records1.php" method="POST">
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