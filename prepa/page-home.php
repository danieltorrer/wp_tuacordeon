<?php 
/**
 *  Template Name: Sidebar/Home Page
 *
 *  This page template has a sidebar built into it, 
 *  and can be used as a home page, in which case the title will not show up.
 *
*/
get_header(); // This fxn gets the header.php file and renders it ?>
    <div id="intro-wrap" class="page">
                <div id="intro" class="preload darken" data-autoplay="5000" data-navigation="true" data-pagination="true" data-transition="fadeUp">                 
                    <div class="intro-item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/slide1opt.jpg);">
                        <div class="caption">
                            <h2>Si hoy fuera el examen</h2>
                            <p>¿Como te iria?</p>
                            <a class="button blue" href="#">Descubrelo</a>
                        </div><!-- caption -->
                    </div>                                                                                              
                </div><!-- intro -->
            </div><!-- intro-wrap -->

            <div id="main">

                <section class="row section">
                    <div class="row-content buffer even clear-after">                   
                        <div class="section-title"><h3>¿Estas listo? Aqui hay unos tips</h3></div>
                        <div class="grid-items blog-section masonry-style preload">
                            <article class="item column six">
                                <a href="#">
                                    <figure><img src="http://placehold.it/800x600/ddd/fff&text=Beetle%20image" alt=""><span class="blog-overlay"><i class="icon icon-doc"></i></span></figure>
                                    <div class="blog-excerpt">
                                        <div class="blog-excerpt-inner">
                                            <h5 class="meta-post">Tips</h5>
                                            <h2>¿Que debes llevar?</h2>
                                        </div><!-- blog-excerpt -->
                                    </div><!-- blog-excerpt-inner -->   
                                </a>
                            </article>      
                            <article class="item column three">
                                <a href="#">
                                    <figure><img src="http://placehold.it/800x600/ddd/fff&text=Beetle%20image" alt=""><span class="blog-overlay"><i class="icon icon-doc"></i></span></figure>
                                    <div class="blog-excerpt">
                                        <div class="blog-excerpt-inner">
                                            <h5 class="meta-post">Tips</h5>
                                            <h2>10 consejos para concentrarte mejor</h2>
                                            <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div><!-- blog-excerpt-inner -->       
                                    </div><!-- blog-excerpt -->                             
                                </a>
                            </article>                                          
                            <article class="item column three">
                                <a href="#">
                                    <figure><img src="http://placehold.it/800x600/ddd/fff&text=Beetle%20image" alt=""><span class="blog-overlay"><i class="icon icon-doc"></i></span></figure>
                                    <div class="blog-excerpt">
                                        <div class="blog-excerpt-inner">
                                            <h5 class="meta-post">Consejos</h5>
                                            <h2>Que debes y que no debes llevar</h2>
                                            <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div><!-- blog-excerpt --> 
                                    </div><!-- blog-excerpt-inner -->
                                </a>
                            </article>                                                      
                            <div class="shuffle-sizer three"></div>
                        </div><!-- grid-items -->
                        <div class="more-btn"><a class="button transparent aqua" href="#">Leer todos</a></div>                      
                    </div>  
                </section>

                <section class="row section">
                    <div class="row-content buffer even clear-after">
                        <div class="section-title"><h3>Suscribete</h3></div>    
                        <p>Recibe mas tips e informacion util para el gran dia</p>
                        <div class="column twelve">
                            <form id="contact-form" class="contact-section" method="post" action="">
                                <span class="pre-input"><i class="icon icon-user"></i></span>
                                <input class="name plain buffer" type="text" name="name" placeholder="Nombre">
                                <span class="pre-input"><i class="icon icon-email"></i></span>
                                <input class="email plain buffer" type="email" name="email" placeholder="Email">
                                <textarea class="plain buffer" name="message" placeholder="¿Que te gustaria saber?"></textarea>
                                <input id="send" class="plain button red" type="button" value="Contactanos">
                            </form> 
                            <div id="success"></div>
                        </div>
                        <!--<div class="column three last">
                            <div class="widget">
                                <h4>Location</h4>
                                <p>
                                    13, 2 Elizabeth ST,<br>
                                    Melbourne, Victoria 3000,<br>
                                    Australia
                                </p>
                            </div>
                            <div class="widget">
                                <h4>I am Social</h4>
                                <ul class="inline meta-social">
                                    <li><a href="#" class="twitter-share border-box"><i class="fa fa-twitter fa-lg"></i></a></li>
                                    <li><a href="#" class="facebook-share border-box"><i class="fa fa-facebook fa-lg"></i></a></li>
                                    <li><a href="#" class="pinterest-share border-box"><i class="fa fa-pinterest fa-lg"></i></a></li>
                                </ul>
                            </div>                              
                        </div>-->
                    </div>
                </section>                          

            </div><!-- id-main -->
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>