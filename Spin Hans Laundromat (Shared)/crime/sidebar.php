 <?php 
 include('connect.php');

  $sql = "select * from admin where id = '".$_SESSION["id"]."'";
        $result=$conn->query($sql);
        $row1=mysqli_fetch_array($result);
       
            $q = "select * from tbl_permission_role where role_id='".$row1['group_id']."'";
            $ress=$conn->query($q);
            //$row=mysqli_fetch_all($ress);
             $name = array();
            while($row=mysqli_fetch_array($ress)){
          $sql = "select * from tbl_permission where id = '".$row['permission_id']."'";
        $result=$conn->query($sql);
        $row1=mysqli_fetch_array($result);
             
             if ($row1 != null) {
                array_push($name, $row1[1]);
                                }
             }
             $_SESSION['name']=$name;
             $useroles=$_SESSION['name'];

 ?>

 <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">


                        <li class="nav-devider"></li>
                        <li class="nav-label"><a href="index.html">Home</a></li>
                        <li> 
                            <a href="index.php" aria-expanded="false">
                                <i class="fa fa-tachometer">
                                    <span class="hide-menu">Dashboard
                                    </span>
                                </i>
                            </a>
                        </li>
                        <li class="nav-label">Management and Reports</li>
                        <?php if(isset($useroles)){  if(in_array("manage_user",$useroles)){ ?> 
                            <li> 
                                <a class="has-arrow" href="#" aria-expanded="false">
                                    <i class="fa fa-user-plus">
                                        <span class="hide-menu">Account Registration
                                        </span>
                                    </i>
                                </a>
                                <ul aria-expanded="false" class="collapse">
                                    <?php if(isset($useroles)){  if(in_array("add_user",$useroles)){ ?> 
                                        <!-- <li><a href="add_user.php">Add User</a></li> -->
                                    <?php } } ?>
                                        <li><a href="view_user.php">User Management</a></li>
                                </ul>
                            </li>
                        <?php } } ?>

                        <?php if($_SESSION["username"]=='admin' || $_SESSION["username"]=='user') 
         { ?>
                         <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-inr"></i><span class="hide-menu">Case Management</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="add_order.php">Report</a></li>
                               <li><a href="view_order.php">Manage Laundry List</a></li>
                            </ul>
                        </li>
                    <?php }?>
                       
                        <?php if($_SESSION["username"]=='admin') { ?>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-shield"></i><span class="hide-menu">Role Management</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="assign_role.php">Assign Role</a></li>
                            <li><a href="view_role.php">View Role</a></li>
                        </ul>
                    </li>

                    <?php }?>


                    <?php if($_SESSION["username"]=='admin' || $_SESSION["username"]=='user') { ?>
                        
                         <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-address-book"></i><span class="hide-menu">Barangay User Regis</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="add_customer.php">Add Client</a></li>
                               <li><a href="view_customer.php">View Client</a></li>
                            </ul>
                        </li>
                    <?php }?>








             


<?php if($_SESSION["username"]=='admin' || $_SESSION["username"]=='user') 
         { ?>
                         <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Reports</span></a>
                            <ul aria-expanded="false" class="collapse">


                                <li><a href="pending_order.php">Laundry Status</a></li>
                                <li><a href="completed_order.php">Completed Laundries</a></li>

                            <?php if(isset($useroles)){  if(in_array("delete_order",$useroles)){ ?>
                                <li><a href="sales_report.php">Sales Report</a></li>
                            <?php } } ?>

                            </ul>
                        </li>
                    <?php }?>





                   <!-- <?php if($_SESSION["username"]=='admin') { ?>
                         <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-bandcamp"></i><span class="hide-menu">Services</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="add_services.php">Add Delivery Fee </a></li>
                                <li><a href="view_services.php">Manage Delivery Fees</a></li>
                            </ul>
                        </li> -->

        




         


                    <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-cog"></i><span class="hide-menu">Settings</span></a>
                            <ul aria-expanded="false" class="collapse">
                               <?php //if($_SESSION["username"]=='user' || $_SESSION["username"]=='admin') { ?>
                               <li><a href="manage_website.php">Website Management</a></li>
                             <?php //} ?>
                            <!--  <li><a href="email_config.php">Email Management</a></li>
                            </ul> -->
                        </li> 
                    <?php } ?>




                    <?php if($_SESSION["username"]=='admin') { ?>
                        
                        <!-- <li> <a target="_blank" href="Help" aria-expanded="false"><i class="fa fa-info-circle"></i><span class="hide-menu">Help</span></a>
                            
                        </li> -->

<?php }?>


    
                    </ul>   
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->