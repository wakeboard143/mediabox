<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Welcome to Mediabox</title>
<style type="text/css">
body {
  font-family: "Open Sans", sans-serif;
  background-color: lightblue;
}
</style>
<a href="https://cash.me/$TomMorgan" target="_blank"><img src="https://img.shields.io/badge/Donate-SquareCash-brightgreen.svg" alt="badge"></a><br />
<h1>Welcome to Mediabox!</h1>
<h3><u>Basic Information & Configuration</u></h3>
<b><u>Notes:</u></b><br />
<li><b>PROXY</b> The DelugeVPN Container provides an http proxy via the PIA connection at: locip:8118
</ul>
<br />
<h3><u>Manual Configuration steps:</u></h3>  
<b><u>Radarr:</u></b><br />
<ul>
<li>Click on the Settings icon<br />
<li>Click on the Download Client Tab<br />
<li>Click on the + sign to add a download client<br />
<li>Under the "Torrent" section Select Deluge<br />
<li>Enter these settings:<br />
    * Name: Deluge<br />
    * Enable: Yes<br />
    * Host: locip<br />
    * Port: 8112<br />
    * Password: deluge (unless you have changed it)<br />
    * Category: blank<br />
    * Use SSL: No<br />
<li>Optional: Click on the media management tab and configure the renamer<br />
</ul>
<br />
<b><u>Sonarr & Lidarr</u></b><br />
<ul>
<li>Same instructions as Radarr<br />
</ul>
<br />
<b><u>NBZGet:</u></b><br />
<ul>
<li>Username: daemonun<br />
<li>Password: daemonpass<br />
</ul>
<h3>Mediabox Management Containers</h3>
<b><u>Portainer:</u></b><br />
To help you manage your Mediabox Docker containers Portainer is available.<br />
Portainer is a Docker Management UI to help you work with the containers etc.<br />
<br /><br />
<b><u>Ouroboros:</u></b><br />
The ouroboros container monitors the all of the Mediabox containers and if there is an update to any container's base image it updates the container.<br />
ouroboros will detect the change, download the new image, gracefully stop the container(s), and re-launch them with the new image.<br />
<h1>Troubleshooting</h1>
If you are having issues with Mediabox or any of your continers please take look at the settings being used.<br />
Below are the variables in your .env file: (<b>NOTE</b>: For your security PIA credentials are no longer shown here.)
<pre>
<?php
echo file_get_contents("./env.txt");
?>
</pre>
</body>
</html>
