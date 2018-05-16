<html>
<head>
<title>Add Sports Post</title>
</head>
<body>
<?php
require 'vendor/autoload.php';
include_once("config.php");
if(isset($_POST['Submit'])) {    
    $user = array (
                'name' => $_POST['name'],
                'message' => $_POST['message']
            );
			$errorMessage = '';
    foreach ($user as $key => $value) {
        if (empty($value)) {
            $errorMessage .= $key . ' field is empty<br />';
        }
    }
    
    if ($errorMessage) {
        // print error message & link to the previous page
        echo '<span style="color:red">'.$errorMessage.'</span>';
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";    
    } else {
        //insert data to database table/collection named 'users'
        $db->sports->insertOne($user);
        
        //display success message
        echo "<font xcolor='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}
?>
</body>
</html>