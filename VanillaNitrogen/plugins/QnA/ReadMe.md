###The Q&A Big Button Remix plugin

Code changes have made to this plugin found in the helpful forum post The Big Button option part A: http://vanillaforums.org/discussion/26902/some-adjustments-to-more-clearly-see-ask-a-question-in-q-a-1-2-1-new-discussion-button.

In addition to these code changes, add the two additional lines of code below (also copied from the above post) to your config.php file to make the Big Button appear:

$Configuration['Plugins']['QnA']['UseBigButtons'] = TRUE;

$Configuration['Modules']['Vanilla']['Panel'] = array('MeModule', 'UserBoxModule', 'GuestModule', 'NewDiscussionModule', 'NewQuestionModule','DiscussionFilterModule', 'SignedInModule', 'Ads');

This remix is provided as a convenience saving you the time altering the original Q&A plugin code yourself to put a big 'Ask a Question' button on your Vanilla forum, and is provided to you under a GNU GPL2 license just like the original. Compare original and CURRENT remixed versions of this plugin here: https://github.com/HelpGiveThanks/addons/compare/vanilla:2.1...2.1. A zip file is included with the remix files showing differences between this version and the original: Comparing vanilla_2.1...HelpGiveThanks_addons.zip.

To upgrade this plugin remix you will need to download the latest original (unremixed) version of the plugin http://vanillaforums.org/addon/734/q-a, and modify it with code changes found in the above forum post yourself, or hire someone to do it for you. You can check at the Help Give Thanks SourceForge folder to see if there is an upgrade available, but no promises:  http://sourceforge.net/projects/helpgivethanks/files/.

David Matson is to blame for adding in a very small number of code changes authored by VanillaForum.org contributor peregrine. Todd Burry is the original author of this wonderfully useful plugin.
