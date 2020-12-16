<?php
    
        require_once('connect.php');
        session_start() ;
        if(isset($_POST['login']))
        {
            if(empty($_POST['uname']) || empty($_POST['pass']))
            {
                echo "Please fill the following fields!" ;
            }
            else{
                $var = "SELECT *FROM usertable where uname='".$_POST['uname']."' and pass='".$_POST['pass']."'  and u_role='user' ";
                $result = mysqli_query($cn,$var) ;
                $var2 = "SELECT *FROM usertable where uname='".$_POST['uname']."' and pass='".$_POST['pass']."'  and u_role='admin' ";
                $result1 = mysqli_query($cn,$var2) ;
                $var1 = "SELECT fname FROM usertable WHERE uname='".$_POST['uname']."' and pass='".$_POST['pass']."' " ;
                $ans =mysqli_query($cn,$var1) ;
                $fname =mysqli_fetch_assoc($ans)['fname'] ;
                $_SESSION['fullname'] =$fname ;

                
                if(mysqli_fetch_assoc($result))
                {
                    $_SESSION['username'] =$_POST['uname'];
                    header("location:wlcmuser.php");
                }
                elseif(mysqli_fetch_assoc($result1))
                {
                    $_SESSION['username'] =$_POST['uname'];
                    header("location:admin.php");
                }
                else{
                    echo "Wrong input details!" ;
                }
            }
        }
        
        
        
      
      
    