<?php if (!defined('APPLICATION')) exit();
$Session = Gdn::Session();
$User = $Session->User;
$CssClass = '';
if ($this->CssClass)
   $CssClass .= ' '.$this->CssClass;

$DashboardCount = 0;
// Spam & Moderation Queue
if ($Session->CheckPermission('Garden.Settings.Manage') || $Session->CheckPermission('Garden.Moderation.Manage')) {
   $LogModel = new LogModel();
   //$SpamCount = $LogModel->GetOperationCount('spam');
   $ModerationCount = $LogModel->GetOperationCount('moderate');
   $DashboardCount += $ModerationCount;
}
// Applicant Count
if ($Session->CheckPermission('Garden.Users.Approve')) {
   $RoleModel = new RoleModel();
   $ApplicantCount = $RoleModel->GetApplicantCount();
   $DashboardCount += $ApplicantCount;
}

if ($Session->IsValid()):
   //echo '<div class="MeBox'.$CssClass.'">';
   echo UserPhoto($User);
   echo '<div id="UserName">';
       echo UserAnchor($User, 'Username');
       
// Removed code for user activity, bookmarks, account, etc. 

   echo '</div>';
   echo '</div>';

endif;