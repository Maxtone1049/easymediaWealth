<?php
session_start();
error_reporting(0);
include('../includes/dbconnect.php');
if (strlen($_SESSION['obcsaid']==0)) {
  header('location:logout');
  } else{
    if(isset($_POST['submit'])) {
      $target= "../client/upload/".basename($_FILES['file']['name']);  
  $vid=$_GET['viewid'];
     $file = $_FILES['file']['name'];
      $content=$_POST['cont'];
      $wnum=$_POST['num'];
      $post=$_POST['post'];
      $adds=$_POST['adds'];
      $date=$_POST['dates'];
      $lga=$_POST['lga'];
      $landmark=$_POST['land'];
      $cat=$_POST['cat'];
      $business_name=$_POST['business'];
      $social=$_POST['social'];

$sql= "UPDATE users SET image=:file, image_name=:file, business_name=:business, content=:cont, dates=:dates, post_by=:post, wnum=:num, address=:adds, category=:cat, Landmark=:land, LGA=:lga, social_media=:social WHERE ID=$vid";

    $query = $dbh->prepare($sql);     
    $query->bindParam(':file',$file,PDO::PARAM_STR);
    $query->bindParam(':cont',$content,PDO::PARAM_STR);
    $query->bindParam(':business',$business_name,PDO::PARAM_STR);
    $query->bindParam(':num',$wnum,PDO::PARAM_STR);
    $query->bindParam(':adds',$adds,PDO::PARAM_STR);
    $query->bindParam(':lga',$lga,PDO::PARAM_STR);
    $query->bindParam(':cat',$cat,PDO::PARAM_STR);
    $query->bindParam(':dates',$date,PDO::PARAM_STR);
    $query->bindParam(':land',$landmark,PDO::PARAM_STR);
    $query->bindParam(':post',$post,PDO::PARAM_STR);
    $query->bindParam(':social',$social,PDO::PARAM_STR);
    $query->bindParam(':vid',$vid,PDO::PARAM_STR);
    $query->execute();
    

   if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
    unlink('../client/upload/'.$target);
     echo '<script>alert("Post Updated")</script>';
    echo "<script>window.location.href ='credit'</script>";
}else {
    $msg="Error updating Profile, try again!";
 }
  
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
<title>IQ24GLOBAL7FX || View Business</title>
   <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="lib/jquery-toggles/toggles-full.css" rel="stylesheet">
    <link href="lib/highlightjs/github.css" rel="stylesheet">
    <link href="lib/datatables/jquery.dataTables.css" rel="stylesheet">
    <link href="lib/select2/css/select2.min.css" rel="stylesheet">
    <!-- Amanda CSS -->
    <link rel="stylesheet" href="css/amanda.css">
  </head>

  <body>

<?php include_once('includes/header.php');
include_once('includes/sidebar.php');

 ?>


    <div class="am-pagetitle">
     
    </div><!-- am-pagetitle -->

    <div class="am-mainpanel">
      <div class="am-pagebody">

        <div class="card pd-20 pd-sm-40">
        

          <div class="table-wrapper" style="padding-top: 20px">
            <?php
$vid=$_GET['viewid'];
$sql="SELECT * from  users where ID=$vid";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               

  ?> 
 <table border="1" class="table table-bordered">
 

 <tr align="center">
<td colspan="9" style="font-size:20px;color:blue">
 User Details</td></tr>
    <tr>
    <th scope>S/NO</th>
    <td><?php  echo $row->ID;?></td>
    <th scope>Customer Name</th>
    <td><?php  echo $row->fname;?></td>
    <th scope>Email</th>
    <td><?php  echo $row->email;?></td>
    <th>Details</th>
    <td colspan="9"><?php  echo $row->phone.' ';?> <?php  echo $row->dates=date("F d, Y ");?></td>
  </tr>
 
 
  <?php $cnt=$cnt+1;}} ?>
</table>

