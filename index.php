<!DOCTYPE html>
<html>
<head>
    <title>Dark Milk</title>
    <link rel="stylesheet" href="sesuatu.css">
</head>
<body>
    <div navigasi>
    <nav>
        <img src="C:\xampp\htdocs\sesuatu\depositphotos_90753322-stock-illustration-milk-icon-splash-logo-template.jpg" width="90">
        <h1>
            BLACK MILK
        </h1>
    </nav>
    </div>
    <div judul>
        <h1> Black Milk</h1>
    </div>
    <div>
        <p> 
            Black Milk merupakan susu penelitian dengan mendata banyaknya anggota kami yang sangat suka susu, dari berbagai macam benua
        </p>
    </div>
    <div img>
        <img src="C:\xampp\htdocs\sesuatu\istockphoto-1226997479-612x612.jpg" width="500">
    </div>
    
    <?php
        $conn = new mysqli("localhost", "root", "", "susu");

        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM blackmilk";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table border='1'>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Benua</th>
                        <th>Umur</th>
                    </tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["nama"] . "</td>
                        <td>" . $row["benua"] . "</td>
                        <td>" . $row["umur"] . "</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "Belum ada data ikan.";
        }

        $conn->close();
        ?>


</body>
<footer>
    <div footer>
    <p>
        Black Milk 2025, all rights reserved
    </p>
    </footer>
</html>