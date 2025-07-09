<?php
// Q1 tic-tac問題
echo "1から100までのカウントを開始します\n\n";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 === 0 && $i % 5 === 0) {
        echo "tic-tac\n";
    } elseif ($i % 4 ===0) {
        echo "tic\n";
    } elseif ($i % 5 ===0) {
      echo "tac\n";
    } else {
      echo $i . "\n";
    }
}

// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

//問題1
echo $personalInfos[1]['name'] . "の電話番号は" . $personalInfos[1]['tel'] . "です";

//問題2
$index = 1;

foreach ($personalInfos as $person) {
        echo $index . "番目の" . $person['name'] . "のメールアドレスは" . $person['mail'] .
        "で、電話番号は" . $person['tel'] . "です。\n";
    $index++;
}

//問題3
$ageList = [25, 30, 18];

foreach ($personalInfos as $index => $info) {
    $personalInfos[$index]['age'] = $ageList[$index];
}

var_dump($personalInfos);

// Q3 オブジェクト-1
$student = new Student(120, '山田');
echo "学籍番号{$student->studentId}番の生徒は{$student->studentName}です。";

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject)
    {
        echo "{$this->studentName}は{$subject}の授業に参加しました。学籍番号：{$this->studentId}";
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');


// Q5 定義済みクラス
//問題1
$dt = new DateTime();
$dt->modify('-1 month');
echo $dt->format('Y-m-d');

//問題2
$today = new DateTime();
$pastDate = new DateTime('1992-04-25');
$interval = $today->diff($pastDate);
$days = $interval->days;
echo "あの日から{$days}日経過しました。";
?>
