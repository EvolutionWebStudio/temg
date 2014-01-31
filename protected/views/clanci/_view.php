<?php
/* @var $this ClanciController */
/* @var $data Clanci */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idclanci')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idclanci), array('view', 'id'=>$data->idclanci)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('naslov')); ?>:</b>
	<?php echo CHtml::encode($data->naslov); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datum')); ?>:</b>
	<?php echo CHtml::encode($data->datum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('autor')); ?>:</b>
	<?php echo CHtml::encode($data->autor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clanak')); ?>:</b>
	<?php echo CHtml::encode($data->clanak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('baner')); ?>:</b>
	<?php echo CHtml::encode($data->baner); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('slika')); ?>:</b>
	<?php echo CHtml::encode($data->slika); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('kategorija')); ?>:</b>
	<?php echo CHtml::encode($data->kategorija); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sekcija')); ?>:</b>
	<?php echo CHtml::encode($data->sekcija); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alias')); ?>:</b>
	<?php echo CHtml::encode($data->alias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sortiranje')); ?>:</b>
	<?php echo CHtml::encode($data->sortiranje); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jezik')); ?>:</b>
	<?php echo CHtml::encode($data->jezik); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meta_title')); ?>:</b>
	<?php echo CHtml::encode($data->meta_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meta_keywords')); ?>:</b>
	<?php echo CHtml::encode($data->meta_keywords); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meta_description')); ?>:</b>
	<?php echo CHtml::encode($data->meta_description); ?>
	<br />

	*/ ?>

</div>