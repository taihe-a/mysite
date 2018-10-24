<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=10">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta name="keywords" content="ビーライトソーラー,太陽光発電, メガソーラー, 発電量診断, 定期メンテナンス, ソーラーメンテナンス" />
  <meta name="description" content="株式会社ビーライトソーラーはご所有の太陽光発電所を常に最適最善な状態に保ち、最大の発電能力を発揮させるためのメンテナンスを行う専門業者です。電気事業法に基づく法定保安管理業務を基本としたプランを提供いたします。全国エリアでご対応が可能です。是非ご相談ください。電話番号052-861-3266。" />
  <meta property="og:title" content="株式会社ビーライトーソーラー" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="http://b-solar.jp/img/logo1.png" />
  <meta property="og:url" content="http://b-solar.jp/index.html" />
  <meta property="og:site_name" content="株式会社ビーライトソーラー" />
  <meta property="og:description" content="株式会社ビーライトソーラーはご所有の太陽光発電所を常に最適最善な状態に保ち、最大の発電能力を発揮させるためのメンテナンスを行う専門業者です。電気事業法に基づく法定保安管理業務を基本としたプランを提供いたします。全国エリアでご対応が可能です。是非ご相談ください。電話番号052-861-3266。" />
  <link rel="canonical" href="http://b-solar.jp/index.html" />
  <link rel="icon" href="img/favicon.ico">
  <title>株式会社ビーライトソーラー</title>
  <!-- BootstrapのCSS読み込み -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery読み込み -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- BootstrapのJS読み込み -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/megamenu.js"></script>
  <link href="css/about.css" rel="stylesheet">
  <link href="css/megamenu.css" rel="stylesheet">
  <link href="css/component.css" rel="stylesheet">
  <link href="css/footer.css" rel="stylesheet">
  <link rel="stylesheet" href="css/ionicons.min.css">
  <link rel="stylesheet" type="text/css" href="slick/slick.css">
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
  <script src="js/slick.min.js"></script>
  <link href="css/foot.css" rel="stylesheet">
  <link rel="stylesheet" href="css/fadein.css">
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
        <li class="logo"><a href="index.php" style="padding:0px;"><img alt="ブランド" src="img/logo1.png" width="300" height="80" class="logo"></a></li>
      <li class="float-right"><a href="contact.html">お問い合わせ</a></li>
      </ul>
      <hr class="featurette-divider mt-0 mb-0">
    </div>
  </div>
  <main role="main">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center mt-5 mb-3">
        <h1>事業実績</h1>
      </div>
        <div class="col-12">
          <ul class="slide">
            <li><img src="img/mini1.png" width="200px"></li>
            <li><img src="img/mini2.png" width="200px"></li>
            <li><img src="img/mini3.png" width="200px"></li>
            <li><img src="img/mini4.png" width="200px"></li>
            <li><img src="img/mini5.png" width="200px"></li>
          </ul>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row justify-content-center py-5 bg-light">
          <div class="col-12 text-center" id="kind">
            <h1>事業内容</h1>
            <h5 class="text-center mt-5 ">自然エネルギー発電システムの運営</h5>

          </div>
        </div>
      </div>
      <div class="rowrow justify-content-center py-5 bg-light">
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
           <div class="col-md-3 float-right"><a href="news.php"><button type="button" class="btn btn-solar">一覧</button></a></div>
        </div>
      </div>
      <div class="card shadow mb-5 pl-2 pl-lg-0">
        <div calss="card-body" id="about">
          <div class="row">
            <div class="col-12 col-lg-4 my-sm-3"><img alt="ブランド" src="img/logo1.png" width="300" height="80" class="logo"></div>
            <div class="col-12 col-lg-4">
              <h1 class="text-center my-sm-5"><span class="under">会社概要</span></h1></div>
            <div class="col-12 col-lg-4"></div>
          </div>
          <dl class="row my-sm-5">
            <dt class="col-sm-3"></dt>
            <dt class="col-sm-3">社名</dt>
            <dd class="col-sm-6">株式会社ビーライトソーラー</dd>
            <hr class="col-10 featurette-divider ms-about">
            <dt class="col-sm-3"></dt>
            <dt class="col-sm-3">会社所在地</dt>
            <dd class="col-sm-6">
              <p class="mb-2">〒４５６-００３５</p>
              <p class="mb-0">名古屋市熱田区白鳥３丁目１０番１９号</p>
              <hr class="col-10 featurette-divider ms-about">

              <a href="http://b-light-group.co.jp/location.html"><p class="mb-2">事業所一覧はこちら</p></a>
            </dd>
            <hr class="col-10 featurette-divider ms-about">
            <dt class="col-sm-3"></dt>
            <dt class="col-sm-3">電話番号</dt>
            <dd class="col-sm-6">052-212-5751</dd>
            <hr class="col-10 featurette-divider ms-about">
            <dt class="col-sm-3"></dt>
            <dt class="col-sm-3">設立</dt>
            <dd class="col-sm-6">2013年10月</dd>
            <hr class="col-10 featurette-divider ms-about">
            <dt class="col-sm-3"></dt>
            <dt class="col-sm-3">役員</dt>
            <dd class="col-sm-6">
              <p class="mb-2">代表取締役：若尾　光伸</p>
            </dd>
            <hr class="col-10 featurette-divider ms-about">
            <dt class="col-sm-3"></dt>
            <dt class="col-sm-3">関連会社</dt>
            <dd class="col-sm-6">
              <p class="mb-0">(株)ビーライトグループ</p>
              <p class="mb-0">(株)ビーライト</p>
              <p class="mb-0">(株)ビーライトネオ</p>
              <p class="mb-0">(株)ビーライトプレミアム</p>
              <p class="mb-0">(株)ビーライトソリューションズ</p>
              <p class="mb-0">(株)ビーライト東北</p>
              <p class="mb-0">(有)ビーエルイー</p>
            </dd>
            <hr class="col-10 featurette-divider ms-about">
            <dt class="col-sm-3"></dt>
            <dt class="col-sm-3">事業内容</dt>
            <dd class="col-sm-6">
              <p class="mb-0">自然エネルギーなどによる発電及び電力販売事業</p>
              <p class="mb-0">自然エネルギーなどによる発電システムの企画、コンサルタント、</p>
              <p class="mb-0">運営、保守、管理</p>
              <p class="mb-0">産業用電気器具の販売及び仲介</p>
            </dd>
            <hr class="col-10 featurette-divider ms-about">
          </dl>
        </div>
      </div>
      <div class="google-maps col-xl-12 shadow">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6526.724067797556!2d136.906772!3d35.122638!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60037a1edc8f0c9d%3A0xea30c6318cb5f62e!2z44CSNDU2LTAwMzUg5oSb55-l55yM5ZCN5Y-k5bGL5biC54ax55Sw5Yy655m96bOl77yT5LiB55uu77yR77yQ4oiS77yR77yZ!5e0!3m2!1sja!2sjp!4v1528052468039"
          width="1100" height="450" frameborder="0" style="border:0"></iframe>
      </div>
      <div class="row my-sm-5 shadow border rounded mt-5">
        <h1 class="text-center my-sm-3 col-12"><span class="under">関連会社</span></h1>
          <hr class="col-sm-10 featurette-divider">
        <div class="col-sm-6 col-md-4 my-3 my-xl-5">
          <div class="card img-thumbnail shadow">
            <img class="card-img-top" src="img/about/card1.png" alt="画像">
            <div class="card-body px-2 py-3">
              <h5 class="card-title">B-Light</h5>
              <p class="card-text">設備工事・設計施工事業<br><span>&nbsp;</span></p>
              <p class="mb-0"><a href="http://b-light.co.jp" class="btn btn-solar btn-sm">ホーム</a> <a href="http://b-light.co.jp/about.html" class="btn btn-secondary btn-sm">会社概要</a></p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-sm-6.col-md-3 -->
        <div class="col-sm-6 col-md-4 my-3 my-xl-5">
          <div class="card img-thumbnail shadow">
            <img class="card-img-top" src="img/about/card6.png" alt="画像">
            <div class="card-body px-2 py-3">
              <h5 class="card-title">B-Light-Neo</h5>
              <p class="card-text">アライアンス事業、グローバル事業、エネルギー事業、グループ資材調達</p>
              <p class="mb-0"><a href="http://b-light-neo.co.jp" class="btn btn-solar btn-sm">ホーム</a> <a href="http://b-light-neo.co.jp/about.html" class="btn btn-secondary btn-sm">会社概要</a></p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-sm-6.col-md-3 -->
        <div class="col-sm-6 col-md-4 my-3 my-xl-5">
          <div class="card img-thumbnail shadow">
            <img class="card-img-top" src="img/about/card3.png" alt="画像">
            <div class="card-body px-2 py-3">
              <h5 class="card-title">B-Premium</h5>
              <p class="card-text">ランドシステム事業、リノベーション事業<br><span>&nbsp;</span></p>
              <p class="mb-0"><a href="http://b-premium.co.jp" class="btn btn-solar btn-sm">ホーム</a> <a href="http://b-premium.co.jp/about.html" class="btn btn-secondary btn-sm">会社概要</a></p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-sm-6.col-md-3 -->
        <div class="col-sm-6 col-md-4 my-3 my-xl-5">
          <div class="card img-thumbnail shadow">
            <img class="card-img-top" src="img/about/card7.png" alt="画像">
            <div class="card-body px-2 py-3">
              <h5 class="card-title">B-Solutions</h5>
              <p class="card-text">医療コンサルティング事業 <br>医療機器販売事業</p>
              <p class="mb-0"><button class="btn btn-solar btn-sm">ホーム</button> <a href="http://solutions.b-light.co.jp/" class="btn btn-secondary btn-sm">会社概要</a></p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-sm-6.col-md-3 -->
        <div class="col-sm-6 col-md-4 my-3 my-xl-5">
          <div class="card img-thumbnail shadow">
            <img class="card-img-top" src="img/about/card5.png" alt="画像">
            <div class="card-body px-2 py-3">
              <h5 class="card-title">B-Light-Group</h5>
              <p class="card-text">グループ会社経営<br><span>&nbsp;</span></p>
              <p class="mb-0"><a href="http://b-light-group.co.jp" class="btn btn-solar btn-sm">ホーム</a> <a href="http://b-light-group.co.jp/about.html" class="btn btn-secondary btn-sm">会社概要</a></p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-sm-6.col-md-3 -->
      </div>
      <!-- /.row -->
    </div>

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
          <li><a href="index.php#about">会社概要</a></li>
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
  </footer>
  </div>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>
  <script>
    $(function() {
      $('.slide').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: true,
        dots: true,
        pauseOnHover: true
      });
    });
  </script>
  <script>
    $('.slide').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
  </script>
</body>

</html>
