<?php
  $all = " SELECT * FROM files";
  $que = $db->query($all);
 ?>


 <!-- counting for number of records in the accounts panel -->

  <!-- counting for number of records in adminstration panel -->
  <?php
   $admins_fetch ="SELECT * FROM files WHERE sender_division LIKE 'Adminstration%' ORDER BY id";
   $admins_query=$db->query($admins_fetch);
   $count_admins =mysqli_num_rows($admins_query);
   ?>
   <!-- counting for number of records in audit panel -->
   <?php
    $audit_fetch ="SELECT * FROM files WHERE sender_division LIKE 'Audit%' ORDER BY id";
    $audit_query=$db->query($audit_fetch);
    $count_audit =mysqli_num_rows($audit_query);
    ?>

    <!-- counting for number of records in audit panel -->
    <?php
     $library_fetch ="SELECT * FROM files WHERE sender_division LIKE 'Library%' ORDER BY id";
     $library_query=$db->query($library_fetch);
     $count_library = mysqli_num_rows($library_query);
     ?>


     <!-- count total documents -->
     <?php
     $count = $count_audit + $count_admins + $count_account +$count_library;
      ?>

<?php


 ?>
