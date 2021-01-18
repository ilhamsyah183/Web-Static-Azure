<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="style/style.css" type="text/css" rel="stylesheet"/>
    <link href="style/bootstrap.min.css"  type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div id="container">
        <div id="header">
            <div id="navigasi-bar" >
                <nav class="navbar navbar-expand-md nav-top ">
                    <a class="navbar-brand" href="#">
                        <img class="img-fluid" src="image/Logo dan tulisan.svg" width="70%" height="70%">
                      </a>
                      <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class=" collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                              <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="TrainerSchedule.php">Trainer&Schedule</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="video.php">Video </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="konsul.php">Konsul</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="stopwatch.php">Stopwatch</a>
                              </li>
                            <li class="nav-item">
                              <a class="nav-link" href="artikel.php">Article</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About</a>
                              </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#"> </a>
                            </li>
                          </ul>
                          <form class="form-inline my-2 my-lg-0">
                            <a href="signin.php">
                                    <button class="btn btn-success my-2 my-sm-0" type="button">SignIn/SignUp</button>
                            </a></form>
                      </div>
                  </nav>
            </div> 
        </div>
        <div id="content">
            <div id="highlight-menu" style="border-radius: 10px;">
                <center>
                <table border="1" cellpacing="0" rules="none">
                    <tr>
                        <td>
                            <a href="#"><h4 style="color: red;">SignIn</h4></a><br>
                            <a href="signup.php"><h4 style="color: red;">SignUp</h4></a>
                        </td>
                        <td style="background-color: red;">
                            <img src="image/White logo.png">
                        </td>
                        <td>
                            <h4>SIGN IN</h4>
                            <a href="#"><img src="image/withgoogle.PNG"></a>
                            <br>
                            <h5>Email</h5>
                            <input
    	                        id="user-email"
                                class="form-content"
                                type="email"
                                name="email"
                                autocomplete="on"
                                style="padding: 5px 81px;"
                                required />
                            <br>
                            <h5>Password</h5>
                            <input
                                id="user-password"
                                class="form-content"
                                type="password"
                                name="password"
                                style="padding: 5px 81px;"
                                required /><br>
                            <br>
                            <button style="background-color: red; padding: 10px 140px;  color: white;">SIGN IN</button>
                            <a href="#"><h6 style="color: red;">Forget Password?</h6></a>
                        </td>
                    </tr>
                </table>
                </center>
            </div>
        </div>
        <div id="nav-foot">
            <footer class="page-footer font-small blue pt-4 text-foot">
                <div class="container-fluid text-center text-md-left ">
                    <div class="row">       
                        <div class="col-md-6 mt-md-0 mt-3">      
                            <!-- <h5 class="text-uppercase">Footer Content</h5> -->
                            <div class="container-img-foot" >
                                <picture>
                                    <img src="image/White logo.png" class="img-logo-footer">
                                  </picture>
                            </div>
                            <p>Here you can use rows and columns to organize your footer content.</p>     
                        </div>
                        <!-- <hr class="clearfix w-100 d-md-none pb-3">   -->
                       
                        <div class="col-md-3 mb-md-0 mb-3 ">
                            <h5 class="text-foot tengah">Get In Touch</h5>         
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#!">Address</a>
                                </li>
                                <li>
                                    <a href="#!">Karawang</a>
                                </li>
                                <li>
                                    <a href="#!">Mon-Fri: 09:00 - 15:00</a>
                                </li>
                            </ul>     
                        </div>
                        <div class="col-md-3 mb-md-0 mb-3">
                            <br>     
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#!">Contact Info</a>
                                </li>
                                <li>
                                    <a href="#!">Email : Gympedia@gym.co.id</a>
                                </li>
                                <li>
                                    <a href="#!">Call : 088-213-299</a>
                                </li>
                            </ul>    
                        </div> 
                    </div>
                    <hr size="10px">  
                </div>
                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                    <a> Gympedia.com</a>
                </div> 
            </footer>
        </div>      
    </div>

    
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
