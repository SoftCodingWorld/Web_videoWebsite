<?php session_start(); 
/* 
    Team Lead: Yujin Xiong
    Back End Developer: Michael Riesberry
    Front End Designer: Jingfei Wang
    Front End Developer(JS): Chunxia Pang
    Front End Developer(s)(HTML): Jingfei Wang, Yujin Xiong
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Group18_Section303_Assignment2">
    <title>Login</title>
    <link href="assignment2.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="script.js" defer></script>
</head>
<body>
<?php include 'header.php' // Adds header.php to page, prints header and nav bar ?>

<main>
    <div>
        <h2>Are you sure you want to delete your account?</h2>
        <a class="confir" href="deleteuser.php">Yes</a>
        <a class="confir" href="edituser.php">No</a>
    </div>

</main>

<?php include 'footer.php' // Adds footer.php to page, prints footer ?>