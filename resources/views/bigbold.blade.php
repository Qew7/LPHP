<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Home</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bigbold.css') }}">
</head>
<body>
<div class="container">
<header id="header" class="header">
            <div class="col-xs-1"><b>Fresh</b></div>
            <div class="col-xs-5"></div>
            <div class="col-xs-6">
                <ul>
                    <li><a class="btn" href="#home" role="button">HOME</a></li>
                    <li>
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown">FEATURES
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu1">
                            <li><a href="#WhatWeDo">What we do</a></li>
                            <li><a href="#">OH</a></li>
                            <li><a href="#">UH</a></li>
                        </ul>
                    </li>
                    <li>
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown">PORTFOLIO
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu2">
                            <li><a href="#LatestProjects">Latest Projects</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">1</a></li>
                        </ul>
                    </li>
                    <li>
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown">BLOG
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu3">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </li>
                    <li><a href="#footer" class="btn" role="button">CONTACT US</a></li>
                </ul>
            </div>
</header>
<div id="home">
    <div class="row" id="banner">
        <div class="text-center">BIG BOLD CALL TO ACTION!</div>
        <div class="text-center"><p>Describe a little about your company, current features and more. Followed by a call to action button on the bottom.</p></div>
        <div class="col-xs-5"></div>
        <div class="col-xs-1">
            <a class="btn btn-default" href="#" role="button">Click Here</a>
        </div>
        <div class="col-xs-1">
            <a class="btn btn-default black-background grey" href="#" role="button">Purchase Now</a>
        </div>
        <div class="col-xs-5"></div>
    </div>
    <div class="border" ></div>
    <div class="row" id="WhatWeDo">
        <div class="line text-center">
            <span class="title">&nbsp;  WHAT WE DO  &nbsp;</span>
        </div>
        <div class="col-xs-3">
            <span class="glyphicon glyphicon-star" aria-hidden="true"></span><br/>
            <b>STAR POWER</b><br/>
            A Feature Block helps showcase important information. Place images in the widget, or call a Content Set and change the images dynamically!<br/>
            <ins><a href="{{ url('/bigbold') }}">Link Title</a></ins>
        </div>
        <div class="col-xs-3">
            <span class="glyphicon glyphicon-volume-up" aria-hidden="true"></span><br/>
            <b>BROADCAST</b><br/>
            A Feature Block helps showcase important information. Place images in the widget, or call a Content Set and change the images dynamically!<br/>
            <ins><a href="{{ url('/bigbold') }}">Link Title</a></ins>
        </div>
        <div class="col-xs-3">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span><br/>
            <b>TALK A LOT</b><br/>
            A Feature Block helps showcase important information. Place images in the widget, or call a Content Set and change the images dynamically!<br/>
            <ins><a href="{{ url('/bigbold') }}">Link Title</a></ins>
        </div>
        <div class="col-xs-3">
            <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span><br/>
            <b>GROW</b><br/>
            A Feature Block helps showcase important information. Place images in the widget, or call a Content Set and change the images dynamically!<br/>
            <ins><a href="{{ url('/bigbold') }}">Link Title</a></ins>
        </div>
    </div>
    <div class="row" id="LatestProjects">
        <div class="line text-center">
            <span class="title" >&nbsp;  LATEST PROJECTS  &nbsp;</span>
        </div>
{{--        @include('bigboldprojects')--}}
        <table>
            <tr>
                <td>
                    <a href = "#" class = "thumbnail">
                        <img  src="http://dqbgk6hf2uifn.cloudfront.net/_img/cbc43d22-4e47-816d-05af-512f8e7452b1_0">
                    </a>
                </td>
                <td>
                    <a href = "#" class = "thumbnail">
                        <img  src="http://dqbgk6hf2uifn.cloudfront.net/_img/cbc43d22-4e47-816d-05af-512f8e7452b1_0">
                    </a>
                </td>
                <td>
                    <a href = "#" class = "thumbnail">
                        <img  src="http://dqbgk6hf2uifn.cloudfront.net/_img/cbc43d22-4e47-816d-05af-512f8e7452b1_0">
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href = "#" class = "thumbnail">
                        <img  src="http://dqbgk6hf2uifn.cloudfront.net/_img/cbc43d22-4e47-816d-05af-512f8e7452b1_0">
                    </a>
                </td>
                <td>
                    <a href = "#" class = "thumbnail">
                        <img  src="http://dqbgk6hf2uifn.cloudfront.net/_img/cbc43d22-4e47-816d-05af-512f8e7452b1_0">
                    </a>
                </td>
                <td>
                    <a href = "#" class = "thumbnail">
                        <img  src="http://dqbgk6hf2uifn.cloudfront.net/_img/cbc43d22-4e47-816d-05af-512f8e7452b1_0">
                    </a>
                </td>
            </tr>
        </table>
    </div>
<div class="line"></div>
    <div class="row">
        <div class="block"><b>WE WOULD LOVE TO HEAR FROM YOU&nbsp;</b></div>
        <div class="block"><a class="btn btn-default" href="#" role="button">Get in touch >></a></div>
    </div>
</div>
<footer class="footer">
        <div class="row" id="footer">
            <div class="col-xs-4">
                <div class="footer-title">
                    <span class="glyphicon glyphicon-link" aria-hidden="true"></span><b>&nbsp;Links</b>
                </div>
                <div class="block-footer">
                    <ul>
                        <li>Home</li>
                        <li>Mauris accusman</li>
                        <li>Lauris</li>
                        <li>Accusman</li>
                    </ul>
                </div>
                <div class="block-footer">
                    <ul>
                        <li>Hello world</li>
                        <li>Mauris accusman</li>
                        <li>Lauris</li>
                        <li>Accusman</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="footer-title">
                    <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span><b>&nbsp;Connect With Us</b>
                </div>
                Да, мне было лень вырезать каждую иконку и заливать её <br/>
                <img class="networks" src="http://i.imgur.com/ygH1f5j.png"/>
            </div>
            <div class="col-xs-4">
                <div class="footer-title">
                    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><b>&nbsp;Subscribe</b>
                </div>
                Subscribe to our newsletter to ger the latest news!
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon"><span id="inputspan" class="glyphicon glyphicon-envelope"></span></span>
                            <label class="sr-only" for="exampleInputEmail2">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Your Email">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default btn-sm" >Subscribe</button>
                </form>
            </div>
        </div>
        <div class="row" id="footer2">
            <ul>
                <li><a href = "#">Read the blog</a></li>
                <li><a href = "#">Submit</a></li>
                <li><a href = "#">Links</a></li>
            </ul>
        </div>
</footer>
</div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="{{ URL::asset('js/jquery.smoothscroll.js') }}"></script>
<script>
    $(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>

</body>
</html>



