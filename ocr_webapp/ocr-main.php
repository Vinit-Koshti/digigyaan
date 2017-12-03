<!--peerxp-->

<html>
<head>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body style="background-image:url(img/p.jpg);">
<div class="container" >


<div class="container dynamicTile">
    <div class="row">
      <div class="col-lg-3 col-sm-6 col-xs-12">
      </div>
      <a href="upload/single_image.php">
        <div class=" col-lg-3 col-sm-6 col-xs-12">
            <div id="tile8" class="tile">
                <div class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active text-center"><br><br>
                            <div>
                                <img src="img/si.png" style="height:100px; width:100px;"></img>
                            </div><br>
                            <div class="icontext">
                                Upload
                            </div>
                            <div class="icontext">
                                Single Image
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div></a>
        <a href="upload/single_pdf.php">
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div id="tile9" class="tile">
                <div class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner"><br><br>
                        <div class="item active text-center">
                            <div>
                                <img src="img/sp.png" style="height:100px; width:100px;"></img>
                            </div><br>
                            <div class="icontext">
                               Upload
                            </div>
                            <div class="icontext">
                                Single Pdf
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div></a>
      
        <div class=" col-lg-3 col-sm-6 col-xs-12">
        </div>
    </div>
    <div class="row ">
        <div class=" col-lg-3 col-sm-6 col-xs-12">
        </div>
          <a href="upload/multiple_image.php">
        <div class=" col-lg-3 col-sm-6 col-xs-12">
            <div id="tile1" class="tile">
                <div class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active text-center"><br><br>
                            <div>
                                <img src="img/mi.png" style="height:100px; width:100px;"></img>
                            </div><br>
                            <div class="icontext">
                                Upload
                            </div>
                            <div class="icontext">
                                Multiple Images
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div></a>
          <a href="upload/multiple_pdf.php">

       <div class=" col-lg-3 col-sm-6 col-xs-12">
            <div id="tile2" class="tile">
                <div class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner"><br><br>
                        <div class="item active text-center">
                            <div>
                                <img src="img/mp.png" style="height:100px; width:100px;"></img>
                            </div><br>
                            <div class="icontext">
                                   Upload
                            </div>
                            <div class="icontext">
                                 Multiple Pdfs
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
          </a>
    </div></div>
    <div class=" col-lg-3 col-sm-6 col-xs-12"></div>
</div>
<br>
<footer class="container-fluid text-center" style="">
  <p>Copyright 2017 | <a href="http://anvesh.peerxp.com" title="Visit Anvesh EMS" style="color:orangered;">PeerXP Technologies</a> | All Rights Reserved</p>
</footer>
<style>
    .dynamicTile .col-lg-3.col-sm-6.col-xs-12 {
        padding: 5px;
    }

    .bigicon {
        font-size: 67px;
        color: white;
        margin-top: 20px;
        margin-bottom: 10px;
    }

    .icontext {
        color: white;
        font-size: 27px;
    }

    .bigicondark {
        font-size: 67px;
        color: black;
        margin-top: 20px;
        margin-bottom: 10px;
    }

    .icontextdark {
        color: black;
        font-size: 27px;
    }

    .dynamicTile .col-lg-3.col-sm-6.col-xs-12 {
        padding: 5px;
    }

    #tile1 {
        background: green;
    }

    #tile2 {
        background: orange;
    }

    #tile3 {
        background: green;
    }

    #tile4 {
        background: #EACF46;
    }

    #tile5 {
        background: #EACF46;
    }

    #tile6 {
        background: #FFED94;
    }

    #tile7 {
        background: white;
    }

    #tile8 {
        background: darkred;
    }

    #tile9 {
        background: blue;
    }

    #tile10 {
        background: #EACF46;
    }

    .tilecaption {
        position: relative;
        top: 50%;
        transform: translateY(-50%);
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        margin: 0!important;
        text-align: center;
        color: white;
        font-family: Segoe UI;
        font-weight: lighter;
    }
</style>

<script type="text/javascript">
    jQuery(function ($) {
        $(".tile").height($("#tile1").width());
        $(".carousel").height($("#tile1").width());
        $(".item").height($("#tile1").width());
        
        $(window).on('resize', function () {
            if (this.resizeTO) {
                clearTimeout(this.resizeTO);
            }
            this.resizeTO = setTimeout(function () {
                $(this).trigger('resizeEnd');
            }, 10);
        });

        $(window).on('resizeEnd', function () {
            $(".tile").height($("#tile1").width());
            $(".carousel").height($("#tile1").width());
            $(".item").height($("#tile1").width());
        });
    });
</script>
</body>

</head>