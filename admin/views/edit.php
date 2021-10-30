<?php
session_start();
$currentPage = $_SESSION['currentPage'];
    include "header.php";
    include "../database/queries.php";
    $con = new Queries();
?>
<!-- Navbar -->
<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container-fluid">
        <div class="navbar-minimize">
            <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                <i class="material-icons visible-on-sidebar-mini">view_list</i>
            </button>
        </div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"> Edit </a>
        </div>

        <!--<div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">dashboard</i>
                        <p class="hidden-lg hidden-md">Dashboard</p>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">notifications</i>
                        <span class="notification">5</span>
                        <p class="hidden-lg hidden-md">
                            Notifications
                            <b class="caret"></b>
                        </p>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Mike John responded to your email</a>
                        </li>
                        <li>
                            <a href="#">You have 5 new tasks</a>
                        </li>
                        <li>
                            <a href="#">You're now friend with Andrew</a>
                        </li>
                        <li>
                            <a href="#">Another Notification</a>
                        </li>
                        <li>
                            <a href="#">Another One</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">person</i>
                        <p class="hidden-lg hidden-md">Profile</p>
                    </a>
                </li>
                <li class="separator hidden-lg hidden-md"></li>
            </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group form-search is-empty">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="material-input"></span>
                </div>
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                    <i class="material-icons">search</i>
                    <div class="ripple-container"></div>
                </button>
            </form>
        </div>-->
    </div>
