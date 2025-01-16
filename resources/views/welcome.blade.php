<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="og:title" property="og:title" content="Archi Designs">
    <link rel="canonical" href="">
    
    <title>Archi Designs</title>
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&family=Satisfy&display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="images/arc.jpeg" type="image/x-icon">

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css"
      crossorigin=""
    />

    <!-- === Swiper CSS === -->
    <link rel="stylesheet" href="./assets/css/swiper-bundle-min.css" />

    <!-- === CSS === -->
    <link rel="stylesheet" href="./assets/css/style.css" />
        
</head>

<body>
    <div class="navbar top">
        <div class="nav-main">
            <div id="menuopen" class="nav-menu"><i class="fa-solid fa-bars"></i></div>
            <div class="nav-logo"><a href="/"><img src="images/logo2.png" alt="lOGO" width="80%" height="100%"></a></div>
            <div class="brand">
                <div class="brand-name"><a href="/">Archi Designs</a></div>
            </div>
        </div>

        <div class="nav-items" id="navitems">
            <div class="close" onclick="closemenu()"><i class="fa-solid fa-xmark"></i></div>
            <div ><a class="nav-links" href="/">Home</a></div>
            <div ><a class="nav-links" href="about.html">About</a></div>
            <div ><a class="nav-links" href="projects.html">Projects</a></div>
            <div ><a class="nav-links" href="desgin.html">Design Ideas</a></div>
            <div ><a class="nav-links"href="contact.html">ContactUs</a></div>
            <!-- <button id="darkModeToggle">Toggle Dark Mode</button> -->

            
        </div>
    </div>

    <div class="main-background home" id="nav">
        <div class="matter">
            <h1>DESIGN YOUR DREAM</h1>
            <p>Whether it's a magazine-like dream kitchen<br> or your entire home,enjoy end-to-end solutions<br> from design to installation.</p>
            <a href="book.html">Book a Meeting&nbsp;<i class="fa-sharp fa-solid fa-meeting"></i></a>

        </div>
    </div>

