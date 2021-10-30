<?php
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
      <a class="navbar-brand" href="#"> Users Detail </a>
    </div>
    <div class="collapse navbar-collapse">
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
    </div>
  </div>
</nav>
<!-- End Navbar -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-icon" data-background-color="rose">
            <i class="material-icons">assignment</i>
          </div>
          <div class="card-body">
            <h4 class="card-title ">Users</h4>
            <p class="category"> Details of all Users</p>
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Roll No</th>
                  <th>Salary</th>
                </thead>
                <tbody>
                  <?php
                    $user = $con->get_Users();
                    while($row = array_shift($user)){
                  ?>
                  <tr>
                    <td><?php echo $row["Uid"]?></td>
                    <td><?php echo $row["Name"]?></td>
                    <td><?php echo $row["Address"]?></td>
                    <td><?php echo $row["RollNoSlip"]?></td>
                  </tr>
                  <?php
                    }
                  ?>
                  <tr>
                    <td>Dakota Rice</td>
                    <td>Niger</td>
                    <td>Oud-Turnhout</td>
                    <td class="text-primary">$36,738</td>
                  </tr>
                  <tr>
                    <td>Minerva Hooper</td>
                    <td>Curaçao</td>
                    <td>Sinaai-Waas</td>
                    <td class="text-primary">$23,789</td>
                  </tr>
                  <tr>
                    <td>Sage Rodriguez</td>
                    <td>Netherlands</td>
                    <td>Baileux</td>
                    <td class="text-primary">$56,142</td>
                  </tr>
                  <tr>
                    <td>Philip Chaney</td>
                    <td>Korea, South</td>
                    <td>Overland Park</td>
                    <td class="text-primary">$38,735</td>
                  </tr>
                  <tr>
                    <td>Doris Greene</td>
                    <td>Malawi</td>
                    <td>Feldkirchen in Kärnten</td>
                    <td class="text-primary">$63,542</td>
                  </tr>
                  <tr>
                    <td>Mason Porter</td>
                    <td>Chile</td>
                    <td>Gloucester</td>
                    <td class="text-primary">$78,615</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
    include "footer.php";
?>