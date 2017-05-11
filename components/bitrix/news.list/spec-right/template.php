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
<div class="photos hidden-sm hidden-xs">
	<h2 class="special_team small_font">Команда специалистов</h2>
	<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="second_box">
			
			<div class="slider-text">

				<?
			     $arFileTmp = CFile::ResizeImageGet(
			               $arItem["PREVIEW_PICTURE"]["ID"],
			               array("width" => 250, "height" => 240),
			               BX_RESIZE_IMAGE_EXACT,
			               true
			           );
			    ?>
				<img src="<?=$arFileTmp["src"]?>" class="slider-pic" alt="">
				<h3 class="small_name"><?=$arItem["NAME"]?></h3>
				<span class="red"><?=$arItem["PROPERTIES"]['dolg']["VALUE"]?></span><br><br>
				Тел. <?=$arItem["PROPERTIES"]['phone']["VALUE"]?><br>
				<?if (!empty($arItem["PROPERTIES"]['mobile']["VALUE"])):?>
					<?=$arItem["PROPERTIES"]['mobile']["VALUE"]?><br>
				<?endif?>
				E-mail: <a href="mailto:info@sudexpertiza.org"><?=$arItem["PROPERTIES"]['email']["VALUE"]?></a>
			</div>

	</div> <!-- second_box -->
	<?endforeach;?>
</div>
</div>

<?endif?>


	



