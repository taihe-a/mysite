<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=10">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link rel="icon" href="img/favicon.ico">
  <meta name="robots" content="index" />
  <meta name="keywords" content="株式会社ビーライトグループ,ビーライト,ビーライトソーラー,ビーライトプレミアム,ビーリノベーション、ビーライトソリューションズ,太陽光発電,メンテナンス,愛知県,若尾光伸、名古屋市,ホールディングス,コンサルタント" />
  <meta name="description" content="電気のあらゆることなら、安心・安全の株式会社ビーライトグループへ。株式会社ビーライトグループは、ビーライトグループ企業運営に関する指導・統括・コンサルタント事業を行うホールディングスカンパニーです。電気設備の設計施工やアライアンス事業、太陽光発電システムの施工からメンテナンスなど、電気設備に関するインフラを総合的に受託いたします。" />



  <meta property="og:title" content="会社概要/株式会社ビーライトグループ" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="http://b-light-group.co.jp/img/logo1.png" />
  <meta property="og:url" content="http://b-light-group.co.jp/index.php" />
  <meta property="og:site_name" content="株式会社ビーライトグループ" />
  <meta property="og:description" content="電気のあらゆることなら、安心・安全の株式会社ビーライトグループへ。株式会社ビーライトグループは、ビーライトグループ企業運営に関する指導・統括・コンサルタント事業を行うホールディングスカンパニーです。電気設備の設計施工やアライアンス事業、太陽光発電システムの施工からメンテナンスなど、電気設備に関するインフラを総合的に受託いたします。" />
  <link rel="canonical" href="http://b-light-group.co.jp/index.php" />
  <title>株式会社ビーライトグループ</title>
  <!-- BootstrapのCSS読み込み -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- jQuery読み込み -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- BootstrapのJS読み込み -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/megamenu.js"></script>
  <script src="js/fadein.js"></script>
  <link href="css/index.css" rel="stylesheet">
  <link href="css/component.css" rel="stylesheet">
  <link href="css/megamenu.css" rel="stylesheet">
  <link rel="stylesheet" href="css/ionicons.min.css">
  <link rel="stylesheet" href="css/fadein.css">
  <link href="css/foot.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/jpn.css@latest/dist/bootstrap/jpn.min.css">
  <style type="text/css">
  /* CSSは必要最低限しか指定してませんのでお好みで（もちろん外部化OK） */
  </style>

  <script type="text/javascript">
  <!--
  function openwin(url) {//詳細ページ用ポップアップ。ウインドウの幅、高さなど自由に編集できます（ポップアップで開く場合のみコピペ下さい）
   wn = window.open(url, 'win','width=680,height=550,status=no,location=no,scrollbars=yes,directories=no,menubar=no,resizable=no,toolbar=no');wn.focus();
  }
  -->
  </script>
  <!--▲▲CSSとポップアップ用JS。トップページ埋め込み時　要コピペ（head部分）▲▲-->
  <?php //▼▼ 既存ページヘ埋め込み時はまるっとコピペ下さい （この行も含みページ最上部に）※.phpでかつUTF-8のページのみ可▼▼
  //※このページに対して既存のページのhtmlを記述する形でももちろんOKです。
  //----------------------------------------------------------------------
  // トップページ表示用ページ
  // 設定ファイルの読み込みとページ独自設定
  //----------------------------------------------------------------------
  include_once("./pkobo_news/admin/include/config.php");//（必要に応じてパスは適宜変更下さい）
  $img_updir = './pkobo_news/upload';//画像保存パス（必要に応じてパスは適宜変更下さい）

  @rssGen();//RSS配信用（このファイルのURLに「?feed=rss2」とパラメータを追加すればRSSフィードが表示されます）※不要な場合削除OK

  /* ▽オプション設定▽ */

  //表示件数
  $config['dspNum'] = 10;

  //本文の抜粋を表示するかどうか（0=しない、1=する）
  $commentDsp = 0;

  //本文を抜粋表示する場合の表示文字数 （単位はバイト。全角文字は「2バイト」で1文字となります。また末尾の文字「...」も含みます）
  //※htmlタグは削除されます「0」にすれば全文をhtmlもそのままで表示します。（レイアウトに問題が出る可能性があるのでオススメしません）
  $commentNum = 100;

  //サムネイルを表示するか（0=しない、1=する）※アップファイルの1枚目が画像の場合のみ有効
  $dspThumbNail = 0;

  //表示するカテゴリを指定（指定なし（空）の場合は全件表示 ※デフォルト）
  //このページで特定カテゴリのみ表示したい場合、0からの番号を指定下さい。 （1番目が0，2番目が1になるので注意）
  //要するに複数のカテゴリがある場合でそれぞれ別々のファイルで表示したい場合用です
  //このファイルを複製すればOKです（カテゴリごとにデザインを変えたい場合など）
  //例　$category = '1'; ※この場合カテゴリ番号「1」（設定ファイルでの2番目）の記事のみが表示されます
  $category = '';
  //またはURLのパラメータでも指定可能です。番号ルールは↑と同じです。例　URLに ?cat=0 や ?cat=1 を追加するだけです
  //1ファイルでパラメータを変えるだけでそれぞれのカテゴリを表示できるので便利です。（全カテゴリでデザインは共通で良い場合）

  //----------------------------------------------------------------------
  // 設定ファイルの読み込みとページ独自設定
  //----------------------------------------------------------------------
  //▲▲ コピペここまで ▲▲（この行も含む）?>
