<!DOCTYPE html>
<html>
<head>
    <title><?php echo @$app->theme->options['title'] ?: 'MHA' ?></title>
    <link href="<?php echo Theme::base('css/naked.css') ?>" rel="stylesheet">
    <link href="<?php echo Theme::base('css/naked.min.css') ?>" rel="stylesheet">
    <link href="<?php echo Theme::base('css/docs.css') ?>" rel="stylesheet">
</head>
<body>
    <?php //if (f('auth.authorize', '/menu')): ?>

    <nav class="navbar-menu">
        <div class="wrapper">
            <h1><a href="<?php echo URL::site()?>">MHA</a></h1>
            <section class="topbar pull-right">
                <ul class="menu">
                        <li>
                          <a href="<?php echo URL::site(); ?>">Home
                          </a>                                                
                        </li>
                        <li>
                          <a href="<?php echo URL::site('/menstruation/search'); ?>">Input Data
                          </a>                                                
                        </li>
                        <li><a href="<?php echo URL::site('/logout') ?>">Logout</a></li>                            
                </ul>
            </section>
        </div>
    </nav>
    <?php //endif ?>

    <?php echo $body; ?>
</body>
</html>