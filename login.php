<?php
    require_once 'library.php';
    if(chkLogin()){
        header("Location: index.php");
    }
?>
<html>
    <head>

    </head>
	
    <body>

   <form  method="post" action="login_action.php">
    <center>
               <table border="2" width="30%" cellpadding="5">
                   <thead>
                       <tr>
                           <th colspan="2">Enter Information Here</th>
                       </tr>
                   </thead>
                   <tbody>
                    <tr>
                <td>Email</td>
                   <td><input type="email"  id="exampleInputEmail3" name="email" placeholder="Email" required></td>
                </tr>
                <tr>
                <td> Password </td>
                   <td> <input type="password"  id="exampleInputPassword3" name="pass" placeholder="Password" required></td>
                   </tr>
                <tr>

            <td> <input type="submit" name="login" value="submit"/></td>
            </tr>
       </tbody>
            </table>
            </center>
        </form>
    </body>
</html>