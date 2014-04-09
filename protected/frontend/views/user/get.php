<!-- Profile Header -->
<div class="row profile-header">
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
                                <span class="content text-capitalized"><?php echo $user->userRelStatus->name ?></span>
                            </p>
<!--                            <p>
                                <span class="header">Location :</span>
                                <span class="content">
                                    Tel-Aviv, Israel&nbsp;
                                    <a>
                                        <i class="fa fa-map-marker fa-circular"></i>
                                    </a>
                                </span>
                            </p>-->
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

            <?php if ($user->user_note != null || strlen($user->user_note) != 0) { ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">About Me</div>
                            <div class="panel-body">
                                <p class="text-justify"><?php echo $user->user_note; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Professional Information</div>
                        <div class="panel-body">

                            <?php
                            if ($user->usersWorks != null) {
                                $userWork = $user->usersWorks;
                                usort($userWork, function ($a, $b) {
                                    return $a->work_begin < $b->work_begin;
                                });
                                ?>
                                <div class = "header">Work Experience :</div>
                                <ul>
                                    <?php
                                    foreach ($userWork as $value) {
                                        $html = '<li><span class="header">' . $value->work_title . '</span> - <span>' . $value->work_description . '</span>';
                                        $html .= '<div class="content text-muted">' . $value->work_begin . ' - ';

                                        if ($value->work_end == null) {
                                            $html .= 'Today';
                                        } else {
                                            $html .= $value->work_end;
                                        }

                                        $html .= '</div></li>';
                                        echo $html;
                                    }
                                    ?>
                                </ul>
                                <div class="divider"></div>
                            <?php } ?>
                                
                            <?php
                            if ($user->userEducations != null) {
                                $userEducation = $user->userEducations;
                                usort($userEducation, function ($a, $b) {
                                    return $a->education_begin < $b->education_begin;
                                });
                                ?>
                                <div class = "header">Education :</div>
                                <ul>
                                    <?php
                                    foreach ($userEducation as $value) {
                                        $html = '<li><div class="header">' . $value->education_description . '</div>';
                                        $html .= '<div class="content text-muted">' . $value->education_begin . ' - ';

                                        if ($value->education_end == null) {
                                            $html .= 'Today';
                                        } else {
                                            $html .= $value->education_end;
                                        }

                                        $html .= '</div></li>';
                                        echo $html;
                                    }
                                    ?>
                                </ul>
                                <div class="divider"></div>
                            <?php } ?>
                            
                             <?php
                            if ($user->usersSkills != null) { ?>
                                <div class = "header">Skills :</div>
                                <ul>
                                    <?php
                                    foreach ($user->usersSkills as $value) {
                                        $html = '<li><span class="header">' . $value->skill_title . '</span> - <span class="content">' . $value->skill_description . '</span>';
                                        echo $html;
                                    }
                                    ?>
                                </ul>
                            <?php } ?>    
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- div.medium-8.columns -->

        <div class="col-md-4">
            <div class="panel panel-deafult">
                <div class="panel-body">
                    <div class="header">Phone Number</div>
                    <?php
                    if ($user->user_phone != null) {
                        echo '<div class="content">' . $user->user_phone . '</div>';
                    } else {
                        echo '<div class="content text-muted">N\A</div>';
                    }
                    ?>
                    <p/>
                    <?php if ($user->user_sec_phone != null) { ?>
                        <div class = "header">Secondary Phone Number</div>
                        <div class = "content">$user->user_sec_phone</div>
                    <?php } ?>
                    <p/>
                    <div class="header">Email Address</div>
                    <div class="content"><?php echo $user->user_email; ?></div>
                    <p/>
                    <div class="header">Website</div>
                    <?php
                    if ($user->user_website != null) {
//                        echo 'TEST : '.$user->user_website.'->'.stripos($user->user_website, 'http://');
//                        if (stripos($user->user_website, 'http://') != 0){
//                            $user->user_website = 'http://'.$user->user_website;
//                        }
                        $user->user_website = Utils::fixUrl($user->user_website);

                        echo '<div class="content"><a href="' . $user->user_website, '">' . $user->user_website . '</a></div>';
                    } else {
                        echo '<div class="content text-muted">N\A</div>';
                    }
                    ?>
                    <p/>
                    <!--<div class="divider"></div>-->
                    <!--                    <div class="text-center">
                                            <ul class="list-inline">
                                                <li><a class="link-default" href=""><i class="fa fa-facebook fa-circular"></i></a></li>
                                                <li><a class="link-default" href=""><i class="fa fa-github fa-circular"></i></a></li>
                                                <li><a class="link-default" href=""><i class="fa fa-linkedin fa-circular"></i></a></li>
                                                <li><a class="link-default" href=""><i class="fa fa-google-plus fa-circular"></i></a></li>
                                                <li><a class="link-default" href=""><i class="fa fa-skype fa-circular"></i></a></li>
                                                <li><a class="link-default" href=""><i class="fa fa-twitter fa-circular"></i></a></li>
                                            </ul>
                                        </div>-->
                </div>       
            </div>
        </div>
    </div> <!-- div.col-md-4 -->
</div> <!-- div.row -->