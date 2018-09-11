<?php session_start(); ?>
<?php require_once '../core/connect.php'; ?>

<?php
  if(!isset($_SESSION['physio_username']) || !isset($_SESSION['physio_password'])){
     header('Location: login.php');
  }
 ?>

<?php include '../div_query/physio_query.php' ?>
<?php include 'insert.php'; ?>



<?php include('../includes/head.php') ?>
    <div class="container home">


       <style media="screen">
         .panel-heading{
           background-color: #5cb85c;
           color: white;
         }

         .badge-success {
            background-color: #5cb85c;

          }

          body{
            margin-top: 30px;
            background-color: #efeff3;
          }
          .badge-warning{
            background-color: yellow;
            color: black
          }
       </style>
 
 <!-- navigation for administration -->

<nav class="navbar navbar-inverse ">
<div class="container">
<div class="navbar-header">
<a class="navbar-brand  brand" href="index.php" title="ProBootstrap:Enlight">Physiology Division</a>
</div>
<?php $in = mysqli_num_rows($physio_in)?>
<div id="navbar-collapse" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Documents~<span class="badge badge-success"><?=$total_physio ?></span></a></li>
          <li><a href="#">Inbox~<span class="badge badge-success"><?=$count_physio2 ?></span></a></li>
          <li><a href="#">Outbox~<span class="badge badge-success"><?=$count_physio1; ?></span></a></li>
          </ul>
</div>
</div>
</nav>
<!-- end of navigation -->

    <div class="row">
      <div class="col-md-3">
        <div class="panel">
          <div class="panel-heading">
              All Documents<span class="badge badge-warning"><?=$total_physio ?></span>
            </div>
            <div class="panel-body">
      <section>
          <div class="list-group tpad">
            <a href="#" class="list-group-item"><span class="badge badge-success"><?=$count_pdf ?></span>PDFS</a>
            <a href="#" class="list-group-item"><span class="badge badge-success"><?=$count_word ?></span>WORD DOCUMENTS</a>
            <a href="#" class="list-group-item"><span class="badge badge-success"><?=$count_ppt ?></span>POWER POINT DOCUMENTS</a>
            <a href="#" class="list-group-item"><span class="badge badge-success"><?=$count_excel ?></span>EXCEL</a>
            <a href="#" class="list-group-item"><span class="badge badge-success"><?=$count_mail ?></span>E-MAIL</a>
            <a href="logout.php" class="list-group-item">logout <span  class="glyphicon glyphicon-lock"></span></a>
          </div>

      </section>
      </div>
      </div>

      </div>
      <div class="col-md-9">
         <div class="panel">
           <div class="panel-heading">
             Physiology
           </div>
           <br>
           <div class="panel-body">
             <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Send Document <span class="glyphicon glyphicon-send"></span> </a></li>
  <li><a data-toggle="tab" href="#menu2">Recieved Documents <span class="glyphicon glyphicon-file"></span> </a></li>
  <li><a data-toggle="tab" href="#menu1">Sent Documents <span class="glyphicon glyphicon-folder-open"></span> </a></li>
</ul>
<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3>Send Document</h3><hr>
      <?=$error."<br>" ?>
    <form class="" action="" method="post">
      <label for="">Sender's Name*</label><br>
      <input type="text"class="form-control" name="sender_name" value="">
      <br>

      <br>
      <label for="">Receipient's Name*</label><br>
      <input type="text"class="form-control" name="receipient_name" value="">
      <br>
      <label for="">Receipient's Division*</label><br>

      <?php
        $all = "SELECT * FROM divisions";
        $que = $db->query($all);
       ?>

      <select class="form-control" name="reciepient_division">
        <?php  while($all_div = mysqli_fetch_assoc($que)): ?>
        <option value="<?=$all_div['division_name'] ?>"><?=$all_div['division_name'] ?></option>
      <?php endwhile; ?>
      </select>
      <br>

      <label for="">Document Introduction*</label><br>
      <textarea name="doc_intro" rows="4" cols="100" class="form-control"></textarea>
      <br>
      <label for="">Document Format*</label><br>
      <select class="form-control" name="doc_format">
         <option value="pdf">pdf</option>
         <option value="word">word document</option>
         <option value="point">power point</option>
         <option value="excel">excel</option>
          <option value="email">Email</option>
      </select>
      <br>
      <input type="submit" name="submit" value="send" class="btn btn-success">
    </form>
  </div>
<!-- confirm Recieved documnet -->
  <div id="menu1" class="tab-pane fade">
    <h4>Physiology Documents</h4><hr>
   <div class="panel">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class=""><h5 class="text-center">OUTBOX</h4></a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
        <div class="panel ">
          <br>
          <div class="panel-body">
        <table class="table table-striped table-condensed">
          <thead>
            <th>Id</th>
            <th>Sender</th>
            <th>S.Division</th>
            <th>Receipient</th>
            <th>R.Division</th>
            <th>time</th>
            <th>date</th>
            <th>letter head</th>
            <th>Type</th>
          </thead>
          <tbody>
            <?php while($P = mysqli_fetch_assoc($physio_out)): ?>
            <tr class="bg-info">
              <td><?=$P['doc_id']?></td>
              <td><?=$P['sender_name']?></td>
              <td><?=$P['sender_division']?></td>
              <td><?=$P['receipient_name']?></td>
              <td><?=$P['reciepient_division']?></td>
              <td><?=$P['cur_time']?></td>
              <td><?=$P['cur_date']?></td>
              <td><?=$P['doc_intro']?></td>
              <td><?=$P['doc_format']?></td>
            <?php endwhile ?>
          </tr>
          </tbody>
        </table>
          </div>
        </div>
    </div>

    </div>
  </div>
  </div>

  <div id="menu2" class="tab-pane fade">
  <h3>Physiology Document</h3><hr>
  <div class="panel-group" id="accordion">
  <div class="panel">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><h4 class="text-center">INBOX</h4></a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="panel ">
          <br>
          <div class="panel-body">
        <table class="table table-striped table-condensed">
          <thead>
            <th>Id</th>
            <th>Sender</th>
            <th>S.Division</th>
            <th>Receipient</th>
            <th>R.Division</th>
            <th>time</th>
            <th>date</th>
            <th>letter head</th>
            <th>Type</th>
          </thead>
          <tbody>
            <?php while($P = mysqli_fetch_assoc($physio_in)): ?>
            <tr class="bg-info">
              <td><?=$P['doc_id']?></td>
              <td><?=$P['sender_name']?></td>
              <td><?=$P['sender_division']?></td>
              <td><?=$P['receipient_name']?></td>
              <td><?=$P['reciepient_division']?></td>
              <td><?=$P['cur_time']?></td>
              <td><?=$P['cur_date']?></td>
              <td><?=$P['doc_intro']?></td>
              <td><?=$P['doc_format']?></td>
            <?php endwhile ?>
          </tr>
          </tbody>
        </table>
          </div>
        </div>
    </div>
    </div>
  </div>

</div>
  </div>
  </div>
</div>

       </div>
       </div>
      </div>
    </div>
    </div>
    <?php include '../includes/footer.php'; ?>
