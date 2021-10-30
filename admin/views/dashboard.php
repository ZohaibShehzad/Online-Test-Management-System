<?php
    include "../database/queries.php";
    include "header.php";
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
      <a class="navbar-brand" href="#"> Dashboard </a>
    </div>
    <div class="collapse navbar-collapse">
      <!--<ul class="nav navbar-nav navbar-right">
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
      </form>)-->
    </div>
  </div>
</nav>
<!-- End Navbar -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header" data-background-color="green">
            <i class="material-icons">supervisor_account</i>
          </div>
          <?php
              $no_User = $con->registered_Users();
            ?>
          <div class="card-content">
            <p class="category">Organizations</p>
            <h3 class="card-title">Nill</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons text-success">email</i>
              Organizations
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header" data-background-color="red">

            <i class="material-icons">supervisor_account</i>
          </div>
          <?php
              $unreg_Users = $con->unregistered_Users();
            ?>
          <div class="card-content">
            <p class="category">Active Tenders</p>
            <h3 class="card-title">Nill</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons text-danger">email</i>
              Total Active Tenders
            </div>
          </div>

        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header" data-background-color="rose">
            <i class="material-icons">equalizer</i>
          </div>
          <div class="card-content">
            <p class="category">Completed Tenders</p>
            <h3 class="card-title">Nill</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">local_offer</i> Total Completed Tenders
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header" data-background-color="blue">
            <i class="fa fa-twitter"></i>
          </div>
          <div class="card-content">
            <p class="category">Candidates</p>
            <h3 class="card-title">Nill</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">update</i> Total Tested Candidates
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--<div class="row">
      <div class="col-md-4">
        <div class="card card-chart">
          <div class="card-header" data-background-color="rose" data-header-animation="true">
            <div class="ct-chart" id="websiteViewsChart"></div>
          </div>
          <div class="card-content">
            <div class="card-actions">
              <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                <i class="material-icons">build</i> Fix Header!
              </button>
              <button type="button" class="btn btn-info btn-simple" rel="tooltip" data-placement="bottom"
                title="Refresh">
                <i class="material-icons">refresh</i>
              </button>
              <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom"
                title="Change Date">
                <i class="material-icons">edit</i>
              </button>
            </div>
            <h4 class="card-title">Website Views</h4>
            <p class="category">Last Campaign Performance</p>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">access_time</i> campaign sent 2 days ago
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-chart">
          <div class="card-header" data-background-color="green" data-header-animation="true">
            <div class="ct-chart" id="dailySalesChart"></div>
          </div>
          <div class="card-content">
            <div class="card-actions">
              <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                <i class="material-icons">build</i> Fix Header!
              </button>
              <button type="button" class="btn btn-info btn-simple" rel="tooltip" data-placement="bottom"
                title="Refresh">
                <i class="material-icons">refresh</i>
              </button>
              <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom"
                title="Change Date">
                <i class="material-icons">edit</i>
              </button>
            </div>
            <h4 class="card-title">Daily Sales</h4>
            <p class="category">
              <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span>
              increase in today sales.</p>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">access_time</i> updated 4 minutes ago
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-chart">
          <div class="card-header" data-background-color="blue" data-header-animation="true">
            <div class="ct-chart" id="completedTasksChart"></div>
          </div>
          <div class="card-content">
            <div class="card-actions">
              <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                <i class="material-icons">build</i> Fix Header!
              </button>
              <button type="button" class="btn btn-info btn-simple" rel="tooltip" data-placement="bottom"
                title="Refresh">
                <i class="material-icons">refresh</i>
              </button>
              <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom"
                title="Change Date">
                <i class="material-icons">edit</i>
              </button>
            </div>
            <h4 class="card-title">Completed Tasks</h4>
            <p class="category">Last Campaign Performance</p>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">access_time</i> campaign sent 2 days ago
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="card">
          <div class="card-header card-header-text" data-background-color="orange">
            <h4 class="card-title">Employees Stats</h4>
            <p class="category">New employees on 15th September, 2016</p>
          </div>
          <div class="card-content table-responsive">
            <table class="table table-hover">
              <thead class="text-warning">
                <th>ID</th>
                <th>Name</th>
                <th>Salary</th>
                <th>Country</th>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Dakota Rice</td>
                  <td>$36,738</td>
                  <td>Niger</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Minerva Hooper</td>
                  <td>$23,789</td>
                  <td>Curaçao</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Sage Rodriguez</td>
                  <td>$56,142</td>
                  <td>Netherlands</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Philip Chaney</td>
                  <td>$38,735</td>
                  <td>Korea, South</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="card">
          <div class="card-header card-header-tabs" data-background-color="rose">
            <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">
                <span class="nav-tabs-title">Tasks:</span>
                <ul class="nav nav-tabs" data-tabs="tabs">
                  <li class="active">
                    <a href="#profile" data-toggle="tab">
                      <i class="material-icons">bug_report</i> Bugs
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="">
                    <a href="#messages" data-toggle="tab">
                      <i class="material-icons">code</i> Website
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="">
                    <a href="#settings" data-toggle="tab">
                      <i class="material-icons">cloud</i> Server
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-content">
            <div class="tab-content">
              <div class="tab-pane active" id="profile">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="optionsCheckboxes" checked>
                          </label>
                        </div>
                      </td>
                      <td>Sign contract for "What are conference organizers afraid of?"</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="optionsCheckboxes">
                          </label>
                        </div>
                      </td>
                      <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="optionsCheckboxes">
                          </label>
                        </div>
                      </td>
                      <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept
                        through metro Detroit
                      </td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="optionsCheckboxes" checked>
                          </label>
                        </div>
                      </td>
                      <td>Create 4 Invisible User Experiences you Never Knew About</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane" id="messages">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="optionsCheckboxes" checked>
                          </label>
                        </div>
                      </td>
                      <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept
                        through metro Detroit
                      </td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="optionsCheckboxes">
                          </label>
                        </div>
                      </td>
                      <td>Sign contract for "What are conference organizers afraid of?"</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane" id="settings">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="optionsCheckboxes">
                          </label>
                        </div>
                      </td>
                      <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="optionsCheckboxes" checked>
                          </label>
                        </div>
                      </td>
                      <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept
                        through metro Detroit
                      </td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="optionsCheckboxes">
                          </label>
                        </div>
                      </td>
                      <td>Sign contract for "What are conference organizers afraid of?"</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>-->
  </div>
</div>
<?php
    include "footer.php";
?>