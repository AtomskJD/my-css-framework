<?php 
function the_menu($display = true, $menu = 'main-menu', $depth = 2){
	$output = "<!-- menu: Меню сгенерино из " . strtoupper($menu) . "; -->";
	$output .= drupal_render(menu_tree_output(menu_tree_all_data($menu, null, $depth)));
	$output .= "<!-- end: " .strtoupper($menu). "; -->";

	if (!$display) {
		return $output;
	}

	print($output);
}
function the_slogan($display = true){
	$slogan = variable_get('site_slogan');
	$output = "<!-- Слоган сайта BEGIN (ПРАВКА В НАСТРОЙКАХ конфигурация  информация о сайте) -->";
	if(!empty($slogan))
		$output .= $slogan;
	else 
		$output .= "Настроить слоган";
	$output .= "<!-- Слоган сайта END -->";
	
	if (!$display) {
		return $output;
	}

	print($output);
}
?>