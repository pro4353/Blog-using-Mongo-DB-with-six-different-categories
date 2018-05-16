<?php
require 'vendor/autoload.php';
    require_once 'library.php';
    if(chkLogin()){
        header("Location: index.php");
    }
?>
<html>
    <head>

    </head>

    <body>
        <form  action="register_action.php" method="post">
         <center>
		             <table border="2" width="40%" cellpadding="5">
		                 <thead>
		                     <tr>
		                         <th colspan="2">Register</th>
		                     </tr>
		                 </thead>
		                 <tbody>
                    <tr>
           <td>First Name</td>
            <td><input type="text"  id="inputFname3" name="fname" placeholder="First Name" required></td>
          </tr>

          <tr>
          <td>Lasst Name</td>
            <td><input type="text"  id="inputLname3" name="lname" placeholder="Last Name" required></td>
            </tr>
     <tr>
          <td>Email</td>
             <td> <input type="email"  id="inputEmail3" name="email" placeholder="Email" required></td>
          </tr>

          <tr>
          <td>Password</td>

          <td><input type="password"  id="pass" name="pass" placeholder="Password" required></td>
          </tr>
          <tr>
          <td>Confirm Password</td>
             <td> <input type="password"  id="cpass" name="cpass" onblur="chk()" placeholder="Confirm Password" required></td>
          </tr>

          <tr>
            <td> <input type="submit"  name="reg" value="submit"/></td>
          </tr>
          <tr>
		                          <td colspan="2">Already registered!! <a href="login.php">Login Here</a></td>
		                      </tr>
		                  </tbody>
		              </table>
		              </center>

      </form>
        <script src="myscript.js" type="text/javascript"></script>
    </body>
</html>