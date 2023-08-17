<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <title>Seafoam Media | Contact Us</title>
</head>
<body>
<?php 
include("navbar.php");

include("sideNav.php");

// include('base.php')
// include("fullPage.php");


?>
<div class="formHolder">
<h1 class="formTitle">Contact Us</h1>
<form class="form_1" id="form1">
    <input class="f_input" type="text" placeholder="Name" name="name">
    <input class="f_input" type="text" placeholder="Email" name="email">
    <input class="f_input" type="text" placeholder="Subject" name="subject">
    <textArea class="f_input" type="text" placeholder="Body" name="body"></textArea>
    <input class="f_input" type="submit" id="fInput">
</form>
</div>

<script>

document.getElementById("form1").addEventListener("submit", (e) => {
    e.preventDefault();
    let name = document.querySelector('input[name="name"]').value;
    let email = document.querySelector('input[name="email"]').value;
    let subject = document.querySelector('input[name="subject"]').value;
    let body = document.querySelector('textArea[name="body"]').value;
    // let fInput = document.querySelector('input[id="fInput"]').value;
    console.log([name, email, subject, body]);


    // fetch('127.0.0.1:5000/client/storage', {
    //     method: 'POST',
    //     headers: {
    //         'Content-Type': 'application/json'
    //     },
    //     body: JSON.stringify({
    //         name: name,
    //         email: email,
    //         subject: subject,
    //         data: body
    //     })
    // }).then(function(response){
    //     console.log(response)
    // }).catch(function(error){
    //     console.log(error)
    // })
    // axios.post('127.0.0.1:5000/client/storage', {

    $.ajax({
        url: 'https://n-seafoam-api-8395335c5691.herokuapp.com/client/storage',
        method: 'POST',
        data: JSON.stringify({
            name: name,
            email: email,
            subject: subject,
            data: body
        }),
        headers: {
            'Content-Type': 'application/json',
        },
        success: function(response){
            console.log(response);
            alert(response);
        },

        error: function(error){
            console.log(error);
        }


    })
   
});
</script>

</body>
</html>