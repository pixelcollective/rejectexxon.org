/*! Backstretch - v2.0.4 - 2013-06-19
* http://srobbin.com/jquery-plugins/backstretch/
* Copyright (c) 2013 Scott Robbin; Licensed MIT */
(function(a,d,p){a.fn.backstretch=function(c,b){(c===p||0===c.length)&&a.error("No images were supplied for Backstretch");0===a(d).scrollTop()&&d.scrollTo(0,0);return this.each(function(){var d=a(this),g=d.data("backstretch");if(g){if("string"==typeof c&&"function"==typeof g[c]){g[c](b);return}b=a.extend(g.options,b);g.destroy(!0)}g=new q(this,c,b);d.data("backstretch",g)})};a.backstretch=function(c,b){return a("body").backstretch(c,b).data("backstretch")};a.expr[":"].backstretch=function(c){return a(c).data("backstretch")!==p};a.fn.backstretch.defaults={centeredX:!0,centeredY:!0,duration:5E3,fade:0};var r={left:0,top:0,overflow:"hidden",margin:0,padding:0,height:"100%",width:"100%",zIndex:-999999},s={position:"fixed",display:"none",margin:0,padding:0,border:"none",width:"auto",height:"auto",maxHeight:"none",maxWidth:"none",zIndex:-999999},q=function(c,b,e){this.options=a.extend({},a.fn.backstretch.defaults,e||{});this.images=a.isArray(b)?b:[b];a.each(this.images,function(){a("<img />")[0].src=this});this.isBody=c===document.body;this.$container=a(c);this.$root=this.isBody?l?a(d):a(document):this.$container;c=this.$container.children(".backstretch").first();this.$wrap=c.length?c:a('<div class="backstretch"></div>').css(r).appendTo(this.$container);this.isBody||(c=this.$container.css("position"),b=this.$container.css("zIndex"),this.$container.css({position:"static"===c?"relative":c,zIndex:"auto"===b?0:b,background:"none"}),this.$wrap.css({zIndex:-999998}));this.$wrap.css({position:this.isBody&&l?"fixed":"absolute"});this.index=0;this.show(this.index);a(d).on("resize.backstretch",a.proxy(this.resize,this)).on("orientationchange.backstretch",a.proxy(function(){this.isBody&&0===d.pageYOffset&&(d.scrollTo(0,1),this.resize())},this))};q.prototype={resize:function(){try{var a={left:0,top:0},b=this.isBody?this.$root.width():this.$root.innerWidth(),e=b,g=this.isBody?d.innerHeight?d.innerHeight:this.$root.height():this.$root.innerHeight(),j=e/this.$img.data("ratio"),f;j>=g?(f=(j-g)/2,this.options.centeredY&&(a.top="-"+f+"px")):(j=g,e=j*this.$img.data("ratio"),f=(e-b)/2,this.options.centeredX&&(a.left="-"+f+"px"));this.$wrap.css({width:b,height:g}).find("img:not(.deleteable)").css({width:e,height:j}).css(a)}catch(h){}return this},show:function(c){if(!(Math.abs(c)>this.images.length-1)){var b=this,e=b.$wrap.find("img").addClass("deleteable"),d={relatedTarget:b.$container[0]};b.$container.trigger(a.Event("backstretch.before",d),[b,c]);this.index=c;clearInterval(b.interval);b.$img=a("<img />").css(s).bind("load",function(f){var h=this.width||a(f.target).width();f=this.height||a(f.target).height();a(this).data("ratio",h/f);a(this).fadeIn(b.options.speed||b.options.fade,function(){e.remove();b.paused||b.cycle();a(["after","show"]).each(function(){b.$container.trigger(a.Event("backstretch."+this,d),[b,c])})});b.resize()}).appendTo(b.$wrap);b.$img.attr("src",b.images[c]);return b}},next:function(){return this.show(this.index<this.images.length-1?this.index+1:0)},prev:function(){return this.show(0===this.index?this.images.length-1:this.index-1)},pause:function(){this.paused=!0;return this},resume:function(){this.paused=!1;this.next();return this},cycle:function(){1<this.images.length&&(clearInterval(this.interval),this.interval=setInterval(a.proxy(function(){this.paused||this.next()},this),this.options.duration));return this},destroy:function(c){a(d).off("resize.backstretch orientationchange.backstretch");clearInterval(this.interval);c||this.$wrap.remove();this.$container.removeData("backstretch")}};var l,f=navigator.userAgent,m=navigator.platform,e=f.match(/AppleWebKit\/([0-9]+)/),e=!!e&&e[1],h=f.match(/Fennec\/([0-9]+)/),h=!!h&&h[1],n=f.match(/Opera Mobi\/([0-9]+)/),t=!!n&&n[1],k=f.match(/MSIE ([0-9]+)/),k=!!k&&k[1];l=!((-1<m.indexOf("iPhone")||-1<m.indexOf("iPad")||-1<m.indexOf("iPod"))&&e&&534>e||d.operamini&&"[object OperaMini]"==={}.toString.call(d.operamini)||n&&7458>t||-1<f.indexOf("Android")&&e&&533>e||h&&6>h||"palmGetResource"in d&&e&&534>e||-1<f.indexOf("MeeGo")&&-1<f.indexOf("NokiaBrowser/8.5.0")||k&&6>=k)})(jQuery,window);

