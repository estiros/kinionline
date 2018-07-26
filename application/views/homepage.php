<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Kinionline</title>
	

        <!-- CSS  -->
        <link rel="icon" href="<?php echo base_url();?>assets/image/logo1_tr.png">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
    </head>
    
    <body id="top" class="scrollspy">
        <!--Navigation-->
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper white">
                    <a href="#top"><img src="<?php echo base_url();?>assets/image/logo1_tr.png"></a>
                    <a href="#top" class="brand-logo black-text">KiniOnline</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger black-text"><i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="#home2">Home</a></li>
                        <li><a href="#!">About</a></li>
                        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Product<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a href="#!">Blog</a></li>
                        <li><a href="#!">Contact Us</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <ul class="sidenav" id="mobile-demo">
            <li><a href="#!">Home</a></li>
            <li><a href="#!">About</a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Product<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="#!">Blog</a></li>
            <li><a href="#!">Contact Us</a></li>
        </ul>

        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">KiniAbiz</a></li>
            <li class="divider"></li>
            <li><a href="#!">Labanian</a></li>
            <li class="divider"></li>
            <li><a href="#!">Siswaku</a></li>
            <li class="divider"></li>
            <li><a href="#!">Wangun</a></li>
            <li class="divider"></li>
            <li><a href="#!">Palindrom</a></li>
            <li class="divider"></li>
            <li><a href="#!">Amplitodoo</a></li>
        </ul>

        <ul id="dropdown2" class="dropdown-content">
            <li><a href="#!">KiniAbiz</a></li>
            <li class="divider"></li>
            <li><a href="#!">Labanian</a></li>
            <li class="divider"></li>
            <li><a href="#!">Siswaku</a></li>
            <li class="divider"></li>
            <li><a href="#!">Wangun</a></li>
            <li class="divider"></li>
            <li><a href="#!">Palindrom</a></li>
            <li class="divider"></li>
            <li><a href="#!">Amplitodoo</a></li>
        </ul>

    <!--Isi-->
        <div class="container">
            <div class="row">
                <div class="col s4 home1-image">
                    <img class="materialboxed responsive-img" src="<?php echo base_url();?>assets/image/1.png">
                </div>
                <div class="col s8 home1-text">
                    <h2>The Best ICT for Your Startup/Company</h2>
                    <a href="#!" class="button">More Info</a>
                </div>
            </div>
            <center>
                <a href="#home2" class="black-text arah"><i class="large material-icons">expand_more</i></a>
            </center>
        
        </div>
        <div class="container scrollspy" id="home2">
            <center>
                <h1>Why Client Must Choose <br> KiniOnline</h1>
            </center>
            <div class="row home2">
              <div class="col s12 m12 l4">
                <img class="materialboxed responsive-img" src="<?php echo base_url();?>assets/image/2.png">
                <center>
                    <h4>Easy To Use</h4>
                    <h6>Startup and company will be easier to manage the business</h6>
                </center>
              </div>
              <div class="col s12 m12 l4">
                <img class="materialboxed responsive-img" src="<?php echo base_url();?>assets/image/3.png">
                <center>
                    <h4>Trusted</h4>
                    <h6>With the experience and high skill of our team, KiniOnline will provide the best and reliable ICT solution for your company/startup</h6>
                </center>
              </div>
              <div class="col s12 m12 l4">
                <img class="materialboxed responsive-img" src="<?php echo base_url();?>assets/image/4.png">
                <center>
                    <h4>Cost Effective</h4>
                    <h6>The affordable price that we offer is perfect for you who will develop new company/startup</h6>
                </center>
              </div>
            </div>
            <center>
                <a href="#!" class="black-text arah"><i class="large material-icons">expand_more</i></a>
            </center>
        </div>
    
    <!--  Scripts-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
    
    <script>
        $(document).ready(function(){
            $(".dropdown-trigger").dropdown();
            $('.sidenav').sidenav();
            $('.materialboxed').materialbox();
            $('.scrollspy').scrollSpy();
        });
    </script>
        
    </body>
</html>
