<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>  

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

        <title>Aadi-Jain</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" >
                        <i class='bx bxl-gitlab' ></i>
                    </a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#experience" class="nav__link">Experience</a></li>
                        <li class="nav__item"><a href="#project" class="nav__link">Projects</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">Gallery</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                        <li class="nav__item"><a href="/aadi/AadiJain - Copy/register.php" class="nav__link">Login/Register</a></li>
                        <li class="nav__item"><a href="assets\AadiJain_Resume.pdf" class="nav__link">Download Resume</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Hi,<br>I'am <span class="home__title-color">Aadi Jain</span></h1>
                    <a href="mailto:jainaadi7102@gmail.com" class="button">Contact</a>
                </div>

                <div class="home__social">
                    <a href="https://www.linkedin.com/in/aadijain7102/" target="_blank" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                    <a href="https://aadijain71.medium.com/" class="home__social-icon" target="_blank"><i class='bx bxl-medium' ></i></a>
                    <a href="https://github.com/Aadi71" class="home__social-icon" target="_blank"><i class='bx bxl-github'></i></a>
                    <a href="https://www.youtube.com/channel/UCO4BjmZq5NEB9zPwHlhoAyw" class="home__social-icon" target="_blank"><i class='bx bxl-youtube' ></i></a>
                </div>

                <div class="home__img">
                    <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <mask id="mask0" mask-type="alpha">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                        </mask>
                        <g mask="url(#mask0)">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                            <image class="home__blob-img" href="assets/img/aadijain.png"/>
                        </g>
                    </svg>
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/about.jpg" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">I'am</h2>
                        <p class="about__text">a student from Yoga Capital of World Rishikesh who likes to explore, learn, 
                            construct, and hustle. An optimistic Individual and determined smart worker with the potential to 
                            shuffle between tasks, communicate and lead with strong interpersonal skills, and yield optimized and 
                            high-quality results.
                        <br><br>
                        Currently, I am pursuing my Bachelor's of Technology in Computer Science Engineering(2020-24) from 
                        <a href="https://www.bennett.edu.in/" target="_blank">Times of India, Bennett University</a>.
                        <br><br>
                        As a part of co-curricular activities, I am the President of 
                        <a href = "https://edu.ieee.org/in-bu/officers/" target="_blank">IEEE Bennett University</a> Student Chapter and 
                        Sub-Head Communications for Student Council BU.
                        </p>           
                    </div>                                   
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">          
                    <div>
                        <h2 class="skills__subtitle">Profesional Skills</h2>
                        <p class="skills__text">I have worked and had experience as a Business Analyst, Sales and marketing volunteer, Customer Relationship, Outreach, Event Management and planning, Active speaker, and host in events.
                        </p>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <i class='bx bxl-javascript skills__icon' ></i>
                                <i class='bx bxl-css3 skills__icon'></i>
                                <i class='bx bxl-react skills__icon'></i>
                                <span class="skills__name">Web Development</span>
                            </div>
                            <div class="skills__bar skills__web">

                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-c-plus-plus skills__icon' ></i>
                                <span class="skills__name">C++</span>
                            </div>
                            <div class="skills__bar skills__cpp">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">90%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-python skills__icon'></i>
                                <span class="skills__name">Python</span>
                            </div>
                            <div class="skills__bar skills__py">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">80%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-bot skills__icon' ></i>
                                <span class="skills__name">Machine Learning</span>
                            </div>
                            <div class="skills__bar skills__ml">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">70%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-group skills__icon'></i>
                                <span class="skills__name">Leadership and Community Development</span>
                            </div>
                            <div class="skills__bar skills__lcd">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">95%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-speaker skills__icon' ></i>
                                <span class="skills__name">Public Speaking</span>
                            </div>
                            <div class="skills__bar skills__ps">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>




                    </div>
                    
                    <div>              
                        <img src="assets/img/1.jpg" alt="" class="skills__img">
                    </div>
                </div>
            </section>

            <!--===== EXPERIENCE =====-->
            <section class="experience section " id="experience">
                <h2 class="section-title">Experience</h2>

                <div class = "bd-grid">
                    
                    <div>
                        <h2 class="exp__subtitle work__img">leap.club</h2>
                        <p>A community led professional network for women. I worked as a Business Development Intern at <a href = "https://leap.club/" target="_blank"  >leap.club</a>.</p>
                        <br>  

                        <h2 class="exp__subtitle work__img">GitHub Field Day 2021</h2>
                        <p><a href = "https://www.linkedin.com/feed/update/urn:li:activity:6844589311787175936/" target="_blank">GitHub Field Day</a> is the first regional unconference for leaders of technical student communities held in India 
                            in 2021 and I was selected among the 160 community student leaders in whole India.</p>
                        <br> 
                        
                        <h2 class="exp__subtitle work__img">Campus Coding Ninja</h2>
                        <p>To promote Coding Culture and emphasize gender equality in tech culture in our university.</p>
                        <br>

                        <h2 class="exp__subtitle work__img">Internshala Campus Ambassador</h2>
                        <p>Had given talks on how to grab internship during college and product marketing for their courses.</p>
                        <br>

                        <h2 class="exp__subtitle work__img">Harvard Project for Asian and International Relations (HPAIR)</h2>
                        <p>The conference provided me with an opportunity to listen to some of the top leaders of the world and 
                            inculcate their words of motivation into my</p>
                        <br>   
                         
                        <h2 class="exp__subtitle work__img">Zenevia – Bennett University Tech Fest </h2>
                        <p>Contributed to Zenevia - YouTube channel by making my own City Tour <a href = "https://youtu.be/NmUwmxAQRyQ" target="_blank">"Rishikesh"</a> YouTube Video and taken interviews 
                            of dignitaries like <a href = "https://youtu.be/kWXC7kyzgzs" target="_blank">Dr. Ramanan Ramanathan sir</a>, 
                            Dr. Srinivas Mohan, etc. Additionally, hosted various events for <a href ="https://www.youtube.com/channel/UCGjGSgOgY2xrDcsX_Vw1ESA/" target="_blank">IEEE BU</a>, .</p>

                    </div>                                   
                </div>
            </section>

            <!--===== PROJECTS =====-->
            <section class="project section" id="project">
                <h2 class="section-title">Projects</h2>

                <div class="bd-grid">
                    <a href="#" class="work__container">
                        <!-- <img src="assets/img/work1.jpg" alt=""> -->
                        <iframe src="https://www.youtube.com/embed/J0o3yHeDqlE">
                        </iframe> 
                    </a>
                    <div>
                                <h2>FORETREE: AN AIM FOR A SUSTAINABLE DEVELOPMENT</h2>
                                <p>A Python based project using modules like tkinter, pygame, speech recognition and Django for 
                                    its web dev. </p>
                                <ul>
                                    <li><a href="https://github.com/Aadi71/ForeTree-TeamVolte" class="bx bxl-github"
                                            target="blank">Learn More</a></li>
                                </ul>
                        </div>
  
                    <a href="" class="work__container">
                        <iframe src="https://www.youtube.com/embed/KcFB4ygHXIo">
                        </iframe> 
                    </a>                                        
                    <div>  
                            <h2>GROSMO: AN E-HEALTHCARE MANAGEMENT SYSTEM</h2>
                            <p>I have worked on Java Interface using Swing & Socket. Managed a SQL database to store user data and 
                                medical information. Developed a live chat enabled system for communication between doc and patient.
                                 </p>
                            <ul>
                                <li><a href="https://github.com/Aadi71/Mentisano" class="bx bxl-github"
                                        target="blank">Learn More</a></li>
                            </ul>
                    </div>
                </div>
            </section>

            <!--===== Gallery =====-->
            <section class="work section" id="work">
                <h2 class="section-title">Gallery</h2>

                <div class="work__container bd-grid">
                    <a href="" class="work__img">
                        <img src="assets/img/work1.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work2.png" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work3.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work4.png" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work5.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work6.png" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work7.png" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work8.png" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work9.png" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work10.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work11.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work12.jpg" alt="">
                        <a href="" class="work__img">
                            <img src="assets/img/leapclub.jpg" alt="">
                        </a>
                        <a href="" class="work__img">
                            <img src="assets/img/work14.jpg" alt="">
                        </a>
                        <a href="" class="work__img">
                            <img src="assets/img/work15.jpg" alt="">
                    </a>
                </div>
                </div>
            </section>

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>

                <div class="contact__container bd-grid">
                    <form action="mailto:jainaadi7102@gmail.com" method="post" enctype="text/plain" class="contact__form">
                        <input type="text" placeholder="Name" class="contact__input">
                        <input type="mail" placeholder="Email" class="contact__input">
                        <textarea name="" id="" cols="0" rows="10" class="contact__input"></textarea>
                        <input type="submit" value="Send" class="contact__button button">
                    </form>
                </div>
            </section>
        </main>

        <!-- <section id="login">
        <div id='login-form'class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                    <button type='button'onclick='register()'class='toggle-btn'>Register</button>
                </div>
                <form id='login' class='input-group-login'>
                    <input type='text'class='input-field'placeholder='Email Id' required >
		    <input type='password'class='input-field'placeholder='Enter Password' required>
		    <input type='checkbox'class='check-box'><span>Remember Password</span>
		    <button type='submit'class='submit-btn'>Log in</button>
		 </form>
		 <form id='register' class='input-group-register'>
		     <input type='text'class='input-field'placeholder='First Name' required>
		     <input type='text'class='input-field'placeholder='Last Name ' required>
		     <input type='email'class='input-field'placeholder='Email Id' required>
		     <input type='password'class='input-field'placeholder='Enter Password' required>
		     <input type='password'class='input-field'placeholder='Confirm Password'  required>
		     <input type='checkbox'class='check-box'><span>I agree to the terms and                                                   conditions</span>
                    <button type='submit'class='submit-btn'>Register</button>
	         </form>
            </div>
        </div>
    </div>
    <script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	</script>
	<script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }
    </script>
    </section> -->


        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">Aadi Jain</p>
            <div class="footer__social">
                <a href="https://www.facebook.com/aadi.jain.7102" class="footer__icon" target="_blank"><i class='bx bxl-facebook' ></i></a>
                <a href="https://www.instagram.com/aadi_jain_7/" class="footer__icon" target="_blank"><i class='bx bxl-instagram' ></i></a>
                <a href="https://twitter.com/Aadi_Jain_7" class="footer__icon" target="_blank"><i class='bx bxl-twitter' ></i></a>
            </div>
            <p class="footer__copy">&#169; AadiJain. All rigths reserved</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
