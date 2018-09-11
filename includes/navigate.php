

<?php include '../div_query/acc_query.php' ?>
<?php include '../div_query/aud_query.php' ?>

<nav class="navbar navbar-inverse ">
<div class="container">
<div class="navbar-header">
<a class="navbar-brand  brand" href="index.php" title="ProBootstrap:Enlight">ACCOUNTS~Records</a>
</div>
<div id="navbar-collapse" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          <li><a href="records.php">Records<span class="badge badge-success"><?=$count_acc1 ?></span></a></li>
          <li><a href="audit.php">Audit~<span class="badge badge-success"><?=$aud_count ?></span></a></li>
          <li><a href="library.php">Library~<span class="badge badge-success">2</span></a></li>
          <li><a href="#sssu.php">SSSU<span class="badge badge-success">20</span></a></li>
          <li><a href="library.php">Plant Breeding~<span class="badge badge-success">10</span></a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Divisions<span class="caret "></span></a>
            <ul class="dropdown-menu" role="menu">
              <?php while($division =mysqli_fetch_assoc($division_query)): ?>
              <li><a href="<?=$division['division_name'] ?>.php"><?=$division['division_name'] ?>~<span class="badge push-left">38</span></a></li>
              <?php endwhile; ?>
            </ul>
          </li>
        </ul>
</div>
</div>
</nav>
