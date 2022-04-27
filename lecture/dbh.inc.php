<?php
    $days = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
    $conn = mysqli_connect("localhost", "root", "", "mpti_db");

    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    include_once 'ruang.php';
    $sql;
    $result = $conn->query($sql);

    if ($days[date('w')] == "Sabtu" || $days[date('w')] == "Minggu") {
        echo "
            <thead>
                <tr>
                    <th scope='col'>Hari</th>
                    <th scope='col'>Waktu</th>
                    <th scope='col'>Mata Kuliah</th>
                    <th scope='col'>Kelas</th>
                    <th scope='col'>Dosen</th>
                    <th scope='col'>Prodi</th>
                </tr>
            </thead>
            <tbody>";
    } else {
        echo "
            <thead>
                <tr>
                    <th scope='col'>Waktu</th>
                    <th scope='col'>Mata Kuliah</th>
                    <th scope='col'>Kelas</th>
                    <th scope='col'>Dosen</th>
                    <th scope='col'>Prodi</th>
                </tr>
            </thead>
            <tbody>";
    }

    if($result->num_rows > 0) {
        while($row = $result-> fetch_assoc()) {
            if($row["hari"] == $days[date('w')]) {
                echo "
                        <tr>
                            <td scope='row'>". $row["waktu"]."</td>
                            <td>". $row["matkul"]."</td>
                            <td>". $row["kelas"]."</td>
                            <td>". $row["dosen"]."</td>
                            <td>". $row["prodi"]."</td>
                        </tr>";
            } else if ($days[date('w')] == "Sabtu" || $days[date('w')] == "Minggu") {
                echo "
                        <tr>
                            <td scope='row'>". $row["hari"]."</td>
                            <td>". $row["waktu"]."</td>
                            <td>". $row["matkul"]."</td>
                            <td>". $row["kelas"]."</td>
                            <td>". $row["dosen"]."</td>
                            <td>". $row["prodi"]."</td>
                        </tr>";
            }
        }
    } else {
        $isiTable = "0 result";
    }
    $conn-> close();