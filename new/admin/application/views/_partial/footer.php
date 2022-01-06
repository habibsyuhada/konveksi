				<footer class="footer">
					<div class="w-100 clearfix">
						<span class="text-center text-sm-left d-md-inline-block">Copyright © 2020 All Rights Reserved.</span>
					</div>
				</footer>
				
			</div>
		</div>
		<script type="text/javascript">
			<?php if($this->session->flashdata('success') == TRUE): ?>
			showSuccessToast('<?php echo $this->session->flashdata('success'); ?>');
      <?php endif; ?>
      <?php if($this->session->flashdata('error') == TRUE): ?>
			showDangerToast('<?php echo $this->session->flashdata('error'); ?>');
			<?php endif; ?>
			$('.data_table').DataTable({
				"order": []
			});
			$('.file-upload-browse').on('click', function() {
				var file = $(this).parent().parent().parent().find('.file-upload-default');
				file.trigger('click');
			});
			$('.file-upload-default').on('change', function() {
				$(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
			});
			$(".select2").select2();
			// $(document).on('blur', "input[type=text], textarea:not([readonly], [disabled])", function () {
    	// 	$(this).val(function (_, val) {
      //   	return val.toUpperCase();
    	// 	});
			// });
		</script>
  	<script src="<?php echo base_url(); ?>assets/dist/js/theme.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/form-picker.js"></script>
	</body>	
</html>		
