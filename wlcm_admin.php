<html>
    <head>
        <title>Test_example</title>
    </head>
    <body>
    <a href="admin.php">admin</a>
        
    </body>
    </html>
    <?php
session_start() ;
if(isset($_SESSION['username']))
{
echo 'Welcome' .$_SESSION['fullname'] ."&nbsp;(Admin)" ."<br>" ;
echo '<a href="logout.php?logout">Logout</a>' ;
}
else
{
    header("location:index.html") ;
}
?>