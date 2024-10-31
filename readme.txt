=== PixoPoint Menu Plugin ===
Contributors: ryanhellyer
Donate link: http://pixopoint.com/premium_support/
Tags: menu, navigation, dropdown, superfish, suckerfish, jquery
Requires at least: 2.7
Tested up to: 5.5
Stable tag: 0.8

Description: NOTE: This is a very old plugin should no longer be used ... Adds a new menu to your WordPress powerwed site and allows you to control what it looks like via an easy user to interface. Visit the <a href="http://pixopoint.com/pixopoint-menu/">PixoPoint Menu Plugin page</a> for more information about the plugin, our navigation <a href="http://pixopoint.com/forum/index.php?board=4.0">support board</a> for help with adding the menu to your theme or the <a href="http://pixopoint.com/generator/">PixoPoint Template Generator</a> to obtain a customizable pre-supported (no theme editing neccessary) theme. Paid premium support for this plugin is available via the <a href="http://pixopoint.com/premium-support/">PixoPoint Premium Support service</a>.

== Description ==

Adds an SEO friendly, accessible regular or dropdown menu to your WordPress blog. Visit the <a href="http://pixopoint.com/pixopoint-menu/">PixoPoint Menu Plugin page</a> for more information about the plugin, or the <a href="http://pixopoint.com/forum/index.php?board=4.0">PixoPoint forum</a> for help with adding the menu to your theme.

= Live Demo =

To see a live demo of the plugin in action, please visit <a href="http://dunedinicehockey.co.nz/">our demo site</a>.

= Features =

* Control content will be displayed in the menu<br />
* Easy to use interface for modifying the design<br />
* Animation drodpown menus<br />
* Up to two menus<br />
* Plus much more<br />

= Changing the look of your menu =

You can style the menu by using our easy to use editor interface to create the perfect looking menu for your site. This system operates from your own site, but behind the scenes it sends your design preferences back to the PixoPoint server for processing. The required CSS data is then sent back to your WordPress install for it to be used in your menu. When you save your design, that CSS is saved into your WordPress database. The plugin only needs to access the <a href="http://pixopoint.com/">PixoPoint server</a> if you choose to modify the design in the future.

The <a href="http://pixopoint.com/pixopoint-menu/">PixoPoint Menu Plugin</a> can be implemented into any theme design, however the easiest way to set it up is to use a theme exported from the <a href="http://pixopoint.com/generator/">PixoPoint Template Generator</a>. Themes from the template generator integrate flawlessly with the plugin and do not require any theme editing. Simply activate your theme, then activate the plugin and the new menu will appear instantly. Visit the <a href="http://pixopoint.com/generator/">PixoPoint Template Generator</a> to get your own pre-supported theme.

Special thanks to <a href="http://transientmonkey.com/">Greg Yingling (aka malcalevak)</a> who was a massive help with optomising the code for this plugin.

== Installation ==

After you've downloaded and extracted the files:

1.  Upload the complete `pixopoint-menu` folder to the `/wp-content/plugins/` directory OR install it via the WordPress plugin repository browser<br />
2.  Activate the plugin through the 'Plugins' menu in WordPress<br />
3a. Either: Add `<?php wp_page_menu();} ?>` to your theme wherever you want the menu to appear (usually your header.php file).<br />
3b. Or: Create a theme with the <a href="http://pixopoint.com/generator/">PixoPoint template generator</a> which will automatically load the plugin menu<br />
3c. Or: Use a theme which already utilizes wp_page_menu() such as <a href="http://themehybrid.com/">Hybrid</a>, <a href="http://thematic.com/">Thematic</a> or Thesis., <a href="http://themehybrid.com/">Hybrid</a> and Thesis.
4.  Visit the "PixoPoint Menu" page in your WordPress settings menu<br />
5.  Control how the menu behaves via the plethora of different options
6.  Click the 'Load editor' button to modify the design via the easy to use editing panel<br />

= Easy installation =

The easiest way to setup the PixoPoint Menu Plugin is to use it with a theme specifically designed to support the plugin. All themes exported from the <a href="http://pixopoint.com/generator/">PixoPoint Template Generator</a> (which have dropdown menus) support this by default. Simply activate your theme, then activate the plugin and the new menu will appear instantly. Visit the <a href="http://pixopoint.com/generator/">PixoPoint Template Generator</a> to get your own pre-supported theme.

