<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="templates/css/style.css">
    <title>KuLong.Us</title>
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body>
<div class="container">

    <header class="header clearfix">
        <div class="logo">KuLong.Us</div>

        <nav class="menu_main">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="https://www.aproxy.club">Proxy List</a></li>
                <li><a href="./youtubedownload.php">Youtube Download</a></li>
                <li><a href="https://www.canivisit.com">Can I Visit?</a></li>
            </ul>
        </nav>
    </header>


    <div class="info">
        <article class="hero clearfix">
            <div class="col_100 ">
                <h1>What's KuLong.Us?</h1>
                <p>KuLong.Us  is a PHP Web based Proxy service which allows you to surf anonymously. KuLong.Us works by redirecting the requests you make to websites through our own server. Therefore any site you connect to thinks its coming directly from our server. Our services are totally free and do not require any type of registration.</p>
                <p>Some work places, offices, schools, etc. may block sites on the internet through firewalls. (in order to deny access to specific content they don't want you viewing) When you use KuLong.Us to view websites, you're using our proxy to bypass the firewall settings and to view what ever sites you want.</p>
                <p>Browse anonymously sites like Youtube,Twitter,DailyMotion,ReTube,Xhamster,XVideos and more From School,  Work or anywhere.</p>
            </div>
        </article>


        <article class="article clearfix">

            <?php if(isset($error_msg)){ ?>
                <div class="col_100 warning">
                    <p><code><?php echo $error_msg; ?></code></p>
                </div>
            <?php } ?>

            <p class="col_100 center">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- 自适应 -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-6760315876335321"
                     data-ad-slot="2683508288"
                     data-ad-format="auto"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </p>
            <div class="clearfix"></div>

            <div class="col_100">

                <form action="index.php" method="post" class="form">

                    <div class="col_100 center">
                        <strong>Input Link:</strong>
                        <input name="url" type="text" style="width:80%;" autocomplete="off" placeholder="http://" />
                        <button type="button" class="button">Start Surfer</button>
                    </div>

                    <div class="col_100 center">
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- 自适应 -->
                        <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-client="ca-pub-6760315876335321"
                             data-ad-slot="2683508288"
                             data-ad-format="auto"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>

                    <p class="col_100 center">
                        <strong>Choose Server:</strong>
                        <label for="radio-choice-1"><input type="radio" name="server" id="radio-choice-1" tabindex="1" value="1" checked /> Default</label>
                        <label for="radio-choice-2"><input type="radio" name="server" id="radio-choice-2" tabindex="2" value="2" /> Los Angeles, United States </label>
                        <label for="radio-choice-3"><input type="radio" name="server" id="radio-choice-3" tabindex="3" value="3" /> Montréal, Canada </label>
                        <label for="radio-choice-4"><input type="radio" name="server" id="radio-choice-4" tabindex="4" value="4" /> Falkenstein, Germany </label>
                    </p>
                </form>
                <p class="col_100 center"></p>
            </div>

            <div class="clearfix"></div>
        </article>
    </div>

    <footer class="footer clearfix">
        <div class="copyright">&copy; 2017 KuLong.Us,All Rights Reserved.</div>

        <nav class="menu_bottom">
            <ul>
                <li><a href="./">Home</a></li>
                <li><a href="./tos.html">Terms of Service</a></li>
                <li><a href="./privacy.html">Privacy Policy</a></li>
                <li><a href="#">Subscribe</a></li>
            </ul>
        </nav>
    </footer>

</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=hqin"></script>
</body>
</html>