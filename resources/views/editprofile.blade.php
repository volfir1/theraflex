@vite(['resources/css/admin.css','resources/js/admin.js'])
@extends( 'layoutS.adminSidebar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheraFlex</title>
</head>
<body>
    <header class="adminHeader">
        <div class="text" >Edit Employee Information</div>
    </header>


    <div class="employee-image-container">
        <img class="employee-image" src="" alt="Employee Image">
        <input type="file" id="file-upload" class="file-upload" accept="image/*">

    </div>
    <label for="file-upload" class="upload-label">Upload Image</label>

    <h1>Edit Information</h1>
    <br>
    <form class="edit_myForm" id="edit_myForm">
        <label for="fname">First Name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last Name:</label><br>
        <input type="text" id="lname" name="lname"><br>
        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address"><br>
        <label for="contact">Contact Number:</label><br>
        <input type="text" id="contact" name="contact"><br>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <button type="submit" id="submitButton">Submit</button>
        <br>
    </form>


</body>
</html>