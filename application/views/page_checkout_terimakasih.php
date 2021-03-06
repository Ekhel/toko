<div id="content">
	<div id="main" class="wrapper clearfix">
		<div class="pagehead">
			<h1>Terimakasih</h1>
			<div>
				<a href="<?php echo base_url(); ?>">Home</a>
				&raquo; <a href="<?php echo base_url(); ?>pelanggan">Checkout</a>
				&raquo; Terimakasih
			</div>
		</div>		
		<aside id="column-right" class="column">
			<div class="box">
				<div class="box-heading header-3">Dashboard</div>
				<div class="box-content">
					<div class="col-links">
						<ul>
							<li><a href="<?php echo base_url().'pelanggan/'.$this->session->userdata('pelanggan_id').'-'.url_title($this->session->userdata('nama')); ?>">My Profil</a></li>
							<li><a href="<?php echo base_url().'pelanggan/pesanan'; ?>">My Pesanan</a></li>
							<li><a href="<?php echo base_url().'pelanggan/review-produk'; ?>">My Review</a></li>
							<li><a href="<?php echo base_url().'pelanggan/logout'; ?>">Logout</a></li>
						</ul>
					</div>
				</div>
			</div>
		</aside>
		<div id="content-body">
			<div class="content-box">
				<p>Pesanan Anda telah berhasil tersimpan!</p>
				<p>Sebuah email telah dikirimkan ke alamat email Anda tentang detail pesanan dan cara pembayaran.</p>
				<p>Silahkan lihat riwayat pesanan Anda pada menu dashboard <a href="<?php echo base_url().'pelanggan/pesanan'; ?>">My Pesanan.</a></p>
				<p>Anda bisa mengkonfirmasi setiap pesanan yang telah Anda bayar melalui menu dashboard pelanggan.</p>
				<p>Jika mengalami masalah dalam pemesanan online, silahkan kontak <a href="<?php echo base_url().'informasi/kontak-kami'; ?>">administrator</a>.</p>
				<p>Terimakasih telah berbelanja online bersama StarKonveksi.com!</p>
			</div>
		</div>
	</div>
</div>