<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Use title if it's in the page YAML frontmatter -->
    <title>Configure Virtual Hosts</title>

    
    

    <link href="/dashboard/stylesheets/normalize.css" rel="stylesheet" type="text/css" /><link href="/dashboard/stylesheets/all.css" rel="stylesheet" type="text/css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <script src="/dashboard/javascripts/modernizr.js" type="text/javascript"></script>


    <link href="/dashboard/images/favicon.png" rel="icon" type="image/png" />


  </head>

  <body class="docs docs_configure-vhosts">
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
<a class="pdf" target="_blank" href="/dashboard/docs/configure-vhosts.pdf">          Download PDF
          <span>configure-vhosts.pdf</span>
</a>      </li>
    </ul>
    <article class="asciidoctor">
      <h1>Configure Virtual Hosts</h1>
<div class="paragraph">
<p>Apache makes it easy to have multiple websites or web applications running on the same physical server, and access each using a custom domain name. This is known as <em>virtual hosting</em>, and each virtual host can be mapped to a different subdirectory of the server.</p>
</div>
<div class="paragraph">
<p>This feature is especially useful in development scenarios, as it allows developers to isolate and access different applications using unique domain names. For example, the domains <em><a href="http://app01.localhost" class="bare">http://app01.localhost</a></em> and <em><a href="http://app02.localhost" class="bare">http://app02.localhost</a></em> could point to two separate applications on the same server. Or, you could create separate domains, such as <em><a href="http://client1/" class="bare">http://client1/</a></em>, <em><a href="http://client2/" class="bare">http://client2/</a></em> and so on, for multiple client websites hosted on the same server.</p>
</div>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
Virtual hosts created in this manner will not be accessible from other systems, unless those systems are separately configured to associate the custom domain used by the virtual host with the IP address of the XAMPP server.
This guide walks you through the process of setting up a new virtual host with XAMPP, by creating and configuring an example host named <em>wordpress.localhost</em> for a WordPress installation. It assumes that you have an existing WordPress installation at <em>C:\xampp\apps\wordpress\htdocs\</em> and accessible via the URL <a href="http://localhost/wordpress" class="bare">http://localhost/wordpress</a>.
</td>
</tr>
</table>
</div>
<div class="admonitionblock tip">
<table>
<tr>
<td class="icon">
<i class="fa icon-tip" title="Tip"></i>
</td>
<td class="content">
You can install WordPress with just a few clicks using the <a href="https://bitnami.com/stack/xampp#wordpress">Bitnami WordPress Module for XAMPP</a>.
</td>
</tr>
</table>
</div>
<div class="paragraph">
<p>Follow the steps below to create a virtual host:</p>
</div>
<div class="olist arabic">
<ol class="arabic">
<li>
<p>Change to your XAMPP installation directory (typically, <em>C:\xampp</em>) and open the <em>httpd-vhosts.conf</em> file in the <em>apache\conf\extra\</em> subdirectory using your favourite text editor.</p>
</li>
<li>
<p>Replace the contents of this file with the following directives:</p>
<div class="literalblock">
<div class="content">
<pre>&lt;VirtualHost *:80&gt;
       DocumentRoot "C:/xampp/htdocs/"
       ServerName localhost
&lt;/VirtualHost&gt;
&lt;VirtualHost *:80&gt;
       DocumentRoot "C:/xampp/apps/wordpress/htdocs"
       ServerName wordpress.localhost
&lt;/VirtualHost&gt;</pre>
</div>
</div>
<div class="imageblock">
<div class="content">
<img src="./images/configure-vhosts/image1.png" alt="image1">
</div>
</div>
<div class="paragraph">
<p>This contains two virtual host configuration blocks:</p>
</div>
<div class="ulist">
<ul>
<li>
<p>The first block is the default or fallback virtual host, which is used for all requests that are not matched by subsequent blocks.</p>
</li>
<li>
<p>The second block sets up a virtual host named <em>wordpress.localhost</em>. The DocumentRoot directive specifies the directory to be used when serving requests for this virtual host (in this case, the WordPress installation directory), while the ServerName directive specifies the custom domain name for the virtual host.</p>
</li>
</ul>
</div>
<div class="paragraph">
<p>To add more virtual hosts, simply duplicate the second virtual host block and modify the port number, DocumentRoot and ServerName directives as per your requirements. For example, if you want to use SSL with your custom domain name, you can add a new virtual host block for port 443.</p>
</div>
<div class="admonitionblock tip">
<table>
<tr>
<td class="icon">
<i class="fa icon-tip" title="Tip"></i>
</td>
<td class="content">
If you plan to have a large number of virtual hosts with very similar configuration, consider using wildcard-based subdomains with your virtual hosts.
</td>
</tr>
</table>
</div>
</li>
<li>
<p>Restart Apache using the XAMPP control panel for your changes to take effect.</p>
<div class="imageblock">
<div class="content">
<img src="./images/configure-vhosts/image2.png" alt="image2">
</div>
</div>
</li>
<li>
<p>At this point, your virtual host is configured. However, if you try browsing to the <em>wordpress.localhost</em> domain, your browser will show a failure notice, since this domain does not exist in reality. To resolve this, it is necessary to map the custom domain to the local IP address. To do this, open the file <em>C:\windows\system32\drivers\etc\hosts</em> and add the following line to it:</p>
<div class="literalblock">
<div class="content">
<pre>127.0.0.1           wordpress.localhost</pre>
</div>
</div>
<div class="imageblock">
<div class="content">
<img src="./images/configure-vhosts/image3.png" alt="image3">
</div>
</div>
<div class="paragraph">
<p>This takes care of mapping the <em>wordpress.localhost</em> domain name to the local machine, which always has the IP address 127.0.0.1.</p>
</div>
</li>
</ol>
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
<p>At this point, you should be able to enter the URL <a href="http://wordpress.localhost" class="bare">http://wordpress.localhost</a> in your browser&#8217;s address bar and see your WordPress installation. Here&#8217;s an example of what you should see:</p>
</div>
<div class="imageblock">
<div class="content">
<img src="./images/configure-vhosts/image4.png" alt="image4">
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
