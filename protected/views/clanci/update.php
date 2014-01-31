<?php
/* @var $this ClanciController */
/* @var $model Clanci */

$this->breadcrumbs=array(
	'Clancis'=>array('index'),
	$model->idclanci=>array('view','id'=>$model->idclanci),
	'Update',
);

$this->menu=array(
	array('label'=>'List Clanci', 'url'=>array('index')),
	array('label'=>'Create Clanci', 'url'=>array('create')),
	array('label'=>'View Clanci', 'url'=>array('view', 'id'=>$model->idclanci)),
	array('label'=>'Manage Clanci', 'url'=>array('admin')),
);
?>

<h1>Update Clanci <?php echo $model->idclanci; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>