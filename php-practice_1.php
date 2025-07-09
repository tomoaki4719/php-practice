<?php
// Q1 変数と文字列

$message = '佐藤';
$newmessage = '私の名前は「' . $message . '」です。';
echo "$newmessage";

// Q2 四則演算

$num = 5 * 4;
echo $num . "\n";
echo $num /= 2;

// Q3 日付操作

date_default_timezone_set('Asia/Tokyo');
$time = date("Y年m月d日 H時i分s秒");
echo '現在時刻は、' . $time . 'です。';

// Q4 条件分岐-1 if文

$device = "mac";

if ($device === "windows") {
    echo "使用OSは、windowsです。";
    return; // ここで処理終了（このコードが関数やスクリプト内の場合）
}

if ($device === "mac") {
    echo "使用OSは、macです。";
    return;
}

echo "どちらでもありません。";

// Q5 条件分岐-2 三項演算子

$age = 20;
echo ($age < 18) ? "未成年です。" : "成人です。";

// Q6 配列

$kanto = ["東京都", "神奈川県", "栃木県", "千葉県", "埼玉県", "茨城県", "群馬県",];
echo $kanto[2] . "と" . $kanto[3] . "は関東地方の都道府県です。";

// Q7 連想配列-1

$kanto_prefectures = [
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県" => "千葉市",
    "埼玉県" => "さいたま市",
    "栃木県" => "宇都宮市",
    "群馬県" => "前橋市",
    "茨城県" => "水戸市",
];
foreach ($kanto_prefectures as $capital) {
    echo $capital . "\n";
}
//for文の場合
$capitals = array_values($kanto_prefectures);
for ($i = 0; $i < count($capitals); $i++) {
    echo $capitals[$i] . "\n";
}

// Q8 連想配列-2

$kanto_prefectures = [
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市",
];

foreach ($kanto_prefectures as $pref => $capital) {
  if ($pref === "埼玉県") {
      echo $pref . "の県庁所在地は、" . $capital . "です。";
  }
}

// Q9 連想配列-3

$kanto_prefectures = [
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市",
  "愛知県" => "名古屋市",
  "大阪府" => "大阪市",
];

$kanto_names = ["東京都", "神奈川県", "千葉県", "埼玉県", "栃木県", "群馬県", "茨城県",];
$pref_names = array_keys($kanto_prefectures);
$capitals   = array_values($kanto_prefectures);

for ($i = 0; $i < count($kanto_prefectures); $i++) {
  if (in_array($pref_names[$i], $kanto_names)) {
      echo $pref_names[$i] . "の県庁所在地は、" . $capitals[$i] . "です。\n";
  } else {
      echo $pref_names[$i] . "は関東地方ではありません。\n";
  }
}

// Q10 関数-1

function hello($name) {
  return $name . "さん、こんにちは。\n";
}

echo hello("金谷");
echo hello("安藤");

// Q11 関数-2

function calcTaxInPrice($price) 
{
  return $price * 1.10; // 消費税10%を加算
}

$price = 1000;
$taxInPrice = calcTaxInPrice($price);

echo $price . "円の商品の税込価格は" . $taxInPrice . "円です。";

// Q12 関数とif文

function distinguishNum($num) {
  if ($num % 2 === 0) {
      return $num . "は偶数です。\n";
  } else {
      return $num . "は奇数です。\n";
  }
}

echo distinguishNum(11);
echo distinguishNum(24);

// Q13 関数とswitch文

function evaluateGrade($grade) {
  switch ($grade)  {
    case 'A':
    case 'B':
        return "合格です。\n";
        break;
    case 'C':
        return "合格ですが追加課題があります。\n";
        break;
    case 'D':
        return "不合格です。";
        break;
    default:
        return "判定不明です。講師に問い合わせてください。\n";
        break;
  }
}

echo evaluateGrade("A");
echo evaluateGrade("D");

?>