<p align="center"  style="padding-top: 20px">                            
 <button class="btn btn-primary waves-effect waves-light w-lg" data-toggle="modal" data-target="#myModal">Take Action</button></p>  
<p style="font-size:13px; border-radius:12px;color:yellow; width:70%; margin:auto; text-align:center; margin-bottom:30px; background-color:#0738;"> <?php if($msg){
    echo $msg;
  }  ?> </p>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     <div class="modal-content">
      <div class="modal-header">

<h5 class="modal-title" id="exampleModalLabel">Take Action</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<table class="table table-bordered table-hover data-tables">           
<form enctype="multipart/form-data" class="text-center" style="color: rgb(117, 117, 117);" method="post">
  
  <tr>
    <th>
      New Image:
    </th>
    <td> 
      <input type="file" required="" class="form-control" name="file" id="imageUpload">
  </tr>

<tr>
    <th>Business Name:</th>
    <td>
  <input type="text" class="form-control" name="business" value="<?php echo $row->business_name?>">
   </td>
  </tr> 

  <tr>
    <th>Business Content:</th>
    <td>
    <textarea id="materialContactFormMessage" class="form-control md-textarea" name="cont" rows="9" value=""><?php echo $row->content?></textarea>
  </tr> 

   <tr>
    <th>Date:</th>
    <td>
    <input type="date" placeholder="Date" name="dates" value="" class="form-control" required='true' value="">
  </td>
  </tr> 

 <tr>
    <th>Post By :</th>
    <td>
    <input name="post" placeholder="Post By" rows="12" cols="14" class="form-control" required="true" value="<?php echo $row->post_by?>"/></td>
  </tr> 



  <tr>
    <th>WhatsApp Number :</th>
    <td>
    <input name="num" placeholder="WhatsApp Number" rows="12" cols="14" class="form-control" required="true" value="<?php echo $row->wnum?>"/></td>
  </tr> 

  <tr>
    <th>Address :</th>
    <td>
    <input type="text" name="adds" placeholder="Address" rows="12" cols="14" class="form-control" required="true" value="<?php echo $row->address?>"/></td>
  </tr> 



  <tr>
    <th>Category :</th>
    <td>
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
  </tr> 

<tr>
    <th>Landmark :</th>
    <td>
    <input type="text" name="land" placeholder="LandMark" rows="12" cols="14" class="form-control" required="true" value="<?php echo $row->Landmark?>"/></td>
  </tr>

  <tr>
    <th>LGA :</th>
    <td>
    <input type="text" name="lga" placeholder="LGA" rows="12" cols="14" class="form-control" required="true" value="<?php echo $row->LGA?>"/></td>
  </tr>
  <tr>
    <th>Social Media :</th>
    <td>
    <input type="text" name="social" placeholder="Social Media Handle" rows="12" cols="14" class="form-control" value="<?php echo $row->social_media?>"/></td>
  </tr>

</table>
</div>
<div class="modal-footer">
 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 <button type="submit" name="submit" class="btn btn-primary">Update</button>
  
  </form>
          </div><!-- table-wrapper -->
        </div><!-- card -->

    
      </div><!-- am-pagebody -->
     <?php include_once('includes/footer.php');?>
    </div><!-- am-mainpanel -->

    <script src="lib/jquery/jquery.js"></script>
    <script src="lib/popper.js/popper.js"></script>
    <script src="lib/bootstrap/bootstrap.js"></script>
    <script src="lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="lib/jquery-toggles/toggles.min.js"></script>
    <script src="lib/highlightjs/highlight.pack.js"></script>
    <script src="lib/datatables/jquery.dataTables.js"></script>
    <script src="lib/datatables-responsive/dataTables.responsive.js"></script>
    <script src="lib/select2/js/select2.min.js"></script>

    <script src="js/amanda.js"></script>
    <script>
      $(function(){
        'use strict';

        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
  </body>
</html>
<?php }?>