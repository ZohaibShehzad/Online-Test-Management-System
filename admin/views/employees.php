<?php
session_start();
$_SESSION["currentPage"] = "employees";

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
      <a class="navbar-brand" href="#"> Employees </a>
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
</nav>
<!-- End Navbar -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-icon" data-background-color="purple">
            <i class="material-icons">assignment</i>
          </div>
          <div class="card-content">
            <button class="btn btn-primary btn-round btn-fab btn-fab-mini pull-right" data-toggle="tooltip"
              data-placement="top" title="Click to Add a New Employee" id="add-employee">
              <i class="material-icons">add</i>
            </button>
            <button class="btn btn-success btn-round btn-fab btn-fab-mini pull-right" data-toggle="tooltip"
              data-placement="top" title="Export to Excel" id="export">
              <i class="material-icons">save_alt</i></button>


            <h4 class="card-title">Employees</h4>
            <p class="category" id="card">Details of Employees</p>
            <div class="toolbar">

              <!--        Here you can write extra buttons/actions for the toolbar              -->
            </div>
            <form class="form-horizontal" id="add-new" method="post" action="addEmployee.php" style="display: none">
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="bmd-label-floating">Name</label>
                    <input type="text" class="form-control" name="name" required>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="bmd-label-floating">CellNo</label>
                    <input type="text" class="form-control" name="cellno" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">CNIC</label>
                    <input type="text" class="form-control" name="cnic" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Address</label>
                    <input type="text" class="form-control" name="address" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="label-control">Joining</label>
                    <input type="text" class="form-control datepicker" value="10/10/2016" />
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="label-control">Termination</label>
                    <input type="text" class="form-control datepicker" value="10/10/2016" />
                  </div>
                </div>
                <div class="col-md-3">
                  <select class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select"
                    data-size="7">
                    <option disabled selected>Choose Department</option>
                    <option value="2">IT</option>
                    <option value="3">Exam</option>
                    <option value="4">Adminis</option>
                  </select>
                </div>
                <div class="col-md-3">
                  <select class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select"
                    data-size="7">
                    <option disabled selected>Choose Posistion</option>
                    <option value="2">Head</option>
                    <option value="3">Staff</option>
                  </select>
                </div>
              </div>
              <button type="button" id="cancel" class="btn btn-danger btn-round pull-right">Cancel</button>
              <button type="submit" form="add-new" class="btn btn-primary btn-round pull-right">
                <i class="material-icons">add</i> Add </button>

              <div class="clearfix"></div>
            </form>
            <div class="material-datatables" id="display">
              <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0"
                width="100%" style="width:100%">
                <thead class=" text-primary">
                  <tr>
                    <th class="text-center">#</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>CNIC</th>
                    <th>CellNo</th>
                    <th>Joining</th>
                    <th>Termination</th>
                    <th>Department</th>
                    <th>Position</th>
                    <th class="disabled-sorting text-right noExl">Actions</th>
                </thead>
                </tr>
                <tfoot class="text-primary">
                  <tr class="noExl">
                    <th class="text-center">#</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>CNIC</th>
                    <th>CellNo</th>
                    <th>Joining</th>
                    <th>Termination</th>
                    <th>Department</th>
                    <th>Position</th>
                    <th class="text-right">Actions</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php
                    $user = $con->get_Employees();
                    $num = 0;
                    while($row = array_shift($user)){
                      $num +=1;
                  ?>
                  <tr>
                    <td class="text-center"><?php echo $row["id"]?></td>
                    <td><?php echo $row["Name"]?></td>
                    <td><?php echo $row["Address"]?></td>
                    <td><?php echo $row["CNIC"]?></td>
                    <td><?php echo $row["Cellno"]?></td>
                    <td><?php echo $row["Start_date"]?></td>
                    <td><?php echo $row["End_date"]?></td>
                    <td><?php echo $row["Department"]?></td>
                    <td><?php echo $row["Position"]?></td>
                    <td class="td-actions text-right noExl">



                      <a href="#" class="btn btn-simple btn-warning btn-icon edit" data-toggle="tooltip"
              data-placement="top" title="Edit"><i class="material-icons">dvr</i></a>
                      <a href="#" class="btn btn-simple btn-danger btn-icon remove"data-toggle="tooltip"
              data-placement="top" title="Delete"><i
                          class="material-icons">close</i></a>

                    </td>
                  </tr>
                  <?php
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  document.getElementById("add-employee").onclick = function () {
    document.getElementById("display").style.display = "none";
    document.getElementById("add-new").style.display = "block";
    document.getElementById("card").innerHTML = "Fill the form";
  }
  document.getElementById("cancel").onclick = function () {
    document.getElementById("display").style.display = "block";
    document.getElementById("add-new").style.display = "none";
    document.getElementById("card").innerHTML = "Details of Employees";
  }
</script>

<?php
    include "footer.php";
?>