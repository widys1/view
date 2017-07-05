<link rel="stylesheet" href="<?php echo base_url()?>assets/signup/css/style.css">
<body>
<div class="row">
    <div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">
			<strong>Masukkan datamu disini</strong>
			</div>
			<div class="panel-body">
				<form role="form" action="<?php echo base_url('index.php/signup/tambah_aksi');?>" method="post">
					<div class="form-group">
						<label for="fullname">Nama Lengkap</label>
						<input id="fullname" name="fullname" class="form-control" type="text" data-validation="required">
						
					</div>
					<div class="form-group">
						<label for="username">Nama Pengguna</label>
						<input id="username" name="lastname" class="form-control" type="text" data-validation="email">
						
					</div>
					<div class="form-group">
						<label for="email">E-mail</label>
						<input id="email" name="email" class="form-control" type="text" data-validation="email">
						
					</div>
					<div class="form-group">
						<label for="password">Kata Sandi</label>
						<input id="password" name="password" class="form-control" type="password">
						
					</div>
					<div class="form-group">
						<label for="gender">Jenis Kelamin</label>
						<select name="gender" id="gender" class="form-control">
							<option selected>Laki-laki</option>
							<option>Perempuan</option>
							<option>Lainnya</option>
						</select>
					</div>
					<div class="form-group">
						<label for="phone_number">Nomor Telepon</label>
						<input type="text" id="phone_number" name="phone_number" class="form-control" >
					</div>
					<div class="form-group">
						<label for="address">Alamat</label>
						<textarea class="form-control" rows="3"></textarea>
					</div>
					
					<button id="submit" type="submit" value="submit" class="btn btn-primary center">Daftar</button>
			
				</form>

			</div>
		</div>
	</div>
</div>
				<script src="<?php echo base_url()?>assets/signup/js/index.js"></script>
</body>