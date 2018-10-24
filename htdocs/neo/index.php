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
<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=10">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="icon" href="img/favicon.ico">
    <title>株式会社ビーライトネオ</title>
    <!-- BootstrapのCSS読み込み -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/megamenu.js"></script>
    <script src="js/fadein.js"></script>
    <link href="css/index/custom.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
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

  </head>


  <body>
    <div class="menu-container">
      <div class="menu">
        <ul>
          <li class="logo"><a href="index.php" style="padding:0px;"><img alt="ブランド" src="img/logo1.png" width="300" height="80" class="logo"></a></li>
              <li><a href="index.php#concept">コンセプト</a>
              </li>
              <li><a href="index.php#kind">事業内容</a>
                <ul>
                  <li><a href="aliance.html">アライアンス事業</a></li>
                  <li><a href="maintenance.html">メンテナンス事業</a></li>
                  <li><a href="" class="disabled">グローバル事業</a></li>
                </ul>
              </li>
              <li><a href="about.html">会社概要</a>
              </li>
              <li><a href="contact.html">お問い合わせ</a>
              </li>
            </ul>
      </div>
    </div>
    <main role="main">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12 d-none d-lg-block px-0">
            <div class="card border-0">
              <img class="card-img rounded-0" src="img/jumbtron.jpg" alt="カードの画像">
            </div>
          </div>
          <div class="col-12 d-lg-none px-0">
            <div class="card border-0">
              <img class="card-img rounded-0" src="img/res_jumbtron.jpg" alt="カードの画像">
            </div>
          </div>
        </div>
        <div class="row text-center justify-content-center mb-5 py-5">
          <div class="col-12 col-xl-12 text-center fadein text-primary" >
            <h3>CONCEPT</h3>
            <h1>常識と違う創造</h1>
          </div>
          <div class="col-12 col-xl-6 fadein">
            <p>アライアンス事業で業界の課題解決、エネルギー事業で発電所の安全維持及び発展、グローバル事業にて夢の実現を目指した事業を行っております
            関わる全てのお客様の課題解決、また社会課題に寄り添える企業へと成長して参ります。</p>
          </div>
        </div>

        <!-- フィーチャーを開始  500x500-->
        <hr class="featurette-divider">

        <div class="row justify-content-center py-5 bg-light">
          <div class="col-12 text-center" id="kind">
            <h1>ビーライトネオとは</h1>
          </div>
        </div>

        <div class="row justify-content-center py-5 my-5">
          <div class="col-12 col-md-4 bg-light img-fluid pb-5 ">
            <div class="card w-75 h-75 my-1-minus mx-auto">
              <img class="card-img shadow" src="img/card1.jpg" alt="カードの画像">
            </div>
          </div>
          <div class="col-12 col-md-4 bg-light pb-5">
            <h1>アライアンス事業</h1>
            <p>「エンドユーザー至上主義の実現」に向け電気工事事業における全国ネットワークの展開を推進してまいりました。<br>
              電気工事アライアンス事業者の先駆けとして現在100社以上の同業者が在籍しています。</p>
            <a href="aliance.html"><button type="button" class="btn btn-b-neo btn-block badge-pill shadow fadein">アライアンス事業</button></a>
          </div>
        </div>
        <div class="row justify-content-center py-5 my-5">
          <div class="col-12 col-md-4 order-xl-2 bg-light img-fluid pb-5 ">
            <div class="card w-75 h-75 my-2-minus mx-auto">
              <img class="card-img shadow" src="img/card2.jpg" alt="カードの画像">
            </div>
          </div>
          <div class="col-12 col-md-4 bg-light pb-5">
            <h1>エネルギー事業</h1>
            <p>太陽光発電の普及に伴い、最大の発電能力を発揮するために欠かせないO&M(オペレーションアンドメンテナンス)<br>
               太陽光発電の監視保守・管理を請負います。</p>
            <a href="maintenance.html"><button type="button" class="btn  btn-b-neo btn-block badge-pill shadow fadein">メンテナンス事業</button></a>
          </div>
        </div>
        <div class="row justify-content-center py-5 my-5">
          <div class="col-12 col-md-4 bg-light img-fluid pb-5 ">
            <div class="card w-75 h-75 my-1-minus mx-auto">
              <img class="card-img shadow" src="img/card3.jpg" alt="カードの画像">
            </div>
          </div>
          <div class="col-12 col-md-4 bg-light pb-5">
            <h1>グローバル事業</h1>
            <p>創業以来、着々と積み重ねてきた実績を活かし我々の技術をアジアへ展開していきます。日本のソーラーパネルを含む様々な技術を海外に発信し、<br>
              そして 街づくりにも貢献してゆきます。現在、フィリピンを中心に中国など東南アジア圏に進出準備を行っております。</p>
            <button type="button" class="btn btn-b-neo btn-block badge-pill shadow ">coming soon</button>
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
             <div class="col-md-3 float-right"><a href="news.php"><button type="button" class="btn btn-b-neo">一覧</button></a></div>
          </div>
        </div>
      </div>

      </div>
      <!-- /.container -->
      <div class="jumbotron jumbotron-fluid mb-0" id="recruitment">
        <div class="container">
          <div class="row py-5 justify-content-center">
            <!-- /採用情報 -->
            <div class="col-12 col-xl-12 text-center my-xl-5 text-white">
              <h1 class="display-4 font-weight-bold text-white">RECRUITMENT</h1>
            </div>
            <div class="col-12 text-white fadein text-center">
              <p>後世に継ぐ会社を目指して、次世代を担う若い人材を積極採用しています。<br> 建設業界に少しでも新しい風を吹かせ影響を与えたいと思える方をお待ちしています。
              </p>
            </div>
            <div class="col-lg-3 my-xl-5 mx-4 my-3 text-center">
              <button type="button" class=" d-inline-block shadow fadein btn-lg btn-block badge-pill btn-outline-white disabled">インターンシップ</button>
            </div>
            <div class="col-lg-3 my-xl-5 mx-4 my-3 text-center">
              <a href="https://recruitment.b-light-group.co.jp/"><button type="button" class="btn d-inline-block shadow fadein btn-lg btn-block badge-pill btn-outline-white">新卒採用</button></a>
            </div>
            <div class="col-lg-3 my-xl-5 mx-4 my-3 text-center">
              <button type="button" class=" d-inline-block shadow fadein btn-lg btn-block badge-pill btn-outline-white disabled">中途採用</button>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer class="pt-4 p-3 p-md-5 px-auto">
      <div class="row">
        <div class="col-12 col-lg-3 text-center">
          <img class="mb-2" src="img/logo2.png" alt="400" width="300" height="">
          <small class="d-block mb-3 text-center">&copy; 2017-2018</small>
        </div>
        <div class="col-6 col-md-2">
          <h5>企業情報</h5>
          <ul class="list-unstyled text-small">
            <li><a href="https://b-light-group.co.jp/message.html">コーポレートメッセージ</a></li>
            <li><a href="https://b-light-group.co.jp/b-light-group.html">ビーライトグループとは</a></li>
            <li><a href="about.html">会社概要</a></li>
            <li><a href="https://b-light-group.co.jp/location.html">事業所一覧</a></li>
            <li><a href="contact.html">お問い合わせ</a></li>
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
            <li><a href="https://b-solar.jp">メンテナンス事業</a></li>
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
    </footer>  </body>

</html>
