<?php require '../core/connect.php'; ?>
<?php session_start()?>
<?php
 if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){
  header('Location: login.php');
}
?>
<?php include 'includes/head.php'; ?>

<?php  
   if(isset($_GET['edit'])){
       $edit_id = $_GET['edit'];
        $doc = "SELECT * FROM files WHERE (deleted ='0' AND id ='$edit_id')";
        $doc_que = $db->query($doc);
       $docs =mysqli_fetch_assoc($doc_que);
   }  
?>

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
        $sender_division =sanitize($_POST['sender_division']);
        $receipient_name =sanitize($_POST['reciepient_name']);
        $receipient_division =sanitize($_POST['reciepient_division']);
        $doc_intro=sanitize($_POST['doc_intro']);
        $doc_format=sanitize($_POST['doc_format']);
        $get_date =(new DateTime('now'))->format('Y-m-d');
        $get_time =date_create('now')->format('H:i:a');
        
             
            
            $ed = "UPDATE `files` SET `sender_name` = '$sender_name',
                                      `sender_division` = '$sender_division', 
                                      `receipient_name` = '$receipient_name', 
                                      `reciepient_division` = '$receipient_division',
                                      `doc_format` ='$doc_format',
                                      `doc_intro` ='$doc_intro',
                                      `cur_date` ='$get_date',
                                      `cur_time` ='$get_time'
                                       WHERE `id` = $id"; 
              
                }
                   $db->query($ed);  
                   header('Location: index.php');

        }   

 ?>

<div class="container">
<?php include 'includes/navigation.php'; ?>
	<div class="row">
		<?php include 'includes/sidebar.php'; ?>
		<div class="col-md-9">
			<div class="panel">
				<div class="panel-heading">
					Edit Document
					</div>
					<br>
          <h2 class="text-center">Edit Document</h2><hr>
					<br>
                 <div class="panel-body>">
               <!-- display an error message here -->
                     <?=$error ?>
                 <form method="post" action="">
                 <div class="col-md-3 col-md-offset-1 ">
                 <label>Document ID*</label>
                    <input type="text" class="form-control" value="<?=((isset($docs['doc_id']))?$docs['doc_id'] : '') ?>" disabled name="doc_id"> 
                    <input type="hidden" class="form-control" value="<?=((isset($docs['id']))?$docs['id'] : '') ?>" name="id"> 
                    <input type="hidden" class="form-control" value="<?=((isset($docs['doc_id']))?$docs['doc_id'] : '') ?>" name="doc_id">     
                 </div>
                 <div class="col-md-6 col-md-offset-1 ">
                 <label>Sender's Name*</label>
                 <input type="text" class="form-control" name="sender_name" value="<?=((isset($docs['sender_name']))?$docs['sender_name'] : '') ?>">    
                 </div>
                 <div class="clearfix"></div>
                     
                 <div class="col-md-5 col-md-offset-1">
                 <label>sender's Division*</label>
                 <?php
                  $all = "SELECT * FROM divisions";
                  $que = $db->query($all);
                    ?>
                    <select class="form-control" name="sender_division">
                    <?php  while($all_div = mysqli_fetch_assoc($que)): ?>
                    <option value="<?=((isset($docs['sender_division']))?$docs['sender_division'] : '') ?>"><?=((isset($docs['sender_division']))?$docs['sender_division'] : '') ?></option>
                    <option value="<?=$all_div['division_name'] ?>"><?=$all_div['division_name'] ?></option>
                    <?php endwhile; ?>
                    </select>
                 </div>
                     
                 <div class="col-md-4 col-md-offset-1">
                 <label>Receipient Name*</label>
                  <input type="text" class="form-control" name="reciepient_name" value="<?=((isset($docs['receipient_name']))?$docs['receipient_name'] : '') ?>">
                 </div>
                 <div class="clearfix"></div> 
                     
                 <div class="col-md-3 col-md-offset-1">
                 <label>File Type*</label>
                     <select class="form-control" name="doc_format">
                     <option value="<?=((isset($docs['doc_format']))?$docs['doc_format'] : '') ?>"><?=((isset($docs['doc_format']))?$docs['doc_format'] : '') ?></option>
                     <option value="pdf">pdf</option>
                     <option value="word">word document</option>
                     <option value="point">power point</option>
                     <option value="excel">excel</option>
                      <option value="email">Email</option>
                     </select>
                 </div>
                     
                 <div class="col-md-6 col-md-offset-1">
                 <label>Receipient Division*</label>
                 <?php
                  $all = "SELECT * FROM divisions";
                  $que = $db->query($all);
                    ?>
                    <select class="form-control" name="reciepient_division">
                    <?php  while($all_div = mysqli_fetch_assoc($que)): ?>
    <option value="<?=((isset($docs['reciepient_division']))?$docs['reciepient_division'] : '') ?>"><?=((isset($docs['reciepient_division']))?$docs['reciepient_division'] : '') ?></option>
                    <option value="<?=$all_div['division_name'] ?>"><?=$all_div['division_name'] ?></option>
                    <?php endwhile; ?>
                    </select>
                 </div>
                 <div class="clearfix"></div> 
                     
                 <div class="col-md-10 col-md-offset-1">
                 <label>Document Introduction*</label>
                 <textarea class="form-control" cols="3" rows="4" name="doc_intro" value="<?=((isset($docs['doc_intro']))?$docs['doc_intro'] : '') ?>"></textarea>    
                 </div>
                 <div class="clearfix"></div> 
                 <br><br><br>
                 <div class="col-md-10 col-md-offset-1">
                 <input type="submit" name="submit" value="Edit File" class="btn btn-success form-control">   
                 </div>
                 <div class="clearfix"></div> 
                 </form>  <br><br>
            </div>
		</div>
		</div>
	</div>
</div>
?>
<?php include 'includes/footer.php'; ?>
