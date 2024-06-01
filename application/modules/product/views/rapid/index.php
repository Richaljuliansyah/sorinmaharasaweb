<!--==========================
	Product Section
============================-->
<section id="intro" class="clearfix intro-half"></section>
<section id="products">
	<div class="container">

		<header class="section-header">
			<h3>Select Brand</h3> 
		</header>

		<?php if (count($data) > 0): ?>
		<div class="row">
			<?php foreach ($data_clients as $index => $item): ?>
			<div class="col-md-6 col-lg-3">
				<div class="box box-item">
					<img src="<?php echo base_url($item->logo) ?>" />
					<div class="detail">
						<div class="title">
							<a href="<?php echo base_url('brand-product/'.$item->id) ?>">
								<?php echo $item->name ?>
							</a>
						</div> 
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<?php else: ?>
		<div class="nothing-found"><div>No data found</div></div>
		<?php endIf; ?> 
		<div class="text-center" style="margin-top: 20px;">
      <?php echo $pagination ?>
    </div>

	</div>
</section><!-- #Product -->
