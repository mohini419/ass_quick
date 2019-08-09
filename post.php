<?php 
	include_once'post_details.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>POST</title>
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <link href="post.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="signup__box">
        <div class="header">
                <h2>POST</h2>
        </div>
        <form  method="post" action="post_details.php">
            <div class="input-group">
                <p>Title</p>
                <input type="text" name="title" placeholder="Enter title">
            </div>  
            <div class="input-group">          
                    <p>Description</p>

                    <input type="text" name="discription" placeholder="Description">
            </div>
            
            <div class="input-group">
                         <input type="file" name="image" id="fileSelect"><br><br>
                         
            </div>

            <div class="input-group">
                <input  type="submit" name="submit" value="Submit">
            </div>

            <div class="input-group">
               <a href="home_page.php">Go Back</a>
            </div>
            
		</form>
    </div>
</body>
</html>
