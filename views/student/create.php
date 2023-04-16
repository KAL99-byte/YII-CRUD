<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<?php
$district = [
    
    'ilala district'=>'Ilala',
    'kinondnoni district'=>'Kinodnoni ',
    'temeke district'=>'Temeke ',
];
   
    $city=[
        'dar  city'=>'Dar',
        'mwanza city'=>'Mwanza ',
        'mbeya  city'=>'Mbeya',
    ];
    $country=[
            'Tanzania country'=>'Tanzania',
            'uganda country'=>'Uganda',
            'kenya country'=>'Kenya',
    ];
?>
    
<?php $form = ActiveForm::begin(); ?>
<div class="container">
    <div class="card-body">
        <a href="/student/index" class="btn btn-sm btn-primary">Back</a>
<form>
    <div class="form-row">
        <div class="col">
            <?= $form->field($model, 'name')->textInput(['placeholder' => 'enter your name']); ?>
        </div>
        <div class="col">
            <?= $form->field($model, 'email')->textInput(['placeholder' => 'enter your email']); ?>
        </div>
    </div>
    <div class="form-row">
        <div class="col">
            <?= $form->field($model, 'country')->dropDownList($country,['prompt'=>'--select country--']); ?>
        </div>
        <div class="col">
            <?= $form->field($model, 'city')->dropDownList($city,['prompt'=>'--select city--']); ?>
        </div>

    </div>
    <div class="form-row">
    <div class="col">
      <?= $form->field($model, 'district')->dropDownList($district ,['prompt'=> '--select district--']); ?>
    </div>
 
</div>
   
</form>

<?= Html::submitButton('save', ['class' => 'btn btn-success']); ?>
</div>
</div>
<?php ActiveForm::end(); ?>