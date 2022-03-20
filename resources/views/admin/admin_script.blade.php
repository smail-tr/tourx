<script src="admin/vendor/jquery/jquery.min.js"></script>
<script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="admin/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="admin/vendor/chart.js/Chart.min.js"></script>

{{-- Text editor --}}

<!-- include summernote js -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<!-- Page level custom scripts -->
<script src="admin/js/demo/chart-area-demo.js"></script>
<script src="admin/js/demo/chart-pie-demo.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>

@include('sweetalert::alert')

<script>
    // select update js
    $(document).on('click', '.edit', function() {
        var _this = $(this).parents('tr');
        $('#id').val(_this.find('.id').text());
        $('#name').val(_this.find('.name').text());

    });
</script>