</nav><!-- End Navbar -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="display: none" id="emp">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">library_books</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Edit Employee</h4>
                        <?php
                        $id = $_COOKIE['id'];
                        $emp = $con->get_Employee($id);
                        while($row = array_shift($emp)){
                        ?>
                        <form class="form-horizontal" id="editEmp" method="post" action="editEmployee.php">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Name</label>
                                        <input type="text" value="<?php echo $row["Name"];?>" class="form-control"
                                            name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">CellNo</label>
                                        <input type="text" value="<?php echo $row["Cellno"];?>" class="form-control"
                                            name="cellno" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">CNIC</label>
                                        <input type="text" value="<?php echo $row["CNIC"];?>" class="form-control"
                                            name="cnic" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Address</label>
                                        <input type="text" value="<?php echo $row["Address"];?>" class="form-control"
                                            name="address" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="label-control">Joining</label>
                                        <input type="date" value="<?php echo $row["Start_date"];?>"
                                            class="form-control datepicker" value="<?php echo $row["Start_date"];?>" name="joining"
                                            required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="label-control">Termination</label>
                                        <input type="date" value="<?php echo $row["End_date"];?>"
                                            class="form-control datepicker" value="<?php echo $row["End_date"];?>" name="termination"
                                            required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <select class="selectpicker" data-style="btn btn-primary btn-round"
                                        title="Single Select" data-size="7">
                                        <option disabled selected>Choose Department</option>
                                        <option value="2">IT</option>
                                        <option value="3">Exam</option>
                                        <option value="4">Adminis</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="selectpicker" data-style="btn btn-primary btn-round"
                                        title="Single Select" data-size="7">
                                        <option disabled selected>Choose Posistion</option>
                                        <option value="2">Head</option>
                                        <option value="3">Staff</option>
                                    </select>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                            <button type="submit" form="editEmp" class="btn btn-primary btn-round pull-right">
                                <i class="material-icons">add</i> Edit </button>

                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12" style="display: none" id="organization">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">library_books</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Edit Organization</h4>
                        <?php
                        $id = $_COOKIE['id'];
                        $emp = $con->get_Org($id);
                        while($row = array_shift($emp)){
                        ?>
                        <form id="editOrg" method="post" action="editOrg.php">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Company</label>
                                        <input type="text" value="<?php echo $row['name']?>" class="form-control"
                                            name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nick</label>
                                        <input type="text" value="<?php echo $row['nick']?>" class="form-control"
                                            name="nick" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Email address</label>
                                        <input type="email" value="<?php echo $row['email']?>" class="form-control"
                                            name="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Address</label>
                                        <input type="text" value="<?php echo $row['address']?>" class="form-control"
                                            name="address" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Focal Person</label>
                                        <input type="text" value="<?php echo $row['focal_person']?>"
                                            class="form-control" name="focal" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Contact</label>
                                        <input type="text" value="<?php echo $row['contact']?>" class="form-control"
                                            name="contact" required>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                            <button type="submit" form="editOrg" class="btn btn-primary btn-round pull-right">
                                <i class="material-icons">add</i> Edit </button>

                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12" style="display: none" id="tender">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">library_books</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Edit Tender</h4>
                        <?php
                        $id = $_COOKIE['id'];
                        $emp = $con->get_Tender($id);
                        while($row = array_shift($emp)){
                        ?>
                        <form id="editTender" method="post" action="editTender.php">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Name</label>
                                        <input type="text" value="<?php echo $row['post'];?>" name="name"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Start Date</label>
                                        <input type="date" value="<?php echo $row['start_date']?>" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Last Date</label>
                                        <input type="date" value="<?php echo $row['end_date']?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Total Posts</label>
                                        <input type="text" value="<?php echo $row['jobs']?>" name="post"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
              ?>

                            <button type="submit" form="editTender" class="btn btn-primary btn-round pull-right">
                                <i class="material-icons">add</i> Edit </button>

                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12" style="display: none" id="post">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">library_books</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Edit Post</h4>
                        <?php
                        $id = $_COOKIE['id'];
                        $emp = $con->get_Job($id);
                        while($row = array_shift($emp)){
                        ?>
                        <form id="editPost" action="editJob.php" method="post">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Post Name</label>
                                        <input type="text" value="<?php echo $row['post']?>" name="post"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Vacancies</label>
                                        <input type="text" value="<?php echo $row['vacancies']?>" name="vacancies"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                            <button type="submit" form="editPost" class="btn btn-primary btn-round pull-right">
                                <i class="material-icons">add</i> Edit </button>

                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12" style="display: none" id="candidate">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">library_books</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Edit Candidate</h4>
                        <?php
                        $id = $_COOKIE['id'];
                        $emp = $con->get_Candidate($id);
                        while($row = array_shift($emp)){
                        ?>
                        <form id="editCandidate">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Company (disabled)</label>
                                        <input type="text" value="<?php echo $_COOKIE['name']?>" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Name</label>
                                        <input type="text" value="<?php echo $row['name']?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Adress</label>
                                        <input type="text" value="<?php echo $row['address']?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">CNIC</label>
                                        <input type="text" value="<?php echo $row['CNIC']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Contact</label>
                                        <input type="text" value="<?php echo $row['cell']?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Domicile</label>
                                        <input type="text" value="<?php echo $row['domicile']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Age</label>
                                        <input type="text" value="<?php echo $row['age']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Gender</label>
                                        <input type="text" value="<?php echo $row['gender']?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
              ?>
                            <button type="editCandidate" class="btn btn-primary btn-round pull-right">
                                <i class="material-icons">add</i> Edit </button>

                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12" style="display: none" id="alltenders">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">library_books</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Edit Tender</h4>
                        <?php
                        $id = $_COOKIE['id'];
                        $emp = $con->get_Tender($id);
                        while($row = array_shift($emp)){
                        ?>
                        <form id="editTender" method="post" action="addTender.php">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Name</label>
                                        <input type="text" value="<?php echo $row['post'];?>" name="name"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Start Date</label>
                                        <input type="date" value="<?php echo $row['start_date']?>" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Last Date</label>
                                        <input type="date" value="<?php echo $row['end_date']?>" class="form-control">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Total Posts</label>
                                        <input type="text" value="<?php echo $row['jobs']?>" name="post"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
              ?>

                            <button type="submit" form="editTender" class="btn btn-primary btn-round pull-right">
                                <i class="material-icons">add</i> Edit </button>

                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
if($currentPage=="employees"){?>
<script type="text/javascript">
    document.getElementById("emp").style.display = "block";
</script>
<?php
} else if($currentPage=="organization"){?>
<script type="text/javascript">
    document.getElementById("organization").style.display = "block";
</script>
<?php
} else if($currentPage=="tender"){?>
<script type="text/javascript">
    document.getElementById("tender").style.display = "block";
</script>
<?php
} else if($currentPage=="jobs"){?>
<script type="text/javascript">
    document.getElementById("post").style.display = "block";
</script>
<?php
} else if($currentPage=="candidate"){?>
<script type="text/javascript">
    document.getElementById("candidate").style.display = "block";
</script>
<?php
} else if($currentPage=="alltenders"){?>
<script type="text/javascript">
    document.getElementById("alltenders").style.display = "block";
</script>
<?php
}
?>


<?php
    include "footer.php";
?>