The Q&A plugin by Todd is licensed under a GNU GPL2 license.

Check for updates and ask questions about this plugin on its author's page: http://vanillaforums.org/addon/734/q-a

It is provided as a convenience by David Matson in its current remixed form to save you time downloading and changing its code to put a big 'Ask a Question' button on your Vanilla forum.


*About the Changes*

I only made code changes specified by peregrine as "The Big Button option part A" spelled out here: http://vanillaforums.org/discussion/26902/some-adjustments-to-more-clearly-see-ask-a-question-in-q-a-1-2-1-new-discussion-button

Compare original and remixed versions of this plugin here: https://github.com/HelpGiveThanks/addons/compare/vanilla:2.1...2.1

In addition to these code changes, peregrine also writes that you'll need to add these lines to your config.php file:
```
$Configuration['Plugins']['QnA']['UseBigButtons'] = TRUE;
```
```
$Configuration['Modules']['Vanilla']['Panel'] = array('MeModule', 'UserBoxModule', 'GuestModule', 'NewDiscussionModule', 'NewQuestionModule','DiscussionFilterModule', 'SignedInModule', 'Ads');
```