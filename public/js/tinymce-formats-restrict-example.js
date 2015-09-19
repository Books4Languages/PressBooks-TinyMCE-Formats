jQuery(document).ready(function ($) {
    var http = location.protocol;
    var slashes = http.concat("//");
    var host = slashes.concat(window.location.hostname);
    var url = host.concat('/wp-login.php');
    $("div.entry-content").find("div#example").html('<p style="color:blue;">You have to be an active user to see this.</p><a style="font-size:1.5em; " href="' + url + '" title="Login">Login</a>');
});