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
<div class="docs docs-1">
	<div class="head_row">
		<div class="row">
								
			<div class="col-sm-6">
				<a href="docs.php" class="smp_link"><h2 class="special  small_font">Документы <span class="red red_link hidden-lg hidden-md hidden-sm">&rarr;</span></h2></a>
			</div>
			<div class="col-sm-6">
				<a href="docs.php" class="spec_link sm_link hidden-lg hidden-md hidden-xs">Смотреть все документы</a>
			</div>
		</div>
	</div>
	<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
	
	<div class="row">

		<div class="col-lg-12 col-md-12 col-sm-4">

			<div class="doc_one">
				
				
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
				<a href="#" class="low_doc"><?=$arItem["NAME"]?>
				<!-- <span class="tail">СРО-П-183-06052013</span> --></a>
			</div>
		</div>
		
	</div>
	<?endforeach;?>
	
</div><!--  docs -->



							
	

<a href="docs.php" class="spec_link right_link  hidden-xs hidden-sm">Смотреть все документы</a>
</div>


<?endif?>