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
	<h2>Виды исследований</h2>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<ul class="nav nav-tabs" role="tablist">
				<?$i=1;?>
				<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>

				<li role="presentation" class="<?if($i==1):?>active <?endif;?>panel-1 col-xs-6"><a href="#text_<?=$arItem['ID'];?>" class="sud" aria-controls="sud" role="tab" data-toggle="tab"><?=$arItem["NAME"]?></a></li>
				<?$i++;?>

				<?endforeach;?>

				
			</ul>
		</div>
	</div>
	<div class="tab-content">
	<?$i=1;?>
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<div role="tabpanel" class="tab-pane  active" id="text_<?=$arItem['ID'];?>">
				<?=$arItem["PREVIEW_TEXT"];?>
			</div>
			<?$i++;?>
		<?endforeach;?>
	</div>

</div>
<?endif?>
