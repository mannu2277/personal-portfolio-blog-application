<?php 
session_start();
if($_SESSION['userid']=="")
{
	header("location:login.php");
}

?>
<!--Header Part Starts-->
<?php 
include 'header2.php';
include 'config.php';
?>
<style >
	#textarea
	{
		display: none;
	}
	#view-more:hover
	{
		color:blue;
	}
	.text-message
	{
		display: none
	}
	.text-message2
	{
		display:block;
		
		font-family: cursive;
		color: maroon;

	}
	#view-more-pics
	{
		display: none;
	}
</style>
<!--Header Part Ends-->
<script>
	a=0;
     a1=0;
	function checkbot()
	{
		if(a==0)
		{
			document.getElementById("textarea").style.display="block";
			a=1;
		}
		else if(a==1)
		{
			document.getElementById("textarea").style.display="none";
			a=0;
		}
	}
	
	function dropdown(x)
			{	
				y=x.nextElementSibling;
				y.classList.toggle("text-message2");

             
				

			}

			function viewAllPics()
	   {
				if(a1==0)
		{
			document.getElementById("view-more-pics").style.display="block";
			document.getElementById("view-less-pics").style.display="none";
			document.getElementById("view_btn").innerHTML="View Less";
			a1=1;
		}
		else if(a1==1)
		{
			document.getElementById("view-more-pics").style.display="none";
			document.getElementById("view-less-pics").style.display="block";
			document.getElementById("view_btn").innerHTML="View All";
			a1=0;
		}
	  }

</script>
<!-- Share Images -->
<?php 
include 'config.php';
extract($_POST);
if(isset($_POST['textsubmit']))
{
	$path = "shared-pics/" . $_FILES['image']['name'];
    	move_uploaded_file($_FILES['image']['tmp_name'], $path);
    	if ($_FILES['image']['tmp_name'] != '' ) 
    {
       		$query="INSERT INTO `share_pics` (`id`,`username`,`phone`,`image`,`message`) VALUES ('','".$_SESSION['userid']."','".$_SESSION['phone']."','".$path."','".$message."')";
			mysqli_query($dbcon,$query) or die(mysqli_error($dbcon));
			
    }	
}

?>
<!--Share Images Section-->
	<div id="gallery" class="gallery">
		<h3 class="heading">Share Images</h3>
<div class="container">
			 <div class="row">
               
               <form action=""  method="post" enctype="multipart/form-data">
               	<div class="col-md-4">
                <div class="form-group">
                  <label>
                  	Select Picture
                  </label>
                  <input type="file" name="image" class="form-control">

                </div>
               <div class="form-group">
                <label></label>
                <input type="checkbox" name="checkbox" onclick="return checkbot()" > Add text
               </div>
               
               <div class="form-group">
               	<input type="submit" name="textsubmit" class="btn btn-warning" value="Share"/>
               	
               </div>
               </div>
               <div class="col-md-4">
                <div id="textarea">
               <div class="form-group">
               	<label>Add Text</label>
               <textarea name="message" placeholder="What do You Feel" class="form-control" rows="10" >
               	
               </textarea>

               </div>
               
               </div>

               </div>
			   </form>


               



			 </div>

</div>
		<script src="js/lightbox-plus-jquery.min.js"></script>
	</div>
<!-- //Share Images Section -->
<!-- gallery -->
<?php 
##########Delete Query################
  @$action=$_GET['action'];
  @$page=$_GET['page'];
  if($action=='delete')
  {
    $did=$_GET['did'];
    $query="DELETE FROM `$page` WHERE `id`='".$did."'";
    mysqli_query($dbcon,$query);
    //header("location:add-banner.php");
  }
  if(isset($_POST['multi_del']))
	{
		extract($_POST);
		//print_r($pro_id);
		foreach($pro_id as $value)
		{
			$query="DELETE FROM `share_pics` WHERE `id`='".$value."'";
		    mysqli_query($dbcon,$query) or die(mysqli_error());
		
		}
	}
##########Delete Query################

?>
	<div id="gallery" class="gallery">
		<h3 class="heading">Shared Media</h3>
			<div class="gallery-info" id="view-less-pics">
				       <?php 
				       include 'config.php';
                       $q="SELECT * FROM `share_pics` WHERE `username`='".$_SESSION['userid']."' and
                       `phone`='".$_SESSION['phone']."' LIMIT 0,12  ";
                       $d=mysqli_query($dbcon,$q);

                       while($r=mysqli_fetch_array($d))
                       {

				       ?>
				      <div class="col-md-2 gallery-grids">
				      	<center>
                         <input type="checkbox" id="check-all" class="flat">
				      		<small><a onclick="return confirm('Are you sure?')" class="btn btn-round btn-danger" style="color:#fff;" href="?did=<?php echo $r['id'];?>&action=delete&page=share_pics">Delete</a></small></center>
					  <a href="<?php echo $r['image'] ?>" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="<?php echo $r['image'] ?>" alt="" class="img-responsive zoom-img"
						style="border:1px solid black;height: 200px " title="<?php echo $r['message'] ?>">
					  </a>
					  <center>
					  		<p id="view-more" style="cursor: pointer" onclick="return dropdown(this)">
                            <i class="fa fa-envelope" style="zoom:200%"></i>
					  		</p>
					  		<p  class="text-message" style="font-family: cursive;font-size: 15px">
					  	    <?php echo $r['message'] ?>
					        </p>
					  	</center>
					 
					  
				      </div>
				      <?php 


				  }
				  ?>
				      
				  
			
				<div class="clearfix"> </div>
				
			</div>
			<div class="gallery-info" id="view-more-pics">
				       <?php 
				       include 'config.php';
                       $q="SELECT * FROM `share_pics` WHERE `username`='".$_SESSION['userid']."' and
                       `phone`='".$_SESSION['phone']."'   ";
                       $d=mysqli_query($dbcon,$q);

                       while($r=mysqli_fetch_array($d))
                       {

				       ?>
				      <div class="col-md-2 gallery-grids">
				      	<center>
                         <input type="checkbox" id="check-all" class="flat">
				      		<small><a onclick="return confirm('Are you sure?')" class="btn btn-round btn-danger" style="color:#fff;" href="?did=<?php echo $r['id'];?>&action=delete&page=share_pics">Delete</a></small></center>
					  <a href="<?php echo $r['image'] ?>" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="<?php echo $r['image'] ?>" alt="" class="img-responsive zoom-img"
						style="border:1px solid black;height: 200px " title="<?php echo $r['message'] ?>">
					  </a>
					  <center>
					  		<p id="view-more" style="cursor: pointer" onclick="return dropdown(this)">
                            <i class="fa fa-envelope" style="zoom:200%"></i>
					  		</p>
					  		<p  class="text-message" style="font-family: cursive;font-size: 15px">
					  	    <?php echo $r['message'] ?>
					        </p>
					  	</center>
					 
					  
				      </div>
				      <?php 


				  }
				  ?>
				      
				  
			
				<div class="clearfix"> </div>
				
			</div>
		<p><button type="submit" class="btn btn-danger delete" onclick="return confirm('Are you sure?')" name="multi_del">Delete Selected</button></p>
		<center>
			<button class="btn w3l_contact" onclick="return viewAllPics()">
				<i class="fa fa-picture-o" aria-hidden="true"></i>
			<p id="view_btn">View All</p>
		    </button>
			
		</center>
  	
	</div>
<!-- //gallery -->




<!--Footer Part Starts-->
<?php 
include 'footer.php';
?>

<!--Footer Part Ends-->