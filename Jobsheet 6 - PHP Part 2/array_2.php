<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tabel Informasi Dosen</title>
        <style>
            table {
                border-collapse: collapse;
                width: 50%;
                margin: auto;
            }
            th, td {
                border: 1px solid #dddddd;
                padding: 8px;
            }
            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <?php
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan'
            ];

            //echo "Nama : {$Dosen ['nama']} <br>";
            //echo "Domisili : {$Dosen ['domisili']} <br>";
            //echo "Jenis Kelamin : {$Dosen ['jenis_kelamin']} <br>";
        ?>
        
        <h2>Informasi Dosen</h2>
        <table>
            <?php foreach ($Dosen as $properti => $nilai) { ?>
                <tr>
                    <th><?php echo $properti; ?></th>
                    <td><?php echo $nilai; ?></td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>