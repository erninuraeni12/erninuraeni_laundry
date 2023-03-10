<?php 
session_start();
include_once '../template/header.php'; 
include_once '../template/sidebar.php'; 
include_once '../template/topbar.php'; 
?>

<?php 

include_once '../../controllers/c_outlet.php';

$outlet = new c_outlet();

?>

<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Edit Outlet </small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <!-- start form  -->
            <div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Edit Outlet</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										
								<div class="x_content">
									<br />
									<form action="../../routers/r_outlet.php?aksi=update" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                    <?php 
                                        foreach ($outlet->edit($_GET['id']) as $o) {
                                    ?>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="id" class="form-control" value="<?= $o->id ?>" hidden>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nama">Nama <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="nama" name="nama" required="required" class="form-control" value="<?= $o->nama ?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="alamat" class="form-control" type="text" name="alamat" value="<?= $o->alamat ?>">
											</div>
										</div>
                                        <div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Telepon</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="telepon" class="form-control" type="number" name="telepon" value="<?= $o->tlp ?>">
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
											<button class="btn btn-danger" type="submit" name="update">Update</button>
											</div>
										</div>
                                        
                                        <?php } ?>
									</form>
								</div>
							</div>
						</div>
					</div>			
            <!-- end form  -->

          </div>
        </div>
        <!-- /page content -->


<?php include_once '../template/footer.php';?>




