<footer>


  <?php // BEGIN MODIFY FOOTER ?>


<?php // TRIED AND FAILED SO FAR TO ADD ONTO HOME URL echo __('%thebuggenie', array('%thebuggenie' => link_tag(make_url('home'), 'The Bug Genie')), true); ?>


<a href="http://127.0.0.1/buggenie402/public/wiki/Privacy" target="_blank">Privacy</a> |
<a href="http://127.0.0.1/buggenie402/public/wiki/TermsOfUse" target="_blank">Terms of Use</a> |
<?php // echo __('Projects'); ?> Mess Bounder <?php echo __('%thebuggenie', array('%thebuggenie' => link_tag(make_url('about'), 'The Bug Genie')), true); ?> |
Forum <a href="http://vanillaforums.org/" target="_blank">Vanilla</a> |
Website Configuration <a href="http://helpgivethanks.org/apps/thebuggenie/wiki/CollaborativeWebsiteConfiguration" target="_blank">HGT</a> |
Content Copyright (except where noted) <a href="http://creativecommons.org/licenses/by/4.0/" target="_blank">CC BY 4.0</a>


    <?php /* echo image_tag('footer_logo.png'); ?>
    <?php echo __('%thebuggenie, <b>friendly</b> issue tracking since 2002', array('%thebuggenie' => link_tag(make_url('about'), 'The Bug Genie')), true); ?><br>
        <a href="http://opensource.org/licenses/MPL-2.0"><?php echo __('Read the license (MPL 2.0)'); ?></a>
    <?php if ($tbg_user->canAccessConfigurationPage()): ?>
        | <b><?php echo link_tag(make_url('configure'), __('Configure %thebuggenie_name', array('%thebuggenie_name' => \thebuggenie\core\framework\Settings::getSiteHeaderName()))); ?></b>
    <?php endif; ?> <*/?>
    <?php if (\thebuggenie\core\framework\Context::isDebugMode() && \thebuggenie\core\framework\Logging::isEnabled()): ?>
        <script>
            function tbg_debug_show_menu_tab(tab, clicked) {
                $('debug-bar').childElements().each(function (unclicked) {
                    unclicked.removeClassName('selected');
                });
                clicked.addClassName('selected');
                $('debug-frames-container').childElements().each(function (container) {
                    (container.id == tab) ? container.addClassName('selected') : container.removeClassName('selected');
                });
            }
        </script>
        <div id="tbg___DEBUGINFO___" style="position: fixed; bottom: 0; left: 0; z-index: 100; display: none; width: 100%;">
        </div>
        <?php echo image_tag('spinning_16.gif', array('style' => 'position: fixed; bottom: 5px; right: 23px;', 'id' => 'tbg___DEBUGINFO___indicator')); ?>
    <?php endif; ?>
</footer>
