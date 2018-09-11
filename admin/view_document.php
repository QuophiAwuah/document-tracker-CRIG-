<?php require '../core/connect.php'; ?>
<?php require 'helpers.php'; ?>
<?php session_start()?>
<?php
 if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){
  header('Location: login.php');
}
?>

<?php include 'includes/head.php'; ?>

<style media="screen">
	.push-right1{
		margin-left: 540px;
	}
	.push-right2{
		margin-left: 524px;
	}
	.push-right3{
		margin-left:  523px;
	}
	.push-right4{
		margin-left:  515px;
	}
	.push-right5{
		margin-left:  600px;
	}
	.push-right6{
		margin-left:  600px;
	}
	.push-right7{
		margin-left:  595px;
	}
	.push-right8{
		margin-left:  582px;
	}
	.push-right9{
		margin-left:  578px;
	}
</style>
<div class="container">
<?php include 'includes/navigation.php'; ?>
	<div class="row">

		<?php include 'includes/sidebar.php'; ?>

		<div class="col-md-9">
			<div class="panel">
				<div class="panel-heading">
					Preview Document
					</div>
					<br>
          <h2 class="text-center">Document Details</h2><hr>
					<br>

      <?php include 'includes/counts.php'; ?>
			<div class="panel-body>">
    <div class="list-group ">
      <?php
         if (isset($_GET['view']) && !empty($_GET['view'])) {
          $show_id=(int)$_GET['view'];
          $show_id=sanitize($show_id);


          $view_fetch ="SELECT * FROM files WHERE id ='$show_id'";
          $view_query =$db->query($view_fetch);
          $view = mysqli_fetch_assoc($view_query);
  }
       ?>


      <a href="#" class="list-group-item"><span class=""></span>File ID          <span class="push-right7"><?=$view['doc_id']; ?></span></a>
			<a href="#" class="list-group-item"><span class=""></span>File Type<span class="push-right8"><?=$view['doc_format']; ?></span></a>
			<a href="#" class="list-group-item"><span class=""></span>File Head<span class="push-right9"><?=$view['doc_intro']; ?></span></a>
      <a href="#" class="list-group-item"><span class=""></span>Senders Name          <span class="push-right1"><?=$view['sender_name']; ?></span></a>
      <a href="#" class="list-group-item"><span class=""></span>Sender's Division <span class="push-right2"><?=$view['sender_division']; ?></span></a>
      <a href="#" class="list-group-item"><span class=""></span>Receipient Name   <span class="push-right3"><?=$view['receipient_name']; ?></span></a>
      <a href="#" class="list-group-item"><span class=""></span>Receipient Address<span class="push-right4"><?=$view['reciepient_division']; ?></span></a>
      <a href="#" class="list-group-item"><span class=""></span>Time              <span class="push-right5"><?=$view['cur_time']; ?></span></a>
      <a href="#" class="list-group-item"><span class=""></span>Date              <span class="push-right6"><?=$view['cur_date']; ?></span></a>
    </div>
		<br>
		<br>
		<!-- </div> -->
			<!-- </div> -->
		</div>
		</div>
		</div>
	</div>
</div>

<?php include 'includes/footer.php'; ?>
