{{ csrf_token() }}
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{ URL::asset('js/Dashboard/jquery.min.js') }}"></script>
<!--<script>-->
<!--    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });-->
<!--</script>-->
<!-- Bootstrap Core JavaScript -->
<script src="{{ URL::asset('js/Dashboard/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ URL::asset('js/Dashboard/metisMenu.min.js') }}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{ URL::asset('js/Dashboard/raphael-min.js') }}"></script>
<script src="{{ URL::asset('js/Dashboard/morris.min.js') }}"></script>

<!--Tiny MCE-->
<script src="{{ URL::asset('js/Dashboard/tinymce/tinymce.min.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ URL::asset('js/Dashboard/sb-admin-2.js') }}"></script>
<!--Custom script for dashboard-->
<script src="{{ URL::asset('js/Dashboard/dashboard.js') }}"></script>


<script src="{{ URL::asset('UILibrary/vex/js/vex.combined.min.js') }}"></script>
<script>vex.defaultOptions.className = 'vex-theme-flat-attack';</script>

</body>
</html>