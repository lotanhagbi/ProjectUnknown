<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Project Unknown</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li class="divider"></li>
                <li>
                    <a>
                        <i class="fa fa-th"></i>
                        <!--<span class="hide-for-large-up">Feed</span>-->
                    </a>
                </li>
                <li>
                    <a>
                        <i class="fa fa-envelope"></i>
                        <!--<span class="hide-for-large-up">Inbox</span>-->
                        <div class="label label-danger">22</div>
                    </a>
                </li>
                <li>
                    <a>
                        <i class="fa fa-globe"></i>
                        <!--<span class="hide-for-large-up">Notification</span>-->
                        <div class="label label-danger">3</div>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-search search-only">
                        <i class="search-icon fa fa-search"></i>
                        <input type="text" class="form-control search-query" placeholder="Search">
                    </div>
                </form>
                <li class="divider"></li>
                <?php if (Yii::app()->user->isGuest) { ?>
                    <li><button class="btn btn-primary navbar-btn" onclick="window.location.href='/user/login'">Login</button></li>
                    <li><span class="navbar-text navbar-login-text">OR</span></li>
                    <li><button class="btn btn-success navbar-btn" onclick="window.location.href='/user/register'">Register</button></li>
                <?php } else { ?> 
                    <li>
                        <a class="text-capitalized" href="\user\<?php echo Yii::app()->user->id; ?>">
                           <i class="fa fa-user"></i>&nbsp;<?php echo Yii::app()->user->first_name; ?>
                        </a>
                    </li>
                <?php } ?>
                <li class="divider"></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-gear"></i>&nbsp;Settings</a></li>
                        <li><a href="#"><i class="fa fa-question-circle"></i>&nbsp;Help</a></li>
                        <li><a href="/user/logout"><i class="fa fa-power-off"></i>&nbsp;Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>