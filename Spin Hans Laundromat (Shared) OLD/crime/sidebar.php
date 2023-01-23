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
                        
                        <li> <a class="nav-link sidebartoggler hidden-sm-down" href="javascript:void(0)" aria-expanded="false" style="width: 55px;"><i class="ti-menu"></i><span class="hide-menu"></span></a></li>
                        <li> <a href="indexs.php"><i class="fa fa-arrow-left"></i><span class="hide-menu">Back to Homepage</span></a></li>
                        <li class="nav-label">Dashboard</li>
                        <li>
                            <a href="index.php" aria-expanded="false">
                                <i class="fa fa-tachometer"></i>
                                    <span class="hide-menu">Dashboard
                                    </span>
                            </a>
                        </li>
                        <?php if(isset($useroles)){  if(in_array("add_order",$useroles)){ ?> 
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-folder"></i><span class="hide-menu">Case Management</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <!-- <li><a href="add_order.php">Report</a></li> -->
                                <li><a href="add_order.php">Create One</a></li>
                                <li><a href="view_order.php?status=0">Pending Cases</a></li>
                                <li><a href="view_order.php?status=1">Review of Cases</a></li>
                                <li><a href="view_order.php?status=2">Resolving of Cases</a></li>
                                <li><a href="view_order.php?status=3">Completed Cases</a></li>
                                <li><a href="view_order.php">List of Cases</a></li>
                            </ul>
                        </li>
                        <?php } } ?>

                        <?php if(isset($useroles)){  if(in_array("manage_user",$useroles)){ ?> 
                            <br><li class="nav-label">Admin Panel</li>
                            <li><a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-user-plus"></i><span class="hide-menu">Registration</span></a>
                                <ul aria-expanded="false" class="collapse">
                                        <li><a href="view_user.php">User Management</a></li>
                                </ul>
                            </li>
                        <?php } } ?>
                        <?php if(isset($useroles)){  if(in_array("edit_customer",$useroles)){ ?> 
                            <li><a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-shield"></i><span class="hide-menu">Role</span>
                                </a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="assign_role.php">Create Role</a></li>
                                    <li><a href="view_role.php">View Role</a></li>
                                </ul>
                            </li>
                        <?php } } ?>
                        <?php if($_SESSION["username"]=='admin' ) { ?>
                            <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Pang dashboard</span></a>
                                <ul aria-expanded="false" class="collapse">


                                    <li><a href="pending_order.php">Laundry Status</a></li>
                                    <li><a href="completed_order.php">Completed Laundries</a></li>

                                <?php if(isset($useroles)){  if(in_array("delete_order",$useroles)){ ?>
                                    <li><a href="sales_report.php">Sales Report</a></li>
                                <?php } } ?>

                                </ul>
                            </li>
                        <?php }?>
                        <?php if($_SESSION["username"]=='admin') { ?>
                            <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-cog"></i><span class="hide-menu">Settings</span></a>
                                <ul aria-expanded="false" class="collapse">
                                <?php //if($_SESSION["username"]=='user' || $_SESSION["username"]=='admin') { ?>
                                <li><a href="manage_website.php">Website Management</a></li>
                                <?php //} ?>
                                <!--  <li><a href="email_config.php">Email Management</a></li>
                                </ul> -->
                            </li> 
                        <?php } ?>

                            <!--<li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-bandcamp"></i><span class="hide-menu">Services</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="add_services.php">Add Delivery Fee </a></li>
                                    <li><a href="view_services.php">Manage Delivery Fees</a></li>
                                </ul>
                            </li> -->
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

<!-- <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-address-book"></i><span class="hide-menu">Barangay User Regis</span></a>
<ul aria-expanded="false" class="collapse">
<li><a href="add_customer.php">Add Client</a></li>
<li><a href="view_customer.php">View Client</a></li>
</ul>
</li>