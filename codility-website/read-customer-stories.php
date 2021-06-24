<?php 
$baseUrl = '/projects/codility-website';
$siteUrl = "http://localhost{$baseUrl}";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read customer stories</title>
    <link rel="stylesheet" href="<?php echo $baseUrl ?>/css/bootstrap.css">
    <link href="<?php echo $baseUrl ?>/fontawesome-free-5.15.2-web/css/fontawesome.css" rel="stylesheet">
    <link href="<?php echo $baseUrl ?>/fontawesome-free-5.15.2-web/css/brands.css" rel="stylesheet">
    <link href="<?php echo $baseUrl ?>/fontawesome-free-5.15.2-web/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
  .page1{
    background-image: url(https://www.codility.com/wp-content/uploads/2020/04/aaArtboard-1.png);
    color: white;
  }
  .row2-head{
      background-color: yellow;
      color: black;
      font-size: 100px;
  }
  .row2-head-line{
      font-size: 50px;
  }
  #heading{
      font-size: 50px;
  }
  .left-page2{
    background-image: url(https://www.codility.com/wp-content/uploads/2020/03/Dolby-blog-image.png);
  }
  .left-page22{
 background-image: url(https://www.codility.com/wp-content/uploads/2020/05/Finleap_RGB_M04_0979-1024x686-1.jpg);
  }
  .left-page23{
    background-image: url(https://www.codility.com/wp-content/uploads/2020/05/Ocado_Fotoware_150219-scaled.jpg);
  }
  .left-page24{
    background-image: url(https://www.codility.com/wp-content/uploads/2020/06/m1.jpg);
  }
  .save-your-seat{
      background-color: yellow;
      color: black;
  }
  .last-services{
    font-size: 13px;
}
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row page1">
            <div class="col-sm-12">
                <div class="row" id="login_and_help">
                    <div class="col-sm-12 text-end">
                        <i class="fas fa-user"></i>
                        <button class="btn btn-outline-secondary dropdown-toggle border-0 button-content" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Login</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="login.php">Codility for Hiring
                                </a></li>
                            <li><a class="dropdown-item" href="#">Codility for Programmers</a></li>
                        </ul>
                        <!-- </div> -->
                        <i class="fas fa-question-circle"></i>
                        <button class="btn btn-outline-secondary dropdown-toggle border-0 button-content" type="button"
                            data-bs-toggle="dropdown">Help?</button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="help-centre.php">help center</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row" id="menu">
                    <div class="col-sm-3 offset-md-1">
                        <!-- <span class="menu-bar"> -->
                        <div class="codility">Codility<span class="yellow">_</span></div>
                    </div>
                    <div class="col-sm-6 text-end">
                        <button class="btn btn-outline-secondary dropdown-toggle border-0 button-content" type="button"
                            data-bs-toggle="dropdown">Solutions</button>
                        <a href="" class="button-content">Product Tour</a>
                        <button class="btn btn-outline-secondary dropdown-toggle border-0 button-content" type="button"
                            data-bs-toggle="dropdown">About us</button>
                        <button class="btn btn-outline-secondary dropdown-toggle border-0 button-content" type="button"
                            data-bs-toggle="dropdown">Knowledge Hub</button>
                    </div>
                    <div class="col-sm-2 text-center">
                        <button class="btn btn-outline-secondary button-content get-started"><a href="get-started.php" class="link1">Get Started</a></button>
                        <!-- </span> -->
                    </div>
                </div>
                <div class="row" id="detail_of_page_1">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6 border-end-0 details">
                        <div class="caps">How MSTS hires talent that matches their company values</div>
                        <div class="dash">_</div>
             <button class="btn btn-primary btn-lg my-5" id="get-started-2" type="button"><a  class="link" href="get-started.php">Read MSTS' story</a></button>
                </div>
                    <div class="col-sm-4 border-start-0 details"></div>
                    <div class="col-sm-1"></div>
                </div>
            </div>
        </div>
        <div class="row row2" id="page6">
            <div class="col-sm-6 px-5 py-5 border">
            <h1>The world's best tech hiring company trust Codility</h1>
 <div class="px-5 py-5">Tech recruitment is changing. Whether you need online code tests to screen thousands of engineers, or a flexible way to run tech interviews remotely, our platform will help you adapt. Submit this form and we’ll be in touch to discuss how you can upgrade your tech hiring process and Identify key skills beyond an applicant’s resume Screen and hire talent in a fully-remote workplace Improve the volume and quality of your talent pool Create a consistent and unbiased hiring standard</div>
            </div>
           <div class="col-sm-6 px-5 py-5 border text-center row2-head">
              10M+<div class="row2-head-line">Developers Evaluated</div>
           </div>
        </div>
        <div class="row row3" id="page2">
            <div class="col-sm-6 left-page2"></div>
            <div class="col-sm-6 right-page2">
                <div class="page2-content my-4" id="page2-head">How Dolby saved time by evolving their hiring process</div>
                <!-- <div class="page2-content my-4">Tuesday, March 23, 2021X</div> -->
                <div class="page2-content mt-4">Looking for ways to make your engineering team more inclusive?</div>
                <div>
                    “We had an initial trial, we gave it to our engineers and said to go and play with it, try to break it. We created a bunch of initial tests that we found useful as we began incorporating Codility into our hiring processes.”
                    
                    Stephen Byrne, Lead Recruitment Manager</div>
                <button class="btn btn-primary btn-lg save-your-seat my-5">Read Dolby's story</button>
            </div>
        </div>
        <div class="row row4" id="page2">
            
            <div class="col-sm-6 right-page2">
                <div class="page2-content my-4" id="page2-head">How finleap streamlines technical hiring for its diverse ecosystem</div>
                <div class="page2-content my-4">Tuesday, March 23, 2021X</div>
                <div class="page2-content mt-4">Looking for ways to make your engineering team more inclusive?</div>
                <div>
                    “With Codility, we’ve gone from an engineer taking 3 weeks to start an assessment to just 2 or 3 minutes.”
                    
                    Tom Moore-Stanley, Recruiting Lead: Technology, Product & Design
                    
                 </div>
                <button class="btn btn-primary btn-lg save-your-seat my-5">   Read finleap’s Story</button>
            </div>
            <div class="col-sm-6 left-page22"></div>
        </div>
        <div class="row row5" id="page2">
            <div class="col-sm-6 left-page23"></div>
            <div class="col-sm-6 right-page2">
                <div class="page2-content my-4" id="page2-head">How Ocado Technology Finds the Best Tech Candidates</div>
                <div class="page2-content my-4">Tuesday, March 23, 2021X</div>
                <div class="page2-content mt-4">Looking for ways to make your engineering team more inclusive?</div>
                <div>
                    “We’re hiring for roles in Software Engineering, Product Management, Mechanical, and Electronic Engineering, and Data Science to name but a few. Being able to quickly filter out applications so only the most suitable candidates move forward to meet our hiring managers is helpful.”
                    
                    Emily Bowers, UK Recruitment Manager
                    
                    </div>
                <button class="btn btn-primary btn-lg save-your-seat my-5">Read Ocado’s Story</button>
            </div>
        </div>
        <div class="row row6" id="page2">
            
            <div class="col-sm-6 right-page2">
                <div class="page2-content my-4" id="page2-head">How M1 Assesses Internal Tech Skills to Drive Digital Transformation</div>
                <div class="page2-content my-4">Tuesday, March 23, 2021X</div>
                <div class="page2-content mt-4">Looking for ways to make your engineering team more inclusive?</div>
                <div>
                    “One of the biggest benefits of working with Codility was the ability to align with experts to customize our assessments”
                    
                    Ng Chow Yong, Senior Manager, Special Projects
                    </div>
                <button class="btn btn-primary btn-lg save-your-seat my-5">Read M1’s Story</button>
            </div>
            <div class="col-sm-6 left-page24"></div>
        </div>
        <div class="row row7" id="page4">
            <div class="col-sm-6 page4-pic">
                <!-- <img src="https://www.codility.com/wp-content/themes/codility/assets/images/g-2-circle.png" alt="not available"> -->
            </div>
            <!-- /website-example-3/img/customer care.png -->
            <div class="col-sm-6 my-5">
                <div class="row" id="page4-part2-content">
                    <div class="col-sm-12">
                        <div class="page2-content my-4" id="page2-head">Trusted by the World’s Best Companies</div>
                        <div class="page2-content my-4">For 10 years we’ve partnered with enterprise engineering teams.
                            We have over 1,500
                            customers globally and work with the best of the best, in technology, finance, government,
                            e-commerce, transportation and entertainment.</div>
                    </div>
                    <div class="row" id="page4-part2-img">
                        <div class="col-sm-12"><img
                                src="https://www.codility.com/wp-content/uploads/2020/05/logo-farm-copy2-635x440.jpg"
                                alt="not available"></div>
                        <button class="btn btn-primary btn-lg col-sm-5 offset-md-1 mb-5" id="get-started-2"
                            type="button">Take a tour of codility</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row8" id="page5">
            <div class="col-sm-12">
                <div class="row" id="detail_of_page_1">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5 details border_color">
                        <div class="caps ">Take a Tour</div>
                        <div class="dash">_</div>
                        <div>
                            Have questions? Book a customized demo to view key features and see how we can improve your
                            tech hiring.
                        </div>
                        <button class="btn btn-primary btn-lg my-5" id="get-started-2" type="button">
                            Request a demo</button>
                    </div>
                    <div class="col-sm-5 border-start-0 details border_color"></div>
                    <div class="col-sm-1"></div>
                </div>
            </div>
            </div>
      <div class="row roww9" id="page6">
            <div class="col-sm-12">
                <div class="row" id="page6-applications">
                    <!-- <div class="col-sm-12"> -->
                    <!-- <ul class="applications d-flex"> -->
                    <span class="col-sm-2 twitter border-start-0 py-4 px-5">Codility</span>
                    <a class="col-sm-1 py-4 text-center twitter border-start-0"><i class=" fab fa-twitter"></i></a>
                    <a class="col-sm-1 py-4 text-center twitter border-start-0"><i class=" fab fa-linkedin-in"></i></a>
                    <a class="col-sm-1 py-4 text-center twitter border-start-0"><i class=" fab fa-facebook"></i></a>
                    </li></span>
                    <a class="col-sm-1 py-4 text-center twitter border-start-0"><i class=" fab fa-github"></i></a>
                    <!-- <span class="twitter"><li class="mx-5 my-4"><a><i class="fab fa-github"></i></a></li></span> -->
                    <a class="py-4 px-5 col-sm-3 twitter border-start-0"><i
                            class="px-3 fas fa-phone-square-alt"></i>UK+44 208 970 78 68</a>
                    <a class="py-4 px-5 col-sm-3 twitter border-start-0"><i
                            class="px-3 fas fa-phone-square-alt "></i>UK+44 208 970 78 68</a>
                    <!-- </ul> -->
                    <!-- </div> -->
                </div>
                <div class="py-3 row" id="page6-last-content">
                    <div class="col-sm-3 d-grid " id="page6-last-content-part1">
                        <div class=" linking-content-head">Solutions</div>
                        <a class="linking-content my-3" href="">Remote-First Hiring</a>
                        <a class="linking-content my-3" href="">Hiring at High Scale</a>
                        <a class="linking-content my-3" href="">Building Diverse Teams</a>
                        <a class="linking-content my-3" href="">Hiring Senior Engineers</a>
                        <a class="linking-content my-3" href="">Customers</a>
                        <a class="linking-content my-3" href="">Pricing</a>
                        <a class="linking-content my-3" href="">For Enterprise</a>
                        <a class="linking-content my-3" href="">Product Tour</a>
                    </div>
                    <div class="col-sm-3 d-grid">
                        <div class="linking-content-head">About us</div>
                        <a class="linking-content" href="">Our Company</a>
                        <a class="linking-content" href="">Careers</a>
                        <div class="linking-content-head">Knowledge Hub</div>
                        <a class="linking-content" href="">Resources & Research</a>
                        <a class="linking-content" href="">Events & Webinars</a>
                        <a class="linking-content" href="">Codility Blog</a>
                        <a class="linking-content" href="">Integrations & Partners</a>
                        <a class="linking-content" href="">API Documentation</a>
                    </div>
                    <div class="col-sm-2 d-grid border-start-0 border-top-0" id="page6-last-content">
                        <div class="linking-content-head">Companies</div>
                        <a class="linking-content" href="">Sign into Codility</a>
                        <a class="linking-content" href="">Help Center</a>
                        <div class="linking-content-head">Developers</div>
                        <a class="linking-content" href="">The Programmers' Home</a>
                        <a class="linking-content" href="">Candidate FAQ</a>
                    </div>
                    <div class="px-5 col-sm-4">
                        <div class="px-3 py-3 page3-content-head page6-content-head">Sign up to our newsletter</div>
                        <div class="px-3 py-3 page6-content-part">Keep up to date with the latest tech hiring news and
                            product updates</div>
                        <form class="px-3">
                            <div class=" form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Email address*">
                                <small id="emailHelp" class="text-center px-3 py-3 form-text text-muted"
                                    width="5%"></small>
                            </div>
                            <!-- <input type="email" placeholder="Email Address*"></input> -->
                            <button type="submit" class="px-3 py-3 btn btn-secondary" id="get-started-2-submit"
                                hei>Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row10" id="page6">
            <!-- <ul class="applications d-flex"> -->
            <span class="col-sm-1 twitter border-start-0 py-2 px-5 page6-head"></span>
            <a class="col-sm-1 py-2 text-center twitter border-start-0"><img src="https://www.codility.com/wp-content/uploads/2020/03/iso.png" alt="" srcset="" height="70px" width="70px"></a>
            <a class="col-sm-1 py-2 text-center twitter border-start-0"><img src="https://www.codility.com/wp-content/uploads/2020/11/SOC-logo-2.png"  height="70px" width="70px"></a>
            <a class="col-sm-1 py-2 text-center twitter border-start-0"><img src="https://www.codility.com/wp-content/uploads/2020/03/gdpr.png" alt="" srcset="" height="70px" width="70px"></a>
            </li>
            <a class="col-sm-1 py-2 text-center twitter border-start-0"><img src="https://www.codility.com/wp-content/uploads/2021/03/footer2-badge-2021-spring-leader.png" alt="" srcset="" height="70px" width="70px"></a>
            <!-- <span class="twitter"><li class="mx-5 my-4"><a><i class="fab fa-github"></i></a></li></span> -->
            <a class="py-2 col-sm-1 text-center twitter border-start-0"><img src="https://www.codility.com/wp-content/uploads/2020/03/capterra.png" alt="" srcset="" height="70px" width="70px"></a>
            <div class="col-sm-6 py-4">
                <a class="px-3 twitter last-services border-0">Terms of Service</a>
                <a class="px-3 twitter last-services border-0">Cookie Policy</a>
                <a class="px-3 twitter last-services border-0">DMCA Policy</a>
                <a class="px-3 twitter last-services border-0">Privacy Notice</a>
                <a class="px-3 twitter last-services border-0">Copyright 2021 Codility Ltd.</a></div>
    </div>
    </div>
    <script src="<?php echo $baseUrl ?>/js/bootstrap.js"></script>
</body>
</html>