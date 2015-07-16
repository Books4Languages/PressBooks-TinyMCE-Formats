/**
 *   Prompts for copying a text.
 */
var copyPrompt = function(text) {
	window.prompt("Link to this element:", text);
}

/**
 * Removes the "#id" at the end of an url.
 */
var removeLastHashPart = function(url) {
	var newUrl = '';
	for (var i = 0, length = url.length; i < length && url[i] !== '#'; i++) {
		newUrl += url[i];
	}
	return newUrl;
}

/**
 * Adds a link prompt at the end of a div, given its id.
 */
var copyLinkElement = function(boxID) {
	var footer = document.createElement("footer");
	var a = document.createElement("a");
	footer.appendChild(a);
	a.href = "javascript:copyPrompt('" + removeLastHashPart(document.URL)
		+ "#" + boxID + "');";

	/* Link text */
	a.innerHTML = "&#x2398";

	return footer;
}

/* Adding a link at the end of each box */
var addLinks = function() {
	var boxes = document.getElementsByClassName("box");
	for (var i in boxes) {
		boxes[i].appendChild(copyLinkElement(boxes[i].id));
	}
}

/* jQuery-free event load to prevent conflicts with Table of Contents pop-up */
window.onload = function(event) {
	addLinks();
}
