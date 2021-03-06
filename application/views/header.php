<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Recuitment Republika</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>source/Theme/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>source/Theme/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>source/Theme/assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>source/Theme/assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>source/Theme/assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>source/Theme/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>source/Theme/assets/css/style-responsive.css" rel="stylesheet">

    <script src="<?php echo base_url();?>source/Theme/assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?php echo base_url();?>home" class="logo"><b>Recuitmen Republika</b></a>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo base_url();?>login/logout">Logout</a></li>
              </ul>
            </div>
        </header>

        <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="<?php echo base_url();?>home"><img src="<?php echo base_url();?>source/Theme/assets/img/logo.jpg" class="img-circle" width="60"></a></p>
                  <?php if($this->session->userdata('logged_in')==TRUE)  {?>
                  <h5 class="centered"><?php echo $this->session->userdata('email');?></h5>
                  <?php } ?>

              <li class="sub-menu">
                      <a href="<?php echo base_url();?>home" >
                          <i class="fa fa-desktop"></i>
                          <span>Home</span>
                      </a>
                  </li>


              <li class="mt">
                      <a  href="<?php echo base_url();?>home/proses">
                          <i class="fa fa-dashboard"></i>
                          <span>Tambah Berita</span>
                      </a>
                  </li>

                  </ul>

              <!-- sidebar menu end-->
          </div>
      </aside>

      <script src="<?php echo base_url();?>source/Theme/assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>source/Theme/assets/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo base_url();?>source/Theme/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url();?>source/Theme/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url();?>source/Theme/assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url();?>source/Theme/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>source/Theme/assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url();?>source/Theme/assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?>source/Theme/assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>source/Theme/assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="<?php echo base_url();?>source/Theme/assets/js/sparkline-chart.js"></script>    
    <script src="<?php echo base_url();?>source/Theme/assets/js/zabuto_calendar.js"></script>    
    
    <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>