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
<div class="main">
<div class="house_photo">
	<div class="row">
		<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
	
		<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="house" alt="картинка">

		</div>
		<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
			<h2><?=$arItem["NAME"]?></h2>
			<p>понедельник-пятница: <span class="blue"><?=$arItem["PROPERTIES"]['work']["VALUE"]?>,</span><br><br>
				перерыв: <span class="red"><?=$arItem["PROPERTIES"]['break']["VALUE"]?>;</span><br><br>
				выходные: <span class="red"><?=$arItem["PROPERTIES"]['rest']["VALUE"]?>.</span></p><br><br>
			
		</div>
		<?endforeach;?>
	</div>

</div>
</div>
<?endif?>