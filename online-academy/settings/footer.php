</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	    
	<!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>


    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

/*       	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'success',
                timer: 4000
            });*/
            
            
            
      $('.item_delete_button').click(function (e){
          e.preventDefault(e);
        var deletename =  $(this).closest("tr").find('.item_delete_name').val();
        var deleteid = $(this).closest("tr").find('.item_delete_id').val();
        var column = $(this).closest("tr").find('.item_column').val();
        var table = $(this).closest("tr").find('.item_table').val();
        
        console.log(deletename);
        console.log(deleteid);
        console.log(column);
        console.log(table);
          
          swal({
		  title: "Are you sure?",
		  text: deletename + " will be removed permanently!",
		  icon: "warning",
		  buttons: true,
		  dangerMode: true,
		})
		.then((willDelete) => {
		  if (willDelete) {
		      
		       $.ajax({
            	type: 'POST',
            	url: 'settings-action.php',
            	data: {
            	  "del_item_set": 1,
            	  "id": deleteid,
            	  "column": column,
            	  "table": table
            	},
            	success: function(response) {
            	  swal(deletename + " has been removed!", {
        			  icon: "success",
        			  
        			}).then((result) => {
        			    location.reload();
        			});
            	}
              });

		  } 
		});
	});

    	});
	</script>


</html>