<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTORY MANAGEMENT</title>

    <!-- Box Icons  -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Styles  -->
    <link rel="shortcut icon" href="assets/img/kxp_fav.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css?v=2">
    <title>Home Page</title>
<meta charset="utf-8">
   <!--bootstrap CDN-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!--css link -->
  <link rel="stylesheet" href="styleuser.css">
  
</head>


<div class="sidebar ">
        <!-- ========== Logo ============  -->
        <a href="#" class="logo-box">
            <i class='bx bxl-xing'></i>
            <div class="logo-name">INVENTORY MANAGEMENT</div>
        </a>

        <!-- ========== List ============  -->
        <ul class="sidebar-list">
            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="./adminhome.php" class="link">
                        <i class='bx bx-grid-alt'></i>
                        <span class="name">Dashboard</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Dashboard</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <!-- -------- Dropdown List Item ------- -->
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-collection'></i>
                        <span class="name">Users</span>
                    </a>
                    <i class='bx bxs-chevron-down'></i>
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Category</a>
                    
                    <a href="./user_info.php" class="link">User Info</a>

                </div>
            </li>

            <!-- -------- Dropdown List Item ------- -->
            <li class="dropdown">
                <div class="title">
                    <a href="./category.php" class="link">
                        <i class='bx bx-book-alt'></i>
                        <span class="name">Categories</span>
                    </a>
                    
                </div>
            </li>

            <!-- -------- Non Dropdown List Item ------- -->
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-book-alt'></i>
                        <span class="name">Items</span>
                    </a>
                    <i class='bx bxs-chevron-down'></i>
                </div>
                <div class="submenu">
                    <a href="./insert.php" class="link">Add New Item</a>
                    <a href="./update.php" class="link">Update and Delete</a>
                    <a href="./itemsdisplay.php" class="link">Display</a>
                </div>
            </li>


            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="./purchasereport.php" class="link">
                        <i class='bx bx-pie-chart-alt-2'></i>
                        <span class="name">Purschase Summary </span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Chart</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <!-- -------- Dropdown List Item ------- -->
            <li class="dropdown">
                <div class="title">
                    
                        <i class='bx bx-extension'></i>
                        <span class="name">Report</span>
                        <i class='bx bxs-chevron-down'></i>
                    </a>          
                </div>
                <div class="submenu">
                    <a href="./report.php" class="link">Request Items</a>
                    <a href="./my_request.php" class="link">My Requests</a><span> 5</span>                 
                </div>
            </li>


        </ul>
    </div>

    <!-- ============= Home Section =============== -->
    <section class="home">
        <div class="toggle-sidebar">
            <i class='bx bx-menu'></i>-
            <div class="text">INVENTORY MANAGEMENT</div>
        </div>
    </section>
    <script src="assets/js/main.js"></script>

</html>