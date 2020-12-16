<html>
    <head>
        <title>Test_example</title>
    </head>
    <body>
       <form action="index.php" method="POST">
        <label>*Full Name:</label>
           <input type="text" required="" name="f_name" /><br>
        <label>*Username:</label>
           <input type="text" required="" name="uname" /><br>  
        
           <label>*Email:</label>
           <input type="email" required="" name="email" /><br>
           <label>*Phone No:</label>
           <input type="tel" required="" name="mob" /><br>
           <label>Course:</label>
           <input type="text" name="course" /><br>
           <label>*password:</label>
           <input type="password" required="" name="pass" /><br>
           <input type="submit" name="submit" /><br>
           <a href="user_login.html">Login</a>
    
       </form>
        
    </body>
    </html>
    <?php
    require_once('connect.php');
    if(isset($_POST['submit']))
    {
        $f_name =$_POST['f_name'];
        $uname =$_POST['uname'] ;
        $email =$_POST['email'] ;
        $phone =$_POST['mob'] ;
        $course =$_POST['course'] ;
        $pass =$_POST['pass'] ;

        $sql = mysqli_query($cn,"INSERT into usertable (fname,uname,email,phone_no,course,pass,u_role) values ('$f_name','$uname','$email','$phone','$course','$pass','user')") ;
        if($sql ===TRUE)
        {
            echo "<script>alert('Registered successfully!');window.location.href='../test/user_login.html';</script>" ;
        }
        else
        {
            echo "<script>alert('Some error has occured, Try Again!!');window.location.href='../test/index.php';</script>" ;
        }
    }
    ?>