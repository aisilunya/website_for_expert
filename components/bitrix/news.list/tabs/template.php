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
	<h1>Виды исследований</h1>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<ul class="nav nav-tabs text-justify" role="tablist">
				
				<?$i=1;?>
				<?foreach($arResult["ITEMS"] as $keyItem=>$arItem):?>
				
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>

				
				<li role="presentation" id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="panel-1 col-xs-6 <? if($i == 1): ?> active <? endif ?>" data-id="<?=$arItem['ID']?>"><a href="#text_<?=$arItem['ID'];?>" class="sud" aria-controls="sud " role="tab" data-toggle="tab"><?=$arItem["NAME"]?></a></li>
				
				<?$i++;?>

				<?endforeach;?>

				
			</ul>
		</div>
	</div>
	<div class="tab-content text-justify">
		
		<?$i=1;?>
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<div role="tabpanel" class="tab-pane<? if($i == 1): ?> active <? endif ?>" id="text_<?=$arItem['ID'];?>">
				<?=$arItem["PREVIEW_TEXT"];?>
			</div>
		<?$i++;?>
		<?endforeach;?>
	</div>
	

</div>
<?endif?>
