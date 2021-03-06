<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!--My StyleSheet-->
    <link href="css/myStyleSheet.css" type="text/css" rel="StyleSheet" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> </head>

<body>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/mobilefriendly.js"></script>
    <header>
        <div class="navbar-fixed">
            <nav class="black">
                <div class="container nav-wrapper"> <a href="index.php" class="brand-logo white-text">Spec4Games</a> <a href="#" data-activates="mobile-demo" class="button-collapse "><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down black-text white-text">
                        <li><a class="white-text" href="createusr.php">| Create |</a></li>
                        <li><a class="white-text" href="login.php">| Login |</a></li>
                        <li><a class="white-text" href="myAccount.php">| My Account |</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a class="black-text" href="createusr.php">Create</a></li>
                        <li><a class="black-text" href="login.php">Login</a></li>
                        <li><a class="black-text" href="myAccount.php">My Account</a></li>
                    </ul>
                </div>
            </nav>
        </div> <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a> <img id="headerbanner" class="responsive-img" src="assets/header.jpeg" style="width: 100%; " /> </header>
    <!-- Tap Target Structure -->
    <div class="tap-target" data-activates="menu">
        <div class="tap-target-content">
            <h5>Title</h5>
            <p>A bunch of text</p>
        </div>
    </div>
    <main>
        <div class="row">
            <div class="col s6 m3">
                <div class="card">
                    <div class="card-image"> <img src="assets/userfile.jpeg"> </div>
                </div>
            </div>
            <div class="input-field col m4"> <i class="material-icons prefix">account_circle</i>
                <input placeholder="Enter First Name" id="first_name" type="text" class="validate">
                <label for="first_name">First Name</label>
            </div>
            <div class="input-field col m4"> <i class="material-icons prefix">account_circle</i>
                <input placeholder="Enter surname" id="first_name" type="text" class="validate">
                <label for="first_name">Surname</label>
            </div>
            <div class="input-field col m4"> <i class="material-icons prefix">Passwords</i>
                <input placeholder="Secure Passwords!" id="password" type="password" class="validate">
                <label for="password">Password</label>
            </div>
            <div class="row">
                <div class="input-field col m4"> <i class="material-icons prefix">Passwords</i>
                    <input placeholder="Dont make it easily guessable!" id="password" type="password" class="validate">
                    <label for="password">Re-enter Password</label>
                </div>
                <div class="input-field col m4"> <i class="material-icons prefix">email</i>
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
                <div class="input-field col m4"> <i class="material-icons prefix">phone</i>
                    <input id="contactNum" type="email" class="validate">
                    <label for="contactNum">Contact Number</label>
                </div>
                
                <div class="row m12">
                    <form action="#">
                        <div class="file-field input-field">
                            <div class="btn" <a style="color:white"> <span>Profile Picture File</span>
                                <input type="file"> </div>
                        </form>
                        </div>
            </div>
        </div>
    </main>
    <footer class="page-footer black">
        <div class="container">
            <div class="row">
                <div class="col s9 offset-s2">
                    <div class="col s12 m6 l3"><a class="grey-text text-lighten-3" href="AboutUs.php">About Us</a></div>
                    <div class="col s12 m6 l3"><a class="grey-text text-lighten-3 " href="forums.php">Forums</a></div>
                    <div class="col s12 m6 l3"><a class="grey-text text-lighten-3" href="contactme.php">Contact us</a></div>
                    <div class="col s12 m6 l3"><a class="grey-text text-lighten-3" href="ReportIssue.php">Report A Problem</a></div>
                </div>
            </div>
            <div class="footer-copyright black">
                <div class="container black"> © 2017 Copyright Text</div>
            </div>
        </div>
    </footer>
    </body>
    <script>
            $(document).ready(function () {
                $('.button-collapse').sideNav({
                    draggable: true
                , });
            });
        </script>
</html>