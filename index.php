<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/start.css">
  <title>Document</title>
  <meta name="viweport" content="width=device-width, initial-scale=1">
</head>

<body>
  <!-- バックグラウンド音声 -->
  <audio autoplay loop="0">
    <source src="./mp3/start-loop.mp3" type="audio/mp3">
  </audio>

  <!-- ムシキングタイトル画像 -->
  <div class="tittle-img"><img src="./img/R.jpg" alt=""></div>

  <!-- 100円ボタン -->

  <form action="card_create.php" method="POST">
    <fieldset>
      <legend>100円でカードを引いてね</legend>
      <div style="display:none;">
        ガチャ結果<input type="text" name="gacha" value=<?= $gacha ?>>
      </div>
      <button>
        <div class="button100">
          <div id="gacha-button" class="punipuni" onclick="audio()"><img src="./img/kouka-100en.png" alt=""></div>
          <audio id="btn_audio">
            <source src="./mp3/starat.mp3" type="audio/mp3">
          </audio>
        </div>
      </button>
      </div>
    </fieldset>
  </form>
  <a href="card_read.php">一覧画面</a>

  <!-- ガチャ結果 -->
  <div class="card-container">
    <div class="card-box"><img id="mushi-card" src="./img/hatena.png" alt=""></div>
    <div class="card-box"><img id="gu-card" src="./img/hatena.png" alt=""></div>
    <div class="card-box"><img id="choki-card" src="./img/hatena.png" alt=""></div>
    <div class="card-box"><img id="par-card" src="./img/hatena.png" alt=""></div>
  </div>

  <p class="question">このカードで戦うなら下のボタンを押してね</p>
  <div class="ok-button">
    <button onclick="pagelocation_start_dif()" target="_blank">むずかしい</button>
    <button onclick="pagelocation_start_easy()" target="_blank">かんたん</button>
  </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="./js/style.js">
  // 100円で音を出す
  // function audio() {
  //   document.getElementById("btn_audio").currentTime = 0; //連続クリックに対応
  //   document.getElementById("btn_audio").play(); //クリックしたら音を再生
  //   setTimeout("jump()", 500);
  // }
  // // function jump() {
  // //   location.href = "/mushiking.html";
  // // }


  // const array = ["大吉","中吉","小吉","凶"];
  //   const omikuji = Math.floor(Math.random() * 4);
  //   console.log(array[omikuji]);
</script>

</html>