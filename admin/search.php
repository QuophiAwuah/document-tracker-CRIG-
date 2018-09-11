<?php require '../core/connect.php'; ?>
<?php session_start()?>
<?php
 if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){
  header('Location: login.php');
}
?>
<?php include 'includes/head.php'; ?>
<?php include '../helpers.php'; ?>
<style>
    .search{
        margin-top: 30px;
        padding: 10px;
        padding-bottom: 50px;
        margin-bottom: 20px;
    }
</style>

<div class="container">
<?php include 'includes/navigation.php'; ?>
	<div class="row">
		<?php include 'includes/sidebar.php'; ?>
		<div class="col-md-9">
			<div class="panel">
				<div class="panel-heading">
					Search Document
					</div>
					<br>
          <h2 class="text-center">Search Document</h2><hr>
					<br>
                 <div class="panel-body>">
                <form class="search" method="post" action="result.php">
                     <input type="text" class="form-control" placeholder="search with id or Name" name="search"><br>
                     <input type="submit" class="form-control btn btn-success" name="submit" value="search file">
                </form>    
            </div>
       </div>
     </div>
	</div>
</div>
?>
<?php include 'includes/footer.php'; ?>