</head>

<body>
  <div class="menu-container">
      <div class="menu">
        <ul>
          <li class="logo"><a href="index.php" style="padding:0px;"><img alt="ブランド" src="img/logo1.png" width="365" height="80" class="logo"></a></li>
          <li><a href="b-light-group.html">企業情報</a>
            <ul>
              <li><a href="message.html">コーポレートメッセージ</a>
                <ul>
                  <li><a href="topMessage.html">トップメッセージ</a></li>
                  <li><a href="vision.html">ビジョン</a></li>
                </ul>
              </li>
              <li><a href="b-light-group.html">ビーライトグループとは</a>
                <ul>
                  <li><a href="about.html">会社概要</a></li>
                  <li><a href="location.html">事業所一覧</a></li>
                  <li><a href="about.html#history">沿革</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#!" class="disabled">事業紹介</a>
            <ul>
              <li><a href="#!">設備工事・施工設計</a>
                <ul>
                  <li><a href="http://b-light.co.jp/construction.html">ファシリティ事業</a></li>
                  <li><a href="https://b-light-neo.co.jp/aliance.html">アライアンス事業</a></li>
                </ul>
              </li>
              <li><a href="#!">再生可能エネルギー</a>
                <ul>
                  <li><a href="https://b-light-neo.co.jp/maintenance.html">O＆M事業</a></li>
                  <li><a href="https://b-solar.jp/">発電所運営事業</a></li>
                </ul>
              </li>
              <li><a href="#!">不動産建設</a>
                <ul>
                  <li><a href="https://b-premium.co.jp#develop">ランドシステム事業</a></li>
                  <li><a href="https://b-renovation.co.jp">リノベーション事業</a></li>
                </ul>
              </li>
              <li><a href="#!">医療コンサルティング</a>
                <ul>
                  <li><a href="#!">医療機器販売事業</a></li>
                  <li><a href="#!">医療事務管理事業</a></li>
                  <li><a href="#!">医療ファーマシィ事業</a></li>
                  <li><a href="#!">医療施設運用事業</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="https://recruitment.b-light-group.co.jp/">採用情報</a>
          </li>
          <li><a href="contact.html">お問い合わせ</a>
          </li>
        </ul>
      </div>
  </div>
  <main role="main">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <!-- インジケータの設定 -->
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <!-- スライドさせる画像の設定 -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <picture>
            <source media="(min-width: 1280px)" srcset="img/index/carousel1.jpg">
            <img src="img/index/res_carousel1.jpg" class="d-block w-100" alt="スライド">
          </picture>
          <div class="container">
            <div class="carousel-caption text-lg-left text-center">
              <p><a class="btn btn-outline-light" href="vision.html" role="button">企業ビジョン</a></p>
            </div>
          </div>
        </div>
          <!-- /.carousel-item -->
          <div class="carousel-item">
            <picture>
              <source media="(min-width: 1280px)" srcset="img/index/carousel2.jpg">
              <img src="img/index/res_carousel2.jpg" class="d-block w-100" alt="スライド">
            </picture>
            <div class="container">
              <div class="carousel-caption text-lg-left text-center">
                <p><a class="btn btn-outline-light" href="https://recruitment.b-light-group.co.jp/" role="button">新卒採用サイト</a></p>
              </div>
            </div>
          </div>
          <!-- /.carousel-item -->
          <div class="carousel-item">
            <picture>
              <source media="(min-width: 1280px)" srcset="img/index/carousel3.jpg">
                <img src="img/index/res_carousel3.jpg" class="d-block w-100" alt="スライド">
            </picture>
            <div class="container">
              <div class="carousel-caption text-lg-left text-center">
                <p><a class="btn btn-outline-light" href="message.html" role="button">トップメッセージ</a></p>
              </div>
            </div>
          </div>
          <!-- /.carousel-item -->
        </div>
        <!-- /.carousel-inner -->
        <!-- スライドコントロールの設定 -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">前へ</span>
      </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">次へ</span>
      </a>
      </div>
      <!-- /.carousel -->

    <div class="container-fluid">
      <div class="row text-center justify-content-center py-5">
        <div class="col-12 col-xl-12 text-center fadein">
          <h1>About B-Light Group</h1>
        </div>
        <div class="col-12 col-xl-6 fadein">
          <p>私どもは創業以来、数々の目標に挑戦し続けてまいりました。建設業界の変革を進めるべく常に新しいステージへ挑戦を続けます。</p>
        </div>
        <div class="col-12 mt-5">
          <a class="btn btn-primary badge-pill fadein" href="message.html" role="button">コーポレートメッセージ</a>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-12 bg-primary-trans text-white text-center py-5 " id="service">
          <h2>BUSINESS</h2>
        </div>
        <div class="col-xl-3 bg-dark text-primary d-flex align-items-center justify-content-xl-end justify-content-center">
          <div class="card card-body bg-white text-primary fadein mr-5-minus my-3 rounded-0 ms-width">
            <h4 class="featurette-heading fadein">01.設備工事・設計施工事業</h4>
            <p class="lead fadein text-secondary">創業以来、設備工事・設計施工事業を継続して行ってきました。<br>創業以来
              13000件を超える設備工事の実績に基づいた経験・品質・また全国の施工ネットワークを活用した、広域的な施工可能エリア、そして弊社にしかないノウハウをご提供致します。</p>
            <a class="btn btn-primary shadow fadein" href="http://b-light.co.jp/construction.html" role="button">詳しく</a>
          </div>
        </div>
        <div class="col-xl-9 px-0">
          <img class="featurette-image img-fluid mx-auto" src="img/index/placeholder1.jpg" alt="一般的なプレースホルダ画像">
        </div>
      </div>
      <div class="row featurette">
        <div class="col-xl-3 order-xl-2 text-white bg-light d-flex align-items-center justify-content-center">
          <div class="card card-body bg-primary text-white border-0 my-3 ml-5-minus rounded-0  ms-width">
            <h4 class="featurette-heading fadein">02.メンテンナンス事業</h4>
            <p class="lead fadein">グループ会社と連携しながら、メガソーラーのメンテナンスを行っています。
              <br> お客様のすべてのお困りごとの解決に向けて、トータルサポートをご提供いたします。
            </p>
            <a role="button" class="btn btn-primary shadow fadein" href="https://b-light-neo.co.jp/maintenance.html">詳しく</a>
          </div>
        </div>
        <div class="col-xl-9 order-xl-1 px-0">
          <img class="featurette-image img-fluid mx-auto" src="img/index/placeholder2.jpg" alt="一般的なプレースホルダ画像">
        </div>
      </div>
      <div class="row featurette">
        <div class="col-xl-3 bg-dark text-white p-4 d-flex align-items-center justify-content-md-end justify-content-center">
          <div class="card card-body bg-white my-4 text-primary mr-5-minus border-0 rounded-0 ms-width">
            <h4 class="featurette-heading">03.ランドシステム事業</h4>
            <p class="lead fadein text-secondary">地主様の大切な土地や建物の最大限の有効活用を企画・提案しております。
              <br>テナント様へは適切な不動産物件をご紹介し、土地開発から設計・施工までトータルにてお手伝いしてまいります。</p>
            <a role="button" class="btn btn-primary shadow fadein" href="https://b-premium.co.jp">詳しく</a>
          </div>
        </div>
        <div class="col-12 col-lg-9 px-0 ">
          <img class="featurette-image img-fluid mx-auto" src="img/index/placeholder3.png" alt="一般的なプレースホルダ画像">
        </div>
      </div>
      <div class="row featurette">
        <div class="col-xl-3 order-xl-2 bg-light d-flex align-items-center justify-content-center">
          <div class="card card-body bg-primary text-white border-0 my-4 ml-5-minus rounded-0 ms-width">
            <h4 class="featurette-heading fadein">04.住宅再生事業</h4>
            <p class="lead fadein text-white">リノベーション住宅で夢のようなマイホームを提供することをコンセプトに東海地域で事業展開しています。
              <br> 住宅を通して快適・安心・安全を提供して参ります。</p>
            <a role="button" class="btn btn-primary shadow fadein" href="https://b-renovation.co.jp/">詳しく</a>
          </div>
        </div>
        <div class="col-xl-9 order-xl-1 px-0">
          <img class="featurette-image img-fluid mx-auto " src="img/index/placeholder4.png" alt="一般的なプレースホルダ画像">
        </div>
      </div>
      <div class="row featurette mb-5">
        <div class="col-xl-5 bg-primary text-white">
          <div class="card card-body bg-primary fadein m-lg-5 text-white border-0">
            <h3 class="featurette-heading">グローバル事業</h3>
            <p class="lead">創業以来、着々と積み重ねてきた実績を活かし我々の技術をアジアへ展開していきます。<br> 日本のソーラーパネルを含む様々な技術を海外に発信し、そして
              街づくりにも貢献してゆきます。
              <br> 現在、フィリピンを中心に中国など東南アジア圏に進出準備を行っております。
            </p>
          </div>
        </div>
        <div class="col-xl-7 px-0 ">
          <img class="featurette-image img-fluid mx-auto " src="img/index/placeholder5.jpg" alt="一般的なプレースホルダ画像">
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md text-center">
          <h1>NEWS</h1>
          <!--▼▼トップページ埋め込み時はここから以下をコピーして任意の場所に貼り付けてください（html部は編集可）▼▼-->
          <div id="newsWrap">
          <ul id="newsList"class="list-unstyled">

          <?php if(!$copyright){echo $warningMesse;exit;}else{$getFormatDataArr = getLines2DspData($file_path,$img_updir,$config,'',$category);foreach($getFormatDataArr as $key => $data){?>

          <li id="postID_<?php echo $data['id'];?>" class="cat-<?php echo $data['categoryNum'];?> clearfix">
          <span class="up_ymd"><?php echo $data['up_ymd'];//日付表示?></span>
          <?php if(!empty($data['category'])) echo '<span class="catName">'.$data['category'].'</span>';//カテゴリ名表示?>
          <span class="title"><?php echo $data['title'];//タイトル表示?></span>
          <?php if($data['newmark'] == 1) echo ' <span class="newMark">New!</span>';//New表示。タグ変更可（表示期間は設定ファイルで）?>

          </li>
          <hr class="col-md-10 my-2">
          <?php } ?>
          </ul>
          </div>
          <?php echo $copyright;}//著作権表記削除不可?>

          <!--▲▲トップページ埋め込み時　コピーここまで▲▲-->
           <div class="col-md-3 float-right"><a href="https://b-light-group.co.jp/news.php" class="btn btn-primary">一覧<span class="glyphicon glyphicon-align-justify"> </span></a></div>
        </div>
      </div>
      <!-- /フィーチャーを終了 -->
    </div>
    <div class="jumbotron jumbotron-fluid mb-0">
      <div class="container">
        <div class="row py-5 justify-content-center">
          <!-- /採用情報 -->
          <div class="col-12 col-xl-12 text-center my-xl-5 text-white">
            <h1 class="display-4 font-weight-bold text-white">RECRUITMENT</h1>
          </div>
          <div class="col-12 text-white fadein text-center">
            <p>業界の変革を目指すため、次世代を担う若い人材を積極採用しています。<br> 建設業界に少しでも新しい風を吹かせ影響を与えたいと思える方をお待ちしています。
            </p>
          </div>
          <div class="col-lg-3 my-xl-5 mx-4 my-3 text-center">
            <button type="button" class="d-inline-block shadow fadein btn-lg btn-block badge-pill btn-outline-white-disabled">インターンシップ</button>
          </div>
          <div class="col-lg-3 my-xl-5 mx-4 my-3 text-center">
            <a href="https://recruitment.b-light-group.co.jp"><button type="button" class="btn d-inline-block shadow fadein btn-lg btn-block badge-pill btn-outline-white">新卒採用</button></a>
          </div>
          <div class="col-lg-3 my-xl-5 mx-4 my-3 text-center">
            <button type="button" class="d-inline-block shadow fadein btn-lg btn-block badge-pill btn-outline-white-disabled">中途採用</button>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.jumbotron -->
    <!-- /.row -->
    <!-- /.container -->
  </main>
  <footer class="pt-4 p-3 p-md-5 px-auto">
    <div class="row">
      <div class="col-12 col-lg-3 text-center">
        <img class="mb-2" src="img/logo2.png" alt="400" width="300" height="">
        <small class="d-block mb-3 text-center">Copyright © B-Light-Group Inc. All Rights Reserved.</small>
      </div>
      <div class="col-6 col-md-2">
        <h5>企業情報</h5>
        <ul class="list-unstyled text-small">
          <li><a href="https://b-light-group.co.jp/message.html">コーポレートメッセージ</a></li>
          <li><a href="https://b-light-group.co.jp/b-light-group.html">ビーライトグループとは</a></li>
          <li><a href="https://b-light-group.co.jp/about.html">会社概要</a></li>
          <li><a href="https://b-light-group.co.jp/location.html">事業所一覧</a></li>
          <li><a href="https://b-light-group.co.jp/contact.html">お問い合わせ</a></li>
        </ul>
      </div>
      <div class="col-6 col-md-3">
        <h5>グループ会社</h5>
        <ul class="list-unstyled text-small">
          <li><a href="https://b-light-group.co.jp">株式会社ビーライトグループ</a></li>
          <li><a href="http://b-light.co.jp/">株式会社ビーライト</a></li>
          <li><a href="https://b-light-neo.co.jp">株式会社ビーライトネオ</a></li>
          <li><a href="https://b-solar.jp">株式会社ビーライトソーラー</a></li>
          <li><a href="https://b-premium.co.jp">株式会社ビーライトプレミアム</a></li>
          <li><a href="http://solutions.b-light.co.jp/">株式会社ビーライトソリューションズ</a></li>
        </ul>
      </div>
      <div class="col-6 col-md-2">
        <h5>事業案内</h5>
        <ul class="list-unstyled text-small">
          <li><a href="http://b-light.co.jp/construction.html">設備工事・設計施工事業</a></li>
          <li><a href="https://b-light-neo.co.jp/aliance.html">アライアンス事業</a></li>
          <li><a href="https://b-light-neo.co.jp/o_m.html">再生エネルギーO&M事業</a></li>
          <li><a href="https://b-premium.co.jp#develop">ランドシステム事業</a></li>
          <li><a href="https://b-renovation.co.jp">住宅再生事業</a></li>
          <li><a href="https://b-solar.jp">再生可能エネルギー事業</a></li>
          <li class="none">医療コンサルティング事業</li>
        </ul>
      </div>
      <div class="col-6 col-md-2">
        <h5>採用情報</h5>
        <ul class="list-unstyled text-small">
          <li><a href="https://recruitment.b-light-group.co.jp/">新卒採用</a></li>
          <li class="none">中途採用</li>
          <li class="none">インターン・アルバイト</li>
          <li class="none">エントリーはこちら</li>
        </ul>
      </div>

    </div>
  </footer>
</body>

</html>
