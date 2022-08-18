<?php 
/**
 * Footer Template
 *
 * @package Aquila
 */
?>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <?php
                if (is_active_sidebar('footer-1')) { ?>
                     <aside><?php dynamic_sidebar('footer-1') ?></aside>
                 <?php } 
                 ?>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">Footer two</div>
            <div class="col-lg-4 col-md-6 col-sm-12">Footer three</div>
        </div>
    </div>
</div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>