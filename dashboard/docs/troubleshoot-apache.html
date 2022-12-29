<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Use title if it's in the page YAML frontmatter -->
    <title>Troubleshoot Apache Startup Problems</title>

    
    

    <link href="/dashboard/stylesheets/normalize.css" rel="stylesheet" type="text/css" /><link href="/dashboard/stylesheets/all.css" rel="stylesheet" type="text/css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <script src="/dashboard/javascripts/modernizr.js" type="text/javascript"></script>


    <link href="/dashboard/images/favicon.png" rel="icon" type="image/png" />


  </head>

  <body class="docs docs_troubleshoot-apache">
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
<a class="pdf" target="_blank" href="/dashboard/docs/troubleshoot-apache.pdf">          Download PDF
          <span>troubleshoot-apache.pdf</span>
</a>      </li>
    </ul>
    <article class="asciidoctor">
        <aside>
          <h3>Contents</h3>
          <ol class="sections">
              <li><a href="/dashboard/docs/troubleshoot-apache.html#port_80_in_use_by_pid_4">Port 80 in use by PID 4</a></li>
              <li><a href="/dashboard/docs/troubleshoot-apache.html#ports_80_and_443_in_use_by_skype">Ports 80 and 443 in use by Skype</a></li>
              <li><a href="/dashboard/docs/troubleshoot-apache.html#port_443_in_use_by_vmware">Port 443 in use by VMWare</a></li>
              <li><a href="/dashboard/docs/troubleshoot-apache.html#serverroot_must_be_a_valid_directory">ServerRoot Must Be a Valid Directory</a></li>
              <li><a href="/dashboard/docs/troubleshoot-apache.html#xampp_cannot_start_on_port_80_windows_10">XAMPP cannot start on port 80 (Windows 10)</a></li>
              <li><a href="/dashboard/docs/troubleshoot-apache.html#the_microsoft_edge_browser_cannot_be_used_to_access_local_addresses_using_the_machine_host_name">The Microsoft Edge browser cannot be used to access local addresses using the machine host name.</a></li>
          </ol>
        </aside>
      <h1>Troubleshoot Apache Startup Problems</h1>
