<html>

<head>
    
    <php?
           include 'connect.inc.php';

	    ?>
	<title>Registration Form</title>
	
	<style>
		body{
			background: #333;
			font-family:arial;
		}
		form{
			padding:10px;
			margin:0 auto;
			background:#FFFFFF;
			width:500px;
		}

		label{
			font-weight:bold;
			float:left;
			width: 200px;
		}
	</style>

</head>

<body>
	    <form action="insert.php" method="POST">
      <div class="container">
     <div class="form-wrap">
        <h1>Account Information</h1>
         		<label>Username:</label> <input type="text" name="username" required/><br />
		<label>Email:</label> <input type="text" name="email" required /><br />
		<label>Password:</label> <input type="password" name="pass" required /><br />
		<label>Confirm Password</label> <input type="password" name="cpass" required />
    </div>  
    <div class="user-div">
        <h1>User Information</h1>
        <label>First Name:</label> <input type="text" name="f_name" required/><br />
		<label>Last Name:</label> <input type="text" name="l_name" required/><br />
		<label>Contact Number:</label> <input type="text" name="c_number" required/><br />
		<label>Address</label> <textarea rows="2" cols="20" name="address" required ></textarea><br />
		<label>City:</label> <input type="text" name="city" required /><br />
		<label>State:</label> <input type="text" name="state" required /><br />
		<label>Zip:</label> <input type="text" name="zip" required />
	</fieldset><br /><br />
          <div align="right">
         <input type="submit" value="submit" onclick="return confirm('Are you sure you want to Save?')">
          </div>
        </div>
    </div>
     
        
     </form>

<script>
     
         $(document).ready(function() {
        $("#submit").click(function(event) {
        if( !confirm('Are you sure that you want to submit the form') ){
            event.preventDefault();
        } 

        });
        });
         </script>

</body>

</html>