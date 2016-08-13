 <?php
/*
Template name: Single Project
*/
 get_header(); ?>
 <section id="single_portfolio">
     <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="single-portfolio">
                    <div class="owl-carousel single-portfolio-slider">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/desk.jpg" class="img-responsive" alt="Portfolio">
                        </div>
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/laptop.jpg" class="img-responsive" alt="Portfolio">
                        </div>
                    </div>
                    <div class="controls-portfolio">
                        <a class="prev-slide"><i class="fa fa-angle-left"></i></a>
                        <a class="next-slide"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>

             
            <div class="col-md-3">
                <div class="content-portfolio">
                    <h4>PROJECT HERE</h4>
                    <p>Actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.<br><br></p>
                    <a href="#" class="btn custom_btn">VISIT PROJECT</a>
                </div>
                <div class="portfolio-tags">
                    <h4>TAGS:</h4>
                    <ul class="list-inline">
                        <li><a href="#">design</a></li>
                        <li><a href="#">clean</a></li>
                        <li><a href="#">minimalism</a></li>
                        <li><a href="#">modern</a></li>
                        <li><a href="#">ui/ux</a></li>
                        <li><a href="#">business</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="portfolio-controls">
                    <div class="back-btn">
                        <a class="#" href="#"><i class="fa fa-angle-left left"></i><span class="hidden-xs">Previous</span></a>
                    </div>
                    <div class="home-btn">
                        <a href="#"><i class="fa fa-th-large"></i></a>
                    </div>
                    <div class="forward-btn">
                        <a class="" href="#"><i class="fa fa-angle-right right"></i><span class="hidden-xs">Next</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>