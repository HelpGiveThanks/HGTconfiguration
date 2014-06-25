<?php if (!defined('APPLICATION')) exit(); ?>
<h1><?php echo T($this->Data['Title']); ?></h1>
<div class="Info">
   <?php echo T("Enable Display Names to have a user's First/Last Name or Nickname be displayed on their posts instead of their username."); ?>
</div>
<div class="FilterMenu">
      <?php
      echo Anchor(
         T(C('Plugins.FirstLastNames.DisplayNames') ? 'Use Usernames' : 'Use Display Names'),
         'settings/toggledisplaynames/'.Gdn::Session()->TransientKey(),
         'SmallButton'
      );
   ?>
</div>
<div class="Info">
   <?php echo T("Enable Nicknames if you only want to use one field (Nickname) instead of two (First and Last Name)."); ?>
</div>
<div class="FilterMenu">
      <?php
      echo Anchor(
         T(C('Plugins.FirstLastNames.NickName') ? 'Use First/Last Names' : 'Use Nicknames'),
         'settings/togglenickname/'.Gdn::Session()->TransientKey(),
         'SmallButton'
      );
   ?>
</div>
<div class="Info">
   <?php echo T("If display names are enabled, normally a user's real username is displayed under their posts. Use this setting to disable that feature. "); ?>
</div>
<div class="FilterMenu">
      <?php
      echo Anchor(
         T(C('Plugins.FirstLastNames.HideRealUsername') ? 'Show Real Username' : 'Hide Real Username'),
         'settings/togglehiderealusername/'.Gdn::Session()->TransientKey(),
         'SmallButton'
      );
   ?>
</div>