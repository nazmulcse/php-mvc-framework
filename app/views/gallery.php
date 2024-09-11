<div class="wrapper row3">
<div class="rounded">
    <main class="container clear">
        <!-- main body -->
        <!-- ################################################################################################ -->
        <div id="gallery">
            <figure>
                <header class="heading">Latest Images From The University</header>
                <ul class="nospace clear second">
                    <?php
                    $c=1;
                    foreach($param1 as $value)
                    {
                        if($c==1 || $c==5 || $c==9) {
                            ?>
                            <li class="one_quarter first"><a class="nlb" data-lightbox-gallery="gallery1" href="<?php echo $value['slider_image']; ?>"
                                                             title="<?php echo $value['title']; ?>"><img
                                        class="borderedbox" src="<?php echo $value['image']; ?>" alt=""></a></li>
                            <?php
                        }

                        else {
                            ?>
                            <li class="one_quarter"><a class="nlb" data-lightbox-gallery="gallery1" href="<?php echo $value['slider_image']; ?>"
                                                             title="<?php echo $value['title']; ?>"><img
                                        class="borderedbox" src="<?php echo $value['image']; ?>" alt=""></a></li>
                        <?php
                        }
                        $c++;
                    }
                    ?>
                </ul>
                <figcaption>Gallery Description Goes Here</figcaption>
            </figure>
        </div>
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <nav class="pagination">
            <ul>
                <li><a href="#">&laquo; Previous</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><strong>&hellip;</strong></li>
                <li><a href="#">6</a></li>
                <li class="current"><strong>7</strong></li>
                <li><a href="#">8</a></li>
                <li><a href="#">9</a></li>
                <li><strong>&hellip;</strong></li>
                <li><a href="#">14</a></li>
                <li><a href="#">15</a></li>
                <li><a href="#">Next &raquo;</a></li>
            </ul>
        </nav>
        <!-- ################################################################################################ -->
        <!-- / main body -->
        <div class="clear"></div>
    </main>
</div>
</div>