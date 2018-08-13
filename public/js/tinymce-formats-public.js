
/**

/**
 * Removes the "#id" at the end of an url.
 */
var removeLastHashPart = function (url) {
    var newUrl = '';
    for (var i = 0, length = url.length; i < length && url[i] !== '#'; i++) {
        newUrl += url[i];
    }
    return newUrl;
}

/**
 * Adds a link prompt at the end of a div, given its id.
 */
var copyLinkElement = function (boxID) {

    var footer = document.createElement("footer");
    var a = document.createElement("a");
    footer.appendChild(a);
    a.href = removeLastHashPart(document.URL)
		+ "#" + boxID;
    a.id = 'copyLink';
    /* Link text */
    a.innerHTML = "&#x1f517;";
    return footer;
}

/* Adding a link at the end of each box */
var addLinks = function ($) {
    $.browser.chrome = /chrom(e|ium)/.test(navigator.userAgent.toLowerCase());
    var boxes = document.getElementsByClassName("box");
    var old;
    var first = true;
    for (var prop in boxes) {
        if (boxes.hasOwnProperty(prop)) {
            if ($.browser.chrome) {
             if(first){boxes[prop].appendChild(copyLinkElement(boxes[prop].id));}
            first = !first;
            }
            else{
            boxes[prop].appendChild(copyLinkElement(boxes[prop].id));
            }
        }
    }
}

///* jQuery-free event load to prevent conflicts with Table of Contents pop-up */
//window.onload = function (event) {
//    addLinks();
//}
jQuery(document).ready(function ($) {
    addLinks($); // $() will work as an alias for jQuery() inside of this function
});