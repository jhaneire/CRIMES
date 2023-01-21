<!DOCTYPE html>
<html data-wf-domain="crime-and-incident-reporting.webflow.io" data-wf-page="63c4ea234553f686cde06d73" data-wf-site="63c4ea234553f6273be06d72">

<head>
    <meta charset="utf-8" />
    <title>Crime and Incident Reporting</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link
        href="./index-style.css"
        rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script
        type="text/javascript">WebFont.load({ google: { families: ["Oswald:200,300,400,500,600,700"] } });</script>
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
    
    <script
        type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);</script>
    <link href="https://uploads-ssl.webflow.com/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="https://uploads-ssl.webflow.com/img/webclip.png" rel="apple-touch-icon" />
</head>

<body class="body">
    <header id="home" class="header wf-section" data-ix="new-interaction">
        <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar-2 w-nav">
            <div data-w-id="12074618-5f1e-ac17-9670-c390e9297426"
                style="-webkit-transform:translate3d(82px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(82px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(82px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(82px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                class="w-container"><a href="#" class="w-nav-brand"></a>
                
                
                <nav role="navigation" class="w-nav-menu"><a href="#home" class="nav-link w-nav-link">HOME</a><a
                        href="#about" class="nav-link-2 w-nav-link">ABOUT</a>
                        <a href="#contact" class="nav-link-3 w-nav-link">CONTACT</a>
                        <?php 
                        session_start(); 
                        if(isset($_SESSION['email'])){
                            echo '<a href="index.php" class="nav-link-3 w-nav-link">DASHBOARD</a>';
                            echo '<a href="logout.php" class="nav-link-4 w-nav-link">LOGOUT</a></nav>';
                        }else{
                        echo '<a href="login.php" class="nav-link-4 w-nav-link">LOGIN/SIGNUP</a></nav>';
                        }
                        ?>
                <div class="w-nav-button">
                    <div class="w-icon-nav-menu"></div>
                </div>
            </div>
        </div>
        <div class="w-row">
            <div data-w-id="7cd4c9ce-1e70-d3fc-6335-7340f0fe05d9"
                style="-webkit-transform:translate3d(-87px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-87px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-87px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-87px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                class="column w-col w-col-6">
                <h1 class="heading">REPORT CRIME AND <br />INCIDENTS IN SAN PEDRO, LAGUNA</h1>
                <h2 class="heading-2">Be A Responsible Citizen and Help Make Our City Safer</h2>
                <p class="paragraph">Welcome to the official website for crime and incident reporting in San Pedro,
                    Laguna. Our goal is to make it easy for citizens to report incidents and help keep our city safe. By
                    working together, we can make San Pedro a safer place for everyone.</p>
                    <a href="add_order.php" class="button-3 w-button">REPORT AN INCIDENT</a>
            </div>
            
            
            <div class="column-2 w-col w-col-6">
                <div class="container2"><img
                        src="assets/home.png"
                        loading="lazy" width="650"
                        style="-webkit-transform:translate3d(0px, 155px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0px, 155px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0px, 155px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0px, 155px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                        srcset="assets/home.png"
                        sizes="(max-width: 767px) 100vw, 50vw" data-w-id="282ef2dd-13da-dad5-72a7-20341d189004"
                        alt="" /></div>
            </div>
        </div>
        
        
        <div data-w-id="484e766e-8134-1c97-7e8d-f12ec72f7934" style="opacity:0" class="columns2 w-row">
            <div class="column-3 w-col w-col-3">
                
                
                <div class="div-block-7">
                    
                    <a href="https://pro10.pnp.gov.ph/pro10/index.php/public-relations/public-safety-tips/87-crime-prevention-tips" target="_blank"> <img
                        src="https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c5a0824fa37e9125642d84_111.png"
                        loading="lazy" sizes="(max-width: 479px) 87vw, (max-width: 767px) 52vw, 22vw"
                        srcset="https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c5a0824fa37e9125642d84_111-p-500.png 500w, https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c5a0824fa37e9125642d84_111-p-800.png 800w, https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c5a0824fa37e9125642d84_111-p-1080.png 1080w, https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c5a0824fa37e9125642d84_111-p-1600.png 1600w, https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c5a0824fa37e9125642d84_111.png 1920w"
                        alt="" class="image-5" /> </a>
                    <div class="text-block-6">Crime and Prevention Tips</div>
                    <p class="paragraph-4">&quot;Police Regional Office 10 encourages community involvement in crime
                        prevention through organization of Street Watches and sharing of emergency information&quot;</p>
                    <a href="https://pro10.pnp.gov.ph/pro10/index.php/public-relations/public-safety-tips/87-crime-prevention-tips"
                        target="_blank" class="button-5 w-button">Learn More</a>
                </div>
            </div>
            <div class="column-4 w-col w-col-3">
                <div class="div-block-7">
                    
                    <a href="https://www.lguvscovid.ph/content/free-mental-health-services-updated-2022-list" target="_blank"> <img
                        src="https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c5a48588e0b32866395c84_2222222222.png"
                        loading="lazy" sizes="(max-width: 479px) 92vw, (max-width: 767px) 52vw, 23vw"
                        srcset="https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c5a48588e0b32866395c84_2222222222-p-500.png 500w, https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c5a48588e0b32866395c84_2222222222-p-800.png 800w, https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c5a48588e0b32866395c84_2222222222-p-1080.png 1080w, https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c5a48588e0b32866395c84_2222222222-p-1600.png 1600w, https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c5a48588e0b32866395c84_2222222222.png 1920w"
                        alt="" class="image-6" /> </a>
                    <div class="text-block-6">Counseling Sevices</div>
                    <p class="paragraph-4">An updated list of free mental health services LGUs and their residents can
                        avail of to deal with the rising cases of anxiety and depression in the country.</p>
                        <a href="https://www.lguvscovid.ph/content/free-mental-health-services-updated-2022-list" target="_blank" class="button-5 w-button">Learn More</a>
                </div>
            </div>
            <div class="column-5 w-col w-col-3">
                
                <div class="div-block-7">
                    <a href="https://lawyerphilippines.org/philippine-free-legal-advice-groups/" target="_blank"> <img
                        src="https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c5a4d1400b76049a6688c3_3333333333333.png"
                        loading="lazy" sizes="(max-width: 479px) 92vw, (max-width: 767px) 52vw, 23vw"
                        srcset="https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c5a4d1400b76049a6688c3_3333333333333-p-500.png 500w, https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c5a4d1400b76049a6688c3_3333333333333-p-800.png 800w, https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c5a4d1400b76049a6688c3_3333333333333-p-1080.png 1080w, https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c5a4d1400b76049a6688c3_3333333333333-p-1600.png 1600w, https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c5a4d1400b76049a6688c3_3333333333333.png 1920w"
                        alt="" class="image-7" /> </a>
                    <div class="text-block-6">Legal Aid</div>
                    <p class="paragraph-4">Government offices are available nationwide. They are the go-to source for
                        legal advice for child support, criminal issues or labor concerns.</p><a
                        href="https://lawyerphilippines.org/philippine-free-legal-advice-groups/" target="_blank"
                        class="button-7 w-button">Learn More</a>
                </div>
            </div>
            <div class="column-6 w-col w-col-3">
                <div class="div-block-7">
                    
                    <a href="https://www.philembassymadrid.com/wordpress/wp-content/uploads/Forms/Directory%20of%20Philippine%20Government%20Offices.pdf" target="_blank"> <img
                        src="https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c5a5819dd04b43f8e3f54a_44444444.png"
                        loading="lazy" sizes="(max-width: 479px) 88vw, (max-width: 767px) 52vw, 22vw"
                        srcset="https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c5a5819dd04b43f8e3f54a_44444444-p-500.png 500w, https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c5a5819dd04b43f8e3f54a_44444444-p-800.png 800w, https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c5a5819dd04b43f8e3f54a_44444444-p-1080.png 1080w, https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c5a5819dd04b43f8e3f54a_44444444-p-1600.png 1600w, https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c5a5819dd04b43f8e3f54a_44444444.png 1920w"
                        alt="" class="image-8" /> </a>
                    <div class="text-block-6">Contact Information for Local Authorities and Support Groups</div>
                    <p class="paragraph-4">Stay informed and connected: A guide to local authorities and support
                        groups&#x27; contact information</p><a
                        href="https://www.philembassymadrid.com/wordpress/wp-content/uploads/Forms/Directory%20of%20Philippine%20Government%20Offices.pdf"
                        target="_blank" class="button-8 w-button">Learn More</a>
                </div>
            </div>
        </div>
        <div id="about" data-w-id="c9beea0c-95f2-6689-deae-f4ed2b47506c" style="opacity:0" class="container3">
            <h1 class="heading-4">ABOUT</h1>
            <p class="paragraph-2">The Crime and Incident Reporting System is a web-based platform that allows
                individuals to easily report crimes and incidents that have occurred in the community of San Pedro City
                Laguna. Reports can be submitted and will be reviewed by authorities for investigation and action. By
                using this system, you can help keep your community safe and assist law enforcement.</p>
        </div>
        <div data-w-id="7be74828-750f-c460-4b85-f28692a77fbb" style="opacity:0" class="div-block-5">
            <h1>MEET OUR TEAM</h1>
        </div>
        <div data-w-id="57a57e80-4da0-108e-b0f4-3ca4dd9f0293" style="opacity:0" class="columns-5 w-row">
            <div class="column-13 w-col w-col-3">
                <div class="div-block-4"><img
                        src="https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c58e28cbaab92471ef2d9c_medz.png"
                        loading="lazy" alt="" class="image-3" /></div>
                <div class="text-block-3"><strong class="bold-text">JHANEIRE CLODE MENDEZ</strong></div>
                <div class="text-block-4">IT STUDENT</div><img
                    src="https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c5926081ed58727f524f68_2560px-5_stars.svg.png"
                    loading="lazy" width="100" alt="" />
            </div>
            <div class="column-14 w-col w-col-3">
                <div class="div-block-4"><img
                        src="https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c58e2d30b1062d8900ad52_1x1%20PIC%20-%20Jan%20Elven%20Hongayo.jpg"
                        loading="lazy" sizes="145.1999969482422px"
                        srcset="https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c58e2d30b1062d8900ad52_1x1%20PIC%20-%20Jan%20Elven%20Hongayo-p-500.jpg 500w, https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c58e2d30b1062d8900ad52_1x1%20PIC%20-%20Jan%20Elven%20Hongayo-p-800.jpg 800w, https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c58e2d30b1062d8900ad52_1x1%20PIC%20-%20Jan%20Elven%20Hongayo-p-1080.jpg 1080w, https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c58e2d30b1062d8900ad52_1x1%20PIC%20-%20Jan%20Elven%20Hongayo.jpg 1536w"
                        alt="" class="image-2" /></div>
                <div class="text-block-3"><strong class="bold-text">JAN ELVEN HONGAYO</strong></div>
                <div class="text-block-4">IT STUDENT</div><img
                    src="https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c5926081ed58727f524f68_2560px-5_stars.svg.png"
                    loading="lazy" width="100" alt="" />
            </div>
            <div class="column-15 w-col w-col-3">
                <div class="div-block-4"></div>
                <div class="text-block-3"><strong class="bold-text">BRADLEY ALOJADO</strong></div>
                <div class="text-block-4">IT STUDENT</div><img
                    src="https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c5926081ed58727f524f68_2560px-5_stars.svg.png"
                    loading="lazy" width="100" alt="" />
            </div>
            <div class="column-16 w-col w-col-3">
                <div class="div-block-4"></div>
                <div class="text-block-3"><strong class="bold-text">LANCE CARL RAYOS</strong></div>
                <div class="text-block-4">IT STUDENT</div><img
                    src="https://uploads-ssl.webflow.com/63c4ea234553f6273be06d72/63c5926081ed58727f524f68_2560px-5_stars.svg.png"
                    loading="lazy" width="100" alt="" />
            </div>
        </div>
        <div id="contact" data-w-id="05555fd3-b1ce-3639-3cf9-aecde1bea149" style="opacity:0" class="container5 w-row">
            <div class="column-9 w-col w-col-7">
                <h3 class="heading-7">Send Your Request</h3>
                <div class="text-block-5">If you have any questions or concerns about this website, please don&#x27;t
                    hesitate to contact us. We&#x27;re here to help and are happy to answer any questions you may have.
                </div>
                              <div class="columns-3 w-row">
                    <div class="column-11 w-col w-col-6">
                      <div class="w-form">
                            <form id="email-form" name="email-form" data-name="Email Form" method="POST" class="form" action="send-email.php">
                                <label for="name" class="field-label">Name</label>
                                    <input type="text" class="text-field-2 w-input" maxlength="256" name="name" data-name="Name" placeholder="" id="name" required="" />
                                <label for="email" class="field-label-4">Email Address</label>
                                    <input type="email"class="text-field-3 w-input" maxlength="256" name="email" data-name="Email" placeholder="" id="email" required="" />
                                <label for="name2" class="field-label-2">Phone</label>
                                    <input type="text"class="text-field-4 w-input" maxlength="256" name="name2" data-name="Name 2"placeholder="" id="name2" required="" />
                               <label for="email2" class="field-label-3">Subject</label>
                                    <input type="text"class="text-field-5 w-input" maxlength="256" name="email2" data-name="Email 2"placeholder="" id="email2" required="" />
                                <label for="Message" class="field-label-5">Message</label>
                                    <textarea placeholder="" maxlength="5000" id="Message" name="Message" data-name="Message" required="" class="textarea w-input"></textarea>
                               
                                <input type="submit" value="submit" data-wait="Please wait..." class="submit-button w-button" />
                            </form>
                            <div class="w-form-done">
                                <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="w-form-fail">
                                <div>Oops! Something went wrong while submitting the form.</div>
                            </div>

                           <script>
                                // Get the form element
                                const form = document.getElementById("email-form");
                                // Get the "w-form-done" and "w-form-fail" divs
                                const successDiv = document.querySelector(".w-form-done");
                                const errorDiv = document.querySelector(".w-form-fail");
                                // Get the submit button
                                const submitBtn = document.querySelector(".submit-button");
                            
                                // Add an event listener to the form to listen for submit events
                                form.addEventListener("submit", function(event) {
                                    event.preventDefault();
                            
                                    // Send the form data to the server using Fetch API
                                    fetch('send-email.php', {
                                        method: 'POST',
                                        body: new FormData(form)
                                    })
                                    .then(response => response.text())
                                    .then(data => {
                                        if (data === 'Message sent!') {
                                            // Show the "w-form-done" div
                                            successDiv.style.display = "block";
                                            // Hide the "w-form-done" div after 5 seconds
                                            setTimeout(function() {
                                                successDiv.style.display = "none";
                                            }, 5000);
                                        } else {
                                            // Show the "w-form-fail" div
                                            errorDiv.style.display = "block";
                                            // Hide the "w-form-fail" div after 5 seconds
                                            setTimeout(function() {
                                                errorDiv.style.display = "none";
                                            }, 5000);
                                        }
                                    })
                                    .catch(error => {
                                        console.error(error);
                                    });
                                });
                            </script>



                        </div>
                    </div>
                </div>
            </div>
            <div class="column-10 w-col w-col-5">
                <h3 class="heading-6">Reach Us</h3>
                <p id="w-node-_60e34700-778b-982a-f909-0662744b7a16-cde06d73" class="paragraph-3">
                    <br />Email<br /><br />Phone<br /><br /><br />Address</p>
                <p id="w-node-ad74068d-8be1-e7c7-dfc2-98030a1fe7d6-cde06d73" class="paragraph-3">
                    <br />lagunacrimereporting@corpostocksemail.com	<br />‍<br />555-555-5555<br /><br /><br />San Pedro City
                    Laguna, Philippines, 4023</p>
            </div>
        </div>
    </header>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=63c4ea234553f6273be06d72"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="./index-script.js"
        type="text/javascript"></script>
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>

</html>





