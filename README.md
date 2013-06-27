Storify Widget

Let you embed a story from Storify in your wiki


Installation
============

Download and extract the files in a directory called "StorifyWidget" in your extensions/ folder.

Add the following code to your LocalSettings.php (at the bottom)

  require_once( "$IP/extensions/StorifyWidget/StorifyWidget.php" );

Navigate to Special:Version on your wiki to verify that the extension is successfully installed.


Configuration parameters
========================

Just insert the <storifywidget/> tag where you want the stream to appear.

You can configure it with the following parameters :

<storifywidget width="720" height="700" src="//url-of-the-story" /> is the default values if you don't set them.

*src : URI of the story you want to import (Doesn't work without it)

The URI needed is the URI of the story when it is full page : http://storify.com/[USERNAME]/[URI-ENCODED-TITLE-OF-THE-STORY]

ie : http://storify.com/torontostar/search-for-rusty-the-red-panda

*width  (default "32") : The width of the widget (em)

*height (default "50") : The height of the widget (em)


Troubleshooting
===============

Storify widget is an extremely simple extension; all it does is convert a "storifywidget" tag into the export link from Storify but add the possibility to set the width and height.


Wiki Compatibility
==================

StorifyWidget uses ResourceLoader, which was introduced in MW 1.17. I only have access to a wiki running 1.19.2, so I cannot guarantee that StorifyWidget will work on earlier versions of MediaWiki.
Another way to do it is to use the export link from Storify story.


Change Log
==========

v0.1:
*Initial version


To Do
=====

*


Please email comments, questions, or bug reports to bossiaux.flavien at gmail.org.
