<?php require '../core/connect.php'; ?>
<?php session_start(); ?>
<?php if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){
  header('Location: login.php');
} ?>
<?php require 'helpers.php'; ?>
<link rel="stylesheet" href="styles.css">
<?php include 'includes/head.php'; ?>
<link rel="stylesheet" href="styles.css">

<style media="screen">

 nav{
  margin-top: 5%;
 }
 .panel-heading{
   background-color: #5cb85c;
   color: white;
 }
 .activ a{
   background-color: green;
   color: white;
 }

 body{
   margin: 0;
   padding: 0;
   background-color: #efeff3;
   
 }

</style>
<div class="container docu">
  <?php include 'includes/navigation.php'; ?>
    <div class="row">
   <?php include 'includes/sidebar.php'; ?>
   <?php include 'includes/counts.php'; ?>

<!-- delete file temporary -->
   <?php
    if (isset($_GET['delete']) && !empty($_GET['delete'])) {
      $del_id=(int)$_GET['delete'];
      $del_id=sanitize($del_id);
      $sql1="UPDATE files SET deleted =1  WHERE id ='$del_id'";
      $db->query($sql1);
      // header('Location: view.php');
    }

    ?>


    <div class="col-md-9">
   <div class="panel">
     <div class="panel-heading">
      <h5 class="text-center">All Documents</h5>

     </div>
     <div class="panel-body">
   <table class="table table-striped table-condensed">
     <thead>
       <th>Id</th>
       <th>Sender</th>
       <th>s.Division</th>
       <th>Receipient</th>
       <th>R.Division</th>
       <th>time</th>
       <th>date</th>
       <th>view</th>
       <th>remove</th>
     </thead>
     <tbody>
       <?php while($document =mysqli_fetch_assoc($all_documents_query)): ?>
       <tr class="bg-info">
         <td><?=$document['doc_id']; ?></td>
         <td><?=$document['sender_name']; ?></td>
         <td><?=$document['sender_division']; ?></td>
         <td><?=$document['receipient_name']; ?></td>
         <td><?=$document['reciepient_division']; ?></td>
         <td><?=$get_time ?></td>
         <td><?=$get_date ?></td>
         <td><a href="view_document.php?view=<?=$document['id'] ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-eye-open"></span> </a></td>
         <td><a href="index.php?delete=<?=$document['id'];?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"></span></a></td>
       </tr>
     <?php endwhile; ?>
     </tbody>
   </table>
     </div>

   </div>
    </div>
  </div>


</div>

<?php include 'includes/footer.php'; ?>
