<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
            background-color: #f4f4f4;
        }

        .container {
            width: 350px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #333;
        }

        input,
        select,
        button {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background-color: #218838;
        }

        .result {
            font-size: 18px;
            font-weight: bold;
            margin-top: 15px;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Kalkulator Sederhana</h2>
        <form method="post">
            <input type="number" name="angka1" placeholder="Masukkan angka pertama" required>
            <select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">×</option>
                <option value="/">÷</option>
            </select>
            <input type="number" name="angka2" placeholder="Masukkan angka kedua" required>
            <button type="submit" name="hitung">Hitung</button>
        </form>
        <div class="result">
            <?php
            if (isset($_POST['hitung'])) {
                $angka1 = $_POST['angka1'];
                $angka2 = $_POST['angka2'];
                $operator = $_POST['operator'];

                switch ($operator) {
                    case '+':
                        $hasil = $angka1 + $angka2;
                        break;
                    case '-':
                        $hasil = $angka1 - $angka2;
                        break;
                    case '*':
                        $hasil = $angka1 * $angka2;
                        break;
                    case '/':
                        $hasil = $angka2 != 0 ? $angka1 / $angka2 : 'Error: Pembagian dengan nol';
                        break;
                    default:
                        $hasil = 'Operator tidak valid';
                }
                echo "$hasil";
            }
            ?>
        </div>
    </div>
</body>

</html>