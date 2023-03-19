jQuery(document).ready(function($){
		$('#iwllc-upload-btn').click(function(e) {
			e.preventDefault();
			var image = wp.media({ 
				title: 'Upload Logo',
				multiple: false
			}).open()
			.on('select', function(e){
				var uploaded_image = image.state().get('selection').first();
				console.log(uploaded_image);
				var image_url = uploaded_image.toJSON().url;
				$('#iwllc_wp_logo_url').val(image_url);
			});
		});
	});