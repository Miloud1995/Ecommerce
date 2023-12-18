<!DOCTYPE html>
<html lang="en">
<base href="/public">

<head>
    <meta charset="utf-8">
    <title>Dashboard | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- third party css -->
    <link href="Admin/assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
    <!-- third party css end -->

    <!-- App css -->
    <link href="Admin/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="Admin/assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
    <link href="Admin/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



</head>

<style>
    .div_category {
        padding-top: 40px;
        text-align: center
    }

    .category_title {
        font-size: 40px;
        color: gray;
        font-weight: 700;
        padding-bottom: 40px;
        text-decoration: lavender
    }

    .form_des {
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin: auto;
        max-width: 30%;
    }
</style>

<body class="loading"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- LOGO -->
            @include('admin.Logo');
            <div class="h-100" id="leftside-menu-container" data-simplebar="">

                <!--- Sidemenu -->
                @include('admin.SideBar')

                <!-- Help Box -->
                @include('admin.HelpBox')
                <!-- end Help Box -->
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->
        @include('admin.NavBar')
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <div class="content">

                @yield('content')

            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->

        <!-- ============================================================== -->
        @include('admin.Footer')

    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    @include('admin.EndBar')
    <div class="rightbar-overlay"></div>
    <!-- /End-bar -->

    <!-- bundle -->
    <script src="Admin/assets/js/vendor.min.js"></script>
    <script src="Admin/assets/js/app.min.js"></script>

    <!-- third party js -->
    <script src="Admin/assets/js/vendor/apexcharts.min.js"></script>
    <script src="Admin/assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="Admin/assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="Admin/assets/js/pages/demo.dashboard.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- end demo js-->
</body>

</html>
