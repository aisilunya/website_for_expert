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
<div class="second_slider">
	<div class="single_item_two">
		
		
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="second_box" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<?
			     $arFileTmp = CFile::ResizeImageGet(
			               $arItem["PREVIEW_PICTURE"]["ID"],
			               array("width" => 250, "height" => 240),
			               BX_RESIZE_IMAGE_EXACT,
			               true
			           );
			    ?>
			<img src="<?=$arFileTmp["src"]?>" class="slider-pic" alt="">
			<div class="slider-text">
				<h3><?=$arItem["NAME"]?></h3>
				<span class="red"><?=$arItem["PROPERTIES"]['dolg']["VALUE"]?></span>
				<p class="tel">Тел. <?=$arItem["PROPERTIES"]['phone']["VALUE"]?></p>
				<?if (!empty($arItem["PROPERTIES"]['fax']["VALUE"])):?>
					<p>Факс <?=$arItem["PROPERTIES"]['fax']["VALUE"]?><br></p>
				<?endif?>	
				E-mail: <a href="mailto:info@sudexpertiza.org"><?=$arItem["PROPERTIES"]['email']["VALUE"]?></a>
			</div>
			</div> <!-- second_box -->
				
			<?endforeach;?>
		
	</div> <!-- single-item -->
</div> <!-- second_slider -->

