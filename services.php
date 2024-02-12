<!DOCTYPE html>
<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $type = $_POST["type"];
    $subject = $_POST["subject"];
    $to = "mo@abowafa.com";

    $email_body = "Name: $name.\n".
                    "Email: $email.\n".
                    "Type of service: $type.\n".
                    "Message: $message. \n";


    $from="From: $name<$email>\r\nReturn-path: $email";
    $subject= $subject ." - Message sent using your portfolio contact form";
    if($sendflag == ""){
        mail("mo@abowafa.com", $subject, $email_body, "mo@abowafa.com");
    }
    else{
        mail("mo@abowafa.com", $subject, $email_body, "mo@abowafa.com");
    }
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abo El-Wafa</title>
    <link rel="stylesheet" href="style.css">

    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
</head>

<body>
    <div id="container">
        <div class="header">
            <div class="header01">
                <table>
                    <tr>
                        <td><a href="index.html"><img src="media/logo.png" alt="Abo El Wafa"></a></td>
                        <td><a class="links">&nbsp &nbsp &nbsp| &nbsp </a></td>
                    </tr>
                </table>
            </div>
            <div class="header02">
                <table>
                    <tr>
                        <td>
                            <nav>
                                <a class="links" href="projects.html"><b>Work</b> &nbsp; أعمال</a>
                                <a class="links" href="about.html"><b>About</b> &nbsp; السيرة الذاتية</a>
                                <a class="links" href="services.html"><b>Services</b> &nbsp; خدمات</a>
                            </nav>
                        </td>
                    </tr>
                </table>
            </div>


            <div class="header01-responsive">
                <table>
                    <tr>
                        <td><a href="index.html"><img src="media/logo.png" alt="Abo El Wafa"></a></td>
                        <td> </td>
                    </tr>
                </table>
            </div>
            <div class="header02-responsive">
                <span style="font-size:42px;cursor:pointer;" onclick="openNav()"> &#9776;</span>
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="index.html"><img src="media/logo.png" alt="Abo El Wafa" class="sidenav-logo"></a>

                    <table class="sidenav-responsive-table">
                        <tr>
                            <td><b><a class="links" href="projects.html">Work</a></b></td> &nbsp; <td
                                style="text-align: right;"><a class="links" href="projects.html">أعمـال</a></td>
                        </tr>
                        <tr>
                            <td><b><a class="links" href="about.html">About</a></b></td> &nbsp; <td
                                style="text-align: right;"><a class="links" href="about.html">السيرة الذاتية</a></td>
                        </tr>
                        <tr>
                            <td><b><a class="links" href="services.html">Services</a></b></td> &nbsp; <td
                                style="text-align: right;"><a class="links" href="services.html">خدمــات</a></td>
                        </tr>
                    </table>

                    <table class="sidenav-table">
                        <tr>
                            <td>
                                <a href="https://www.instagram.com/abovvafa/" class="sm-icon">
                                    <img src="media/instagram.png" alt="@abovvafa" class="sm-icon">
                                </a>&nbsp&nbsp&nbsp
                            </td>
                            <td>
                                <a href="https://vimeo.com/abovvafa" class="sm-icon">
                                    <img src="media/vimeo.png" alt="abovvafa" class="sm-icon">
                                </a>&nbsp&nbsp&nbsp
                            </td>
                            <td>
                                <a href="https://www.linkedin.com/in/mohamed-abo-el-wafa-468269a7/" class="sm-icon">
                                    <img src="media/linkedin.png" alt="Mohamed Abo El Wafa" class="sm-icon">
                                </a>&nbsp&nbsp&nbsp
                            </td>
                            <td>
                                <a href="mailto:mo@abovvafa.com" class="sm-icon">
                                    <img src="media/email0.png" alt="Mohamed Abo El Wafa" class="sm-icon2">
                                </a>&nbsp&nbsp&nbsp
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>

        <div class="services01">
            <h2>Let's Connect</h2>
            <form class="" action="services.php" method="post">
                <input type="text" name="name" class="contact" placeholder="Name" required=""> <br> <br>

                <input type="text" name="email" class="contact" placeholder="Email" required=""> <br> <br>

                <select name="type" class="custom-select sources" placeholder="Type of service">
                    <option class="select-option" value="Direction">Direction</option>
                    <option class="select-option" value="Cinematography">Cinematography</option>
                    <option class="select-option" Value="Editing">Editing</option>
                    <option class="select-option" Value="Production">Production</option>
                </select><br><br>

                <input type="text" name="subject" class="contact" placeholder="Subject" required=""> <br>
                <br>

                <textarea rows="4" name="message" class="contact" placeholder="Message"></textarea> <br> <br>

                <input type="submit" class="contact-submit" value="Send Message" onclick="message_submit()"> <br>
                <input type="reset" class="contact-submit" value="Clear">
            </form>
        </div>

        <div class="footer">

            <p>Collaborators</p>
            <table class="footer-table">
                <tr>
                    <td>
                        <img src="media/NYTimes.png" alt="New York Times" class="sm-icon"
                            id="collaborators">&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
                        <img src="media/Jet.png" alt="Jet" class="sm-icon3" id="collaborators">&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
                        <img src="media/Dukkan.png" alt="Dukkan" class="sm-icon3" id="collaborators">&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
                        <img src="media/Abou_Naddara.jpg" alt="Abou Naddara" class="sm-icon3"
                            id="collaborators">&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
                        <img src="media/JVP.png" alt="JVP" class="sm-icon3" id="collaborators">&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
                        <img src="media/UnLocal.png" alt="UnLocal" class="sm-icon3"
                            id="collaborators">&nbsp;&nbsp;&nbsp;
                    </td>
                </tr>
            </table><br><br><br>

            <table class="footer-table" id="footer-table01">
                <tr>
                    <td>
                        <a href="index.html"><img src="media/logo.png" alt="Abo El Wafa" class="footer-logo"
                                loading="lazy"></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <nav>
                            <a class="links" href="projects.html"><b>Work</b></a>
                            <a class="links" href="about.html"><b>About</b></a>
                            <a class="links" href="services.html"><b>Services</b></a>
                        </nav>
                    </td>
                </tr>
            </table>

            <div class="footer-responsive">
                <a href="index.html"><img src="media/logo.png" alt="Abo El Wafa" class="footer-logo"
                        loading="lazy"></a><br><br>
                <table class="footer-responsive-table">
                    <tr>
                        <td>
                            <nav><br>
                                <a class="links" id="footer-links" href="projects.html">Work </a><br>
                                <p></p>
                                <a class="links" id="footer-links" href="about.html">About </a><br>
                                <p></p>
                                <a class="links" id="footer-links" href="services.html">Services </a>
                            </nav>
                        </td>
                    </tr>
                </table>
            </div><br><br>


            <table class="footer-table">
                <tr>
                    <td>
                        <a href="https://www.instagram.com/abovvafa/" class="sm-icon">
                            <img src="media/instagram.png" alt="@abovvafa" class="sm-icon" loading="lazy">
                        </a>&nbsp&nbsp&nbsp
                    </td>
                    <td>
                        <a href="https://vimeo.com/abovvafa" class="sm-icon">
                            <img src="media/vimeo.png" alt="abovvafa" class="sm-icon" loading="lazy">
                        </a>&nbsp&nbsp&nbsp
                    </td>
                    <td>
                        <a href="https://www.linkedin.com/in/mohamed-abo-el-wafa-468269a7/" class="sm-icon">
                            <img src="media/linkedin.png" alt="Mohamed Abo El Wafa" class="sm-icon" loading="lazy">
                        </a>&nbsp&nbsp&nbsp
                    </td>
                    <td>
                        <a href="mailto:mo@abovvafa.com" class="sm-icon">
                            <img src="media/email.png" alt="mo@abovvafa.com" class="sm-icon2" loading="lazy">
                        </a>
                    </td>
                </tr>
            </table><br>
            <p>Handcrafted by Hady Korshem &copy; 2022 </p>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <script>
        function message_submit() {
            window.alert("Your message has been sent successfully, thank you!");
        }
    </script>
</body>

</html>