Some themes such as <a href="http://themehybrid.com/">Hybrid</a>, <a href="http://thematic.com/">Thematic</a> and Thesis allow the plugin to appear in the theme by choosing the 'Auto theme support' under 'Settings' in the plugins admin page. This option will also work in many other themes, it's worth trying  at least but we can't guarantee it will work (the theme requires <?php wp_page_menu(); ?> for it work).

If your theme doesn't already support the PixoPoint menu plugin then read on for simple instructions on how to integrate it into other themes ... it isn't very hard

= Premium Support =

For direct help via the plugin author please sign up for the <a href="http://pixopoint.com/premium-support/">PixoPoint Premium Support service</a>.

The <a href="http://pixopoint.com/premium-support/">PixoPoint Premium Support</a> option is ideal if you have insufficient time to fix any problems you may have or simply don't know much about coding. You will receive not only techinical support and access to the latest PixoPoint betas but they will also install the plugin and set it up on your site if needed. Customisations of the plugin are also done for some premium members, although we recommend asking first via the <a href="http://pixopoint.com/contact/">PixoPoint Contact Form</a> for such requests as some customisations may require extra payment depending on their complexity.

= Free support =

If you follow all of the instructions here, activate the plugin and find the menu is appearing on your site but looks  messed up, then the problem is probably caused by a clash between your themes CSS and plugins CSS. These problems can usually be remedied by removing the wrapper tags which surround the menu in your theme. For example, most themes will have some HTML such as <div id="nav"><?php wp_list_pages(); ?></div> which contains the existing themes menu. By placing the wp_page_menu() function between those DIV tags, the menu will often interact with that DIV tag. The solution is to either remove the DIV tag or to alter it's CSS so that it doesn't interact with the menu.

If you require further help with the plugin, please visit the <a href="http://pixopoint.com/pixopoint-menu/">PixoPoint Menu Plugin page</a> or the <a href="http://pixopoint.com/forum/">PixoPoint support forum</a>.

Please read the following tips to help have questions answered faster.<br />

* Where is your CSS?<br />
* What modifications have you made to the CSS?<br />
* What browsers are you having problems with?<br />
* What is the URL for your site?<br />
* Provide a link to the problem. Most problems can not be answered without actually seeing your site. If you don't want to install the plugin on your live site and don't have a test site to show us, then view the source code in your browser when you do have the plugin installed, save it to an HTML file and upload that somewhere so that we can see what the page looks like.<br />
* Do not bother providing us with HTML and/or CSS code snippets (without a link). There is very little we can do without seeing the entire page as most problems are caused by an obscure piece of CSS somewhere else on the page.<br />
* Let us know if you have modified the CSS. If it is modified we are unlikely to offer support for free. Rummaging through other peoples code is too time consuming sorry.<br />
* If you didn't paste your CSS into the WP plugins settings page, let us know which exact file it is in. Searching through a dozen CSS files in your theme trying to find your menu code is not fun.<br />

== Frequently Asked Questions ==

= How do I get a fully customised version? =

Leave a message on the PixoPoint <a href="http://pixopoint.com/contact/">Contact Page</a> with your requirements and we will get back to you ASAP with pricing information. Alternatively you can sign up for our <a href="http://pixopoint.com/premium-support/">Premium Support</a> option which gives you access to our new dropdown, flyout and slider menu CSS generator, plus access to our premium support forum.

= Why can't the plugin do X, Y or Z? =

It probably can, we just haven't supplied instructions on how to do it. If you have any requests, then please leave them in the <a href="http://pixopoint.com/forum/index.php?board=4.0">PixoPoint menu support board</a>. We often update the plugin with new functionality and we're far more likely to include the functionality you want if we know there is a demand for it already.

= Why should I use this plugin? =

If you want to create a dazzling, custom designed menu without writing and bug fixing endless lines of code.

If you are having trouble making your posts easily accessible to your users without them having to rifle endlessly through pages of posts.

If you have been using a menu which requires javascript to work, then this plugin will allow more of your visitors to access your site.

