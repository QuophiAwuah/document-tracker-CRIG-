
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
      if(empty($_POST['receipient_name'])){
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

        function generatePIN($digits = 4){
            $i = 0; //counter
            $pin = ""; //our default pin is blank.
            while($i < $digits){
                //generate a random number between 0 and 9.
                $pin .= mt_rand(0, 9);
                $i++;
            }
            return $pin;
        }

        $pin = generatePIN(3);
        // echo  "doc".$pin;

        $fileID ="doc".$pin;
        $sender_name =sanitize($_POST['sender_name']);
        $sender_division ="Directorate";
        $receipient_name =sanitize($_POST['receipient_name']);
        $receipient_division =sanitize($_POST['reciepient_division']);
        $doc_intro=sanitize($_POST['doc_intro']);
        $doc_format=sanitize($_POST['doc_format']);
        $get_date =(new DateTime('now'))->format('Y-m-d');
        $get_time =date_create('now')->format('H:i:a');

        $insertQ ="INSERT INTO files(doc_id,sender_name,sender_division,receipient_name,reciepient_division,doc_format,doc_intro,cur_time,cur_date)VALUES('$fileID','$sender_name','$sender_division','$receipient_name','$receipient_division','$doc_format','$doc_intro','$get_time','$get_date')";
        $ins =$db->query($insertQ);

        if(!$ins){
          echo "failed";
        }else
        {
          header('Location: index.php');
        }
          }
      }

    

 ?>
