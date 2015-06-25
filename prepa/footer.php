<?php
    /*-----------------------------------------------------------------------------------*/
    /* This template will be called by all other template files to finish 
    /* rendering the page and display the footer area/content
    /*-----------------------------------------------------------------------------------*/
?>

</main><!-- main -->

        <footer role="contentinfo">
            <div class="row">
                <div class="row-content buffer clear-after">
                    <section id="top-footer">
                        <div class="widget column twelve"><!-- la class="widget" è forse generata utomaticamente da wp -->
                            <h4>Menu</h4>
                            <ul class="plain">
                                <li><a href="/">Home</a></li>
                                <li><a href="">Blog</a></li>
                                <li><a href="/">Prueba en linea</a></li>
                                <li><a href="/">Contact</a></li>
                            </ul>
                        </div>                                    
                    </section><!-- top-footer -->
                    <section id="bottom-footer">
                        <p class="keep-left">&copy; 2015 <a href="http://mokaine.com/" alt="Mokaine Lab">Entra a la prepa</a>. Todos los derechos resevados.</p>
                    </section><!-- bottom-footer -->            
                </div><!-- row-content -->  
            </div><!-- row -->  
        </footer>

<script src="https://code.jquery.com/jquery.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/beetle.js"></script>


<?php wp_footer(); 
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website. 
// Removing this fxn call will disable all kinds of plugins. 
// Move it if you like, but keep it around.
?>

</body>
</html>
