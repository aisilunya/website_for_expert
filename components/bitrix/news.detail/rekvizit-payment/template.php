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
	

			
	<h6 class="payment"><?=$arResult["NAME"]?></h6>
					
			
			
		
	
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