<?php
session_start();
$_SESSION["currentPage"] = "candidate";
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
      <a class="navbar-brand" href="#"> Current Candidates </a>
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
            <button class="btn btn-primary btn-round btn-fab btn-fab-mini pull-right" id="add-org">
              <i class="material-icons">add</i>
            </button>
            <button class="btn btn-success btn-round btn-fab btn-fab-mini pull-right" data-toggle="tooltip"
              data-placement="top" title="Export to Excel" id="export">
              <i class="material-icons">save_alt</i></button>
            <h4 class="card-title ">Candidates</h4>
            <p class="category" id="card">List of All the Candidates</p>
            <form id="add-new" style="display: none">
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="bmd-label-floating">Company (disabled)</label>
                    <input type="text" value="<?php echo $_COOKIE['name']?>" class="form-control" disabled>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Name</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Adress</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">CNIC</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Contact</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Domicile</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Age</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Gender</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
              <button type="button" id="cancel" class="btn btn-danger btn-round pull-right">Cancel</button>
              <button type="submit" class="btn btn-primary btn-round pull-right">
                <i class="material-icons">add</i> Add </button>

              <div class="clearfix"></div>
            </form>
            <div class="table-responsive" id="display">
              <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0"
                width="100%" style="width:100%">
                <thead class=" text-primary">
                  <th class="text-center">#</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>CNIC</th>
                  <th>CellNo</th>
                  <th>Domicile</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>Applying For</th>
                  <th>From</th>
                  <th class="disabled-sorting text-right noExl">Actions</th>
                </thead>
                <tbody>
                  <?php
                    $user = $con->get_All_Candidates();
                    $num = 0;
                    while($row = array_shift($user)){
                      $num +=1;
                  ?>
                  <tr>
                    <td class="text-center"><?php echo $row["id"]?></td>
                    <td><?php echo $row["name"]?></td>
                    <td><?php echo $row["address"]?></td>
                    <td> <?php echo $row["CNIC"]?></td>
                    <td><?php echo $row["cell"]?></td>
                    <td><?php echo $row["domicile"]?></td>
                    <td><?php echo $row["age"]?></td>
                    <td><?php echo $row["gender"]?></td>
                    <td><?php echo $row["post"]?></td>
                    <td><?php echo $row["organizationname"]?></td>
                    <td class="td-actions text-right noExl">
                      <a href="#" class="btn btn-simple btn-info btn-icon like" data-toggle="tooltip"
                        data-placement="top" title="View"><i class="material-icons">person</i></a>
                      <a href="#" class="btn btn-simple btn-warning btn-icon edit" data-toggle="tooltip"
                        data-placement="top" title="Edit"><i class="material-icons">dvr</i></a>
                      <a href="#" class="btn btn-simple btn-danger btn-icon remove" data-toggle="tooltip"
                        data-placement="top" title="Delete"><i class="material-icons">close</i></a>
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
  document.getElementById("add-org").onclick = function () {
    document.getElementById("display").style.display = "none";
    document.getElementById("add-new").style.display = "block";
    document.getElementById("card").innerHTML = "Fill the form";
  }
  document.getElementById("cancel").onclick = function () {
    document.getElementById("display").style.display = "block";
    document.getElementById("add-new").style.display = "none";
    document.getElementById("card").innerHTML = "List of Jobs";
  }
</script>

<?php
    include "footer.php";
?>