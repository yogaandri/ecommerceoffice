
<!doctype html>
<html class="fixed">
    <head>

        <!-- Basic -->
        <meta charset="UTF-8">

        <title>Blank Page | Porto Admin - Responsive HTML5 Template 1.2.0</title>
        <meta name="keywords" content="HTML5 Admin Template" />
        <meta name="description" content="Porto Admin - Responsive HTML5 Template">
        <meta name="author" content="okler.net">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Web Fonts  -->
        <!--<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">-->

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="<?=site_url(); ?>assets/vendor/bootstrap/css/bootstrap.css" />
        <!-- font Awesome -->
        <link href="<?=site_url(); ?>assets/vendor/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?=site_url(); ?>assets/vendor/magnific-popup/magnific-popup.css" />
        <link rel="stylesheet" href="<?=site_url(); ?>assets/vendor/bootstrap-datepicker/css/datepicker3.css" />
        <!-- Custom Ui -->
        <link rel="stylesheet" href="<?=site_url(); ?>assets/vendor/jquery-ui/css/jquery-ui-1.10.4.custom.css" />
        <!-- Select2 -->        
        <link rel="stylesheet" href="<?=site_url(); ?>assets/vendor/select2/select2.css" />
        <!-- TimePicker -->
        <link rel="stylesheet" href="<?=site_url(); ?>assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />
        <!-- SummerNotes -->    
        <link rel="stylesheet" href="<?=site_url(); ?>assets/javascripts/summernote/summernote.css">
        <!-- DataTable -->  
        <link rel="stylesheet" href="<?=site_url(); ?>assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />
        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?=site_url(); ?>assets/stylesheets/theme.css" />

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="<?=site_url(); ?>assets/stylesheets/theme-custom.css">
        
        <style>
            .form-control {
  -webkit-border-radius: 0px !important;
  -moz-border-radius: 0px !important;
  border-radius: 0px !important;
  box-shadow: none;
}
.form-control:focus {
  border-color: #3c8dbc !important;
  box-shadow: none;
}   
        </style>

        <!-- Head Libs -->
        <script src="<?=site_url(); ?>assets/vendor/modernizr/modernizr.js"></script>

    </head>
    <body>
        <section class="body">

            <?php include 'menu.php'; ?>

                <section role="main" class="content-body">
                    <header class="page-header">
                        <h2>Form Keluhan</h2>
                    
                        <div class="right-wrapper pull-right">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="index.html">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>Teknis</span></li>
                                <li><span>Keluhan</span></li>
                            </ol>
                    
                            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                        </div>
                    </header>

                    <!-- start: page -->
                    <!-- states -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabs tabs-primary">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#popular1" data-toggle="tab"><i class="fa fa-pencil-square-o"></i> Input</a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url();?>teknis/frontoffice"><i class="fa  fa-sort-alpha-desc"></i> List Data</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="popular1" class="tab-pane active">
                                        <!-- Isi Tab Pertama -->
                                        <form method="post" action="" enctype="multipart/form-data" id="frm_frontoffice" name="frm_frontoffice">
											<!-- Pembatas Row -->
                                            <div class="col-sm-12"><br/></div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <?php echo $result; ?>
                                                </div>
                                            </div>
                                            <!-- Pembatas Row 
                                            <div class="col-sm-12"><br/></div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label">No Keluhan</label>
                                                        <input type="text" placeholder="" title="" data-toggle="tooltip" 
                                                        data-trigger="hover" class="form-control" data-original-title="Masukkan no keluhan" id="inputTooltip">
                                                    </div>
                                                </div>
                                            </div>-->
											<!-- Pembatas Row -->
                                            <div class="col-sm-12"><br/></div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label">ID UKM</label>
                                                        <input type="text" placeholder="" title="" data-toggle="tooltip" id="id_ukm" name="id_ukm" 
                                                        data-trigger="hover" class="form-control" data-original-title="Masukkan ID karyawan">
                                                    </div>
                                                </div>
                                            </div>
											<!-- Pembatas Row -->
                                            <div class="col-sm-12"><br/></div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Nama Pengeluh</label>
                                                        <input type="text" placeholder="" title="" data-toggle="tooltip"  id="nama_pengeluh" name="nama_pengeluh"
                                                        data-trigger="hover" class="form-control" data-original-title="Masukkan Nama Pengeluh" id="inputTooltip">
                                                    </div>
                                                </div>
                                            </div>
											<!-- Pembatas Row -->
                                            <div class="col-sm-12"><br/></div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Permasalahan</label>
                                                        <input type="text" placeholder="" title="" data-toggle="tooltip"  id="permasalahan" name="permasalahan"
                                                        data-trigger="hover" class="form-control" data-original-title="Masukkan permasalahan" id="inputTooltip">
                                                    </div>
                                                </div>
                                            </div>
											<!-- Pembatas Row -->
                                            <div class="col-sm-12"><br/></div>
											<div class="row">
												<div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Tanggal Keluhan</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        <input id="tgl_keluhan" name="tgl_keluhan" type="text" data-plugin-datepicker data-date-format="yyyy-mm-dd" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
											</div>
											<!-- Pembatas Row -->
                                            <div class="col-sm-12"><br/></div>
											<div class="row">
												<div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Keterangan</label>
                                                        <textarea id="keterangan" name="keterangan" class="notes" rows="3" data-plugin-maxlength maxlength="140"></textarea>
                                                    </div>
                                                </div>
											</div>
											<!-- Pembatas Row -->
                                            <div class="col-sm-12"><br/></div>
                                            <div>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-save"></i> Save
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Pembatas Tab -->
                                    <div id="recent1" class="tab-pane ">
                                        <!-- Isi Tab Kedua-->
                                    </div>
                                </div>
                            </div>
                        </div> <!-- col-sm-12 -->
                     </div> <!-- row -->
                    <!-- end: page -->
                </section>
            </div>
        </section>

        <!-- Vendor -->
        <script src="<?=site_url(); ?>assets/vendor/jquery/jquery.js"></script>      
        <script src="<?=site_url(); ?>assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>        
        <script src="<?=site_url(); ?>assets/vendor/jquery-cookie/jquery.cookie.js"></script>        
        <script src="<?=site_url(); ?>assets/vendor/style-switcher/style.switcher.js"></script>      
        <script src="<?=site_url(); ?>assets/vendor/bootstrap/js/bootstrap.js"></script>     
        <script src="<?=site_url(); ?>assets/vendor/nanoscroller/nanoscroller.js"></script>      
        <script src="<?=site_url(); ?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>       
        <script src="<?=site_url(); ?>assets/vendor/magnific-popup/magnific-popup.js"></script>      
        <script src="<?=site_url(); ?>assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
        <!-- Jquery-Ui-->
        <script src="<?=site_url(); ?>assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
        <!-- Select 2-->
        <script src="<?=site_url(); ?>assets/vendor/select2/select2.js"></script>
        <!-- DataTable -->
        <script src="<?=site_url(); ?>assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>       
        <script src="<?=site_url(); ?>assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>       
        <script src="<?=site_url(); ?>assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
        <!-- TimePicker -->
        <script src="<?=site_url(); ?>assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
         <!-- Summeernote -->
        <script type="text/javascript" src="<?=site_url(); ?>assets/javascripts/summernote/summernote.js"></script>  
        <!-- MaskInput Untuk Sistem Kode -->
        <script src="<?=site_url(); ?>assets/vendor/jquery-maskedinput/jquery.maskedinput.js"></script>
        <!-- MAxlenght -->
        <script src="<?=site_url(); ?>assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
        
        <!-- Theme Base, Components and Settings -->
        <script src="<?=site_url(); ?>assets/javascripts/theme.js"></script>
        
        <!-- Theme Custom -->
        <script src="<?=site_url(); ?>assets/javascripts/theme.custom.js"></script>
        <script>
            $('.notes').summernote({
             height: 200
            });
        </script>
        <!-- Theme Initialization Files -->
        <script src="<?=site_url(); ?>assets/javascripts/theme.init.js"></script>
        <!-- Examples -->
        <script src="<?=site_url(); ?>assets/javascripts/tables/examples.datatables.default.js"></script>
        <script src="<?=site_url(); ?>assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
        <script src="<?=site_url(); ?>assets/javascripts/tables/examples.datatables.tabletools.js"></script>
    </body>
</html>