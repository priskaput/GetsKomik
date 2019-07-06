<html>
    <head>
        <meta charset="utf-8">
        <title>Grafik Penjualan Komik</title>
        <link rel="stylesheet" href="<?php echo base_url().'css/morris.css'?>">
        <link href="<?= base_url('vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet');?>" media="all">
    </head>
    <body>
        <h2>Grafik Penjualan Komik</h2>
        <p>
            <a href="<?php echo base_url()?>index.php/home" class="btn btn-primary">Back</a>
        </p>

        <div id="graph"></div>

        <script src="<?php echo base_url().'js/jquery.min.js'?>"></script>
        <script src="<?php echo base_url().'js/raphael-min.js'?>"></script>
        <script src="<?php echo base_url().'js/morris.min.js'?>"></script>
        <script>
            Morris.Line({
                element: 'graph',
                data: <?php echo $data?>,
                xkey: 'tahun',
                ykeys: ['Kartun','Romantis','Petualangan'],
                labels: ['Kartun','Romantis','Petualangan']
            }
            );
        </script>
    </body>
</html>