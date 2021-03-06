<?php if (!defined('APPLICATION')) exit();

/**
 * Garden.Modules
 */

/**
 * Renders the "Ask a Question" button.
 */
class NewQuestionModule extends Gdn_Module {

   public function AssetTarget() {
      return 'Panel';
   }
   
   public function ToString() {
          $HasPermission = Gdn::Session()->CheckPermission('Vanilla.Discussions.Add', TRUE, 'Category', 'any');
      $Category = Gdn::Controller()->Data('Category.UrlCode');
          if ($Category)
             $Category = '/'.rawurlencode($Category);
          else
             $Category = '';
     if ($HasPermission)
             echo Anchor(T('Ask a Question'), 'post/question'. $Category, 'Button BigButton NewQuestion');
       }
    }