<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Circle Games | Coming Soon</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{asset('metronic/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('metronic/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('metronic/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('metronic/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{asset('metronic/global/css/components-rounded.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{asset('metronic/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{asset('metronic/pages/css/coming-soon.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
    <style>
        div.backstretch {
            -webkit-filter: blur(3px);
            -moz-filter: blur(3px);
            -o-filter: blur(3px);
            -ms-filter: blur(3px);
            filter: blur(3px);
        }
    </style>
</head>
<!-- END HEAD -->

<body class="">
    <div class="container">
        <div class="row">
            <div class="col-md-12 coming-soon-header">
                <a class="brand" href="index.html">
                    <!-- <img src="{{asset('metronic/pages/img/logo-big.png')}}" alt="logo" /> </a> -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 coming-soon-content">
                <h1>Coming Soon!</h1>
                <p> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi vehicula sem ut volutpat. Ut non libero magna fusce condimentum eleifend
                    enim a feugiat. </p>
                <br>
                <!-- <form class="form-inline" action="#">
                    <div class="input-group input-group-lg input-large">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn green" type="button"> Subscribe </button>
                        </span>
                    </div>
                </form>
                <ul class="social-icons margin-top-20">
                    <li>
                        <a href="javascript:;" data-original-title="Feed" class="rss"> </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-original-title="Facebook" class="facebook"> </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-original-title="Twitter" class="twitter"> </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-original-title="Goole Plus" class="googleplus"> </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-original-title="Pinterest" class="pintrest"> </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-original-title="Linkedin" class="linkedin"> </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-original-title="Vimeo" class="vimeo"> </a>
                    </li>
                </ul> -->
            </div>
            <div class="col-md-6 coming-soon-countdown">
                <div id="defaultCountdown"> </div>
            </div>
        </div>
        <!--/end row-->
        <div class="row">
            <div class="col-md-12 coming-soon-footer"> 2022 &copy; Circle Games. </div>
        </div>
    </div>
    <!--[if lt IE 9]>
<script src="{{asset('metronic/global/plugins/respond.min.js')}}"></script>
<script src="{{asset('metronic/global/plugins/excanvas.min.js')}}"></script> 
<![endif]-->
    <!-- BEGIN CORE PLUGINS -->
    <script src="{{asset('metronic/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('metronic/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('metronic/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('metronic/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('metronic/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('metronic/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('metronic/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{asset('metronic/global/plugins/countdown/jquery.countdown.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('metronic/global/plugins/backstretch/jquery.backstretch.js')}}" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="{{asset('metronic/global/scripts/app.min.js')}}" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <!--<script src="{{asset('metronic/pages/scripts/coming-soon.js')}}" type="text/javascript"></script>-->
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <!-- END THEME LAYOUT SCRIPTS -->
    <script type="text/javascript">
        $(document).ready(function() {
            var austDay = new Date();
            austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
            $('#defaultCountdown').countdown({
                until: austDay
            });
            $('#year').text(austDay.getFullYear());

            $.backstretch([
                "{{asset('metronic/pages/media/bg/AOV.jpeg')}}",
                "{{asset('metronic/pages/media/bg/COD.jpeg')}}",
                "{{asset('metronic/pages/media/bg/MOBILE_LEGENDS.jpeg')}}",
                "{{asset('metronic/pages/media/bg/PUBG.jpeg')}}"
            ], {
                fade: 1000,
                duration: 10000
            });
        });
    </script>
</body>

</html>