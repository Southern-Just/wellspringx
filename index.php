<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wellspringx Official</title>
    <link rel = "stylesheet" href = "index.css">
</head>
<body>
<header class = "header bg-color">
    <nav class = "navbar bg-green">
        <div class = "container flex">
            <a href = "index.php" class = "navbar-logo">
                <img src = "plus.png" alt = "wellspringx logo">
                <h2>wellspringx</h2>
            </a>
            <button type = "button" class = "navbar-show-btn">
                <img src = "red.png">
            </button>

            <div class = "navbar-collapse">
                <button type = "button" class = "navbar-hide-btn">
                    <img src = "staff.png">
                </button>
                <input type="submit" value="DONATE">
                <ul class = "navbar-nav">
                    <li class = "nav-item">
                        <a href = "#services" class = "nav-link">Wings</a>
                    </li>
                    <li class = "nav-item">
                        <a href = "doctors.html" class = "nav-link">Doctors</a>
                    </li>
                    <li class = "nav-item">
                        <a href = "department.html" class = "nav-link">Departments</a>
                    </li>
                    <li class = "nav-item">
                        <a href = "#news" class = "nav-link">Updates</a>
                    </li>
                    <li class = "nav-item">
                        <a href = "#contact" class = "nav-link">Contact</a>
                    </li>
                </ul>


                <div class = "search-bar">
                    <form>
                        <div class = "search-bar-box flex">
                            <span class = "search-icon flex">
                                <img src = "plus.png">
                            </span>
                            <input type = "search" class = "search-control" placeholder="Search here">
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </nav>
    <div class = "header-inner text-white text-center">
        <div class = "container grid">
            <div class = "header-inner-left">
                <h2>foundation of love<br> ..<span class="rt text-blue">wellspringx </span>..</h2>
                <p class = "lead"></p>
                <p class = "text text-md">What if I told you someone cared for you,<br> What If I told you someone was willing to walk with you<br>You've got company, wellspringx </p>
                <div class = "btn-group">
                    <a href = "#" class = "btn btn-white">Pharmacy</a>
                    <a href = "login.html" class = "btn btn-light-blue">Sign In</a>
                </div>
            </div>
            <div class = "header-inner-right">
                <img src = "Daco.png" alt="">
            </div>
        </div>
    </div>
</header>
    <main>
        <!-- about section -->
        <section id = "about" class = "about py">
            <div class = "about-inner">
                <div class = "container grid">
                    <div class = "about-left text-center">
                        <div class = "about-head">
                            <h2>About Us</h2>
                            <div class = "border-line"></div>
                        </div>
                        <p class = "text text-lg">A Partner in health for over forty years and counting, A hope for thousands that have been before us and amongst us <br> An assurance tested and proven! <br>The very best in all your health requirements</p>
                        <a href = "about.html" class = "btn btn-white">Learn More</a>
                    </div>
                    <div class = "about-right flex">
                        <div class = "img_about">
                            <img src = "childs.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--banner-->
        <section id = "banner" class = "banner">
            <div class = "container text-white">
                <blockquote class = "lead"><i class = "quote"></i> Good health is not something we can buy. However, it can be an extremely valuable savings account. <i class = "fas fa-quote-right"></i></blockquote>
                <small class = "text text-sm">- Anne Wilson Schaef</small>
            </div>
        </section>
 <!--facility section -->
 <section id = "facility" class = "facility py text-center">
    <div class = "container">
        <div class = "section-head ">
            <h2>Facility Package</h2>
            <p class = "text text-lg">#There when you need us</p>
        </div>
        <div class = "inside-facility">
            <div class = "facility-item bg-white">
                <div class = "icon contain">
                    <img src="virus.png" alt="">
                </div>
                <h3>IN-PATIENTS <br> (including Covid-19)</h3>
                <p class = "textsm">Maternity services<br> Surgery<br> therapy<br> And all Patients in need of doctor monitoring.</p>
                <a href = "#" class = "btn btn-blue">Read More</a>
            </div>
            <div class = "facility-item">
                <div class = "icon contain">
                   <img src="ambulance.png" alt="">
                </div>
                <h3 class="acc">Accidents & Emergencies</h3>
                <p class = "textsm">Incase of Urgent Medical Help.</p>
                <a href = "#" class = "btn_em">Reach us</a>
            </div>
            <div class = "facility-item bg-white">
                <div class = "icon contain">
                    <img src="glob.png" alt="">
                </div>
                <h3>OUT-PATIENTS</h3>
                <p class = "textsm">All that have successfully booked an appointment <br>Patients accessing centres of Voluntary Counselling and T.B awareness<br>patients accessing the Pharmacy, Laboratory, Radiography and AMVC.</p>
                <a href = "#" class = "btn btn-blue">Read More</a>
            </div>
        </div>
    </div>
