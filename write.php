<?php
// データベース接続
// データベース接続
$dsn = 'mysql:dbname=rosary_voteappli;host=mysql57.rosary.sakura.ne.jp;charset=utf8';
$user = 'rosary';
$password = 'daisuke1011';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// フォームからデータ取得
$name = $_POST['name'];
$email = $_POST['email'];
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3']; // 新しい質問
$q4 = $_POST['q4']; // 新しい質問
$q5 = $_POST['q5']; // 新しい質問

// データベースにデータを挿入
$sql = 'INSERT INTO voteresult (name, email, q1, q2, q3, q4, q5) VALUES (:name, :email, :q1, :q2, :q3, :q4, :q5)';
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':q1', $q1);
$stmt->bindParam(':q2', $q2);
$stmt->bindParam(':q3', $q3);
$stmt->bindParam(':q4', $q4);
$stmt->bindParam(':q5', $q5);
$stmt->execute();

// 登録完了後のページ遷移
header('Location: read.php');
exit;
?>
