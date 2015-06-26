
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
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
        <!-- font Awesome -->
        <link href="assets/vendor/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
        <link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />
        <!-- Custom Ui -->
        <link rel="stylesheet" href="assets/vendor/jquery-ui/css/jquery-ui-1.10.4.custom.css" />
        <!-- Select2 -->        
        <link rel="stylesheet" href="assets/vendor/select2/select2.css" />
        <!-- TimePicker -->
        <link rel="stylesheet" href="assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />
        <!-- SummerNotes -->    
        <link rel="stylesheet" href="assets/javascripts/summernote/summernote.css">
        <!-- DataTable -->  
        <link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />
        <!-- Theme CSS -->
        <link rel="stylesheet" href="assets/stylesheets/theme.css" />

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="assets/stylesheets/theme-custom.css">
        
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
        <script src="assets/vendor/modernizr/modernizr.js"></script>

    </head>
    <body>
        <section class="body">

            <?php include 'menu.php'; ?>

                <section role="main" class="content-body">
                    <header class="page-header">
                        <h2>Form Data</h2>
                    
                        <div class="right-wrapper pull-right">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="index.html">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>Form</span></li>
                                <li><span>Data</span></li>
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
                                        <a href="#recent1" data-toggle="tab"><i class="fa  fa-sort-alpha-desc"></i> List Data</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="popular1" class="tab-pane active">
                                        <!-- Isi Tab Pertama -->
                                        <form method="post" action="" enctype="multipart/form-data" name="Form1">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Textbox</label>
                                                        <input type="text" class="form-control" name="Textbox" id="Textbox">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Textbox Disabled</label>
                                                        <input type="text" class="form-control input-sm mb-md" name="TextboxDisabled" id="TextboxDisabled" disabled="">
                                                    </div>
                                                </div>
                                                 <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Textbox Readonly</label>
                                                        <input type="text" class="form-control input-sm mb-md" name="TextboxReadonly" id="TextboxReadonly" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Textbox Password</label>
                                                        <input type="password" class="form-control input-sm mb-md" name="TextboxPassword" id="TextboxPassword">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Pembatas Row -->
                                            <div class="col-sm-12"><br/></div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label">File Upload</label>
                                                        <input type="file" class="form-control" name="FileUpload" id="FileUpload">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Input Dengan Tooltip</label>
                                                        <input type="text" placeholder="Hover me" title="" data-toggle="tooltip" 
                                                        data-trigger="hover" class="form-control" data-original-title="Beri Informasi Disini" id="inputTooltip">
                                                    </div>
                                                </div>
                                                 <div class="col-sm-4">
                                                    <div class="form-group">
                                                    <label class="control-label">Checkbox</label>
                                                            <div class="checkbox-custom checkbox-primary">
                                                                <input type="checkbox" checked="" id="checkboxExample2">
                                                                <label for="checkboxExample2">Checkbox Primary</label>
                                                            </div>
                        
                                                            <div class="checkbox-custom checkbox-success">
                                                                <input type="checkbox" checked="" id="checkboxExample3">
                                                                <label for="checkboxExample3">Checkbox Success</label>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Pembatas Row -->
                                            <div class="col-sm-12"><br/></div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">ComboBox</label>
                                                        <select data-plugin-selectTwo class="form-control">
                                                            <option value="AZ">INDONESIA</option>
                                                            <option value="CO">MALAYSIA</option>
                                                            <option value="ID">KOREA</option>
                                                            <option value="MT">SINGAPORE</option>
                                                            <option value="NE">MYANMAR</option>
                                                            <option value="NM">CHINA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">ComboBox2</label>
                                                        <select data-plugin-selectTwo class="form-control">
                                                            <option value="AZ">INDONESIA</option>
                                                            <option value="CO">MALAYSIA</option>
                                                            <option value="ID">KOREA</option>
                                                            <option value="MT">SINGAPORE</option>
                                                            <option value="NE">MYANMAR</option>
                                                            <option value="NM">CHINA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Pembatas Row -->
                                            <div class="col-sm-12"><br/></div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Tanggal</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                            <input id="date" data-plugin-masked-input data-input-mask="99-99-9999"
                                                             placeholder="__-__-____" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label">No Telepon</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-phone"></i>
                                                            </span>
                                                            <input id="phone" data-plugin-masked-input data-input-mask="(9999) 999-999" 
                                                            placeholder="(041) 123-456" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Sistem Pengkodean</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-tag"></i>
                                                            </span>
                                                            <input id="product-key" data-plugin-masked-input data-input-mask="(aa) 99-999" 
                                                            placeholder="(ab) 12-123" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Pembatas Row -->
                                            <div class="col-sm-12"><br/></div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Datepicker</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        <input type="text" data-plugin-datepicker data-date-format="dd-mm-yyyy" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label">DateRangepicker</label>
                                                        <div class="input-daterange input-group" data-plugin-datepicker>
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        <input type="text" class="form-control" name="start">
                                                        <span class="input-group-addon">to</span>
                                                        <input type="text" class="form-control" name="end">
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Time Picker</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-clock-o"></i>
                                                            </span>
                                                        <input type="text" data-plugin-timepicker  data-time-format="H:mm:ss" class="form-control" value="" 
                                                        data-plugin-options='{ "showMeridian": false }'>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Pembatas Row -->
                                            <div class="col-sm-12"><br/></div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Textbox MaxLength</label>
                                                        <input class="form-control" data-plugin-maxlength maxlength="20" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">TextEditor</label>
                                                        <textarea class="notes" rows="3" data-plugin-maxlength maxlength="140"></textarea>
                                                    </div>
                                                </div>
                                            </div>
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
                                  <table class="table table-bordered table-striped mb-none" id="datatable-default">
                                    <thead>
                                        <tr>
                                            <th>Kode Income</th>
                                            <th>Nama</th>
                                            <th>Personalia</th>
                                            <th>Income</th>
                                            <th>Outcome</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        for($i=1;$i<=20;$i++){
                                     ?>
                                        <tr>
                                            <td>K00<?=$i?></td>
                                            <td>User Data <?=$i?></td>
                                            <td>Personalia <?=$i?> </td>
                                            <td>Rp . <?php echo number_format(500000,2) ?></td>
                                            <td>Rp . <?php echo number_format(1500000,2) ?></td>
                                            <td>
                                                <a href="" class="btn btn-success">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                || 
                                                <a href="" class="btn btn-danger">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php  } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Kode Income</th>
                                            <th>Nama</th>
                                            <th>Personalia</th>
                                            <th>Income</th>
                                            <th>Outcome</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
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
        <script src="assets/vendor/jquery/jquery.js"></script>      
        <script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>        
        <script src="assets/vendor/jquery-cookie/jquery.cookie.js"></script>        
        <script src="assets/vendor/style-switcher/style.switcher.js"></script>      
        <script src="assets/vendor/bootstrap/js/bootstrap.js"></script>     
        <script src="assets/vendor/nanoscroller/nanoscroller.js"></script>      
        <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>       
        <script src="assets/vendor/magnific-popup/magnific-popup.js"></script>      
        <script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
        <!-- Jquery-Ui-->
        <script src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
        <!-- Select 2-->
        <script src="assets/vendor/select2/select2.js"></script>
        <!-- DataTable -->
        <script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>       
        <script src="assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>       
        <script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
        <!-- TimePicker -->
        <script src="assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
         <!-- Summeernote -->
        <script type="text/javascript" src="assets/javascripts/summernote/summernote.js"></script>  
        <!-- MaskInput Untuk Sistem Kode -->
        <script src="assets/vendor/jquery-maskedinput/jquery.maskedinput.js"></script>
        <!-- MAxlenght -->
        <script src="assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
        
        <!-- Theme Base, Components and Settings -->
        <script src="assets/javascripts/theme.js"></script>
        
        <!-- Theme Custom -->
        <script src="assets/javascripts/theme.custom.js"></script>
        <script>
            $('.notes').summernote({
             height: 200
            });
        </script>
        <!-- Theme Initialization Files -->
        <script src="assets/javascripts/theme.init.js"></script>
        <!-- Examples -->
        <script src="assets/javascripts/tables/examples.datatables.default.js"></script>
        <script src="assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
        <script src="assets/javascripts/tables/examples.datatables.tabletools.js"></script>
    </body>
</html>