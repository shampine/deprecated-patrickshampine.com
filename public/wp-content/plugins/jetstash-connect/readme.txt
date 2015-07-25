=== Plugin Name ===
Contributors: jetstash
Tags: jetstash, ajax, contact, contact form, email, feedback, form building, forms
Requires at least: 4.0
Tested up to: 4.2.2
Stable tag: 1.2.0
License: GPLv3
License URI: https://github.com/jetstash/jetstash-connect/blob/master/LICENSE

Jetstash Connect allows you to easily embed your forms using WordPress shortcodes.

== Description ==

This plugin is built to help you easily embed your Jetstash form into your WordPress theme without making any code modifications. Just create a form on Jetstash and link it up via your API Key and a shortcode on the page desired. There is no limit to the number of forms that can be connected.

== Installation ==

1. Upload the Jetstash Connect plugin and activate it.  
1. Add your API Key and User ID from the your [account](https://app.jetstash.com/account) page.  
1. Place the shortcode on the page(s) you would like the form to appear on.  

`[jetstash form="YOUR_FORM_ID"]`

== Frequently Asked Questions ==

See either the [Jetstash Docs](https://docs.jetstash.com) or [support](https://app.jetstash.com/support).

== Changelog ==

= 1.2.0 =
- Moved markup into separate class
- Add logo, smart looping on options page, minor tweaks
- Move plugin to a top level position, king of the castle
- Invalidate cache on failure OR with a supplied form ID
- Fixed settings test, missing attribute
- Integrated initial gulp build system for javascript

= 1.1.0 =
- Rewrote ajax structure
- Fixed frontend js validation issues
- Fixed issue with base path called incorrectly
- Moved environment info into env_* files if needed
- Restructured main jetstash connect class
- Moved to environment variables for Travis CI

= 1.0.0 =
- Initial release