<!-- 
    <div class="heading">Recent Projects</div>
    <div class="providings">
        <div class="container">
            <p><span>Client</span> : Mr. Santosh & Mrs. Satya<br><span>Address</span> : RR Tropicana, Narsingi</p>
            <div class="project project1">
                <div class="images">
                    <img src="images/project1/p3.jpg" alt="img1">
                    <img src="images/project1/p6.jpg" alt="img2">
                    <img src="images/project1/p1.jpg" alt="img3">
                    <img src="images/project1/p2.jpg" alt="img4">
                    <img src="images/project1/p4.jpg" alt="img5">
                    <img src="images/project1/p12.jpg" alt="img6">
                    <img src="images/project1/p13.jpg" alt="img7">
                    <img src="images/project1/p14.jpg" alt="img9">
                </div>
                <div class="slide left">
                    <span class="fa fa-angle-left" onclick="p1_arrow_slide(-1)"></span>
                </div>
                <div class="slide right">
                    <span class="fa fa-angle-right" onclick="p1_arrow_slide(1)"></span>
                </div>
                <div class="btns">
                    <span onclick="p1_option_slide(1)"></span>
                    <span onclick="p1_option_slide(2)"></span>
                    <span onclick="p1_option_slide(3)"></span>
                    <span onclick="p1_option_slide(4)"></span>
                    <span onclick="p1_option_slide(5)"></span>
                    <span onclick="p1_option_slide(6)"></span>
                    <span onclick="p1_option_slide(7)"></span>
                    <span onclick="p1_option_slide(8)"></span>
                </div>
            </div>
            <h3>Listen to our customers</h3>
            <p class="message">
                <span>Great design concept and color scheme <span>👌</span>. Improved storage options and textures would
                    enchance the space futher.For more details <a
                        href="projects.html#explore">Click&nbsp;here...</a></span>
            </p>
        </div> -->

        <!-- ------- Project 3 ------- -->
        <!-- <div class="container">
            <p><span>Client </span> : Mr. Shishir Tripati & Mrs. Shailaja Tripati<br><span>Address</span> : RR
                Tropicana, Narsingi</p>
            <div class="project project3">
                <div class="images">
                    <img src="images/project3/6.jpg" alt="img1">
                    <img src="images/project3/4.jpg" alt="img2">
                    <img src="images/project3/3.jpg" alt="img3">
                    <img src="images/project3/1.jpg" alt="img4">
                    <img src="images/project3/5.jpg" alt="img5">
                    <img src="images/project3/2.jpg" alt="img6">
                    <img src="images/project3/7.jpg" alt="img7">
                    <img src="images/project3/8.jpg" alt="img8">
                    <img src="images/project3/9.jpg" alt="img9">
                </div>
                <div class="slide left">
                    <span class="fa fa-angle-left" onclick="p3_arrow_slide(-1)"></span>
                </div>
                <div class="slide right">
                    <span class="fa fa-angle-right" onclick="p3_arrow_slide(1)"></span>
                </div>
                <div class="btns">
                    <span onclick="p3_option_slide(1)"></span>
                    <span onclick="p3_option_slide(2)"></span>
                    <span onclick="p3_option_slide(3)"></span>
                    <span onclick="p3_option_slide(4)"></span>
                    <span onclick="p3_option_slide(5)"></span>
                    <span onclick="p3_option_slide(6)"></span>
                    <span onclick="p3_option_slide(7)"></span>
                    <span onclick="p3_option_slide(8)"></span>
                    <span onclick="p3_option_slide(9)"></span>
                </div>
            </div>
            <h3>Listen to our customers</h3>
            <p class="message">
                <span>I am thrilled with the interior designing work! The attention to detail and creativity exceeded my
                    expectations.<a href="projects.html#explore">Click&nbsp;here...</a></span>
            </p>
        </div> -->

    <!-- </div>
    <div id="carpentry" class="see-more"><a href="projects.html#explore">See More...</a></div> -->


    <div id="explore" class="heading">Design Ideas</div>
    <div class="providings">

        <div class="container">
        <h3>Wardrobe</h3>

            <div class="project project1">
                <div class="images">
                    <img src="images/war.jpg " alt="img1">
                    
                </div>
                
                
            </div>

        </div>

        
        <div class="container">
        <h3>Kitcken</h3>
            <div class="project project2">
                <div class="images">
                    <img src="images/kic.jpg" alt="img1">
                   
                </div>
               
                
            </div>
        </div>


        <div class="container">
        <h3>Living Room</h3>
        <div class="project project3">
                <div class="images">
                    <img src="images/liv.jpg" alt="img1">
                    
                </div>
                
            </div>
        </div>
        <div id="carpentry" class="see-more"><a href="desgin.html">See More...</a></div> 

        <!-- ------- Project 4 ------- -->
        <!-- <div class="container">
            <p><span>Client </span> : Mr. Sailesh<br><span>Address</span> : Swanlake, Moosapet</p>
            <div class="project project4">
                <div class="images">
                    <img src="images/project4/1.jpg" alt="img1">
                    <img src="images/project4/2.jpg" alt="img2">
                    <img src="images/project4/3.jpg" alt="img3">
                    <img src="images/project4/4.jpg" alt="img4">
                    <img src="images/project4/5.jpg" alt="img5">
                    <img src="images/project4/6.jpg" alt="img6">
                    <img src="images/project4/7.jpg" alt="img7">
                </div>
                <div class="slide left">
                    <span class="fa fa-angle-left" onclick="p4_arrow_slide(-1)"></span>
                </div>
                <div class="slide right">
                    <span class="fa fa-angle-right" onclick="p4_arrow_slide(1)"></span>
                </div>
                <div class="btns">
                    <span onclick="p4_option_slide(1)"></span>
                    <span onclick="p4_option_slide(2)"></span>
                    <span onclick="p4_option_slide(3)"></span>
                    <span onclick="p4_option_slide(4)"></span>
                    <span onclick="p4_option_slide(5)"></span>
                    <span onclick="p4_option_slide(6)"></span>
                    <span onclick="p4_option_slide(7)"></span>
                </div>
            </div>
            <h3>Listen to our customers</h3>
            <p class="message">
                <span>The process was smooth, and the team was professional. My dream space is now a reality. Highly recommened!</span>
            </p>
        </div> -->

        <!-- ------- Project 5 ------- -->
        <!-- <div class="container">
            <p><span>Client </span> : Mr. Arun<br><span>Address</span> : Rankee One, Nallagondlas</p>
            <div class="project project5">
                <div class="images">
                    <img src="images/project5/1.jpg" alt="img1">
                    <img src="images/project5/2.jpg" alt="img2">
                    <img src="images/project5/3.jpg" alt="img3">
                    <img src="images/project5/4.jpg" alt="img4">
                    <img src="images/project5/5.jpg" alt="img5">
                    <img src="images/project5/6.jpg" alt="img6">
                    <img src="images/project5/7.jpg" alt="img7">
                    <img src="images/project5/8.jpg" alt="img8">
                    <img src="images/project5/9.jpg" alt="img9">
                </div>
                <div class="slide left">
                    <span class="fa fa-angle-left" onclick="p5_arrow_slide(-1)"></span>
                </div>
                <div class="slide right">
                    <span class="fa fa-angle-right" onclick="p5_arrow_slide(1)"></span>
                </div>
                <div class="btns">
                    <span onclick="p5_option_slide(1)"></span>
                    <span onclick="p5_option_slide(2)"></span>
                    <span onclick="p5_option_slide(3)"></span>
                    <span onclick="p5_option_slide(4)"></span>
                    <span onclick="p5_option_slide(5)"></span>
                    <span onclick="p5_option_slide(6)"></span>
                    <span onclick="p5_option_slide(7)"></span>
                    <span onclick="p5_option_slide(8)"></span>
                    <span onclick="p5_option_slide(9)"></span>
                </div>
            </div>
            <h3>Listen to our customers</h3>
            <p class="message">
                <span>Your Interior designing service was fantastic! The team's creativity and attention to detail were impressive. I couldn't be happier. Thank you so much!</span>
            </p>
        </div> -->

         <!-- ------- Project 6 ------- -->
         <!-- <div class="container">
            <p><span>Client </span> : Mr & Mrs Shashank<br><span>Address</span> : SMR Vinay Iconia, Kondapur</p>
            <div class="project project6">
                <div class="images">
                    <img src="images/project6/2.jpg" alt="img1">
                    <img src="images/project6/4.jpg" alt="img2">
                    <img src="images/project6/7.jpg" alt="img3">
                    <img src="images/project6/9.jpg" alt="img4">
                    <img src="images/project6/10.jpg" alt="img5">
                    <img src="images/project6/14.jpg" alt="img6">
                    <img src="images/project6/1.jpg" alt="img7">
                </div>
                <div class="slide left">
                    <span class="fa fa-angle-left" onclick="p6_arrow_slide(-1)"></span>
                </div>
                <div class="slide right">
                    <span class="fa fa-angle-right" onclick="p6_arrow_slide(1)"></span>
                </div>
                <div class="btns">
                    <span onclick="p6_option_slide(1)"></span>
                    <span onclick="p6_option_slide(2)"></span>
                    <span onclick="p6_option_slide(3)"></span>
                    <span onclick="p6_option_slide(4)"></span>
                    <span onclick="p6_option_slide(5)"></span>
                    <span onclick="p6_option_slide(6)"></span>
                    <span onclick="p6_option_slide(7)"></span>
                </div>
            </div>
            <h3>Listen to our customers</h3>
            <p class="message">
                <span>Excellent attention to detail and functionality. Loved the use of natural light. Overall,a
                    fantastic job!<span>😍</span>
                </span>
            </p>
        </div> -->

        <!-- ------- Project 7 ------- -->
         <!-- <div class="container">
            <p><span>Client </span> : Mr & Mrs Rupesh<br><span>Address</span> : Emarald Heights, Bachupally</p>
            <div class="project project7">
                <div class="images">
                    <img src="images/project7/1.jpg" alt="img1">
                    <img src="images/project7/2.jpg" alt="img2">
                    <img src="images/project7/3.jpg" alt="img3">
                    <img src="images/project7/4.jpg" alt="img4">
                    <img src="images/project7/5.jpg" alt="img5">
                    <img src="images/project7/6.jpg" alt="img6">
                    <img src="images/project7/7.jpg" alt="img7">
                    <img src="images/project7/8.jpg" alt="img8">
                </div>
                <div class="slide left">
                    <span class="fa fa-angle-left" onclick="p7_arrow_slide(-1)"></span>
                </div>
                <div class="slide right">
                    <span class="fa fa-angle-right" onclick="p7_arrow_slide(1)"></span>
                </div>
                <div class="btns">
                    <span onclick="p7_option_slide(1)"></span>
                    <span onclick="p7_option_slide(2)"></span>
                    <span onclick="p7_option_slide(3)"></span>
                    <span onclick="p7_option_slide(4)"></span>
                    <span onclick="p7_option_slide(5)"></span>
                    <span onclick="p7_option_slide(6)"></span>
                    <span onclick="p7_option_slide(7)"></span>
                    <span onclick="p7_option_slide(8)"></span>
                </div>
            </div>
            <h3>Listen to our customers</h3>
            <p class="message">
                <span>Excellent attention to detail and functionality. Loved the use of natural light. Overall,a
                    fantastic job!<span>😍</span>
                </span>
            </p>
        </div> -->
    </div>




    <div id="explore" class="heading">One-stop shop for all things home interiors</div>
    <div class="main">
        <div id="living" class="row">
            <div class="image"><img src="images/living1.jpg" alt="Carpentry"></div>
            <div class="content">
                <h3>Living  Room</h3>
                <p>
                Get the complete home interior experience with award-winning designers,<br> service partners, and the best brands.                </p>
            </div>
        </div>

        <div id="electricals" class="row">
            <div class="content">
                <h3>Kitcken</h3>
                <p>
                Choose high quality, budget-friendly modular solutions like kitchens,<br> wardrobes, TV units, and more in your favourite colours, sizes, and designs.                </p>
            </div>
            <div class="image"><img src="images/kitchen2.jpg" alt="wallpaper"></div>
        </div>

        <div id="plumbing" class="row">
            <div class="image"><img src="images/master-bedroom2.jpg" alt="wallpaper"></div>
            <div class="content">
                <h3>Master Bedroom</h3>
                <p>
                Small Master Bedroom With Drop Lights And Patterned Wallpaper
                </p>
            </div>
        </div>

        <div id="granites" class="row">
            <div class="content">
                <h3>Dining Room</h3>
                <p>
                Small Dining Room With White And Marble Table Top
                </p>
            </div>
            <div class="image"><img src="images/dining-room2.jpg" alt="wallpaper"></div>
        </div>



        <div id="painting" class="row">
            <div class="image"><img src="images/kids-bedroom2.jpg" alt="wallpaper"></div>
            <div class="content">
                <h3>Kids Room</h3>
                <p>
                Simple Kid's Room With Accent Wall With Sea And CoralSshades

                </p>
            </div>
        </div>


        <div id="wallpaper" class="row">
            <div class="content">
                <h3>Bathroom</h3>
                <p>
                Spacious Bathroom With Black Flooring And Brown Wall Tiles
                </p>
            </div>
            <div class="image"><img src="images/bathroom6.jpg" alt="wallpaper"></div>

        </div>

        <div id="wallpaneling" class="row">
            <div class="image"><img src="images/pooja-room6.jpg" alt="wallpaper"></div>
            <div class="content">
                <h3>Pooja Room</h3>
                <p>
                Contemporary, Multi-Functional Pooja Space

                </p>
            </div>
        </div>

        <div class="row">
            <div class="content">
                <h3>Wardrode</h3>
                <p>
                Mirrored Wardrobe With Storage Lofts

                </p>
            </div>
            <div class="image"><img src="images/wardrobe2.jpg" alt="wallpaper"></div>
        </div>

    </div>



    <div class="heading">You are just a few steps away...</div>
    <div class="steps">
        <div>
            <div class="step1">
                <div class="image"><img src="images/steps/step1.png" alt="Step1"></div>
                <p><a href="tel:8870857779">Connect with<br>US</p>
            </div>
            <p>1</p>
        </div>
        <div>
            <div class="step2">
                <div class="image"><img src="images/steps/step2.png" alt="step2"></div>
                <p>Express your<br>Dreams...</p>
            </div>
            <p>2</p>
        </div>
        <div>

            <div class="step3">
                <div class="image"><img src="images/dd1.png" alt="Step3"></div>
                <p>Designs <br> Phase...</p>
            </div>
            <p>3</p>

          
        </div>
        <div>
            <div class="step4">
                <div class="image"><img src="images/steps/step4.png" alt="Step4"></div>
                <p>Production &<br>Execution</p>
            </div>
            <p>4</p>
        </div>

        <div>
            <div class="step5">
                <div class="image"><img src="images/dd2.png" alt="Step4"></div>
                <p>Your Dream House<br>is Ready</p>
            </div>
            <p>5</p>
        </div>
        
    </div>


    <a href="#top" id="backtotop">
        <i class="fa fa-arrow-up"></i>
    </a>




    <div class="connect-with-us">
        <h3> What you are looking for?<span></span><br><a href="mailto:archidesings49@gmail.com"><span>ContactUs...</span></a>
        </h3>
    </div>

    <div class="contact-fixed-phone">
        <div class="phone"><a href="mailto:archidesigns49@gmail.com"><i class="fa fa-envelope"></i>Mail</a></div>
        <div class="whatsapp"><a href="https://wa.me/+919902460580" target="_blank"><i
                    class="fa-brands fa-whatsapp"></i>what's App</a></div>
    </div>

    <div class="contact-fixed-ladscape"><a href="https://wa.me/+919902460580" target="_blank"><i
                class="fa-brands fa-square-whatsapp"></i></a>
    </div>

    <footer>
        <div class="footer">
            <div class="section">
                <h3>Contact Us</h3>
                <p>Phone :<a href="tel:9902460580">9902460580</a></p>
                <p>Email :<a href="mailto:archidesigns49@gmail.com">archidesgins49@gmail.com</a></p>
                <p><a href="https://wa.me/+919902460580" target="_blank">What's App</a></p>
            </div>
            <div class="section">
                <h3>Our Services</h3>
                <p><a href="desgin.html#living">Living Room</a></p>
                <p><a href="desgin.html">Kitcken Room</a></p>
                <p><a href="desgin.html">Bed Room</a></p>
                <p><a href="desgin.html">Master Room</a></p>
                <p><a href="desgin.html">Study Room</a></p>
                <p><a href="desgin.html">kids Room</a></p>
                <p><a href="desgin.html">Dining Room</a></p>
                <p><a href="desgin.html">Pooja Room</a></p>
            </div>
            <div class="section">
                <h3>Connect With Us</h3>
                <span>
                    <a href="https://www.facebook.com/ravichandran.bvr.7" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/ravichandran094rv/" target="_blank"><i
                            class="fa-brands fa-instagram"></i></a>
                    <a href="https://wa.me/+919902460580" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                </span>
            </div>
        </div>
        <div class="copyrights" id="bottom">
            Copyright &copy; 2025 All rights reserved.
        </div>
    </footer>


    <script src="js/script.js"></script>
    <script>

        var indexvalue = 1;

        project1(indexvalue);
        project3(indexvalue);


        function p1_option_slide(e) { project1(indexvalue = e); }
        function p1_arrow_slide(e) { project1(indexvalue += e); }

        function p3_option_slide(e) { project3(indexvalue = e); }
        function p3_arrow_slide(e) { project3(indexvalue += e); }


        function project1(e) {
            var i;
            const img = document.querySelectorAll('.project1  img');
            const sliders = document.querySelectorAll('.project1 .btns span');
            if (e > img.length) { indexvalue = 1; }
            if (e < 1) { indexvalue = img.length; }
            for (i = 0; i < img.length; i++) {
                img[i].style.display = "none";

            }
            for (i = 0; i < sliders.length; i++) {
                sliders[i].style.background = "rgba(0,0,0,0.5)";
                sliders[i].style.width = "10px";
            }
            common(img, sliders);
        }

        function project3(e) {
            var i;
            const img = document.querySelectorAll('.project3  img');
            const sliders = document.querySelectorAll('.project3 .btns span');
            if (e > img.length) { indexvalue = 1; }
            if (e < 1) { indexvalue = img.length; }
            for (i = 0; i < img.length; i++) {
                img[i].style.display = "none";

            }
            for (i = 0; i < sliders.length; i++) {
                sliders[i].style.background = "rgba(0,0,0,0.5)";
                sliders[i].style.width = "10px";
            }
            common(img, sliders);
        }
        function common(i, s) {
            i[indexvalue - 1].style.display = "block";
            s[indexvalue - 1].style.background = "rgb(225,206,0)";
            s[indexvalue - 1].style.width = "30px";
            s[indexvalue - 1].style.borderRadius = "20px";
            s[indexvalue - 1].style.transition = "0.3s";
        }

        // Get the button and body element
const darkModeToggle = document.getElementById('darkModeToggle');
const body = document.body;

// Check if dark mode is already saved in local storage
if (localStorage.getItem('darkMode') === 'enabled') {
    body.classList.add('dark-mode');
}

// Event listener to toggle dark mode
darkModeToggle.addEventListener('click', () => {
    body.classList.toggle('dark-mode');

    // Save the user's preference in local storage
    if (body.classList.contains('dark-mode')) {
        localStorage.setItem('darkMode', 'enabled');
    } else {
        localStorage.removeItem('darkMode');
    }
});

    </script>
</body>

</html>