<div class="wrapper row3">
<div class="rounded">
    <main class="container clear">
        <!-- main body -->
        <?php
        if(isset($_SESSION['id']))
            $id=$_SESSION['id'];
        if(isset($id)){
        ?>
       <center> <img class="borderedbox" src="<?php echo $param1['image']; ?>" alt="" align="middle"></center>
       <br> <center><h1>Full Name : <?php echo $param1['nam']; ?></h1>
        <h1>Roll No. : <?php echo $param1['roll']; ?></h1>
        <h1>Session : <?php echo $param1['sessionn']; ?></h1>
        <h1>Your Email : <?php echo $param1['email']; ?></h1>
        <h1>Your Mobile : <?php echo $param1['mobile']; ?></h1>
        <h1>Your Address : <?php echo $param1['address']; ?></h1></center>
        <!-- / main body -->
        <div class="clear"></div>
        <?php }
        else{
        ?>
        <p>Please Login First To See Your Profile</p>
        <?php }?>
    </main>
</div>
</div>