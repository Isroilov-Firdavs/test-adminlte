<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

use yii\bootstrap5\Modal;

$this->title = 'Cars page';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
	<?php

	Modal::begin([
		'title' => '<h2>Create car</h2>',
		'toggleButton' => ['label' => 'Create Car', 'class' => 'btn btn-info'],
	]);?>
	<input type="text" id="model" class="form-control mt-2" placeholder="Model">
	<input type="text" id="make" class="form-control mt-2" placeholder="Make">
	<input type="number" id="price" class="form-control mt-2" placeholder="Price">
	<input type="submit" id="btn-car" class="btn btn-success form-control mt-2">
	<?php
	Modal::end();

	?>
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
		  'prevPageLabel' => '&laquo; назад',
         'nextPageLabel' => 'далее &raquo;',
	      ])
	    ?>
        </div>
    </div>
</div>