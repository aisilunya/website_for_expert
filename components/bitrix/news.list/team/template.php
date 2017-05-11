<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?if (!empty($arResult)):?>
	
			
					<h1>специалисты</h1>


					<?foreach($arResult["ITEMS"] as $arItem):?>
						<?
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>
						  
						  <h2><?=$arItem["NAME"]?></h2>
						  
							<div class="row">
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
									<?
								     $arFileTmp = CFile::ResizeImageGet(
								               $arItem["PREVIEW_PICTURE"]["ID"],
								               array("width" => 250, "height" => 240),
								               BX_RESIZE_IMAGE_EXACT,
								               true
								           );
								    ?>
								<img src="<?=$arFileTmp["src"]?>" class="slider-pic" alt="">
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1"></div>
								<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
									<div class="about text-justify">
										<span class="red prof"><?=$arItem["PROPERTIES"]['dolg']["VALUE"]?></span><br><br>
										<p><?=$arItem["PROPERTIES"]['prop']["~VALUE"]["TEXT"]?></p>  
										

										<p>Тел. <?=$arItem["PROPERTIES"]['phone']["VALUE"]?></p>
										<?if (!empty($arItem["PROPERTIES"]['fax']["VALUE"])):?>
											<p>Факс <?=$arItem["PROPERTIES"]['fax']["VALUE"]?><br></p>
										<?endif?>
										
										E-mail: <a class="email" href="mailto:info@sudexpertiza.org"><?=$arItem["PROPERTIES"]['email']["VALUE"]?></a>
										

									</div>
								</div>
								<?if (!empty($arItem["PROPERTIES"]['edu']["~VALUE"]["TEXT"])):?>
									<a href="#" class="down-2">Подробнее</a>
								<?endif?>
							</div> <!-- row -->
							
							<div class="add text-justify">
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
											<p><?=$arItem["PROPERTIES"]['edu']["~VALUE"]["TEXT"]?></p> 
											
											<?if (!empty($arItem["DETAIL_TEXT"])):?>
												<span class="expert">Экспертная специальность:</span> <br><br>
											<?=$arItem["DETAIL_TEXT"]?>	
											<?endif?>



										</div>
									</div>
									<div class="row">
										<?foreach($arItem["PROPERTIES"]['sert']["VALUE"] as $key=>$value):?>
										<div class="col-lg-4 col-md-4 col-sm-4">
											
												<?
												 $arPhotoSmall = CFile::ResizeImageGet(
												    $value,
												    array(
												       'width'=>80,
												       'height'=>120
												    ),
												    BX_RESIZE_IMAGE_EXACT,
												    Array(
												       "name" => "sharpen",
												       "precision" => 0
												    )
												 );
												 ?>
												  


												  <a href="<?=CFile::GetPath($value)?>" data-fancybox data-caption="">
													<img src="<?=$arPhotoSmall['src']?>"  class="img_sert" alt="">
												</a>
											

												<div class="fancies">
													<a  class="fancy_link" href="<?=CFile::GetPath($value)?>" data-fancybox data-caption=""><?=htmlspecialchars_decode($arItem["PROPERTIES"]['sert']["DESCRIPTION"][$key])?></a><br>
												</div>
												<a  class="fancy_link1" href="<?=CFile::GetPath($value)?>" download>скачать</a>
												<div class="clearfix"></div>

											
										</div>

									<?endforeach?>
								
								</div>
								

								
							<a href="#" class="up-2">Скрыть</a>
							<div class="clearfix"></div>
							</div>
							





							
							
							<?endforeach;?>







<?endif?>




