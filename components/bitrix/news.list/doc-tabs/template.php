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
				<a href="/docs/" class="smp_link"><h2 class="special  small_font">Документы <span class="red red_link hidden-lg hidden-md hidden-sm">&rarr;</span></h2></a>
			</div>
			<div class="col-sm-6">
				<a href="/docs/" class="spec_link sm_link hidden-lg hidden-md hidden-xs">Смотреть все документы</a>
			</div>
		</div>
	</div>
	
	

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<?$k=1;?>
			<?foreach($arResult["ITEMS"] as $keyItem=>$arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
			
			<div class="docs-list doc_one docs-<?=$arItem['ID'];?>" style="display:none;">

			<?$i=1;?>
				<?foreach($arItem["PROPERTIES"]['file']["VALUE"] as $key=>$value):?>
					
					
					<a class="low_link" href="<?=CFile::GetPath($value)?>" id="text_<?=$arItem['ID'];?>" download><?=$arItem["PROPERTIES"]['file']['DESCRIPTION'][$key]?></a><br>

					<?if($key==3)
						break;?>
				<?endforeach;?>
				
				<div class="links"><?=$arItem["PROPERTIES"]['out']["~VALUE"]["TEXT"];?></div>
				
			</div>
			<?$k++;?>
			<?endforeach;?>
		</div>
	
	</div>
	
	<a href="/docs/" class="spec_link right_link  hidden-xs hidden-sm">Смотреть все документы</a>
	
</div>
</div>

<?endif?>
