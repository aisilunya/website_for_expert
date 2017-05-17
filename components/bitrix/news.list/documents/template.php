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
	
	<div class="docs">

		<div class="head_row">
			<div class="row">

				<div class="col-sm-6">
					<h2 class="special  small_font document_page">Документы <span class="red red_link hidden-lg hidden-md hidden-sm">&rarr;</span></h2>
				</div>

			</div>
		</div>



		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?foreach($arResult["ITEMS"] as $keyItem=>$arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<h3><?=$arItem["NAME"]?></h3>
					<?foreach($arItem["PROPERTIES"]['file']["VALUE"] as $key=>$value):?>
					
					<a class="low_link" href="<?=CFile::GetPath($value)?>" id="text_<?=$arItem['ID'];?>" download><?=$arItem["PROPERTIES"]['file']['DESCRIPTION'][$key]?></a><br>
					<?endforeach;?>
					<?for ($i = 1; $i <= 50; $i++):?> 
						<?if (!empty($arItem["PROPERTIES"]["links".$i]["~VALUE"])):?>
							<div class="links"><?=$arItem["PROPERTIES"]["links".$i]["~VALUE"]["TEXT"];?></div>
						<?endif?>
						
						<?break?>

						
						
						
					<?endfor?>
						
				</div>
				<?endforeach;?>
			</div>

		</div>



	</div>
	<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>



<?endif?>
