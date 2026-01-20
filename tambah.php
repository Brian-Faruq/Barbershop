<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Antrian Cukur</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background-color: #111;
            color: white;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #1e1e1e;
            padding: 60px; /* lebih tebal */
            border-radius: 16px;
            box-shadow: 0 0 15px rgba(0,0,0,0.5);
            max-width: 700px; /* lebih besar */
            width: 100%;
        }

        h2 {
            font-size: 42px; /* lebih besar */
            color: #00bfff;
            margin-bottom: 40px;
            text-align: center;
        }

        label {
            font-size: 24px;
            display: block;
            margin-bottom: 14px;
        }

        input[type="text"],
        input[type="file"] {
            width: 100%;
            padding: 16px;
            border: none;
            border-radius: 10px;
            margin-bottom: 30px;
            font-size: 20px;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
        }

        button {
            background-color: #00bfff;
            color: white;
            padding: 14px 28px;
            font-size: 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.2s;
        }

        button:hover {
            background-color: #009acd;
        }

        .cancel {
            background-color: #444;
        }

        .cancel:hover {
            background-color: #666;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Tambah Antrian Cukur</h2>
        <form action="proses_tambah.php" method="post" enctype="multipart/form-data">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required placeholder="Isi nama anda">

            <label for="model_rambut">Model Rambut:</label>
            <input type="text" name="model_rambut" id="model_rambut" required placeholder="Anda mau model rambut apa">

            <label for="gambar">Upload Gambar Model:</label>
            <input type="file" name="gambar" id="gambar" required>

            <div class="buttons">
                <button type="submit">Upload</button>
                <a href="index.php"><button type="button" class="cancel">Batal</button></a>
            </div>
        </form>
    </div>
</body>
</html>
