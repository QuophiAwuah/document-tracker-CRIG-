<?php
   $division_fetch ="SELECT * FROM divisions WHERE visible ='1'";
   $division_query =$db->query($division_fetch);

 ?>

 <?php include 'includes/counts.php'; ?>
 <style media="screen">

 .badge-success {
    background-color: #5cb85c;
  }
 </style>

<nav class="navbar navbar-inverse ">
<div class="container">
<div class="navbar-header">
<a class="navbar-brand  brand" href="index.php" title="ProBootstrap:Enlight">ADMIN~<small>Crig Documents</small></a>
</div>
<div id="navbar-collapse" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">Home~<span class="badge badge-success"><?=$count_doc?></span></a></li>
          <li><a href="accounts.php">Accounts~<span class="badge badge-success"><?=$count_account ?></span></a></li>
          <li><a href="adminstration.php">Adminstration~<span class="badge badge-success"><?=$count_admins ?></span></a></li>
          <li><a href="audit.php">Audit~<span class="badge badge-success"><?=$count_audit ?></span></a></li>
          <li><a href="library.php">Library~<span class="badge badge-success"><?=$count_library ?></span></a></li>
          <li><a href="SSSU.php">SSSU<span class="badge badge-success"><?=$count_sssu ?></span></a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Divisions<span class="caret "></span></a>
            <ul class="dropdown-menu" role="menu">
              <?php while($division =mysqli_fetch_assoc($division_query)): ?>
              <li><a href="<?=$division['division_name'] ?>.php"><?=$division['division_name'] ?></a></li>
              <?php endwhile; ?>
            </ul>
          </li>

        </ul>
</div>
</div>
</nav>
