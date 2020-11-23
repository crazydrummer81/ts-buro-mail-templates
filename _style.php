<?
	$muller_bold = 'font-family: Verdana, sans-serif, Arial; font-weight: bolder;';
	$muller_meduim = 'font-family: Verdana, sans-serif, Arial; font-weight: bold;';
	$muller_light = 'font-family: Verdana, sans-serif, Arial; font-weight: normal;';
	$montserrat = 'font-family: Verdana, sans-serif, Arial; font-weight: normal;';
	$raleway_bold = 'font-family: Verdana, sans-serif, Arial; font-weight: bold;';
	$pt_serif = 'font-family: Georgia;';
	$logo_url = 'https://maisonhause.com/upload/emailhtml/img/logo-merged-cutted-h167.png';

	$template_width = 720;
	$max_email_width = 720;
	$RATE = $max_email_width / $template_width;

	$style = (object) [
		'table_upper_level' => 'width: '.rate($template_width).'px; margin-top: 0px; margin-right: auto; margin-bottom: 0px; margin-left: auto; background-color: #ffffff;',
		'header_logo' => 'width:'.rate(22+460).'px; padding-top: 0px; padding-bottom: '.rate(13).'px; padding-left: '.rate(22).'px; padding-right: 0px;',
		'header_phone_td' => 'text-align: right; vertical-align: middle; font-size: '.rate(16).'px; '.$muller_bold.'padding-right: '.rate(33).'px; padding-top:'.rate(12).'px;',
		'header_phone_a' => 'color:#000000; text-decoration: none;',
		'header_phone_span' => 'color:#FF8358;',
		'menu'  => 'height: '.rate(42).'px; text-align: center; '.$muller_meduim.' font-size: '.rate(11).'px; color:#000000; border-top: 1px solid #aeaeae; border-bottom: 1px solid #000000; vertical-align: middle; text-align: center;background-color: #ffffff',
		'menu_a'	=> 'color: #000000; text-decoration:none; margin-right: '.rate(30).'px; margin-left: '.rate(60).'px;',
		'decor_points' => ' line-height: '.rate(16).'px;font-size: '.rate(35).'px; font-family: Arial;',
		'main' => 'vertical-align: top;padding-top: '.rate(40).'px;text-align: center;'.$pt_serif.' font-size: '.rate(17).'px;line-height:'.rate(24).'px;',
		'features_item_td' => 'text-align: center; width: '.rate($template_width/4).'px;',
		'features_item_wrapper' => 'overflow: visible; border: 1px solid #d68862;border-radius: 50px; width: '.rate(66).'px; height: '.rate(66).'px;
		margin-top: 0px; margin-bottom: 0px; margin-left: auto; margin-right: auto;',
		'features_item_img' => 'width:'.rate(34).'px',
		'sm_img' => 'width: '.rate(20).'px; margin-top: 0px; margin-right: 10px; margin-bottom: 0px; margin-left: 10px;',
	];

	function rate($num) {
		global $RATE;
		return round($num * $RATE);
	}
	function padding($top, $right, $bottom, $left) {
		return 'padding-top: '.rate($top).'px; padding-right:'.rate($right).'px; padding-bottom:'.rate($bottom).'px; padding-left:'.rate($left).'px;';
	}
	function border($width, $style, $color) {
		return 'border-width:'.$width.'; border-style:'.$style.'; border-color:'.$color.';';
	}
?>