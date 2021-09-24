<html>
<head>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	

  </head>
  <?php 
include'config.php';
extract($_POST);
if(isset($update))
{
mysqli_query($db,"update event set fest_name='$fest_name',fest_college='$fest_college',date='$date',place='$place',department='$department',place='$place',email='$email',GSM='$GSM',about_fest='$about_fest',Fest_type='$Fest_type',link='$link' where fest_name='".$_GET['fest_name']."'");

header('location:manage_event.php');
}

//select old notice 

$q=mysqli_query($db,"select * from event where fest_name='".$_GET['fest_name']."'");
$res=mysqli_fetch_array($q);

?>
<h2 class="text-danger" align="center">Update event</h2>
<form method="post">
  <div class="row">
<div align="center" class="col-sm-2"><?php echo @$err;?></div>
  </div>
  <div align="right" class="row"> 
    <div align="right"  class="col-sm-6">fest_name </div>
    <div align="right" class="col-sm-2"> 
      <input type="text" name="fest_name" value="<?php echo $res['fest_name']; ?>" class="form-control"/>
    </div>
 </div><div class="row" style="margin-top:10px">
  <div align="center" class="col-sm-2"></div>
  <div align="center" class="col-sm-2"> </div>
  <div align="center" class="row"> 
    <div align="center" class="col-sm-2">fest_college</div>
    <div align="center" class="col-sm-2"> 
      <input type="text" name="fest_college" value="<?php echo $res['fest_college']; ?>" class="form-control"/>
    </div>
  </div><div class="row" style="margin-top:10px">
  <div align="center" class="col-sm-2"></div>
  <div align="center" class="col-sm-2"> </div>
  <div align="center" class="row"> 
    <div align="center" class="col-sm-2">date</div>
    <div align="center" class="col-sm-2"> 
      <input type="date" name="date" value="<?php echo $res['date']; ?>" class="form-control"/>
    </div>
  </div><div class="row" style="margin-top:10px">
  <div align="center" class="col-sm-2"></div>
  <div align="center" class="col-sm-2"> </div>
  <div align="center" class="row"> 
    <div align="center" class="col-sm-2">place</div>
    <div align="center" class="col-sm-2"> 
      <input type="text" name="place" value="<?php echo $res['place']; ?>" class="form-control"/>
    </div>
  </div><div class="row" style="margin-top:10px">
  <div align="center" class="col-sm-2"></div>
  <div align="center" class="col-sm-2"> </div>
  <div align="center" class="row"> 
    <div align="center" class="col-sm-2">department</div>
    <div align="center" class="col-sm-2"></div>
  </div>
  <div align="center" class="row"> 
    <div align="center" class="col-sm-16"> 
      <td> <select name="department" required>
          <option value="" selected="selected" disabled="disabled" >Select your Department</option>
          <option value="I.T. Department">I.T. Department</option>
          <option value="Engineering Department">Engineering Department </option>
          <option value="Business Department">Business Department </option></tr> 
        </select> </td>
    </div>
  </div><div class="row" style="margin-top:10px">
  <div align="center" class="col-sm-2"></div>
  <div align="center" class="col-sm-2"> </div>
  <div align="center" class="row"> 
    <div align="center" class="col-sm-2">email</div>
    <div align="center" class="col-sm-2"> 
      <input type="text" name="email" value="<?php echo $res['email']; ?>" class="form-control"/>
    </div>
  </div><div class="row" style="margin-top:10px">
  <div align="center" class="col-sm-2"></div>
  <div align="center" class="col-sm-2"> </div>
  <div align="center" class="row"> 
    <div align="center" class="col-sm-2">GSM</div>
    <div align="center" class="col-sm-2"> 
      <input type="number" name="GSM" value="<?php echo $res['GSM']; ?>" class="form-control"/>
    </div>
  </div><div class="row" style="margin-top:10px">
  <div align="center" class="col-sm-2"></div>
  <div align="center" class="col-sm-2"> </div>
  <div align="center" class="row"> 
    <div align="center" class="col-sm-2">about_fest</div>
    <div align="center" class="col-sm-2"> 
      <input type="textarea row=20 cols=30" name="about_fest" value="<?php echo $res['about_fest']; ?>" class="form-control"/>
    </div>
  </div><div class="row" style="margin-top:10px">
  <div align="center" class="col-sm-2"></div>
  <div align="center" class="col-sm-2"> </div>
  <div align="center" class="row"> 
    <div align="center" class="col-sm-2">Fest_type</div>
    <div align="center" class="col-sm-2"> 
      <input type="text" name="Fest_type" value="<?php echo $res['Fest_type']; ?>" class="form-control"/>
    </div>
  </div><div class="row" style="margin-top:10px">
  <div align="center" class="col-sm-2"></div>
  <div align="center" class="col-sm-2"> </div>
  <div align="center" class="row"> 
    <div align="center" class="col-sm-2">link</div>
    <div align="center" class="col-sm-2"> 
      <input type="text" name="link" value="<?php echo $res['link']; ?>" class="form-control"/>
    </div>
  </div><div class="row" style="margin-top:10px">
  <div align="center" class="col-sm-2"></div>
  <div align="center" class="col-sm-2"> </div><div class="row" style="margin-top:10px"> 
  <div align="center" class="col-sm-2"></div>
  <div align="center" class="col-sm-2"> </div>
  <div align="center" class="row" style="margin-top:10px"> 
    <div align="center" class="col-sm-2"></div>
    <div align="center" class="col-sm-8"> 
      <input type="submit" value="Update Notice" name="update" class="btn btn-success"/>
      <input type="reset" class="btn btn-success"/>
	  <a href="manage_event.php" class="btn btn-success">Back</a>
    </div>
  </div>
              </form>	