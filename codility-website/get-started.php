<?php

if (!empty($_REQUEST)) {
    echo '<pre>';
    print_r($_REQUEST);
    die();
}

?>
<?php 
$baseUrl = '/codility-website';
$siteUrl = "http://localhost{$baseUrl}";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get started</title>
    <link rel="stylesheet" href="<?php echo $baseUrl ?>/css/bootstrap.css">
    <link href="<?php echo $baseUrl ?>/fontawesome-free-5.15.2-web/css/fontawesome.css" rel="stylesheet">
    <link href="<?php echo $baseUrl ?>/fontawesome-free-5.15.2-web/css/brands.css" rel="stylesheet">
    <link href="<?php echo $baseUrl ?>/fontawesome-free-5.15.2-web/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
   <style>
       .row1{
           font-size: 20px;
       }
       .row2{
           height: 700px;
           font-size: 20px;
       }
       .form-control{
           background-color: rgb(92,92,92);
       }
       .form-control::placeholder{
        color: white;
       }
       .border{
        border: solid 1px rgb(60, 60, 80);
       }
       .heading{
           font-weight: 500px;
       }
       .last-services{
    font-size: 13px;
}
   </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row" id="page6">
            <span class="col-sm-5 twitter border-0 py-4 px-5 page6-head row1">Codility_</span>
            <span class="col-sm-7 text-center pt-4"><a class="pt-5 ps-2 twitter border-0 text-end"><i class="fas fa-envelope"></i> support@codility.com</a>
            <a class="ps-5 twitter border-0 text-end"><i
                            class="px-3 fas fa-phone-square-alt"></i>UK+44 208 970 78 68</a>
            <a class="ps-5 twitter border-0 text-end"><i
                            class="px-3 fas fa-phone-square-alt"></i>UK+44 208 970 78 68</a></span>
        </div>
        <div class="row row2" id="page6">
            <div class="col-sm-6 px-5 py-5 border">
            <h1 class=" px-5 py-5 heading">Upgrade Your Tech Hiring Process</h1>
<div class=" px-5 py-5">Tech recruitment is changing. Whether you need online code tests to screen thousands of engineers, or a flexible way to run tech interviews remotely, our platform will help you adapt. Submit this form and we’ll be in touch to discuss how you can upgrade your tech hiring process and:

Identify key skills beyond an applicant’s resume
Screen and hire talent in a fully-remote workplace
Improve the volume and quality of your talent pool
Create a consistent and unbiased hiring standard></div>
            </div>
           <div class="col-sm-6 px-5 py-5 border">
           <form class="px-3" method="post">
                            <div class=" form-group  px-5 py-5">
                                <input type="email" name="email" class="form-control border-0 mt-5" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Businees Email">
                                <small id="emailHelp" class="text-center px-3 py-3 form-text text-muted"
                                    width="5%"></small>
                            </div>
                            <!-- <input type="email" placeholder="Email Address*"></input> -->
                            <button type="submit" class="px-3 py-3 btn btn-secondary" id="get-started-2-submit"
                                hei>Submit Request</button>
                        </form>
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
                            type="button">Read customer stories</button>
                    </div>
                </div>
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