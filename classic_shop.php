DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <title>Менің әлемім 🤎</title>
    <style>
        body {
            background: linear-gradient(135deg, #f8f8f8, #eaeaea);
            font-family: "Segoe UI", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;S
            margin: 0;
        }
        .card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.12);
            width: 520px;
            padding: 30px 35px;
            text-align: left;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-4px) scale(1.01);
            box-shadow: 0 12px 30px rgba(0,0,0,0.18);
        }
        h1 {
            color: #4b2c6f;
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }
        h3 {
            color: #5e3a85;
            border-bottom: 1px solid #dcd0e0;
            padding-bottom: 4px;
            margin-top: 25px;
        }
        p {
            font-size: 17px;
            color: #333;
            margin: 6px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 12px;
            font-size: 16px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 9px;
            text-align: left;
            transition: background 0.3s, color 0.3s;
        }
        th {
            background-color: #f0edf4;
            color: #4b2c6f;
        }
        tbody tr:hover {
            background-color: #f4f0f7;
            color: #3b1f5f;
        }
        button {
            margin-top: 10px;
            padding: 7px 15px;
            background-color: #5e3a85;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
            transition: background 0.3s, transform 0.2s;
        }
        button:hover {
            background-color: #704c9b;
            transform: scale(1.05);
        }
        #topic {
            font-weight: bold;
            color: #5e3a85;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
<?php
$aty = "Айжан";
$qala = "Кентау";
$taqyryp = "Аксессуарлар мен киімдер";
?>
<div class="card">
    <h1>Менің әлемім 🤎</h1>

    <p><b>Менің атым:</b> <?= $aty ?></p>
    <p><b>Менің қалам:</b> <?= $qala ?></p>
    <p><b>Сүйікті тақырыбым:</b> <span id="topic"><?= $taqyryp ?></span></p>
    <button onclick="changeTopic()">Тақырыпты ауыстыру 🔄</button>

    <h3>Бағаны салыстыру кестесі 🛒</h3>
    <table>
        <thead>
        <tr>
            <th>Бұйым</th>
            <th>Бағасы (₸)</th>
            <th>Статус</th>
            <th>Рейтинг</th>
        </tr>
        </thead>
        <tbody>
        <tr><td>Етік 👢</td><td>25 000</td><td>Бар</td><td>⭐⭐⭐</td></tr>USER
        <tr><td>Сумка 👜</td><td>18 000</td><td>Бар</td><td>⭐⭐⭐⭐</td></tr>
        <tr><td>Бұйым 🎁</td><td>12 000</td><td>Тапсырыспен</td><td>⭐⭐</td></tr>
        <tr><td>Киім 👗</td><td>30 000</td><td>Бар</td><td>⭐⭐⭐⭐⭐</td></tr>
        </tbody>
    </table>
</div>

<script>
    const topics = [
        "Аксессуарлар мен киімдер",
        "Киім трендтері",
        "Сән әлемі",
        "Жаңа коллекциялар"
    ];
    let current = 0;

    function changeTopic() {
        current = (current + 1) % topics.length;
        document.getElementById('topic').textContent = topics[current];
    }
</script>
</body>
</html>