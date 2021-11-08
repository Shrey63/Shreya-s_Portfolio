<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalpak Nemade</title>
    <!-- aos -->

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <!-- firebase links -->
    <script src="https://www.gstatic.com/firebasejs/8.8.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.8.1/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.8.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.8.1/firebase-storage.js"></script>
    <script src="./js/firebase-init.js"></script>

    <!-- bootstrap links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- custom css link -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- font-awesome links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- custom script -->
    <script src="./js/script.js"></script>

    <script src="./js/moderjs.js"></script>

</head>

<body onload="loaddata()">
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-transparent">
        <a class="navbar-brand " href="./">Kalpak Nemade</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active" id="homeid">
                    <a class="nav-link" onclick="selectMenu('home')" href="#home">Home </a>
                </li>
                <li class="nav-item" id="aboutid">
                    <a class="nav-link" onclick="selectMenu('about')" href="#about">About Me</a>
                </li>
                </li>
                <li class="nav-item" id="expid" style="display:none">
                    <a class="nav-link" onclick="selectMenu('exp')" href="#exp">Experience</a>
                </li>
                </li>
                <li class="nav-item" id="eduid">
                    <a class="nav-link" onclick="selectMenu('edu')" href="#edu">Education</a>
                </li>
                </li>
                <li class="nav-item" id="skillid">
                    <a class="nav-link" onclick="selectMenu('skill')" href="#skill">Skills</a>
                </li>
                </li>
                <li class="nav-item" id="workid">
                    <a class="nav-link" onclick="selectMenu('work')" href="#work">My Work</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- navbar end -->


    <!-- home section start-->
    <div id="home" class="mt-3">
        <center>
            <img src="./img/2.jpg" id="myphoto" data-aos="zoom-in-up" data-aos-duration="500" class="rounded-circle mt-5" height="350px" width="350px">
            <h3 class="mt-3 text-white" id="myname">Kalpak Jitendra Nemade</h3>
            <!-- btn src of pdf of resume TO DO -->
            <div data-aos="fade-down" ata-aos-easing="linear" data-aos-duration="500">
                <button type="button" onclick="loadsrc('resume')" class="btn btn-outline-dark my-3 text-white">View Resume</button><br>
                <!-- social media links TO DO -->
                <div class="template-demo">
                    <button type="button" onclick="loadsrc('facebook')" class="btn btn-social-icon btn-facebook btn-rounded mr-2">
                        <i class="fa fa-facebook fa-lg"></i>
                    </button>
                    <button type="button" onclick="loadsrc('twitter')" class="btn mr-2 btn-social-icon btn-twitter btn-rounded">
                        <i class=" fa fa-twitter fa-lg"></i>
                    </button>
                    <button type="button" onclick="loadsrc('linkedin')" class="btn mr-2 btn-social-icon btn-linkedin btn-rounded">
                        <i class=" fa fa-linkedin fa-lg"></i>
                    </button>
                    <button type="button" onclick="loadsrc('github')" class="btn mr-2 btn-social-icon btn-github btn-rounded">
                        <i class=" fa fa-github fa-lg"></i>
                    </button>
                    <button type="button" onclick="loadsrc('instagram')" class="btn mr-2 btn-social-icon btn-instagram btn-rounded">
                        <i class=" fa fa-instagram fa-lg"></i>
                    </button>
                    <button type="button" onclick="loadsrc('whatsapp')" class="btn mr-2 btn-social-icon btn-whatsapp btn-rounded">
                        <i class=" fa fa-whatsapp fa-lg"></i>
                    </button>
                    <button type="button" onclick="loadsrc('telegram')" class="btn mr-2 btn-social-icon btn-telegram btn-rounded">
                        <i class=" fa fa-telegram fa-lg"></i>
                    </button>
                </div>
            </div>
        </center>
    </div>
    <!-- home section end -->


    <!-- about section Strat -->
    <div id="about" class="gap">

        <center>
            <h3 class="title">About me</h3>
        </center>
        <div class="container-fluid  ">
            <div data-aos="fade-down" ata-aos-easing="linear" data-aos-duration="1000">
                <div class="row text-white border border-white  rounded p-3 txt">
                    <div class="col-lg-7 col-md-7 col-8 my-3 ">
                        <h2>Who I am?</h2>
                        <div id="abouttext">
                            Hey! I am Kalpak, 18yr old, Computer Engineering student,<br>
                            A freelancer Full Stack Web-developer, living in Pune Maharashtra State(India).
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-8">
                        <img src="./img/3.png" id="aboutphoto" alt="" width="100%" height="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->

    <!-- exprience section Strat Todo hide it -->
    <div id="exp" class="gap" style="display:none">
        <center>
            <h3 class="title">Experience</h3>
        </center>
        <div data-aos="fade-right" ata-aos-easing="linear" data-aos-duration="1000">
            <div class="col-sm-3 ml-auto mr-auto ">
                <div class="card  bg-transparent text-white border border-white  rounded   ">
                    <div class="card-body ">
                        <h5 class="card-title">Kalpak pvt. ltd.</h5>
                        <p class="card-text">As a Full stack Web-developer</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- exprience section end -->

    <!-- education section start -->
    <div id="edu" class="gap">
        <center>
            <h3 class="title">Education</h3>
        </center>
        <div data-aos="fade-right" ata-aos-easing="linear" data-aos-duration="1000">
            <div class="col-sm-4 ml-auto mr-auto my-2">
                <div class="card  bg-transparent text-white border border-white  rounded   ">
                    <div class="card-body ">
                        <h5 class="card-title">Goverment Polytechnic, Jalgaon</h5>
                        <p class="card-text">Student of Computer Engineering (2018-2021)</p>

                    </div>
                </div>
            </div>
        </div>

        <!-- education section end -->
        <div id="skill" class="gap">
            <center>
                <h3 class="title">My Skills</h3>
            </center>
            <div class=" text-white border border-white  rounded p-3" style="margin-left: 10%; margin-right: 10%;">
                <div class="subtitle text-center h3">Languages:</div>
                <div class=" text-center row justify-content-center align-items-center" data-aos="fade-down" ata-aos-easing="linear" data-aos-duration="500">
                    <div class="html mx-3" style="color: #f4470b ">
                    <img src=" ./img/logos/html.png" title="HTML" style="max-width:50px; margin-right:15px;"> 
                        
                    </div>
                    <div class="css mx-3" style="color: #254bdd ">
                    <img src=" ./img/logos/css.png" title="CSS" style="max-width:50px; margin-right:15px;"> 
                       
                    </div>
                    <div class="js mx-3" style="color: #efd81d">
                    <img src=" ./img/logos/js.png" title="JavaScript" style="max-width:50px; margin-right:15px;"> 
                    </div>
                    <div class="java mx-3" style="color: #0983c0 ">
                    <img src=" ./img/logos/java.png" title="Java" style="max-width:50px; margin-right:15px;"> 
                    </div>
                    <div class="python mx-3" style="color: #f6d049 ">
                    <img src=" ./img/logos/python.png" title="Python" style="max-width:50px; margin-right:15px;"> 
                    </div>
                    <div class="php mx-3" style="color: #7377ad ">
                    <img src=" ./img/logos/php.png" title="PHP" style="max-width:50px; margin-right:15px;"> 
                    </div>
                </div><br>
                <div class="subtitle text-center h3">Framework:</div>
                <div class=" text-center row justify-content-center align-items-center" data-aos="fade-down" ata-aos-easing="linear" data-aos-duration="500">
                    <div class="androd mx-3" style="color: #3bd580 ">
                    <img src=" ./img/logos/android.png" title="Android" style="max-width:50px; margin-right:15px;"> 
                    </div>
                   
                    <div class="django mx-3" style="color: #2aa473">
                    <img src=" ./img/logos/django.png" title="Django" style="max-width:50px; margin-right:15px;"> 
                    </div>

                </div> <br>
                <div class="subtitle text-center h3">Database:</div>
                <div class=" text-center row justify-content-center align-items-center" data-aos="fade-down" ata-aos-easing="linear" data-aos-duration="500">
                    <div class="sql mx-3" style="color: #58cdf7 ">
                    <img src=" ./img/logos/mysql.png" title="MySQL" style="max-height:50px; margin-right:15px;"> 
                    </div>
                    <div class="firebase mx-3" style="color: #f7c62e ">
                    <img src=" ./img/logos/firebase.png" title="Firebase" style="max-height:50px; margin-right:15px;">
                    </div>

                </div>
                <div class="subtitle text-center h3">Tools And Editors:</div>
                <div class=" text-center row justify-content-center align-items-center" data-aos="fade-down" ata-aos-easing="linear" data-aos-duration="500">
                    
                    <div class="github mx-3" style="color: #ffff ">
                    <img src=" ./img/logos/github.png" title="GitHub" style="max-width:50px; margin-right:15px;">
                    </div>
                    <div class="firebase mx-3" style="color: #f7c62e ">
                    <img src=" ./img/logos/firebase.png" title="Firebase" style="max-width:50px; margin-right:15px;">
                    </div>
                    <div class="firebase mx-3" style="color: #f7c62e ">
                    <img src=" ./img/logos/vscode.png" title="VS Code" style="max-width:50px; margin-right:15px;">
                    </div>
                    <div class="firebase mx-3" style="color: #f7c62e ">
                    <img src=" ./img/logos/pycharm.png" title="PyCharm" style="max-width:50px; margin-right:15px;">
                    </div>
                    <div class="firebase mx-3" style="color: #f7c62e ">
                    <img src=" ./img/logos/intellij.png" title="IntelliJ" style="max-width:50px; margin-right:15px;">
                    </div>

                </div>
            </div>
        </div>
        <div id="work" class="gap">
            <center>
                <h3 class="title">My Work</h3>
            </center>
            <div class=" text-center row justify-content-center align-items-center ml-lg-auto mr-lg-auto" data-aos="fade-down" ata-aos-easing="linear" data-aos-duration="500">
                <div class="card bg-transparent text-white border border-white  rounded mx-3 my-3" style="width: 22rem;">
                    <img class="card-img-top" src="./img/shield.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">
                            <h4>
                                Shield 4.0
                            </h4>
                            Project for state level event Sheild 4.0; project provides registration for event, conducting quiz examination, genrate the result, send the certificate with the countribution of Aditya, Vishal, Mahesh
                        </p>
                    </div>
                </div>
                <div class="card bg-transparent text-white border border-white  rounded mx-3 my-3" style="width: 22rem;">
                    <img class="card-img-top" src="./img/ahm.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">
                        <h4>Android Health-Monitering System</h4>
                        Project with two modules android and web-application for monitoring health using pedometer with the contribution of Aditya, Vishal, Komal.
                        </p>
                    </div>
                </div>
                <div class="card bg-transparent text-white border border-white  rounded mx-3 my-3" style="width: 22rem;">
                    <img class="card-img-top" src="./img/ahm2.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">
                        <h4>Android Health-Monitering System</h4>
                        Project with two modules android and web-application for monitoring health using pedometer of different version with the contribution of Aditya.
                        </p>
                    </div>
                </div>

                <div class="card bg-transparent text-white border border-white  rounded mx-3 my-3" style="width: 22rem;">
                    <img class="card-img-top" src="./img/eschool.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">
                        <h4>
                            E-School
                        </h4>
                        E School website for school management system function like applying for cource, new cource, payment and many more.Devloped in php
                        </p>
                    </div>
                </div>
                <div class="card bg-transparent text-white border border-white  rounded mx-3 my-3" style="width: 22rem;">
                    <img class="card-img-top" src="./img/cricketclub.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">
                        <h4>
                            Cricket Club management
                        </h4>
                        Project for managing cricket club; project provide ground booking, batch booking and many more; with the countribution of Aditya
                        </p>
                    </div>
                </div>
                <div class="card bg-transparent text-white border border-white  rounded mx-3 my-3" style="width: 22rem;">
                    <img class="card-img-top" src="./img/examcell.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">
                        <h4>
                            Exam Cell Automation
                        </h4>
                        Project for the managing exam process; project provide notices to display, applying for exam, hallticket, exam, result and many more with the countribution of Aditya, Vishal, Komal
                        </p>
                    </div>
                </div>

            </div>
        </div>


        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

</body>

</html>
</body>

</html>