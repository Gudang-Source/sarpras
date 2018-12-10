<html lang="en" moznomarginboxes mozdisallowselectionprint>
<head>
    <title>Laporan data penjualan</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/laporan.css')?>"/>
</head>
<body onload="window.print()">
<div id="laporan">
<table align="center" style="width:900px; border-bottom:3px double;border-top:none;border-right:none;border-left:none;margin-top:5px;margin-bottom:20px;">
<!--<tr>
    <td><img src="<?php// echo base_url().'assets/img/kop_surat.png'?>"/></td>
</tr>-->
</table>

<table border="0" align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:0px;">
<tr>
    <td colspan="2" style="width:800px;padding-left:20px;"><center><h4>DAFTAR BARANG BARANG</h4></center><br/></td>
</tr>
                       
</table>
 
<table border="0" align="center" style="width:900px;border:none;">
        <tr>
            <th style="text-align:left"></th>
        </tr>
</table>

<table border="1" align="center" style="width:900px;margin-bottom:20px;">
<thead>
    <tr>
        <th style="width:50px;">No</th>
        <th>No Inventaris</th>
        <th>Nama Barang</th>
        <th>Nama Pic</th>
        <th>Status Barang</th>
    </tr>
</thead>
<tbody>
    <?php $no=0; foreach ($data_ruangan_print_item as $dataBarang) { $no++; ?>
    <tr>
        <td style="text-align:center;"><?php echo $no;?></td>
        <td style="text-align:center;">
            <?php echo $dataBarang->id_barang_group; ?>.<?php echo $dataBarang->id_barang_subgroup; ?>.<?php echo $dataBarang->no_barang; ?>.<?php echo $dataBarang->no_tahun; ?>.<?php echo $dataBarang->no_bulan; ?>.<?php echo $dataBarang->no_item; ?>
        </td>
        <td style="text-align:center;"><?php echo $dataBarang->nama_barang;?></td>
        <td style="text-align:center;"><?php echo $dataBarang->karyawan;?></td>
    </tr>
    <?php } ?>
</tbody>
<tfoot>

    

</tfoot>
</table>
<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td></td>
</table>
<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td align="right">Jakarta, <?php echo date('d-M-Y')?>, </td>
        <td align="right">Pic Ruangan </td>
    </tr>
    <tr>
        <td align="right"></td>
    </tr>
   
    <tr>
    <td><br/><br/><br/><br/></td>
    </tr>    
    <tr>
        <td align="right">( <?php echo $this->session->userdata('nama');?> )</td>
    </tr>
    <tr>
        <td align="center"></td>
    </tr>
</table>
<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <th><br/><br/></th>
    </tr>
    <tr>
        <th align="left"></th>
    </tr>
</table>
</div>
</body>
</html>_