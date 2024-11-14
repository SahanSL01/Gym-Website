<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="MFitness reponsive webite build using HTML5, CSS3 and Javascript The complete layout of the page is build using grid layout and flexbox with some cool animations." />
    <title>Universal Fitness - place for your fitness goals</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon.png" />
    <link rel="stylesheet" href="fonts/stylesheet.css" media="screen" />

    <link rel="stylesheet" href="style.css" media="screen" />
    <link rel="stylesheet" href="scroll.css" media="screen" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="slider/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    


</head>

<body>

    <!-- SCROLL TOP UP -->
    <div id="progress">
        <span id="progress-value">&#x1F815;</span>
    </div>


    <!-- HEADER -->
    <header class="header" id="home">
        <div class="container">
            <nav class="header-navigation" aria-label="navigation">
                <div class="logo"><span class="yellow">Universal </span>| Fitness</div>

                <img src="img/nav-icon.svg" alt="navigation icon" class="nav-icon" width="30" height="30" />

                <ul>
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>
                        <a href="AboutUs/About us second part.html">About</a>
                    </li>
                    <li>
                        <a href="#courses">Courses</a>
                    </li>
                    <li>
                        <a href="#trainers">Trainers</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                    <li class="">
						<a href="Member/Become Member.php">Membership</a>
					</li>
					<li class="member">
						<a href="Admin-Panel/login.php">Admin</a>
					</li>

                </ul>
            </nav>
        </div>
    </header>

    <main>
        <!-- HERO SECTION -->
        <section class="section-hero">
            <div class="container hero-box">
                <div class="hero-content margin-bottom">
                    <div class="wrapper">
                        <h1 class="heading heading--1 margin-bottom">
                            A place for your
                        </h1>
                        <ul class="dynamic-txts">
                            <li><span>FITNESS</span></li>
                            <li><span>BODYBUILDER</span></li>
                            <li><span>GYMNASTIC</span></li>
                            <li><span>BOXING</span></li>
                        </ul>
                    </div>

                    <p class="description">
                        We Offer Functional Training, Plyometric Boxes, Aerobics classes,
                        TRX And Much More
                    </p>
                </div>
                <div class="btn-group">
                    <a href="Login/login.php">
                    <button class="btn btn__primary margin-right margin-bottom">
                    Join with us
                    </button>
                    </a>
                    <a href="services/new 2.html">
                    <button class="btn btn__secondary">Our services</button>
                    </a>
                </div>
            </div>
        </section>

        <!-- SECTION ABOUT -->
        
        <section class="section-about" id="about"> 
            <div class="about-box container">
                <div class="about-box__content" data-aos="fade-up">
                    <h2 class="heading heading--2">
                        About <span class="yellow">Universal</span> Fitness
                    </h2>
                    <p>
                        We believe in encouraging, supporting, challenging, learning and growing to be the best! Our
                        flexible
                        working solutions, gym rebates and educational opportunities create a positive work/life balance
                        for all our
                        employees. <br> <br>

                        We believe in giving back and offering time, money and products to volunteer services and
                        community
                        organisations. We’re committed to improving individuals' health, fitness, and well-being by
                        supporting
                        global and local charities, local sports teams, and events.
                    </p>
                    <a href="AboutUs/About us second part.html" class="link-button">Read More &rarr;</a>
                </div>
                <figure class="about-box__image" data-aos="fade-up">
                    <img src="img/about1/fitness3.jpg" alt="about-image-one" width="370" height="243" />
                    <img src="img/about1/fitness2.jpg" alt="about-image-twwo" width="370" height="243" />
                    <img src="img/about1/fitness7.jpg" alt="about-image-three" width="440" height="300" />
                    <img src="img/about1/fitness4.jpg" alt="about-image-twwo" width="370" height="243" />
                    <img src="img/about1/fitness1.jpg" alt="about-image-three" width="440" height="300" />
                </figure>
            </div>
        </section>
    

        <!-- SECTION COURSES -->
        <section class="section-courses" id="courses">
            <div class="container courses-box" data-aos="fade-up">
                <header class="courses-heading">
                    <h2 class="heading heading--2 underline">Our Courses</h2>
                    <p>
                        Universal Fitness Group Training Classes are highly personal, guided by experts, & are
                        results-driven
                        fitness.


                    </p>
                </header>

                <article class="courses-content">
                    <div class="class-card">
                        <img class="class-card__img" src="./img/couses1/img6.jpg" alt="body building course" width="550"
                            height="550" />

                        <div class="class-card__overlay">
                            <div class="text">
                                <p>
                                    Bodybuilding is the use of progressive resistance exercise to build, control, and
                                    develop one's muscles via hypertrophy.
                                </p>
                                <br>
                                <a href="Courses/bodybuilding.php" class="link-button">Read More &rarr;</a>
                            </div>
                        </div>

                        <div class="class-card__title">Body Building</div>
                    </div>

                    <div class="class-card">
                        <img class="class-card__img" src="./img/couses1/img2.jpg" alt="cross fit course" width="550"
                            height="550" />
                        <div class="class-card__overlay">
                            <div class="text">
                                <p>
                                    A strength and conditioning workout that is made up of functional movement performed
                                    at a high intensity level.
                                </p><br>

                                <a href="Courses/crossfit.php" class="link-button">Read More &rarr;</a>
                            </div>
                        </div>
                        <div class="class-card__title">Cross Fit</div>
                    </div>

                    <div class="class-card">
                        <img class="class-card__img" src="./img/couses1/img3.jpg" alt="gymnastic course" width="550"
                            height="550" />

                        <div class="class-card__overlay">
                            <div class="text">
                                <p>
                                    Gymnastics is a type of sport that includes physical exercises requiring balance,
                                    strength, flexibility, agility, coordination, and endurance.
                                </p>
                                <br>
                                <a href="Courses/gymnastic.php" class="link-button">Read More &rarr;</a>
                            </div>
                        </div>

                        <div class="class-card__title">Gymnastic</div>
                    </div>

                    <div class="class-card">
                        <img class="class-card__img" src="./img/couses1/img4.jpg" alt="fitness course" width="550"
                            height="550" />
                        <div class="class-card__overlay">
                            <div class="text">
                                <p>
                                    Exercise burns fat, builds muscle, lowers cholesterol, eases stress and anxiety,
                                    lets us sleep restfully.
                                </p>
                                <br>
                                <a href="Courses/fitness .php" class="link-button">Read More &rarr;</a>
                            </div>
                        </div>
                        <div class="class-card__title">Fitness</div>
                    </div>

                    <div class="class-card">
                        <img class="class-card__img" src="./img/courses-TRX.jpg" alt="fitness course" width="550"
                            height="550" />
                        <div class="class-card__overlay">
                            <div class="text">
                                <p>
                                    Delivers a fast, effective total-body workout. TRX which stands for Total Body
                                    Resistance Exercise, is revolutionary workout
                                </p>
                                <br>
                                <a href="Courses/TRX.php" class="link-button">Read More &rarr;</a>
                            </div>
                        </div>
                        <div class="class-card__title">TRX</div>
                    </div>

                    <div class="class-card">
                        <img class="class-card__img" src="./img/courses-boxing.jpg" alt="fitness course" width="550"
                            height="550" />
                        <div class="class-card__overlay">
                            <div class="text">
                                <p>
                                    Boxing is a combat sport and a martial art in which two people, usually wearing
                                    protective gloves and other protective equipment
                                </p>
                                <br>
                                <a href="Courses/boxing .php" class="link-button">Read More &rarr;</a>
                            </div>
                        </div>
                        <div class="class-card__title">Boxing</div>
                    </div>
                </article>
            </div>
        </section>

        <!-- SECTION OFFER -->
        <section class="section-offer" id="offer">
            <div class="offer-box">
                <div class="offer" data-aos="fade-up">
                    <h2 class="heading heading--2 margin-bottom">
                        Special offer this summer get full Benefits for year with 20%
                        discount.
                    </h2>
                    <p class="margin-bottom">
                        Save 10% on all annual memberships when you sign up between July 1st and 7th.
                    </p>
                    <a href="Member/Become Member.php">
                    <button class="btn btn__primary">Become a member</button>
                    </a>
                    
                </div>

                <div class="offer-img"></div>
            </div>
        </section>

        <!-- SECTION COACHES -->
        <section class="section-coaches" id="trainers">
            <div class="container coaches-box" data-aos="fade-up">
                <header class="coache-heading">
                    <h2 class="heading heading--2 underline margin-bottom">
                        OUR FITNESS COACHES
                    </h2>
                    <p>
                        Your fitness trainer will lead your group to coach you through exercises in a variety of fitness
                        & wellness
                        experiences: from sound-bath yoga, TRX suspension, dumbbells, functional training,Jymnstic,
                        core, & more.
                    </p>
                </header>

                <article class="coache-content">
                    <div class="c-card">
                        <a href="coaches/bodybilding/body building.html">
                        <img src="img/coache-1.jpg" alt="coache one" class="c-card__img" width="550" height="550" />
                        </a>
                        <div class="overlay">
                            <img src="./img/logo-whatsapp.svg" alt="whatsapp-icon" width="30" height="30" />

                            <img src="./img/logo-facebook.svg" alt="facebook-icon" width="30" height="30" />

                            <img src="./img/logo-instagram.svg" alt="instagram-icon" width="30" height="30" />

                            <img src="./img/logo-twitter.svg" alt="twitter-icon" width="30" height="30" />
                        </div>

                        <div class="c-card__content">
                            <p class="c-name">KAVINGA</p>
                            <p class="c-title">Body Building</p>
                        </div>
                    </div>

                    <div class="c-card">
                        <a href="coaches/cardio/cardio expert.html">
                            <img src="img/coache-2.jpg" alt="coache one" class="c-card__img" width="550" height="550" />
                        </a>
                        

                        <div class="overlay">
                            <img src="./img/logo-whatsapp.svg" alt="whatsapp-icon" width="30" height="30" />

                            <img src="./img/logo-facebook.svg" alt="facebook-icon" width="30" height="30" />

                            <img src="./img/logo-instagram.svg" alt="instagram-icon" width="30" height="30" />

                            <img src="./img/logo-twitter.svg" alt="twitter-icon" width="30" height="30" />
                        </div>

                        <div class="c-card__content">
                            <p class="c-name">CHETHIYA</p>
                            <p class="c-title">Cardio Expert</p>
                        </div>
                    </div>

                    <div class="c-card">
                        <a href="coaches/fitness/fitness coaches.html">
                        <img src="img/coache-3.jpg" alt="coache three" class="c-card__img" width="550" height="550" />
                        </a>
                        
                        <div class="overlay">
                            <img src="./img/logo-whatsapp.svg" alt="whatsapp-icon" width="30" height="30" />

                            <img src="./img/logo-facebook.svg" alt="facebook-icon" width="30" height="30" />

                            <img src="./img/logo-instagram.svg" alt="instagram-icon" width="30" height="30" />

                            <img src="./img/logo-twitter.svg" alt="twitter-icon" width="30" height="30" />
                        </div>

                        <div class="c-card__content">
                            <p class="c-name">WADUGODAPITIYA</p>
                            <p class="c-title">Fitness Coach</p>
                        </div>
                    </div>

                    <div class="c-card">
                        <a href="coaches\crossfit\Cross fit.html">
                        <img src="img/cross-1.jpg" alt="coache three" class="c-card__img" width="550" height="550" />
                        </a>
                       
                        <div class="overlay">
                            <img src="./img/logo-whatsapp.svg" alt="whatsapp-icon" width="30" height="30" />

                            <img src="./img/logo-facebook.svg" alt="facebook-icon" width="30" height="30" />

                            <img src="./img/logo-instagram.svg" alt="instagram-icon" width="30" height="30" />

                            <img src="./img/logo-twitter.svg" alt="twitter-icon" width="30" height="30" />
                        </div>

                        <div class="c-card__content">
                            <p class="c-name">MAHESH PERERA</p>
                            <p class="c-title">Crosfit Coach</p>
                        </div>
                    </div>

                    <div class="c-card">
                        <a href="coaches\gymnastic\gimnastic.html">
                        <img src="img/2.jpg" alt="coache three" class="c-card__img" width="550" height="550" />
                        </a>
                        
                        <div class="overlay">
                            <img src="./img/logo-whatsapp.svg" alt="whatsapp-icon" width="30" height="30" />

                            <img src="./img/logo-facebook.svg" alt="facebook-icon" width="30" height="30" />

                            <img src="./img/logo-instagram.svg" alt="instagram-icon" width="30" height="30" />

                            <img src="./img/logo-twitter.svg" alt="twitter-icon" width="30" height="30" />
                        </div>

                        <div class="c-card__content">
                            <p class="c-name">AJITH LIYANAGE</p>
                            <p class="c-title">Gymnastic Coach</p>
                        </div>
                    </div>

                    <div class="c-card">
                        <a href="coaches\boxing\boxing coaches.html">
                        <img src="img/box21.jpg" alt="coache three" class="c-card__img" width="550" height="550" />
                        </a>
                        
                        <div class="overlay">
                            <img src="./img/logo-whatsapp.svg" alt="whatsapp-icon" width="30" height="30" />

                            <img src="./img/logo-facebook.svg" alt="facebook-icon" width="30" height="30" />

                            <img src="./img/logo-instagram.svg" alt="instagram-icon" width="30" height="30" />

                            <img src="./img/logo-twitter.svg" alt="twitter-icon" width="30" height="30" />
                        </div>

                        <div class="c-card__content">
                            <p class="c-name">KARUNARATHNA</p>
                            <p class="c-title">Boxing Coach</p>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <!-- SECTION REVIEW -->
        <div class="slide-container swiper">
            <div class="slide-content">

                <h2 class="heading heading--2  underline margin-bottom reviewtopic">
                    what people say's
                </h2>
                <div class="card-wrapper swiper-wrapper">

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlayr"></span>

                            <div class="card-image">
                                <img src="img/review/kavi.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Kavindu Dilshan</h2>
                            <div class="reviews">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i> <!--empty-->
                            </div>

                            <p class="description1">I love this place. I highly recommend this place to anyone who wants
                                to get in shape. The trainers are really awesome and helpful, they make you feel really
                                comfortable.</p>
                            <br>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlayr"></span>

                            <div class="card-image">
                                <img src="img/review/madush.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Madhush Gihan</h2>
                            <div class="reviews">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i> <!--empty-->
                            </div>

                            <p class="description1">Excellent personal training.Trainers who really care and go
                                above <br>
                                and beyond to help you achieve your goals. Small and private gym that feels more
                                personal.</p>
                            <br>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlayr"></span>

                            <div class="card-image">
                                <img src="img/review/sahan.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Sahan Hasthika</h2>
                            <div class="reviews">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i> <!--empty-->
                            </div>

                            <p class="description1"> Hands down, best choice I’ve made <br> training at Universal
                                Fitness.
                                <br>
                                VERY friendly <br>
                                team who make me actually want to go train.
                            </p>
                            <br>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlayr"></span>

                            <div class="card-image">
                                <img src="img/review/dana.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Dhanajaya Gihan</h2>
                            <div class="reviews">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i> <!--empty-->
                            </div>

                            <p class="description1">The Universal Fitness has been awesome to me. <br> Their trainers are
                                exceptional, the overall vibe is great and I have had nothing but good experiences.</p>
                            <br>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlayr"></span>

                            <div class="card-image">
                                <img src="img/review/dilhara.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Dilhara Fernando</h2>
                            <div class="reviews">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i> <!--empty-->
                            </div>

                            <p class="description1">Excellent personal training. Trainers who really care and go above
                                and beyond to help you achieve your goals. <br> Small and private gym that feels more
                                personal.</p>
                            <br>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlayr"></span>

                            <div class="card-image">
                                <img src="img/review/sithumini.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Sithumini Attanayake</h2>
                            <div class="reviews">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i> <!--empty-->
                            </div>

                            <p class="description1"> This gym has the best energy, staff, and feel. <br> Everything is
                                so
                                clean, every trainer closely watches and corrects everyone’s form, and a DJ on Saturday.
                            </p>
                            <br>
                        </div>
                    </div>


                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlayr"></span>

                            <div class="card-image">
                                <img src="images/profile1.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">kasun kariyawasam</h2>
                            <div class="reviews">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i> <!--empty-->
                            </div>

                            <p class="description1">My experience with Universal Fitness has been and continues to be
                                perfect. <br> Convenience at its finest. <br> A special shout out to one of the trainers
                                (TN).</p>
                            <br>
                        </div>
                    </div>


                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlayr"></span>

                            <div class="card-image">
                                <img src="images/profile1.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Dilshan Perera</h2>
                            <div class="reviews">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i> <!--empty-->
                            </div>

                            <p class="description1">Universal Fitness gives me an excellent workout every time and is
                                able to keep
                                things fresh after months of going consistently. <br>
                                Great people and great results!</p>
                            <br>
                        </div>
                    </div>


                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlayr"></span>

                            <div class="card-image">
                                <img src="images/profile1.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Dewanam piyatissa</h2>
                            <div class="reviews">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i> <!--empty-->
                            </div>

                            <p class="description1">Easily the best gym in the city, <br> reasonably priced and a great
                                <br>
                                workout atmosphere – nice <br> but not fancy, <br> lots of people serious about fitness.
                            </p>
                            <br>
                        </div>
                    </div>

                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>

        <!-- SECTION CONTACT -->

       

        <?php 
        include('Contactus/sendEmail.php');
        ?>

        <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->
        

        <section class="section-contact" id="contact">
            <div class="contact-box">
                
                <form class="form-grp" data-aos="fade-up"  method = "POST" >
                    <h2 class="heading heading--2 margin-bottom">
                        Get in <span class="yellow">Touch</span>
                    </h2>
                    

                    <input type="text" class="form form__input" placeholder="Name" name="name" />
                    <input type="email" class="form form__input" placeholder="Email" name="email" />
                    <input type="text" class="form form__input" placeholder="Phone" name="telephone" />
                    <textarea name="message" cols="5" rows="3" class="form form__input"
                        placeholder="Message"></textarea>
                    <button class="btn btn__primary form-flex" type="submit" name="send" >Send &nbsp;</button>
                </form>
                <div id="mapid" data-aos="fade-up">


                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7477.489012526143!2d79.89837468890168!3d6.883223961742105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1snugegoda%20universal%20fitness!5e0!3m2!1sen!2slk!4v1691298441005!5m2!1sen!2slk"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </section>
         <!--contact section end-->

    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
        





    </main>




    <!-- FOOTER -->
    <footer class="section-footer" id="footer">
        <div class="footer-box container">
            <div class="contact-details">
                <h2 class="margin-bottom"><span class="yellow">Universal </span>Fitness</h2>

                <ul class="contact-data">
                    <li class="location">100 Nugegoda, Sri Lanka</li>
                    <li class="phone">+9411 4505500</li>
                    <li class="email">Universal@Fitness.com</li>
                    <li class="social">
                        <img src="./img/logo-whatsapp.svg" alt="whatsapp icon" width="35" height="35" />

                        <img src="./img/logo-facebook.svg" alt="facebook icon" width="35" height="35" />

                        <img src="./img/logo-instagram.svg" alt="instagram icon" width="35" height="35" />

                        <img src="./img/logo-twitter.svg" alt="twitter icon" width="35" height="35" />
                    </li>
                </ul>
            </div>

            <nav class="footer-nav" aria-label="navigation">
                <div class="nav-name">Quick Links</div>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#courses">Courses</a></li>
                    <li><a href="#trainers">Trainers</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>

            <div class="newsletter">
                <div class="newsletter__title">News Letter</div>
                <div class="newsletter__text">
                Want to Know what we're up to? Sign up for the newslatter,
				 and join oure tribe.
                </div>
                <form class="newsletter__input">
                    <input type="text" class="form" placeholder="Universal@Fitness.com" />
                    <img src="./img/send.svg" alt="send icon" class="send-icon" width="36" height="36" />
                </form>
            </div>

            <div class="legel">
                <p class="text">Copyright &copy; 2023 Universal Fitness All Rights Reserved&nbsp;</p>
                <a href="">
                    <img src="img/foot.png" alt="" class="github" width="55" height="55" />
                </a>
            </div>
        </div>
    </footer>










    <!-- Swiper JS -->
    <script src="slider/swiper-bundle.min.js"></script>
    <script src="scroll.js"></script>
    <script src="script.js"></script>

</body>

</html>