<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Notifications | LinkedIn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/notifications.css">
</head>

<body>
    <header class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top ">
            <div class="container-fluid ms-5">
                <a class="nav-logo ms-5">
                    <i class="bi bi-linkedin">
                        <link rel="stylesheet" href="home.html">
                    </i>
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
                                <i class="bi bi-house-door-fill" style="margin-left: 15px;">
                                    <div style="font-style: normal;">Home</div>
                                </i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="MyNetwork.html">
                                <i class="bi bi-people-fill" style="margin-left: 25px;">
                                    <div style="font-style: normal;">My Network</div>
                                </i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Jobs.html">
                                <i class="bi bi-briefcase-fill" style="margin-left: 8px;">
                                    <div style="font-style: normal;">Jobs</div>
                                </i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Messaging.html">

                                </i><i class="bi bi-send-fill" style="margin-left: 27px;">
                                    <div style="font-style: normal;">Messaging</div>
                                </i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Notifications.php">

                                </i><i class="bi bi-bell-fill" style="margin-left: 35px;">
                                    <div style="font-style: normal;">Notifications</div>
                                </i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link me-2" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle" style="font-size: 18px;"></i>
                                <div class="text-nav" style="font-style: normal;">Me<i
                                        class="bi bi-caret-down-fill"></i>
                                </div>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 240px;">
                                <div class="my-sidebar list-group bg-white">
                                    <div class="feed-identity-module m-2" style="display: inline;">
                                        <a href="Profile.php" class="profile" style="display: inline;">
                                            <img class="my-avartar col-md-3" src="Img/ava.jpg" style="display: inline;">

                                        </a>
                                        <div class="list-group-item mt-2" style="border-radius: 16px; color: #0a66c2;">
                                            <a href="Profile.php" class="" style="text-decoration: none;">
                                                <div class="row text-align-center feed-identity">
                                                    <span class="text-center" style="color: blue; font-size: 14px;">View
                                                        Profile</span>
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
                                        <li class="mt-2"><a href="" class="text-decoration-none">Settings & Privacy</a>
                                        </li>
                                        <li class="mt-2"><a href="" class="text-decoration-none">Help</a></li>
                                        <li class="mt-2"><a href="" class="text-decoration-none">Language</a></li>
                                    </ul>
                                </div>
                                <div class="list-group-item">
                                    <p style="color: black;">Manage</p>
                                    <ul class="list-unstyled">
                                        <li class="mt-2"><a href="" class="text-decoration-none">Posts & Activity</a>
                                        </li>
                                        <li class="mt-2"><a href="" class="text-decoration-none">Jobs posting
                                                Account</a></li>
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
    <section class="container-fluid notifications-Content ">
        <div class="col-md-3 row notifications-Manage ">
            Manage your Notifications
            <a href="#">View Settings</a>
        </div>
    </section>
    <script>
        const modalBtn = document.querySelector('.js-modal-open')
        const modal =document.querySelector('.modal')
        const modalClose=document.querySelector('.js-modal-close')
        //thêm open vào class modal
        function showmodal(){
            modal.classList.add('open')
        }
        // gỡ bỏ open ở class modal
        function hidemodal(){
            modal.classList.remove('open')
        }
        modalBtn.addEventListener('click',showmodal)
        modalClose.addEventListener('click',hidemodal)
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>