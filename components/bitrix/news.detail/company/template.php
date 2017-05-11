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
<h2><?=$arResult["NAME"]?></h2>
<div><p class="text-justify"><?=$arResult["PREVIEW_TEXT"]?></p>
	<div class="lows">
	<?foreach($arResult["PROPERTIES"]['file']["VALUE"] as $key=>$value):?>
		<div class="low_one">

		
					<img src="<?=$arResult['PREVIEW_PICTURE']['SRC']?>" alt="">
					<a class="low_doc" href="<?=CFile::GetPath($value)?>" download><?=$arResult["PROPERTIES"]['file']['DESCRIPTION'][$key]?></a><br>
					
		
		</div>
		<?endforeach;?>
	</div>
		
</div>
