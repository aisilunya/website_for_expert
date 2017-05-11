
<!DOCTYPE html>
<html>
<head>
	<?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle();?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
	<?	
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/libs/bootstrap.min.css');
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/libs/font-awesome.css');
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/js/slick/slick.css');
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/libs/animate.css');
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/js/fancybox-3.0/dist/jquery.fancybox.min.css');
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/styless.css');
	$APPLICATION->SetAdditionalCSS('https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=cyrillic" rel="stylesheet');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery-3.2.0.min.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/bootstrap.min.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/slick/slick.min.js');
	
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/fancybox-3.0/dist/jquery.fancybox.min.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/script.js');
	?>
</head>
<body>
	<div id="panel">
		<?$APPLICATION->ShowPanel();?>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<div class="main">
				<?$APPLICATION->IncludeComponent(
				"bitrix:search.title",
				"search-title",
				Array(
					"CATEGORY_0" => array("no"),
					"CATEGORY_0_TITLE" => "",
					"CHECK_DATES" => "N",
					"CONTAINER_ID" => "title-search",
					"INPUT_ID" => "title-search-input",
					"NUM_CATEGORIES" => "1",
					"ORDER" => "date",
					"PAGE" => "#SITE_DIR#search/index.php",
					"SHOW_INPUT" => "Y",
					"SHOW_OTHERS" => "N",
					"TOP_COUNT" => "5",
					"USE_LANGUAGE_GUESS" => "Y"
				)
			);?><br>
			</div>
		</div>
	</div>
	</div>
</body>
				