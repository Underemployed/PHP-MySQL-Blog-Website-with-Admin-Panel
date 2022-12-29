<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Use title if it's in the page YAML frontmatter -->
    <title>Run PHP under FastCGI</title>

    
    

    <link href="/dashboard/stylesheets/normalize.css" rel="stylesheet" type="text/css" /><link href="/dashboard/stylesheets/all.css" rel="stylesheet" type="text/css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <script src="/dashboard/javascripts/modernizr.js" type="text/javascript"></script>


    <link href="/dashboard/images/favicon.png" rel="icon" type="image/png" />


  </head>

  <body class="docs docs_use-php-fcgi">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=277385395761685";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <header class="header contain-to-grid">
      <nav class="top-bar" data-topbar>
        <ul class="title-area">
          <li class="name">
            <h1><a href="/dashboard/index.html">Apache Friends</a></h1>
          </li>
          <li class="toggle-topbar menu-icon">
            <a href="#">
              <span>Menu</span>
            </a>
          </li>
        </ul>

        <section class="top-bar-section">
          <!-- Left Nav Section -->
          <ul class="left">
              <li class="item "><a href="/dashboard/faq.html">FAQs</a></li>
              <li class="item active"><a href="/dashboard/howto.html">HOW-TO Guides</a></li>
              <li class="item "><a target="_blank" href="/dashboard/phpinfo.php">PHPInfo</a></li>
              <li class="item "><a href="/phpmyadmin/">phpMyAdmin</a></li>
          </ul>
        </section>
      </nav>
    </header>

    <div class="wrapper">
      <div class="hero">
  <div class="row">
    <div class="large-12 columns">
      <h1>Documentation</h1>
    </div>
  </div>
</div>
<div class="row">
  <div class="large-12 columns">
    <ul class="sub-nav">
      <li>
<a class="pdf" target="_blank" href="/dashboard/docs/use-php-fcgi.pdf">          Download PDF
          <span>use-php-fcgi.pdf</span>
</a>      </li>
    </ul>
    <article class="asciidoctor">
      <h1>Run PHP under FastCGI</h1>
<div class="paragraph">
<p>By default, XAMPP runs PHP as an Apache handler. An alternative approach is to run PHP under FastCGI, which can produce better performance in certain scenarios. To do this, follow these steps:</p>
</div>
<div class="olist arabic">
<ol class="arabic">
<li>
<p>Download a binary version of the <em>mod_fcgid</em> Apache module from <a href="http://www.apachelounge.com/download/">the ApacheLounge website</a>. This module is included in the <em>modules-2.4.x-win32-VC11.zip</em> archive.</p>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
XAMPP for Windows only uses 32-bit Apache builds.
</td>
</tr>
</table>
</div>
</li>
<li>
<p>Extract the <em>mod_fcgid.so</em> file from the downloaded archive file and copy it to the <em>apache\modules</em>\ subdirectory of your XAMPP installation directory (usually, <em>C:\xampp</em>).</p>
</li>
<li>
<p>Edit the <em>httpd-xampp.conf</em> file in the <em>apache\conf\extra\</em> subdirectory of your XAMPP installation directory. Within this file, make the following changes:</p>
<div class="olist loweralpha">
<ol class="loweralpha" type="a">
<li>
<p>Search for the line</p>
<div class="literalblock">
<div class="content">
<pre>LoadModule php5_module "/xampp/php/php5apache2_4.dll"</pre>
</div>
</div>
<div class="paragraph">
<p>and modify it to read</p>
</div>
<div class="literalblock">
<div class="content">
<pre>LoadModule fcgid_module modules/mod_fcgid.so</pre>
</div>
</div>
</li>
<li>
<p>Find and delete the following lines:</p>
<div class="literalblock">
<div class="content">
<pre>&lt;FilesMatch "\.php$"&gt;
   SetHandler application/x-httpd-php
&lt;/FilesMatch&gt;
&lt;FilesMatch "\.phps$"&gt;
   SetHandler application/x-httpd-php-source
&lt;/FilesMatch&gt;</pre>
</div>
</div>
</li>
<li>
<p>Add the following lines:</p>
<div class="literalblock">
<div class="content">
<pre>FcgidInitialEnv PHPRC "c:/xampp/php"
AddHandler fcgid-script .php
FcgidWrapper "c:/xampp/php/php-cgi.exe" .php</pre>
</div>
</div>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
Remember to adjust the file and directory paths above to reflect valid paths on your system.
</td>
</tr>
</table>
</div>
</li>
</ol>
</div>
</li>
<li>
<p>Restart your Apache server through the XAMPP control panel for your changes to take effect.</p>
</li>
</ol>
</div>
<div class="paragraph">
<p>PHP should now be active using FastCGI. To verify this, browse to the URL <a href="http://localhost/xampp/phpinfo.php" class="bare">http://localhost/xampp/phpinfo.php</a>, which displays the output of the <em>phpinfo()</em> command, and check the "Server API" value near the top of the page.</p>
</div>
<div class="imageblock">
<div class="content">
<img src="./images/use-php-fcgi/image1.png" alt="image1">
</div>
</div>
    </article>
  </div>
</div>

    </div>

    <footer class="footer row">
      <div class="columns">
        <div class="footer_lists-container row collapse">
          <div class="footer_social columns large-2">
            <ul class="social">
  <li class="twitter"><a href="https://twitter.com/apachefriends">Follow us on Twitter</a></li>
  <li class="facebook"><a href="https://www.facebook.com/we.are.xampp">Like us on Facebook</a></li>
</ul>

            <p class="footer_copyright">Copyright (c) 2022, Apache Friends</p>
          </div>
          <ul class="footer_links columns large-9">
            <li><a href="https://www.apachefriends.org/blog.html">Blog</a></li>
            <li><a href="/privacy_policy.html">Privacy Policy</a></li>
            <li>
<a target="_blank" href="http://www.fastly.com/">                CDN provided by
                <img width="48" data-2x="/dashboard/images/fastly-logo@2x.png" src="/dashboard/images/fastly-logo.png" />
</a>            </li>
          </ul>
        </div>
      </div>
    </footer>

    <!-- JS Libraries -->
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="/dashboard/javascripts/all.js" type="text/javascript"></script>
  </body>
</html>
