
<!DOCTYPE html>
<html>
<head>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
   <link rel="stylesheet" href="./blog/blog.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php
   include 'header1.php';
    ?>


  <header>

    <div class="header-banner"style="background-image: url('img/nodejs1.png');">
        <h1>NODE.JS</h1>
    </div>
    
</header>

<section class="content">
  <div class="row">
    <article>
                Node.js is an open-source, cross-platform, JavaScript runtime environment that executes JavaScript code outside a web browser. Node.js lets developers use JavaScript to write command line tools and for server-side scripting—running scripts server-side to produce dynamic web page content before the page is sent to the user's web browser. Consequently, Node.js represents a "JavaScript everywhere" paradigm, unifying web-application development around a single programming language, rather than different languages for server- and client-side scripts.<br>

                Though .js is the standard filename extension for JavaScript code, the name "Node.js" doesn't refer to a particular file in this context and is merely the name of the product. Node.js has an event-driven architecture capable of asynchronous I/O. These design choices aim to optimize throughput and scalability in web applications with many input/output operations, as well as for real-time Web applications (e.g., real-time communication programs and browser games)..<br>

                The Node.js distributed development project was previously governed by the Node.js Foundation,and has now merged with the JS Foundation to form the OpenJS Foundation, which is facilitated by the Linux Foundation's Collaborative Projects program.<br>
              
                Node.js was written initially by Ryan Dahl in 2009, about thirteen years after the introduction of the first server-side JavaScript environment, Netscape's LiveWire Pro Web. The initial release supported only Linux and Mac OS X. Its development and maintenance was led by Dahl and later sponsored by Joyent.

                Dahl criticized the limited possibilities of the most popular web server in 2009, Apache HTTP Server, to handle a lot of concurrent connections (up to 10,000 and more) and the most common way of creating code (sequential programming), when code either blocked the entire process or implied multiple execution stacks in the case of simultaneous connections.<br>

                Node.js allows the creation of Web servers and networking tools using JavaScript and a collection of "modules" that handle various core functionalities.Modules are provided for file system I/O, networking (DNS, HTTP, TCP, TLS/SSL, or UDP), binary data (buffers), cryptography functions, data streams, and other core functions. Node.js's modules use an API designed to reduce the complexity of writing server applications.<br>

                JavaScript is the only language that Node.js supports natively, but many compile-to-JS languages are available. As a result, Node.js applications can be written in CoffeeScript, Dart, TypeScript, ClojureScript and others.<br>

               Node.js is primarily used to build network programs such as Web servers.[44] The most significant difference between Node.js and PHP is that most functions in PHP block until completion (commands only execute after previous commands finish), while Node.js functions are non-blocking (commands execute concurrently or even in parallel, and use callbacks to signal completion or failure).<br>

               Node.js is officially supported on Linux, macOS and Microsoft Windows 8.1 and Server 2012 (and later),with tier 2 support for SmartOS and IBM AIX and experimental support for FreeBSD. OpenBSD also works, and LTS versions available for IBM i (AS/400). The provided source code may also be built on similar operating systems to those officially supported or be modified by third parties to support others such as NonStop OS and Unix servers.



     </article>
  </div>
</section>
<?php
     include 'footer1.php';
   ?>
</body>
</html>
