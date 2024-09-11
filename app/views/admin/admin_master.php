<?php
 //echo config::site_url();exit;
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Department Management System|SBPGC</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo config::site_url();?>public/assets/css/bootstrap.css" rel="stylesheet"/>
    <link href="<?php echo config::site_url();?>public/assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet"/>
    <!-- FONTAWESOME ICONS STYLES-->
    <link href="<?php echo config::site_url();?>public/assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM STYLES-->
    <link href="<?php echo config::site_url();?>public/assets/css/style.css" rel="stylesheet" />
    <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">
<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a  class="navbar-brand" href="index.html">College Management

        </a>
    </div>

    <div class="notifications-wrapper">
        <ul class="nav">
            <li class="dropdown">
                <a href="<?php echo config::site_url();?>super_admin/logout"><i class="fa fa-sign-out"></i> Logout</a>
            </li>
        </ul>

    </div>
</nav>
<!-- /. NAV TOP  -->
<nav  class="navbar-default navbar-side" role="navigation">
    <div id="actv" class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="<?php echo config::site_url();?>public/assets/img/user.jpg" class="img-circle" />
                </div>

            </li>
            <li>
                <a  href="#"> <strong> Nazmul Hasan </strong></a>
            </li>

            <li>
                <a  href="<?php echo config::site_url();?>super_admin"><i class="fa fa-dashboard "></i>Dashboard</a>
            </li>
            <li>
                <a  href="<?php echo config::site_url();?>super_admin/add_student"><i class="fa fa-plus "></i>Add Student </a>
            </li>
            <li>
                <a href="<?php echo config::site_url();?>super_admin/add_result"><i class="fa fa-plus "></i>Add Result </a>
            </li>
            <li>
                <a href="<?php echo config::site_url();?>super_admin/manage_result"><i class="fa fa-plus "></i>Manage Result </a>
            </li>
           <!-- <li>
                <a href="<?php /*echo config::site_url();*/?>super_admin/delete_result"><i class="fa fa-plus "></i>Delete Result </a>
            </li>-->
            <li>
                <a href="<?php echo config::site_url();?>super_admin/examSchedule"><i class="fa fa-plus "></i>Exam Schedule </a>
            </li>
            <li>
                <a id="clicked" href="#"><i class="fa fa-sitemap "></i>Routine Management <span class="fa arrow"></span></a>
                <ul id="click" class="nav nav-second-level">
                    <li>
                        <a href="<?php echo config::site_url();?>super_admin/create_routine"><i class="fa fa-plus "></i>Add Routine</a>
                    </li>
                    <li>
                        <a href="<?php echo config::site_url();?>super_admin/add_time"><i class="fa fa-plus "></i>Add Time</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="<?php echo config::site_url();?>super_admin/add_teachers_info"><i class="fa fa-plus "></i>Add Teacher </a>

            </li>

            <!--<li>
                <a href="<?php /*echo config::site_url();*/?>super_admin/tables"><i class="fa fa-bolt "></i>Data Tables </a>
            </li>-->
           <!-- <li>
                <a href="<?php /*echo config::site_url();*/?>super_admin/forms"><i class="fa fa-code "></i>Forms</a>
            </li>-->

            <li>
                <a href="#"><i class="fa fa-sitemap "></i>Entry Form <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo config::site_url();?>super_admin/news"><i class="fa fa-plus "></i>Add News</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="<?php echo config::site_url();?>super_admin/galleries"><i class="fa fa-dashcube "></i>Add Gallery Info</a>
            </li>

        </ul>
    </div>

</nav>
<!-- /. SIDEBAR MENU (navbar-side) -->
<div id="page-wrapper" class="page-wrapper-cls">
    <?php echo $pars1;?>
    <!-- /. PAGE WRAPPER  -->
</div>
</div>
<!-- /. WRAPPER  -->
<footer >
    &copy; 2015 SBPGC TECH | By : <a href="#" target="_blank">Nazmul</a>
</footer>
<!-- /. FOOTER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="<?php echo config::site_url();?>public/assets/js/moment.js" charset="UTF-8"></script>
<script src="<?php echo config::site_url();?>public/assets/js/jquery-1.11.1.js"></script>
<script src="<?php echo config::site_url();?>public/js/plugins/js_url/url.min.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="<?php echo config::site_url();?>public/assets/js/bootstrap.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="<?php echo config::site_url();?>public/assets/js/jquery.metisMenu.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="<?php echo config::site_url();?>public/assets/js/custom.js"></script>
<script src="<?php echo config::site_url();?>public/assets/js/jquery-ui.min.js"></script>
<script src="<?php echo config::site_url();?>public/assets/js/bootstrap.min.js"></script>
<script src="<?php echo config::site_url();?>public/assets/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script src="<?php echo config::site_url();?>public/assets/js/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#semId").change(function(){
            var id=$(this).val()
           // alert(id);
            $.ajax({
                type:"POST",
                url: "<?php echo config::site_url();?>super_admin/get_subject/"+id,
                cache:false
            }).done(function(subData){
               // alert(subData);
                $("#subId").html(subData);
            });
        });
    });
    $(document).ready(function(){
        $("#subId").change(function(){
            var id=$(this).val()
            var id1=$("#roll").val();
            //alert(id);
            var Ids=new Array(id,id1);
            var serializedArr = JSON.stringify( Ids );
           console.log(Ids);
            $.ajax({
                type:"POST",
                url: "<?php echo config::site_url();?>super_admin/get_gpa/"+serializedArr,
                cache:false
            }).done(function(subData){
               // alert(subData);
               // $("#gpa").html(subData);
                $("#gpa").val(subData);
                //document.getElementById("gpa").innerHTML=subData;
            });
        });
    });
    jQuery(document).ready(function($){
        // Get current url
        // Select an a element that has the matching href and apply a class of 'active'. Also prepend a - to the content of the link
        var url = window.location;
        $('a[href="'+url+'"]').removeClass('active-menu');
        $('a[href="'+url+'"]').addClass('active-menu');

    });
    $(function () {
        $('#datetimepicker3').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker4').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker1').datetimepicker({
            format: 'DD/MM/YYYY'
        });
    });

</script>
</body>
</html>
