<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<? if($APPLICATION->GetCurDir()!="/"):?>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
	<? if(($APPLICATION->GetCurDir()!="/sertifikaty/") and ($APPLICATION->GetCurDir()!="/docs/") and ($APPLICATION->GetCurDir()!="/search/")) :?>
	<?$APPLICATION->IncludeComponent(
		"bitrix:news.list", 
		"doc-tabs", 
		array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "N",
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
				0 => "DETAIL_TEXT",
				1 => "",
				),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "11",
			"IBLOCK_TYPE" => "content",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "Y",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "4",
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
				0 => "links",
				1 => "file",
				2 => "",
				),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "DESC",
			"SORT_ORDER2" => "ASC",
			"STRICT_SECTION_CHECK" => "N",
			"COMPONENT_TEMPLATE" => "doc-tabs"
			),
		false
		);?><br>
		<?endif;?>


		<? if($APPLICATION->GetCurDir()!="/spetsialisty/"):?>
		<div class="main">
			<div class="team">
				<div class="container">
					<div class="row">
						<div class="hidden-lg hidden-md col-sm-12 col-xs-12">
							<div class="com">
								<div class="row">

									<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
										<div class="specialist">
											<h2 class="specialists">Команда специалистов <span class="red red_link hidden-lg hidden-md hidden-sm">&rarr;</span></h2>
										</div>

									</div>
									<div class="col-xs-12 hidden-lg hidden-md hidden-sm">
										<a href="/spetsialisty/"><h2 class="special small_font">Команда специалистов <span class="red red_link hidden-lg hidden-md hidden-sm">&rarr;</span></h2></a>
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
								array(
									"ACTIVE_DATE_FORMAT" => "d.m.Y",
									"ADD_SECTIONS_CHAIN" => "N",
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
									"IBLOCK_ID" => "3",
									"IBLOCK_TYPE" => "content",
									"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
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
									"PROPERTY_CODE" => array(
										0 => "dolg",
										1 => "email",
										2 => "phone",
										3 => "",
										),
									"SET_BROWSER_TITLE" => "N",
									"SET_LAST_MODIFIED" => "N",
									"SET_META_DESCRIPTION" => "N",
									"SET_META_KEYWORDS" => "N",
									"SET_STATUS_404" => "N",
									"SET_TITLE" => "N",
									"SHOW_404" => "N",
									"SORT_BY1" => "ACTIVE_FROM",
									"SORT_BY2" => "SORT",
									"SORT_ORDER1" => "DESC",
									"SORT_ORDER2" => "ASC",
									"STRICT_SECTION_CHECK" => "N",
									"COMPONENT_TEMPLATE" => "team-slider"
									),
								false
								);?><br>
								
							</div> <!-- col-lg-12 col-md-12 col-sm-12 col-xs-12 -->
						</div> <!-- row -->
					</div> <!-- container -->
				</div><!--  team -->
			</div>
			<?endif;?>


			<? if(($APPLICATION->GetCurDir()!="/spetsialisty/") and ($APPLICATION->GetCurDir()!="/search/")):?>


			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list", 
				"spec-right", 
				array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"ADD_SECTIONS_CHAIN" => "N",
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
						0 => "DETAIL_TEXT",
						1 => "",
						),
					"FILTER_NAME" => "",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"IBLOCK_ID" => "3",
					"IBLOCK_TYPE" => "-",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"INCLUDE_SUBSECTIONS" => "Y",
					"MESSAGE_404" => "",
					"NEWS_COUNT" => "2",
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
						0 => "dolg",
						1 => "email",
						2 => "phone",
						3 => "",
						),
					"SET_BROWSER_TITLE" => "N",
					"SET_LAST_MODIFIED" => "N",
					"SET_META_DESCRIPTION" => "N",
					"SET_META_KEYWORDS" => "N",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "N",
					"SHOW_404" => "N",
					"SORT_BY1" => "ACTIVE_FROM",
					"SORT_BY2" => "SORT",
					"SORT_ORDER1" => "DESC",
					"SORT_ORDER2" => "ASC",
					"STRICT_SECTION_CHECK" => "N",
					"COMPONENT_TEMPLATE" => "spec-right"
					),
				false
				);?>
				<div class="main">
					<a href="/spetsialisty/" class="spec_link right_link  hidden-sm hidden-xs">Смотреть всех специалистов</a>
				</div>
				<?endif;?>



				<div class="main">
					<div class="small_contacts">


						<h2 class="small_font">Контакты</h2>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-4 col-xs-12">
								<div class="email">
									<?$APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"company-mail",
										Array(
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "inc",
											"EDIT_TEMPLATE" => "",
											"PATH" => "/include/company-mail.php"
											)
											);?>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-4 col-xs-12">
										<div class="mobilephone">
											<?$APPLICATION->IncludeComponent(
												"bitrix:main.include",
												"company-mail",
												Array(
													"AREA_FILE_SHOW" => "file",
													"AREA_FILE_SUFFIX" => "inc",
													"EDIT_TEMPLATE" => "",
													"PATH" => "/include/phone.php"
													)
													);?><br>
											<?$APPLICATION->IncludeComponent(
												"bitrix:main.include",
												"location",
												Array(
													"AREA_FILE_SHOW" => "file",
													"AREA_FILE_SUFFIX" => "inc",
													"EDIT_TEMPLATE" => "",
													"PATH" => "/include/fax.php"
													)
													);?><br>
												</div>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-4 col-xs-12">
												<div class="mobile_fax">
													<?$APPLICATION->IncludeComponent(
														"bitrix:main.include",
														"company-mail",
														Array(
															"AREA_FILE_SHOW" => "file",
															"AREA_FILE_SUFFIX" => "inc",
															"EDIT_TEMPLATE" => "",
															"PATH" => "/include/location.php"
															)
															);?>	
														</div>
													</div>
												</div>
											</div>
										</div>







									</div>

								</div>
							</div>
						</div>


						<?endif;?>


						<div class="footer">
							<div class="container">
								<div class="row">
									<div class="col-lg-5 col-md-5 col-sm-7 col-xs-12">
										<a href="index.php"><img src="<?=SITE_TEMPLATE_PATH?>/img/img-main/footer-logo.png" class="footer_logo" alt=""></a>
										<div class="location hidden-xs">

											<?$APPLICATION->IncludeComponent(
												"bitrix:main.include",
												"",
												Array(
													"AREA_FILE_SHOW" => "file",
													"AREA_FILE_SUFFIX" => "",
													"EDIT_TEMPLATE" => "",
													"PATH" => "/include/adress.php"
													)
													);?><br>


												</div> <!-- location -->
											</div>
											<div class="col-lg-1 col-md-1 col-sm-1"></div>
											<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
												<div class="footer_links">
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
													</div>
													<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
														<div class="footer_contacts">
															<p class="footer_text">Контакты:</p>

															<?$APPLICATION->IncludeComponent(
																"bitrix:main.include",
																"",
																Array(
																	"AREA_FILE_SHOW" => "file",
																	"AREA_FILE_SUFFIX" => "inc",
																	"EDIT_TEMPLATE" => "",
																	"PATH" => "/include/company-mail.php"
																	)
																	);?>
															<?$APPLICATION->IncludeComponent(
																"bitrix:main.include",
																"",
																Array(
																	"AREA_FILE_SHOW" => "file",
																	"AREA_FILE_SUFFIX" => "inc",
																	"EDIT_TEMPLATE" => "",
																	"PATH" => "/include/phone-white.php"
																	)
																	);?><br>
															<?$APPLICATION->IncludeComponent(
																"bitrix:main.include", 
																".default", 
																array(
																	"AREA_FILE_SHOW" => "file",
																	"AREA_FILE_SUFFIX" => "inc",
																	"EDIT_TEMPLATE" => "",
																	"PATH" => "/include/fax.php",
																	"COMPONENT_TEMPLATE" => ".default"
																	),
																false
																);?>
															</div>
														</div>
														<div class="col-xs-12">
															<div class="location hidden-lg hidden-md hidden-sm">
																<div class="location hidden-lg hidden-md hidden-sm">
																	<p class="footer_text"><i class="fa fa-copyright" aria-hidden="true"></i> 2017,  АНО «Судебно-экспертный центр «СТРОЙЭКСПЕРТИЗА».</p>
																	<p class="footer_text"><i class="fa fa-map-marker" aria-hidden="true"></i> Республика Татарстан, г. Казань, ул. Даурская, д.44Г</p>
																</div> <!-- location -->
															</div> <!-- location -->
														</div> <!-- col-xs-12 -->

													</div> <!-- row -->
												</div> <!-- container -->
											</div> 
										</body>
										</html>