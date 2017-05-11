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
<div class="prices text-justify">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h2><?=$arResult["NAME"]?></h2>
					</div>
				</div>
				<div class="row">
					<div class="deadline">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<p>
							<?=$arResult["PROPERTIES"]['done']["~VALUE"]["TEXT"]?></p>
						</div>
						
						<a href="#" class="down" >Подробнее</a>
					
						
						
					</div> <!-- deadline -->
				</div>

			</div>
		</div>
	<div class="add">
	<div class="container">
		

		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<p><?=$arResult["PROPERTIES"]['order']["~VALUE"]["TEXT"]?></p><br>
				
			</div>
		</div> <!-- row -->
		<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<span class="blue">1.</span><p class="hide-text text-justify"><?=$arResult["PROPERTIES"]['listone']["~VALUE"]["TEXT"]?></p>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<span class="blue"> 2.</span><p class="hide-text text-justify"><?=$arResult["PROPERTIES"]['listtwo']["~VALUE"]["TEXT"]?></p><br><br>
		</div>

	</div> <!-- row -->
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<p><?=$arResult["PROPERTIES"]['cost']["~VALUE"]["TEXT"]?></p><br><br>
		</div>
	</div> <!-- row -->
		<a href="#" class="up text-right">Скрыть</a>
	</div> <!-- contain -->
	</div>