<!-- Profile Header -->
<div class="row profile-header">
    <div class="container">
        <div class="col-md-3 col-sm-4">
            <?php
            $imgSource = '';
            if ($user->user_thumbnail == null) {
                $imgSource = Yii::app()->baseUrl . '/lib/img/unknown_profile.jpg';
            } else {
                $imgSource = Yii::app()->baseUrl . '/user/' . $user->id . '/thumbnail';
            }
            echo '<img class="img-thumbnail" src="' . $imgSource . '">';
            ?>
        </div>
        <div class="col-md-9 col-sm-8">
            <div class="row">
                <div class="page-header">
                    <h1>
                        <span class="text-capitalized"><?php echo $user->first_name . ' ' . $user->last_name; ?></span>
                        <small> <?php echo $user->user_title; ?></small>
                    </h1>
                </div>
            </div>
            <!-- Sub Menu -->
            <div class="row sub-menu">
                <div class="clear-fix">
                    <div class="col-md-7 col-sm-12">
                        <ul class="nav nav-pills pull-left">
                            <li class="active"><a href="#"><i class="fa fa-user"></i>&nbsp;Information</a></li>
                            <li><a href="#"><i class="fa fa-lightbulb-o"></i>&nbsp;Projects&nbsp;<span class="label label-warning">42</span></a></li>
                            <!--<li><a href="#"><i class="fa fa-book"></i>&nbsp;Blog</a></li>-->   
                        </ul>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <ul class="list-inline pull-right">
                            <li class="name"><b>1253</b>&nbsp;<small>Page Views</small></li>
                            <li class="name"><b>100</b>&nbsp;<small>Followers</small><li>
                            <li>
                                <a class="btn btn-success"><i class="fa fa-plus"></i>&nbsp;Follow</a>        
                            </li>
                        </ul>  
                    </div>
                </div>
            </div>       
        </div>
    </div>
</div>

<!-- Content -->
<div class="row">
    <div class="container">
        <div class="col-md-8" id="personal-information-section">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Personal Information</div>
                        <div class="panel-body">
                            <p>
                                <span class="header">Full Name :</span>
                                <span class="content text-capitalized"><?php echo $user->first_name . ' ' . $user->middle_name . ' ' . $user->last_name; ?></span>
                            </p>
                            <p>
                                <span class="header">Gender :</span>
                                <span class="content"><?php echo ($user->user_gender == 'm' ? 'Male' : 'Female'); ?></span>
                            </p>
                            <p>
                                <?php
                                $current_date = date_create(date('Y-m-d'));
                                $user_age = date_diff($current_date, date_create($user->user_birthdate));
                                ?>
                                <span class="header">Age :</span>
                                <span class="content"><?php echo $user_age->y; ?> y/o</span>
                            </p>
                            <p>
                                <span class="header">Relationship Status :</span>
                                <span class="content"><?php echo $user->user_rel_status ?></span>
                            </p>
                            <p>
                                <span class="header">City :</span>
                                <span class="content">
                                    Tel-Aviv, Israel&nbsp;
                                    <a>
                                        <i class="circular link map marker icon"></i>
                                    </a>
                                </span>
                            </p>
                            <div class="divider"></div>
                            <div class="content">
                                <div class="">
                                    <a href="#" class="label label-default">Programmer</a>
                                    <a href="#" class="label label-default">MBA</a>
                                    <a href="#" class="label label-default">Engineer</a>
                                    <a href="#" class="label">Recanati TAU</a>
                                    <a href="#" class="label label-image">
                                        <img src="http://213.174.72.41:7001/wls_utc/images/oracle-logo-small.png">
                                        <span class="content">Oracle Israel</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Professional Information</div>
                        <div class="panel-body">
                            <p>
                            <div class="header">Work Experience :</div>
                            <ul class="sub list">
                                <li>
                                    <span class="sub header">2010-Today</span>
                                    <span class="content">Pellentesque metus dui, consectetur vitae odio iaculis.</span>
                                </li>
                                <li>
                                    <span class="sub header">2003-2010</span>
                                    <span class="content">Morbi justo orci, eleifend vitae egestas eu.</span>
                                </li>
                                <li>
                                    <span class="sub header">2000-2003</span>
                                    <span class="content">Curabitur a quam sed eros sagittis vulputate.</span>
                                </li>
                            </ul>
                            </p>
                            <div class="divider"></div>
                            <p>
                            <div class="header">Education :</div>
                            <ul class="sub list">
                                <li>
                                    <span class="sub header">MBA in Business Management</span>
                                    <span class="content"> - Recanati Business School at Tel-Aviv University, Israel.</span>
                                </li>
                                <li>
                                    <span class="sub header">Bsc in Software Engineering</span>
                                    <span class="content"> Afeka College of Engineering in Tel-Aviv, Israel.</span>
                                </li>
                            </ul>
                            </p>
                            <div class="divider"></div>
                            <p>
                            <div class="header">Conferences & Awards :</div>
                            <ul class="sub list">
                                <li>
                                    <span class="sub header">Vivamus tincidunt odio 2008</span>
                                    <span class="content"> - Tel-Aviv, Israel.</span>
                                </li>
                                <li>
                                    <span class="sub header">Nullam viverra arcu ut risus 2007</span>
                                    <span class="content"> - Tokyo, Japan.</span>
                                </li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Dreams</div>
                        <div class="panel-body">
                            <ul class="sub list text-justify">
                                <li>Phasellus vitae sagittis arcu, in tristique urna.</li>
                                <li>Morbi justo orci, eleifend vitae egestas eu, lobortis varius mauris. Nam vitae blandit elit.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ($user->user_note != null || strlen($user->user_note) != 0) { ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Personal Note</div>
                            <div class="panel-body">
                                <p class="text-justify"><?php echo $user->user_note; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div> <!-- div.medium-8.columns -->
        <div class="col-md-4">
            <div class="panel panel-deafult">
                <div class="panel-body">
                    <div class="header">Phone Number</div>
                    <div class="content">+912-052-3274-129</div>
                    <p/>
                    <div class="header">Secondary Phone Number</div>
                    <div class="text-muted content">N/A</div>
                    <p/>
                    <div class="header">Fax Number</div>
                    <div class="text-muted content">N/A</div>
                    <p/>
                    <div class="header">Email Address</div>
                    <div class="content">lotan.hagbi@gmail.com</div>
                    <p/>
                    <div class="header">Website</div>
                    <div class="content"><a href="http://www.google.com">http://www.google.com</a></div>
                    <p/>
                    <div class="divider"></div>
                    <div class="text-center">
                        <ul class="list-inline">
                            <li><a class="link-default" href=""><i class="fa fa-facebook fa-circular"></i></a></li>
                            <li><a class="link-default" href=""><i class="fa fa-github fa-circular"></i></a></li>
                            <li><a class="link-default" href=""><i class="fa fa-linkedin fa-circular"></i></a></li>
                            <li><a class="link-default" href=""><i class="fa fa-google-plus fa-circular"></i></a></li>
                            <li><a class="link-default" href=""><i class="fa fa-skype fa-circular"></i></a></li>
                            <li><a class="link-default" href=""><i class="fa fa-twitter fa-circular"></i></a></li>
                        </ul>
                    </div>
                </div>       
            </div>
        </div>
    </div> <!-- div.col-md-4 -->
</div> <!-- div.row -->