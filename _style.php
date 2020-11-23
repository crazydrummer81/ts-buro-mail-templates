<?
	$muller_bold = 'font-family: Verdana, sans-serif, Arial; font-weight: bolder;';
	$muller_meduim = 'font-family: Verdana, sans-serif, Arial; font-weight: bold;';
	$muller_light = 'font-family: Verdana, sans-serif, Arial; font-weight: normal;';
	$montserrat = 'font-family: Montserrat, Verdana, sans-serif, Arial; font-weight: normal;';
	$raleway_bold = 'font-family: Verdana, sans-serif, Arial; font-weight: bold;';
	$pt_serif = 'font-family: Georgia;';
	$logo_url = 'https://maisonhause.com/upload/emailhtml/img/logo-merged-cutted-h167.png';

	$template_width = 720;
	$max_email_width = 720;
	$RATE = $max_email_width / $template_width;

	$mainFontSize = 12;
	$leftFieldWidth = rate(80);
	$mainPaddingLeft = rate(50);
	$signLogoHeight = rate(100);
	$plusStyle = 'style="width: 30px; height: 30px; font-size: 6px; vertical-align: baseline; text-align: left; font-weight: bold;"';
	$bottomLogoHeight = rate(150);

	$style = (object) [
		'body' => "width: {$template_width}px; margin: 0 auto; {$montserrat}; font-size: {$mainFontSize}px; line-height: 1.5em;",
		'leftField' => "background-color: #C5C6C6; width: {$leftFieldWidth}px;",
		'main' => "width: " . (rate($template_width - $leftFieldWidth)) . "px; background-color: #ffffff; padding-left: {$mainPaddingLeft}px;",
		'bottomField' => "background-color: #C5C6C6; height: " . rate($leftFieldWidth) . "px;",
		'sign' => "width: " . (rate($template_width - $leftFieldWidth)) . "px; background-color: #ffffff; padding-left: {$mainPaddingLeft}px;",
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