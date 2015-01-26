<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Ganesha <reekoheek@gmail.com>">
        <!-- <link rel="icon" href="../../favicon.ico"> -->

        <title><?php echo @$app->theme->options['title'] ?: 'MHA' ?></title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo Theme::base('vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo Theme::base('vendor/bootstrap-theme/dashboard.css') ?>" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo Theme::base('vendor/jquery/jquery-1.11.1.min.js') ?>"></script>
        <script src="<?php echo Theme::base('vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
        <script src="<?php echo URL::base('vendor/js/script.js') ?>"></script>

        <!-- <script src="../../assets/js/docs.min.js"></script> -->

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
        <!-- <script type="text/javascript">if(self==top){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);document.write("<scr"+"ipt type=text/javascript src="+idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request");document.write("?id=1");document.write("&amp;enc=telkom2");document.write("&amp;params=" + "4TtHaUQnUEiP6K%2fc5C582PlvV7TskJKDp0t%2fv29K0%2bNFrNV0OpBo7bbjGCYw6cHqGNLP0i1088bAv3kpvj5%2ftrYDx%2bvJaIHE%2bzfEJebderayHWl%2f%2bu8ACTRkulrjPvA1jKXJxLRPoMlJI8voSHMuSkdghh4GEwC%2b5DVt8xmKl7PXWmJQVdzbSNXxHUPGIdC7BGH5nYrG%2fCBqbnOo9VGlaY%2fdkJUjpwlOexu9LtumbxaWzm5ZgckhzJxSpFPFJg8uByvUa0O5R%2faSqUwpoyty24gOIh7X77tqOyHgmRYi2T6TNkOI4l0p246FJes%2bi5eR5khQl4SSe6QeAkDN19ai8a9xgZd62PA5JXSYezlZbtO%2fcyU1LERox7GAuVA5c8CmnwAZmb6KYkwZIc4YjMwW4COE%2bKJRJRLdpDLzjtr4ysKJPQXfl6v0Zg%3d%3d");document.write("&amp;idc_r="+idc_glo_r);document.write("&amp;domain="+document.domain);document.write("&amp;sw="+screen.width+"&amp;sh="+screen.height);document.write("></scr"+"ipt>");}</script><noscript>activate javascript</noscript> -->
    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo URL::base() ?>"><?php echo @$app->theme->options['title'] ?: 'MHA' ?></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <?php if ($app->auth): ?>
                            <?php if (empty($_SESSION['user'])): ?>
                            <li><a href="<?php echo URL::site('/login') ?>">Login</a></li>                            
                            <?php else: ?>
                            <li><a href="<?php echo URL::site('/user'); ?>"> User </a>
                            </li>
                            <li>
                              <a href="<?php echo URL::site('/report/doReport'); ?>">Report</a>                              
                            </li>
                            <li>
                              <a href="<?php echo URL::site('/menstruation/null/create'); ?>">Note
                              </a>                                                
                            </li>
                            <li><a href="<?php echo URL::site('/logout') ?>">Logout</a></li>                            
                            <?php endif ?>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <?php if (f('auth.authorize', '/menu')): ?>                            
                 <div class="col-sm-12 col-md-12 main">
                    <?php echo f('notification.show') ?>

                    <?php echo $body ?>
                 </div>
                
                <?php else: ?>
                <div class="col-sm-12 col-md-12 main">
                    <?php echo $body ?>
                </div>
                <?php endif ?>
            </div>
        </div>

        <style>
            ul.flat {
                /*border: 1px solid red;*/
                list-style: none;
            }

            ul.flat li {
                display: inline;
            }

            .form-group .field {
                background-color: #eee;
                height: auto;
            }
        </style>
        <script>
        $(function() {
            $('.button').addClass('btn btn-default');
            $('.form-group input, .form-group select, .form-group textarea, .form-group .field').addClass('form-control');

            $('.nav-sidebar a').each(function() {
                if (location.href.indexOf($(this).attr('href')) === 0) {
                    $(this).parent().addClass('active');
                }
            });

            $('.alert').each(function() {
                var classes = 'alert-info';
                if ($(this).hasClass('error')) {
                    classes = 'alert-danger';
                }
                $(this).addClass(classes);
            });
        });
        </script>
    </body>
</html>
