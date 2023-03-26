<html>
    <head>
        <title>Gaji Pegawai</title>
    </head>
    <body>
        <h1 style="text-align: center">Gaji Pegawai</h1>
        <form method="post" action="">
            <div style="margin-left: 25%">
                Nama Karyawan : <input type="text" name="nama" /><br /> <br />
                Jabatan : <input type="radio" name="jabatan" value="manager"/>Manager
                <input type="radio" name="jabatan" value="asisten"/>asisten
                <input type="radio" name="jabatan" value="kabag"/>kabag
                <input type="radio" name="jabatan" value="staff"/>staff<br /><br />  
                per_bulan : <input type="text" name="per_bulan" /><br /><br />
                <input type="radio" name="tunjangan" value="tunjangan jabatan">
                <input type="submit" name="submit" value="Submit" />
            </div>
        </form>
 
        <div style="margin-left: 25%">
            <?php
                if(isset($_POST['submit'])){
                    $nama = $_POST['nama'];
                    $gol = $_POST['jabatan'];
                    $per_bulan = $_POST['per_bulan'];
                    $tunjangan = $_POST['tunjangan'];
 
                    //gaji
                    $gaji_pokok_manager = $per_bulan*20000000;
                    $gaji_pokok_asisten = $per_bulan*15000000;
                    $gaji_pokok_kabag = $per_bulan*10000000;
                    $gaji_pokok_staff = $per_bulan*4000000;
 
                    //perhitungan untuk jam lembur
                    if($per_bulan <= 30){
                        $bulan = $per_bulan;
                        $lembur = 0;
                    }else{
                        $bulan =  30;
                        $lembur = ($per_bulan - $jam) * 20/100;
                    }else{
                        $keluarga = 
                    }


 
                    //gaji tunjangan
                    $gaji_tunjangan_manager = 20/100 * $lembur;
                    $gaji_tunjangan_asisten = 20/100 * $lembur;
                    $gaji_tunjangan_kabag = 20/100 * $lembur;
                    $gaji_tunjangan_staff = 10/100 * $lembur;
 
                    //gaji akhir yang diterima
                    $gaji_manager = $gaji_pokok_manager + $gaji_tunjangan_manager ;
                    $gaji_asisten = $gaji_pokok_asisten + $gaji_tunjangan_asisten ;
                    $gaji_kabag = $gaji_pokok_kabag + $gaji_tunjangan_kabag ;
                    $gaji_staff = $gaji_pokok_staff + $gaji_tunjangan_staff ;
 
                    echo "Nama Karyawan  : $nama <br/> ";
                    echo "Jabatan   : $gol <br/> ";
                    echo "per_bulan : $per_bulan <br/>";
                    echo "Lembur : $lembur <br/>";
                    echo "tunjangan : $tunjangan <br/>";
 
                    if ($gol=='manager')
                    {
                        printf("Gaji yang diterima : %.2f",$gaji_manager);
                    }
                    else if($gol=='asisten')
                    {
                        printf("Gaji yang diterima : %.2f",$gaji_asisten);
                    }
                    else if ($gol=='kabag')
                    {
                        printf("Gaji yang diterima : %.2f",$gaji_kabag);
                    }
                    else if ($gol=='staff')
                    {
                        printf("Gaji yang diterima : %.2f",$gaji_staff);
                    }
                }
            ?>
        </div>
    </body>
</html>