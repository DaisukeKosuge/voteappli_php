<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>職場環境アンケート</title>
    <link rel="stylesheet" href="vote.css">
</head>
<body>
    <h1>職場環境アンケート</h1>
    <form action="write.php" method="post">
        <label for="name">名前:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <p>職場の清潔さについて、どの程度満足していますか？</p>
        <input type="radio" id="q1_1" name="q1" value="非常に満足" required>
        <label for="q1_1">非常に満足</label><br>
        <input type="radio" id="q1_2" name="q1" value="満足">
        <label for="q1_2">満足</label><br>
        <input type="radio" id="q1_3" name="q1" value="普通">
        <label for="q1_3">普通</label><br>
        <input type="radio" id="q1_4" name="q1" value="不満">
        <label for="q1_4">不満</label><br>
        <input type="radio" id="q1_5" name="q1" value="非常に不満">
        <label for="q1_5">非常に不満</label><br><br>

        <p>チームメンバーとのコミュニケーションについて、どの程度満足していますか？</p>
        <input type="radio" id="q2_1" name="q2" value="非常に満足" required>
        <label for="q2_1">非常に満足</label><br>
        <input type="radio" id="q2_2" name="q2" value="満足">
        <label for="q2_2">満足</label><br>
        <input type="radio" id="q2_3" name="q2" value="普通">
        <label for="q2_3">普通</label><br>
        <input type="radio" id="q2_4" name="q2" value="不満">
        <label for="q2_4">不満</label><br>
        <input type="radio" id="q2_5" name="q2" value="非常に不満">
        <label for="q2_5">非常に不満</label><br><br>

        <p>職場の福利厚生について、どの程度満足していますか？</p>
        <input type="radio" id="q3_1" name="q3" value="非常に満足" required>
        <label for="q3_1">非常に満足</label><br>
        <input type="radio" id="q3_2" name="q3" value="満足">
        <label for="q3_2">満足</label><br>
        <input type="radio" id="q3_3" name="q3" value="普通">
        <label for="q3_3">普通</label><br>
        <input type="radio" id="q3_4" name="q3" value="不満">
        <label for="q3_4">不満</label><br>
        <input type="radio" id="q3_5" name="q3" value="非常に不満">
        <label for="q3_5">非常に不満</label><br><br>

        <p>職場のワークライフバランスについて、どの程度満足していますか？</p>
        <input type="radio" id="q4_1" name="q4" value="非常に満足" required>
        <label for="q4_1">非常に満足</label><br>
        <input type="radio" id="q4_2" name="q4" value="満足">
        <label for="q4_2">満足</label><br>
        <input type="radio" id="q4_3" name="q4" value="普通">
        <label for="q4_3">普通</label><br>
        <input type="radio" id="q4_4" name="q4" value="不満">
        <label for="q4_4">不満</label><br>
        <input type="radio" id="q4_5" name="q4" value="非常に不満">
        <label for="q4_5">非常に不満</label><br><br>

        <p>職場でのキャリア成長の機会について、どの程度満足していますか？</p>
        <input type="radio" id="q5_1" name="q5" value="非常に満足" required>
        <label for="q5_1">非常に満足</label><br>
        <input type="radio" id="q5_2" name="q5" value="満足">
        <label for="q5_2">満足</label><br>
        <input type="radio" id="q5_3" name="q5" value="普通">
        <label for="q5_3">普通</label><br>
        <input type="radio" id="q5_4" name="q5" value="不満">
        <label for="q5_4">不満</label><br>
        <input type="radio" id="q5_5" name="q5" value="非常に不満">
        <label for="q5_5">非常に不満</label><br><br>

        <input type="submit" value="送信">
    </form>
</body>
</html>
