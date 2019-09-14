<?php 
include 'header.php';
include 'config.php';
?>
<!-- Skills -->


<section class="skills" id="skills">
	<div class="container">
			<h3 class="heading">Skills</h3>
		<div class='col-md-8 bar'>
			<!-- Skills Introductory Query -->
<?php 
include 'config.php';
$query="SELECT * FROM `skill_intro` ORDER BY `id` DESC";
$d1=mysqli_query($dbcon,$query);
$res=mysqli_fetch_array($d1)


?>
<!-- Skills Introductory Query -->
		<p class="bar-p"><?php echo $res['introduction']; ?>.</p>
			<div class="col-md-6 group">
				<div class='bar_left'>
					<div class='bar_group'>
						<!-- Technical  Skills  Query -->
                        <?php 
                        include 'config.php';
                        $query="SELECT * FROM `tech_skills` ";
                         $d1=mysqli_query($dbcon,$query);
                         $row=mysqli_num_rows($d1);
                         $half=$row/2;
                         $half=ceil($half);
                         $half=$half;
                         $query1="SELECT * FROM `tech_skills` limit 0,$half ";
                        $d2=mysqli_query($dbcon,$query1);
                        while( $res=mysqli_fetch_array($d2))
                        {
                         ?>
                        
						<div class='bar_group__bar thin' label='<?php echo $res['name'];   ?>' show_values='true' value="<?php echo $res['min_rating']; ?>">
							
						</div>
						<?php 
                       }
                       ?>
						
					</div>
				</div>
			</div>
			<div class="col-md-6 group">
				<div class='bar_right'>
					<div class='bar_group'>
						<?php 
                      
                       $query1="SELECT * FROM `tech_skills` limit $half,$row ";
                       $d2=mysqli_query($dbcon,$query1);
                       while( $res=mysqli_fetch_array($d2))
                       {
						?>
						<div class='bar_group__bar thin' label='<?php echo $res['name'];   ?>' show_values='true' value='<?php echo $res['min_rating'];   ?>'>
							
						</div>
						<?php 
					   }
					   ?>
					</div>
				</div>
			</div>
			<div class='clearfix'></div>
		</div>
		<div class="col-md-4 skillsright">
			<h3 class="bar-h3">About my skills</h3>
				<!-- Skills Introductory Query -->
<?php 
include 'config.php';
$query="SELECT * FROM `about_skills` ORDER BY `id` DESC";
$d1=mysqli_query($dbcon,$query);
$res=mysqli_fetch_array($d1)


?>
			<h5 class="bar-p"><i><?php echo $res['heading']; ?></i></h5>
			<p class="bar-p"><?php echo $res['sub_heading'] ?>.</p>
			<p class="bar-p"><?php echo $res['description'] ?>.</p>
		</div>
		<div class='clearfix'></div>
	</div>
</section>
<!-- //Skills -->










<!--
Skills Section Ends
-->


<?php

include 'footer.php';
?>