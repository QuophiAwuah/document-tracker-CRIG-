<?php include '../core/connect.php'; ?>

<!-- get all pdfs -->
<?php
 $pdf_fetch="SELECT * FROM files WHERE (sender_division LIKE '%Records%' OR reciepient_division LIKE '%Records%') AND (doc_format LIKE '%pdf%' AND deleted =0 )";
 $pdf_que =$db->query($pdf_fetch);
 $count_pdf =mysqli_num_rows($pdf_que);
 ?>
<!--  get all word documents-->
 <?php
  $word_fetch="SELECT * FROM files WHERE (sender_division LIKE '%Records%' OR reciepient_division LIKE '%Records%') AND (doc_format LIKE '%word%' AND deleted =0 )";
  $word_que =$db->query($word_fetch);
  $count_word =mysqli_num_rows($word_que);
  ?>

<!--  get all power point document-->
  <?php
   $ppt_fetch="SELECT * FROM files WHERE (sender_division LIKE '%Records%' OR reciepient_division LIKE '%Records%') AND (doc_format LIKE '%point%' AND deleted =0 )";
   $ppt_que =$db->query($ppt_fetch);
   $count_ppt =mysqli_num_rows($ppt_que);
   ?>
<!-- get all excel DOCUMENTS -->
   <?php
    $excel_fetch="SELECT * FROM files WHERE (sender_division LIKE '%Records%' OR reciepient_division LIKE '%Records%') AND (doc_format LIKE '%excel%' AND deleted =0 )";
    $excel_que =$db->query($excel_fetch);
    $count_excel =mysqli_num_rows($excel_que);
    ?>

    <!-- get al  emails -->
    <?php
     $mail_fetch="SELECT * FROM files WHERE (sender_division LIKE '%Records%' OR reciepient_division LIKE '%Records%') AND (doc_format LIKE '%email%' AND deleted =0 )";
     $mail_que =$db->query($mail_fetch);
     $count_mail =mysqli_num_rows($mail_que);
     ?>

  <!--  get total outbox-->
  <?php
   $rec_fetch ="SELECT * FROM files WHERE sender_division LIKE '%Records%' AND deleted = '0' ORDER BY id";
   $rec_out=$db->query($rec_fetch);
   $count_rec1 =mysqli_num_rows($rec_out);
   ?>
<!-- get inbox -->
   <?php
    $rec_inbox ="SELECT * FROM files WHERE reciepient_division LIKE '%Records%' and deleted =0  ORDER BY id";
    $rec_in=$db->query($rec_inbox);
    $count_rec2=mysqli_num_rows($rec_in);
    ?>


<!--  get total document in accounts-->
<?php
   $total_rec=$count_rec1 + $count_rec2;
 ?>


  <!--  get all dropdown divisions-->
 <?php
 $all_div ="SELECT * FROM divisions WHERE visible = 1 ";
 $division_query=$db->query($all_div);

  ?>
