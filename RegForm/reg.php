<!DOCTYPE html>
<html lang="en">
   <head>
        
		<php?
           include 'connect.inc.php';

	    ?>
            
		<link rel="stylesheet" type="text/css" href="main.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
    </head>
       
       
       
       <style>
           #usn{
               
               width: 100%;
           }
             #email{
               
               width: 100%;
           }
           
           
      
       </style>
       
   <body>   
      
       
  
       
    
    <form action="insert.php" method="POST">
      <div class="container">
     <div class="form-wrap">
        <h1>Account Information</h1>
         
         <input type="text" name="username" placeholder="Username">
         <input type="email" name="email" placeholder="Email">
         <input type="password" name="pass" placeholder="Password">
         <input type="password" name="cpass" placeholder="Confirm Password"> 
    </div>  
    <div class="user-div">
         <h1>User Information</h1>
         <input type="text" name="f_name" placeholder="Firstname">
         <input type="text" name="l_name" placeholder="Lastname">
         <input type="text" name="c_number" placeholder="Contact Number ">
         <input type="text" name="address" placeholder="Address"> 
        
         <input type="text" name="city" placeholder="City">
         <input type="text" name="state" placeholder="State">
         <input type="text" name="zip" placeholder="Zip">
        
         <input type="submit" value="submit" onclick="return confirm('Are you sure you want to Save?')">
   
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