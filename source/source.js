function addUser() {
	
	var name = $('#name').val().trim();
    var email = $('#email').val().trim();
    var address = $('#address').val().trim();
    var action = $('#action').val().trim();

        $.ajax({
	        type: 'POST',
	        url: 'classes.php',
	        data: {
	            name:name,
	            email:email,
	            address:address,
				action: action,
        	},
          
        success: function(result){
            console.log(result);
        },
        
		error:  function(str, xhr){
	    	alert('Error: ' + xhr.responseCode);
          }

        });
};

function addAccount() {
	
	var account = $('#account').val().trim();
    var user_id = $('#user_id').val().trim();
    var action = $('#action').val().trim();

        $.ajax({
	        type: 'POST',
	        url: 'main.php',
	        data: {
	            account:account,
	            user_id:user_id,
				action: action,
		        },  

        success: function(result){
            console.log(result);
        },
        
		error:  function(str, xhr){
	    	alert('Error: ' + xhr.responseCode);
          }

        });
};


