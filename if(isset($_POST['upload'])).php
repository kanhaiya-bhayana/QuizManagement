if(isset($_POST['upload']))
{
    
    
    $file = $_FILES['csvfile']['tmp_name'] ;
    $handle =fopen($file,"r") ;
    //$count = mysqli_num_rows($handle) ;
    

    $i =0;

    while(($content =fgetcsv($handle,1000,","))!==FALSE)
    {
        if($i)
        {
            $ques =$content[0] ;
            $opt1 =$content[1] ;
            $opt2 =$content[2] ;
            $opt3 =$content[3] ;
            $opt4 =$content[4] ;
            $ans =$content[5] ;
            echo $ques."<br>" ;
            echo $opt1."<br>" ;
            echo $opt2."<br>" ;
            echo $opt3."<br>" ;
            echo $opt4."<br>" ;
            echo $ans."<br>" ;
            //$query =mysqli_query($cn,"INSERT INTO $t_n (col_1 NOT NULL,col_2 NOT NULL,col_3 NOT NULL,col_4 NOT NULL,col_5 NOT NULL,ans NOT NULL) VALUES ('$ques','$opt1','$opt2','$opt3','$opt4','$ans') ") ;
            $query =mysqli_query($cn,"INSERT INTO $t_n (col_1,col_2,col_3,col_4,col_5,ans) VALUES ('$ques','$opt1','$opt2','$opt3','$opt4','$ans') ") ;
            //mysqli_query($cn,$query) ;
        }
        $i++ ;
    }
    /*
    if($query ===TRUE)
    {
        echo "<script>alert('File Uploaded Successfully!');window.location.href='../test/admin.php';</script>" ;
    }
    else
    {
       // echo "<script>alert('Error, Try Again ! (Please Follow The Sample File..!!)');window.location.href='../test/admin.php';</script>" ;
       echo "Error" ;
    }
*/

}