<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TukuTiket Login Administrator</title>
    <!-- Semantic CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.js"></script>
    <link rel="stylesheet" href="../assets/css/app.css">

<body>
    <h1 class="ui header center aligned">TukuTiket Login Administrator</h1>
    <div class="ui grid container">
        <div class="ten wide column">
            <h2 class="ui header center aligned">Manage Ticket Flight</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Aenean commodo ligula eget Lorem ipsum dolor sit amet,
                consectetuer adipiscing elit. Aenean commodo ligula ege
            </p>
            <img src="https://demo.w3layouts.com/demos_new/template_demo/18-05-2019/gadget_signup_form-demo_Free/1576182126/web/images/b11.png" alt="ini adalah gambar laptop" srcset="" class="ui centered image">


        </div>
        <div class="six wide column">
            <div class="ui grid card-2">
                <div class="sixteen wide column">
                    <h2 class="ui header"></h2>
                    <form class="ui form" method="POST" id="form-login" action="login_check.php">
                        <div class="field">
                            <label>Username*</label>
                            <input type="text" name="username" placeholder="Username" autofocus>
                        </div>

                        <div class="field">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="password">
                        </div>
                        <div class="ui error message"></div>
                        <button class="ui fluid primary button" type="submit">Log In</button>
                        <p style="margin-bottom: 1rem !important;">Don't have an account,<br> <a href="index-signup.php">Sign Up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- javascript addition -->
<script type="text/javascript" src="../assets/js/app.js"></script>
<!-- <script type="text/javascript" src="../assets/js/validation.js"></script> -->

</html>