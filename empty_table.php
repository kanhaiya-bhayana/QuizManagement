<?php
require_once('connect.php') ;
$sql ="select *FROM choices";
$result =$cn->query($sql);
if($result->num_rows >0)
{
    echo "<h2>Select your subject first.</h2>" ;
    ?>
    <form action="empty_table.php" method="POST">
    <?php
    while($row =$result->fetch_assoc())
    {
    ?>
        <input type="radio" name="r_btn" value="<?php echo $row["Subjects"] ; ?>" /><?php echo $row["Subjects"] ; ?>
        <br><br>
    <?php
        
    }
    ?>
   
    <input type="submit" name="truncate" value="Empty" />
    </form>

    <?php
}

if(isset($_POST['truncate']))
{
    $r_btn =$_POST['r_btn'] ;
    if(empty($r_btn))
    {
        echo "<script>alert('Please Select Any Subject First!');window.location.href='../test/admin.php';</script>" ;
    }
    else
    {
    $query = "TRUNCATE TABLE $r_btn";
    $res =$cn->query($query);
    if($res === TRUE)
    {
        echo "<script>alert('Record Empty successfully!');window.location.href='../test/admin.php';</script>" ;
    }
    else
    {
        echo "<script>alert('Not  Empty successfully!');window.location.href='../test/admin.php';</script>" ;
    }
}
}

?>