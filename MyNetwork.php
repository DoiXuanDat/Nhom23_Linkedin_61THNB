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
    <link rel="stylesheet" href="css/MyNetwork.css"/>
</head>

<body>
    <header>
         <div class="container">
            .<div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">      
                <div class="container-fluid ms-5" >
                    <a class="nav-logo ms-5" href>
                        <img class="logo" src="Img/linkedin.png" alt="">
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
                                <a class="nav-link" href="home.php">
                                    <i class="bi bi-house-door-fill">
                                        <div style="font-style: normal;">Home</div>
                                    </i>
                                </a>
                            </li>
                            <li class="nav-item">

                                <a class="nav-link" href="My Network.php">



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

                                <a class="nav-link" href="Messaging.php">


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
                                        <a href="#" class="profile" style="display: inline;">
                                            <img class="my-avartar col-md-3" src="Img/ava.jpg" style="display: inline;">
                                            
                                        </a>
                                        <div class="list-group-item mt-2" style="border-radius: 16px; color: #0a66c2;">
                                            <a href="#" class="" style="text-decoration: none;">
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
                                    <a href="index.php" class="signout text-decoration-none">
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
        <main class="container-fluid" style="background: #f3f2ef">
        <div class="row" style="height: 24px;">
        </div>
        <div class="container" style="margin-top:20px;">
            <div class="row clearfix ps-4">
                <div class="sidebar col-md-3 ps-2">
                    <div class="my-sidebar list-group-item bg-white">     
                        <h6 style="margin-top: 10px;">Manager my network</h6>                
                        <div class="sidebar_categories ">
                            <div class="sidebar_category">
                                <i class="bi bi-people-fill"></i>
                                <span>Connections</span>
                            </div>
                            <div class="sidebar_category">
                                <i class="bi bi-person-rolodex"></i>
                                <span>Contacts</span>
                            </div>
                            <div class="sidebar_category">
                                <i class="bi bi-person-circle"></i>
                                <span>People | Follow</span>
                            </div>
                            <div class="sidebar_category">
                                <i class="bi bi-calendar2-check"></i>
                                <span>Groups</span>
                            </div>
                            <div class="sidebar_category">
                                <i class="bi bi-calendar2-event"></i>
                                <span>Events</span>
                            </div>
                            <div class="sidebar_category">
                                <i class="bi bi-file-earmark-break-fill"></i>
                                <span>Pages</span>
                            </div>
                            <div class="sidebar_category">
                                <i class="bi bi-newspaper"></i>
                                <span>Newsletters</span>
                            </div>
                            <div class="sidebar_category">
                                <i class="bi bi-hash"></i>
                                <span>Hashtags</span>
                            </div>
                            <hr>
                            <h7 class="grow" >Grow your network</h7>
                            <hr>
                            <div class="my-sidebar sub-group list-group mt-1">
                                <footer>
                                    <div class="footer-content mt-2">
                                        <div class="footer-text"><a href="">About</a></div>
                                        <div class="footer-text"><a href="">Accessibility</a></div>
                                        <div class="footer-text"><a href="">Help Center</a></div>
                                        <div class="footer-text"><a href="">Privacy & Term<i class="bi bi-chevron-down"></i></a>
                                        </div>
                                        <div class="footer-text"><a href="">Ad Choies</a></div>
                                        <div class="footer-text"><a href="">Advertising</a></div>
                                        <div class="footer-text"><a href="">Buiness Services<i class="bi bi-chevron-down"></i></a>
                                        </div>
                                        <div class="footer-text"><a href="">Get the LinedIn App</a></div>
                                        <div class="footer-text"><a href="">More</a></div>
                                    </div>
                                    <div class="footer-content">
                                        <span class="footer-last_text">
                                            <p>Linked<i class="bi bi-linkedin"></i>
                                        </span>
                                        <span style="color: rgb(119, 108, 108) ;" class="footer-text">LinkedIn Corporation © 202
                                            </p>
                                        </span>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main col-md-7">
                    <div class="invitation bg-white row ">
                        <div class="col-md-12 m-2">
                            <div class="row Text">
                                <h6 class="Start">No pending invitations</h6>   
                            </div>
                        </div>
                    </div>
                    <div class="personal-contact bg-white row mt-2 mb-4 ">
                        <div class="row contact m-4">
                            <div class="row directory mb-3">
                                <div class="add-personal col-md-2">
                                    <a href=""><img class="contact" src="Img/bookcontact.jpg" style="width:60px;"></a>
                                </div>
                                <div class="col-md-10"style="margin-top:20px">
                                    <span>Add personal contacts</span>
                                </div>
                            </div>
                            <div class="descrip mb-3">
                                <div style="opacity: 0.5;font-size:smaller;">We ’ll periodically import and store your contacts to help you and others connect. You choose who to connect to and who to invite.</div>
                                <a href="" style="text-decoration: none; color: rgb(37, 15, 235);">Learn more</a>
                            </div>
                            <div class="input-group flex-nowrap mb-3">
                                <input type="text" class="form-control" placeholder="nhom23@gmail.com" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <div class="nav-item ms-2 me-2 mb-2">
                                <a href="">
                                    <button class="btn-continue text-primary mt-1">Continue</button>
                                </a>
                            </div>
                            <div class="more-options">
                                <a href="" class="text-decoration-none link-dark">More options</a>
                            </div>       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
    include("template/footer.php");
?>