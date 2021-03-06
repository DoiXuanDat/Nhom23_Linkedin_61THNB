<?php
    // kiểm tra đã đăng nhập mới cho vào
    session_start();

    if(!isset($_SESSION['isLoginOK'])){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LinkedIn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/Home.css"/>
</head>

<body>
    <header>
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top ms-3">
                <div class="container-fluid ms-5" >
                    <a class="nav-logo ms-5" href="Home.php" >
                        <i class="bi bi-linkedin"></i> 
                    </a>    
                    <nav class="navbar navbar-light bg-white">
                        <div class="container-fluid" style="width: 300px">
                            <div class="input-group flex-nowrap">
                                <input type="text" class="form-control" placeholder="   Search" aria-label="Username"
                                    aria-describedby="addon-wrapping">
                            </div>
                        </div>
                    </nav>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item" style="margin-left: 145px;">
                                <a class="nav-link" href="Home.php">
                                    <i class="bi bi-house-door-fill">
                                        <div style="font-style: normal;">Home</div>
                                    </i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="MyNetwork.php">
                                    <i class="bi bi-people-fill" >
                                        <div style="font-style: normal;">My Network</div>
                                    </i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Jobs.php">
                                    <i class="bi bi-briefcase-fill">
                                        <div style="font-style: normal;">Jobs</div>
                                    </i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">

                                    </i><i class="bi bi-send-fill">
                                        <div style="font-style: normal;">Messaging</div>
                                    </i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Notifications.php">

                                    </i><i class="bi bi-bell-fill" >
                                        <div style="font-style: normal;">Notifications</div>
                                    </i>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link me-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="display: block;">
                                    <i class="bi bi-person-circle"></i>
                                        <div class="text-nav">Me<i class="bi bi-caret-down-fill"></i>
                                        </div>
                                    </i>
                                </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
                                <div class="my-sidebar list-group bg-white">
                                    <div class="feed-identity-module m-2" style="display: inline;">
                                        <a href="Profile.php" class="profile" style="display: inline;">
                                            <img class="my-avartar col-md-3" src="Img/ava.jpg" style="display: inline;">
                                            
                                        </a>
                                        <div class="list-group-item mt-2" style="border-radius: 16px; color: #0a66c2;">
                                            <a href="Profile.php" class="" style="text-decoration: none;">
                                                <div class="row text-align-center feed-identity">
                                                    <span class="text-center" style="color: blue; font-size: 14px;">View Profile</span> 
                                                </div>
                                            </a>
                                        </div>    
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <p style="color: black;">Account</p>
                                        <a class="text-decoration-none" href="" style="font-size: 14px; color: #7e6565;">
                                            <i class="bi bi-gem bg-warning"></i>
                                                Try Premium for free
                                        </a>
                                    <ul class="list-unstyled"> 
                                        <li class="mt-2"><a href="" class="text-decoration-none">Settings & Privacy</a></li>
                                        <li class="mt-2"><a href="" class="text-decoration-none">Help</a></li>
                                        <li class="mt-2"><a href="" class="text-decoration-none">Language</a></li>
                                    </ul>
                                </div>
                                <div class="list-group-item">
                                    <p style="color: black;">Manage</p>
                                    <ul class="list-unstyled"> 
                                        <li class="mt-2"><a href="" class="text-decoration-none">Posts & Activity</a></li>
                                        <li class="mt-2"><a href="" class="text-decoration-none">Jobs posting Account</a></li>
                                    </ul>
                                </div>
                                <div class="ms-3">
                                    <a href="guest-homepage.php" class="signout text-decoration-none">
                                        Sign Out
                                    </a>
                                </div>
                                
                            </ul>
                        </li>
                            <hr>
                            <li class="nav-item dropdown js-modal-open">
                            <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="bi bi-grid-3x3-gap"></i>
                                <div class="text-nav" style="font-style: normal;">Work<i
                                        class="bi bi-caret-down-fill"></i>
                                </div>
                            </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="modal">
       <div class="modal-container ">
           <div class="modal-close js-modal-close">
            <i class="bi bi-x"></i>
           </div>
           <div class="modal-header">
            <h2 class="" style ="font-size: 16px;">
                Visit More LinkedIn Products
              </h2>
           </div>
           
            <div class="modal-body row ">
              <div class="col-md-3">
                  <a class="btn btn-modal" href="#">Post a Job</a>
              </div>
              <div class="col-md-3">
                <a class="btn btn-modal" href="#">Learning</a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-modal" href="#">Insight</a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-modal" href="#">Advertise</a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-modal" href="#">Find Leads</a>
            </div>
            <div class="col-md-3">
              <a class="btn btn-modal" href="#">Groups</a>
          </div>
          <div class="col-md-3">
              <a class="btn btn-modal" href="#">Services Marketplace</a>
          </div>
          <div class="col-md-3">
              <a class="btn btn-modal" href="#">Salary</a>
          </div>
            </div> 
            <div class="modal-footer">
                <h2 class="" style ="font-size: 16px;">
                    LinkedIn Business Services
                  </h2>
                  <a href="">
                    <h2>Talent Solutions</h2>
                    <p>Find, attract and recruit talent</p>
                  </a>
                  <a href="">
                    <h2>Sales Solutions</h2>
                    <p>Unlock sales opportunities</p>
                  </a>
                  <a href="">
                    <h2>Post a job for free</h2>
                    <p>Get your job in front of quality candidates</p>
                  </a>
                  <a href="">
                    <h2>Talent Solutions</h2>
                    <p>Acquire customers and grow your business</p>
                  </a>
                  <a href="">
                    <h2>Learning Solutions</h2>
                    <p>Develop talent across your organization</p>
                  </a>
                  <a href="">
                    <h2>Create a Company Page<i class="bi bi-plus"></i></h2>
                  </a>
            </div>          
       </div>

    </div>
    <main class="container-fluid" style="background: #fcfbfa; margin-top: 80px;">
        <div class="row" style="height: 30px">
        </div>
        <div class="main-about row ms-5 me-5 ps-5">
            <div class="sidebar col-md-2 ps-2">
                <div class="my-sidebar list-group bg-white">
                    <div class="feed-identity-module">
                        <a href="#" class="profile">
                            <div class="avartar col-md-12 text-center" style="background-image: url('https://images.ctfassets.net/7thvzrs93dvf/wpImage18643/2f45c72db7876d2f40623a8b09a88b17/linkedin-default-background-cover-photo-1.png?w=790&h=196&q=90&fm=webp');">
                                <img class="ava col-md-5 mt-3" src="Img/ava.jpg">
                            </div>
                            <p class="identity-name mt-3 t-black text-center">Nhóm 23</p>     
                        </a>
                        <p class="identity-headline text-center">Student at Truong Dai hoc Thuy loi</p>
                    </div>

                    <div class="list-group-item">
                        <a href="#" class="list-identity">
                            <div class="row text-align-left feed-module">
                                <div class="col-md-10 connection p-2">
                                    <div style="color: #0A66C2">Connections</div>
                                    <div>Grow your network</div>
                                </div>
                                <i class="col-md-2 bi bi-person-plus-fill"></i>
                            </div>
                        </a>
                    </div>
                    <div class="list-group-item">
                        <a href="#" class="list-identity">
                            <div class="row text-align-left feed-module">
                                <div class="col-md-10 connection p-2">
                                    <div style="color: #0A66C2">
                                        Access exclusive tools & insights
                                    </div>
                                    <div class="try-premium">
                                        <i class="bi bi-gem bg-warning"></i>
                                        Try Premium for free
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list-group-item">
                        <a href="#" class="list-identity">
                            <div class="row text-align-left feed-module">
                                <div class="col-md-10 connection p-2">
                                    <i class="bi bi-bookmark-fill"></i> 
                                    <span>My items</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="my-sidebar sub-group list-group bg-white mt-1">
                    <div class="list-group-item">
                        <a href="#" class="list-identity">
                            <div class="row text-align-left">
                                <div class="col-md-10 sidebar-more p-2">
                                    <span style="color: #0A66C2;">Groups</span>
                                </div>
                                <div class="col-md-10 sidebar-more p-2">
                                    <span style="color: #0A66C2;">Events</span>
                                    <button class=" bt-event-plus"><i class="bi bi-plus-lg float-end" style="font-size: 10px;"></i></button>
                                </div>
                                <div class="col-md-10 sidebar-more p-2">
                                    <span style="color: #0A66C2;">Followed Hashtags</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list-group-item">
                        <a href="#" class="list-identity">
                            <div class="row text-align-center feed-module">
                                <span class="text-center"style="color: #00000099">Discover More</span> 
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="main col-md-5 ms-3">
                <div class="post list-group bg-white row ">
                    <div class="col-md-12 m-2">
                        <span class="posting-text-center">
                            <a><img class="col-md-1 mt-3 avt-friend"  src="Img/ava.jpg"></a>
                        </span>
                        <span class="ms-2">
                            <input class="btn-start btn-block btn-lg col-md-10" type="text" placeholder="Start a post">
                        </span>
                    </div>
                    <div class="col-md-12 m-2">
                        <span class="share-box col-md-2 ms-3">
                            <button class="" style="background: white; border: white; display: inline-flex;">
                                <i class="bi bi-card-image text-primary"></i>
                                <div class="ms-3">Photos</div>
                            </button>
                        </span>
                        <span class="share-box col-md-2 ms-3">
                            <button class="" style="background: white; border: white; display: inline-flex;">
                                <i class="bi bi-youtube text-success"></i>
                                <div class="ms-3">Video</div>
                            </button>
                        </span>
                        <span class="share-box col-md-2 ms-3">
                            <button class="" style="background: white; border: white; display: inline-flex;">
                                <i class="bi bi-calendar-date text-warning"></i>
                                <div class="ms-3">Events</div>
                            </button>
                        </span>
                        <span class="share-box col-md-2 ms-3">
                            <button class="" style="background: white; border: white; display: inline-flex;">
                                <i class="bi bi-text-indent-left text-danger"></i>
                                <div class="ms-3">Write article</div>
                            </button>
                        </span>
                    </div>
                </div>
                <hr>
                <div class="feed-share list-group bg-white row ">
                    <div class="col-md-12 m-2 ">
                        <div class="row share-actor">
                            <div class="avt-actor col-md-2">
                                <a href=""><img class="img-actor" src="Img/f8_icon.png"></a>
                            </div>
                            <div class="col-md-10">
                                <span>
                                    <a href="" style="text-decoration: none; color: #000000E6;">F8</a>
                                </span>
                                <div class="descrip ">
                                    <p>Nhóm lập trình viên tại fullstack.edu.vn</p>
                                </div>
                            </div>
                            <div class="row cap-post">
                                <p>HTML, CSS từ Zero đến Hero<a href="https://fullstack.edu.vn/courses/html-css">https://fullstack.edu.vn/courses/html-css</a></p>
                                
                            </div>
                            <div class="row content-post">
                                <img src="Img/zerodenhero.jpg">
                            </div>
                            <div class="row status mt-1 mb-1">
                                <span>
                                    <i class="bi bi-hand-thumbs-up-fill" style="color: blue;"></i>
                                    <i class="bi bi-heart-fill" style="color: rgb(221, 30, 30);"></i>
                                    <span style="color: #00000099">1000 •</span>
                                    <a href="#" class="comment"> 400 comments</a>
                                </span>
                                <hr>
                            </div>
                            <div class="row-feel">
                                <span>
                                    <button href="" class="btn-status">
                                        <i class="bi bi-hand-thumbs-up"></i> Like
                                        <i class="nav-arrow-down ti-angle-down"></i>
                                    </button>
                                    <span class="row-like">
                                        <span >
                                            <button href="" class="btn-sublike">
                                                <i class="bi bi-hand-thumbs-up-fill" style="color: blue;"></i> 
                                            </button>
                                        </span>
                                        <span >
                                            <button href="" class="btn-sublike">
                                                <i class="bi bi-emoji-heart-eyes-fill" style="color: rgb(10, 233, 40);"></i> 
                                            </button>
                                        </span>
                                        <span>
                                            <button href="" class="btn-sublike">
                                                <i class="bi bi-heart-fill" style="color: rgb(180, 21, 21);"></i>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                                <span>
                                    <button href="" class="btn-status">
                                        <i class="bi bi-chat-left-text"></i> Comment
                                    </button>
                                </span>
                                <span>
                                    <button href="" class="btn-status">
                                        <i class="bi bi-arrow-90deg-right"></i> Share
                                    </button>
                                </span>
                                <span>
                                    <button href="" class="btn-status">
                                        <i class="bi bi-send-fill"></i> Send
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feed-share list-group bg-white row mt-2">

                </div>
                <div class="feed-share list-group bg-white row mt-2">
                    <div class="col-md-12 m-2 ">
                        <div class="row share-actor">
                            <div class="avt-actor  col-md-2">
                                <a href=""><img class="img-actor" src="Img/f8_icon.png" alt=""></a>
                            </div>
                            <div class="col-md-10">
                                <span >
                                    <a href="" style="text-decoration: none; color: #000000E6;">F8</a>                          
                                </span>
                                <div class="descrip">
                                    <p>Nhóm lập trình viên tại fullstack.edu.vn</p>
                                </div>
                            </div>
                            <div class="row cap-post">
                                <p>JavaScript Cơ Bản<a href="https://fullstack.edu.vn/courses/javascript-co-ban"> https://fullstack.edu.vn/courses/javascript-co-ban</a>    
                                </p> 
                            </div>
                            <div class="row content-post">
                                <img src="Img/java.jpg" alt="">
                            </div>
                            <div class="row status mt-1 mb-1">
                                <span>
                                    <i class="bi bi-hand-thumbs-up-fill" style="color: blue;"></i>
                                    <i class="bi bi-heart-fill" style="color: rgb(221, 30, 30);"></i>
                                    <span style="color: #00000099";">1000 •</span>
                                    <a href="#" class="comment"> 100 comments</a>
                                </span>
                                <hr>
                            </div>
                            <div class="row-feel">
                                <span>
                                    <button href="" class="btn-status">
                                        <i class="bi bi-hand-thumbs-up"></i> Like
                                        <i class="nav-arrow-down ti-angle-down"></i>
                                    </button>
                                    <span class="row-like">
                                        <span >
                                            <button href="" class="btn-sublike">
                                                <i class="bi bi-hand-thumbs-up-fill" style="color: blue;"></i> 
                                            </button>
                                        </span>
                                        <span >
                                            <button href="" class="btn-sublike">
                                                <i class="bi bi-emoji-heart-eyes-fill" style="color: rgb(10, 233, 40);"></i> 
                                            </button>
                                        </span>
                                        <span >
                                            <button href="" class="btn-sublike">
                                                <i class="bi bi-heart-fill" style="color: rgb(180, 21, 21);"></i>
                                            </button>
                                        </span>
                                        <span >
                                            <button href="" class="btn-sublike">
                                                <i class="bi bi-lightbulb-fill" style="color: rgb(252, 252, 13);"></i>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                                <span>
                                    <button href="" class="btn-status">
                                        <i class="bi bi-chat-left-text"></i> Comment
                                    </button>
                                </span>
                                <span>
                                    <button href="" class="btn-status">
                                        <i class="bi bi-arrow-90deg-right"></i> Share
                                    </button>
                                </span>
                                <span>
                                    <button href="" class="btn-status">
                                        <i class="bi bi-send-fill"></i> Send
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="news col-md-3 ">
                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <div class="card" style="width: 19rem">
                <div class="card-header bg-white border-0">
                    <span>Add to your feed</span>
                    <span><i class="fas fa-info-circle float-right"></i></span>
                </div>
                <div class="card-title">
                    <div class="ml-3">
                        <img src="Img/a.jpg"style="width: 50px; height: 50px; border-radius: 50%; margin-left: 20px; margin-right: 10px;"/>
                <span class="header ml-1" style="font-size: 14px; margin-right: 25px;">LinkedIn News</span>

                <span class="float-right mr-3 mt-2"><button
                    class="btn btn-outline-info btn-sm"
                    style="border-radius: 50px"
                  >
                    <strong>+ Follow</strong>
                  </button></span>    
              </div>
              </div>
                <div class="card-title">
                    <div class="ml-3">
                        <img src="Img/a.jpg"style="width: 50px; height: 50px; border-radius: 50%; margin-left: 20px; margin-right: 10px;"/>
                <span class="header ml-1" style="font-size: 14px; margin-right: 25px;">LinkedIn News</span>

                <span class="float-right mr-3 mt-2"><button
                    class="btn btn-outline-info btn-sm"
                    style="border-radius: 50px"
                  >
                    <strong>+ Follow</strong>
                  </button></span>    
              </div>
              </div>
                <div class="card-title">
                    <div class="ml-3">
                        <img src="Img/a.jpg"style="width: 50px; height: 50px; border-radius: 50%; margin-left: 20px; margin-right: 10px;"/>
                <span class="header ml-1" style="font-size: 14px; margin-right: 25px;">LinkedIn News</span>

                <span class="float-right mr-3 mt-2"><button
                    class="btn btn-outline-info btn-sm"
                    style="border-radius: 50px"
                  >
                    <strong>+ Follow</strong>
                  </button></span>    
              </div>
            </div>
                <div class="my-sidebar sub-group list-group bg-white mt-2">

                    <footer>
                        <div class="footer-content mt-2">
                            <div class="footer-text"><a href="">About</a></div>
                            <div class="footer-text"><a href="">Accessibility</a></div >
                            <div class="footer-text"><a href="">Help Center</a></div>
                            <div class="footer-text"><a href="">Privacy & Term<i class="bi bi-chevron-down"></i></a></div>
                            <div class="footer-text"><a href="">Ad Choies</a></div>
                            <div class="footer-text"><a href="">Advertising</a></div>
                            <div class="footer-text"><a href="">Buiness Services<i class="bi bi-chevron-down"></i></a></div>
                            <div class="footer-text"><a href="">Get the LinedIn App</a></div>
                            <div class="footer-text"><a href="">More</a></div>
                        </div>
                        
                        <div class="footer-content">
                            <span class="footer-last_text">
                                <p>Linked<i class="bi bi-linkedin"></i></span>
                                    <span style="color: rgb(119, 108, 108) ;" class="footer-text">LinkedIn Corporation © 2021
                                </p>
                            </span>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </main>

<?php
    include("template/footer.php");
?>