<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Social Network  | Odiary 2020</title>
        <link rel="shortcut icon" type="icon" href="connecter.png">
        <meta name="description" content="#">
        <meta name="keywords" content="#">
        <meta name="author" content="#">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="register.css">
        <link href="https://fonts.googleapis.com/css2?family=Ropa+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=Ropa+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=Ropa+Sans&family=Sen&display=swap" rel="stylesheet">
    </head>
    <body>
        <center>
            <form action="#" method="post">
            <div><br><br>
                <i class="fas fa-user"></i>
                <input class="email" type="text" placeholder="Name" required>
            </div>
            <hr>
            <br>
            <div>
                <input class="pass" type="text" placeholder="Email" required>
            </div>
            <hr>
            <br>
            <div>
                <input class="pass" type="password" placeholder="Password" required>
            </div>
            <hr>
            <br>
            <div class="date">
                <input class="pass" type="date" value="Birthday" required>
            </div>
            <hr>
            <br>
            <div class="identity">
                <select name="gender" class="gender" required>
                    <?php
                    $gender = ['Gender','Male','Female','Other'];
                    foreach ($gender as $identity) {
                        echo "<option>$identity</option>";
                    }
                    ?>
                </select>
            </div>
            <hr>
            <div class="checkbox">
                <input class="check" type="checkbox" name="checkbox" value="check" required>
                <label for="check">Please confirm</label>
            </div>   
            <button class="submit" type="submit" name="submit">Sign Up</button>
            <div class="con"><br>
                <p>Already have an account?<a class="register" href="index.html"> Sign in</a></p>
            </div>
            <div id="google_translate_element"></div>

           <script type="text/javascript">
             function googleTranslateElementInit() {
             new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
           }
           </script>
           <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
            
          </form>
    </center><br>
    <div class="main-footer">
        <p>© 2020 Odiary, Inc.</p>
    </div>
    <div class="foot">
        <a href="#">Terms</a>
        <a href="#">Policy</a>
        <a href="#">Services</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
        <a href="#">CEO</a>
        <a href="#">Company</a>
        <a href="#">Developer</a>
        <a href="#">Location</a>
    </div> 
   


    </body>
</html>

