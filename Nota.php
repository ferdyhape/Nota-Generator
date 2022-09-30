<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styleNota.css">
    <title>Nota Generator</title>
</head>

<body>
    <div class="container">

        <?php
        $barang = array("Goodie Bag");
        $harga = array(20000);
        $jumlahpesan = array(8);
        $total = 0;
        $kredit = 1000000;
        $namatoko = "SAVANA GIFT";
        $namajalan = "JL. KALPATARU NO. 32";
        $namakota = "KOTA SURABAYA";
        $telp = "082675889900";
        $nomorNota = "2743/KSR/UTM/1213 10-09-22";
        $kasir = "ADMIN 09:59:00";

        ?>
        <div class="kotak">
            <p>
                <?php
                echo $namatoko . "<br>";
                echo $namajalan . "<br>";
                echo $namakota . "<br>";
                echo "Telp: " . $telp . "<br><br>";
                echo "No. : " . $nomorNota . "<br>";
                echo "Ksr : " . $kasir . "<br>";
                echo "Pel: UMUM/TF<br>";
                echo "----------------------------------------------------------<br>";
                $i = 0;
                echo "<table>";
                foreach (array_combine($barang, $harga) as $b => $h) {
                    echo "<tr>";
                    echo "<td>" . $b . "</td>";
                    echo "<td>" . $h . "x</td>";
                    echo "<td>" . $jumlahpesan[0] . " = </td>";
                    echo "<td>" . $h * $jumlahpesan[0] . "</td>";
                    echo "</tr>";
                    $i++;
                    $total += $h * $jumlahpesan[0];
                }
                echo "</table>";

                echo "----------------------------------------------------------<br>";

                echo "<table>";
                echo "<tr>";
                echo "<td>Total Akhir" . "</td>";
                echo "<td> &nbsp</td>";
                echo "<td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp =</td>";
                echo "<td>" . $total . "</td>";
                echo "</tr>";
                echo "</table>";

                echo "----------------------------------------------------------<br>";

                echo "<table>";
                echo "<tr>";
                echo "<td>Kredit" . "</td>";
                echo "<td> &nbsp</td>";
                echo "<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp =</td>";
                echo "<td>" . $kredit . "</td>";
                echo "</tr>";
                echo "</table>";

                echo "<table>";
                echo "<tr>";
                echo "<td>Kembali" . "</td>";
                echo "<td> &nbsp</td>";
                echo "<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp =</td>";
                echo "<td>" . $kredit - $total . "</td>";
                echo "</tr>";
                echo "</table>";

                echo "----------------------------------------------------------<br>";
                echo "<br>Putri Maulida<br>";
                echo "<p>*Nota harap disimpan dengan baik</p><br>";
                // echo "PENGAMBILAN BARANG<br>";
                ?>
            </p>
        </div>
    </div>
</body>

</html>