/*
 * jQuery Anystretch
 * Version 1.2 (@jbrooksuk / me.itslimetime.com)
 * https://github.com/jbrooksuk/jquery-anystretch
 * Based on Dan Millar's Port
 * https://github.com/danmillar/jquery-anystretch
 *
 * Add a dynamically-resized background image to the body
 * of a page or any other block level element within it
 *
 * Copyright (c) 2012 Dan Millar (@danmillar / decode.uk.com)
 * Dual licensed under the MIT and GPL licenses.
 *
 * This is a fork of jQuery Backstretch (v1.2)
 * Copyright (c) 2011 Scott Robbin (srobbin.com)
*/
(function(a){a.fn.anystretch=function(d,c,e){var b=this.selector.length?false:true;return this.each(function(q){var s={positionX:"center",positionY:"center",speed:0,elPosition:"relative",dataName:"stretch"},h=a(this),g=b?a(".anystretch"):h.children(".anystretch"),l=g.data("settings")||s,m=g.data("settings"),j,f,r,p,v,u;if(c&&typeof c=="object"){a.extend(l,c)}if(c&&typeof c=="function"){e=c}a(document).ready(t);return this;function t(){if(d||h.length>=1){var i;if(!b){h.css({position:l.elPosition,background:"none"})}if(g.length==0){g=a("<div />").attr("class","anystretch").css({left:0,top:0,position:(b?"fixed":"absolute"),overflow:"hidden",zIndex:(b?-999999:-999998),margin:0,padding:0,height:"100%",width:"100%"})}else{g.find("img").addClass("deleteable")}i=a("<img />").css({position:"absolute",display:"none",margin:0,padding:0,border:"none",zIndex:-999999}).bind("load",function(A){var z=a(this),y,x;z.css({width:"auto",height:"auto"});y=this.width||a(A.target).width();x=this.height||a(A.target).height();j=y/x;o(function(){z.fadeIn(l.speed,function(){g.find(".deleteable").remove();if(typeof e=="function"){e()}})})}).appendTo(g);if(h.children(".anystretch").length==0){if(b){a("body").append(g)}else{h.append(g)}}g.data("settings",l);var w="";if(d){w=d}else{if(h.data(l.dataName)){w=h.data(l.dataName)}else{return}}i.attr("src",w);a(window).resize(o)}}function o(i){try{u={left:0,top:0};r=k();p=r/j;if(p>=n()){v=(p-n())/2;if(l.positionY=="center"||l.centeredY){a.extend(u,{top:"-"+v+"px"})}else{if(l.positionY=="bottom"){a.extend(u,{top:"auto",bottom:"0px"})}}}else{p=n();r=p*j;v=(r-k())/2;if(l.positionX=="center"||l.centeredX){a.extend(u,{left:"-"+v+"px"})}else{if(l.positionX=="right"){a.extend(u,{left:"auto",right:"0px"})}}}g.children("img:not(.deleteable)").width(r).height(p).filter("img").css(u)}catch(w){}if(typeof i=="function"){i()}}function k(){return b?h.width():h.innerWidth()}function n(){return b?h.height():h.innerHeight()}})};a.anystretch=function(d,b,e){var c=("onorientationchange" in window)?a(document):a(window);c.anystretch(d,b,e)}})(jQuery);

/*! app !! */
/* https://rejectexxon.other98action.org */
jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/

jQuery(document).ready(function() {

    // Remove empty P tags created by WP inside of Accordion and Orbit
    jQuery('.accordion p:empty, .orbit p:empty').remove();

	 // Makes sure last grid item floats left
	jQuery('.archive-grid .columns').last().addClass( 'end' );

	// Adds Flex Video to YouTube and Vimeo Embeds
  jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function() {
    if ( jQuery(this).innerWidth() / jQuery(this).innerHeight() > 1.5 ) {
      jQuery(this).wrap("<div class='widescreen flex-video'/>");
    } else {
      jQuery(this).wrap("<div class='flex-video'/>");
    }
  });

});

/* action flow */

console.log('action flow');

  var submitSegue = function (args) {
      jQuery(document).ready(function() {
          
          console.log('we are in business'); 
          console.log(args.postVals);         
          
          /* gather data to populate revere */
          if(args.postVals.PostalCode) {
            jQuery('#zip').val(args.postVals.PostalCode);
          }

          if(args.postVals.FirstName) {
            if(args.postVals.LastName) {
              var name = args.postVals.FirstName + ' ' + args.postVals.LastName;
              if(name) {
                jQuery('#name').val(name);
              }
            }
          }
          
          if(args.postVals.EmailAddress) {
            jQuery('#email').val(args.postVals.EmailAddress);
          }

          /* hide revere prefilled fields */
          if(jQuery('#name').val() !== '') {
            // jQuery('#name').hide();
          }

          if(jQuery('#zip').val() !== '') {
            // jQuery('#zip').hide();
          }

          if(jQuery('#email').val() !== '') {
            // jQuery('#email').hide();
          }

          /* move us back up to the top of the page */
          jQuery('html, body').animate({ scrollTop: 0 }, 'slow');

          if(args.response.submissionId) {
            /* handle loading revere */
            if(jQuery('.email-message:visible')) {
              jQuery('.email-message').hide();
            }
            if(jQuery('.step0:visible')) {
              jQuery('.step0').hide();
            }
            if(jQuery('#sources:visible')) {
              jQuery('#sources').fadeOut(1000);
            }
            if(jQuery('.call-thanks:hidden')) {
              jQuery('.step1').show();
              jQuery('.call').delay(2000).show();
            }
          }

          /* end everyaction callback */
          return args;

      });
  }

  var nvtag_callbacks = nvtag_callbacks || {};

  nvtag_callbacks.preSegue = nvtag_callbacks.preSegue || [];
  nvtag_callbacks.preSegue.push(submitSegue);

  console.log('mic check');
