<?php
?>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.0.1
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
<script src="../../../plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../../bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../dist/js/demo.js"></script>

<script src="../../../plugins/select2/select2.full.min.js"></script>
<script src="../../../plugins/datepicker/bootstrap-datepicker.js"></script>


<script>
$(function () {
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


  $.ajax({
      url: "http://52.26.82.79/apis/get_modules.php",
      success: function(data) {
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

    }
  });
});
</script>


</body>
</html>
