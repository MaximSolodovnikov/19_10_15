<!DOCTYPE html>
<html>
    <head>
        <link href="<?=base_url();?>images/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <link href='https://fonts.googleapis.com/css?family=Comfortaa:400,700,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link type="text/css" rel="stylesheet" href="<?=base_url();?>css/style.css" />
        <link type="text/css" rel="stylesheet" href="<?=base_url();?>css/bootstrap.min.css" />
        <script type="text/javascript" src="<?=base_url();?>js/jquery-1.11.3.min.js" ></script>
        <script type="text/javascript" src="<?=base_url();?>js/bootstrap.min.js" ></script>
        <title>My fruit and vegetable garden</title>
    </head>
    <body>
	<div class="content">
            <div class="header">
                    <div class="top_info">
                        <div class="top_info_right">
                            <p>Do you want to <a href="#">Log in</a> or <a href="#">register</a>?</p>
                            <div class="right_login">
                                    <form class="form-inline">
                                            <input type="text" class="input-small" placeholder="Login">
                                            <input type="password" class="input-small" placeholder="Password">
                                            <input type="submit" class="btn btn-warning" name="login" value="Enter">
                                    </form>
                            </div>
                        </div>
                        <div class="top_info_left">
                            <p>Today is: <b>19th October, 2015</b>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="" class="active">Russian</a>&nbsp;|&nbsp;<a href="">Ukrainian</a></p>
                            <p><a class="title" href="#" title="My fruit and vegetable garden">Мой сад и огород</a><p/>
                        </div>
                    </div>
            </div>
            <div class="bar">
                <ul>
                    <li><a href="#" accesskey="" class="active">Home</a></li>
                    <li><a href="#" accesskey="">News</a></li>
                    <li><a href="#" accesskey="">Gallery</a></li>
                    <li><a href="#" accesskey="">Contacts</a></li>
                </ul>
            </div>
            <div class="search_field">
                <form class="form-search" method="POST" action="">
                    <input type="text" name="search" placeholder="Enter your query">
                    <input type="submit" class="btn btn-success" name="search" value="Search">
                </form>
            </div>
            <div class="slider">
                <img src="<?=base_url();?>images/slider/nature_760x120_1.jpg" alt="" />
            </div>
            <div class="left">
                <div class="left_articles">
                    <a class="title_article" href="#">Article about garden</a>
                    <p class="date_article">Date: 19.10.2015</p>
                    <a href=""><img src="<?=base_url();?>images/articles/nature_640x480.jpg" alt="" /></a>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex.</p>
                    <p><a class="read_more" href="#">Read more...</a></p>
                </div>
                <div class="left_articles">			
                    <a class="title_article" href="#">How grows the tree</a>
                    <p class="date_article">Date: 15.10.2015</p>
                    <a href=""><img src="<?=base_url();?>images/articles/nightlife_640x480.jpg" alt="" /></a>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex.</p>
                    <a class="read_more" href="#">Read more...</a>
                </div>
                <div class="left_articles">			
                    <a class="title_article" href="#">Growing flowers</a>
                    <p class="date_article">Date: 01.10.2015</p>
                    <a href=""><img src="<?=base_url();?>images/articles/food_640x480.jpg" alt="" /></a>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex.</p>
                    <a class="read_more" href="#">Read more...</a>
                </div>
            </div>	
            <div class="right">
                <p class="latest_news">Latest news</p>
                <div class="right_articles">
                    <a href=""><img src="<?=base_url();?>images/articles/nature_60x60_1.jpg" alt="" title="" class="image" /></a><b>Lorem ipsum dolor sit amet</b><br /> 
                    <p class="date_article">Date: 03.10.2015</p>
                    <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis</p>
                    <p><a class="read_more" href="#">Read more...</a></p>
                </div>
                <div class="right_articles">
                    <a href=""><img src="<?=base_url();?>images/articles/nature_60x60_2.jpg" alt="" title="" class="image" /></a><b>Lorem ipsum dolor sit</b><br /> 
                    <p class="date_article">Date: 06.09.2015</p>
                    <p>Amet consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis</p>
                    <p><a class="read_more" href="#">Read more...</a></p>
                </div>
                <div class="right_articles">
                    <a href=""><img src="<?=base_url();?>images/articles/nature_60x60_3.jpg" alt="" title="" class="image" /></a><b>Lorem ipsum</b><br /> 
                    <p class="date_article">Date: 11.09.2015</p>
                    <p>Dolor sit amet consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis</p>
                    <p><a class="read_more" href="#">Read more...</a></p>
                </div>
            </div>
            <div class="pagination">
                <<<&nbsp; 1&nbsp; 2 &nbsp;3 &nbsp; >>>
            </div>		
            <div class="footer">
                <p><a href="#">Home</a> | <a href="#">News</a> | <a href="#">Gallery</a> | <a href="#">Contacts</a> <br />
                &copy; Copyright 2015 My fruit and vegetable garden, Design: SolodovnikovMaxim</p>
            </div>
	</div>
    </body>
</html>