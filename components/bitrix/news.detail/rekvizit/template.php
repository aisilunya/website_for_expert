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

<div class="main text-justify">
	<div class="contact_row">
		<div class="row">

			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-5">
				<h2 class="rekvisits"><?=$arResult["NAME"]?></h2>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-7">
				<div class="load_rek text-right">
					<?if($arResult["PROPERTIES"]['file']['VALUE']):?>
						<img src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>" alt="" class="docum">
						<a class="down_rek" href="<?=cFile::GetPath($arResult["PROPERTIES"]['file']['VALUE'])?>" download>Скачать реквизиты</a>
					<?endif;?>
				</div>
			</div>	
		</div>
	</div>
	<div class="rows">
		<?foreach($arResult["PROPERTIES"]['title']["VALUE"] as $key=>$value):?>
		<div class="row-1">
			
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
					<p class="rek"><?=$value?></p>
					
				</div>
				<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
					<p><?=$arResult["PROPERTIES"]['title']["DESCRIPTION"][$key]?></p>
				</div>
			</div>
			

		</div>
		<?endforeach;?>
	</div>
	
		
		
	
</div>
<?endif?>