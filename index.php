<?php
include 'config.php';

$sql = "SELECT * FROM pengumuman ORDER BY tanggal DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dummy Pengumuman Mahkamah Agung</title>
</head>
<body>
    <h1>Daftar Pengumuman</h1>
    <ul>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <li>
                <strong><?php echo $row['judul']; ?></strong> - 
                <?php echo $row['tanggal']; ?>
                <p><?php echo $row['isi']; ?></p>
                <?php if (!empty($row['link'])) { ?>
                    <p>
                        <a href="<?php echo $row['link']; ?>" target="_blank">
                            <?php echo $row['link']; ?>
                        </a>
                    </p>
                <?php } ?>
            </li>
        <?php } ?>
    </ul>
</body>
</html>

<?php $conn->close(); ?>
