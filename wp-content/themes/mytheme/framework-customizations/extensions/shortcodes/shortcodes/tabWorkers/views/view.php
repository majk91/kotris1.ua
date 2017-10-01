<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<?php $tabs_id = uniqid('fw-tabs-'); ?>





<div class="fw-tabs-container" id="<?php echo esc_attr($tabs_id); ?>">
	<div class="fw-tabs">
		<ul>
			<?php foreach ($atts['option_tab'] as $key => $tab) {
				echo '<li><a href="#'.esc_attr($tabs_id . '-' . ($key + 1)).'">'.$tab['tab_title'].'</a></li>';
			} ?>
		</ul>
	</div>
	<?php 
		foreach ( $atts['option_tab'] as $key => $tab ) {
			echo '<div class="fw-tab-content" id="'.esc_attr($tabs_id . '-' . ($key + 1)) . '"><div class="fw-container"><div class="photo-manager-box"><img class="photo-manager" src="';
			if ( empty( $tab['image'] ) ){
				echo '/wp-content/themes/mytheme/css/avatar.png';
			}else {
				echo $tab['image']['url'];
			//	if (empty( $atts['link'])){
			//		echo fw_html_tag('img', $img_attributes);
			//	}else{
			//		echo fw_html_tag('a', array(
			//			'href' => $atts['link'],
			//			'target' => $atts['target'],
			//		), fw_html_tag('img',$img_attributes));
			//	}
			}
			echo'" alt=""></div><div class="content-manager-box"><h4 class="content-title">'.$tab['tab_content_title'].'</h4><p >'.do_shortcode( $tab['tab_content'] ) . '</p><div class="read-more"><a href="kotris1.ua/about_as#managers">Узнать больше ... </a></div></div></div></div>';
		}
	?>
</div>

