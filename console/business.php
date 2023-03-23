<?php
session_start();
error_reporting(0);
include('../includes/dbconnect.php');

        
      if(isset($_POST['submit']))
    {
             
    //storind the data in your database
      
      $content=$_POST['cont'];
      $wnum=$_POST['num'];
      $post=$_POST['post'];
      $adds=$_POST['adds'];
      $land=$_POST['land'];
      $lga=$_POST['lga'];
      $cat=$_POST['cat'];
      $business_name=$_POST['business'];
      $dates=$_POST['dates'];
      $social=$_POST['social'];
      
    $sql="INSERT INTO post(business_name,content,dates,post_by,wnum,address,category,Landmark,LGA,social_media) VALUES(:business,:cont,:dates,:post,:num,:adds,:cat,:land,:lga,:social)";
      
        $query = $dbh->prepare($sql); 
    $query->bindParam(':cont',$content,PDO::PARAM_STR);
    $query->bindParam(':business',$business_name,PDO::PARAM_STR);
    $query->bindParam(':num',$wnum,PDO::PARAM_STR);
    $query->bindParam(':dates',$dates,PDO::PARAM_STR);
    $query->bindParam(':adds',$adds,PDO::PARAM_STR);
    $query->bindParam(':land',$land,PDO::PARAM_STR);
    $query->bindParam(':lga',$lga,PDO::PARAM_STR);
    $query->bindParam(':cat',$cat,PDO::PARAM_STR);
    $query->bindParam(':social',$social,PDO::PARAM_STR);
    $query->bindParam(':post',$post,PDO::PARAM_STR);
    
$query->execute();
$lastInsertId=$dbh->lastInsertId();
    if ($lastInsertId) {
    echo '<script>alert("Post has been created")</script>';
    echo "<script>window.location.href ='dashboard'</script>";
 }
else {
    $msg="Error updating Post, try again!";
 }
  
 
}
  
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>IQ24GLOBAL7FX || User Form</title>
    <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="lib/jquery-toggles/toggles-full.css" rel="stylesheet">
    <link href="lib/highlightjs/github.css" rel="stylesheet">
    <link href="lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="lib/spectrum/spectrum.css" rel="stylesheet">
    <!-- Amanda CSS -->
    <link rel="stylesheet" href="css/amanda.css">
  </head>

  <body>
 
<?php include_once('includes/header.php');
include_once('includes/sidebar.php');

 ?>
      
    <div class="am-mainpanel">
      <div class="am-pagebody">

        <div class="row row-sm mg-t-20">
          <div class="col-xl-12">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
              <h3>Registration Form</h3>
              <p style="font-size:13px; border-radius:12px;color:red; width:70%; margin:auto; text-align:center; margin-bottom:30px; background-color:yellow;"> 
                <?php if($msg){
    echo $msg;
  }  ?> </p>
               <form id="basic-form" method="post">
       <div class="row">
                <label class="col-sm-4 form-control-label">Business FullName: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                 <input type="text" class="form-control" name="business" required="true">
                </div>
              </div><br/>

              <div class="row">
                <label class="col-sm-4 form-control-label">Business Content: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <textarea id="materialContactFormMessage" class="form-control md-textarea" name="cont" rows="9"></textarea>
                </div>
              </div>
             <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Date: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="date" name="dates" value="" class="form-control" required='true'>
                </div>
              </div><!-- row -->
             <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Post By: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" name="post" value="" class="form-control" required='true'>
                </div>
              </div>
               <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Whatsapp Number: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" name="num" value="" class="form-control" required='true'>
                </div>
              </div>
               <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Address: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" name="adds" value="" class="form-control" required='true'>
                </div>
              </div>
               <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Business Category: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <select name="cat" required="" id="materialRegisterFormCategory" class="form-control" >
                                            <option>All Categories</option>
                                            <option value="Arts and entertainment">Arts and entertainment</option>
                                            <option value="Automobiles">Automobiles</option>
                                            <option value="Beauty and Spas">Beauty and Spas</option>
                                            <option value="Branding">Branding</option>
                                            <option value="Catering and Drinks">Catering and Drinks</option>
                                            <option value="Cleaning Services">Cleaning Services</option>
                                            <option value="Computing and Gadget Repairs">Computing and Gadget Repairs</option>
                                            <option value="Electronics Repairs">Electronics Repairs</option>
                                            <option value="Electrical and Wiring servicies">Electrical and Wiring servicies</option>
                                            <option value="Engineering Services">Engineering Services</option>
                                            <option value="Facility and Household Maintenance Services">Facility and Household Maintenance Services</option>
                                            <option value="Fashion and Clothing Services">Fashion and Clothing Services</option>
                                            <option value="Household services">Household services</option>
                                            <option value="Installations">Installations</option>
                                            <option value="Jewellries and Accessories Maintenance Services">Jewellries and Accessories Maintenance Services</option>
                                            <option value="Lighting Services">Lighting Services</option>
                                            <option value="Logistics and Courier Services">Logistics and Courier Services</option>
                                            <option value="Pet Management Services">Pet Management Services</option>
                                            <option value="Photography and Media Services">Photography and Media Services</option>
                                            <option value="Printing Services">Printing Services</option>
                                            <option value="Proof Reading Services">Proof Reading Services</option>
                                            <option value="Technicains">Technicains</option>
                                            <option value="Tutoring Services">Tutoring Services</option>
                                            <option value="Welding Services">Welding Services</option>
                                            <option value="Others">Others</option>
                                        </select>
                </div>
              </div>
              <br/>
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">LandMark: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" name="land" value="" class="form-control" required='true'>
                </div>
              </div>

              
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">LGA: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" name="lga" value="" class="form-control" required='true'>
                </div>
              </div>
             
               <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Social Media: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" name="social" value="" class="form-control" >
                </div>
              </div>

             
             <div class="form-layout-footer mg-t-30">
             <p style="text-align: center;"><button class="btn btn-info mg-r-5"  name="submit" id="submit">Register Business</button></p>
                </form>
              </div><!-- form-layout-footer -->
            </div><!-- card -->
          </div><!-- col-6 -->
        
        </div><!-- row -->


      </div><!-- am-pagebody -->
     <?php include_once('includes/footer.php');?>
    </div><!-- am-mainpanel -->

    <script src="lib/jquery/jquery.js"></script>
   <script src="lib/jquery-ui/jquery-ui.js"></script>
    <script src="lib/popper.js/popper.js"></script>
    <script src="lib/bootstrap/bootstrap.js"></script>
    <script src="lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="lib/jquery-toggles/toggles.min.js"></script>
    <script src="lib/highlightjs/highlight.pack.js"></script>
    <script src="lib/select2/js/select2.min.js"></script>
        <script src="lib/spectrum/spectrum.js"></script>

    <script src="js/amanda.js"></script>
    <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      })

        // Datepicker
        $('.fc-datepicker').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true
        });

$('#datepickerNoOfMonths').datepicker({
  showOtherMonths: true,
  selectOtherMonths: true,
  numberOfMonths: 2
})
$('.hdob').datepicker({
  multidate: true,
  format: 'yyyy-mm-dd'
});



    </script>
    
  </body>
</html>