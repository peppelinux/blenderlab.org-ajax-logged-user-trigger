// add this in the header of the template's html code
<script>
		
	  	var data = {
    action: 'is_user_logged_in'
		};
	
	  function login_check() {
	  
	jQuery.post(ajaxurl, data, function(response) {
    if(response == 'yes') {
        // user is logged in, do your stuff here
	  console.log('logged');
	  
	  jQuery('.hide_if_logged_line').hide('slow', function(){ $target.remove(); });
	  jQuery('.hide_if_logged_cell').hide('slow', function(){ $target.remove(); });
	  
	  
    } else {
        // user is not logged in, show login form here
	  console.log('not logged');
    }
});
		
	  }
	  
   	</script>