If you want to have an easy way to style your dropdown menu. This plugin allows you to control exactly how your menu appears on your site via an easy to use interface. It is also 100% compatible with the code generated on the <a href="http://pixopoint.com/suckerfish_css/">Suckerfish Dropdown CSS Generator page</a>.

= Does it work for WordPress version x.x.x? =

We have only tested this plugin on WordPress 2.7+. If you are using a newer version of WordPress than the latest version supported then we suggest trying the plugin anyway. It shouldn't (in theory) break anything other than the plugin itself which you can just delete if it doesn't work.

= Why isn't the plugin in my language? =

The plugin supports localization using PO and MO files. If you provide a translation I am more than happy to include it in future releases. If you've translated the plugin please let us know by posting in our <a href="http://pixopoint.com/forum/">support forum</a>.

== Screenshots ==

1. The administration page for the <a href="http://pixopoint.com/pixopoint-menu/">PixoPoint Menu plugin</a>, where you can modify what appears in your menu by drag and dropping the various menu items. By clicking the tabs at the top of the page you can access sections for modifying various features of the plugin. The 'Load Editor' button loads the editing panel as shown below.
2. The <a href="http://pixopoint.com/pixopoint-menu/">PixoPoint Menu plugin</a> editing panel as used with the <a href="http://themehybrid.com/">Theme Hybrid</a>. Here you can modify the various options in the editing panel and when you click the 'Reload' button your choices will be sent to <a href="http://pixopoint.com/">PixoPoint.com</a> and the CSS sent back to the plugin to restyle your site for you.
3. In the 'Save/Open' tab of the editing panel you can save your new design for use on your site, open up your current design or choose from a selection of existing menu designs. This is also where you can enter in your PixoPoint.com login details to gain access to the premium features of the PixoPoint.com CSS coding engine used in the plugin.
4. The <a href="http://pixopoint.com/pixopoint-menu/">PixoPoint Menu plugin</a> demonstrating the use of dropdown menus when integrated with the <a href="http://pixopoint.com/revolution-generated/">Revolution Generated theme</a>.
5. The 'Settings tab' from the administration page for the <a href="http://pixopoint.com/pixopoint-menu/">PixoPoint Menu plugin</a>, where you can modify a variety of different features in the plugin.

== Changelog ==

