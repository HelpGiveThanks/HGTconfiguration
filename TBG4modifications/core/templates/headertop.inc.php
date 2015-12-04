<header>
    <div id="logo_container">
        <?php \thebuggenie\core\framework\Event::createNew('core', 'header_before_logo')->trigger(); ?>
        <?php $link = (\thebuggenie\core\framework\Settings::getHeaderLink() == '') ? \thebuggenie\core\framework\Context::getWebroot() : \thebuggenie\core\framework\Settings::getHeaderLink(); ?>



        <?php //  111111111111111111111111111111111  ?>

        <?php // Experiment with icon width and height to get best look. Keep the height amount at or below 30px, as anything greater will shift the breadcrumb text under it over the right. ?>
        <a class="logo" href="<?php print $link; ?>"><img alt="icon" src="http://YOURWEBSITE.COM/YOURBUGGENIEFOLDER/public/header.png" style="width: 24px; height: 24px;"></img></a>
            </div>



    <?php if (!\thebuggenie\core\framework\Settings::isMaintenanceModeEnabled()): ?>
        <div id="topmenu-container">
            <?php if (\thebuggenie\core\framework\Event::createNew('core', 'header_mainmenu_decider')->trigger()->getReturnValue() !== false): ?>
                <?php require THEBUGGENIE_CORE_PATH . 'templates/headermainmenu.inc.php'; ?>
            <?php endif; ?>
            <?php require THEBUGGENIE_CORE_PATH . 'templates/headerusermenu.inc.php'; ?>
        </div>
        <?php if (\thebuggenie\core\framework\Event::createNew('core', 'header_mainmenu_decider')->trigger()->getReturnValue() !== false): ?>
            <?php require THEBUGGENIE_CORE_PATH . 'templates/submenu.inc.php'; ?>
        <?php endif; ?>
        <?php \thebuggenie\core\framework\Event::createNew('core', 'header_menu_end')->trigger(); ?>
    <?php endif; ?>
</header>
