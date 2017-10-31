<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <link rel="stylesheet" href="<?php echo base_url().'assets/pdf2/'; ?>base.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url().'assets/pdf2/'; ?>fancy.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url().'assets/pdf2/'; ?>main.css"/>
    <link rel="stylesheet" href="<?php echo base_url().'assets/pdf2/'; ?>customTable.css"/>
    <link rel="stylesheet" href="<?php echo base_url().'assets/pdf2/'; ?>print.css" media="print" type="text/css"/>
    <script src="<?php echo base_url().'assets/pdf2/'; ?>compatibility.min.js"></script>
    <script src="<?php echo base_url().'assets/pdf2/'; ?>theViewer.min.js"></script>
    <script>
        try {
            theViewer.defaultViewer = new theViewer.Viewer({});
        } catch (e) {
        }
        function cetak() {
            window.print();
        }
    </script>
    <title></title>
</head>
<body>
<div id="sidebar">
    <div id="outline">
    </div>
</div>
<div id="page-container">
    <div id="pf1" class="pf w0 h0" data-page-no="1">
        <div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="<?php echo base_url().'assets/pdf2/'; ?>bg1.png"/>
            <button class="hidden-print" onclick="cetak()">Cetak Dokumen</button>
            <div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">DINAS PERPUSTAKAAN DAN KEARSIPAN DAERAH</div>
            <div class="t m0 x2 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0">LAPORAN SURAT KELUAR</div>
            <div class="t m0 x3 h3 y3 ff2 fs0 fc0 sc0 ls0 ws0">Jl. Letjen DI Panjaitan No. 49, Sumbersari, Kabupaten Jember, Jawa Timur 68121</div>
            <div class="t m0 x4 h3 y4 ff2 fs0 fc0 sc0 ls0 ws0"></div>
              <table border="1" width="90%" align="center" class="aturTabel">
                   <tr>
                      <th width="5%">No</th>
                      <th width="12%">Tanggal</th>
                      <th width="23%">No. Surat</th>
                      <th>Tujuan</th>
                      <th>Perihal</th>
                      <th>Keterangan</th>
                   </tr>
                   <?php $no = 1;
                   foreach ($data as $row) { ?>
                   <tr>
                      <td align="center"><?php echo $no++; ?></td>
                      <td align="center"><?php echo $row['tglSurat']; ?></td>
                      <td><?php echo $row['noSurat']; ?></td>
                      <td><?php echo $row['tujuan']; ?></td>
                      <td><?php echo $row['perihal']; ?></td>
                      <td><?php echo $row['keterangan']; ?></td>
                   </tr>
                   <?php } ?>
               </table>
        </div>
        <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
    </div>
</div>
<div class="loading-indicator">

</div>
</body>
</html>