= 0.8 =
Purely numerical version number upgrade to try to trigger an auto-update
= 0.7 Beta =
Upgrade for PHP 7.0 (only fixes fatal errors, not debug errors)
= 0.6.7 Beta =
New CSS classes added for dropdowns
.haschildren class used in more places
= 0.6.6 Beta =
Beta - Re-includes support for removing WP Page URLs
= 0.6.5 =
Released as stable version
Fixed minor 'Page order' bug
= 0.6.4 Beta =
Changed wp_page_menu() to only be used for 'Auto-theme support' option
Added 'Compatibility mode' option (strips jQuery features to prevent clashes with plugins and themes which do not enqueue their scripts correctly)
= 0.6.3 Beta =
Had to remove "remove URLs for specific IDs" option due to serious bug. This feature did not work with permalinks on. We are working on a solution and will release a new version which corrects this problem eventually. Apologies for the error.
= 0.6.2 Beta =
Added support for wp_page_menu()
Removed all mentions of the pixopoint_menu() function since it is no longer needed (note: support for this function will be continued indefinitely, so no need to change it if you don't want to)
= 0.6.1 Beta =
Bug fix for Pages with excluded links (added # for URL)
= 0.6.0 Beta =
Adds new option in the pages pulldown to remove the URLs for specific IDs
Feature addition was performed for one of our <a href="http://pixopoint.com/premium_support/">Premium Support members</a>
Useful upgrade for those wanting to remove links for page parents
= 0.5.10 Beta =
Removed keyboard accessibility option as it was not allowing dropdowns to appear
= 0.5.9 Beta =
Fixed major page order bug
Removed ascending and descending page order options (they don't work with the built in page order system)
= 0.5.8 Beta =
Confirmed support for WordPress version 2.8.2
Descending page order bug fixed
"Categories with posts" bug fixed
Added new item to uninstaller
= 0.5.7 Beta =
* Note: descending page bug still not fixed
* Can now edit colour hex codes directly
* Can now edit image URLs directly
* Fixed widget pulldown bug
* Added quote marks around font families containing white space
= 0.5.6 Beta =
* Fixed descending pages bug
= 0.5.5 Beta =
* Upgraded to coding engine 0.4alpha
= 0.5.4 Beta =
* Moved javascript to footer
* Added credit to Andy Mortia in admin page
= 0.5.3 Beta =
* Corrected link to plugin page
= 0.5.2 Beta =
* Added built in background image options
* Fixed save design feature
* Prevented jQuery scripts from loading unnecessarily
* Added dialog boxes for colour picker
= 0.5.1 Beta =
* Release to WordPress plugin repository
= 0.5 Beta =
* Numerous minor bug fixes
* Improved contrast in widget graphics 'on hover'
= 0.4.13 Alpha =
* Improved documentation in readme.txt
* Added new screenshots for readme.txt
= 0.4.12 Alpha =
* Bug fixes for design loading system
= 0.4.11 Alpha =
* Initial CSS loaded so that it menu appears on first page load
* 'Continue' text improved for loading designs
* 'Load Editor' button restyled
= 0.4.10 Alpha =
* Fixed colour picker bug
* Improvements to editing panel interface
= 0.4.9 Alpha =
* Confirmed support for WordPress 2.8.1 beta
* Stopped design loader wiping other menus design
* Added license notice in design files
= 0.4.8 Alpha =
* Added many new designs
* Added ability to load new design for each menu
* Fixed letter-spacing bug
* Improved look of buttons on save/open tab
* Tabulated new designs
* Added new graphical backgrounds
= 0.4.7 Alpha =
* Fixed initial page load bug in editor
* Added support for updated coding engine
* Improved uninstaller
* Added quick uninstaller (temp.php) for testing purposes
= 0.4.6 Alpha =
* Improved code comments
* Some functionality now broken
* Removed maintenance.php file
* Registered options only used in the editing panel
= 0.4.5 Alpha =
* Moved Farbtastic script to the scripts folder
= 0.4.4 Alpha =
* Fixed 'My Page Order plugin'
* Fixed Farbtastic jQuery plugin
* Fixed tooltip for Farbtastic
* Added hex colour code validation
* Added credit to froman18
* Lots of bug fixes
= 0.4.3 Alpha =
* Lots of bug fixes
= 0.4.2 Alpha =
* Added in Malcalevaks' code
= 0.4.1 Alpha =
* Removed Malcalevaks index.php suggestion
= 0.4 Alpha =
* Fixed major CSS bug, now works in Opera and Firefox
= 0.3 Pre-alpha =
* Fixed sortables scripts
= 0.2 Pre-alpha =
* Added broken support for 'My Page Order' integration
* Added drag and drop widget system
* Redesigned UI
= 0.1 Pre-alpha =
* Initial test plugin

== Credits ==

Thanks to the following (in no particular order) for help with the development of this plugin:<br />

* <a href="http://themehybrid.com/">Justin Tadlock</a> - Explained what the wp_page_menu() function is used for<br />
* <a href="http://blog.mortia.org.uk/index.php/2009/07/16/pixopoint-menu-widget/">Andy Mortia</a> - Created the PixoPoint Menu widget<br />
* <a href="http://transientmonkey.com/">malcalevak</a> - Code contributions utilized from the Multi-level Navigation plugin<br />
* <a href="http://www.vcsvu.nl/">vcsvu</a> - Code contributions utilized from the Multi-level Navigation plugin<br />
* <a href="http://nv1962.net/">nv1962</a> - Code contributions utilized from the Multi-level Navigation plugin<br />
* <a href="http://www.geekyweekly.com/">froman18</a> - Created the My Page Order plugin utilized within this plugin<br />
* <a href="http://wp-fun.co.uk/">Andrew Rickman</a> - Provided assistance in developing the drag and drop functionality<br />
* <a href="http://pmob.co.uk/">Paul O'Brien</a> - Provide technical expertise in bug fixing the CSS coding engine<br />
* <a href="http://wptavern.com/">Jeff Chandler</a> - Created the WP Tavern where much of the development side was sorted out<br />
* <a href="http://instinct.co.nz/">Dan Milward</a> - Provided technical suggestions which led to the development of the plugin<br />

