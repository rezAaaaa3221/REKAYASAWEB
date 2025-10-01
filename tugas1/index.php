    <?php
// Data array awal
$dataArray = [
    "nama" => "Andi",
    "umur" => 25,
    "hobi" => ["membaca", "berenang", "coding"]
];

// Encode array ke JSON
$jsonEncoded = json_encode($dataArray);

// JSON string untuk decode
$jsonString = '{"nama":"Budi","umur":30,"hobi":["bersepeda","memasak"]}';

// Decode ke PHP Object
$decodedObject = json_decode($jsonString);

// Decode ke PHP Array
$decodedArray = json_decode($jsonString, true);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Contoh JSON Encode & Decode di PHP</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #333;
            margin: 40px;
            min-height: 100vh;
            display: flex;
            justify-content: center;
        }
        .container {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
            padding: 30px 40px;
            max-width: 800px;
            width: 100%;
        }
        h1 {
            text-align: center;
            color: #4b0082;
            margin-bottom: 30px;
            font-weight: 600;
            letter-spacing: 1.2px;
        }
        h2 {
            color: #764ba2;
            border-bottom: 2px solid #667eea;
            padding-bottom: 8px;
            margin-top: 40px;
            margin-bottom: 20px;
            font-weight: 600;
        }
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 12px;
            margin-bottom: 30px;
        }
        caption {
            font-weight: 600;
            font-size: 1.3em;
            margin-bottom: 12px;
            color: #5a2a83;
            text-align: left;
        }
        th, td {
            background: #f3f4f6;
            padding: 14px 20px;
            text-align: left;
            border-radius: 8px;
            box-shadow: inset 0 0 5px #d1d5db;
            vertical-align: middle;
        }
        th {
            background: #667eea;
            color: white;
            box-shadow: none;
        }
        ul {
            margin: 0;
            padding-left: 20px;
            color: #555;
        }
        pre {
            background: #eef2ff;
            padding: 15px 20px;
            border-radius: 10px;
            font-size: 0.95em;
            color: #4b0082;
            overflow-x: auto;
            box-shadow: inset 0 0 8px #c3c9ff;
        }
        hr {
            border: none;
            border-top: 2px solid #ddd;
            margin: 40px 0;
        }
        /* Responsive */
        @media (max-width: 600px) {
            body {
                margin: 20px;
            }
            .container {
                padding: 20px;
            }
            table, th, td {
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contoh JSON Encode & Decode di PHP</h1>

        <h2>1. Encode Array ke JSON</h2>
        <table>
            <caption>Array Asli</caption>
            <tr><th>Key</th><th>Value</th></tr>
            <tr><td>nama</td><td><?= htmlspecialchars($dataArray['nama']) ?></td></tr>
            <tr><td>umur</td><td><?= $dataArray['umur'] ?></td></tr>
            <tr>
                <td>hobi</td>
                <td>
                    <ul>
                        <?php foreach ($dataArray['hobi'] as $hobi): ?>
                            <li><?= htmlspecialchars($hobi) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </td>
            </tr>
        </table>

        <p><strong>Hasil JSON Encode:</strong></p>
        <pre><?= htmlspecialchars($jsonEncoded) ?></pre>

        <hr>

        <h2>2. Decode JSON ke PHP Object dan Array</h2>

        <p><strong>JSON String:</strong></p>
        <pre><?= htmlspecialchars($jsonString) ?></pre>

        <h3>Hasil Decode ke PHP Object</h3>
        <table>
            <tr><th>Property</th><th>Value</th></tr>
            <tr><td>nama</td><td><?= htmlspecialchars($decodedObject->nama) ?></td></tr>
            <tr><td>umur</td><td><?= $decodedObject->umur ?></td></tr>
            <tr>
                <td>hobi</td>
                <td>
                    <ul>
                        <?php foreach ($decodedObject->hobi as $hobi): ?>
                            <li><?= htmlspecialchars($hobi) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </td>
            </tr>
        </table>

        <h3>Hasil Decode ke PHP Array</h3>
        <table>
            <tr><th>Key</th><th>Value</th></tr>
            <tr><td>nama</td><td><?= htmlspecialchars($decodedArray['nama']) ?></td></tr>
            <tr><td>umur</td><td><?= $decodedArray['umur'] ?></td></tr>
            <tr>
                <td>hobi</td>
                <td>
                    <ul>
                        <?php foreach ($decodedArray['hobi'] as $hobi): ?>
                            <li><?= htmlspecialchars($hobi) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