</section>

        <!-- services section -->
        <section id = "services" class = "services py">
            <div class = "container">
                <div class = "section-head text-center">
                    <h2 class = "lead">Health is wealth, and we make it known to our people</h2>
                    <p class = "text text-lg">Visiting a Doctor regularly might help notice deadlies at stage 1</p>
                </div>
                <div class = "services-inner text-center grid">
                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "comp.png">
                        </div>
                        <h3>Cardio Monitoring</h3>
                        <p class = "text text-sm">Our hearts need regular check ups<br> Computed Tumography scan <br>EMT scan </p>
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "check.png">
                        </div>
                        <h3>Medical Treatment</h3>
                        <p class = "text text-sm">Nutrition check<br>Physical Exercise<br> Sleep Enhancement<br>Psychiatric assesment</p>
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "media.png">
                        </div>
                        <h3>Emergency Help</h3>
                        <p class = "text text-sm"><a href="tel:+999">999</a>  Kenyan Helpline<br><a href="tel:+1199">1199</a> Red Cross Helpline<br><a href="tel:+8799">8799</a> Rape and Sodomy cases<br><a href="tel:+9000">9000</a> wellspringx Emergency line </p>
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "hcare.png">
                        </div>
                        <h3>First Aid</h3>
                        <p class = "text text-sm">Patients who have some kind of first aid done on them are far more likely to survive . Here a bird at hand is worth two in the bush</p>
                    </article>
                </div>
            </div>
        </section>
        <!-- news section -->
        <section id = "news" class = "news py">
            <div class = "container">
                <div class = "section-head text-center">
                    <h2>wellspringx Paper</h2>
                </div>
                <div class = "inside-news">
                    <article class = "news-item bg-white">
                        <div class = "img">
                            <img src = "spar.png" alt="">
                        </div>
                        <div class = "content">
                            <h4>Inspiring stories of survivors and people that won against their odds.</h4>
                            <p class = "text text-sm">Peter and Family blesses the day their son Maxwell was released from the hospital in a stable condition having battled Arteriosclerosis from late last year and emerging one of the few that fight it down.</p>
                            <p class = "text text-sm">Madam Jennerson today proudly walks the streets of Nakuru having cheated death in its monstrous form of Type two Diabetes.</p>
                            <div class = "info flex">
                                <small class = "comm" >November 21, 2023</small>
                                <small class = "comm"> 5 comments</small>
                            </div>
                        </div>
                    </article>

                    <article class = "news-item bg-white">
                        <div class = "img">
                            <img src = "compg.png" alt="">
                        </div>
                        <div class = "content">
                            <h4>See medicine world from our perspective.</h4>
                            <p class = "text text-sm">One great invention in the field of Health was SOAP, if we are to make a forward step in our health as a people we need to be hygienic as early as yesterday.</p>
                            <p class = "text text-sm">Rwanda an East African country becomes the first country to utilise drones in 'medicals' delivery.</p>
                        </div>
                    </article>

                    <article class = "news-item bg-white">
                        <div class = "img">
                            <img src = "hta.png" alt="">
                        </div>
                        <div class = "content">
                            <h4> Awareness, Blood donations and Medical tips.</h4>
                            <p class = "text text-sm">Tens of thousands individuals lose lives due to blood loss especially from accidents every year, They need us that are healthy to donate in Kind.<br> # Save a life when you donate blood Today</p>
                            <p class = "text text-sm">Fun Fact: By donating blood you not only help the receiver but also you cleanse the circulation of your blood , Two birds for one.</p>

                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- contact section -->
        <section id = "contact" class = "contact py">
            <div class = "container grid">
                <div class = "contact-right text-white text-center bg-blue">
                    <div class = "contact-head">
                        <h3 class = "lead">Contact Us</h3>
                        <p class = "text text-md">Be it a comment, A feedback does for us.</p>
                    </div>
                    <form action="feedback.php" method="post">
                        <div class = "form-element">
                            <input type = "name" class = "form-control" placeholder="Your Name" name="name" required>
                        </div>
                        <div class = "form-element">
                            <input type = "email" class = "form-control" placeholder="Your email" name="email" required>
                        </div>
                        <div class = "form-element">
                            <textarea rows = "5" placeholder="Your Message" class = "form-control" name="message" required></textarea>
                        </div>
                        <button type = "submit" class = "btn btn-submit">
                             Send Message
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <!-- footer  -->
    <footer id = "footer" class = "footer text-center">
        <div class = "container">
            <div class = "footer-inner text-white py grid">
                <div class = "footer-item">
                    <h3 class = "footer-head">about us</h3>
                    <div class = "icon">
                        <img src = "silver.png" alt="">
                    </div>
                    <p class = "text text-md">Here for those trying times, <br>we are always ready for when health calls.<br> The world needs the best of you, </p>
                    <address>
                        wellspringx <br>
                    00 Workshop Rd, Haile sellasie | T.U.K <br>Nairobi | Kenya
                    </address>
                </div>

                <div class = "footer-item">
                    <h3 class = "footer-head">tags</h3>
                    <ul class = "tags-list flex">
                        <li>Emergency</li>
                        <li>therapy</li>
                        <li>surgery</li>
                        <li>Female Wing</li>
                        <li>V.C.T Services</li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <h3 class = "footer-head">Quick Links</h3>
                    <ul>
                        <li><a href = "#" class = "text-white">Our Services</a></li>
                        <li><a href = "#" class = "text-white">Our Plan</a></li>
                        <li><a href = "#" class = "text-white">Premium services</a></li>
                        <li><a href = "#" class = "text-white">Doctor Schedule</a></li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <h3 class = "footer-head">appointment booking?</h3>
                    <p class = "text text-md">For convenience you'll need a slot.<br> ( Time to see the Doctor)</p>
                    <ul class = "time">
                        <li>8:00 AM - 11:00 AM</li>
                        <li>2:00 PM - 05:00 PM</li>
                        <li>8:00 PM - 11:00 PM</li>
                        <div class="cont bg-green text-center">
                            <a href="mailto:wellspringx@gmail.com"><li>wellspringx@gmail.com</li></a> 
                            <a href="tel:+254-001(350)002"><li>+254-001(350)002</li></a>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="script.js"></script>
    <script src="https://js.safaricom.co.ke/mpesa/v1/mpesa.js"></script>
</body>
</html>