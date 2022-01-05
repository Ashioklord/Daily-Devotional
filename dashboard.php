<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Home - LivingRight</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  
</head>
<body>
  <div class="container-scroller d-flex">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
      </div>
    </div>
    <!-- partial:./partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item sidebar-category">
          <p>Navigation</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">
            <i class="mdi mdi-church menu-icon"></i>
            <span class="menu-title">Dashboard</span>
            <div class="badge badge-info badge-pill">0</div>
          </a>
        </li>
        <li class="nav-item sidebar-category">
          <p>Menu</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="wordfortheday.html">
            <i class="mdi mdi-bible menu-icon"></i>
            <span class="menu-title">Word for The Day</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bibleverses.html">
            <i class="mdi mdi-book-open-page-variant menu-icon"></i>
            <span class="menu-title">Bible Verses</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ToDoLists.html">
            <i class="mdi mdi-clipboard-outline menu-icon"></i>
            <span class="menu-title">ToDo Lists</span>
          </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="logout.php">
                  <i class="mdi mdi-logout menu-icon"></i>
                  <span class="menu-title">Logout</span>
                </a>
                </li>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:./partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1"><p>
            Welcome,
                <?php echo $_SESSION['username']; ?>
        </p></h4>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item">
              <h4 class="mb-0 font-weight-bold d-none d-xl-block"><?php
  echo "Today is " . date("d-m-Y") . "<br>";
?></h4>
            </li>
            <li class="nav-item dropdown me-1">
              <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-calendar mx-0"></i>
                <span class="count bg-info">0</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header"><b>Notifications</b></p>
                <a class="dropdown-item preview-item">
                No Notifications Yet.
                </a>
              </div>
            </li>
            <li class="nav-item dropdown me-2">
              <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-email-open mx-0"></i>
                <span class="count bg-danger">0</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header"><b>Messages</b></p>
                <a class="dropdown-item preview-item">
                 No Messages Yet.
                </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
        <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Here..." aria-label="search" aria-describedby="search">
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <span class="nav-profile-name">Menu</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                  <i class="mdi mdi-settings text-primary"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="logout.php">
                  <i class="mdi mdi-logout text-primary"></i>
                    Logout
                </a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Advices for the week</h4>
                  <div class="table-responsive">
                    &nbsp;
                    <p><b>1. You have the opportunity to make a difference in the world and in yourself. Make the day meaningful.</b>
Waking up Every morning you are given another chance to think about your purpose in life. Before you get out of bed, take a moment to realize that you have been given the gift of a brand new day. How can you make it meaningful?
</p>
<p><b>
2.  Breathe your way to a calmer, healthier, happier life.</b>
Breathing. You do it all day but unless you’re a regular meditator, yogi, or tri-athlete, you probably don’t pay much attention to your breath. Yet, breathing is the source of life. Learning to breath properly  can relieve anxiety and stress, prevent illness, improve your sleep, help you manage your pain, lower high blood pressure, promote weight loss, and has many more benefits.
</p>
<p><b>
3. Start the chain reaction of positive tasking.</b>
Make your bed. If you’re a neat person, making the bed is something that’s easy for you. But if you are the type of person who rushes out the door at the last minute, making the bed is the last thing you think about. It’s time to re-think that. There are many lessons in the making of your bed. Didn’t your mother tell you, “The way you make your bed is the way you sleep in it?” I never understood what that meant but I knew there was profound wisdom in it. I’m sure “sleep” was a metaphor for life. So listen to your mother, if you want to have a smooth life, make your bed.
</p>
<p><b>
4. Most things are not as bad as you think they are.</b>
Washing the dishes. Did you know it takes only one minute to wash a pan, two knives, one fork, a cutting board and a bowl? See for yourself. Time it. Instead of turning your back on that stack of dirty dishes in the sink, invest a minute and wash them. You’ll feel so much better if you do. Don’t make things worse than they really are.
</p>
<p><b>
5. Smaller problems are much easier to manage than larger problems.</b>
Not putting your things away. Piles are easy to accumulate. Clothing, paper, bathroom towels, whatever your piles may be, your piles say a lot about you. It’s easy to accumulate piles in our private homes, no one sees them, but you should. Is that really how your want your life to be? One big stack of piles? It’s much easier to put away one towel, one t-shirt, or one piece than it is to put away a huge stack of them. Take care of things when they are small.
</p>
<p><b>
6.  Be considerate of others.</b>
Arriving on time. You start out on schedule but soon things get in the way. The dog pukes, you can’t find your cell phone, and the baby needs a diaper change and before you realize it, you’re twenty minutes late. People are waiting for you either at a meeting, a restaurant, or at the airport. As they wait, the negative comments about your tardiness start. Is that how you want others to view you? Set aside extra time for things to go wrong because it is most likely they will.
</p>                 
</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:./partials/_footer.html -->
        <footer class="footer">
          <div class="card">
            <div class="card-body">
              <div class="d-sm-flex justify-content-center justify-content-sm-between py-2">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.midesblogdotnet.wordpress.com/" target="_blank">Olumide Adewole</a>&nbsp2022</span>

              </div>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
    <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>