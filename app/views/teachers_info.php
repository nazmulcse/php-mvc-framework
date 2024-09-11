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
                            <li class="one_quarter first"><a class="nlb" data-lightbox-gallery="gallery1" href="<?php echo config::site_url();?>Home/detailsTeacherInfo/<?php echo $value['id'];?>"
                                                             title="<?php echo $value['name']; ?>"><img
                                        class="borderedbox" src="<?php echo $value['image']; ?>" alt=""></a></li>
                        <?php
                        }

                        else {
                            ?>
                            <li class="one_quarter"><a class="nlb" data-lightbox-gallery="gallery1" href="<?php echo config::site_url();?>Home/detailsTeacherInfo/<?php echo $value['id'];?>"
                                                       title="<?php echo $value['name']; ?>"><img
                                        class="borderedbox" src="<?php echo $value['image']; ?>" alt=""></a></li>
                        <?php
                        }
                        $c++;
                    }
                    ?>
                </ul>
                <figcaption>Click Image For View Details</figcaption>
            </figure>
        </div>
        <br>
        <div class="scrollable">
            <h1>Guest Teacher</h1>
        <table>
            <thead>
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Institute</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><a href="#">1</a></td>
                <td>Dr. Md. Haider Ali</td>
                <td>Professor</td>
                <td>Dhaka University</td>
            </tr>
            <tr>
                <td><a href="#">1</a></td>
                <td>Dr. Md.Habibur Rahman</td>
                <td>Professor</td>
                <td>Dhaka University</td>
            </tr>
            <tr>
                <td><a href="#">3</a></td>
                <td>Dr. Pervez Sazzad</td>
                <td>Professor</td>
                <td>Dhaka University</td>
            </tr>
            <tr>
                <td><a href="#">4</a></td>
                <td>Md. Abu Sayeed Mondol</td>
                <td>Professor</td>
                <td>BUET</td>
            </tr>
            </tbody>
        </table>
</div>
        <!-- / main body -->
        <div class="clear"></div>
    </main>
</div>
</div>