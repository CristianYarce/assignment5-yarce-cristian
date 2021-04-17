<style type="text/css">
*{
  margin: 0;
  padding: 0;
  border: 0;
}

body {
  background: white;
}

h1 {
  margin-top: 20px;
  margin-bottom: 20px;
  color: red;
}

h1::first-letter {
  color: black;
  font-size: xx-large;
}

h1::after {
  content:" ★";
  color: black;
}

::selection {
  color: red;
  background: black;
}

.container {
  max-width: 900px;
  margin: 40px auto 120px;
  text-align: center;
}

header {
  text-align: center;
  background: #333;
  padding: 20px 0;
}
nav ul li {
  display: inline;
}

nav a {
  text-decoration: none;
  color: white;
  background: red;
  padding: 5px;
}

footer {
  background: #333;
  color: white;
  text-align: center;
  padding: 20px 0;
}

</style>
<header>
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About Us</a></li>
      <li><a href="services.html">Services</a></li>
      <li><a href="contact.html">Contact Us</a></li>
    </ul>
  </nav>
</header>

<div class="container">

	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>

<footer>
	<p>This page was designed by Cristian Yarce</p>
</footer>
