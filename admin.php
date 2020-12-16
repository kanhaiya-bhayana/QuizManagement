<?php
session_start() ;
if(isset($_SESSION['username']))
{
echo 'Welcome&nbsp;' .$_SESSION['fullname'] ."&nbsp;&nbsp;(Admin)" ."<br>" ;
?>
<html>
    <head>
        <title>Test_example</title>
    </head>
    <body>
        <br><br>
        <form action="add_subject.php" method="POST">
        <button><a href="add_subject.php" >Click here to add new subjects<a/></button>
        </form>
        
       <button><a href="del_subject.php" >Click here to delete any subjects<a/></button><br><br>
    
        
       <button><a href="add_questions.php" >Click here to add questions<a/></button><br><br>
       <button><a href="empty_table.php">Click here to empty the table</a></button><br><br>
       <button><a href="update_records.php">Click here to update the records</a></button><br><br>
       <button><a href="delete_questions.php">Click here to delete the questions</a></button><br><br>
       
    </body>
    </html>
<?php
echo '<a href="logout.php?logout">Logout</a>' ;
}
else
{
    header("location:index.html") ;
}
?>
