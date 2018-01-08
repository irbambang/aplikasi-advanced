<?php 

use yii\helpers\Html;

$this->title = 'Data Pekerja';

?>
<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Tempat Tanggal Lahir</th>
		<th>Alamat</th>
		<th>Status</th>
		<th>Action</th>
		<th colspan="2">Action</th>
	</tr>
	<?php foreach($model as $row){ ?>
	<tr>
		<td><?= $row->id;?></td>
		<td><?= $row->nama;?></td>
		<td><?= $row->ttl;?></td>
		<td><?= $row->alamat;?></td>
		<td><?= $row->status;?></td>
		<td><?= Html::a('edit',['update','id'=>$row->id])?></td>
		<td><?= Html::a('delete',['delete','id'=>$row->id],['data-confirm'=>'delete data?'])?></td>

	</tr>
	<?php
	}
	?>

</table>