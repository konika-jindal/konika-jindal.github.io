<?php 
$baseUrl = '/codility-website';
$siteUrl = "http://localhost{$baseUrl}";
?>
<?php

if (!empty($_REQUEST)) {
    echo '<pre>';
    // $message= 'dsc sdsxsaxsa xssdxsa';
    print_r($_REQUEST);
    die();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website example 3</title>
    <link rel="stylesheet" href="<?php echo $baseUrl ?>/css/bootstrap.css">
    <link href="<?php echo $baseUrl ?>/fontawesome-free-5.15.2-web/css/fontawesome.css" rel="stylesheet">
    <link href="<?php echo $baseUrl ?>/fontawesome-free-5.15.2-web/css/brands.css" rel="stylesheet">
    <link href="<?php echo $baseUrl ?>/fontawesome-free-5.15.2-web/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl ?>/slick-1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl ?>/slick-1.8.1/slick/slick-theme.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->

    <!-- <style>
            i.fal,
             .fa-user {
                 color: black;
                    }
    
        </style>  -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row" id="page1">
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
                        <a href="product-tour.php" class="button-content">Product Tour</a>
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
                        <div class="caps">Remote tech hiring, everywhere</div>
                        <div class="dash">_</div>
                        <div>Tech recruitment is changing. Whether you need online code tests to screen thousands of
                            engineers, or a flexible way to run tech interviews remotely, our platform will help you
                            adapt with the times.</div>
                        <button class="btn btn-primary btn-lg my-5" id="get-started-2" type="button"><a  class="link" href="get-started.php">Get
                            Started</a></button>
                </div>
                    <div class="col-sm-4 border-start-0 details"></div>
                    <div class="col-sm-1"></div>
                </div>
            </div>
        </div>
        <div class="row" id="page2">
            <div class="col-sm-6 left-page2"></div>
            <div class="col-sm-6 right-page2">
                <div class="page2-content my-4" id="page2-head"> Join our Diversity in Engineering Summit</div>
                <div class="page2-content my-4">Tuesday, March 23, 2021X</div>
                <div class="page2-content mt-4">Looking for ways to make your engineering team more inclusive?</div>
                <div>and network with 1,500+ engineering, talent, and people ops leaders driving change at some of
                    the world’s most innovative companies!</div>
                <button class="btn btn-primary btn-lg save-your-seat my-5">Save Your Seat</button>
            </div>
        </div>
        <div class="row" id="page3">
            <div class="col-sm-1"></div>
            <!-- <div class="row" id="page3-content"> -->
            <div class="col-sm-6 page3-content mx-4 border-top-0 border-bottom-0">
                <div class="page3-content-head mx-4 my-5">Here to support your most important initiatives</div>
                <div class="mb-5">Hiring engineers is a race everyone joined at once. We’ll help you recruit more
                    talented
                    people, faster and at scale – turning this challenge into one of your greatest
                    opportunities.</div>
            </div>
            <div class="col-sm-5"></div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="multiple-items">
                        <div><img src="<?php echo $baseUrl ?>/img/engineer1.jpeg" class="d-flex w-20" alt="..." height="500px"></div>
                        <div><img src="<?php echo $baseUrl ?>/img/engineer.jpeg" class="d-flex w-20" alt="..." height="500px"></div>
                        <div><img src="<?php echo $baseUrl ?>/img/customer care.png" class="d-flex w-20" alt="..." height="500px"></div>
                      <!-- </div> -->
                      <div><img src="<?php echo $baseUrl ?>/img/engineer1.jpeg" class="d-flex w-20" alt="..." height="500px"></div>
                      <div><img src="<?php echo $baseUrl ?>/img/engineer.jpeg" class="d-flex w-20" alt="..." height="500px"></div>
                      <div><img src="<?php echo $baseUrl ?>/img/customer care.png" class="d-flex w-20" alt="..." height="500px"></div>
                    <!-- </div> -->
                    <div><img src="<?php echo $baseUrl ?>/img/engineer1.jpeg" class="d-flex w-20" alt="..." height="500px"></div>
                    <div><img src="<?php echo $baseUrl ?>/img/engineer.jpeg" class="d-flex w-20" alt="..." height="500px"></div>
                    <div><img src="<?php echo $baseUrl ?>/img/customer care.png" class="d-flex w-20" alt="..." height="500px"></div>
                  </div>
                </div>
            </div>
            <div class="row part2">
                <div class="col-sm-1"></div>
                <!-- <div class="row" id="page3-content"> -->
                <div class="col-sm-6 pl-5 page3-content border-top-0 border-bottom-0">
                    <div class="page3-content-head-part2 mx-4 my-5" height="98px"></div>
                </div>
                <div class="col-sm-5"></div>
            </div>
        </div>
        <div class="row" id="page4">
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
                            type="button"><a href="read-customer-stories.php" class="link">Read customer stories</a></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="page5">
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
                        <a href="get-started.php" class="link">Request a demo</a></button>
                    </div>
                    <div class="col-sm-5 border-start-0 details border_color"></div>
                    <div class="col-sm-1"></div>
                </div>
            </div>
        <div class="row" id="page6">
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
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
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
    </div>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script src="https:/cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous">
        </script>
    <!-- <script src="/website-example-3/slick-1.8.1/slick/slick.js"></script> -->
    <script src="<?php echo $baseUrl ?>/slick-1.8.1/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="<?php echo $baseUrl ?>/slick-1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          $('.multiple-items').slick({
            dots: true,
            arrow: true,
            autoplay: false,
            slidesToShow: 3,
            slidesToScroll: 1
          });
        });
      </script>
    
</body>

</html>