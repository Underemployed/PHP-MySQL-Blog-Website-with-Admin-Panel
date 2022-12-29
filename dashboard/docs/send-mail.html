<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Use title if it's in the page YAML frontmatter -->
    <title>Send Mail with PHP</title>

    
    

    <link href="/dashboard/stylesheets/normalize.css" rel="stylesheet" type="text/css" /><link href="/dashboard/stylesheets/all.css" rel="stylesheet" type="text/css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <script src="/dashboard/javascripts/modernizr.js" type="text/javascript"></script>


    <link href="/dashboard/images/favicon.png" rel="icon" type="image/png" />


  </head>

  <body class="docs docs_send-mail">
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
<a class="pdf" target="_blank" href="/dashboard/docs/send-mail.pdf">          Download PDF
          <span>send-mail.pdf</span>
</a>      </li>
    </ul>
    <article class="asciidoctor">
      <h1>Send Mail with PHP</h1>
<div class="paragraph">
<p>If you&#8217;re a PHP application developer, you might need to send email notifications through your custom PHP applications. With XAMPP, there are two ways to do this: you can use the included <em>sendmail.exe</em> binary, or you can use the third-party <a href="http://phpmailer.worxware.com/">PHPMailer</a> class. This guide walks you through both options.</p>
</div>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
This guide assumes that you have an existing Gmail account, and that you will use Gmail&#8217;s SMTP server to transmit email. You can also use your organization or ISP&#8217;s mail server, although you&#8217;ll need to replace key details, such as the SMTP server name and port, with appropriate values for your environment. Your network administrator or ISP support desk will typically be able to provide this information. The example code provided in this tutorial is illustrative only and should not be used in production environments.
</td>
</tr>
</table>
</div>
<div class="paragraph">
<p>To configure XAMPP to use <em>sendmail.exe</em> for email notifications, follow these steps:</p>
</div>
<div class="olist arabic">
<ol class="arabic">
<li>
<p>Edit the <em>php.ini</em> file in the <em>php\</em> subdirectory of your XAMPP installation directory (usually, <em>C:\xampp</em>). Within this file, find the [mail function] section and replace it with the following directives:</p>
<div class="literalblock">
<div class="content">
<pre>sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"</pre>
</div>
</div>
</li>
<li>
<p>Edit the <em>sendmail.ini</em> file in the <em>sendmail\</em> subdirectory of your XAMPP installation directory. Within this file, find the [sendmail] section and replace it with the following directives:</p>
<div class="literalblock">
<div class="content">
<pre>smtp_server=smtp.gmail.com
smtp_port=465
smtp_ssl=auto
error_logfile=error.log
auth_username=your-gmail-username@gmail.com
auth_password=your-gmail-password</pre>
</div>
</div>
<div class="paragraph">
<p>Remember to replace the dummy values shown with your actual Gmail address and account password.</p>
</div>
</li>
<li>
<p>Restart the Apache server using the XAMPP control panel.</p>
</li>
</ol>
</div>
<div class="paragraph">
<p>You can now use PHP&#8217;s <em>mail()</em> function to send email from your application. To illustrate how it can be used with your Gmail account, use your text editor to create an example script named <em>sendmail.php</em> in the <em>htdocs\</em> subdirectory and fill it with the following code. Once done, save your changes.</p>
</div>
<div class="literalblock">
<div class="content">
<pre>&lt;?php
$to = 'recipients@email-address.com';
$subject = 'Hello from XAMPP!';
$message = 'This is a test';
$headers = "From: your@email-address.com\r\n";
if (mail($to, $subject, $message, $headers)) {
   echo "SUCCESS";
} else {
   echo "ERROR";
}</pre>
</div>
</div>
<div class="paragraph">
<p>Remember to replace the dummy values shown with valid email addresses. For this simple test, use your own email address as the recipient address.</p>
</div>
<div class="paragraph">
<p>Now, browse to the URL <a href="http://localhost/sendmail.php" class="bare">http://localhost/sendmail.php</a> to execute the script and send the email message. If all goes well, you should see a success notification in your browser. If you used your own email address for the recipient address, you should also receive the email message.</p>
</div>
<div class="imageblock">
<div class="content">
<img src="./images/send-mail/image1.png" alt="image1">
</div>
</div>
<div class="paragraph">
<p>To configure XAMPP to use PHPMailer for email notifications, follow these steps:</p>
</div>
<div class="olist arabic">
<ol class="arabic">
<li>
<p>Download PHPMailer from its Github repository using the "Download Zip" button.</p>
<div class="imageblock">
<div class="content">
<img src="./images/send-mail/image2.png" alt="image2">
</div>
</div>
</li>
<li>
<p>Create a directory for your new application within the <em>htdocs\</em> subdirectory of your XAMPP installation directory. In this tutorial, the application directory is named <em>example\</em>.</p>
</li>
<li>
<p>Extract the contents of the PHPMailer ZIP archive to the application directory.</p>
</li>
</ol>
</div>
<div class="paragraph">
<p>You can now use PHPMailer to send email from your application. To illustrate how it can be used with your Gmail account, use your text editor to create an example script named <em>phpmailer.php</em> in the application directory, and fill it with the following code. Once done, save your changes.</p>
</div>
<div class="literalblock">
<div class="content">
<pre>&lt;?php
require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail-&gt;isSMTP();
$mail-&gt;SMTPSecure = 'ssl';
$mail-&gt;SMTPAuth = true;
$mail-&gt;Host = 'smtp.gmail.com';
$mail-&gt;Port = 465;
$mail-&gt;Username = 'your-gmail-username@gmail.com';
$mail-&gt;Password = 'your-gmail-password';
$mail-&gt;setFrom('your@email-address.com');
$mail-&gt;addAddress('recipients@email-address.com');
$mail-&gt;Subject = 'Hello from PHPMailer!';
$mail-&gt;Body = 'This is a test.';
//send the message, check for errors
if (!$mail-&gt;send()) {
    echo "ERROR: " . $mail-&gt;ErrorInfo;
} else {
    echo "SUCCESS";
}</pre>
</div>
</div>
<div class="paragraph">
<p>Remember to replace the dummy values shown with your actual Gmail address and account password. You should also use a valid sender and recipient address. For this simple test, use your own email address as the recipient address.</p>
</div>
<div class="paragraph">
<p>Now, browse to the URL <a href="http://localhost/example/phpmailer.php" class="bare">http://localhost/example/phpmailer.php</a>. This should execute the script and send the email message. If all goes well, you should see a success notification in your browser. If you used your own email address for the recipient address, you should also receive the email message.</p>
</div>
<div class="imageblock">
<div class="content">
<img src="./images/send-mail/image3.png" alt="image3">
</div>
</div>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
As a security precaution, Gmail will automatically rewrite the From: and Reply-to: headers in your email message to reflect your Gmail address. If you want to avoid this, you must add and validate your custom email address in your Gmail account as a sender. Refer to <a href="https://support.google.com/mail/answer/22370?hl=en">Gmail&#8217;s documentation for more information and important restrictions</a>.
</td>
</tr>
</table>
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
