<?php
$buku = [
    [
        'judul' => 'Belajar PHP untuk pemula',
        'penulis' => 'Cobri',
        'tahun' => 2021
    ],
    [
        'judul' => 'Panduan CSS Modern',
        'penulis' => 'Google',
        'tahun' => 2020
    ],
    [
        'judul' => 'Panduan CSS Modern',
        'penulis' => 'Google',
        'tahun' => 2020
    ]


    ];
    ?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Daftar Buku</title>
</head>
</html>
    <h1>Daftar Buku</h1>
    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($buku as $item): ?>
                <tr>
                    <td><?php echo htmlspecialchars($item['judul']); ?></td>
                    <td><?php echo htmlspecialchars($item['penulis']); ?></td>
                    <td><?php echo htmlspecialchars($item['tahun']); ?></td>
                </tr>
            <?php endforeach; ?>    
        </tbody>
    </table>
</body>
</html>    