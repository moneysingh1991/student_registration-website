<!DOCTYPE html>
<html>
    <!--**********************************************************************************************
    *******************************D A S H B O A R D   P A G E ***************************************
    ***********************************************************************************************-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">

        <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/css/style-responsive.css') }}" rel="stylesheet" type="text/css" />
    </head>

    <body>

    <section id="container" >
        <!--header-->
        <header class="header black-bg">
            <!--title start-->
            <a href="index.html" class="title"><b>MySJSU</b></a>
            <!--title end-->
            <div class="top-menu">
                <!--careless whisper-->
                <!--shhh...-->
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html">Logout</a></li>
                </ul>
            </div>
        </header>
        <!--header end-->

        <!--**********************************************************************************************
        ******************************************* S I D E B A R ***************************************
        ***********************************************************************************************-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar"  class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">


                    <h5 class="centered">
                        Welcome, <br><br>
                        SJSU Student Name</h5>

                    <li class="mt">
                        <a class="active" href="index.html">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-desktop"></i>
                            <span>Search Classes</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-cogs"></i>
                            <span>Plan</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-book"></i>
                            <span>Enroll</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-tasks"></i>
                            <span>My Academics</span>
                        </a>
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->

        <!--**********************************************************************************************
        *******************************M I D D L E   S E C T I O N ***************************************
        ***********************************************************************************************-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">

                <div class="row">
                    <div class="col-lg-9 main-chart">
                        <table class="table" style="padding-top: 80px;">
                            <thead>
                            <tr>
                                <th>Section</th>
                                <th>Class</th>
                                <th>Room</th>
                                <th>Time</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>CS 174</td>
                                <td>MQH 232</td>
                                <td>6:00 - 7:15 AM</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>CS 151</td>
                                <td>MQH 232</td>
                                <td>6:00 - 7:15 AM</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>CS 157B</td>
                                <td>MQH 232</td>
                                <td>6:00 - 7:15 AM</td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table" style="padding-top: 80px;">
                            <thead>
                            <tr>
                                <th>Section</th>
                                <th>Class</th>
                                <th>Room</th>
                                <th>Time</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>CS 174</td>
                                <td>MQH 232</td>
                                <td>6:00 - 7:15 AM</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>CS 151</td>
                                <td>MQH 232</td>
                                <td>6:00 - 7:15 AM</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>CS 157B</td>
                                <td>MQH 232</td>
                                <td>6:00 - 7:15 AM</td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table" style="padding-top: 80px;">
                            <thead>
                            <tr>
                                <th>Section</th>
                                <th>Class</th>
                                <th>Room</th>
                                <th>Time</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>CS 174</td>
                                <td>MQH 232</td>
                                <td>6:00 - 7:15 AM</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>CS 151</td>
                                <td>MQH 232</td>
                                <td>6:00 - 7:15 AM</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>CS 157B</td>
                                <td>MQH 232</td>
                                <td>6:00 - 7:15 AM</td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table" style="padding-top: 80px;">
                            <thead>
                            <tr>
                                <th>Section</th>
                                <th>Class</th>
                                <th>Room</th>
                                <th>Time</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>CS 174</td>
                                <td>MQH 232</td>
                                <td>6:00 - 7:15 AM</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>CS 151</td>
                                <td>MQH 232</td>
                                <td>6:00 - 7:15 AM</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>CS 157B</td>
                                <td>MQH 232</td>
                                <td>6:00 - 7:15 AM</td>
                            </tr>
                            </tbody>
                        </table>
                    </div><!-- /col-lg-9 END SECTION MIDDLE -->


                    <!--**********************************************************************************************
                    *******************************R I G H T   S I D E B A R ***************************************
                    ***********************************************************************************************-->

                    <div class="col-lg-3 ds">
                        <!-- PUT WHATEVER YA WANT HERE -->
                        Mmmm right side <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        My fake plants died because I did not pretend to water them.
                        <br><br><br>
                    </div><!-- /col-lg-3 -->
                </div><!--/row -->
            </section>
        </section>
        <!--main content end-->

        <!--footer start-->
        <footer class="site-footer">
            <div class="text-center">
                (c) SJSU
            </div>
        </footer>
        <!--footer end-->
    </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    </body>
</html>
