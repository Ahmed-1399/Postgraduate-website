<?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
         $conn=mysqli_connect('localhost','root','','graduation_project');
              if(mysqli_error($conn)){
                   die('Could not Connect MySql Server:' .mysql_error());
                }
                    $sql = "delete from diploma where diploma_id =".$id;
                      $result = mysqli_query($conn, $sql);

                        header("location: adminstration.php");

                  }
              ?>