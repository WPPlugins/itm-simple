=== Itm Simple Hide ===
Contributors: capbussat
Donate link: http://aprendesap.com
Tags: jquery, javascript, hide/show text
Requires at least: 3.5
Tested up to: 4.1
Stable tag: /trunk/

A simple plugin which allows to show or hide text by clicking in text above it (or button) . You can place html code on any page/post.

== Description ==

A simple plugin for wordpress which allows to show some text by clicking on other text in any page or post.
This plugin can be used as an example to create a simle plugin in Wordpress that uses Javascript and JQuery from Google CDN
This plugin is available under the GPL license, which means that it's free. I

== Installation ==
Just use Wordpress installation. Use example code on example.txt

== Frequently Asked Questions == 
None yet.

== Changelog ==
Version 2.0 
Deprecated old behaviour. Added new behaviour. See example inreadme.txt for example HTML code. 
= Version 2.0  =

This plugin contains 4 files
 * itm-simple-2_0.php register script and uses jQuery from Google's CDN
 * itm-simple.min.js contains javascript with functionality that hides and shows text, any html links and images
 * itm-simple.min.css contain CSS to change style
 * readme.txt contains an example of HTML code that hides and shows text, HTML links and images


== Example ==

/* Example copy-and paste this HTML code in any post or page to hide and show some text, images or url
  
	// deprecated
	<div class="contingut_complert">
	<div class="contingut_obre">Click here to open text +)</div>
	<div class="contingut_ocult">Any text, url and images to hide.</div>
	<div class="contingut_tanca">(Click here to close text -)</div>
	CONTINGUT MOSTRAT (cat), SHOWN CONTENT (en), CONTENIDO MOSTRADO (es)
	</div>

	//added
	<div class="itm_simple_slidetoggle"> Click here to toggle )</div>
	<div class="itm_simple_hidden">Any text, url and images to hide.</div>	
	
	// added
	<div class="contingut_complert">
	<div ><strong>Title</strong> Previous text </div> 
	<div class="itm_simple_hide">[ - ]</div>
	<div class="itm_simple_show">[ + ]</div>
<img class="itm_left" src="http://127.0.0.1:4001/wordpress/wp-content/uploads/2012/06/Pdf_icon.png" alt="Download PDF " width="58" height="64" /> content at the right side. extend paragraph. 
	<div class="itm_simple_hidden">Any text, url and images to hide.</div>	
	</div>

			
*/
