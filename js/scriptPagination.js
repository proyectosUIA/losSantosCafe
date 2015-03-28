<script type="text/javascript">
$(function () {
    $('.pglinks').on({
        click: function (e) {
       	 	ProcessPagination(this);
        	return false;
        }
    }, '.pagination');
});
function ProcessPagination(obj) {
    var id = $(obj).attr('id');
    if (id != undefined) {
    	var pid = null;
    if (id.indexOf("pl_") != -1) {
    	pid = id.replace("pl_", "");
    }
    else if (id.indexOf("pn_") != -1) {
    	pid = id.replace("pn_", "");
    }
    else if (id.indexOf("pg_") != -1) {
   	 	pid = id.replace("pg_", "");
    }
    else if (id.indexOf("pp_") != -1) {
    	pid = id.replace("pp_", "");
    }
    else if (id.indexOf("p_") != -1) {
    	pid = id.replace("p_", "");
    }
    	alert(pid + " linke selected");
    }
}
</script>