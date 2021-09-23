<html lang="en">

<head>
    <title>covid management system</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="icon" href="img/logo1.jpg" type="image/x-icon">
</head>

<body>

    <style>
        body {
            background-image: url('img/background.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }
    </style>

    <div class="navbar">
        <ul>
            <img id="img" src="img/animation.gif" alt="logo">
            <li id="logo">COMBAT COVID-19 </li>
            <li><a href="contact.html">CONTACT</a></li>
            <li><a href="symptoms.html">SYMPTOMS</a></li>
            <li><a href="prevention.html">PREVENTION</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="index.html">HOME</a></li>

        </ul>
        <div id="marq">
            <marquee direction="left">
                Self protection is the best technique to fight Corona Virus!
            </marquee>
        </div>
    <!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>
    </html>