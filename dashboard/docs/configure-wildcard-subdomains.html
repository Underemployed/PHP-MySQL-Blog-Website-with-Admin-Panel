<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Use title if it's in the page YAML frontmatter -->
    <title>Configure Wildcard-Based Subdomains</title>

    
    

    <link href="/dashboard/stylesheets/normalize.css" rel="stylesheet" type="text/css" /><link href="/dashboard/stylesheets/all.css" rel="stylesheet" type="text/css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <script src="/dashboard/javascripts/modernizr.js" type="text/javascript"></script>


    <link href="/dashboard/images/favicon.png" rel="icon" type="image/png" />


  </head>

  <body class="docs docs_configure-wildcard-subdomains">
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
<a class="pdf" target="_blank" href="/dashboard/docs/configure-wildcard-subdomains.pdf">          Download PDF
          <span>configure-wildcard-subdomains.pdf</span>
</a>      </li>
    </ul>
    <article class="asciidoctor">
      <h1>Configure Wildcard-Based Subdomains</h1>
<div class="paragraph">
<p>Apache&#8217;s virtual hosting feature makes it easy to host multiple websites or web applications on the same server, each accessible with a different domain name. However, when you have a large number of virtual hosts sharing almost-identical configuration, wildcard-based subdomains simplify maintenance and reduce the effort involved in adding a new virtual host.</p>
</div>
<div class="paragraph">
<p>With wildcard subdomains, it&#8217;s no longer necessary to edit the Apache configuration file or restart the server to initialize a new virtual host. Instead, you simply need to create a subdirectory matching the subdomain name on the server with your content, and Apache will automatically use that directory to serve requests for the corresponding subdomain.</p>
</div>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
Virtual hosts created in this manner will not be accessible from other systems, unless those systems are separately configured to associate the custom domains used by virtual hosts with the IP address of the XAMPP server.
</td>
</tr>
</table>
</div>
<div class="paragraph">
<p>This guide walks you through the process of setting up wildcard virtual hosts with XAMPP, such that requests for <em>subdomain.localhost</em> are automatically served by the <em>subdomain/</em> directory of the main server document root. Follow the steps below:
 . Change to your XAMPP installation directory (typically, <em>C:\xampp</em>) and open the <em>httpd.conf</em> file in the <em>apache\conf\</em> subdirectory using your favourite text editor. Within the file, find the following line and uncomment it by removing the hash symbol (#) at the beginning of the line.</p>
</div>
<div class="literalblock">
<div class="content">
<pre>LoadModule vhost_alias_module modules/mod_vhost_alias.so</pre>
</div>
</div>
<div class="olist arabic">
<ol class="arabic">
<li>
<p>Next, edit the <em>httpd-vhosts.conf</em> file in the <em>apache\conf\extra\</em> subdirectory of your XAMPP installation directory.</p>
</li>
<li>
<p>Replace the contents of this file with the following directives:</p>
<div class="literalblock">
<div class="content">
<pre>UseCanonicalName Off
&lt;VirtualHost *:80&gt;
       DocumentRoot "C:/xampp/htdocs/"
       ServerName localhost
&lt;/VirtualHost&gt;
&lt;VirtualHost *:80&gt;
       ServerAlias *.localhost
       VirtualDocumentRoot "C:/xampp/htdocs/%1/"
&lt;/VirtualHost&gt;</pre>
</div>
</div>
<div class="imageblock">
<div class="content">
<img src="./images/configure-wildcard-subdomains/image1.png" alt="image1">
</div>
</div>
<div class="paragraph">
<p>In this configuration, the first virtual host block configures how requests are handled by default. The second block configures wildcard virtual hosting for subdomains, such that requests for <em>subdomain.localhost</em> are automatically served by the <em>subdomain\</em> directory of the <em>C:\xampp\htdocs\</em> directory. In particular, notice the %1 placeholder, which matches the subdomain name from the request URL.</p>
</div>
</li>
<li>
<p>Restart Apache using the XAMPP control panel for your changes to take effect.</p>
<div class="imageblock">
<div class="content">
<img src="./images/configure-wildcard-subdomains/image2.png" alt="image2">
</div>
</div>
</li>
</ol>
</div>
<div class="paragraph">
<p>At this point, your wildcard subdomains are configured. You can easily test this by using the Windows Explorer to create two new subdirectories at <em>C:\xampp\htdocs\app01\</em> and <em>C:\xampp\htdocs\app02\</em>. Within each subdirectory, create a file named <em>index.html</em> and fill it with some sample HTML content. Use different content for each file, so that you can easily distinguish that they&#8217;re being served from different directories - for example:</p>
</div>
<div class="literalblock">
<div class="content">
<pre>&lt;!-- index.html in app01 directory --&gt;
&lt;html&gt;
 &lt;head&gt;&lt;/head&gt;
 &lt;body&gt;
  &lt;h1&gt;Welcome to app01.localhost!&lt;/h1&gt;
 &lt;/body&gt;
&lt;/html&gt;</pre>
</div>
</div>
<div class="literalblock">
<div class="content">
<pre>&lt;!-- index.html in app02 directory --&gt;
&lt;html&gt;
 &lt;head&gt;&lt;/head&gt;
 &lt;body&gt;
  &lt;h1&gt;Hello from app02.localhost!&lt;/h1&gt;
 &lt;/body&gt;
&lt;/html&gt;</pre>
</div>
</div>
<div class="paragraph">
<p>Since these domains do not actually exist in reality, you also need to map them to the local IP address. Open the file <em>C:\windows\system32\drivers\etc\hosts</em> in a text editor and add the following line to it:</p>
</div>
<div class="literalblock">
<div class="content">
<pre>127.0.0.1           app01.localhost   app02.localhost</pre>
</div>
</div>
<div class="imageblock">
<div class="content">
<img src="./images/configure-wildcard-subdomains/image3.png" alt="image3">
</div>
</div>
<div class="admonitionblock tip">
<table>
<tr>
<td class="icon">
<i class="fa icon-tip" title="Tip"></i>
</td>
<td class="content">
You will need to do this every time you want to configure a new wildcard virtual host, because the Windows <em>hosts</em> file does not support wildcard entries. To avoid this step, you can use a DNS server or local DNS proxy that supports wildcards and therefore takes care of automatically resolving requests for <em>*.localhost</em> to the local IP address.
</td>
</tr>
</table>
</div>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
On some versions of Windows, you will not be able to edit the <em>C:\windows\system32\drivers\etc\hosts</em> file without administrator privileges. You can edit the file by right-clicking the Notepad icon and selected the "Run as administrator" menu option, then entering administrator credentials (if required) and clicking "OK" or "Yes" to proceed.
</td>
</tr>
</table>
</div>
<div class="paragraph">
<p>At this point, you should be able to enter the URLs <a href="http://app01.localhost" class="bare">http://app01.localhost</a> or <a href="http://app02.localhost" class="bare">http://app02.localhost</a> in your browser&#8217;s address bar, and you should then see the corresponding HTML page.</p>
</div>
<div class="imageblock">
<div class="content">
<img src="./images/configure-wildcard-subdomains/image4.png" alt="image4">
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
