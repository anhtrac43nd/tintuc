<html>
	<head>
		<?php $this->load->view('docgia/head')?>
	</head>
	<body>
		<header>
			<?php $this->load->view('docgia/header')?>
		</header>
		<section id="content">
			<div class="wrap-content zerogrid">
				<div class="row block">
					<div id="main-content" class="col-2-3">
						<?php $this->load->view('docgia/content')?>
					</div>
					<div id="sidebar" class="col-1-3">
						<?php $this->load->view('docgia/sidebar')?>
					</div>
				</div>
			</div>
		</section>
		<footer>
			<?php $this->load->view('docgia/footer')?>
		</footer>
	</body>
</html>