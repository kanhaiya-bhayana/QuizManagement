<html>
    <head>
        <title>Test_example</title>
    </head>
    <body>
        <a href="admin.php" ><img src="back.png" height="25" width="25" /></a>


        </body>
        </html>

        <?php
        require_once('connect.php');
        $id ="";
        $msg = 0;
        if(isset($_POST['submit2']))
        {
            $checkbox = $_POST['check'];
            for($i=0;$i<count($checkbox);$i++)
            {
            $del_id =$checkbox[$i];
            mysqli_query($cn,"DELETE FROM choices WHERE Subjects='".$del_id."'");
            $msg = "1";
            }
        }
        $result = mysqli_query($cn,"SELECT * FROM choices");
        ?>
        <div>
            <?php
            if($msg==1)
            {
                echo "Record deleted sucessfully." ;
            }
            else{
                echo "Error" ;
            }
        ?>
        </div>
        <form method="POST" action="del_subject.php">
            <table border="1">
                <thead>
                <tr>
                    <th><input type="checkbox" id="checkAl">Select All</th>
                    <th>Subjects</th>
                </tr>
        </thead>
        <?php
        $i=0;
        while($row = mysqli_fetch_array($result))
        {
            ?>
            <tr>
            <td><input type="checkbox" id="checkitem" name="check[]" value="<?php echo $row["Subjects"]; ?>"></td>
            </tr>
        }
        <?php
        $i++;
    }
    ?>
    </table>
    <br>
    <br>
    <button type="submit" name="save">Delete Subject</button>

    <script>
        $("checlAl").click(function() {
            $('input:checkbox').not(this).prop('checked',this.checked);
            
        });
    </script>