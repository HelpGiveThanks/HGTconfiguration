
<?php

    use thebuggenie\core\framework;

?>
<nav class="tab_menu header_menu<?php if (framework\Context::isProjectContext()): ?> project_context<?php endif; ?>" id="main_menu">
    <ul>

    <?php //  222222222222222222222222222222222  ?>

<?php // Code in your forum and GitHub url's ?>
          <li><div><a class= "tab_menu header_menu" id="main_menu" href="http://YOURSITE.COM/YOURforum/" target="_blank">Forum</a></div></li>



<?php //  333333333333333333333333333333333  ?>

 <li><div><a class= "tab_menu header_menu" id="main_menu" href="https://github.com/YOURorganization/" target="_blank"> Journal</a></div></li>

          <li><div style="margin-right: -5px; "><a class= "tab_menu header_menu" id="main_menu" href="https://github.com/YOURorganization/" target="_blank"> Repository</a></div></li>




        <li><div style="margin-right: -5px; ">|</div></li>




          <li<?php if ($tbg_response->getTitle() == 'Overview'): ?> class="selected"<?php endif; ?>><div class="menuitem_container"><?php $link = ( \thebuggenie\core\framework\Context::getWebroot()) ?>
          <a href="<?php print $link; ?>wiki/Overview">Overview</div></li>









        <?php if (!framework\Settings::isSingleProjectTracker() ): ?>

          <li<?php  if ($tbg_response->getPage() == 'home'): ?> class="selected"<?php endif; ?>><div class="menuitem_container"><?php echo link_tag(make_url('home'), __('Projects')); ?></div></li>

                     <?php elseif (framework\Settings::isSingleProjectTracker()): ?>

                  <li><div class="menuitem_container"><?php echo link_tag(make_url('home'), __('Project')); ?></div></li>

    <?php endif; ?>







        <?php if (!framework\Settings::isSingleProjectTracker() && !framework\Context::isProjectContext()): ?>






            <?php elseif (framework\Context::isProjectContext()): ?>






                <?php $page = (in_array($tbg_response->getPage(), array('project_dashboard', 'project_scrum_sprint_details', 'project_timeline', 'project_team', 'project_roadmap', 'project_statistics', 'vcs_commitspage'))) ? $tbg_response->getPage() : 'project_dashboard'; ?>

                <li<?php if (in_array($tbg_response->getPage(), array('project_dashboard', 'project_scrum_sprint_details', 'project_timeline', 'project_team', 'project_roadmap', 'project_statistics', 'vcs_commitspage'))): ?>

                class="selected"<?php endif; ?>>

                    <div class="menuitem_container">
                        <?php // echo link_tag(make_url($page, array('project_key' => framework\Context::getCurrentProject()->getKey())),  tbg_get_pagename($tbg_response->getPage())); ?>
                        <?php echo javascript_link_tag(__('Dashboard'), array('class' => 'menu_dropdown')); ?>
                    </div>
                    <div id="project_information_menu" class="tab_menu_dropdown">
                        <?php include_component('project/projectinfolinks', array('submenu' => true)); ?>
                    </div>
                </li>
            <?php endif; ?>

            <?php // CHANGE DASHBOARD TO MY DASHBOARD SO USER CAN SEE DIFFERENCE BETWEEN THEIR DASHBOARD BUTTON AND PROJECT DASHBOARD BUTTONS ON BUG GENIE FRONTPAGE ?>

        <?php if (!$tbg_user->isThisGuest() && !framework\Settings::isSingleProjectTracker() && !framework\Context::isProjectContext()): ?>
                <li<?php if ($tbg_response->getPage() == 'dashboard'): ?> class="selected"<?php endif; ?>><div><?php echo link_tag(make_url('dashboard'), __('My Dashboard')); ?></div></li>
				<?php endif; ?>



        <?php if (framework\Context::isProjectContext() && $tbg_user->canSearchForIssues()): ?>

            <li<?php if (in_array($tbg_response->getPage(), array('project_issues', 'viewissue'))): ?> class="selected"<?php endif; ?>>
                <div class="menuitem_container">
                    <?php // echo link_tag(make_url('project_issues', array('project_key' => framework\Context::getCurrentProject()->getKey())), image_tag('tab_search.png') . __('Issues')); ?>
                    <?php if (framework\Context::isProjectContext()): ?>
                        <?php echo javascript_link_tag(__('Records'), array('class' => 'menu_dropdown'), array('onmouseover' => "")); ?>
                    <?php endif; ?>
                </div>
                <div id="issues_menu" class="tab_menu_dropdown">
                    <?php echo link_tag(make_url('project_open_issues', array('project_key' => framework\Context::getCurrentProject()->getKey())),  __('Open records for this project')); ?>
                    <?php echo link_tag(make_url('project_closed_issues', array('project_key' => framework\Context::getCurrentProject()->getKey())),  __('Closed records for this project')); ?>
                    <?php echo link_tag(make_url('project_wishlist_issues', array('project_key' => framework\Context::getCurrentProject()->getKey())),  __('Wishlist for this project')); ?>
                    <?php echo link_tag(make_url('project_milestone_todo_list', array('project_key' => framework\Context::getCurrentProject()->getKey())),  __('Milestone todo-list for this project')); ?>
                    <?php echo link_tag(make_url('project_most_voted_issues', array('project_key' => framework\Context::getCurrentProject()->getKey())),  __('Most voted for records')); ?>
                    <?php echo link_tag(make_url('project_month_issues', array('project_key' => framework\Context::getCurrentProject()->getKey())),  __('Records created this month')); ?>
                    <?php echo link_tag(make_url('project_last_issues', array('project_key' => framework\Context::getCurrentProject()->getKey(), 'units' => 30, 'time_unit' => 'days')),  __('Records created last 30 days')); ?>
                    <div class="header"><?php echo __('Recently watched records'); ?></div>
                    <?php if (array_key_exists('viewissue_list', $_SESSION) && is_array($_SESSION['viewissue_list'])): ?>
                        <?php foreach ($_SESSION['viewissue_list'] as $k => $i_id): ?>
                            <?php
                            try
                            {
                                $an_issue = \thebuggenie\core\entities\tables\Issues::getTable()->getIssueById($i_id);
                                if (!$an_issue instanceof \thebuggenie\core\entities\Issue)
                                {
                                    unset($_SESSION['viewissue_list'][$k]);
                                    continue;
                                }
                            }
                            catch (\Exception $e)
                            {
                                unset($_SESSION['viewissue_list'][$k]);
                            }
                            echo link_tag(make_url('viewissue', array('project_key' => $an_issue->getProject()->getKey(), 'issue_no' => $an_issue->getFormattedIssueNo())), $an_issue->getFormattedTitle(true, false), array('title' => $an_issue->getFormattedTitle(true, true)));
                            ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <?php if (!isset($an_issue)): ?>
                        <a href="javascript:void(0);"><?php echo __('No recent records'); ?></a>
                    <?php endif; ?>
                </div>
            </li>
        <?php endif; ?>



        <?php if (framework\Context::isProjectContext() && !framework\Context::getCurrentProject()->isArchived() && !framework\Context::getCurrentProject()->isLocked() && ($tbg_user->canReportIssues() || $tbg_user->canReportIssues(framework\Context::getCurrentProject()->getID()))): ?>
            <li>
                <div class="menuitem_container">
                    <?php echo javascript_link_tag( __('New Record'), array('onclick' => "TBG.Issues.Add('" . make_url('get_partial_for_backdrop', array('key' => 'reportissue', 'project_id' => framework\Context::getCurrentProject()->getId())) . "');", 'class' => 'main_menu', 'id' => 'reportissue_button')); ?>
                </div>
            </li>
        <?php endif; ?>


        <?php if (!framework\Context::isProjectContext() && ($tbg_user->hasPageAccess('teamlist') || count($tbg_user->getTeams())) && !is_null(\thebuggenie\core\entities\tables\Teams::getTable()->getAll())): ?>
            <li<?php if ($tbg_response->getPage() == 'team'): ?> class="selected"<?php endif; ?>>
                <div class="menuitem_container">
                    <?php echo link_tag('javascript:void(0)',  __('Teams'), array('class' => 'menu_dropdown')); ?>
                    <?php // echo javascript_link_tag(image_tag('tabmenu_dropdown.png', array('class' => 'menu_dropdown')), array('onmouseover' => "")); ?>
                </div>
                <div id="team_menu" class="tab_menu_dropdown">
                    <?php foreach (\thebuggenie\core\entities\Team::getAll() as $team): ?>
                        <?php if (!$team->hasAccess()) continue; ?>
                        <?php echo link_tag(make_url('team_dashboard', array('team_id' => $team->getID())), $team->getName()); ?>
                    <?php endforeach; ?>
                </div>
            </li>
        <?php endif; ?>
        <?php if (!framework\Context::isProjectContext() && $tbg_user->hasPageAccess('clientlist') && count($tbg_user->getClients()) && !is_null(\thebuggenie\core\entities\Client::getAll())): ?>
            <li<?php if ($tbg_response->getPage() == 'client'): ?> class="selected"<?php endif; ?>>
                <div class="menuitem_container">
                    <?php // echo link_tag('javascript:void(0)', image_tag('tab_clients.png') . __('Clients'), array('class' => 'not_clickable')); ?>
                    <?php echo javascript_link_tag(__('Clients'), array('class' => 'menu_dropdown'), array('onmouseover' => "")); ?>
                </div>
                <div id="client_menu" class="tab_menu_dropdown">
                    <?php foreach (\thebuggenie\core\entities\Client::getAll() as $client): ?>
                        <?php if (!$client->hasAccess()) continue; ?>
                        <?php echo link_tag(make_url('client_dashboard', array('client_id' => $client->getID())),  $client->getName()); ?>
                    <?php endforeach; ?>
                </div>
            </li>
        <?php endif; ?>
        <?php framework\Event::createNew('core', 'templates/headermainmenu::projectmenulinks', framework\Context::getCurrentProject())->trigger(); ?>
    </ul>

<?php framework\Event::createNew('core', 'before_header_userinfo')->trigger(); ?>
</nav>
