<?php
// in this page we are selecting the question from admin which question admin want to update ...........
require_once('connect.php') ;
$counter =1;

if(isset($_POST['update']))
{
    $r_btn =$_POST['r_btn'] ;
    if(empty($r_btn))
    {
        echo "<script>alert('Please Select Any Subject First!');window.location.href='../test/admin.php';</script>" ;   
    }
    else
    {

   
    echo "<h5>Select the question in quiz $r_btn you want to update...</h5>" ;
    $query = "select *FROM $r_btn";
    $res =$cn->query($query);
    if($res->num_rows > 0)
    {
        while($row =$res->fetch_assoc())
        {
            echo "Q.".$counter."&nbsp;". $row["col_1"] ;
            ?>
            <form action="finnaly_update.php" method="POST">
            <input type="radio" name="r_btn" value="<?php echo $row["col_1"] ; ?>" />
            
            
            <?php
            echo "<br><br>" ;
           // echo $row["col_2"]."<br>" ;
            //echo $row["col_3"]."<br>" ;
            //echo $row["col_4"]."<br>" ;
            //echo $row["col_5"]."<br>" ;
            //echo $row["ans"]."<br>" ;
            $counter ++;
        }
        ?>
        <input type="hidden" name="storing_table_name" value="<?php echo $r_btn; ?>" />
        <input type="submit" name="finnaly_update" value="Next" />
        </form>
        <?php
    }
    else{
        echo "<script>alert('This is Empty, Please Insert Some Record First!');window.location.href='../test/admin.php';</script>" ;
    }
}
}





?>