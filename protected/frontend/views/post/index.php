<?php
/* @var $this UserController */
/* @var $videoProjects Project[] */
/* @var $topProjects Project[] */
?>

<div class="row">
    <div class="col-xs-12">
        <div class="page-header clearfix text-center">
            <h1>One small step for man. one giant leap for mankind</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-9">
        <h4>Filter by : 
            <div class="btn-group btn-group-lg">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    Mobile Projects&nbsp;<span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Hardware Projects</a></li>
                    <li><a href="#">Community Projects</a></li>
                    <li><a href="#" class="active">Mobile Projects</a></li>
                </ul>
            </div>
            <div class="btn-group btn-group-lg">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    Updated Last Month&nbsp;<span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Created This Year</a></li>
                    <li><a href="#">Created This Month</a></li>
                    <li><a href="#">Created This Week</a></li>
                    <li class="divider"></li>                    
                    <li><a href="#">Updated This Year</a></li>
                    <li><a class="active" href="#">Updated Last Month</a></li>
                    <li><a href="#">Updated This Week</a></li>
                </ul>
            </div>
        </h4>
    </div>
    <div class="col-xs-3 text-right">
        <h4>Order by : 
            <div class="btn-group btn-group-lg">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    Most Liked&nbsp;<span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a class="active" href="#">Most Liked</a></li>
                    <li><a href="#">Most Viewed</a></li>
                    <li><a href="#">Most Commented</a></li>
                </ul>
            </div>
        </h4>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-md-6">
        <div class="jumbotron">
            <div class="jumbotron-photo media-video">
                <div class="video-container">
                    <iframe id="ytplayer" type="text/html" width="640" height="360" src="<?php echo $videoProjects[0]->project_media_link; ?>?modestbranding=1&rel=0&theme=light" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="jumbotron-contents clearfix">
                <h1><?php echo $videoProjects[0]->project_name; ?></h1>
                <p><?php echo $videoProjects[0]->project_title; ?></p>
                <a class="btn btn-success pull-right" href="/project/<?php echo $videoProjects[0]->id; ?>">Read More</a>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6">
        <div class="jumbotron">
            <div class="jumbotron-photo media-video">
                <div class="video-container">
                    <iframe id="ytplayer" type="text/html" width="640" height="360" src="<?php echo $videoProjects[1]->project_media_link; ?>?modestbranding=1&rel=0&theme=light" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="jumbotron-contents clearfix">
                <h1><?php echo $videoProjects[1]->project_name; ?></h1>
                <p><?php echo $videoProjects[1]->project_title; ?></p>
                <a class="btn btn-success pull-right" href="/project/<?php echo $videoProjects[1]->id; ?>">Read More</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-md-3">
        <div class="thumbnail">
            <img class="img-rounded" src="http://10steps.sg/wp-content/uploads//2013/02/06-singapore-startup-logo-500.jpg" alt=""/>
            <div class="caption clearfix">
                <h2>Wello Alpha</h2>
                <p>No vix audiam mentitum laboramus, nam ea malorum signiferumque. Mollis vidisse regione sea ei.</p>
                <a class="btn btn-success pull-right" href="#">Read More</a>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-3">
        <div class="thumbnail">
            <img class="img-rounded" src="<?php echo $topProjects[2]->project_media_link; ?>" alt=""/>
            <div class="caption clearfix">
                <h2><?php echo $topProjects[2]->project_name; ?></h2>
                <p><?php echo $topProjects[2]->project_title; ?></p>
                <a class="btn btn-success pull-right" href="/project/<?php echo $topProjects[2]->id; ?>">Read More</a>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-3">
        <div class="thumbnail">
            <img class="img-rounded" src="<?php echo $topProjects[1]->project_media_link; ?>" alt=""/>
            <div class="caption clearfix">
                <h2><?php echo $topProjects[1]->project_name; ?></h2>
                <p><?php echo $topProjects[1]->project_title; ?></p>
                <a class="btn btn-success pull-right" href="/project/<?php echo $topProjects[1]->id; ?>">Read More</a>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-3">
        <div class="thumbnail">
            <img class="img-rounded" src="<?php echo $topProjects[0]->project_media_link; ?>" alt=""/>
            <div class="caption clearfix">
                <h2><?php echo $topProjects[0]->project_name; ?></h2>
                <p><?php echo $topProjects[0]->project_title; ?></p>
                <a class="btn btn-success pull-right" href="/project/<?php echo $topProjects[0]->id; ?>">Read More</a>
            </div>
        </div>
    </div>
</div>