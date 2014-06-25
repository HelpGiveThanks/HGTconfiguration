<?php if (!defined('APPLICATION')) exit(); ?>
<div class="FormTitleWrapper">
<h1><?php echo T("Apply for Membership") ?></h1>
<div class="FormWrapper">



<?php //  111111111111111111111111111111111  ?>	

   <?php // Change terms url to your TGB wiki page's url.
   $TermsOfServiceUrl = 'http://helpgivethanks.org/apps/thebuggenie/wiki/TermsOfUse';
   $TermsOfServiceText = sprintf(T('I agree to the <a id="TermsOfService" target="terms" href="%s">terms of use</a>'), Url($TermsOfServiceUrl));
   
   
   
   // Make sure to force this form to post to the correct place in case the view is
   // rendered within another view (ie. /dashboard/entry/index/):
   echo $this->Form->Open(array('Action' => Url('/entry/register'), 'id' => 'Form_User_Register'));
   echo $this->Form->Errors();
   ?>
   <ul>
      <li>
         <?php
            echo $this->Form->Label('Invitation Code', 'InvitationCode');
            echo $this->Form->TextBox('InvitationCode', array('value' => $this->InvitationCode, 'autocorrect' => 'off', 'autocapitalize' => 'off', 'Wrap' => TRUE));
         ?>
      </li>
      <li>
         <?php
            echo $this->Form->Label('Username', 'Name');
            echo $this->Form->TextBox('Name', array('autocorrect' => 'off', 'autocapitalize' => 'off', 'Wrap' => TRUE));
            echo '<span id="NameUnavailable" class="Incorrect" style="display: none;">'.T('Name Unavailable').'</span>';
         ?>
      </li>
                        
      
      
      	  <li class="TextBoxWrapper" >
      	  
         <?php // This is the only code from Q&A pluggin that I kept.  The entry forum code for Vanilla 2.1 looks better in my opinion so used it and just inserted this code from the Q&A pluggin rewrite to add in fields for first and last name.
            if( C('Plugins.FirstLastNames.NickName') )
				echo $this->Form->Label('Nickname', 'FirstName');
			else
				echo $this->Form->Label('First Name', 'FirstName');
            echo $this->Form->TextBox('FirstName');
         ?>
      </li>
	  <?php if( !C('Plugins.FirstLastNames.NickName') ) { ?>
	  <li class="TextBoxWrapper">
         <?php
            echo $this->Form->Label('Last Name', 'LastName');
            echo $this->Form->TextBox('LastName');
         ?>
      </li>
	  <?php } ?>
      
      
  
      <?php $this->FireEvent('RegisterBeforePassword'); ?>
      <li>
         <?php
            echo $this->Form->Label('Password', 'Password');
            echo $this->Form->Input('Password', 'password', array('Wrap' => TRUE, 'Strength' => TRUE));
         ?>
      </li>
      <li>
         <?php
            echo $this->Form->Label('Confirm Password', 'PasswordMatch');
            echo $this->Form->Input('PasswordMatch', 'password', array('Wrap' => TRUE));
            echo '<span id="PasswordsDontMatch" class="Incorrect" style="display: none;">'.T("Passwords don't match").'</span>';
         ?>
      </li>
      <li class="Gender">
         <?php 
           echo $this->Form->Label('Gender', 'Gender');
           echo $this->Form->RadioList('Gender', $this->GenderOptions, array('default' => 'u'))
         ?>
      </li>
      <?php $this->FireEvent('RegisterFormBeforeTerms'); ?>
      <li>
         <?php
            echo $this->Form->CheckBox('TermsOfService', '@'.$TermsOfServiceText, array('value' => '1'));
            echo $this->Form->CheckBox('RememberMe', T('Remember me on this computer'), array('value' => '1'));
         ?>
      </li>
      <li class="Buttons">
         <?php echo $this->Form->Button('Sign Up', array('class' => 'Button Primary')); ?>
      </li>
   </ul>
   <?php echo $this->Form->Close(); ?>
</div>
</div>