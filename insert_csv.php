<a href="admin.php" ><img src="back.png" height="25" width="25" /></a><br>
<?php
require_once('connect.php') ;
$flag =0;
if(isset($_POST['table_name']))
{
    $t_n = $_POST['table_name'] ;
   // echo $t_n ;
    //echo $table_name ;
}
if(isset($_POST['upload']))
{
    $t_n = $_POST['table_name'] ;
    $file = $_FILES['csvfile']['tmp_name'] ;
    $handle =fopen($file,"r") ;
    $i =0;
    $j =0;
    echo $t_n ;
    while(($content =fgetcsv($handle,1000,","))!==FALSE)
    {
        if($i)
        {
            if(!empty($content[0]) && !empty($content[1]) && !empty($content[2]) && !empty($content[3]) && !empty($content[4]) && !empty($content[5]))
            {
                $ques =$content[0] ;
                $opt1 =$content[1] ;
                $opt2 =$content[2] ;
                $opt3 =$content[3] ;
                $opt4 =$content[4] ;
                $ans =$content[5] ;
                $query =mysqli_query($cn,"INSERT INTO $t_n (col_1,col_2,col_3,col_4,col_5,ans) VALUES ('$ques','$opt1','$opt2','$opt3','$opt4','$ans') ") ;
                
            }
            else
            {
                //for($j=0;$j<$i;$j++)
                //{
                    $left_questions[$j] =$content;
                   $j++;
               // }
                //print_r($left_questions) ;
                //echo "<br>" ;
               $flag =1;
                //echo "Your left any field empty in your CSV file, Please check the file you uploaded". "<br>" ;  
                
           } 

        }
             $i++ ;
    }
           if($flag ==1)
              {
               echo "All are inserted successfully else this"."<br>" ;
               echo "<pre>";
               print_r($left_questions) ;
               echo "</pre>";
               //echo "<br>" ;
             }
             else
             {
                echo "All are inserted  successfully." ;
             }
            

}
?>