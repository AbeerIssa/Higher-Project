<!DOCTYPE html>
<html>
<head>


<style>
ul.a {
    list-style-type: circle;
}

ul.b {
    list-style-type: square;
}

.container {
  list-style:none;
  margin: 0;
  padding: 0;
}
.item {
  background: orange;
  padding:50px;
  width: 900px;
  height: 900px;
  margin: 20px ;
 
  
  line-height: 100px;
  color: block;
  font-weight: bold;
  h1{
  font-size: 50px;
  }
  text-align: center;
}

/*float layout*/
.float {
  max-width:18px;
  margin: 0 auto;
}
.float:after {
  content: ".";
  display: block;
  height: 0;
  clear: both;
  visibility: hidden;
}
.float-item {
  float: left;
}


/*inline-block*/
.inline-b {
  max-width:18px;
  margin:0 auto;
}
.inline-b-item {
  display: inline-block;
}

/*Flexbox*/
.flex {
  padding: 0;
  margin: 0;
  list-style: none;
  
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  
  -webkit-flex-flow: row wrap;
  justify-content: space-around;
}  
 </style>

<?php

include("config.php");
 session_start();
 
	  
	  
  ?>     
	  

		 
		 	  
  <link href="float/bootstrap.min.css" rel="stylesheet">
  
  </head>
<body>
<div>  <a href="Search_by_Place.php" ><img data-u="image" src="images/banner.jpg" alt="banner" width="1920px" height="250px"/></a> </div>
 <div class="container">
      
        
		<?php
		$cnt=1;
		$sql = "SELECT  * FROM event  WHERE place =  'Al-Musanna' ";
      $result = mysqli_query($db,$sql);
		 while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))  
	     {
			if ($cnt==0){ ?>
			 
     <div class="card-deck mb-3 text-center">
			
		
		
	 
	 <?php } else {?>
<div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"><?= $row['fest_name'] ?> </h4>
          </div>
          <div class="card-body">
             
            <ul class="list-unstyled mt-3 mb-4">
			               <li><?= $row['fest_name'] ?></li>
				<li><?= $row['fest_college'] ?></li>		   
              <li><?= $row['date'] ?></li>
              <li><?= $row['department'] ?></li>
			  <li><?= $row['GSM'] ?></li>
			  <li><?= $row['email'] ?></li>
			   <li><a target='_blank' href='<?= $row['link'] ?>' >Click for More Information</a></li>
             
            </ul>
          </div>
        </div>
		
	 <?php } 
	 if ($cnt==3){
		 $cnt=0;
		 ?>
		 </div>
		 <?php
	 }
		 $cnt++;
		 }
		 ?>
		
     
	
		</body>
		
    </html>					
	