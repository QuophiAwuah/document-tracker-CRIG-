<?php require '../core/connect.php'; ?>
<?php session_start()?>
<?php
 if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){
  header('Location: login.php');
}
?>
<?php include 'includes/head.php'; ?>
<?php include '../helpers.php'; ?>

 <?php
    $fetch_point =  "SELECT * FROM files WHERE doc_format LIKE '%point%' AND deleted = 0";
    $get_point = $db->query($fetch_point);
    $point = mysqli_num_rows($get_point);
   ?>
<div class="container">
<?php include 'includes/navigation.php'; ?>
	<div class="row">
		<?php include 'includes/sidebar.php'; ?>
		<div class="col-md-9">
			<div class="panel">
				<div class="panel-heading">
					Power POint Documents
					</div>
					<br>
          <h2 class="text-center">PowerPoint Documents ---<?=$point?></h2><hr>
					<br>
                 <div class="panel-body>">
            <table class="table table-striped table-condensed">
     <thead>
       <th>edit</th> 
       <th>Id</th>
       <th>Sender</th>
       <th>S.Division</th>
       <th>Receipient</th>
       <th>R.Division</th>
       <th>date</th>
       <th>view</th>
       <th>remove</th>
     </thead>
     <tbody>
       <?php while($result = mysqli_fetch_assoc($get_point)): ?>
       <tr class="bg-info">
         <td><a href="edit.php?edit=<?=$result['id'] ?>" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span> </a></td>
         <td><?=$result['doc_id']?></td>
         <td><?=$result['sender_name']?></td>
         <td><?=$result['sender_division']?></td>
         <td><?=$result['receipient_name']?></td>
         <td><?=$result['reciepient_division']?></td>
         <td><?=$result['cur_date']?></td>
         <td><a href="view_document.php?view=<?=$result['id'];?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-eye-open"></span></a></td>
         <td><a href="accounts.php?delete=<?=$result['id'];?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"></span></a></td>
       <?php endwhile ?>
     </tr>
     </tbody>
   </table>    
            </div>
       </div>
     </div>
	</div>
</div>
?>
<?php include 'includes/footer.php'; ?>
