<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/registrationStyle.css ?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
</head>
<body>
    
    <form class="container" action="./process_registrationOOP.php" method="post">
        <h2 class="heading">Sign Up</h2>
        <div class="steps-container">
            <hr>
            <hr class="active">
            <div class="steps"><i class="fa-solid fa-user"></i></div>
            <div class="steps"><i class="fa-solid fa-envelope"></i></div>
            <div class="steps"><i class="fa-solid fa-key"></i></div>
            <div class="steps"><i class="fa-solid fa-trophy"></i></div>
        </div>
    
        <div class="input-slide-contianer">
            <scroller class="scro">
                <div class="input-slide">
                <h3>User Name</h3>
                <p><i>Username is your online identity</i></p>
                <ul class="rules">
                    <li>Your username should only contain letters, numbers, underscores or hyphens. </li><li>No spaces or special characters allowed.</li>
                    <li>Your username should not be offensive or contain profanity.</li>
                </ul>
                <input type="text" placeholder="Type your username Here" name="username" class="username">
                <div class="full-name"><input type="text" placeholder="First Name" name="firstname">
                <input type="text" name="lastname" class="lastname" placeholder="Last Name"></div>
                <button class="button-nex" onclick="NextSlide(1)">Next</button>
            </div>
            <div class="input-slide user-detail">
                <h3>Email</h3>
                <p><i>Email is the gateway to your digital life</i></p>
                <ul class="rules">
                    <li>Please enter valid email in the format "example@example.com".</li>
                    <li>we value your privacy and will never use your email for any unauthorized purposes.</li>
                    <li>Please don't use email that belong to someone else.</li>
                
                </ul>
                <input type="email" name="email" class="email" placeholder="Email">     
                <button class="button-nex" onclick="NextSlide(2)">Next</button>
            </div>
            <div class="input-slide password-slide">
                <h3>Password</h3>
                <p><i>Secure your account with a strong password</i></p>
                <ul class="rules">
                    <li>Include a mix of uppercase and lowercase letters, numbers, and special characters.</li>
                    <li>Avoid using common or easily guessable passwords.</li>
                    <li>Do not use personal information.</li>
                </ul>
                <input type="password" name="password" class="password" placeholder="Password">
                <input type="password" name="confirm_password" class="confirm-password" placeholder="Confirm Your Password">
                <button class="button-nex" onclick="NextSlide(3)">Next</button>
            </div>
            <div class="input-slide finish-slide">
                <h3>Congratulations!</h3>
                <p><i>You have completed all the steps required for registration.</i></p>
                <ul class="rules">
                <li>Before submitting your information, please take a moment to ensure that all the details provided are correct. </li>
                <li> We take the privacy and security of our users very seriously, and it is important that all the information provided is accurate and up-to-date.</li> 
                <li>Once you have confirmed that everything is in order, simply click the 'Submit' button.</li>
                </ul> 
                <button type="submit" class="button-nex" >Sumbit</button>
            </div>
        </scroller> 
        </div>
      <button class="GoBack" onclick="GoBack()"><i class="fa-solid fa-arrow-left"></i></button> 
      <p>Already have an account? <a href="index.php">Login here</a>.</p>
    </form>
    <script type="text/javascript" src="../../Js/registration.js"></script>
</body>
</html>