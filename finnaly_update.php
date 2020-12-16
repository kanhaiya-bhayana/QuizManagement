<?php
//in this page we are finnaly updating the records............
require_once('connect.php') ;
if(isset($_POST['finnaly_update'])) 
{
    $ques = $_POST['r_btn'] ;
    if(empty($ques))
    {
        echo "<script>alert('Please Select Any question First!');window.location.href='../test/admin.php';</script>" ;
    }
    else
    {
    $table_name=$_POST['storing_table_name'];
    //echo $table_name ;
    echo "Update here in subject $table_name:<br>" ;
    $sql ="select *from $table_name WHERE col_1='$ques'";
    $result=$cn->query($sql);
    if($result->num_rows ==1)
    {
    $row=$result->fetch_assoc();
    echo "<br>"   ;
    echo "Q. &nbsp;".$row["col_1"]."<br>";
    echo "Option 1 &nbsp;".$row["col_2"]."<br>";
    echo "Option 2 &nbsp;".$row["col_3"]."<br>";
    echo "Option 3 &nbsp;".$row["col_4"]."<br>";
    echo "Option 4 &nbsp;".$row["col_5"]."<br>";
    echo "Answer &nbsp;".$row["ans"]."<br><br>";
    }     
}
}
?>
<form action="finnaly_update.php" method="POST">
<input type="hidden" name="question" value="<?php echo $ques; ?>" />
<input type="hidden" name="table_name" value="<?php echo $table_name; ?>" />
<label>Enter New Data Question, Cannot be change:</label><br> <br>
<label>Option 1</label>
<input type="text" name="o1" required="" /><br>
<label>Option 2</label>
<input type="text" name="o2" required="" /><br>
<label>Option 3</label>
<input type="text" name="o3" required="" /><br>
<label>Option 4</label>
<input type="text" name="o4" required="" /><br>
<label>Answer</label>
<input type="text" name="ans" required="" /><br>
<input type="submit" name="submit" /><br>
</form>
<?php
if(isset($_POST['submit'])) 
{
    $question=$_POST['question'] ;
    $tab_name=$_POST['table_name'] ;
    echo $question ;
    echo $tab_name ;
    $o1 = $_POST['o1'] ;
    $o2 = $_POST['o2'] ;
    $o3 = $_POST['o3'] ;
    $o4 = $_POST['o4'] ;
    $ans = $_POST['ans'] ;

    $query = "UPDATE $tab_name SET col_2='$o1', col_3='$o2',col_4='$o3',col_5='$o4',ans='$ans'  WHERE col_1='$question'; ";
    $rst = $cn->query($query);
    if($rst == TRUE)
    {
        echo "<script>alert('Record Updated successfully!');window.location.href='../test/admin.php';</script>" ;
    }
    else{
        echo "<script>alert(Some Error has occured, Try Again!');window.location.href='../test/admin.php';</script>" ;
    }
}
?>