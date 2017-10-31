<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <link rel="stylesheet" href="http://localhost/perpusda/assets/pdf/base.min.css"/>
    <link rel="stylesheet" href="http://localhost/perpusda/assets/pdf/fancy.min.css"/>
    <link rel="stylesheet" href="http://localhost/perpusda/assets/pdf/main.css"/>
    <link rel="stylesheet" href="http://localhost/perpusda/assets/pdf2/print.css" type="text/css" media="print"/>
    <script src="http://localhost/perpusda/assets/pdf/compatibility.min.js"></script>
    <script src="http://localhost/perpusda/assets/pdf/theViewer.min.js"></script>
    <script>
        try {
            theViewer.defaultViewer = new theViewer.Viewer({});
        } catch (e) {
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
        <div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="http://localhost/perpusda/assets/pdf/bg1.png"/>
            <button class="hidden-print" onclick="cetak()">Cetak Dokumen</button>
            <div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0" style="margin-top: 40px;">DINAS PERPUSTAKAAN DAN KEARSIPAN</div>
            <div class="t m0 x2 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0">KABUPATEN JEMBER</div>
            <div class="t m0 x3 h3 y3 ff2 fs1 fc0 sc0 ls0 ws0">Jl. Letjen DI Panjaitan No.49,Sumbersari, Kabupaten Jember, Jawa Timur 68121</div>
            <div class="t m0 x4 h3 y4 ff2 fs1 fc0 sc0 ls0 ws0"></div>
            <div class="t m0 x4 h3 y5 ff2 fs1 fc0 sc0 ls0 ws0"></div>
            <div class="t m0 x4 h4 y6 ff1 fs2 fc0 sc0 ls0 ws0"></div>
            <div class="t m0 x5 h4 y7 ff1 fs2 fc0 sc0 ls0 ws0">LEMBAR DISPOSISI<span class="_ _1"></span><span class="ff2 fs0"> </span></div>
            <div class="t m0 x4 h5 y8 ff2 fs0 fc0 sc0 ls0 ws0"></div>
            <div class="t m0 x4 h5 y9 ff2 fs0 fc0 sc0 ls0 ws0"></div>
            <div class="c x0 ya w2 h6">
                <div class="t m0 x6 h5 yb ff2 fs0 fc0 sc0 ls0 ws0">Surat dari : <?php echo $data['asalSurat']; ?></div>
            </div>
            <div class="c x7 ya w3 h6">
                <div class="t m0 x6 h5 yb ff2 fs0 fc0 sc0 ls0 ws0">Diterima Tanggal : <?php echo $data['tglTerima']; ?></div>
            </div>
            <div class="c x0 yc w2 h7">
                <div class="t m0 x6 h5 yd ff2 fs0 fc0 sc0 ls0 ws0">Tanggal Surat : <?php echo $data['tglMasuk']; ?></div>
            </div>
            <div class="c x7 yc w3 h7">
                <div class="t m0 x6 h5 yd ff2 fs0 fc0 sc0 ls0 ws0">Nomor Agenda : <?php echo $data['noAgenda']; ?></div>
            </div>
            <div class="c x0 ye w2 h8">
                <div class="t m0 x6 h5 yf ff2 fs0 fc0 sc0 ls0 ws0">Nomor Surat : <?php echo $data['noSurat']; ?></div>
            </div>
            <div class="c x7 y10 w3 h9">
                <div class="t m0 x6 h5 y11 ff2 fs0 fc0 sc0 ls0 ws0"></div>
                <div class="t m0 x6 h5 y12 ff2 fs0 fc0 sc0 ls0 ws0">Diteruskan Kepada :</div>
            </div>
            <div class="c x0 y13 w2 ha">
                <div class="t m0 x6 h5 y14 ff2 fs0 fc0 sc0 ls0 ws0"></div>
                <div class="t m0 x6 h5 y15 ff2 fs0 fc0 sc0 ls0 ws0">Perihal :</div>
            </div>
            <div class="t m0 x4 h4 y16 ff1 fs2 fc0 sc0 ls0 ws0"></div>
            <div onclick="cetak()" class="t m0 x8 h4 y17 ff1 fs2 fc0 sc0 ls0 ws0">ISI DISPOSISI<span class="_ _1"></span></div>
        </div>
        <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
    </div>
</div>
<div class="loading-indicator">

</div>
</body>
<script>
    function cetak() {
        window.print();
    }
</script>
</html>
