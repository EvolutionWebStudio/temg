<?php
/* @var $this ClanciController */
/* @var $model Clanci */

?>


<div class="clanak clearfix">

    <div class="slika_iznad_clanka">
        <img src="<?php echo '/media/images/' . $model->baner; ?>" alt="" class=""/>

        <?php if($koliba == true) { ?>
            <div class="koliba_promo">

                <img src="/media/images/koliba-ponedeljak.png" class="ponedeljak koliba_promo"/>
                <img src="/media/images/koliba-utorak.png" class="utorak koliba_promo"/>
                <img src="/media/images/koliba-srijeda.png" class="srijeda koliba_promo"/>
                <img src="/media/images/koliba-cetvrtak.png" class="cetvrtak koliba_promo"/>
                <img src="/media/images/koliba-petak.png" class="petak koliba_promo"/>
                <img src="/media/images/koliba-subota.png" class="subota koliba_promo"/>
                <img src="/media/images/koliba-nedelja.png" class="nedelja koliba_promo"/>

            </div>
        <?php } ?>
        <div class="natpis">
            <a href="rezervacija"><p><?php echo $this->langArray['planirajte_svoj_boravak']; ?> </p>
                <p><?php echo $this->langArray['pozovite_broj']; ?> <?php echo $this->langArray['rezervisite']; ?> <?php echo $this->langArray['online']; ?></p></a>
        </div>
    </div>

    <div class="wrapper_clanak clearfix">

        <div class="slika_pored_clanka">
            <img src="<?php echo '/media/images/' . $model->slika; ?>" alt="" class=""/>
        </div>

        <article class="sadrzaj_clanka">
            <?php if($forma != '' and $forma_i_clanak == 'ne' )
            {
                podesavanja::inc($this->forma);
                $this->forma = 0;

            }
            else if($forma_i_clanak == 'da')
            { ?>
                <h2><?php echo $this->naslov; ?></h2>
                <p><?php echo $this->sadrzaj; ?></p>
                <?php
                podesavanja::inc($this->forma);
                $this->forma = 0;

            }
            else {?>
                <h2><?php echo $model->naslov; ?></h2>
                <p><?php echo $model->clanak;  ?></p>
            <?php } ?>


        </article>

        <aside class="podmeni">
            <ul>
                <?php if($model->sekcija == 'meni-gore')	{?>
                    <li class='active'><?php echo CHtml::link($model->kategorija,array('termag/'.$model->alias));?></li>
                <?php } ?>
                <?php $rows = Clanci::model()->findAllByAttributes(array('sekcija'=>$model->sekcija,'jezik'=>Yii::app()->session["lang"]),array('order'=>'sortiranje ASC')); ?>
                <?php foreach($rows as $one_row){//print_r(array_keys($this->objekat));?>
                <li><?php if($one_row->naslov != $this->naslov){
                        echo CHtml::link($one_row->kategorija,array('termag/'.$one_row->alias)); }
                    else{?>
                <li class='active'><?php echo CHtml::link($one_row->kategorija,array('termag/'.$one_row->alias));?></li>
                <?php } }?></li>

            </ul>
        </aside>
    </div> <!-- kraj wrapper_clanak -->
</div>

