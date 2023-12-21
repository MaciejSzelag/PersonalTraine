<main>
        <div class="section-1 section-main" id="AboutMe">
            <div class="section-container">
                <div class="row">
                    <div class="col-m">
                        <h1 class="h1-1">I am Personal Trainer... <i class="fa-solid fa-user-secret"></i></h1>
                        <p class="p1">Hello,
                            I'm [name], a certified personal trainer committed to helping you
                            achieve your fitness goals and embark on a transformative journey to a healthier,
                            stronger you. With [X] years of experience and a passion for [specializations],
                            I specialize in creating customized fitness programs tailored to your unique needs
                            and aspirations. Whether you're looking for one-on-one training, group sessions, or
                            virtual coaching, I'm here to guide and motivate you every step of the way. My
                            training philosophy revolves around [mention your philosophy],
                            ensuring that each session is not only effective but enjoyable. Browse through the
                            success stories of clients who have transformed their lives with my guidance,
                            and let's start your fitness journey today.Feel free to reach out for more
                            information or to schedule your first session. Let's make fitness a sustainable and
                            rewarding part of your lifestyle ! </p>
                            <div class="btn-container">
                            <div class="btn"><a class="delayed-link" href="index.php?source=About_Me"><i class="fa-regular fa-star"></i>Click abd read more About Me</i></a></div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="section-container">
                <div class="row">
                    <div class="col-m">
                        <h1 class="h1-1"><i class="fa-brands fa-think-peaks"></i>Training Philosophy</h1>
                        <p class="p1">My philosophy revolves around [mention your philosophy],
                            emphasizing the importance of consistency,
                            balance,
                            and enjoying the process. I believe in education and empowerment,
                            arming you with the knowledge and skills needed to make lasting changes to your
                            lifestyle.</p>
                    </div>
                </div>
            </div>
            <div class="section-container section-main" id="MyClients">
                <div class="row">
                    <div class="col-m">
                        <h1 class="h1-1"><i class="fa-regular fa-circle-check"></i>Client Success Stories</h1>
                        <p class="p1">Witness the transformative journeys of individuals who have achieved
                            remarkable results under my guidance. Their success stories serve as a testament to
                            the personalized and holistic approach I bring to each training session. Check out
                            our before-and-after gallery and read testimonials from clients who have embraced
                            healthier and happier lives. </p><a class="mail-a"
                            href="mailto:szelag.maciej@gmailcom"><i>szelag.maciej@gmail.com</i></a>
                        <div class="btn-container">
                            <div class="btn"><a href=""><i class="fa-brands fa-facebook"></i>facebook</a></div>
                            <div class="btn"><a href=""><i class="fa-brands fa-instagram"></i>Instagram</a>
                            </div>
                            <div class="btn"><a href=""><i class="fa-brands fa-tiktok"></i>TikTok</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-2 ">
            <div class="section-container">
                <div class="row">
                    <ul class="img-list">
<?php

global $connection;
$query = "SELECT * FROM myclients";
$selectMyClients = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($selectMyClients)) {
    $cl_id = $row["cl_id"];
    $cl_name = $row["cl_name"];
    $cl_img = $row["cl_img"];

    ?>

                        <li><a class="delayed-link" id="myLink" href="index.php?source=Client&cl_id=<?php echo $cl_id ?>">
                                <div class="img-container">
                                    <div class="img-wrap">
                                        <img src="../img/fitness/<?php echo $cl_img; ?>" alt="">
                                    </div>
                                    <div class="img-title-wrap">
                                        <div class="h2-img"><?php echo $cl_name; ?></div>
                                        <div class="decrib-img">He/She lost a 15 kg</div>
                                        <div class="h2-img small">More about transformation</div>
                                    </div>
                                </div>
                            </a></li>

<?php
}
?>


                    </ul>
                </div>
            </div>
        </div>
        <div class="section-1">
            <div class="section-container">
                <div class="row">
                    <div class="col-m">
                        <h1 class="h1-1">Rates and Packages</h1>
                        <p class="p1">Visit the "Services"page for detailed information on rates and training
                            packages. I offer flexible options to accommodate various budgets and preferences,
                            ensuring that high-quality personal training is accessible to everyone. </p><a
                            class="mail-a" href="mailto:szelag.maciej@gmailcom"><i>szelag.maciej@gmail.com</i></a>
                        <div class="btn-container">
                            <div class="btn"><a href=""><i class="fa-brands fa-facebook"></i>facebook</a></div>
                            <div class="btn"><a href=""><i class="fa-brands fa-instagram"></i>Instagram</a>
                            </div>
                            <div class="btn"><a href=""><i class="fa-brands fa-tiktok"></i>TikTok</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-2">
            <div class="section-container">
                <div class="row">
                    <ul class="img-list">
                        <li><a href="">
                                <div class="img-container">
                                    <div class="img-wrap"><img src="../img/fitness/woman-640.jpg" alt=""></div>
                                </div>
                            </a></li>
                        <li><a href="">
                                <div class="img-container">
                                    <div class="img-wrap"><img src="../img/fitness/adult-640.jpg" alt=""></div>
                                </div>
                            </a></li>
                        <!-- <li><a href="">
                                <div class="img-container">
                                    <div class="img-wrap"><img src="img/fitness/training-640.jpg" alt=""></div>
                                </div>
                            </a></li> -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-1 grid-pic section-main" >
            <div class="section-container">
                <div class="row">
                    <div class="col-m">
                        <h1 class="h1-1"><i class="fa-solid fa-circle-info"></i>Free Resources</h1>
                        <p class="p1">Explore my blog for valuable insights,
                            fitness tips,
                            and free resources designed to enhance your well-being. Knowledge is a key component
                            of success,
                            and I'm committed to
                            providing you with the tools you need to thrive on your fitness journey. Let's
                            transform your fitness goals into reality—contact me today, and let the journey
                            begin!
                        </p><a class="mail-a" href="mailto:szelag.maciej@gmailcom"><i>szelag.maciej@gmail.com</i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-1 grid-pic section-main" id="Contact">
            <div class="section-container">
                <div class="row">
                    <div class="col-m">
                        <h1 class="h1-1"><i class="fa-regular fa-envelope"></i>Contact</h1>
                        <p class="p1">Yo can contact with me by:
                        <div class="btn-container">
                        <div class="btn"><a href="mailto:szelag.maciej@gmailcom"><i class="fa-solid fa-at"></i>email</a>
                            </div>
                            <div class="btn"><a href="https://www.facebook.com/profile.php?id=100000727683099"><i class="fa-brands fa-facebook"></i>facebook</a></div>
                            <div class="btn"><a href="https://www.instagram.com/maciej_shellong_bjj/?hl=en-gb"><i class="fa-brands fa-instagram"></i>Instagram</a>
                            </div>
                            <div class="btn"><a href="https://www.tiktok.com/@maciejszelagdev"><i class="fa-brands fa-tiktok"></i>TikTok</a></div>
                        </div>
                        <!-- </p><a class="mail-a" href="mailto:szelag.maciej@gmailcom"><i>szelag.maciej@gmail.com</i></a> -->
                    </div>
                </div>
            </div>
        </div>
    </main>
