<!-- Profile Header -->
<div class="row project-header">
    <div class="container">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-md-push-3 text-center media-video">
                    <?php
                    if ($project->projectMediaType->type == 'img') {
                        ?>
                        <img src='<?php echo $project->project_media_link; ?>' alt=""/>
                        <?php
                    } else if ($project->projectMediaType->type == 'video') {
                        ?>
                        <div class="video-container">
                            <iframe id="ytplayer" type="text/html" width="640" height="360" src="<?php echo $project->project_media_link; ?>?modestbranding=1&rel=0&theme=light" frameborder="0" allowfullscreen></iframe>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-header text-center">
                        <h1>
                            <span><?php echo $project->project_name; ?></span>
                            <small class=""><?php echo $project->project_title; ?></small>
                        </h1>
                        <ul class="list-inline">
                            <li class="name"><b>95</b>&nbsp;<small>Page Views</small></li>
                            <li class="name"><b>28</b>&nbsp;<small>Loved</small><li>
                            <li>
                                <a class="btn btn-icon btn-danger"><i class="fa fa-heart"></i></a>        
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
        <div class="col-md-8 col-xs-12">
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel">
                        <ul id="project-information" class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#project-information-description" data-toggle="tab">Description</a></li>
                            <li class=""><a href="#project-information-basic" data-toggle="tab">Basic Elements</a></li>
                            <!--                        <li class="dropdown">
                                                            <a href="#" id="project-information-advance-dropdown" class="dropdown-toggle" data-toggle="dropdown">Advance <b class="caret"></b></a>
                                                            <ul class="dropdown-menu" role="menu" aria-labelledby="project-information-advance-dropdown">
                                                                <li class=""><a href="#project-information-advance-personas" tabindex="-1" data-toggle="tab">Personas</a></li>
                                                            </ul>
                                                        </li>-->
                        </ul>
                        <div id="project-information-content" class="tab-content">
                            <div class="tab-pane fade active in" id="project-information-description">
                                <p><?php echo $project->project_description; ?></p>
                                <div class="divider"></div>
                                <div class="content">
                                    <div class="">
                                        <a href="#" class="label label-default">Dissentiet</a>
                                        <a href="#" class="label label-default">Shorts</a>
                                        <a href="#" class="label label-default">Essent</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="project-information-basic">
                                <table class="table">
                                    <tr>
                                        <th>What is it?</th>
                                        <?php
                                        if ($project->project_whatisit === null) {
                                            echo '<td class="text-muted">N/A</td>';
                                        } else {
                                            echo '<td>' . $project->project_whatisit . '</td>';
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <th>Users</th>    
                                        <?php
                                        if ($project->project_users === null) {
                                            echo '<td class="text-muted">N/A</td>';
                                        } else {
                                            echo '<td>' . $project->project_users . '</td>';
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <th>Needs</th>
                                        <?php
                                        if ($project->project_needs === null) {
                                            echo '<td class="text-muted">N/A</td>';
                                        } else {
                                            echo '<td>' . $project->project_needs . '</td>';
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <th>Insight</th>
                                        <?php
                                        if ($project->project_insight === null) {
                                            echo '<td class="text-muted">N/A</td>';
                                        } else {
                                            echo '<td>' . $project->project_insight . '</td>';
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <th>Opportunity</th>
                                        <?php
                                        if ($project->project_opportunity === null) {
                                            echo '<td class="text-muted">N/A</td>';
                                        } else {
                                            echo '<td>' . $project->project_opportunity . '</td>';
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <th>Competition</th>
                                        <?php
                                        if ($project->project_competition === null) {
                                            echo '<td class="text-muted">N/A</td>';
                                        } else {
                                            echo '<td>' . $project->project_competition . '</td>';
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <th>Value Creation</th>
                                        <?php
                                        if ($project->project_value_creation === null) {
                                            echo '<td class="text-muted">N/A</td>';
                                        } else {
                                            echo '<td>' . $project->project_value_creation . '</td>';
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <th>Feasibility</th>
                                        <?php
                                        if ($project->project_feasibility === null) {
                                            echo '<td class="text-muted">N/A</td>';
                                        } else {
                                            echo '<td>' . $project->project_feasibility . '</td>';
                                        }
                                        ?>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Get Involve</div>
                        <ul class="list-group">
                            <li class="list-group-item clearfix">
                                <b>Graphic Designer - </b>Web design and logo prototype
                                <a class="btn btn-primary pull-right">Involve</a>
                            </li>
                            <li class="list-group-item clearfix">
                                <b>PHP Developer - </b>Server side development
                                <a class="btn btn-primary pull-right">Involve</a>
                            </li>
                            <li class="list-group-item clearfix">
                                <b>Product Manager</b>
                                <a class="btn btn-primary pull-right">Involve</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--            <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Legal</div>
                                    <div class="panel-body">
                                        <p>
                                            Phasellus vitae sagittis arcu, in tristique urna.Morbi justo orci, eleifend vitae egestas eu, lobortis varius mauris. Nam vitae blandit elit.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>-->
        </div> <!-- div.medium-8.columns -->
        <div class="col-md-4">
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-deafult project-status">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <span class="header">Owners :</span>

                                    <?php
                                    $rowNum = 0;
                                    $html = '';
                                    foreach ($project->projectOwners as $owner) {
                                        if ($rowNum % 2 == 0) {
                                            $html .= '<div class="row">';
                                        }

                                        $html .= '<div class="col-xs-6"><span class="content text-capitalized"><a href="/user/' . $owner->id .
                                                '"><img class="img-circle user-thumbnile" src="/user/' . $owner->id .
                                                '/thumbnail"/>&nbsp;' . $owner->first_name . ' ' . $owner->last_name . '</a></span></div>';

                                        if ($rowNum % 2 != 0) {
                                            $html .= '</div>';
                                        }
                                        $rowNum++;
                                    }
                                    echo $html;
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6"><i class="fa fa-calendar"></i>&nbsp;<?php echo date('d/m/Y', strtotime($project->project_publish_date)); ?></div>
                                <div class="col-xs-6"><i class="fa fa-clock-o"></i>&nbsp;<?php echo date('d/m/Y', strtotime($project->project_lastupdate)); ?></div>
                            </div>
                            <div class="row project-status-bar">
                                <div class="col-xs-12 project-status-bar-body">
                                    <div class="input-control radio has-success">
                                        <label>
                                            <input type="radio" name="project-status-bar">
                                            <span class="check"></span>
                                        </label>
                                    </div>
                                    <div class="input-control radio has-success">
                                        <label>
                                            <input type="radio" name="project-status-bar">
                                            <span class="check"></span>
                                        </label>
                                    </div>
                                    <div class="input-control radio has-success">
                                        <label>
                                            <input type="radio" name="project-status-bar">
                                            <span class="check"></span>
                                        </label>
                                    </div>
                                    <div class="input-control radio">
                                        <label>
                                            <input type="radio" name="project-status-bar">
                                            <span class="check"></span>
                                        </label>
                                    </div>
                                    <div class="input-control radio">
                                        <label>
                                            <input type="radio" name="project-status-bar">
                                            <span class="check"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-deafult">
                        <div class="panel-body">
                            <h4>Give a Feedback</h4>
                            <p>Feel free to give any feedback to the owner.</p>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label>Message :</label>
                                    <textarea class="form-control" rows="8"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 clear-fix">
                                    <button class="btn btn-success">Send</button>
                                    <button class="btn pull-right">More</button>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="btn-group btn-group-justified">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-default"><i class="fa fa-dashboard"></i>&nbsp;Dashboard</button>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-default"><i class="fa fa-flag"></i>&nbsp;Report</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- div.col-md-4 -->
</div> <!-- div.row -->