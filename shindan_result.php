<?php
$point = 0;

foreach ($_POST as $key => $value) {
    // 'shindan'という文字が含まれるキーだったら集計する
    if (strpos($key, 'shindan') !== false) {
        // 入力値を整数として扱う（バリデーション）
        $point += (int)$value;
    }
}

// 合計数値ごとにテキスト表示を変える
$result_text = '';
if ($point == 20) {
    $result_text = 'すごい！あなたはスーパーリア充だ！';
} elseif ($point >= 15) {
    $result_text = '十分なリア充！爆発しろ！';
} elseif ($point >= 10) {
    $result_text = 'ややリア充！略してやや充！';
} elseif ($point >= 5) {
    $result_text = 'リア充の一歩手前！';
} else {
    $result_text = 'リア充力が足りない！でも幸せならいいかも！';
}

// テキストを表示（HTMLに埋め込む）
echo '<span class="font-s12 bold">' . htmlspecialchars($point, ENT_QUOTES, 'UTF-8') . '点！' . htmlspecialchars($result_text, ENT_QUOTES, 'UTF-8') . '</span>';
?>
