<?php
function isPrime($n)
{
    if ($n < 2) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = intval($_POST["number"]);
    $sum = 0;
    $primes = [];
    for ($i = 2; $i <= $n; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
            $sum += $i;
        }
    }
    $primeList = implode(", ", $primes);
    $result = "Các số nguyên tố từ 1 đến $n là: <br><strong>$primeList</strong><br><br>";
    $result .= "👉 Tổng các số nguyên tố từ 1 đến $n là: <strong>$sum</strong>";
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Bài 1 - Tính tổng số nguyên tố</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #3e75c8ff;
            color: #c9d1d9;
            margin: 0;
            padding: 20px;
        }

        /* .container {
            max-width: 600px;
            margin: auto;
            background-color: #3e75c8ff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        } */
        h1 {
            color: black;
            font-size: 50px;
            text-align: center;
        }

        p {
            color: orange;
            font-size: 30px;
            text-align: center;
        }


        input[type="number"] {
            width: 50%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #30363d;
            background-color: #eaecf1ff;
            color: #c9d1d9;
            margin-bottom: 15px;
        }

        form {
            display: flex;
            justify-content: center;
            /* căn ngang */
            align-items: center;
            /* căn dọc (nếu muốn giữa màn hình luôn) */
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>LEARN TO CODE</h1>
        <P>With the world's largest web developer site</P>
        <form method="post">
            <input type="number"  placeholder="Search our tutorials, e.g. HTML" required>
        </form>

        <?php if ($result): ?>
            <div class="result">
                <?= $result ?>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>