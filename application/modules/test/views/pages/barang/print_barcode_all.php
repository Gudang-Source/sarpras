<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>barcode label</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- <link href="https://ssm.tecdiary.com/themes/default/assets/css/bootstrap.css" rel="stylesheet" type="text/css" /> -->
<style>
		body { text-align:center; }
		td { text-align: center; }
		h4 { margin:2px; padding:0; }
		.price { font-size:0.8em; font-weight:bold; }
		@media print
		{
			.container { width: auto !important; }
			.container h4, 
			.container p,
			.btn-group, .pagination { display: none; }
			.labels { text-align:center;font-size:9px;page-break-after:always;padding:1px; }
			.labels-detail { text-align: left;}
		}
	</style>
</head>
<body>
<div class="container">
	<h4>Print<br>barcode label</h4>
	<div class="btn-group">
	<a class="btn btn-primary" href="<?php echo base_url() ?>"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</a>
	<a class="btn btn-default" href="javascript:void();" onclick="window.print();"><i class="glyphicon glyphicon-print"></i> Print</a>
	</div>

	<p>Each label barcode will be printed on separate page.</p>
	<?php foreach ($detail_item as $detail_item) { ?>
		
		<div class="labels">
			<div class="labels-detail" style="text-align: left;">
			<table>
				<body >
					<tr>
						<td style="width:30%;">No. Inventaris </td>
						
						<td style="width:60%;"> <b><?php echo $detail_barang->id_barang_group; ?>.<?php echo $detail_barang->id_barang_subgroup; ?>.<?php echo $detail_barang->no_barang; ?>.<?php echo $detail_barang->no_tahun; ?>.<?php echo $detail_barang->no_bulan; ?>.<?php echo $detail_item->no_item; ?> </b></td>
					</tr>	
					<tr>
						<td style="width:30%;">Product Name </td>
						<td style="width:60%;"><b><?php echo $detail_barang->nama_barang; ?></b></td>
					</tr>
				</body>
			</table>
			 <img src="<?php echo base_url() ?>test/pages/barang/barcode/<?php echo $detail_barang->id_barang_group; ?>.<?php echo $detail_barang->id_barang_subgroup; ?>.<?php echo $detail_barang->no_barang; ?>.<?php echo $detail_barang->no_tahun; ?>.<?php echo $detail_barang->no_bulan; ?>.<?php echo $detail_item->no_item; ?>" >
			 <br><br><br>
		</div>
	<?php } ?>

</div>
</body>
</html> 