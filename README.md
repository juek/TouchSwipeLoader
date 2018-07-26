# TouchSwipe Loader plugin for Typesetter CMS

Simply loads the [jQuery TouchSwipe plugin](http://labs.rampinteractive.co.uk/touchSwipe) (currently ver 1.6) to be used in your JavaScripts.
That&rsquo;s all.

See also 
* [TouchSwipe GitHub repository](https://github.com/mattbryson/TouchSwipe-Jquery-Plugin) 
* [Typesetter Home](http://www.typesettercms.com)
* [Typesetter on GitHub](https://github.com/Typesetter/Typesetter)

## Current Version 
1.6

## Requirements ##
* Typesetter CMS

## Manual Installation ##
1. Download the [master ZIP archive](https://github.com/juek/TouchSwipeLoader/archive/master.zip)
2. Upload the extracted folder 'TouchSwipeLoader-master' to your server into the /addons directory
3. Install using Typesetter's Admin Toolbox &rarr; Plugins &rarr; Manage &rarr; Available &rarr; TouchSwipe Loader

## Usage

JavaScript (e.g. in existing scripts)

````javascript
$(function(){

  $("#test").swipe({
    //Generic swipe handler for all directions
    swipe: function(event, direction, distance, duration, fingerCount, fingerData){
      $(this).text("You swiped " + direction );  
    }
  });

  //Set some options later
  $("#test").swipe({fingers:2});

});
````

PHP (e.g. in template.php or your plugin&rsquo;s getHead hook)
````php
global $page;

$page->jQueryCode .= '
  $("#test").swipe( {
    //Generic swipe handler for all directions
    swipe: function(event, direction, distance, duration, fingerCount, fingerData){
      $(this).text("You swiped " + direction );  
    }
  });

  //Set some options later
  $("#test").swipe({fingers:2});
';
````

## Demos, Examples and Docs
[http://labs.rampinteractive.co.uk/touchSwipe](http://labs.rampinteractive.co.uk/touchSwipe)  
[http://labs.rampinteractive.co.uk/touchSwipe/docs](http://labs.rampinteractive.co.uk/touchSwipe/docs)

## License
Dual licensed under the MIT or GPL Version 2 licenses.