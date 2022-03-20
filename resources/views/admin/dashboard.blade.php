
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Custom fonts for this template-->
    @include('admin.admin_css')
    
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin.admin_navbar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->

                <!-- Topbar --> 
                @include('admin.admin_header')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                @yield('content')
                <!-- /.container-fluid -->

            <!-- End of Main Content -->

            <!-- Footer -->
            @include('admin.admin_footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    

    <!-- Bootstrap core JavaScript-->
    @include('admin.admin_script')
    @include('sweetalert::alert')
    @yield('scripts')
</body>

</html>