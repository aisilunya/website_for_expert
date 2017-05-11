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
<h1>ВЫПОЛНЕННЫЕ ИССЛЕДОВАНИЯ</h1>

	<div class="row text-justify">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			 <p class="text-justify"><?=$arResult["PREVIEW_TEXT"]?></p>
		   
		</div>
	</div>


	
	
	
</div>

<?endif?>