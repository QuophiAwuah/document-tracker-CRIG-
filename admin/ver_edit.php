
<?php include '../core/connect.php'; ?>
<?php include '../helpers.php'; ?>

 <?php
 $error ="";
$success ="";

    if (isset($_POST['submit'])) {
      if(empty($_POST['sender_name'])){
        $error ="<p style='color:red;'>Sender Name is required</p>";
      }
       else
      if(empty($_POST['reciepient_name'])){
        $error ="<p style='color:red;'>Receipient Name is required</p>";
      }
        else
      if(empty($_POST['reciepient_division'])){
        $error ="<p style='color:red;'>reciepient division is required</p>";
      }
   else
      if(empty($_POST['doc_intro'])){
        $error = "<p style='color:red;'>Document Introduction is required</p>";
      }

          if(empty($error)){
        $doc_id =sanitize($_POST['doc_id']);
        $id =sanitize($_POST['id']);
        $sender_name =sanitize($_POST['sender_name']);
        $sender_division ="VAM Clinic";
        $receipient_name =sanitize($_POST['reciepient_name']);
        $receipient_division =sanitize($_POST['reciepient_division']);
        $doc_intro=sanitize($_POST['doc_intro']);
        $doc_format=sanitize($_POST['doc_format']);
        $get_date =(new DateTime('now'))->format('Y-m-d');
        $get_time =date_create('now')->format('H:i:a');
        
              echo $doc_id;
              echo $id;
              echo $sender_name;
              echo $sender_division;
              echo $receipient_name;
              echo $receipient_division;
//            
//      $edit_file = "UPDATE `files` SET `sender_name` = '$sender_name',
//                                      `sender_division` = '$sender_division', 
//                                      `receipient_name` = '$receipient_name', 
//                                      `reciepient_division` = '$receipient_division',
//                                      `doc_format` ='$doc_format',
//                                      `doc_intro` ='$doc_intro',
//                                      `cur_date` ='$get_date',
//                                      `cur_time` ='$get_time'
//                                       WHERE `id` = $id AND `doc_id`=$doc_id"; 
              
                }
//                $db->query($edit_file);          
        }   
//              header('Location: index.php');

 ?>
