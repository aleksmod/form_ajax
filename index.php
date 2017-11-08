<?php include 'classes.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <title>test</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

		<div class="row">
		  	<div class="col-4">
				<h3>New User</h3>	
				<form method="POST">
				  <div class="form-group">
				    <input class="form-control" type="text" id="name" name="usr_name" value="" placeholder="name" required>
				    <input class="form-control" type="email" id="email" name="usr_email"  value="" placeholder="email" required>
				    <input class="form-control" type="address" id="address" name="usr_address" value="" placeholder="country" required>
				    <input type="hidden" id="action" name="action" value="addUser">
				  </div>
				  <input type="submit" class="btn btn-success" value="Add User" onclick="addUser()">
				</form>

				<hr>

				<h3>New Account</h3>

				<form method="POST">
				  <div class="form-group">
				    <input class="form-control" type="number" id="account" name="account" value="" placeholder="account number" required>
				    <input class="form-control" type="number" id="user_id" name="user_id" value="" placeholder="user_id" required>
				    <input type="hidden" id="action" name="action" value="addAccount">

				  </div>
				  <input type="submit" class="btn btn-primary" value="Submit" onclick="addAccount()">
				</form>

		  	</div>


		  	<div class="col-8">
				<h3>Common Table</h3>	
					<table class="table">
						<thead style="background: #fc0">
					    	<tr>
							    <th scope="col">ID</th>
							     <th scope="col">Name</th>
							    <th scope="col">Email</th>
							    <th scope="col">Address</th>
							    <th scope="col">accounts</th>
								<th scope="col">Date added</th>
					    	</tr> 
				  		
						<tbody>
							<?php foreach ($users as $user) { ?>
	        				<tr> 
	        					<td><?php echo $user['id']?></td>
					            <td><?php echo $user['usr_name']?></td>
					            <td><?php echo $user['usr_email']?></td>
					            <td><?php echo $user['usr_address']?></td>
					            <td><?php echo $user['account']?></td>
					            <td><?php echo $user['date']?></td>
					        </tr>
					        <?php } ?>
						</tbody>	

					</table>		 
				
			</div>
				
		</div>

  </body>
  	<script src="source/source.js"></script>
</html>