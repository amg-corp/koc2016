<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include './includes/init.php';
include './includes/payment_init.php';
?>

<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> -->
        <!-- ///  page title  /// -->
        <title>KOC 2016</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- /// font icons  /// -->
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/linecons.css">

        <!-- ///  animate.css  /// -->
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
        <!-- ///  bootstrap-select.css /// -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-select.css">
        <!-- ///  bootstrap.css  /// -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">      
        <!-- ///  main CSS file  /// -->        
        <link rel="stylesheet" type="text/css" href="assets/css/main.css">      
        <link rel="stylesheet" type="text/css" href="assets/css/default.css">      
        <link rel="stylesheet" type="text/css" href="assets/css/component.css">      

        <link rel="stylesheet" type="text/css" href="assets/css/component.css">  

        <script>
            var hash = '<?php echo $hash ?>';
            function submitPayuForm() {
                if (hash === '') {
                    return;
                }
                var payuForm = document.forms.payuForm;
                payuForm.submit();
            }
        </script>

    </head>
    <body class="remove-scroll" onload="submitPayuForm()">
        <!-- ///  preloader  /// -->
        <div class="preloader" id="<?php echo sizeof($posted) > 0 ? "noloader" : "preLoader" ?>">
            <?php echo sizeof($posted) > 0 ? "<h2 style='text-align: center;'>You now redirected to the payment gateway</h2>" : "" ?>
            <img src="assets/img/loader.GIF" class="loader" alt="">
        </div>     

        <div style='display: <?php echo sizeof($posted) > 0 ? "none" : "block" ?>'> >
            <!--             > 0 ? "none;" : "block;" -->
            <!-- ///  begin header  /// -->
            <header class="main-header" style="margin-top: -42px;">
                <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#home"><i class="fa fa-signal success-color"></i> KOC <b>2016</b></a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-collapse">
                            <ul class="nav navbar-nav navbar-right" id="nav">
                                <li><a href="#conference">Conference at a Glance</a></li>
                                <li><a href="#schedule">Schedule</a></li>
                                <li><a href="#speakers">Speakers</a></li>
                                <li><a href="#multimedia">Accomodation</a></li>
                                <li><a href="#team">Team</a></li>
                                <li><a href="#ourLocation">Venue</a></li>
                                <li><a href="#ourLocation1" data-toggle="modal" data-target=".bs-example-modal-lg">Registration</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </header>
            <!-- ///  end header  /// -->

            <!-- ///  begin content  /// -->

            <div></div>
            <!-- ///  begin promo  /// -->
            <div class="promo" id="home" style="background-image:url(assets/img/vic1.jpg); background-size: 100% 100%;">
                <!-- ///  semitransparent layer  /// -->
                <div class="color-correction"></div> 

                <!-- ///  begin entry  /// -->         
                <div class="container">
                    <div class="row">
                        <!-- ///  begin text section  /// -->
                        <div class="col-md-6 wow fadeInUp" data-wow-duration="2s">
                            <div class="promo-text">
                                <h1> KOLKATA OPTOMETRY CONFERENCE & OPTICAL TRADE FAIR 2016 </h1>
                                <hr>                  
                                <p class="lead">A unique initiative for the first time in Eastern India on 16th & 17th  April 2016 at the Science City Auditorium & Milan Mela Ground, Kolkata.</p>
                            </div>
                        </div>
                        <!-- ///  end text section  /// -->
                        <!-- ///  begin registration form  /// -->
                        <div class="col-md-4 col-md-offset-2 wow fadeInDown" data-wow-duration="2s" style="display: none">
                            <div class="register">
                                <form role="form" method="POST" id="registrationForm">
                                    <div class="form-group">                      
                                        <input type="text" id="regName" name="name" data-validation="length" data-validation-length="min4" class="form-control input-lg" placeholder="Name">
                                    </div>
                                    <div class="form-group">                      
                                        <input type="email" id="regMail" name="email" data-validation="email" class="form-control input-lg" placeholder="Email">
                                    </div>
                                    <div class="form-group">                      
                                        <input type="text" id="regPhone" name="phone" data-validation="required" class="form-control input-lg" placeholder="Phone">
                                    </div>
                                    <div class="form-group">                      
                                        <select id="regPlan" data-validation="required" class="form-control btn-group-lg selectpicker" name="plan" data-style="btn-empty">
                                            <option value="" disabled selected>Choose a plan</option>
                                            <option value="basic">Student</option>
                                            <option value="standart">Professionals</option>
                                            <option value="advance">Opticians</option>
                                            <option value="professional">Workshops</option>
                                        </select>
                                    </div>                    
                                    <button type="submit" class="btn btn-empty btn-block btn-lg">Contact us</button>
                                </form>
                                <div class="ok">
                                    <p class="icon"><i class="fa-check-circle-o fa fa-5x success-color"></i></p>
                                    <h3>Thanks!</h3>
                                    <p class="lead">Register complite</p>
                                    <button type="button" class="btn btn-warning" id="back">Back</button>
                                </div>
                            </div>
                        </div>
                        <!-- ///  end registration form  /// -->
                    </div>            
                </div>
                <!-- ///  end entry  /// -->
            </div>       
            <!-- ///  end promo  /// --> 

            <!-- ///  begin countdown  /// -->
            <div class="counter" id="conference">
                <div class="container">
                    <div class="row">
                        <!-- ///  digits  /// -->
                        <div class="col-md-12">
                            <!-- ///  to start the countdown the only requirement is the data-date attribute /// -->
                            <div class="row" id="countdown" data-date="2016/04/17">
                                <div class="col-md-3 count-digits wow fadeInDown" data-wow-delay="1s">
                                    <p id="days">20</p>
                                    <span class="lead">Days</span>
                                </div>
                                <div class="col-md-3 count-digits wow fadeInDown" data-wow-delay="1.2s">
                                    <p id="hours">16</p>
                                    <span class="lead">Hours</span>
                                </div>
                                <div class="col-md-3 count-digits wow fadeInDown" data-wow-delay="1.4s">
                                    <p id="minutes">10</p>
                                    <span class="lead">Minutes</span>
                                </div>
                                <div class="col-md-3 count-digits wow fadeInDown" data-wow-delay="1.6s">
                                    <p id="seconds">10</p>
                                    <span class="lead">Seconds</span>
                                </div>
                            </div>
                        </div>                      
                    </div>
                </div>
            </div>
            <!-- ///  end countdown  /// -->

            <!-- ///  begin schedule  /// -->
            <div class="schedule" id="schedule">
                <div class="container"> 
                    <div class="section-heading">
                        <h1>Schedule</h1>
                        <p class="lead">KOC 2016</p>
                    </div>
                    <div class="row">              
                        <div class="col-md-12 wow fadeInDown">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active"><a href="#first-day" data-toggle="tab">April, 16</a></li>
                                <li><a href="#second-day" data-toggle="tab">April, 17</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="first-day">
                                    <div class="panel-group" id="accordion2">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#section1">
                                                        8.30 am to 10.00 am - Registration & Welcome Breakfast
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="section1" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Visit of stall, Posters, Models and Trade visit by Guests with Chairman.</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        11.00am to 11.20am - KEY NOTE SPEECH "Indian Optometry Current Landscape & from where to here" By VINOD DANIEL
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Lunch</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        11.20am to 11.30am - "Optometry Today & in the Future" By Lakshmi Shinde.
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        11.30am to 12.00am - "Effectiveness of LowVision Rehabilitation Services" By Vijaya Kumari
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        12.00am to 12.15pm - Session by Amod Gogate
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        12.15pm to 12.35pm - "When Treatment is BIZZARE" by Dr Nibaran Gangopadhyay
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        12.35pm - 1.20pm - TRADE FAIR, MODEL, POSTER VISIT
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        1.20pm to 2.30 PM - Lunch Break
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#section3">
                                                        2.30pm to 3.30pm - Talk Show Sub "Optometry Practice - barriers & opportunities".
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="section3" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Moderator chair: Nilesh Thite
                                                        Co chairs:  – Yeshwant Saoji, Lakshmi Shinde, Amod Gogate, Vijaya Kumari, Monica Chaudhry</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        3.30pm - 4.30pm - Individual selected Paper from Professional and Faculty | Moderator Sunita Sarkar.
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        3.30pm - 4.30pm - Individual selected Paper from Professional and Faculty | Moderator Sunita Sarkar.
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        3.30pm - 3.40pm - "Prevalence of Amblyopia in patients with Congenital Ptosis" by Janitha Ravibabu
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        3.30pm - 3.40pm - "Prevalence of Amblyopia in patients with Congenital Ptosis" by Janitha Ravibabu
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        3.40pm - 3.50pm - "Early Presbyopia-A Psychosomatic Disorder" by Sarbind Kumar Yadav:
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        3.50pm - 4.00pm - "To determine the incidence & risk factor of ocular trauma in children." by Jayant Jha
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        4.00pm - 4.10pm - "A study to compare contrast sensitivity between monofocal and multifocal lens implanted eyes after Phaco.” by Pinaki Adak 
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        4.10pm - 4.20pm - "Spectacle & Lenses in India." by Pablo Chandra
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        4.20pm - 4.30pm - "Should we treat Adult Amblyopia?" by Archayeeta
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        4.30pm - 4.40pm - Discussion and Felicitation
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        4.30pm - 4.40pm - Discussion and Felicitation
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        4.40pm to 5.00pm - KEY Note Speech "Upscalling Spectacle Dispensing" by Yeshwant Saoji  
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        5.00pm to 5.30pm - Tea/Coffee Break
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        5.30pm to 7.00pm - Cultural Programme "ENJOY" by KOC 2016 Team.
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        7.00pm - Dinner
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>

                                <!-- Secound -->
                                <div class="tab-pane" id="second-day">
                                    <div class="panel-group" id="accordion2">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2">
                                                        Breakfast 8.30am onwards
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 3</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        10am - 10.40am - "Optometry & Scope of Research" by Dr. Shrikant Bharadwaj 
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        10.40 to 12.30 - Contact Lens Sessions Chair by Amod S Gogate.
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        10.40am to 10.55am - Speaker: Lakshmi Shinde.
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        10.55am to 11.10am - Speaker Monica Choudhry
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        11.10am to 11.25am - Speaker Yeshwant Saoji
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        11.25am to 11.40am - Speaker: Amod Gogate
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        11.40am to 11.55am - Speaker: Nilesh Thite                                                    
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        11.55am to 12.10am - Speaker: Jyoti Dave Singh
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        12.10am to 12.30 - Discussions and Felicitation.
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        12.30pm - 1.15pm - Sponsors' Slot 15 minutes each 3 slots: Moderator -Sakuntala Das
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        1.15pm to 2.30pm - LUNCH BREAK  
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        2.30am to 3.00pm - Individual selected paper presentation maximum 3 for professionals & faculties
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        2.30pm - 2.40pm - "Scleral Lenses: An Overview" By Pradipta Bhattacharyya 
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        2.40pm - 2.50pm - "Ocular Prosthesis" By Sumitra Aggarwal
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        2.50pm - 3.00pm - Video on "Rehabilitation of low vision & the Blind" By Sunita Sarkar  
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        3.00pm - 3.10pm - Discussion & Felicitation
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        3.00pm - 4.10pm - STUDENT'S FREE PAPER SESSION 10nos (Hall 2)
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        3.10pm to 3.55pm - Sponsors' Slot 15 minutes each 3 slots | Moderator: Sakuntala Das 
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        4.00pm - 4.15pm: Key note Speech Dr. Partha Biswas "Role of Optometrists in Advanced Eye Care Management"
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        4.15pm - 4.30pm - "Diabetic Retinopathy- early diagnosis & When to treat?"  By Dr. Chirag Bhatt
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        4.10 - 4.30pm: Discussion & Prize Distribution (Hall 2)
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        4.30pm - 4.45pm - Pearls of KOC’2016 Sunita Sarkar
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        4.45pm - 5.15pm - QUIZ 
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        5.15pm - 6.00pm - Closing Ceremony
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                        6.00pm onwards Cultural Programme organised by S.S.Exhibitors
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h4>Scientific Session 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>                
                        </div>
                    </div>
                </div>
            </div>
            <!-- ///  end schedule  /// -->

            <!-- ///  begin video  /// -->
            <div id="multimedia">
                <div class="container">            
                    <div class="row" >
                        <!-- The carousel -->
                        <div id="transition-timer-carousel" class="carousel slide " data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#transition-timer-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#transition-timer-carousel" data-slide-to="1"></li>
                                <li data-target="#transition-timer-carousel" data-slide-to="2"></li>
                                <li data-target="#transition-timer-carousel" data-slide-to="3"></li>
                                <li data-target="#transition-timer-carousel" data-slide-to="4"></li>
                                <li data-target="#transition-timer-carousel" data-slide-to="5"></li>
                                <li data-target="#transition-timer-carousel" data-slide-to="6"></li>
                                <li data-target="#transition-timer-carousel" data-slide-to="7"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="assets/img/Slider/Belur_1.jpg" />
                                    <div class="carousel-caption">
                                        <h1 class="carousel-caption-header">Belur Moth</h1>
                                        <p class="carousel-caption-text hidden-sm hidden-xs">
                                            Kolkata
                                        </p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="assets/img/Slider/Birla_Planetarium_1.jpg" />
                                    <div class="carousel-caption">
                                        <h1 class="carousel-caption-header">Birla Planetarium</h1>
                                        <p class="carousel-caption-text hidden-sm hidden-xs">
                                            Kolkata
                                        </p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="assets/img/Slider/ScienceCity_1.jpg" />
                                    <div class="carousel-caption">
                                        <h1 class="carousel-caption-header">The Science City</h1>
                                        <p class="carousel-caption-text hidden-sm hidden-xs">
                                            Kolkata
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="assets/img/Slider/St_Pauls_cathedral_1.jpg" />
                                    <div class="carousel-caption">
                                        <h1 class="carousel-caption-header">ST. Paul's Cathedral</h1>
                                        <p class="carousel-caption-text hidden-sm hidden-xs">
                                            Kolkata
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="assets/img/Slider/howrah_bridge_1.jpg" />
                                    <div class="carousel-caption">
                                        <h1 class="carousel-caption-header">Howrah Bridge</h1>
                                        <p class="carousel-caption-text hidden-sm hidden-xs">
                                            Kolkata
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="assets/img/Slider/indian_museum_1.jpg" />
                                    <div class="carousel-caption">
                                        <h1 class="carousel-caption-header">Indian Museum</h1>
                                        <p class="carousel-caption-text hidden-sm hidden-xs">
                                            Kolkata
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="assets/img/Slider/kali_temple_1.jpg" />
                                    <div class="carousel-caption">
                                        <h1 class="carousel-caption-header">Kali Temple</h1>
                                        <p class="carousel-caption-text hidden-sm hidden-xs">
                                            Kolkata
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="assets/img/Slider/princep_ghat_1.jpg" />
                                    <div class="carousel-caption">
                                        <h1 class="carousel-caption-header">Princepghat</h1>
                                        <p class="carousel-caption-text hidden-sm hidden-xs">
                                            Kolkata
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="assets/img/Slider/science_city_1.jpg" />
                                    <div class="carousel-caption">
                                        <h1 class="carousel-caption-header">Science City</h1>
                                        <p class="carousel-caption-text hidden-sm hidden-xs">
                                            Kolkata
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="assets/img/Slider/victoria_1.jpg" />
                                    <div class="carousel-caption">
                                        <h1 class="carousel-caption-header">Victoria</h1>
                                        <p class="carousel-caption-text hidden-sm hidden-xs">
                                            Kolkata
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#transition-timer-carousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#transition-timer-carousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>

                            <!-- Timer "progress bar" -->
                            <hr class="transition-timer-carousel-progress-bar animate" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- ///  end video  /// -->

            <!-- ///  begin speakers  /// -->
            <div class="speakers" id="speakers">
                <div class="container">
                    <div class="section-heading">
                        <h1>Speakers</h1>
                        <p class="lead">KOC 2016</p>
                    </div> 
                    <div class="row">
                        <div class="col-md-4 speaker wow fadeInDown" data-wow-delay="1s">
                            <div class="speaker-img">
                                <img src="assets/img/speakers/speaker1.jpg" alt="">
                                <a href="" class="speaker-contacts left-top"><i class="fa fa-google-plus fa-2x"></i></a> 
                                <a href="" class="speaker-contacts left-bottom"><i class="fa fa-facebook fa-2x"></i></a>
                                <a href="" class="speaker-contacts right-bottom"><i class="fa fa-twitter fa-2x"></i></a>
                                <a href="" class="speaker-contacts right-top"><i class="fa fa-envelope fa-2x"></i></a>
                            </div>
                            <div class="speaker-desc">
                                <p>Yashwant Saoji</p>
                                <span>MOptom., F Optom., FIACLE., FBCLA</span>
                            </div>
                        </div>
                        <div class="col-md-4 speaker wow fadeInDown" data-wow-delay="1.1s">
                            <div class="speaker-img">
                                <img src="assets/img/speakers/speaker2.jpg" alt="">
                                <a href="" class="speaker-contacts left-top"><i class="fa fa-google-plus fa-2x"></i></a> 
                                <a href="" class="speaker-contacts left-bottom"><i class="fa fa-facebook fa-2x"></i></a>
                                <a href="" class="speaker-contacts right-bottom"><i class="fa fa-twitter fa-2x"></i></a>
                                <a href="" class="speaker-contacts right-top"><i class="fa fa-envelope fa-2x"></i></a>
                            </div>
                            <div class="speaker-desc">
                                <p>Nilesh Thite</p>
                                <p>M. Optom, FIACLE, FBCLA, FAAO </p>
                                <p>Director of Educational Programs, IACLE</p>
                            </div>
                        </div>
                        <div class="col-md-4 speaker wow fadeInDown" data-wow-delay="1.2s">
                            <div class="speaker-img">
                                <img src="assets/img/speakers/speaker3.jpg" alt="">
                                <a href="" class="speaker-contacts left-top"><i class="fa fa-google-plus fa-2x"></i></a> 
                                <a href="" class="speaker-contacts left-bottom"><i class="fa fa-facebook fa-2x"></i></a>
                                <a href="" class="speaker-contacts right-bottom"><i class="fa fa-twitter fa-2x"></i></a>
                                <a href="" class="speaker-contacts right-top"><i class="fa fa-envelope fa-2x"></i></a>
                            </div>
                            <div class="speaker-desc">
                                <p>Vinod Daniel</p>
                                <span>M Tech</span>
                                <p>CEO India Vision Institute</p>
                            </div>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-4 speaker wow fadeInDown" data-wow-delay="1s">
                            <div class="speaker-img">
                                <img src="assets/img/speakers/team11.jpg" alt="">
                                <a href="" class="speaker-contacts left-top"><i class="fa fa-google-plus fa-2x"></i></a> 
                                <a href="" class="speaker-contacts left-bottom"><i class="fa fa-facebook fa-2x"></i></a>
                                <a href="" class="speaker-contacts right-bottom"><i class="fa fa-twitter fa-2x"></i></a>
                                <a href="" class="speaker-contacts right-top"><i class="fa fa-envelope fa-2x"></i></a>
                            </div>
                            <div class="speaker-desc">
                                <p> Dr Nibaran Gangopadhyay</p>
                                <span>Speaker 4</span>
                            </div>
                        </div>
                        <div class="col-md-4 speaker wow fadeInDown" data-wow-delay="1.1s">
                            <div class="speaker-img">
                                <img src="assets/img/speakers/Jyothi.JPG" alt="">
                                <a href="" class="speaker-contacts left-top"><i class="fa fa-google-plus fa-2x"></i></a> 
                                <a href="" class="speaker-contacts left-bottom"><i class="fa fa-facebook fa-2x"></i></a>
                                <a href="" class="speaker-contacts right-bottom"><i class="fa fa-twitter fa-2x"></i></a>
                                <a href="" class="speaker-contacts right-top"><i class="fa fa-envelope fa-2x"></i></a>
                            </div>
                            <div class="speaker-desc">
                                <p>Jyoti Dave Singh</p>
                                <span>FBDO(Hons)CL, FBCLA, FIACLE</span>
                                <span>Advisor-India</span>
                                <span>MENICON/David Thomas Contact lenses Ltd. UK.</span>
                            </div>
                        </div>
                        <div class="col-md-4 speaker wow fadeInDown" data-wow-delay="1.2s">
                            <div class="speaker-img">
                                <img src="assets/img/speakers/speaker6.jpg" alt="">
                                <a href="" class="speaker-contacts left-top"><i class="fa fa-google-plus fa-2x"></i></a> 
                                <a href="" class="speaker-contacts left-bottom"><i class="fa fa-facebook fa-2x"></i></a>
                                <a href="" class="speaker-contacts right-bottom"><i class="fa fa-twitter fa-2x"></i></a>
                                <a href="" class="speaker-contacts right-top"><i class="fa fa-envelope fa-2x"></i></a>
                            </div>
                            <div class="speaker-desc">
                                <p>Lakshmi Shinde</p>
                                <span>B.OPTPM, Msc Optometry ( UNSW), FAAO, FIACLE, FBCLA </span>
                                <span>CEO, Optometry Council of India, Global education manager IACLE, Trustee IVI</span>
                            </div>
                        </div>

                        <div class="col-md-4 speaker wow fadeInDown" data-wow-delay="1.2s">
                            <div class="speaker-img">
                                <img src="assets/img/speakers/amod gogate pic.jpg" alt="">
                                <a href="" class="speaker-contacts left-top"><i class="fa fa-google-plus fa-2x"></i></a> 
                                <a href="" class="speaker-contacts left-bottom"><i class="fa fa-facebook fa-2x"></i></a>
                                <a href="" class="speaker-contacts right-bottom"><i class="fa fa-twitter fa-2x"></i></a>
                                <a href="" class="speaker-contacts right-top"><i class="fa fa-envelope fa-2x"></i></a>
                            </div>
                            <div class="speaker-desc">
                                <p>Amod Shriram Gogate</p>
                                <span>M.Optom. FBCLA, Associate Director, Professional Affairs</span>
                                <p>Johnson & Johnson Private Limited</p>
                            </div>
                        </div>
                        <div class="col-md-4 speaker wow fadeInDown" data-wow-delay="1.2s">
                            <div class="speaker-img">
                                <img src="assets/img/speakers/Monica Chaudhry.jpg" alt="">
                                <a href="" class="speaker-contacts left-top"><i class="fa fa-google-plus fa-2x"></i></a> 
                                <a href="" class="speaker-contacts left-bottom"><i class="fa fa-facebook fa-2x"></i></a>
                                <a href="" class="speaker-contacts right-bottom"><i class="fa fa-twitter fa-2x"></i></a>
                                <a href="" class="speaker-contacts right-top"><i class="fa fa-envelope fa-2x"></i></a>
                            </div>
                            <div class="speaker-desc">
                                <p>Monica Chaudhry</p>
                                <span>Bsc , Msc Optometry , pusuing PHD </span>
                                <p>Professor and Head of department of optometry and vision science 
                                    Amity University</p>
                            </div>
                        </div>
                        <div class="col-md-4 speaker wow fadeInDown" data-wow-delay="1.2s">
                            <div class="speaker-img">
                                <img src="assets/img/speakers/shrikant.jpg" alt="">
                                <a href="" class="speaker-contacts left-top"><i class="fa fa-google-plus fa-2x"></i></a> 
                                <a href="" class="speaker-contacts left-bottom"><i class="fa fa-facebook fa-2x"></i></a>
                                <a href="" class="speaker-contacts right-bottom"><i class="fa fa-twitter fa-2x"></i></a>
                                <a href="" class="speaker-contacts right-top"><i class="fa fa-envelope fa-2x"></i></a>
                            </div>
                            <div class="speaker-desc">
                                <p>Srikant Bharadwaj</p>
                                <span>BSopt., PhD</span>
                                <span>Scientist - Visual Optics Laboratory</span>
                                <span>Associate Director of Optometry</span>
                                <span>L V Prasad Eye Institute</span>
                            </div>
                        </div>
                    </div>         
                </div>
            </div>
            <!-- ///  end speakers  /// -->

            <!-- ///  begin testimonials  /// -->
            <div class="testimonials wow flipInX" style="background-image: url(assets/img/bg/smiling-portraits.jpg)">
                <div class="color-correction"></div>
                <div class="container">
                    <div class="row">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">  
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">      
                                    <div class="carousel-caption">
                                        <blockquote>                        
                                            <p>It gives me immense pleasure to invite you All, on behalf of West Bengal Association for Optometrists (WBAO) & Graduate Optometry Association (GOA) to participate in the KOLKATA OPTOMETRY CONFERENCE & OPTICAL TRADE FAIR - a unique initiative for the first time in Eastern India on 16th & 17th  April 2016 at the Science City Auditorium & Milan Mela, Kolkata.</p>
                                            <footer>Debashish Kar, <cite title="Source Title">Chairman</cite></footer>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">      
                                    <div class="carousel-caption">
                                        <blockquote>                        
                                            <p>This is going to be a gala national conference along with Optical trade Fair in association with S.S.Exhibitors, and supported by all the major national level organisations involved in the development of the profession of Optometry in India.The conference will be a platform for sharing the knowledge & experiences of elite professionals in the field of Optometry from all over India & abroad. </p>
                                            <footer>Debashish Kar, <cite title="Source Title">Chairman</cite></footer>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">      
                                    <div class="carousel-caption">
                                        <blockquote>                        
                                            <p>The conference includes Scientific Paper Presentations; two days Workshop on Contact Lens & Low Vision Aids; Poster Competition & publication of a souvenir with the contribution of Educators/ Researchers in the field of Optometry. The most exciting part of the Conference is the Optical Trade Fair that will showcase national & international optical traders & manufacturers.</p>
                                            <footer>Debashish Kar, <cite title="Source Title">Chairman</cite></footer>
                                        </blockquote>
                                    </div>
                                </div>                  
                            </div>              
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>                            
                        </div>
                    </div>
                </div>
            </div>  
            <!-- ///  end testimonials  /// -->

            <!-- ///  begin price  /// -->
            <div class="price" id="price">
                <div class="container">
                    <div class="section-heading">
                        <h1>Pricing Tables</h1>
                        <p class="lead">KOC 2016</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 info-bg wow fadeInDown" data-wow-delay=".4s">
                            <header class="price-header">
                                <h4>Before 31st March, 2016</h4>
                                <p>N/A</p>
                            </header>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <p class="pull-left">Student</p>
                                    <!--<p class="pull-right li-koc" id=""><i class="fa fa-dot-circle-o primary-color fa-lg"></i></p>-->
                                    <p class="pull-right li-koc" id="li-koc-before-stu"><i class="fa fa-circle-o primary-color fa-lg"></i></p>
                                </li> 
                                <li class="list-group-item li-koc">
                                    <p class="pull-left">Professionals</p>
                                    <p class="pull-right li-koc" id="li-koc-before-pro"><i class="fa fa-circle-o primary-color fa-lg"></i></p>
                                </li> 
                            </ul>                                
                        </div>
                        <div class="col-sm-3 success-bg wow fadeInUp" data-wow-delay=".8s">
                            <header class="price-header">
                                <h4>After 31st March, 2016</h4>
                                <p>N/A</p>
                            </header>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <p class="pull-left">Student</p>
                                    <p class="pull-right li-koc" id="li-koc-after-stu"><i class="fa fa-circle-o primary-color fa-lg"></i></p>
                                </li> 
                                <li class="list-group-item">
                                    <p class="pull-left">Professionals</p>
                                    <p class="pull-right li-koc" id="li-koc-after-pro"><i class="fa fa-circle-o primary-color fa-lg"></i></p>
                                </li>                               
                            </ul>                
                        </div>
                        <div class="col-sm-3 danger-bg wow fadeInDown" data-wow-delay="1.2s">
                            <header class="price-header">
                                <h4>Spot Registrations</h4>
                                <p>N/A</p>
                            </header>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <p class="pull-left">Student</p>
                                    <p class="pull-right li-koc" id="li-koc-Spot-stu"><i class="fa fa-circle-o primary-color fa-lg"></i></p>
                                </li> 
                                <li class="list-group-item">
                                    <p class="pull-left">Professionals</p>
                                    <p class="pull-right li-koc" id="li-koc-Spot-pro"><i class="fa fa-circle-o primary-color fa-lg"></i></p>
                                </li>                                
                            </ul>                
                        </div>
                        <div class="col-sm-3 warning-bg wow fadeInUp" data-wow-delay="1.6s">
                            <header class="price-header">
                                <h4>Workshops</h4>
                                <p>N/A</p>
                            </header>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <p class="pull-left">Student</p>
                                    <p class="pull-right li-koc" id="li-koc-work-stu"><i class="fa fa-circle-o primary-color fa-lg"></i></p>
                                </li> 
                                <li class="list-group-item">
                                    <p class="pull-left">Professionals</p>
                                    <p class="pull-right li-koc" id="li-koc-work-pro"><i class="fa fa-circle-o primary-color fa-lg"></i></p>
                                </li>                               
                            </ul>                
                        </div>              
                    </div>
                </div>
            </div>
            <!-- ///  end price  /// -->

            <!-- ///  begin faq  /// -->
            <div class="faq" id="team">
                <div class="container">
                    <div class="row">
                        <div class="container-grid">
                            <h1 style="text-align: center">Team</h1>
                            <p class="lead" style="text-align: center">KOC 2016</p>
                            <!--                        <div class="">	-->
                            <div class="main-grid">
                                <ul id="og-grid" class="og-grid">
                                    <li class="fadeInDown">
                                        <a href="#!" data-largesrc="assets/img/team/team3.jpg" data-title="Sushanta Chatterjee" data-description="Convenor">
                                            <img src="assets/img/team/team3.jpg" alt="Sushanta Chatterjee"/>
                                        </a>
                                    </li>
                                    <li class="fadeInUp">
                                        <a href="#!" data-largesrc="assets/img/team/team1.jpg" data-title="Debasish Kar" data-description="Vice Chairman">
                                            <img src="assets/img/team/team1.jpg" alt="Debasish Kar"/>
                                        </a>
                                    </li>
                                    <li class="fadeInUp">
                                        <a href="#!" data-largesrc="assets/img/team/Subhasish Choudhury.jpg" data-title="Subhasish Choudhury" data-description="Chairman">
                                            <img src="assets/img/team/Subhasish Choudhury.jpg" alt="Subhasish Choudhury"/>
                                        </a>
                                    </li>
                                    <li class="fadeInDown">
                                        <a href="#!" data-largesrc="assets/img/team/team5.jpg" data-title="Bholanath Sarkar" data-description="Organising Secretary">
                                            <img src="assets/img/team/team5.jpg" alt="Bholanath Sarkar"/>
                                        </a>
                                    </li>
                                    <li class="fadeInUp">
                                        <a href="#!" data-largesrc="assets/img/team/team4.jpg" data-title="Prosenjit Majumdar" data-description="Treasurer">
                                            <img src="assets/img/team/team4.jpg" alt="Prosenjit Majumdar"/>
                                        </a>
                                    </li>
                                    <li class="fadeInDown">
                                        <a href="#!" data-largesrc="assets/img/team/team16.jpg" data-title="Jayanta Bhattacharyya" data-description="Scintific Commettee Chairman">
                                            <img src="assets/img/team/team16.jpg" alt="Jayanta Bhattacharyya"/>
                                        </a>
                                    </li>
                                    <li class="fadeInUp">
                                        <a href="#!" data-largesrc="assets/img/team/Aloke Das.jpg" data-title="Aloke Das" data-description="Team Member">
                                            <img src="assets/img/team/Aloke Das.jpg" alt="Aloke Das"/>
                                        </a>
                                    </li>
                                    <li class="fadeInDown">
                                        <a href="#!" data-largesrc="assets/img/team/Arijit Neogi.jpg" data-title="Arijit Neogi" data-description="Team Member">
                                            <img src="assets/img/team/Arijit Neogi.jpg" alt="Arijit Neogi"/>
                                        </a>
                                    </li>
                                    <li class="fadeInUp">
                                        <a href="#!" data-largesrc="assets/img/team/Debdulal Kar.jpg" data-title="Debdulal Kar" data-description="Team Member">
                                            <img src="assets/img/team/Debdulal Kar.jpg" alt="Debdulal Kar"/>
                                        </a>
                                    </li>
                                    <li class="fadeInDown">
                                        <a href="#!" data-largesrc="assets/img/team/Dilip Kr Mondal.jpg" data-title="Dilip Kr Mondal" data-description="Team Member">
                                            <img src="assets/img/team/Dilip Kr Mondal.jpg" alt="Dilip Kr Mondal"/>
                                        </a>
                                    </li>
                                    <li class="fadeInUp">
                                        <a href="#!" data-largesrc="assets/img/team/Moumita Mitra.jpg" data-title="Moumita Mitra" data-description="Team Member">
                                            <img src="assets/img/team/Moumita Mitra.jpg" alt="Moumita Mitra"/>
                                        </a>
                                    </li>
                                    <li class="fadeInDown">
                                        <a href="#!" data-largesrc="assets/img/team/Sourajit Mitra.jpg" data-title="Sourajit Mitra" data-description="Team Member">
                                            <img src="assets/img/team/Sourajit Mitra.jpg" alt="Sourajit Mitra"/>
                                        </a>
                                    </li>
                                    <li class="fadeInUp">
                                        <a href="#!" data-largesrc="assets/img/team/Runa Majumdar.jpg" data-title="Runa Majumdar.jpg" data-description="Team Member">
                                            <img src="assets/img/team/Runa Majumdar.jpg" alt="Runa Majumdar.jpg"/>
                                        </a>
                                    </li>
                                    <li class="fadeInDown">
                                        <a href="#!" data-largesrc="assets/img/team/Sanjoy Das.jpg" data-title="Sanjoy Das" data-description="Team Member">
                                            <img src="assets/img/team/Sanjoy Das.jpg" alt="Sanjoy Das.jpg"/>
                                        </a>
                                    </li>
