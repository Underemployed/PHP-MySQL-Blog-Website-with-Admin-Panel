<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Use title if it's in the page YAML frontmatter -->
    <title>Use SQLite and PHP</title>

    
    

    <link href="/dashboard/stylesheets/normalize.css" rel="stylesheet" type="text/css" /><link href="/dashboard/stylesheets/all.css" rel="stylesheet" type="text/css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <script src="/dashboard/javascripts/modernizr.js" type="text/javascript"></script>


    <link href="/dashboard/images/favicon.png" rel="icon" type="image/png" />


  </head>

  <body class="docs docs_use-sqlite">
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
<a class="pdf" target="_blank" href="/dashboard/docs/use-sqlite.pdf">          Download PDF
          <span>use-sqlite.pdf</span>
</a>      </li>
    </ul>
    <article class="asciidoctor">
      <h1>Use SQLite and PHP</h1>
<div class="paragraph">
<p>XAMPP comes with built-in support for SQLite, making it easy to get started building database-powered applications with PHP. This guide will walk you through the process of creating and populating a new SQLite database using XAMPP, then accessing the data within it using PHP.</p>
</div>
<div class="paragraph">
<p>Begin by creating and populating a new database using the SQLite command-line client, as below:</p>
</div>
<div class="olist arabic">
<ol class="arabic">
<li>
<p>Open your Windows command prompt by clicking the “Shell” button in the XAMPP control panel.</p>
</li>
<li>
<p>Change to the <em>htdocs\</em> subdirectory of your XAMPP installation directory (typically <em>C:\xampp</em>) and create a new SQLite database file named <em>mydb.sq3</em> with the SQLite command-line client:</p>
<div class="literalblock">
<div class="content">
<pre>cd C:\xampp\htdocs
sqlite3 mydb.sq3</pre>
</div>
</div>
<div class="paragraph">
<p>You should now see an SQLite prompt, as below:</p>
</div>
<div class="imageblock">
<div class="content">
<img src="./images/use-sqlite/image1.png" alt="image1">
</div>
</div>
</li>
<li>
<p>At the <em>sqlite&gt;</em> prompt, create a new table to hold your data. In this example, the table is named items and it contains 3 columns, for item ID, item name and item cost. You can use standard CREATE TABLE syntax to create the table, and you can <a href="http://www.sqlite.org/datatype3.html">learn more about SQLite&#8217;s built-in datatypes here</a>.</p>
<div class="literalblock">
<div class="content">
<pre>CREATE TABLE items (id INTEGER PRIMARY KEY, name TEXT, price REAL);</pre>
</div>
</div>
</li>
<li>
<p>Add some data to the new inventory table using INSERT commands, as shown below:</p>
<div class="literalblock">
<div class="content">
<pre>INSERT INTO items VALUES ('1001', 'Salt', 3.15);
INSERT INTO items VALUES ('1002', 'Pepper', 2.75);
INSERT INTO items VALUES ('1003', 'Eggs', 2.00);
INSERT INTO items VALUES ('1004', 'Bacon', 7.25);
INSERT INTO items VALUES ('1005', 'Milk', 1.15);
INSERT INTO items VALUES ('1006', 'Strawberries', 8.73);
INSERT INTO items VALUES ('1007', 'Cereal', 2.65);</pre>
</div>
</div>
</li>
<li>
<p>You can now also run a SELECT query on the data. For example, the query below returns all items that cost less than $3:</p>
<div class="literalblock">
<div class="content">
<pre>SELECT * FROM items WHERE price &lt; 3.00;</pre>
</div>
</div>
<div class="imageblock">
<div class="content">
<img src="./images/use-sqlite/image2.png" alt="image2">
</div>
</div>
</li>
<li>
<p>Once you&#8217;re done using the database, exit it by typing <em>.quit</em> at the <em>sqlite&gt;</em> prompt.</p>
</li>
</ol>
</div>
<div class="admonitionblock important">
<table>
<tr>
<td class="icon">
<i class="fa icon-important" title="Important"></i>
</td>
<td class="content">
The database file (in this example, <em>mydb.sq3</em>) contains all your tables and data, so you should remember to back it up regularly.
</td>
</tr>
</table>
</div>
<div class="paragraph">
<p>The previous steps discussed how to create and use an SQLite database using the command-line client. However, more often than not, you&#8217;ll be using an SQLite database in combination with a PHP-powered Web application. XAMPP includes the PHP SQLite extension, so doing this is not very difficult at all.</p>
</div>
<div class="paragraph">
<p>To connect to your SQLite database and execute queries on it with PHP, use your text editor to create an example script named <em>sqlite.php</em> in the <em>htdocs</em> subdirectory of your XAMPP installation directory and fill it with the following code:</p>
</div>
<div class="literalblock">
<div class="content">
<pre>&lt;?php
$db = new SQLite3('mydb.sq3');
$sql = "SELECT * FROM items WHERE price &lt; 3.00";
$result = $db-&gt;query($sql);
while ($row = $result-&gt;fetchArray(SQLITE3_ASSOC)){
  echo $row['name'] . ': $' . $row['price'] . '&lt;br/&gt;';
}
unset($db);</pre>
</div>
</div>
<div class="paragraph">
<p>The first line of code creates a new SQLite3 object, using the <em>mydb.sq3</em> database file you created earlier. Then, the object&#8217;s <em>query()</em> method is used to execute a SELECT query on the database, and the result object&#8217;s <em>fetchArray()</em> method is used to iterate over the result set. Adding the SQLITE3_ASSOC parameter to the <em>fetchArray()</em> method tells PHP to return the results as an associative array, making it easy to access individual fields of the result set and display them on a Web page.</p>
</div>
<div class="paragraph">
<p>Once done, save your changes and ensure that your Apache server is running. Then, browse to <a href="http://localhost/sqlite.php" class="bare">http://localhost/sqlite.php</a> to execute the script. You should see something like this:</p>
</div>
<div class="imageblock">
<div class="content">
<img src="./images/use-sqlite/image3.png" alt="image3">
</div>
</div>
<div class="admonitionblock tip">
<table>
<tr>
<td class="icon">
<i class="fa icon-tip" title="Tip"></i>
</td>
<td class="content">
To find out more about SQLite’s powerful features, <a href="http://sqlite.org/docs/">read the SQLite documentation</a>.
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
