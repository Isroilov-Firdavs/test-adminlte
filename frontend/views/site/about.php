<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

use yii\bootstrap5\Modal;

$this->title = 'Cars page';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
        <table class="table table-bordered">
		  <thead class="table-dark">
		    <tr>
		      <th>Make</th>
		      <th>Model</th>
		      <th>Price</th>
		      <th>Options</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php foreach ($cars as $car):?>
		  		<tr>
		  			<td><?=$car['make'];?></td>
		  			<td><?=$car['model'];?></td>
		  			<td><?=$car['price'];?></td>
		  			<td>
						<a href="<?=Url::to(['/site/delete', 'id' => $car['id']])?>" class="btn btn-danger form-control">Delete</a>
					</td>
		  		</tr>
		  	<?php endforeach;?>
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