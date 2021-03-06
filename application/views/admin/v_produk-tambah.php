<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>bower_components/jquery.steps/css/jquery.steps.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>assets/css/style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
      $('.produk').addClass('active');
      $('.input-produk').addClass('active');
  	});


    function check_int(evt) {
      var charCode = ( evt.which ) ? evt.which : event.keyCode;
      return ( charCode >= 48 && charCode <= 57 || charCode == 8 );
    }

    function PreviewImage() {
	    var oFReader = new FileReader();
	    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

	    oFReader.onload = function (oFREvent) {
	      document.getElementById("uploadPreview").src = oFREvent.target.result;
	    };
	  };
</script>

<div class="pcoded-content">
	<div class="page-header card">
		<div class="row align-items-end">
			<div class="col-lg-8">
				<div class="page-header-title">
					<i class="feather icon-edit bg-c-blue"></i>
					<div class="d-inline">
						<h5>Form Input Produk</h5>
						<span>Pastikan mengisi data produk dengan benar.</span>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="page-header-breadcrumb">
					<ul class=" breadcrumb breadcrumb-title">
						<li class="breadcrumb-item">
							<a href="<?= site_url('home') ?>"><i class="feather icon-home"></i></a>
						</li>
						<li class="breadcrumb-item">
							<a href="<?= site_url('admin/produk') ?>">Produk</a>
						</li>
						<li class="breadcrumb-item">
							<a href="<?= site_url('admin/produk/tambah') ?>">Input Galeri Produk</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="pcoded-inner-content">
		<div class="main-body">
			<div class="page-wrapper">
				<div class="page-body">
					<div class="card">
						<div class="card-header">
							<h5>Input Produk</h5>
							<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
						</div>
						<div class="card-block">
							<div id="wizard">
								<section>
									<?= $this->session->flashdata('pesan'); ?>
									<?= $this->session->flashdata('error'); ?>
									<?php $arb = array('enctype' => "multipart/form-data", );?>
									<?= form_open('admin/produk/proses',$arb); ?>
				                    <div class="form-group row">
				                      <label class="col-sm-2 col-form-label">Kategori Produk</label>
				                      <div class="col-sm-10">
				                        <select class="form-control select2" name="id_kategori" style="width: 100%;">
							              <option>Pilih Kategori</option>
							              <?php foreach ($kat->result() as $key) {
							                ?>
							                <option value="<?= $key->id ?>"><?= $key->nama ?></option>
							                <?php
							              } ?>
							            </select>
				                      </div>
				                    </div><div class="form-group row">
				                      <label class="col-sm-2 col-form-label">Gambar Produk</label>
				                      <div class="col-sm-10">
				                        <!-- <input id="uploadImage" class="form-control" type="file" name="gambar" onchange="PreviewImage();" value="" /> -->
				                        <input type="file" name="gambar[]" class="form-control" id="chooseFile" multiple>
				                        <div class="imgGallery">
				                        	<p class="help-block">JPG, PNG, JPEG - (400px X 400px) Max. 2MB</p> 
									      <!-- Image preview -->
									    </div>
				                      </div>
				                    </div>
				                    <hr>
				                    
				                    
				                    <div class="form-group row">
				                      <!-- <label class="col-sm-2"></label> -->
				                      <div class="col-sm-2">
				                        <button class="btn btn-primary m-b-0 btn-round" style="color: #fff"><i class="fa fa-edit"></i> Simpan Data</abutton>
				                      </div>
				                    </div>
				                  <!-- </form> -->
				                  <?= form_close(); ?>
								</section>
							</div>
						</div>
					</div>
							
				</div>

			</div>
		</div>
	</div>
</div>

<div id="styleSelector">
</div>


<script src="<?= base_url('assets/') ?>assets/pages/waves/js/waves.min.js" type="80e04729b0cb0dda322eaea3-text/javascript"></script>

<script src="<?= base_url('assets/') ?>bower_components/jquery.steps/js/jquery.steps.js" type="80e04729b0cb0dda322eaea3-text/javascript"></script>
<script src="<?= base_url('assets/') ?>bower_components/jquery-validation/js/jquery.validate.js" type="80e04729b0cb0dda322eaea3-text/javascript"></script>

<script type="80e04729b0cb0dda322eaea3-text/javascript" src="<?= base_url('assets/') ?>assets/pages/form-validation/validate.js"></script>

<script src="<?= base_url('assets/') ?>ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="80e04729b0cb0dda322eaea3-|49" defer=""></script></body>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script>
$(function() {
// Multiple images preview with JavaScript
var multiImgPreview = function(input, imgPreviewPlaceholder) {
	$('.imgGallery').empty();
    if (input.files) {
        var filesAmount = input.files.length;

        for (i = 0; i < filesAmount; i++) {
            var reader = new FileReader();

            reader.onload = function(event) {
                $($.parseHTML('<img style="padding: 8px; max-width: 250px;">')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
            }

            reader.readAsDataURL(input.files[i]);
        }
    }

};

  $('#chooseFile').on('change', function() {
    multiImgPreview(this, 'div.imgGallery');
  });
});    
</script>