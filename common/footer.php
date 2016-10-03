<?php
?>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.0.2
    </div>
    <strong>Copyright &copy; 2016-2017 ABC XYZ.</strong> All rights
    reserved.
  </footer>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>



<script>

  function recursiveCall(obj) {
    var str = ""
    $.each(obj, function(i, item) {
      str = str +
      "<ul class='treeview-menu'>"+
      "    <li>";
      if (item.child != null) {
        str = str +"      <a href='#'>";
      } else {
        str = str +"      <a href='" + item.url + "'>";
      }
      str = str +
      "        <i class='fa fa-th'></i> <span>" + item.title + "</span>"+
      "      </a>";
      if (item.child != null) {
        str = str + recursiveCall(item.child);
      }
      str = str +
      "    </li>" +
      "</ul>";
    });
    return str;
  }

  $.get("http://localhost/ui/get_modules.php", function(data){
    var obj = JSON.parse(data);
    $.each(obj, function(i, item) {
      var str = ""+
      "    <li>";
      if (item.child != null) {
        str = str +
        "      <a href='#'>"+
        "        <i class='fa fa-th'></i> <span>" + item.title + "</span>"+
        "      </a>";
        str = str + recursiveCall(item.child);
      } else {
        str = str +
        "      <a href='" + item.url + "'>"+
        "        <i class='fa fa-th'></i> <span>" + item.title + "</span>"+
        "      </a>";
      }
      str = str +
      "    </li>";

      $("#sidemenu").append(str);
    });
  });
</script>


</body>
</html>

