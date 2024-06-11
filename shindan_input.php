<?php
$aryShindan = [];

$cnt = 1;
$aryShindan[$cnt]['question'] = '妻・夫、または彼女・彼氏がいる？';
$aryShindan[$cnt]['answer'][] = ['point' => 4, 'text' => 'いる'];
$aryShindan[$cnt]['answer'][] = ['point' => 3, 'text' => 'いたけど1年以内に分かれた'];
$aryShindan[$cnt]['answer'][] = ['point' => 2, 'text' => 'いたけど5年以内に分かれた'];
$aryShindan[$cnt]['answer'][] = ['point' => 1, 'text' => 'いない歴＝年齢'];

$cnt = 2;
$aryShindan[$cnt]['question'] = 'あなたのLINEの友達の人数は？';
$aryShindan[$cnt]['answer'][] = ['point' => 4, 'text' => '100人以上'];
$aryShindan[$cnt]['answer'][] = ['point' => 3, 'text' => '30～99人'];
$aryShindan[$cnt]['answer'][] = ['point' => 2, 'text' => '10～29人'];
$aryShindan[$cnt]['answer'][] = ['point' => 1, 'text' => '9人以下'];

$cnt = 3;
$aryShindan[$cnt]['question'] = '週ごとに友達とは何日会う？';
$aryShindan[$cnt]['answer'][] = ['point' => 4, 'text' => '3日以上'];
$aryShindan[$cnt]['answer'][] = ['point' => 3, 'text' => '2日'];
$aryShindan[$cnt]['answer'][] = ['point' => 2, 'text' => '1日'];
$aryShindan[$cnt]['answer'][] = ['point' => 1, 'text' => '1回も合わない日が多い'];

$cnt = 4;
$aryShindan[$cnt]['question'] = '年賀状は何枚届いた？';
$aryShindan[$cnt]['answer'][] = ['point' => 4, 'text' => '20枚以上'];
$aryShindan[$cnt]['answer'][] = ['point' => 3, 'text' => '10~19枚'];
$aryShindan[$cnt]['answer'][] = ['point' => 2, 'text' => '5~9枚'];
$aryShindan[$cnt]['answer'][] = ['point' => 1, 'text' => '4枚以下'];

$cnt = 5;
$aryShindan[$cnt]['question'] = 'あけおめLINEが届いた人数は？';
$aryShindan[$cnt]['answer'][] = ['point' => 4, 'text' => '20人以上'];
$aryShindan[$cnt]['answer'][] = ['point' => 3, 'text' => '10~19人'];
$aryShindan[$cnt]['answer'][] = ['point' => 2, 'text' => '5~9人'];
$aryShindan[$cnt]['answer'][] = ['point' => 1, 'text' => '4人以下'];
?>

<form method="post" action="shindan_result.php">
    <?php foreach ($aryShindan as $key1 => $val1) { ?>
        <!-- タイトル -->
        <p style="font-weight:bold;"><?php echo htmlspecialchars($key1 . '.' . $val1['question'], ENT_QUOTES, 'UTF-8'); ?></p>
        <?php foreach ($val1['answer'] as $key2 => $val2) { ?>
            <!-- 選択肢のループ -->
            <div>
                <label>
                    <input required type="radio" name="shindan<?php echo htmlspecialchars($key1, ENT_QUOTES, 'UTF-8'); ?>" value="<?php echo htmlspecialchars($val2['point'], ENT_QUOTES, 'UTF-8'); ?>"> 
                    <?php echo htmlspecialchars($val2['text'], ENT_QUOTES, 'UTF-8'); ?>
                </label>
            </div>
        <?php } ?>
    <?php } ?>
    <input class="bold" type="submit" value="回答する">
</form>
