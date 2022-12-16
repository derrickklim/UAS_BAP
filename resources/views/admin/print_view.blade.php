<h3>Nama: Derrick Devin Lim</h3>
<h3>NIM: 03081200023</h3>
    <img src="https://rekreartive.com/wp-content/uploads/2018/10/Logo-UPH-Universitas-Pelita-Harapan-Original-PNG.png" alt="" style="margin:  0 0 0 35%; width:30%">
    <style>
        table tr{
            padding:70px;
            border:8px;
        }
        table td{
            border:8px;
        }
        table th{
            border:8px;
        }
    </style>
    <table class="table">
        <thead class="table-dark">
        <th>No</th>
            <th>ID Pengguna</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Provinsi</th>
            <th>Kota</th>
            <th>Kecamatan</th>
            <th>Alamat</th>
        </tr>
        </thead>

        <?php

        $rows = DB::select("
        SELECT id_pengguna,username,nama,provinsi,kota,kecamatan,alamat FROM valamat");
        $no=1;

        foreach ($rows as $row) {
            echo "<tr>";
            echo "<td>".$no."</td>";
            echo "<td>".$row->id_pengguna."</td>";
            echo "<td>".$row->username."</td>";
            echo "<td>".$row->nama."</td>";
            echo "<td>".$row->provinsi."</td>";
            echo "<td>".$row->kota."</td>";
            echo "<td>".$row->kecamatan."</td>";
            echo "<td>".$row->alamat."</td>";
            echo "</tr>";
            $no+=1;
        }
        ?>
    </table>
    <br>
<script>
  window.addEventListener("load", window.print());
</script>