<div id="preamble">
<div class="sectionbody">
<div class="paragraph">
<p>Are you having difficulty getting your Apache server started? Here is a list of common problems and their solutions.</p>
</div>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
The information in this document is based on <a href="https://community.apachefriends.org/f/viewtopic.php?f=16&amp;t=69784">this ApacheFriends community forum thread</a>.
</td>
</tr>
</table>
</div>
</div>
</div>
<div class="sect1">
<h2 id="_port_80_in_use_by_pid_4">Port 80 in use by PID 4</h2>
<div class="sectionbody">
<div class="paragraph">
<p>Your XAMPP control panel displays this message:</p>
</div>
<div class="literalblock">
<div class="content">
<pre>XX:XX:XX [Apache] Port 80 in use by "Unable to open process" with PID 4!</pre>
</div>
</div>
<div class="paragraph">
<p>To solve this problem, follow these steps:</p>
</div>
<div class="olist arabic">
<ol class="arabic">
<li>
<p>Right-click the XAMPP control panel icon and select "Run as administrator". Enter administrator credentials (if required) and click "OK" or "Yes" to proceed.</p>
</li>
<li>
<p>Open your Windows command prompt by clicking the "Shell" button in the XAMPP control panel.</p>
</li>
<li>
<p>At the command prompt, enter this command:</p>
<div class="listingblock">
<div class="content">
<pre>netsh http add iplisten ipaddress=::</pre>
</div>
</div>
</li>
<li>
<p>Open the file <em>C:\Windows\system32\drivers\etc\hosts</em> and add the following line to it. Then, save the file.</p>
<div class="literalblock">
<div class="content">
<pre>127.0.0.1  localhost</pre>
</div>
</div>
<div class="imageblock">
<div class="content">
<img src="./images/troubleshoot-apache/image1.png" alt="image1">
</div>
</div>
<div class="paragraph">
<p>This takes care of mapping the <em>localhost</em> domain name to the local machine, which always has the IP address 127.0.0.1.</p>
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
On some versions of Windows, you will not be able to edit the <em>C:\Windows\system32\drivers\etc\hosts</em> file without administrator privileges. You can edit the file by right-clicking the Notepad icon and selected the "Run as administrator" menu option, then entering administrator credentials (if required) and clicking "OK" or "Yes" to proceed.
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
If the problem persists even after performing these steps, it could be due to a problem with Microsoft Internet Information Services (IIS), with Windows Work Folders or with third-party services. <a href="https://community.apachefriends.org/f/viewtopic.php?f=16&amp;t=69784">Refer to this page for alternative solutions</a>.
</td>
</tr>
</table>
</div>
</div>
</div>
<div class="sect1">
<h2 id="_ports_80_and_443_in_use_by_skype">Ports 80 and 443 in use by Skype</h2>
<div class="sectionbody">
<div class="paragraph">
<p>Your XAMPP control panel displays these messages:</p>
</div>
<div class="literalblock">
<div class="content">
<pre>XX:XX:XX [Apache] Port 80 in use by "C:\Program Files (x86)\Skype\Phone\Skype.exe" with PID XXXX!
XX:XX:XX [Apache] Port 443 in use by "C:\Program Files (x86)\Skype\Phone\Skype.exe" with PID XXXX!</pre>
</div>
</div>
<div class="paragraph">
<p>To solve this problem, follow these steps:</p>
</div>
<div class="olist arabic">
<ol class="arabic">
<li>
<p>Launch Skype.</p>
</li>
<li>
<p>Select the "Tools &#8594; Options &#8594; Advanced &#8594; Connection" menu item and in the resulting screen, disable the use of ports 80 and 443 for incoming Skype connections.</p>
<div class="imageblock">
<div class="content">
<img src="./images/troubleshoot-apache/image2.png" alt="image2">
</div>
</div>
</li>
<li>
<p>Click "Save". Restart Skype for your change to take effect.</p>
</li>
</ol>
</div>
</div>
</div>
<div class="sect1">
<h2 id="_port_443_in_use_by_vmware">Port 443 in use by VMWare</h2>
<div class="sectionbody">
<div class="paragraph">
<p>Your XAMPP control panel displays these messages:</p>
</div>
<div class="literalblock">
<div class="content">
<pre>XX:XX:XX [Apache] Port 443 in use by ""C:\Program Files (x86)\VMware\VMware Workstation\vmware-hostd.exe" -u "C:\ProgramData\VMware\hostd\config.xml"" with PID XXXX!</pre>
</div>
</div>
<div class="paragraph">
<p>To solve this problem, follow these steps:</p>
</div>
<div class="olist arabic">
<ol class="arabic">
<li>
<p>Launch VMWare Workstation.</p>
</li>
<li>
<p>Use the "Edit &#8594; Preferences &#8594; Shared VMs" menu and in the resulting dialog, enter a new port number for the VMWare Workstation Server.</p>
</li>
<li>
<p>Click "OK" to save your changes. Restart VMWare Workstation for your change to take effect.</p>
</li>
</ol>
</div>
</div>
</div>
<div class="sect1">
<h2 id="_serverroot_must_be_a_valid_directory">ServerRoot Must Be a Valid Directory</h2>
<div class="sectionbody">
<div class="paragraph">
<p>Apache startup includes an error message like the one below:</p>
</div>
<div class="literalblock">
<div class="content">
<pre>httpd.exe: Syntax error on line XX of X:/xampp/apache/conf/httpd.conf: ServerRoot must be a valid directory</pre>
</div>
</div>
<div class="paragraph">
<p>This is a common issue for XAMPP installations on portable devices. It occurs if the Apache configuration file points to a directory that no longer exists (for example, due to a drive letter change when a portable device is removed and reinserted). To solve this problem, follow these steps:</p>
</div>
<div class="olist arabic">
<ol class="arabic">
<li>
<p>If the Apache service is registered (indicated by a green check mark next to its name in the XAMPP control panel), unregister it by clicking the check mark and answering "Yes" in the resulting dialog box.</p>
<div class="imageblock">
<div class="content">
<img src="./images/troubleshoot-apache/image3.png" alt="image3">
</div>
</div>
</li>
<li>
<p>Edit the <em>setup_xampp.bat</em> file in your XAMPP installation directory (usually, <em>C:\xampp</em>). Within the file, find this line:</p>
<div class="literalblock">
<div class="content">
<pre>%PHP_BIN% -n -d output_buffering=0 %CONFIG_PHP%</pre>
</div>
</div>
</li>
<li>
<p>Edit the line to include the special directive "usb" at the end, so that it looks like this.</p>
<div class="literalblock">
<div class="content">
<pre>%PHP_BIN% -n -d output_buffering=0 %CONFIG_PHP% usb</pre>
</div>
</div>
</li>
<li>
<p>Save your changes. The, execute the file by double-clicking it in the Windows Explorer or executing it at the command prompt. This will fix any and all wrong base paths.</p>
</li>
</ol>
</div>
</div>
</div>
<div class="sect1">
<h2 id="_xampp_cannot_start_on_port_80_windows_10">XAMPP cannot start on port 80 (Windows 10)</h2>
<div class="sectionbody">
<div class="paragraph">
<p>By default, Windows 10 starts Microsoft IIS on port 80, which is the same default port used by Apache in XAMPP. As a result, Apache cannot bind to port 80.</p>
</div>
<div class="paragraph">
<p>To check whether port 80 is in use, open a command prompt and run these commands:</p>
</div>
<div class="literalblock">
<div class="content">
<pre>netstat -o -n -a | findstr 0.0.0.0:80
netstat -o -n -a | findstr 127.0.0.1:80</pre>
</div>
</div>
<div class="imageblock">
<div class="content">
<img src="./images/troubleshoot-apache/image4.png" alt="image4">
</div>
</div>
<div class="paragraph">
<p>To deactivate IIS from running on port 80, follow these steps:</p>
</div>
<div class="olist arabic">
<ol class="arabic">
<li>
<p>Open the Services panel in Computer Management.</p>
</li>
<li>
<p>Search for the "World Wide Web Publishing Service" and select it.</p>
</li>
<li>
<p>Click the link to "Stop the service".</p>
<div class="imageblock">
<div class="content">
<img src="./images/troubleshoot-apache/image5.png" alt="image5">
</div>
</div>
</li>
<li>
<p>Double-click the service name.</p>
</li>
<li>
<p>In the "Startup type" field, change the startup type to "Disabled".</p>
<div class="imageblock">
<div class="content">
<img src="./images/troubleshoot-apache/image6.png" alt="image6">
</div>
</div>
</li>
<li>
<p>Click "OK" to save your changes.</p>
</li>
</ol>
</div>
<div class="paragraph">
<p>You should now be able to start Apache in XAMPP on port 80.</p>
</div>
</div>
</div>
<div class="sect1">
<h2 id="_the_microsoft_edge_browser_cannot_be_used_to_access_local_addresses_using_the_machine_host_name">The Microsoft Edge browser cannot be used to access local addresses using the machine host name.</h2>
<div class="sectionbody">
<div class="paragraph">
<p>If your local machine has the host name 'myhost', you will not be able to access URLs such as <em><a href="http://myhost" class="bare">http://myhost</a></em> in Microsoft Edge. To resolve this, you should instead use the addresses <em><a href="http://127.0.0.1" class="bare">http://127.0.0.1</a></em> or <em><a href="http://localhost" class="bare">http://localhost</a></em>.</p>
</div>
<div class="imageblock">
<div class="content">
<img src="./images/troubleshoot-apache/image7.png" alt="image7">
</div>
</div>
<div class="imageblock">
<div class="content">
<img src="./images/troubleshoot-apache/image8.png" alt="image8">
</div>
</div>
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
