<?php
/* @var $this ClanciController */
/* @var $model Clanci */

$this->breadcrumbs=array(
	'Clancis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Clanci', 'url'=>array('index')),
	array('label'=>'Manage Clanci', 'url'=>array('admin')),
);
?>

<h1>Create Clanci</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>