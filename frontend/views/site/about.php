<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
        <table class="table table-bordered">
		  <thead class="table-dark">
		    <tr>
		      <th>#</th>
		      <th>Make</th>
		      <th>Model</th>
		      <th>Price</th>
		    </tr>
		  </thead>
		  <tbody>
		    <? foreach ($cars as $car):?>
		  		<tr>
		  			<td><?=$car->id;?></td>
		  			<td><?=$car->make;?></td>
		  			<td><?=$car->model;?></td>
		  			<td><?=$car->price;?></td>
		  		</tr>
		  	<? endforeach;?>
		  </tbody>
		</table>
		<?php
	          echo \yii\bootstrap5\LinkPager::widget(
	      [
	      'pagination' => $pagination,

	      ])
	    ?>
        </div>
    </div>
</div>