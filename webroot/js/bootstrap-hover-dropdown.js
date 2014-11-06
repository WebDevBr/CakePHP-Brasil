/*
* Project: Twitter Bootstrap Hover Dropdown
* Author: Cameron Spear
* Contributors: Mattia Larentis
*
* Dependencies?: Twitter Bootstrap's Dropdown plugin
*
* A simple plugin to enable twitter bootstrap dropdowns to active on hover and provide a nice user experience.
*
* No license, do what you want. I'd love credit or a shoutout, though.
*
* http://cameronspear.com/blog/twitter-bootstrap-dropdown-on-hover-plugin/
*/
(function(e,t,n){var r=e();e.fn.dropdownHover=function(n){r=r.add(this.parent());return this.each(function(){var i=e(this),s=i.parent(),o={delay:500,instantlyCloseOthers:true},u={delay:e(this).data("delay"),instantlyCloseOthers:e(this).data("close-others")},a=e.extend(true,{},o,n,u),f;var l;var c=function(e){if(l!=="MSPointerDown"){f=t.setTimeout(function(){s.removeClass("open")},a.delay)}};var h=function(e){if(!s.hasClass("open")&&!i.is(e.target)){return true}if(a.instantlyCloseOthers===true)r.removeClass("open");t.clearTimeout(f);s.addClass("open");l=e.type};var p=function(e){if(a.instantlyCloseOthers===true)r.removeClass("open");t.clearTimeout(f);s.addClass("open")};s.bind("mouseover",function(e){h(e)});s.bind("mouseleave",function(e){c()});s.bind("touchstart",function(e){h(e)});s.bind("MSPointerDown",function(e){h(e)});i.bind("mouseover",function(){p()});s.find(".dropdown-submenu").each(function(){var n=e(this);var r;n.hover(function(){t.clearTimeout(r);n.children(".dropdown-menu").show();n.siblings().children(".dropdown-menu").hide()},function(){var e=n.children(".dropdown-menu");r=t.setTimeout(function(){e.hide()},a.delay)})})})};e(document).ready(function(){e('[data-hover="dropdown"]').dropdownHover()})})(jQuery,this)