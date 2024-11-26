<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
    <center>
        <img src="logo.png" alt="">
        <h6>
            PENGGAJIHAN <br>
            GURU/KARYAWAN YAYASAN ASSALAAM
        </h6>
        <form action="" method="POST">
        <div class="card" style="width: 50%">
            <div class="card-header" align="left">
                Data Penggajihan
            </div>
            <div class="card-body">
                <div class="mb-3" align="left">
                    <label for="disabledTextInput" class="form-label">No</label>
                    <input type="text" name="no" id="disabledTextInput" class="form-control" placeholder="No">
                </div>
                <div class="mb-3" align="left">
                    <label for="disabledSelect" class="form-label">Nama</label>
                    <input type="text" name="nama" id="disabledTextInput" class="form-control" placeholder="Nama">
                    <br>
                    <label for="disabledSelect" class="form-label">Unit Pendidikan</label>
                    <select id="disabledSelect" name="unit" class="form-select">
                        <option>Pilih Unit Pendidikan</option>
                        <option value="TK">TK</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA/SMK">SMA/SMK</option>
                    </select>
                </div>
                <div class="mb-3" align="left">
                    <label for="disabledTextInput" class="form-label">Tanggal Gaji</label>
                    <input type="date" name="tanggal" id="disabledTextInput" class="form-control" placeholder="No">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="">
                        <div class="card-body">
                            <h5 class="card-title">Gaji</h5>
                            <div class="mb-3" align="left">
                            <label for="disabledSelect" class="form-label">Jabatan</label>
                            <select id="disabledSelect" name="jabatan" class="form-select">
                                <option>Pilih Jabatan</option>
                                <option value="Kepala Sekolah">Kepala Sekolah</option>
                                <option value="Wakasek">Wakasek</option>
                                <option value="Guru">Guru</option>
                                <option value="Karyawan">Karyawan</option>
                            </select>
                            </div>
                            <div class="mb-3" align="left">
                            <label for="disabledSelect" class="form-label">Lama Kerja</label>
                            <input type="text" name="lama" id="disabledTextInput" class="form-control" placeholder="Lama Kerja">
                            </div>
                            <div class="mb-3" align="left">
                            <label for="disabledSelect" class="form-label">Status Kerja</label>
                            <select id="disabledSelect" name="status" class="form-select">
                                <option>Pilih Status Kerja</option>
                                <option value="Tetap">Tetap</option>
                                <option value="Kontrak">Kontrak</option>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="">
                        <div class="card-body">
                            <h5 class="card-title">Potongan</h5>
                            <div class="mb-3" align="left">
                                <label for="disabledTextInput" class="form-label">BPJS</label>
                                <input type="text" name="bpjs" id="disabledTextInput" class="form-control" placeholder="">
                                <br>
                                <label for="disabledTextInput" class="form-label">Pinjaman</label>
                                <input type="text" name="pinjaman" id="disabledTextInput" class="form-control" placeholder="Pinjaman">
                                <br>
                                <label for="disabledTextInput" class="form-label">Cicilan</label>
                                <input type="text" name="cicilan" id="disabledTextInput" class="form-control" placeholder="Cicilan">
                                <br>
                                <label for="disabledTextInput" class="form-label">Infaq</label>
                                <input type="text" name="infaq" id="disabledTextInput" class="form-control" placeholder="Infaq">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <center><input type="submit" class="btn btn-primary" name="proses" value="Proses"></center>
            <br>
        </div>
        </form>
    </center>    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<br>
<?php
    if(isset($_POST['proses'])){
        $no = $_POST['no'];
        $nama = $_POST['nama'];
        $unit = $_POST['unit'];
        $tanggal = $_POST['tanggal'];
        $jabatan = $_POST['jabatan'];
        $lama_kerja = $_POST['lama'];
        $status_kerja = $_POST['status'];
        $bpjs = $_POST['bpjs'];
        $pinjaman = $_POST['pinjaman'];
        $cicilan = $_POST['cicilan'];
        $infaq = $_POST['infaq'];

    if($jabatan == "Kepala Sekolah"){
        $gaji = 10000000;
    }else if($jabatan == "Wakasek"){
        $gaji = 7000000;
    }else if($jabatan == "Guru"){
        $gaji = 5000000;
    }else if($jabatan == "Karyawan"){
        $gaji = 2500000;
    }else{
        $gaji = 0;
    }

    if($status_kerja == "Tetap"){
        $bonus = 1000000;
    }else if ($status_kerja = "Kontrak"){
        $bonus = 0;
    }

    $gaji_kotor = $gaji + $bonus;
    $total_potongan = $bpjs + $pinjaman + $cicilan + $infaq;
    $gaji_bersih = $gaji_kotor - $total_potongan;

    class Aku{
        public function Data($no2, $nama2, $unit2, $tanggal2, $jabatan2, $gaji2, $lama_kerja2, $status_kerja2, $bonus2, $bpjs2, $pinjaman2, $cicilan2, $infaq2, $gaji_bersih2){
    ?>
    <center>
    <div class="card" style="width:50%">
        <div class="card-header" >
            Intan Anggraeni
        </div>
    <div class="card-body">
    <table class="text-primary">
            <tr>
                <td>No</td>
                <td>:</td>
                <td><?php echo $no2; ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $nama2; ?></td>
            </tr>
            <tr>
                <td>Unit Pendidikan</td>
                <td>:</td>
                <td><?php echo $unit2; ?></td>
            </tr>
            <tr>
                <td>Tanggal Gaji</td>
                <td>:</td>
                <td><?php echo $tanggal2; ?></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><?php echo $jabatan2; ?></td>
            </tr>
            <tr>
                <td>Gaji</td>
                <td>:</td>
                <td><?php echo $gaji2; ?></td>
            </tr>
            <tr>
                <td>Lama Kerja</td>
                <td>:</td>
                <td><?php echo $lama_kerja2; ?></td>
            </tr>
            <tr>
                <td>Status Kerja</td>
                <td>:</td>
                <td><?php echo $status_kerja2; ?></td>
            </tr>
            <tr>
                <td>Bonus</td>
                <td>:</td>
                <td><?php echo $bonus2; ?></td>
            </tr>
            <tr>
                <td>BPJS</td>
                <td>:</td>
                <td><?php echo $bpjs2; ?></td>
            </tr>
            <tr>
                <td>Pinjaman</td>
                <td>:</td>
                <td><?php echo $pinjaman2; ?></td>
            </tr>
            <tr>
                <td>Cicilan</td>
                <td>:</td>
                <td><?php echo $cicilan2; ?></td>
            </tr>
            <tr>
                <td>Infaq</td>
                <td>:</td>
                <td><?php echo $infaq2; ?></td>
            </tr>
            <tr>
                <td>Gaji Bersih</td>
                <td>:</td>
                <td><?php echo $gaji_bersih2; ?></td>
            </tr>
        </table>
  </div>
</div>
    </center>
    <?php
        }
    }
    $cetak = new Aku();
    echo $cetak->Data($no, $nama, $unit, $tanggal, $jabatan, $gaji, $lama_kerja, $status_kerja, $bonus, $bpjs, $pinjaman, $cicilan, $infaq, $gaji_bersih);
    }
    ?>