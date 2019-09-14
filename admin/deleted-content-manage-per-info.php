<!-- <div class="x_panel">
                 <div class="x_title">
                    <h2>View Personal Information</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                   <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">SR. No.</th>
                            <th class="column-title">ID</th>
                          
                            <th class="column-title">Profile Photo</th>
                            <th class="column-title">Date of Birth</th>
							              <th class="column-title">Contact Number</th>
                             <th class="column-title">Experience (in Years)</th>
                              <th class="column-title">Corrosponding Address</th>
                               <th class="column-title">Email id</th>
                                <th class="column-title">Website Url</th>
                                

                            <th class="column-title">Edit</th>
                             <th class="column-title">Delete</th>
                          </th>
                           </tr>
                        </thead>

                        <tbody>
						 <?php
                                    $q1="SELECT * FROM `personal_info` ORDER BY `id` DESC";
									$d1=mysqli_query($dbcon, $q1);
									$counter=0;
                                    while ($res3=mysqli_fetch_array($d1)) {
                                        ?>
                            <tr class="even pointer">
								<td><input type="checkbox" id="check-all" class="flat"></td>
								<td class=" "><?php echo ++$counter;?></td>
								<td class=" "><?php echo $res3['id'];?></td>
								
								<td class=" "><img src="<?php echo $res3['image'];?>" width="140px" height="150px"></td>
                <td class=" "><?php echo $res3['dob'];?></td>
							  <td class=" "><?php echo $res3['phone'];?></td>
                <td class=" "><?php echo $res3['experience'];?></td>
                <td class=" "><?php echo $res3['address'];?></td>
                <td class=" "><?php echo $res3['email'];?></td>
                <td class=" "><?php echo $res3['website'];?></td>
              
								
								<td class=" "><a class="btn btn-primary" href="edit-personal-info.php?did= <?php echo $res3['id'];?>&action=edit&page=personal_info"><i class="fa fa-edit"></i>Edit</a></td>
								<td class=" "><a onclick="return confirm('Are you sure?')" class="btn btn-round btn-danger" style="color:#fff;" href="?did=<?php echo $res3['id'];?>&action=delete&page=personal_info">Delete</td>
						    </tr>
						         <?php
									}
									?>
                         </tbody>
                      </table>
                    </div>
				 </div>
                </div>-->