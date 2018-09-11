<!--  view all inserted documents-->
<?php
$all_documents ="SELECT * FROM files WHERE deleted =0 ORDER BY id DESC";
$all_documents_query=$db->query($all_documents);
$count_doc = mysqli_num_rows($all_documents_query);

 ?>

<!-- counting for number of records in the accounts panel -->
<?php
 $accounts_fetch ="SELECT * FROM files WHERE sender_division LIKE 'accounts%' and deleted = 0 ORDER BY id";
 $accounts_query=$db->query($accounts_fetch);
 $count_account =mysqli_num_rows($accounts_query);
 ?>

 <!-- counting for number of records in adminstration panel -->
 <?php
  $admins_fetch ="SELECT * FROM files WHERE sender_division LIKE 'Administration%' and deleted = 0 ORDER BY id";
  $admins_query=$db->query($admins_fetch);
  $count_admins =mysqli_num_rows($admins_query);
  ?>
  <!-- counting for number of records in audit panel -->
  <?php
   $audit_fetch ="SELECT * FROM files WHERE sender_division LIKE 'Audit%' and deleted = 0 ORDER BY id";
   $audit_query=$db->query($audit_fetch);
   $count_audit =mysqli_num_rows($audit_query);
   ?>

   <!-- counting for number of records in audit panel -->
   <?php
    $library_fetch ="SELECT * FROM files WHERE sender_division LIKE 'Library%' and deleted = 0 ORDER BY id";
    $library_query=$db->query($library_fetch);
    $count_library = mysqli_num_rows($library_query);
    ?>

    <!-- counting for total SSSU document -->
    <?php
     $sssu_fetch ="SELECT * FROM files WHERE sender_division LIKE 'SSSU%' AND deleted='0' ORDER BY id";
     $sssu_query=$db->query($sssu_fetch);
     $count_sssu =mysqli_num_rows($sssu_query);
     ?>
 <!--  countign for soil Science-->
     <?php
      $soil_fetch ="SELECT * FROM files WHERE sender_division LIKE 'Soil Science%' AND deleted='0' ORDER BY id";
      $soil_query=$db->query($soil_fetch);
      $count_soil =mysqli_num_rows($soil_query);
      ?>


      <!--  countign for pathology-->
          <?php
           $pat_fetch ="SELECT * FROM files WHERE sender_division LIKE 'Pathology%' AND deleted='0' ORDER BY id";
           $pat_query=$db->query($pat_fetch);
           $count_pat =mysqli_num_rows($pat_query);
           ?>

           <!--  countign for physio-Biochem-->
          <?php
           $physio_fetch ="SELECT * FROM files WHERE sender_division LIKE 'Physio_Biochem%'  AND deleted='0'ORDER BY id";
           $physio_query=$db->query($physio_fetch);
           $count_physio =mysqli_num_rows($physio_query);
          ?>

          <!--  countign for plant breeding-->
            <?php
                 $plant_fetch ="SELECT * FROM files WHERE sender_division LIKE 'Plant Breeding%' AND deleted='0' ORDER BY id";
                 $plant_query=$db->query($plant_fetch);
                 $count_plant =mysqli_num_rows($plant_query);
             ?>

         <!--  countign for Directorate-->
           <?php
                $dir_fetch ="SELECT * FROM files WHERE sender_division LIKE 'Directorate%'  AND deleted='0'ORDER BY id";
                $dir_query=$db->query($dir_fetch);
                $count_dir =mysqli_num_rows($dir_query);
            ?>

            <!--  countign for Security-->
              <?php
                   $sec_fetch ="SELECT * FROM files WHERE sender_division LIKE 'Security%' AND deleted='0' ORDER BY id";
                   $sec_query=$db->query($sec_fetch);
                   $count_sec =mysqli_num_rows($sec_query);
               ?>


           <!--  countign for new products-->
                 <?php
                      $newP_fetch ="SELECT * FROM files WHERE sender_division LIKE 'New Products%'  AND deleted='0'ORDER BY id";
                      $newP_query=$db->query($newP_fetch);
                      $count_newP =mysqli_num_rows($newP_query);
                  ?>

                  <!--  countign for physiology-->
                        <?php
                             $physiology_fetch ="SELECT * FROM files WHERE sender_division LIKE 'Physiology%' AND deleted='0' ORDER BY id";
                             $physiology_query=$db->query($physiology_fetch);
                             $count_physiology =mysqli_num_rows($physiology_query);
                         ?>
                         <!--  countign for plantation->
                               <?php
                                    $plant_fetch ="SELECT * FROM files WHERE sender_division LIKE 'Plantation%'  AND deleted='0'ORDER BY id";
                                    $plant_query=$db->query($plant_fetch);
                                    $count_plant =mysqli_num_rows($plant_query);
                                ?>

                                <!--  countign for General Services-->
                                      <?php
                                           $gen_fetch ="SELECT * FROM files WHERE sender_division LIKE 'General Services%' AND deleted='0' ORDER BY id";
                                           $gen_query=$db->query($gen_fetch);
                                           $count_gen =mysqli_num_rows($gen_query);
                                       ?>

                                       <!--  countign for VAM Clinic-->
                                             <?php
                                                  $vam_fetch ="SELECT * FROM files WHERE sender_division LIKE 'VAM Clinic%'  AND deleted='0'ORDER BY id";
                                                  $vam_query=$db->query($vam_fetch);
                                                  $count_vam =mysqli_num_rows($vam_query);
                                              ?>

                                              <!--  countign for Entomology-->
                                                    <?php
                                                         $ento_fetch ="SELECT * FROM files WHERE sender_division LIKE 'Entomology%' ORDER BY id";
                                                         $ento_query=$db->query($ento_fetch);
                                                         $count_ento =mysqli_num_rows($ento_query);
                                                     ?>

                                            

                             <!--  countign for SID-->
                                     <?php
                                    $sid_fetch ="SELECT * FROM files WHERE sender_division LIKE 'SID%' ORDER BY id";
                                    $sid_query=$db->query($sid_fetch);
                                    $count_sid =mysqli_num_rows($sid_query);
                                    ?>


    <!-- count total documents -->
    <?php
    $count = $count_audit + $count_admins + $count_account +$count_library;
     ?>
