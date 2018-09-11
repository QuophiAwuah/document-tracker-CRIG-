<?php require_once 'core/connect.php'; ?>
<?php include 'helpers.php'; ?>


<style type="text/css">
img{
  margin-top: 5px;
  margin-bottom: 20px;
  margin-right: 20px;
}
body{
/*  background-image: url('con7.jpg');*/
      background-blend-mode: overlay;

        background-image:linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.6)), url('/atom/document_Tracking_System/logo4.png');
  background-repeat: no-repeat;
  background-size: cover;
/*        background-size: 100vw 250vh;*/
  background-attachment: fixed;
}
strong{
  color: #000;
    padding: 5px;
    font-size: 20px;
    font-family: serif;
}
 h1{
  font-size: 40px;
  font-family: serif;
  font-weight: bold;
  text-transform: uppercase;
  color: saddlebrown;
     font-variant: small-caps
 }
 footer{
  color: black;
 }

 .head{
  color: forestgreen;
  font-family: serif;
  font-size: 80px;
     text-decoration:underline;
     padding: 5px;
 }

</style>

<?php include('includes/head.php') ?>
<div class="container-fluid">
   <h1 class="text-center head">DOCUMENT TRACKING SYSTEM</h1><br>
</div>
    <div class="container">
      <h1 class="text-right">crig divisions ::</h1><hr>
    
      <div class="row">
       <div class="col-md-2 ">
        <h4><strong>Administration</strong></h4>
         <a href="administration"><img src="client-logo4.png" class="img-thumbnail img-responsive"></a>
       </div>  
      <div class="col-md-2">
        <h4><strong>Records</strong></h4>
         <a href="records"><img src="client-logo4.png" class="img-thumbnail img-responsive"></a>
      </div> 
      <div class="col-md-2">
        <h4><strong>Audit</strong></h4>
         <a href="audit"><img src="client-logo5.png" class="img-thumbnail img-responsive"></a>
       </div> 
       <div class="col-md-2">
           <h4><strong>Soil Science</strong></h4>
         <a href="soil science"><img src="client-logo3.png" class="img-thumbnail img-responsive"></a>
       </div>   
     <div class="col-md-2">
         <h4><strong>Pathology</strong></h4>
         <a href="pathology"><img src="client-logo2.png" class="img-thumbnail img-responsive"></a>
       </div>
       <div class="col-md-2">
           <h4><strong>Agronomy</strong></h4>
         <a href="agronomy"><img src="client-logo1.png" class="img-thumbnail img-responsive"></a>
       </div>             
      </div>

      <div class="clearfix"></div>
      <p></p><br>
      <div class="row">
       <div class="col-md-2 ">
           <h4><strong>Entomology</strong></h4>
         <a href="entomology"><img src="client-logo4.png" class="img-thumbnail img-responsive"></a>
       </div>  
      <div class="col-md-2">
          <h4><strong>SID</strong></h4>
         <a href="SID"><img src="client-logo4.png" class="img-thumbnail img-responsive"></a>
      </div> 
      <div class="col-md-2">
          <h4><strong>New Products</strong></h4>
         <a href="products"><img src="client-logo1.png" class="img-thumbnail img-responsive"></a>
       </div>   
          <div class="col-md-2">
              <h4><strong>VAM Clinic</strong></h4>
         <a href="VAM"><img src="client-logo3.png" class="img-thumbnail img-responsive"></a>
       </div> 
        <div class="col-md-2 ">
            <h4><strong>General Services</strong></h4>
         <a href="services"><img src="client-logo4.png" class="img-thumbnail img-responsive"></a>
       </div>
        <div class="col-md-2 ">
            <h4><strong>Directorate</strong></h4>
         <a href="directorate"><img src="client-logo2.png" class="img-thumbnail img-responsive"></a>
       </div>     
      </div>

      <div class="clearfix"></div>
      <p></p><br>
      <div class="row">
       <div class="col-md-2 ">
           <h4><strong>Security</strong></h4>
         <a href="security"><img src="client-logo4.png" class="img-thumbnail img-responsive"></a>
       </div>  
      <div class="col-md-2">
          <h4><strong>Physiology</strong></h4>
         <a href="physiology"><img src="client-logo3.png" class="img-thumbnail img-responsive"></a>
      </div> 
      <div class="col-md-2">
          <h4><strong>SSSU</strong></h4>
         <a href="sssu"><img src="client-logo1.png" class="img-thumbnail img-responsive"></a>
       </div> 
       <div class="col-md-2">
           <h4><strong>Plant Breeding</strong></h4>
         <a href="breeding"><img src="client-logo5.png" class="img-thumbnail img-responsive"></a>
       </div>   
        <div class="col-md-2">
            <h4><strong>Accounts</strong></h4>
         <a href="account"><img src="client-logo2.png" class="img-thumbnail img-responsive"></a>
       </div>   
          <div class="col-md-2">
              <h4><strong>Plantation</strong></h4>
         <a href="plantation"><img src="client-logo1.png" class="img-thumbnail img-responsive"></a>
       </div>           
      </div>
      </div>
    </div>
    <?php include 'includes/footer.php'; ?>
