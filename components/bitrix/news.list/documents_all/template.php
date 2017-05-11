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
<div class="main">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<?foreach($arResult["ITEMS"] as $keyItem=>$arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>		
				
					<?if($arItem["PROPERTIES"]['file']['VALUE']):?>
						<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="" class="docum">
						<a class="low_doc" href="<?=cFile::GetPath($arItem["PROPERTIES"]['file']['VALUE'])?>" download><?=$arItem["NAME"]?></a>
					<?endif;?>

				<br>
				<br>
			<?endforeach;?>
		</div>
		
	</div>
</div>
	