<!-- select all deleted files -->
<?php
  $arch = "SELECT * FROM files WHERE deleted =1";
  $arch_Q = $db->query($arch);
  $count_archive = mysqli_num_rows($arch_Q);
 ?>

 <!-- get all pdfs in database -->
<?php
  $fetch_pdf =  "SELECT * FROM files WHERE doc_format LIKE '%pdf%' AND deleted = 0";
  $get_pdf = $db->query($fetch_pdf);
  $pdf = mysqli_num_rows($get_pdf);
 ?>

  <!-- get all word document in database -->
 <?php
   $fetch_word =  "SELECT * FROM files WHERE doc_format LIKE '%word%' AND deleted = 0";
   $get_word = $db->query($fetch_word);
   $word = mysqli_num_rows($get_word);
  ?>


   <!-- get all power point document in database -->
  <?php
    $fetch_point =  "SELECT * FROM files WHERE doc_format LIKE '%point%' AND deleted = 0";
    $get_point = $db->query($fetch_point);
    $point = mysqli_num_rows($get_point);
   ?>


    <!-- get all excel document in database -->
   <?php
     $fetch_excel =  "SELECT * FROM files WHERE doc_format LIKE '%excel%' AND deleted = 0";
     $get_excel = $db->query($fetch_excel);
     $excel = mysqli_num_rows($get_excel);
    ?>

    <?php
      $fetch_mail =  "SELECT * FROM files WHERE doc_format LIKE '%email%' AND deleted = 0";
      $get_mail = $db->query($fetch_mail);
      $mail = mysqli_num_rows($get_mail);
     ?>
