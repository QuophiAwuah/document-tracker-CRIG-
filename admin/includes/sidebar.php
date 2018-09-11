<?php include 'includes/counts.php'; ?>
<style media="screen">

         .badge-success {
            background-color: #5cb85c;
          }

          .badge-danger {
             background-color: red;
             color: white;
           }
           .badge-warning {
              background-color: yellow;
              color: black;
            }

</style>
<div class="col-md-3">
  <div class="panel">
    <div class="panel-heading">
        All Documents  <span class="badge badge-warning"><?=$count_doc ?></span>
      </div>
      <div class="panel-body">
<section>

    <div class="list-group tpad">
      <a href="pdf.php" class="list-group-item"><span class="badge badge-success"><?=$pdf ?></span>PDFS</a>
      <a href="word.php" class="list-group-item"><span class="badge badge-success"><?=$word ?></span>WORD DOCUMENTS</a>
      <a href="point.php" class="list-group-item"><span class="badge badge-success"><?=$point ?></span>POWER POINT DOCUMENTS</a>
      <a href="excel.php" class="list-group-item"><span class="badge badge-success"><?=$excel ?></span>EXCEL</a>
      <a href="mail.php" class="list-group-item"><span class="badge badge-success"><?=$mail ?></span>E-MAIL</a>
      <a href="archived.php" class="list-group-item"><span class="badge badge-danger"><?=$count_archive ?></span>Archived Files <span class="glyphicon glyphicon-trash"></span></a>
      <a href="search.php" class="list-group-item"><span class="badge badge-danger"></span>Search File <span class="glyphicon glyphicon-search"></span></a>
      <a href="logout.php" class="list-group-item">LogOut  <span class="glyphicon glyphicon-lock"></span> </a>
      
    </div>

</section>
</div>
</div>
</div>
