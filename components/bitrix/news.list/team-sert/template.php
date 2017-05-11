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
	
			
					<h2>Документы специалистов</h2>



					<?foreach($arResult["ITEMS"] as $arItem):?>
						<?
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>
						 <?if (!empty($arItem["PROPERTIES"]['sert']["VALUE"])):?>
						  <h5><?=$arItem["NAME"]?></h5>
						  
							
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
							<?endif?>

							<?endforeach;?>





<?endif?>