<!--                                    <li class="fadeInUp">
                                        <a href="#!" data-largesrc="assets/img/team/Subhasish Choudhury.jpg" data-title="Subhasish Choudhury" data-description="Team Member">
                                            <img src="assets/img/team/Subhasish Choudhury.jpg" alt="Subhasish Choudhury"/>
                                        </a>
                                    </li>-->
                                    <li class="fadeInDown">
                                        <a href="#!" data-largesrc="assets/img/team/Atanu Samanta.jpg" data-title="Atanu Samanta" data-description="Team Member">
                                            <img src="assets/img/team/Atanu Samanta.jpg" alt="Atanu Samanta"/>
                                        </a>
                                    </li>
                                    <li class="fadeInDown">
                                        <a href="#!" data-largesrc="assets/img/team/Premjit Bhakt.jpg" data-title="Premjit Bhakt" data-description="Team Member">
                                            <img src="assets/img/team/Premjit Bhakt.jpg" alt="Premjit Bhakt"/>
                                        </a>
                                    </li>
                                    <li class="fadeInUp">
                                        <a href="#!" data-largesrc="assets/img/team/Paula Mehta.jpg" data-title="Paula Mehta" data-description="Team Member">
                                            <img src="assets/img/team/Paula Mehta.jpg" alt="Paula Mehta"/>
                                        </a>
                                    </li>
                                    <li class="fadeInUp">
                                        <a href="#!" data-largesrc="assets/img/team/Aloe Samanta.jpg" data-title="Aloe Samanta" data-description="Team Member">
                                            <img src="assets/img/team/Aloe Samanta.jpg" alt="Aloe Samanta"/>
                                        </a>
                                    </li>
                                    <li class="fadeInUp">
                                        <a href="#!" data-largesrc="assets/img/team/Prajjwal Ghosh.jpg" data-title="Prajjwal Ghosh" data-description="Team Member">
                                            <img src="assets/img/team/Prajjwal Ghosh.jpg" alt="Prajjwal Ghosh"/>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ///  end faq  /// -->

            <!-- ///  begin partners  /// -->
            <div class="partners wow fadeInUp">
                <div class="container">
                    <div class="section-heading">
                        <h1>Partners</h1>
                        <p class="lead">KOC 2016</p>
                    </div>
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <ul class="list-inline">                  
                                <li class="li-koc-partner"><img src="assets/img/partner/partner.jpg" alt=""></li>
                                <li class="li-koc-partner"><img src="assets/img/partner/partner1.jpg" alt=""></li>
                                <li class="li-koc-partner"><img src="assets/img/partner/partner2.jpg" alt=""></li>
                                <li class="li-koc-partner"><img src="assets/img/partner/partner3.jpg" alt=""></li>
                                <li class="li-koc-partner"><img src="assets/img/partner/partner4.jpg" alt=""></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ///  end partners  /// -->

            <!-- ///  begin map, subscribe, contacts  /// -->
            <!-- ///  set your venue address in data-location attribute  /// -->
            <div class="map" id="ourLocation" data-location="Science city,Kolkata,West Bengal,India." style="display: none">
                <div class="subscribe">
                    <div class="container wow fadeInDown">Science city, Kolkata, West Bengal.
                        <div class="row form-wrapper">
                            <div class="col-lg-12 body-bg">
                                <form class="input-group input-group-lg" id="subscribeForm" method="POST">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="email" class="form-control" data-validation="email" id="sEmail" name="sEmail">
                                    <span class="input-group-btn">
                                        <button class="btn btn-info" type="submit">Subscribe</button>
                                    </span>                   
                                </form>
                                <span class="help-block danger-color text-center"></span>
                            </div>
                            <div class="ok">
                                <h3>Success!</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid" style="display: none">
                    <div class="row">
                        <div class="col-lg-12 map-container" id="map">                
                        </div>
                    </div>
                </div>
                <div class="location wow flipInY" style="display: none">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="popover bottom">
                                    <div class="arrow"></div>
                                    <h2 class="popover-title">Location</h2>
                                    <div class="popover-content">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="street-view" id="streetView"></div>
                                            </div>
                                            <div class="col-sm-6"> 
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-map-marker info-color"></i> Science city, Kolkata, West Bengal.</li>
                                                    <li>                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;
                                                        J.B.S Haldane Avenue,</li>
                                                    <li>             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;
                                                        Kolkata, West Bengal 700046</li>
                                                    <li><i class="fa fa-envelope info-color"></i>info@koc2016.in</li>
                                                    <li><i class="fa fa-phone info-color"></i> +0 9831777523</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Registration Modal -->
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header"> 
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button> 
                            <h4 class="modal-title" id="myLargeModalLabel">Registrationnnn Form</h4> 
                        </div>
                        <!--<div class="modal-body" w3-include-HTML="includes/reg.html">-->
                        <div class="modal-body">
                            <form class="form-horizontal" action="<?php echo $action; ?>" method="post" name="payuForm">

                                <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
                                <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
                                <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />

                                <fieldset>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Name">Name</label>  
                                        <div class="col-md-4">
                                            <input id="Name" name="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" type="text" placeholder="James Doe" class="form-control input-md" required="">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="PostalAddress">Postal Address</label>
                                        <div class="col-md-4">                     
                                            <textarea class="form-control" id="PostalAddress" name="productinfo"><?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea>
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Phone">Mobile</label>  
                                        <div class="col-md-4">
                                            <input id="mobile" name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" type="text" placeholder="mobile" class="form-control input-md" required="">
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Email">Email</label>  
                                        <div class="col-md-4">
                                            <input id="Email" name="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" type="text" placeholder="james.doe@abc.com" class="form-control input-md" required="">
                                        </div>
                                    </div>

                                    <!-- Select Basic -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Role">Choose a plan</label>
                                        <div class="col-md-4">
                                            <select id="Role" name="Role" class="form-control">
                                                <option value="Student">Student</option>
                                                <option value="Professional">Professional</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="paymentmode">Registration Fees</label>
                                        <div class="col-md-4">
                                            <input id="fees" type="text" class="form-control input-md" required="" value="1500" readonly>
                                            <input id="amt" name="amount" type="hidden" value="<?php echo (empty($posted['amount'])) ? '1500' : $posted['amount'] ?>">
                                            <input type="hidden" name="surl" value="<?php echo $surl ?>" size="64">
                                            <input type="hidden" name="furl" value="<?php echo $furl ?>" size="64">
                                            <input type="hidden" name="service_provider" value="payu_paisa"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="checkboxes-0" class="col-md-4 control-label">
                                            <input type="checkbox" id="terms" value="1" required="">
                                            I agree to the terms & conditions
                                        </label>           
                                    </div>

                                    <!-- Button (Double) -->
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <button id="button1id" name="button1id" class="btn btn-success" type="submit">Pay to Register</button>
                                            <button id="button2id" name="button2id" class="btn btn-danger" type="reset">Cancel</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ///  end map, subscribe, contacts  /// -->
            <!-- ///  end content  /// -->

            <!-- ///  begin footer  /// -->
            <footer class="main-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 social text-center">
                            <ul class="list-inline">
                                <li>
                                    <a href="#"><i class="fa fa-twitter-square"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-skype"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-xing"></i></a>
                                    <a href="#"><i class="fa fa-vimeo-square"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                    <a href="#"><i class="fa fa-envelope"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-12 text-center">
                            <span>Designed & Developed by amg corp.</span>
                            <span>&COPY; 2016. All Rights Reserved</span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- ///  end footer  /// -->


        <!-- Registration Modal -->

        <!-- ///  start script  /// -->
        <!-- ///  libs  /// -->
        <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>-->        
        <script type="text/javascript" src="assets/js/modernizr-latest.js"></script>        
        <script type="text/javascript" src="assets/js/jquery-1.11.0.min.js"></script>     
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>   
        <script type="text/javascript" src="assets/js/grid.js"></script>   
        <!-- ///  plugins  /// -->
        <script type="text/javascript" src="assets/js/jquery.fitvids.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <!--<script type="text/javascript" src="assets/js/gmap3.min.js"></script>-->
        <script type="text/javascript" src="assets/js/jquery.scrollTo.js"></script>
        <script type="text/javascript" src="assets/js/jquery.nav.js"></script>
        <script type="text/javascript" src="assets/js/countdown.js"></script>
        <script type="text/javascript" src="assets/js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="assets/js/jquery.form-validator.min.js"></script>
        <script type="text/javascript" src="assets/js/jspdf.debug.js"></script>        
        <script type="text/javascript" src="assets/js/wow.min.js"></script>        
        <script type="text/javascript" src="assets/js/main.js"></script>
        <script type="text/javascript" src="assets/js/w3-include-HTML.js"></script>
        <script type="text/javascript">

        $(function () {
            Grid.init();
        });

        var $befStud = -1000;
        var $AfterStud = -1000;
        var $SpotStud = -1000;
        var $WorkStud = -1000;

        var $befProf = -1000;
        var $AfterProf = -1000;
        var $SpotProf = -1000;
        var $WorkProf = -1000;

        $(document).ready(function () {

            $("#li-koc-before-stu i").click(function () {
                var $temp = $("#li-koc-before-stu i").attr("class").split(" ")[1];
                var length = $temp.split("-").length;
                if (length === 3) {
                    $("#li-koc-before-stu i").attr("class", "fa fa-dot-circle-o primary-color fa-lg");
                    $befStud = 1000;
                    $("#li-koc-before-stu i").parent().parent().parent().parent().children("header").children("p").text($befStud + " INR");
                    $("#li-koc-before-pro i").attr("class", "fa fa-circle-o primary-color fa-lg");
                } else if (length === 4) {
                    $("#li-koc-before-stu i").attr("class", "fa fa-circle-o primary-color fa-lg");
                    $befStud = "N/A";
                    $("#li-koc-before-stu i").parent().parent().parent().parent().children("header").children("p").text($befStud);
                }
            });

            $("#li-koc-before-pro i").click(function () {
                var $temp = $("#li-koc-before-pro i").attr("class").split(" ")[1];
                var length = $temp.split("-").length;
                if (length === 3) {
                    $befProf = $befStud + 500;
                    $("#li-koc-before-pro i").attr("class", "fa fa-dot-circle-o primary-color fa-lg");
                    $("#li-koc-before-pro i").parent().parent().parent().parent().children("header").children("p").text($befProf + " INR");
                    $("#li-koc-before-stu i").attr("class", "fa fa-circle-o primary-color fa-lg");
                } else if (length === 4) {
                    $("#li-koc-before-pro i").attr("class", "fa fa-circle-o primary-color fa-lg");
                    $("#li-koc-before-pro i").parent().parent().parent().parent().children("header").children("p").text($befStud + " INR");
                }
            });

            $("#li-koc-after-stu i").click(function () {
                var $temp = $("#li-koc-after-stu i").attr("class").split(" ")[1];
                var length = $temp.split("-").length;
                if (length === 3) {
                    $("#li-koc-after-stu i").attr("class", "fa fa-dot-circle-o primary-color fa-lg");
                    $befStud = 1500;
                    $("#li-koc-after-stu i").parent().parent().parent().parent().children("header").children("p").text($befStud + " INR");
                    $("#li-koc-after-pro i").attr("class", "fa fa-circle-o primary-color fa-lg");
                } else if (length === 4) {
                    $("#li-koc-after-stu i").attr("class", "fa fa-circle-o primary-color fa-lg");
                    $befStud = "N/A";
                    $("#li-koc-after-stu i").parent().parent().parent().parent().children("header").children("p").text($befStud);
                }
            });

            $("#li-koc-after-pro i").click(function () {
                var $temp = $("#li-koc-after-pro i").attr("class").split(" ")[1];
                var length = $temp.split("-").length;
                if (length === 3) {
                    $("#li-koc-after-pro i").attr("class", "fa fa-dot-circle-o primary-color fa-lg");
                    $befStud = 2000;
                    $("#li-koc-after-pro i").parent().parent().parent().parent().children("header").children("p").text($befStud + " INR");
                    $("#li-koc-after-stu i").attr("class", "fa fa-circle-o primary-color fa-lg");
                } else if (length === 4) {
                    $("#li-koc-after-pro i").attr("class", "fa fa-circle-o primary-color fa-lg");
                    $befStud = "N/A";
                    $("#li-koc-after-pro i").parent().parent().parent().parent().children("header").children("p").text($befStud);
                }
            });

            $("#li-koc-Spot-stu i").click(function () {
                var $temp = $("#li-koc-Spot-stu i").attr("class").split(" ")[1];
                var length = $temp.split("-").length;
                if (length === 3) {
                    $("#li-koc-Spot-stu i").attr("class", "fa fa-dot-circle-o primary-color fa-lg");
                    $befStud = 2000;
                    $("#li-koc-Spot-stu i").parent().parent().parent().parent().children("header").children("p").text($befStud + " INR");
                    $("#li-koc-Spot-pro i").attr("class", "fa fa-circle-o primary-color fa-lg");
                } else if (length === 4) {
                    $("#li-koc-Spot-stu i").attr("class", "fa fa-circle-o primary-color fa-lg");
                    $befStud = "N/A";
                    $("#li-koc-Spot-stu i").parent().parent().parent().parent().children("header").children("p").text($befStud);
                }
            });

            $("#li-koc-Spot-pro i").click(function () {
                var $temp = $("#li-koc-Spot-pro i").attr("class").split(" ")[1];
                var length = $temp.split("-").length;
                if (length === 3) {
                    $("#li-koc-Spot-pro i").attr("class", "fa fa-dot-circle-o primary-color fa-lg");
                    $befStud = 2000;
                    $("#li-koc-Spot-pro i").parent().parent().parent().parent().children("header").children("p").text($befStud + " INR");
                    $("#li-koc-Spot-stu i").attr("class", "fa fa-circle-o primary-color fa-lg");
                } else if (length === 4) {
                    $("#li-koc-Spot-pro i").attr("class", "fa fa-circle-o primary-color fa-lg");
                    $befStud = "N/A";
                    $("#li-koc-Spot-pro i").parent().parent().parent().parent().children("header").children("p").text($befStud);
                }
            });

            $("#li-koc-work-stu i").click(function () {
                var $temp = $("#li-koc-work-stu i").attr("class").split(" ")[1];
                var length = $temp.split("-").length;
                if (length === 3) {
                    $("#li-koc-work-stu i").attr("class", "fa fa-dot-circle-o primary-color fa-lg");
                    $befStud = 200;
                    $("#li-koc-work-stu i").parent().parent().parent().parent().children("header").children("p").text($befStud + " INR");
                    $("#li-koc-work-pro i").attr("class", "fa fa-circle-o primary-color fa-lg");
                } else if (length === 4) {
                    $("#li-koc-work-stu i").attr("class", "fa fa-circle-o primary-color fa-lg");
                    $befStud = "N/A";
                    $("#li-koc-work-stu i").parent().parent().parent().parent().children("header").children("p").text($befStud);
                }
            });

            $("#li-koc-work-pro i").click(function () {
                var $temp = $("#li-koc-work-pro i").attr("class").split(" ")[1];
                var length = $temp.split("-").length;
                if (length === 3) {
                    $("#li-koc-work-pro i").attr("class", "fa fa-dot-circle-o primary-color fa-lg");
                    $befStud = 200;
                    $("#li-koc-work-pro i").parent().parent().parent().parent().children("header").children("p").text($befStud + " INR");
                    $("#li-koc-work-stu i").attr("class", "fa fa-circle-o primary-color fa-lg");
                } else if (length === 4) {
                    $("#li-koc-work-pro i").attr("class", "fa fa-circle-o primary-color fa-lg");
                    $befStud = "N/A";
                    $("#li-koc-work-pro i").parent().parent().parent().parent().children("header").children("p").text($befStud);
                }
            });


            $("#transition-timer-carousel").on("slide.bs.carousel", function (event) {
                //The animate class gets removed so that it jumps straight back to 0%
                $(".transition-timer-carousel-progress-bar", this)
                        .removeClass("animate").css("width", "0%");
            }).on("slid.bs.carousel", function (event) {
                //The slide transition finished, so re-add the animate class so that
                //the timer bar takes time to fill up
                $(".transition-timer-carousel-progress-bar", this)
                        .addClass("animate").css("width", "100%");
            });

            //Kick off the initial slide animation when the document is ready
            $(".transition-timer-carousel-progress-bar", "#transition-timer-carousel")
                    .css("width", "100%");
            // Code for PDf genaration
            $('#button1id1').click(function () {

                //              Checking for checkbox
                var stringchk = "";
                $(":checkbox").each(function () {
                    $(this).prop('checked') ? stringchk += $(this).val() + ", " : "N/A";
                });
                console.log(stringchk);

                var v_name = document.getElementById('Name').value;
                var v_phone = document.getElementById('Phone').value;

                var v_email = document.getElementById('Email').value;
                var v_age = document.getElementById('Age').value;

                var v_designation = document.getElementById('Designation').value;
                var v_role = document.getElementById('Role').value;
                var v_pst = document.getElementById('Police Station').value;
                var v_diat = document.getElementById('DIATERY REQUIREMENT').value;
                var v_city = document.getElementById('City').value;
                var v_po = document.getElementById('Post Office').value;
                var v_org = document.getElementById('Organisation').value;

                var doc = new jsPDF();

                doc.text(90, 20, 'KOC 2016');
                doc.text(80, 30, 'Application Form');
                doc.text(20, 40, 'Registration ID:  ');
                doc.text(20, 50, 'Name:');
                doc.text(80, 50, v_name);
                doc.text(20, 60, 'Phone:');
                doc.text(80, 60, v_phone);

                doc.text(20, 80, 'Email:');
                doc.text(80, 80, v_email);
                doc.text(20, 90, 'Age:');
                doc.text(80, 90, v_age);

                doc.text(20, 130, 'Checkbox:');
                doc.text(80, 130, stringchk.replace(/,\s*$/, ""));
                doc.text(20, 140, 'Designation:');
                doc.text(80, 140, v_designation);
                doc.text(20, 150, 'Role:');
                doc.text(80, 150, v_role);
                doc.text(20, 160, 'Police Station:');
                doc.text(80, 160, v_pst);
                doc.text(20, 170, 'Diatery Requirment:');
                doc.text(80, 170, v_diat);
                doc.text(20, 180, 'City:');
                doc.text(80, 180, v_city);
                doc.text(20, 190, 'Post Office:');
                doc.text(80, 190, v_po);
                doc.text(20, 200, 'Organisation:');
                doc.text(80, 200, v_org);
                doc.text(20, 230, 'I here by declared the above informations are correct.');
                doc.text(20, 250, '_____________________');
                doc.text(20, 260, 'Signature');
                doc.save('Test.pdf');
            });
        });
        </script>
        <script type="text/javascript" src="assets/js/registration.js"></script>
    </body>
</html>

