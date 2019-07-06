<html>
    <head>
        <meta charset="utf-8">
        <title>Tambah Data Komik</title>
        <link href="<?= base_url('vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet');?>" media="all">
    </head>
<body>
<div class="row">
    <div class="col-md-6 d-flex align-items-stretch grid-margin">
        <div class="row flex-grow">
            <div class="col-12">
                <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Data Komik</h4>
                    <form class="forms-sample" method="post" action="<?php echo base_url()?>index.php/home/simpan">
                    <div class="form-group">
                        <label for="nama_komik">Nama Komik</label>
                        <input type="text" name="nama_komik" class="form-control" id="nama_komik" placeholder="Masukan nama komik">
                    </div>
                    <div class="form-group">
                        <label for="kat_komik">Pilih Kategori Komik</label>
                        <select name="kategori_komik" class="form-control" id="kat_komik">
                            <option>- pilih kategori -</option>
                            <option value="1">kartun</option>
                            <option value="2">romantis</option>
                            <option value="3">Petualangan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_komik">Jumlah Komik</label>
                        <input type="text" name="jumlah" id="jumlah_komik" class="form-control" placeholder="Masukan nama komik">
                    </div>
                    <div class="form-group">
                        <label for="tahun_komik">Tahun</label>
                        <input type="text" name="tahun" id="tahun_komik" class="form-control" placeholder="Masukan tahun">
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>