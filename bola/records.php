
<?php require_once 'core/connect.php'; ?>
<?php include 'helpers.php'; ?>
<?php include 'div_query/acc_query.php' ?>


<?php include('includes/head.php') ?>
    <div class="container home">


       <style media="screen">
         .panel-heading{
           background-color: #5cb85c;
           color: white;
         }

         .badge-success {
            background-color: #5cb85c;
          }
       </style>

    <?php include 'includes/navigate.php' ?>

    <div class="row">

      <div class="col-md-3">
        <div class="panel">
          <div class="panel-heading">
              All Documents<span class="badge badge-danger"><?=$total_acc?></span>
            </div>
            <div class="panel-body">
      <section>
          <div class="list-group tpad">
            <a href="#" class="list-group-item"><span class="badge badge-success"><?=$count_pdf ?></span>PDFS</a>
            <a href="#" class="list-group-item"><span class="badge badge-success"><?=$count_word ?></span>WORD DOCUMENTS</a>
            <a href="#" class="list-group-item"><span class="badge badge-success"><?=$count_ppt ?></span>POWER POINT DOCUMENTS</a>
            <a href="#" class="list-group-item"><span class="badge badge-success"><?=$count_excel ?></span>EXCEL</a>
            <a href="#" class="list-group-item"><span class="badge badge-success"><?=$count_mail ?></span>E-MAIL</a>
          </div>

      </section>
      </div>
      </div>

      </div>
      <div class="col-md-9">
         <div class="panel">
           <div class="panel-heading">
             ACCOUNTS~Records
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
    <form class="" action="val_records.php" method="post">

      <label for="">Sender's Name*</label><br>
      <input type="text"class="form-control" name="sender_name" value="">
      <br>
      <label for="">Sender's Division*</label><br>
      <?php
        $all = "SELECT * FROM divisions";
        $que = $db->query($all);
       ?>

      <select class="form-control" name="sender_division">
        <?php  while($all_div = mysqli_fetch_assoc($que)): ?>
        <option value="<?=$all_div['division_name'] ?>"><?=$all_div['division_name'] ?></option>
      <?php endwhile; ?>
      </select>

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
    <h4>Records Documents</h4><hr>
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
            <?php while($accounts = mysqli_fetch_assoc($accounts_query)): ?>
            <tr class="bg-info">
              <td><?=$accounts['doc_id']?></td>
              <td><?=$accounts['sender_name']?></td>
              <td><?=$accounts['sender_division']?></td>
              <td><?=$accounts['receipient_name']?></td>
              <td><?=$accounts['reciepient_division']?></td>
              <td><?=$accounts['cur_time']?></td>
              <td><?=$accounts['cur_date']?></td>
              <td><?=$accounts['doc_intro']?></td>
              <td><?=$accounts['doc_format']?></td>
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
<!-- all documents in records -->
  <div id="menu2" class="tab-pane fade">
  <h3>Records Document</h3><hr>
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
            <?php while($account = mysqli_fetch_assoc($accounts_in)): ?>
            <tr class="bg-info">
              <td><?=$account['doc_id']?></td>
              <td><?=$account['sender_name']?></td>
              <td><?=$account['sender_division']?></td>
              <td><?=$account['receipient_name']?></td>
              <td><?=$account['reciepient_division']?></td>
              <td><?=$account['cur_time']?></td>
              <td><?=$account['cur_date']?></td>
              <td><?=$account['doc_intro']?></td>
              <td><?=$account['doc_format']?></td>
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
    <?php include 'includes/footer.php'; ?>
