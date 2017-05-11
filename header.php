<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
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
	<div class="header">
		<div class="logotype">
			<div class="container">
				<div class="row">
					<nav class="navbar navbar-inverse navbar-static-top mobyle-menu" role="navigation">
						<div class="container">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-10">

									<div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
										<?$APPLICATION->IncludeComponent(
											"bitrix:menu",
											"base-menu",
											Array(
												"ALLOW_MULTI_SELECT" => "N",
												"CHILD_MENU_TYPE" => "left",
												"DELAY" => "N",
												"MAX_LEVEL" => "1",
												"MENU_CACHE_GET_VARS" => array(""),
												"MENU_CACHE_TIME" => "3600",
												"MENU_CACHE_TYPE" => "N",
												"MENU_CACHE_USE_GROUPS" => "Y",
												"ROOT_MENU_TYPE" => "top",
												"USE_EXT" => "N"
												)
												);?>
											</div>
											<div class="col-xs-2">
												<div class="mobyle-close"><i class="fa fa-times" aria-hidden="true"></i></div>
											</div>
										</div> <!-- col-lg-12 col-md-12 col-sm-12 col-xs-12 -->
									</div> <!-- row -->
								</div> <!-- container -->
							</nav>


						</div> <!-- row -->
						<div class="row">
							<div class="search_bar">
								<div class="col-xs-12">
									<div class="row">

										<div class="col-xs-10"></div>
										<div class="col-xs-2 text-right">
											<div class="search-close"><i class="fa fa-times" aria-hidden="true"></i></div>
										</div>
									</div> <!-- row -->
									<div class="row-2">
										<div class="row">
											<div class="col-xs-10">
												<p class="search_text">Поиск по сайту</p>
												<div class="col-xs-2"></div>
											</div>
											<div class="col-xs-12">
												<div class="search_site">

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
										</div> <!-- col-xs-12 -->
									</div> <!-- search_bar -->
								</div> <!-- row -->
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-5 col-xs-9">
										<a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/img/img-main/logo.png" class="logo" alt="logo"></a>
									</div>
									<div class="col-lg-1 col-md-1  col-xs-1"></div>
									<div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">
										<div class="mobyle">

											<?$APPLICATION->IncludeComponent(
												"bitrix:main.include",
												"",
												Array(
													"AREA_FILE_SHOW" => "file",
													"AREA_FILE_SUFFIX" => "inc",
													"EDIT_TEMPLATE" => "",
													"PATH" => "/include/phone.php"
													)
													);?>
												</div><!--  mobyle -->
												<div class="home_phone">

													<?$APPLICATION->IncludeComponent(
														"bitrix:main.include",
														"",
														Array(
															"AREA_FILE_SHOW" => "file",
															"AREA_FILE_SUFFIX" => "inc",
															"EDIT_TEMPLATE" => "",
															"PATH" => "/include/fax.php"
															)
															);?>



														</div> <!-- home_phone -->
													</div>  <!-- col-lg-3 col-md-3 col-sm-3 col-xs-3 -->
													<div class="col-lg-1 col-md-1  hidden-xs"></div>
													<div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">
														<p class="search_txt">Поиск по сайту</p>
														<div class="search_site">
															<?$APPLICATION->IncludeComponent(
																"bitrix:search.title", 
																"search-title", 
																array(
																	"CATEGORY_0" => array(
																		0 => "no",
																		),
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
																	"USE_LANGUAGE_GUESS" => "Y",
																	"COMPONENT_TEMPLATE" => "search-title"
																	),
																false
																);?><br>
															</div>
														</div>
														<div class="col-xs-3 hidden-lg hidden-md hidden-sm"><i class="fa fa-bars mobyle-open" aria-hidden="true"></i></div>





													</div> <!-- row -->

													<div class="row">
														<div class="hidden-lg hidden-md hidden-sm col-xs-8">
															<div class="mobyle">
																<?$APPLICATION->IncludeComponent(
																	"bitrix:main.include",
																	"",
																	Array(
																		"AREA_FILE_SHOW" => "file",
																		"AREA_FILE_SUFFIX" => "inc",
																		"EDIT_TEMPLATE" => "",
																		"PATH" => "/include/phone.php"
																		)
																		);?>
																	</div><!--  mobyle -->
																	<div class="home_phone">

													<?$APPLICATION->IncludeComponent(
														"bitrix:main.include",
														"",
														Array(
															"AREA_FILE_SHOW" => "file",
															"AREA_FILE_SUFFIX" => "inc",
															"EDIT_TEMPLATE" => "",
															"PATH" => "/include/fax.php"
															)
															);?>



														</div> <!-- home_phone -->
																</div>  <!-- col-lg-3 col-md-3 col-sm-3 col-xs-3 -->
																<div class="col-xs-2"></div>
																<div class="hidden-lg hidden-md hidden-sm col-xs-2">

																	<div class="search_icon"><i class="fa fa-search" aria-hidden="true"></i></div>
																</div>
															</div>
														</div> <!-- container -->
													</div> 	<!-- logotype -->


													<nav class="navbar navbar-inverse navbar-static-top hidden-xs" role="navigation">
														<div class="container">
															<div class="row">
																<div class="col-lg-12 col-md-12 col-sm-12 hidden-xs">

																	<div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
																		<?$APPLICATION->IncludeComponent(
																			"bitrix:menu", 
																			"base-menu", 
																			array(
																				"ALLOW_MULTI_SELECT" => "N",
																				"CHILD_MENU_TYPE" => "left",
																				"DELAY" => "N",
																				"MAX_LEVEL" => "1",
																				"MENU_CACHE_GET_VARS" => array(
																					),
																				"MENU_CACHE_TIME" => "3600",
																				"MENU_CACHE_TYPE" => "N",
																				"MENU_CACHE_USE_GROUPS" => "Y",
																				"ROOT_MENU_TYPE" => "top",
																				"USE_EXT" => "N",
																				"COMPONENT_TEMPLATE" => "base-menu"
																				),
																			false
																			);?>
																		</div>
																	</div> <!-- col-lg-12 col-md-12 col-sm-12 col-xs-12 -->
																</div> <!-- row -->
															</div> <!-- container -->
														</nav>
													</div>
													<? if($APPLICATION->GetCurDir()=="/"):?>
													<div class="main">
														<div class="info_company">
															<div class="container">
																<div class="row">

																	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
																		<div class="company">
																			<?$APPLICATION->IncludeComponent(
																				"bitrix:news.detail", 
																				"company", 
																				array(
																					"ACTIVE_DATE_FORMAT" => "d.m.Y",
																					"ADD_ELEMENT_CHAIN" => "N",
																					"ADD_SECTIONS_CHAIN" => "Y",
																					"AJAX_MODE" => "N",
																					"AJAX_OPTION_ADDITIONAL" => "",
																					"AJAX_OPTION_HISTORY" => "N",
																					"AJAX_OPTION_JUMP" => "N",
																					"AJAX_OPTION_STYLE" => "Y",
																					"BROWSER_TITLE" => "-",
																					"CACHE_GROUPS" => "Y",
																					"CACHE_TIME" => "36000000",
																					"CACHE_TYPE" => "A",
																					"CHECK_DATES" => "Y",
																					"DETAIL_URL" => "",
																					"DISPLAY_BOTTOM_PAGER" => "Y",
																					"DISPLAY_DATE" => "Y",
																					"DISPLAY_NAME" => "Y",
																					"DISPLAY_PICTURE" => "Y",
																					"DISPLAY_PREVIEW_TEXT" => "Y",
																					"DISPLAY_TOP_PAGER" => "N",
																					"ELEMENT_CODE" => "",
																					"ELEMENT_ID" => "13",
																					"FIELD_CODE" => array(
																						0 => "PREVIEW_PICTURE",
																						1 => "",
																						),
																					"IBLOCK_ID" => "1",
																					"IBLOCK_TYPE" => "content",
																					"IBLOCK_URL" => "",
																					"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
																					"MESSAGE_404" => "",
																					"META_DESCRIPTION" => "-",
																					"META_KEYWORDS" => "-",
																					"PAGER_BASE_LINK_ENABLE" => "N",
																					"PAGER_SHOW_ALL" => "N",
																					"PAGER_TEMPLATE" => ".default",
																					"PAGER_TITLE" => "Страница",
																					"PROPERTY_CODE" => array(
																						0 => "",
																						1 => "file",
																						2 => "",
																						),
																					"SET_BROWSER_TITLE" => "Y",
																					"SET_CANONICAL_URL" => "N",
																					"SET_LAST_MODIFIED" => "N",
																					"SET_META_DESCRIPTION" => "Y",
																					"SET_META_KEYWORDS" => "Y",
																					"SET_STATUS_404" => "N",
																					"SET_TITLE" => "Y",
																					"SHOW_404" => "N",
																					"STRICT_SECTION_CHECK" => "N",
																					"USE_PERMISSIONS" => "N",
																					"USE_SHARE" => "N",
																					"COMPONENT_TEMPLATE" => "company"
																					),
																				false
																				);?>


																			</div> <!-- company -->
																		</div> <!-- col-lg-6 col-md-6 col-sm-12 col-xs-12 -->
																		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
																			<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider-main", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "40",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "slider-main"
	),
	false
);?><br>
																				</div> <!-- col-lg-6 col-md-6 col-sm-12 col-xs-12 -->
																			</div><!--  row -->
																		</div> <!-- container -->
																	</div>	<!-- info_company	 -->
																	<div class="experts">
																		<div class="container">
																			<div class="exp">
																				<div class="row">
																					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
																						<?$APPLICATION->IncludeComponent(
																							"bitrix:news.detail",
																							"expert",
																							Array(
																								"ACTIVE_DATE_FORMAT" => "d.m.Y",
																								"ADD_ELEMENT_CHAIN" => "N",
																								"ADD_SECTIONS_CHAIN" => "Y",
																								"AJAX_MODE" => "N",
																								"AJAX_OPTION_ADDITIONAL" => "",
																								"AJAX_OPTION_HISTORY" => "N",
																								"AJAX_OPTION_JUMP" => "N",
																								"AJAX_OPTION_STYLE" => "Y",
																								"BROWSER_TITLE" => "-",
																								"CACHE_GROUPS" => "Y",
																								"CACHE_TIME" => "36000000",
																								"CACHE_TYPE" => "A",
																								"CHECK_DATES" => "Y",
																								"DETAIL_URL" => "",
																								"DISPLAY_BOTTOM_PAGER" => "Y",
																								"DISPLAY_DATE" => "Y",
																								"DISPLAY_NAME" => "Y",
																								"DISPLAY_PICTURE" => "Y",
																								"DISPLAY_PREVIEW_TEXT" => "Y",
																								"DISPLAY_TOP_PAGER" => "N",
																								"ELEMENT_CODE" => "",
																								"ELEMENT_ID" => "32",
																								"FIELD_CODE" => array("", ""),
																								"IBLOCK_ID" => "12",
																								"IBLOCK_TYPE" => "content",
																								"IBLOCK_URL" => "",
																								"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
																								"MESSAGE_404" => "",
																								"META_DESCRIPTION" => "-",
																								"META_KEYWORDS" => "-",
																								"PAGER_BASE_LINK_ENABLE" => "N",
																								"PAGER_SHOW_ALL" => "N",
																								"PAGER_TEMPLATE" => ".default",
																								"PAGER_TITLE" => "Страница",
																								"PROPERTY_CODE" => array("", ""),
																								"SET_BROWSER_TITLE" => "Y",
																								"SET_CANONICAL_URL" => "N",
																								"SET_LAST_MODIFIED" => "N",
																								"SET_META_DESCRIPTION" => "Y",
																								"SET_META_KEYWORDS" => "Y",
																								"SET_STATUS_404" => "N",
																								"SET_TITLE" => "Y",
																								"SHOW_404" => "N",
																								"STRICT_SECTION_CHECK" => "N",
																								"USE_PERMISSIONS" => "N",
																								"USE_SHARE" => "N"
																								)
																								);?>
																							</div> <!-- col-lg-8 col-md-8 col-sm-12 col-xs-12 -->
																							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
																								<?$APPLICATION->IncludeComponent(
																									"bitrix:news.detail",
																									"company",
																									Array(
																										"ACTIVE_DATE_FORMAT" => "d.m.Y",
																										"ADD_ELEMENT_CHAIN" => "N",
																										"ADD_SECTIONS_CHAIN" => "Y",
																										"AJAX_MODE" => "N",
																										"AJAX_OPTION_ADDITIONAL" => "",
																										"AJAX_OPTION_HISTORY" => "N",
																										"AJAX_OPTION_JUMP" => "N",
																										"AJAX_OPTION_STYLE" => "Y",
																										"BROWSER_TITLE" => "-",
																										"CACHE_GROUPS" => "Y",
																										"CACHE_TIME" => "36000000",
																										"CACHE_TYPE" => "A",
																										"CHECK_DATES" => "Y",
																										"DETAIL_URL" => "",
																										"DISPLAY_BOTTOM_PAGER" => "Y",
																										"DISPLAY_DATE" => "Y",
																										"DISPLAY_NAME" => "Y",
																										"DISPLAY_PICTURE" => "Y",
																										"DISPLAY_PREVIEW_TEXT" => "Y",
																										"DISPLAY_TOP_PAGER" => "N",
																										"ELEMENT_CODE" => "",
																										"ELEMENT_ID" => "14",
																										"FIELD_CODE" => array("", ""),
																										"IBLOCK_ID" => "1",
																										"IBLOCK_TYPE" => "content",
																										"IBLOCK_URL" => "",
																										"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
																										"MESSAGE_404" => "",
																										"META_DESCRIPTION" => "-",
																										"META_KEYWORDS" => "-",
																										"PAGER_BASE_LINK_ENABLE" => "N",
																										"PAGER_SHOW_ALL" => "N",
																										"PAGER_TEMPLATE" => ".default",
																										"PAGER_TITLE" => "Страница",
																										"PROPERTY_CODE" => array("", ""),
																										"SET_BROWSER_TITLE" => "Y",
																										"SET_CANONICAL_URL" => "N",
																										"SET_LAST_MODIFIED" => "N",
																										"SET_META_DESCRIPTION" => "Y",
																										"SET_META_KEYWORDS" => "Y",
																										"SET_STATUS_404" => "N",
																										"SET_TITLE" => "Y",
																										"SHOW_404" => "N",
																										"STRICT_SECTION_CHECK" => "N",
																										"USE_PERMISSIONS" => "N",
																										"USE_SHARE" => "N"
																										)
																										);?><br>
																									</div> <!-- col-lg-4 col-md-4 col-sm-12 col-xs-12 -->
																								</div> <!-- row -->
																							</div> <!-- exp -->
																						</div> <!-- container -->
																					</div> <!-- experts -->



																					<div class="team">
																						<div class="container">
																							<div class="row">
																								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																									<div class="com">
																										<div class="row">

																											<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
																												<div class="specialist">
																													<h2 class="specialists">Команда специалистов <span class="red red_link hidden-lg hidden-md hidden-sm">&rarr;</span></h2>
																												</div>

																											</div>
																											<div class="col-xs-12 hidden-lg hidden-md hidden-sm">
																											<a href="/spetsialisty/"><h2 class="special">Команда специалистов <span class="red red_link hidden-lg hidden-md hidden-sm">&rarr;</span></h2></a>
																											</div>
																											<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
																												<div class="link_spec">
																													<a href="/spetsialisty/" class="spec_link hidden-xs">Смотреть всех специалистов</a>
																												</div>
																											</div>
																										</div>
																									</div>




																									<?$APPLICATION->IncludeComponent(
																										"bitrix:news.list",
																										"team-slider",
																										Array(
																											"ACTIVE_DATE_FORMAT" => "d.m.Y",
																											"ADD_SECTIONS_CHAIN" => "Y",
																											"AJAX_MODE" => "N",
																											"AJAX_OPTION_ADDITIONAL" => "",
																											"AJAX_OPTION_HISTORY" => "N",
																											"AJAX_OPTION_JUMP" => "N",
																											"AJAX_OPTION_STYLE" => "Y",
																											"CACHE_FILTER" => "N",
																											"CACHE_GROUPS" => "Y",
																											"CACHE_TIME" => "36000000",
																											"CACHE_TYPE" => "A",
																											"CHECK_DATES" => "Y",
																											"DETAIL_URL" => "",
																											"DISPLAY_BOTTOM_PAGER" => "Y",
																											"DISPLAY_DATE" => "Y",
																											"DISPLAY_NAME" => "Y",
																											"DISPLAY_PICTURE" => "Y",
																											"DISPLAY_PREVIEW_TEXT" => "Y",
																											"DISPLAY_TOP_PAGER" => "N",
																											"FIELD_CODE" => array("",""),
																											"FILTER_NAME" => "",
																											"HIDE_LINK_WHEN_NO_DETAIL" => "N",
																											"IBLOCK_ID" => "3",
																											"IBLOCK_TYPE" => "content",
																											"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
																											"INCLUDE_SUBSECTIONS" => "Y",
																											"MESSAGE_404" => "",
																											"NEWS_COUNT" => "20",
																											"PAGER_BASE_LINK_ENABLE" => "N",
																											"PAGER_DESC_NUMBERING" => "N",
																											"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
																											"PAGER_SHOW_ALL" => "N",
																											"PAGER_SHOW_ALWAYS" => "N",
																											"PAGER_TEMPLATE" => ".default",
																											"PAGER_TITLE" => "Новости",
																											"PARENT_SECTION" => "",
																											"PARENT_SECTION_CODE" => "",
																											"PREVIEW_TRUNCATE_LEN" => "",
																											"PROPERTY_CODE" => array("dolg","phone", "email"),
																											"SET_BROWSER_TITLE" => "Y",
																											"SET_LAST_MODIFIED" => "N",
																											"SET_META_DESCRIPTION" => "Y",
																											"SET_META_KEYWORDS" => "Y",
																											"SET_STATUS_404" => "N",
																											"SET_TITLE" => "Y",
																											"SHOW_404" => "N",
																											"SORT_BY1" => "ACTIVE_FROM",
																											"SORT_BY2" => "SORT",
																											"SORT_ORDER1" => "DESC",
																											"SORT_ORDER2" => "ASC",
																											"STRICT_SECTION_CHECK" => "N"
																											)
																											);?><br>
																										</div> <!-- col-lg-12 col-md-12 col-sm-12 col-xs-12 -->
																									</div> <!-- row -->
																								</div> <!-- container -->
																							</div><!--  container -->
																							<div class="prices">
																								<div class="container">
																									<div class="row">
																										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																											<?$APPLICATION->IncludeComponent(
																												"bitrix:news.detail", 
																												"deadline", 
																												array(
																													"ACTIVE_DATE_FORMAT" => "d.m.Y",
																													"ADD_ELEMENT_CHAIN" => "N",
																													"ADD_SECTIONS_CHAIN" => "Y",
																													"AJAX_MODE" => "N",
																													"AJAX_OPTION_ADDITIONAL" => "",
																													"AJAX_OPTION_HISTORY" => "N",
																													"AJAX_OPTION_JUMP" => "N",
																													"AJAX_OPTION_STYLE" => "Y",
																													"BROWSER_TITLE" => "-",
																													"CACHE_GROUPS" => "Y",
																													"CACHE_TIME" => "36000000",
																													"CACHE_TYPE" => "A",
																													"CHECK_DATES" => "Y",
																													"DETAIL_URL" => "",
																													"DISPLAY_BOTTOM_PAGER" => "Y",
																													"DISPLAY_DATE" => "Y",
																													"DISPLAY_NAME" => "Y",
																													"DISPLAY_PICTURE" => "Y",
																													"DISPLAY_PREVIEW_TEXT" => "Y",
																													"DISPLAY_TOP_PAGER" => "N",
																													"ELEMENT_CODE" => "",
																													"ELEMENT_ID" => "11",
																													"FIELD_CODE" => array(
																														0 => "DETAIL_TEXT",
																														1 => "",
																														),
																													"IBLOCK_ID" => "4",
																													"IBLOCK_TYPE" => "content",
																													"IBLOCK_URL" => "",
																													"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
																													"MESSAGE_404" => "",
																													"META_DESCRIPTION" => "-",
																													"META_KEYWORDS" => "-",
																													"PAGER_BASE_LINK_ENABLE" => "N",
																													"PAGER_SHOW_ALL" => "N",
																													"PAGER_TEMPLATE" => ".default",
																													"PAGER_TITLE" => "Страница",
																													"PROPERTY_CODE" => array(
																														0 => "done",
																														1 => "load",
																														2 => "order",
																														3 => "listone",
																														4 => "listtwo",
																														5 => "cost",
																														6 => "",
																														),
																													"SET_BROWSER_TITLE" => "Y",
																													"SET_CANONICAL_URL" => "N",
																													"SET_LAST_MODIFIED" => "N",
																													"SET_META_DESCRIPTION" => "Y",
																													"SET_META_KEYWORDS" => "Y",
																													"SET_STATUS_404" => "N",
																													"SET_TITLE" => "Y",
																													"SHOW_404" => "N",
																													"STRICT_SECTION_CHECK" => "N",
																													"USE_PERMISSIONS" => "N",
																													"USE_SHARE" => "N",
																													"COMPONENT_TEMPLATE" => "deadline"
																													),
																												false
																												);?>
																											</div>
																										</div> <!-- row -->


																									</div> <!-- container -->
																								</div> <!-- prices -->
																							</div><!--  main -->
																							<?else:?>
																							<div class="container">
																								<div class="row">
																									<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
																										<div class="main">
																											<?endif;?>