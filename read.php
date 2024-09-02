<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>アンケート結果</title>
    <link rel="stylesheet" href="vote.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>アンケート結果</h1>

    <?php
    // データベース接続
    $dsn = 'mysql:dbname=rosary_voteappli;host=mysql57.rosary.sakura.ne.jp;charset=utf8';
    $user = 'rosary';
    $password = 'daisuke1011';

    try {
        $dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }

    // データ取得
    $sql = 'SELECT * FROM voteresult';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // テーブル表示
    echo '<table>';
    echo '<tr><th>名前</th><th>Email</th><th>清潔さ満足度</th><th>コミュニケーション満足度</th><th>福利厚生満足度</th><th>ワークライフバランス満足度</th><th>キャリア成長機会満足度</th></tr>';
    foreach ($results as $row) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8') . '</td>';
        echo '<td>' . htmlspecialchars($row['email'], ENT_QUOTES, 'UTF-8') . '</td>';
        echo '<td>' . htmlspecialchars($row['q1'], ENT_QUOTES, 'UTF-8') . '</td>';
        echo '<td>' . htmlspecialchars($row['q2'], ENT_QUOTES, 'UTF-8') . '</td>';
        echo '<td>' . htmlspecialchars($row['q3'], ENT_QUOTES, 'UTF-8') . '</td>';
        echo '<td>' . htmlspecialchars($row['q4'], ENT_QUOTES, 'UTF-8') . '</td>';
        echo '<td>' . htmlspecialchars($row['q5'], ENT_QUOTES, 'UTF-8') . '</td>';
        echo '</tr>';
    }
    echo '</table>';

    // グラフデータ集計
    $q1_votes = ['非常に満足' => 0, '満足' => 0, '普通' => 0, '不満' => 0, '非常に不満' => 0];
    $q2_votes = ['非常に満足' => 0, '満足' => 0, '普通' => 0, '不満' => 0, '非常に不満' => 0];
    $q3_votes = ['非常に満足' => 0, '満足' => 0, '普通' => 0, '不満' => 0, '非常に不満' => 0];
    $q4_votes = ['非常に満足' => 0, '満足' => 0, '普通' => 0, '不満' => 0, '非常に不満' => 0];
    $q5_votes = ['非常に満足' => 0, '満足' => 0, '普通' => 0, '不満' => 0, '非常に不満' => 0];

    foreach ($results as $row) {
        $q1_votes[$row['q1']]++;
        $q2_votes[$row['q2']]++;
        $q3_votes[$row['q3']]++;
        $q4_votes[$row['q4']]++;
        $q5_votes[$row['q5']]++;
    }
    ?>

    <h2>清潔さに対する満足度</h2>
    <canvas id="q1Chart"></canvas>
    <script>
        const q1Data = {
            labels: ['非常に満足', '満足', '普通', '不満', '非常に不満'],
            datasets: [{
                label: '清潔さ満足度',
                data: [<?= $q1_votes['非常に満足'] ?>, <?= $q1_votes['満足'] ?>, <?= $q1_votes['普通'] ?>, <?= $q1_votes['不満'] ?>, <?= $q1_votes['非常に不満'] ?>],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        };
        const q1Config = {
            type: 'bar',
            data: q1Data,
        };
        new Chart(document.getElementById('q1Chart'), q1Config);
    </script>

    <h2>コミュニケーションに対する満足度</h2>
    <canvas id="q2Chart"></canvas>
    <script>
        const q2Data = {
            labels: ['非常に満足', '満足', '普通', '不満', '非常に不満'],
            datasets: [{
                label: 'コミュニケーション満足度',
                data: [<?= $q2_votes['非常に満足'] ?>, <?= $q2_votes['満足'] ?>, <?= $q2_votes['普通'] ?>, <?= $q2_votes['不満'] ?>, <?= $q2_votes['非常に不満'] ?>],
                backgroundColor: 'rgba(153, 102, 255, 0.2)',
                borderColor: 'rgba(153, 102, 255, 1)',
                borderWidth: 1
            }]
        };
        const q2Config = {
            type: 'bar',
            data: q2Data,
        };
        new Chart(document.getElementById('q2Chart'), q2Config);
    </script>

    <h2>福利厚生に対する満足度</h2>
    <canvas id="q3Chart"></canvas>
    <script>
        const q3Data = {
            labels: ['非常に満足', '満足', '普通', '不満', '非常に不満'],
            datasets: [{
                label: '福利厚生満足度',
                data: [<?= $q3_votes['非常に満足'] ?>, <?= $q3_votes['満足'] ?>, <?= $q3_votes['普通'] ?>, <?= $q3_votes['不満'] ?>, <?= $q3_votes['非常に不満'] ?>],
                backgroundColor: 'rgba(255, 206, 86, 0.2)',
                borderColor: 'rgba(255, 206, 86, 1)',
                borderWidth: 1
            }]
        };
        const q3Config = {
            type: 'bar',
            data: q3Data,
        };
        new Chart(document.getElementById('q3Chart'), q3Config);
    </script>

    <h2>ワークライフバランスに対する満足度</h2>
    <canvas id="q4Chart"></canvas>
    <script>
        const q4Data = {
            labels: ['非常に満足', '満足', '普通', '不満', '非常に不満'],
            datasets: [{
                label: 'ワークライフバランス満足度',
                data: [<?= $q4_votes['非常に満足'] ?>, <?= $q4_votes['満足'] ?>, <?= $q4_votes['普通'] ?>, <?= $q4_votes['不満'] ?>, <?= $q4_votes['非常に不満'] ?>],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        };
        const q4Config = {
            type: 'bar',
            data: q4Data,
        };
        new Chart(document.getElementById('q4Chart'), q4Config);
    </script>

    <h2>キャリア成長機会に対する満足度</h2>
    <canvas id="q5Chart"></canvas>
    <script>
        const q5Data = {
            labels: ['非常に満足', '満足', '普通', '不満', '非常に不満'],
            datasets: [{
                label: 'キャリア成長機会満足度',
                data: [<?= $q5_votes['非常に満足'] ?>, <?= $q5_votes['満足'] ?>, <?= $q5_votes['普通'] ?>, <?= $q5_votes['不満'] ?>, <?= $q5_votes['非常に不満'] ?>],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        };
        const q5Config = {
            type: 'bar',
            data: q5Data,
        };
        new Chart(document.getElementById('q5Chart'), q5Config);
    </script>

</body>
</html>
