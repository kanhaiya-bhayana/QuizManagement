<?php
require_once('connect.php') ;
if(isset($_POST['submit']))
{
    
     $questions=count($_POST['chkbox']) ;
     if(empty($questions))
     {
         echo "<script>alert('Error, Please Select At Least One  Question For Delete!');window.location.href='../test/admin.php';</script>" ;
         
     }
     else{

     
    $tname=$_POST['tname'] ;
    echo $tname ;
    $i=0;
    while($i< $questions)
    {
        $key=$_POST['chkbox'][$i];
        $query= "DELETE FROM $tname WHERE col_1 ='$key'" ;
        $rst = $cn->query($query);
        $i++;
    }
    if($rst === TRUE)
    {
        echo "<script>alert('Record Deleted successfully!');window.location.href='../test/admin.php';</script>" ;
    }
    else{
        echo "<script>alert(Some Error has occured, Try Again!');window.location.href='../test/admin.php';</script>" ;
    }      
}
    
}
?>