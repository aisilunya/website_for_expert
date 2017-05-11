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

<h2>Объекты экспертиз</h2>
<div class="first_slider">
	<span class="pagingInfo"></span>
	<div class="single_item_one">

		<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="first_box" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			
			<?
		     $arFileTmp = CFile::ResizeImageGet(
		               $arItem["PREVIEW_PICTURE"]["ID"],
		               array("width" => 485, "height" => 330),
		               BX_RESIZE_IMAGE_EXACT,
		               true
		           );
		    ?>
		    <img src="<?=$arFileTmp["src"]?>" class="main_pict" alt="">
			<div class="overlay">
				<p><?=$arItem["~PREVIEW_TEXT"]?></p>
			</div> <!-- overlay -->
		</div> <!-- first_box -->
		<?endforeach;?>


	</div> <!-- single-item -->
</div><!--  first_slider -->