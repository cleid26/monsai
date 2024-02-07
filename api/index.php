<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST['submit'])) {
    $name = $_POST['uname'];
    $email = $_POST['u_email'];
    $message = $_POST['u_message'];


    $mailerLocal = new PHPMailer(true);
    $mailerLocal->isSMTP();
    $mailerLocal->Host = 'smtp.gmail.com';
    $mailerLocal->Port = 465;
    $mailerLocal->SMTPSecure = 'ssl';
    $mailerLocal->SMTPAuth = true;
    $mailerLocal->Username = 'motormatik812@gmail.com';
    $mailerLocal->Password = 'eitpkqppzqsqbeyo';

    $mailerLocal->setFrom('motormatik812@gmail.com', 'Monsai');
    $mailerLocal->addAddress($email);
    $mailerLocal->Subject = "From: " . $name;
    $mailerLocal->Body = $message;
    $mailerLocal->isHTML(true);


    if ($mailerLocal->send()) {
        $succ = 'Email sent';
        header('Location: index.php');
        exit;
    } else {
        $err = 'Email could not be sent. Please try again later';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="portfolio1.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Portfolio</title>
</head>

<body>
    <div class="container-fluid">
        <?php if (isset($succ)) { ?>
            <script>
                // SweetAlert for success
                Swal.fire({
                    title: 'Success!',
                    text: '<?php echo $succ; ?>',
                    icon: 'success',
                    timer: 3000 // 3 seconds
                });
            </script>
        <?php } ?>
        <?php if (isset($err)) { ?>
            <script>
                // SweetAlert for error
                Swal.fire({
                    title: 'Failed!',
                    text: '<?php echo $err; ?>',
                    icon: 'error',
                    timer: 3000 // 3 seconds
                });
            </script>
        <?php } ?>
    </div>


    <div class="container">
        <nav id="header">
            <div class="nav-logo">
                <p class="nav-name">Monsai</p><span>.</span>
            </div>
            <div class="nav-menu" id="myNavMenu">
                <ul class="nav_menu_list">
                    <li class="nav-list">
                        <a href="#home" class="nav-link">Home</a>
                        <div class="circle"></div>
                    </li>
                    <li class="nav-list">
                        <a href="#about" class="nav-link =">About</a>
                        <div class="circle"></div>
                    </li>
                    <li class="nav-list">
                        <a href="#projects" class="nav-link =">Projects</a>
                        <div class="circle"></div>
                    </li>
                    <li class="nav-list">
                        <a href="#contact" class="nav-link =">Contact</a>
                        <div class="circle"></div>
                    </li>
                </ul>
            </div>
            <div class="nav-button">
                <a href="resume.pdf" download="resume.pdf" class="btn" style="text-decoration:none; color:black">Download CV <i class="uil uil-file-alt"></i></a>
            </div>
            <div class="nav-menu-btn">
                <i class="uil uil-bars" onclick="myMenuFunction()"></i>
            </div>
        </nav>

        <main class="wrapper">
            <section class="featured-box" id="home">
                <div class="featured-text">
                    <div class="featured-text-card">
                        <span>Monsai Sol</span>
                    </div>
                    <div class="featured-name">
                        <p>I am a <span class="typedText"></span></p>
                    </div>
                    <div class="featured-text-info">
                        <p>Experienced frontend developer with a passion for creating visually stunning and
                            user-friendly websites.
                        </p>
                    </div>
                    <div class="featured-text-btn">
                        <button class="btn blue-btn">Hire Me</button>
                        <a href="resume.pdf" download="resume.pdf" class="btn" style="text-decoration:none; color:black;">Download CV <i class="uil uil-file-alt"></i></a>
                    </div>
                    <div class="social_icons">
                        <div class="icon"><i class="uil uil-instagram"></i></div>
                        <div class="icon"><i class="uil uil-facebook"></i></div>
                    </div>
                </div>
                <div class="featured-image">
                    <div class="image">
                        <img src="avatar.png" alt="avatar">
                    </div>
                </div>
                <div class="scroll-icon-box">
                    <a href="#about" class="scroll-btn">
                        <i class="uil uil-mouse-alt"></i>
                        <p>Scroll Down</p>
                    </a>
                </div>

            </section>

            <section class="section" id="about">
                <div class="top-header">
                    <h1>About Me</h1>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="about-info">
                            <h3>My introduction</h3>
                            <p>I am well-versed in HTML, CSS and JavaScript, and other cutting edge
                                framework and libraries, which allows me to implement interactive features.
                                Additionally, I have experience working with content management systems (CMS) like
                                Wordpress.
                            </p>
                            <div class="about-btn">
                                <button class="btn">Download CV<i class="uil uil-import"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="skills-box">
                            <div class="skills-header">
                                <h3>Frontend</h3>
                            </div>
                            <div class="skills-list">
                                <span>HTML</span>
                                <span>CSS</span>
                                <span>Bootstrap</span>
                                <span>JavaScript</span>
                            </div>
                        </div>
                        <div class="skills-box">
                            <div class="skills-header">
                                <h3>Backend</h3>
                            </div>
                            <div class="skills-list">
                                <span>PHP</span>
                                <span>JAVA</span>
                                <span>Python</span>
                                <span>C++</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section" id="projects">
                <div class="top-header">
                    <h1>Projects</h1>
                </div>
                <div class="project-container">
                    <div class="project-box">
                        <i class="uil uil-briefcase-alt"></i>
                        <h3>Completed</h3>
                        <label>5+ Finished Projects</label>
                    </div>
                    <div class="project-box">
                        <i class="uil uil-user"></i>
                        <h3>Clients</h3>
                        <label>6+ Happy Clients</label>
                    </div>
                    <div class="project-box">
                        <i class="uil uil-award"></i>
                        <h3>Experience</h3>
                        <label>3+ Years in the field</label>
                    </div>
                </div>
            </section>

            <section class="section" id="contact">
                <div class="top-header">
                    <h1>Get in touch</h1>
                    <span>Do you have a project in your mind, contact me here.</span>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="contact-info">
                            <h2>Find Me <i class="uil uil-corner-right-down"></i></h2>
                            <p><i class="uil uil-envelope"></i> Email: monsaideveloper@gmail.com</p>
                            <p><i class="uil uil-phone"></i> Tel: +63 921 475 8336</p>
                        </div>
                    </div>

                    <div class="col">
                        <form method="POST">
                            <div class="form-control">
                                <div class="form-inputs">

                                    <input type="text" class="input-field" placeholder="Name" name="uname">
                                    <input type="text" class="input-field" placeholder="Email" name="u_email">
                                </div>
                                <div class="text-area">
                                    <textarea placeholder="Message here" name="u_message"></textarea>
                                </div>
                                <div class="form-button">
                                    <button type="submit" class="btn" name="submit">Send <i class="uil uil-message"></i></button>

                                </div>
                        </form>

                    </div>

                </div>
    </div>

    </section>

    <footer>
        <div class="top-footer">
            <p>Monsai Sol .</p>
        </div>

        <div class="middle-footer">
            <ul class="footer-menu">
                <li class="footer_menu_list">
                    <a href="#home">Home</a>
                </li>
                <li class="footer_menu_list">
                    <a href="#about">About</a>
                </li>
                <li class="footer_menu_list">
                    <a href="#projects">Projects</a>
                </li>
                <li class="footer_menu_list">
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </div>

        <div class="footer-social-icons">
            <div class="icon"><i class="uil uil-instagram"></i></div>
            <div class="icon"><i class="uil uil-facebook"></i></div>
        </div>
        <div class="bottom-footer">
            <p>Copyright &copy; <a href="#home" style="text-decoration: none;">Monsai Sol</a> | All rights reserved</p>
        </div>
    </footer>
    </main>
    </div>

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="portfolio.js"></script>
    <script src="swal.js"></script>


</body>

</html>