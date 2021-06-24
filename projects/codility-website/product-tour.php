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
  <title>Product tour</title>
  <link rel="stylesheet" href="<?php echo $baseUrl ?>/css/bootstrap.css">
  <link href="<?php echo $baseUrl ?>/fontawesome-free-5.15.2-web/css/fontawesome.css" rel="stylesheet">
  <link href="<?php echo $baseUrl ?>/fontawesome-free-5.15.2-web/css/brands.css" rel="stylesheet">
  <link href="<?php echo $baseUrl ?>/fontawesome-free-5.15.2-web/css/solid.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <style>
    .page1 {
      color: black;
    }

    .button-content {
      color: black;
    }

    .codility {
      color: black;
    }

    .caps {
      color: black;
    }

    .developing-options {
      text-decoration: none;
      color: rgb(214, 205, 205);
      font-weight: bold;
    }

    .option-data {
      color: rgb(233, 225, 225);
      border: solid 1px rgb(233, 225, 225);
      display: inline-flex;
      margin: 5px;
      font-size: 17px;
    }

    .special {
      border: solid 1px rgb(24, 153, 121);
      color: rgb(24, 153, 121);
      background-color: rgb(223, 250, 252);
    }

    .row8-options-head{
      border: solid 1px rgb(233, 225, 225);
    }
    .row8-options {
      border: solid 1px rgb(233, 225, 225);
      width: 33%;
    }
    .row9{
      font-size: 50px;
      color: rgb(29, 28, 28);
      font-weight: bold;
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
            <button class="btn btn-outline-secondary button-content get-started py-2" id="get-started-2"><a
                href="get-started.php" class="link">Get Started</a></button>
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
            <button class="btn btn-primary btn-lg my-5" id="get-started-2" type="button"><a class="link"
                href="get-started.php">Get
                Started</a></button>
          </div>
          <div class="col-sm-4 border-start-0 details"></div>
          <div class="col-sm-1"></div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-5">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                Accordion Item #1
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse
                plugin adds the appropriate classes that we use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Accordion Item #2
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse
                plugin adds the appropriate classes that we use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Accordion Item #3
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse
                plugin adds the appropriate classes that we use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-5"></div>
      <div class="col-sm-1"></div>
    </div>


    <div class="row pt-5" id="row3">
      <div class="col-sm-1"></div>
      <div class="col-sm-10 text-center py-4">
        <h1 class="py-4">40+ Languages & Technologies</h1>
        Separate the great from the good with skill assessments spanning across multiple practices.
      </div>
      <div class="col-sm-1"></div>
    </div>



    <div class="row" id="row4">
      <div class="col-sm-1"></div>
      <div class="col-sm-10 text-center py-4">
        <a class="developing-options px-5 py-2"> Developer</a>
        <a class="developing-options px-5 py-2">Back-End Developer</a>
        <a class="developing-options px-5 py-2">DevOps Engineer</a>
        <a class="developing-options px-5 py-2">Cloud Engineer</a>
        <a class="developing-options px-5 py-2">Data Scientist</a>
      </div>
      <div class="col-sm-1"></div>
    </div>


    <div class="row py-5" id="row5">
      <div class="col-sm-1"></div>
      <div class="col-sm-10 text-center">
        <span class="option-data px-3 py-2">Bash</span>
        <span class="option-data px-3 py-2">C#</span>
        <span class="option-data px-3 py-2">C++</span>
        <span class="option-data px-3 py-2">C</span>
        <span class="option-data px-3 py-2">COBOL</span>
        <span class="option-data px-3 py-2 special">CSS</span>
        <span class="option-data px-3 py-2">Go</span>
        <span class="option-data px-3 py-2 special">HTML</span>
        <span class="option-data px-3 py-2">Java</span>
        <span class="option-data px-3 py-2 special">JavaScript</span>
        <span class="option-data px-3 py-2">Kotlin</span>
        <span class="option-data px-3 py-2">Lua</span>
        <span class="option-data px-3 py-2">Objective-C</span>
        <span class="option-data px-3 py-2">Pascal</span>
        <span class="option-data px-3 py-2">Perl</span>
        <span class="option-data px-3 py-2">PHP</span>
        <span class="option-data px-3 py-2">Python</span>
        <span class="option-data px-3 py-2">R</span>
        <span class="option-data px-3 py-2">Ruby</span>
        <span class="option-data px-3 py-2">Scala</span>
        <span class="option-data px-3 py-2">Solidity</span>
        <span class="option-data px-3 py-2">Swift</span>
        <span class="option-data px-3 py-2">VB.NET</span>
        <span class="option-data px-3 py-2">.NET</span>
        <span class="option-data px-3 py-2 special">Angular</span>
        <span class="option-data px-3 py-2">Hibernate</span>
        <span class="option-data px-3 py-2 special">jQuery</span>
        <span class="option-data px-3 py-2">jUnit</span>
        <span class="option-data px-3 py-2">Laravel</span>
        <span class="option-data px-3 py-2">Mocha</span>
        <span class="option-data px-3 py-2">Node.js</span>
        <span class="option-data px-3 py-2 special">React</span>
        <span class="option-data px-3 py-2 special">Redux</span>
        <span class="option-data px-3 py-2">Robot</span>
        <span class="option-data px-3 py-2">Selenium</span>
        <span class="option-data px-3 py-2">Serverless</span>
        <span class="option-data px-3 py-2">Spring</span>
        <span class="option-data px-3 py-2 special">Vue.js</span>
        <span class="option-data px-3 py-2">React Native</span>
        <span class="option-data px-3 py-2">iOS</span>
        <span class="option-data px-3 py-2">Android</span>
        <span class="option-data px-3 py-2">Ansible</span>
        <span class="option-data px-3 py-2">Chef</span>
        <span class="option-data px-3 py-2">Cucumber</span>
        <span class="option-data px-3 py-2">DB</span>
        <span class="option-data px-3 py-2">Docker</span>
        <span class="option-data px-3 py-2">Git</span>
        <span class="option-data px-3 py-2">Gitlab CI</span>
        <span class="option-data px-3 py-2">Helm</span>
        <span class="option-data px-3 py-2">Kubernetes</span>
        <span class="option-data px-3 py-2">Mongo</span>
        <span class="option-data px-3 py-2">MySQL</span>
        <span class="option-data px-3 py-2">PostgreSQL</span>
        <span class="option-data px-3 py-2">RSpec</span>
        <span class="option-data px-3 py-2">Spark</span>
        <span class="option-data px-3 py-2">SQLite</span>
        <span class="option-data px-3 py-2">Terraform</span>
        <span class="option-data px-3 py-2">xUnit</span>
        <span class="option-data px-3 py-2">Amazon Web Services</span>
        <span class="option-data px-3 py-2">Google Cloud Platform</span>
        <span class="option-data px-3 py-2">Microsoft Azure</span>
      </div>
      <div class="col-sm-1"></div>
    </div>



    <div class="row row5" id="page3">
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
    </div>



    <div class="row pt-5" id="row6">
      <div class="col-sm-2"></div>
      <div class="col-sm-8 text-center py-4">
        <h1 class="py-4"> Integrate Codility into your HR tech stack</h1>
        Accelerate time-to-hire and build smarter workflows by integrating your applicant tracking system and
        communication tools with Codility. Or, use our API to create a custom integration for your team.
      </div>
      <div class="col-sm-2"></div>
    </div>


    <div class="row row7" id="page3">
      <div class="col-sm-1"></div>
      <!-- <div class="row" id="page3-content"> -->
      <div class="col-sm-5 page3-content border-top-0 border-bottom-0 border-end-0">
        <div class="page3-content-head mx-4 my-5">Pricing</div>
        <div class="mb-5">
          Whether you're scaling hiring at a global enterprise, or just getting started; we tailor your plan to your
          hiring needs and processes.</div>
      </div>
      <div class="col-sm-5 page3-content border-top-0 border-bottom-0 border-start-0"></div>
      <div class="col-sm-1"></div>
    </div>


    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-10 row8-options-head">
        <div class="row8-options d-inline-block">
          <h3>Enterprise-level compliance</h3>
          ISO 27001 Compliant
          US-EU Privacy Shield
          GDPR Compliant
        </div>
        <div class="row8-options d-inline-block">
          <h3>Full anti-plagiarism toolkit</h3>
          ​​​​​​​​​Web crawling
          Similarity checkers
          IP tracking
        </div>
        <div class="row8-options d-inline-block">
          <h3>Technical support and services​​​​​​​​​​​​​​</h3>
          Dedicated account management
          On-demand technical support
          Professional services package
        </div>
      </div>
      <div class="col-sm-1"></div>
    </div>


<div class="row row9 ">
  <div class="col-sm-1"></div>
  <div class="col-sm-10 py-5 px-3 row8-options-head">Frequently Asked Questions</div>
  <div class="col-sm-1"></div>
</div>


<div class="row  row10">
  <div class="col-sm-1"></div>
  <div class="col-sm-10">
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
              aria-expanded="true" aria-controls="collapseOne">
              <h6>What programming languages, frameworks, and tools can I evaluate on Codility?</h6>
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
               Many of our candidate assessments can be performed flexibly in the following languages outlined below. For details on the quantity of tests for each framework, please contact us.
              ‍
              <br>Languages: Bash, C#, C++, C, COBOL, CSS, Go, HTML, Java, JavaScript, Kotlin, Lua, Objective-C, Pascal, Perl, PHP, Python, R, Ruby, Scala, Solidity, Swift, VB.NET
              ‍
              <br>Development Tools & Frameworks: .NET, Angular, Hibernate, jQuery, jUnit, Laravel, Mocha, Node.js, React, Redux, Robot, Selenium, Serverless, Spring, Vue.js, React Native
              ‍
              <br>Tools/Other: iOS, Android, Ansible, Chef, Cucumber, DB, Docker, Git, Gitlab CI, Helm, Kubernetes, Mongo, MySQL, PostgreSQL, RSpec, Spark, SQLite, Terraform, xUnit
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <h6>What technical roles can Codility help me hire?</h6>
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Our library of tasks and problems evaluate role-based technical skills for the following roles:
<ul>
<li>Back-End Developer</li>
<li>Cloud Engineer</li>
<li>Data Scientist</li>
<li>DevOps Engineer</li>
<li>Front-End Developer</li>
<li>Full-Stack Engineer</li>
<li>Future Developers</li>
<li>Technical Intern</li>
<li>Mobile Developer</li>
<li>Security Engineer</li>
<li>Software Engineer</li>
<li>Software Testers / Quality Assurance</li>
            </ul></div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <h6>Can I get a free trial of the Codility platform?</h6>
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Yes! Our team can set you up with a demo account tailored to your needs. Contact us to get started. In the meantime, here’s an intro:
              <!-- <iframe title="vimeo-player" width="640" height="360" frameborder="0" allowfullscreen="allowfullscreen" data-src="https://player.vimeo.com/video/422853414" class=" lazyloaded" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="></iframe> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  <div class="col-sm-1"></div>
</div>



<div class="row roww9" id="page6">
  <div class="col-sm-12">
      <div class="row" id="page6-applications">
          <!-- <div class="col-sm-12"> -->
          <!-- <ul class="applications d-flex"> -->
          <span class="col-sm-2 twitter border-start-0 py-4 px-5">Codility</span>
          <a class="col-sm-1 py-4 text-center twitter border-start-0"><i class="fab fa-twitter"></i></a>
          <a class="col-sm-1 py-4 text-center twitter border-start-0"><i class="fab fa-linkedin-in"></i></a>
          <a class="col-sm-1 py-4 text-center twitter border-start-0"><i class="fab fa-facebook"></i></a>
          <!-- </li></span> -->
          <a class="col-sm-1 py-4 text-center twitter border-start-0"><i class="fab fa-github"></i></a>
          <!-- <span class="twitter"><li class="mx-5 my-4"><a><i class="fab fa-github"></i></a></li></span> -->
          <a class="py-4 px-5 col-sm-3 twitter border-start-0"><i
                  class="px-3 fas fa-phone-square-alt"></i>UK+44 208 970 78 68</a>
          <a class="py-4 px-5 col-sm-3 twitter border-start-0"><i
                  class="px-3 fas fa-phone-square-alt"></i>UK+44 208 970 78 68</a>
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