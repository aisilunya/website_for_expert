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
<h6>Номер дела</h6>

<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<h2 class="case"><?=$arItem["NAME"]?></h2>

<div class="row_text">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
				<h5 class="base">Основание назначения</h5>
				
				<p><?=$arItem["PROPERTIES"]['osn']["VALUE"]?></p>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
				<h5 class="base">Исследуемый объект, исследуемые вопросы</h5>
				<p><?=$arItem["PROPERTIES"]['object']["VALUE"]?></p>
				
			</div>

		</div>
</div>
<div class="row_solution">
	<div class="row">
		<div class="col-lg-5 col-md-5 col-sm-5"></div>
		<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
			<p class="solution"><?=$arItem["PROPERTIES"]['result']["VALUE"]?></p>
		</div>
	</div>
</div>
<?endforeach;?>

	
	
	
</div>


<?endif?>
