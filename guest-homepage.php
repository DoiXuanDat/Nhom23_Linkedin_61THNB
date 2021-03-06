<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Linkedin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/guest-homepage.css">

</head>

<body>
  <header class=" container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <h2>Linked<span>
                <i class="bi bi-linkedin"></i>
              </span></h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item ms-5">
                  <a class="nav-link" href="#"></i><img class="size-discover-images" src="images/discover.png"
                      alt="">Discover </a>
                </li>
                <li class="nav-item ms-5">
                  <a class="nav-link" href="#"><i class="bi bi-people-fill"></i>People</a>
                </li>
                <li class="nav-item ms-5">
                  <a class="nav-link" href="#"><img class="size-learning-images" src="images/learning.png"
                      alt="">Learning</a>
                </li>
                <li class="nav-item ms-5">
                  <a class="nav-link" href="#"><i class="bi bi-briefcase-fill"></i>Jobs</a>
                </li>
              </ul>
              <form class="d-flex">
                <button class="btn btn-outline btnJoin " type="submit"><a class="nav-link" href="signup.php">Join now</a></button>
                <button class="btn btn-outline ms-3 btnSingin-navbar " type="submit"><a class="nav-link" href="login.php">Sign In</a></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <main class="container ">
      <div class="main_about row ">
        <div class="col-md-6">
          <h1 class="main-heading">Welcome to your professional community</h1>
          <form class="form-signin" action="process-login.php" method="post">
            <input type="email" id="inputEmail" name="txtEmail" class="form-control mt-3 mb-3"
              placeholder="Email or phone number" required autofocus>
            <input type="password" id="inputPassword" name="txtPass" class="form-control" placeholder="Password"
              required>
            <div class="checkbox mb-3 mt-3">
              <a href="#" class="forgot-password-link">
                Forgot Password?
              </a>
            </div>
            <button class="btn btn-lg btn-primary btn-block btn-from-singin " type="submit" name="btnSignIn">Sign
              in</button>
            <hr class="btn-from-signin-gg">
            <button class="btl btn-lg  btn-block btn-from-signin-gg" type="submit" name="btnSignIn-gg"><i
                class="bi bi-google"></i> Sign in with Google</button>
          </form>
        </div>
        <div class="col-md-6">
          <img class="heading-image" src="images/image1.PNG" alt="">
        </div>
      </div>
    </main>
    <section class="container-content mt-5">
      <div class="content-topic row">
        <div class="col-md-6 ">
          <h1 class="text-content">Explore topics you are interested in</h1>
        </div>
        <div class="col-md-6">
          <h4 class="text-content-topic">CONTENT TOPICS</h4>
          <a class="btn btn-content-topic " href="https://www.linkedin.com/content-hub/?trk=homepage-jobseeker_explore-content_topic-pill" role="button">See All Topics</a>
          <a class="btn btn-content-topic " href="#" role="button">Science and Environment</a>
          <a class="btn btn-content-topic " href="#" role="button">Marketting and Advertising</a>
          <a class="btn btn-content-topic " href="#" role="button">Sales and Redtail</a>
          <a class="btn btn-content-topic " href="#" role="button">Technology</a>
          <a class="btn btn-content-topic " href="#" role="button">Finance and Economy</a>
          <a class="btn btn-content-topic " href="#" role="button">Health</a>
          <a class="btn btn-content-topic " href="#" role="button">B??iness anh Managenment</a>
          <a class="btn btn-content-topic " href="#" role="button">Lifestyle and Leisure</a>
          <a class="btn btn-content-topic " href="#" role="button">Society anh Culture</a>
          <a class="btn btn-content-topic " href="#" role="button">Arts and Entertainment</a>
        </div>
      </div>
    </section>
    <section class="container-find">
      <div class="suggest-find row">
        <div class="col-md-6">
          <h1 class="text-find">Find the right job or internship for you</h1>
        </div>
        <div class="col-md-6">
          <h4 class="text-suggest">SUGGESTED SEARCHES</h4>
          <a class="btn btn-suggest-search" href="#" role="button">Engineering</a>
          <a class="btn btn-suggest-search" href="#" role="button">Business Development</a>
          <a class="btn btn-suggest-search" href="#" role="button">Finance</a>
          <a class="btn btn-suggest-search" href="#" role="button">Administrative Assitant</a>
          <a class="btn btn-suggest-search" href="#" role="button">Retail Associate</a>
          <a class="btn btn-suggest-search" href="#" role="button">Customer Service</a>
          <a class="btn btn-suggest-search" href="#" role="button">Openrations</a>
          <a class="btn btn-suggest-search" href="#" role="button">InFormation Technology</a>
          <a class="btn btn-suggest-search" href="#" role="button">Marketing</a>
        </div>
      </div>
    </section>
    <section class="container-post">
      <div class="post-job row">
        <div class="col-md-6">
          <h1 class="text-post">Post your job for millions of people to see</h1>
        </div>
        <div class="col-md-6">
          <a class="btn btn-suggest-search" href="#" role="button">Post a job</a>
        </div>
      </div>
    </section>
  </header>
  <section class="guest_homepage_slider container-fluid">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-md-6 Content-carosel">
              <h4 class="title-carosel">Let the right people know you???re open to work</h4>
              <p class="text-carosel">With the Open To Work feature, you can privately tell recruiters or publicly share
                with the LinkedIn community that you are looking for new job opportunities.</p>
            </div>
            <div class="col-md-6">
              <img class="img-carosel" src="images/carosel1.png" alt="">
            </div>

          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-md-6 Content-carosel">
              <h4 class="title-carosel">Conversations today could lead to opportunity tomorrow</h4>
              <p class="text-carosel">Sending messages to people you know is a great way to strengthen relationships as
                you take the next step in your career.</p>
            </div>
            <div class="col-md-6">
              <img class="img-carosel" src="images/carosel2.png" alt="">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-md-6 Content-carosel">
              <h4 class="title-carosel">Stay up to date on your industry</h4>
              <p class="text-carosel">From live videos, to stories, to newsletters and more, LinkedIn is full of ways to
                stay up to date on the latest discussions in your industry.</p>
            </div>
            <div class="col-md-6">
              <img class="img-carosel" src="images/carosel3.png" alt="">
            </div>

          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="next">
          <span class="visually">Next</span>
          <span class="carousel-control-next-icon" aria-hidden="true"></span>

        </button>
      </div>
  </section>
  <section class="container-connect mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img class="img-connect" src="images/connect1.svg" alt="">
          <h2 class="text-connect">Connect with people who can help</h2>
          <button class="btn-lg btn-outline-secondary">Find People You Know</button>
        </div>
        <div class="col-md-6">
          <img class="img-connect" src="images/connect2.svg" alt="">
          <h2 class="text-connect">Learn the skills you need to succeed</h2>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
              data-bs-toggle="dropdown" aria-expanded="false">
              choose a topic to learn about
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="video-Youtube">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/EEikRQ58NwM" title="YouTube video player"
      frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen></iframe>
    <h1 class="text-video-youtube">Let's step forward</h1>
  </section>
  <section class="footer-bg">
    <div>
      <div class="footer-img"><img src="images/footer.png" alt="">
        <div class="text-footer-image">
          <h2>Join your colleagues, classmates, and friends on LinkedIn.</h2>
          <button class="btn btn-footer-image btn-primary">Get Started</button>
        </div>
      </div>
    </div>
  </section>

  <section class="last-footer">
    <div class="row">
      <div class="col-md-2 text-primary ">
        <h2 style="font-size:16px">Linked<span>
            <i class="bi bi-linkedin"></i>
          </span></h2>
      </div>

      <div class="col-md-2">
        <ul>
          <p class="weight">General</p>
          <li><a href="">Sign Up</a></li>
          <li><a href="">Help Center</a></li>
          <li><a href="">About</a></li>
          <li><a href="">Press</a></li>
          <li><a href="">Blog</a></li>
          <li><a href="">Careers</a></li>
          <li><a href="">Developers</a></li>
        </ul>
      </div>

      <div class="col-md-2">
        <ul>
          <p class="weight">Browse LinkedIn</p>
          <li><a href="">Learning</a></li>
          <li><a href="">Jobs</a></li>
          <li><a href="">Salary</a></li>
          <li><a href="">Mobile</a></li>
          <li><a href="">Services</a></li>
          <li><a href="">Products</a></li>
        </ul>
      </div>

      <div class="col-md-2">
        <ul>
          <p class="weight">Business Solutions</p>
          <li><a href="">Talent</a></li>
          <li><a href="">Marketing</a></li>
          <li><a href="">Sales</a></li>
          <li><a href="">Learning</a></li>
        </ul>
      </div>

      <div class="col-md-2">
        <ul>
          <p class="weight">Directories</p>
          <li><a href="">Members</a></li>
          <li><a href="">Jobs</a></li>
          <li><a href="">Companies</a></li>
          <li><a href="">Salaries</a></li>
          <li><a href="">Featured</a></li>
          <li><a href="">Learning</a></li>
          <li><a href="">Posts</a></li>
          <li><a href="">Articles</a></li>
          <li><a href="">Schools</a></li>
          <li><a href="">News</a></li>
          <li><a href="">News Letters</a></li>
          <li><a href="">Services</a></li>
          <li><a href="">Interview Prep</a></li>
          <li><a href="">Products</a></li>
          <li><a href="">Content Topics</a></li>
        </ul>
      </div>
    </div>
  </section>
  <footer class="li-footer">
    <div class="row justify-content-between">
      <div class="col-md-1">
        <h2 style="font-size : 12px" >Linked<span>
          <i class="bi bi-linkedin"></i>
        </span></h2>
      </div>

      <div class="col-md-1">
        <p>&copy; 2022</p>
      </div>

      <div class="col-md-1">
        <li><a href="">About</a></li>
      </div>
      
      <div class="col-md-1">
        <li><a href="">Accessibility</a></li>
      </div>
      
      <div class="col-md-1">
        <li><a href="">User Agreement</a></li>
      </div>
      
      <div class="col-md-1">
        <li><a href="">Privacy Policy</a></li>
      </div>
      
      <div class="col-md-1">
        <li><a href="">Cookie Policy</a></li>
      </div>
      
      <div class="col-md-1">
        <li><a href="">Copyright Policy</a></li>
      </div>
      
      <div class="col-md-1">
        <li><a href="">Brand Policy</a></li>
      </div>
      
      <div class="col-md-1">
        <li><a href="">Guest Controls</a></li>
      </div>
      
      <div class="col-md-1">
        <li><a href="">Community Guidelines</a></li>
      </div>
      
      <div class="col-md-1">
        <li><a href="">Language<i class="btn fa fa-angle-down pr-2" style="font-size: 12px;"></i></a></a></li>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>