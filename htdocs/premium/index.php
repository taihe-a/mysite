<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=10">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link rel="icon" href="img/favicon.ico">
  <meta name="robots" content="index" />
  <meta name="keywords" content="ビーライトグループ,ビーライト,ビーライトソーラー,ビーライトプレミアム,ビーライトソリューション,FC,加盟店募集,コンビニ経営,店舗経営者,店舗経営者 リノベーション　ビーリノベーション" />
  <meta name="description" content="株式会社ビーライトプレミアムは、CVSやチェーン店舗などの出店を総合的にサポートいたします。用事の提案から施設の設置・管理・施工に至るまでをトータルでご提案します。" />



  <meta property="og:title" content="CVSやチェーン店舗などの出店を総合的にサポート / 株式会社ビーライトプレミアム" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="http://b-premium.co.jp//img/logo1.png" />
  <meta property="og:url" content="http://b-premium.co.jp/index.php" />
  <meta property="og:site_name" content="株式会社ビーライトプレミアム" />
  <meta property="og:description" content="株式会社ビーライトプレミアムは、CVSやチェーン店舗などの出店を総合的にサポートいたします。用事の提案から施設の設置・管理・施工に至るまでをトータルでご提案します。" />
  <link rel="canonical" href="http://b-premium.co.jp/index.php" />
  <title>株式会社ビーライトプレミアム</title>
  <!-- BootstrapのCSS読み込み -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- jQuery読み込み -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- BootstrapのJS読み込み -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/megamenu.js"></script>
  <script src="js/fadein.js"></script>
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/index.css" rel="stylesheet">
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
    <div class="menu">
      <ul>
        <li class="logo"><a href="index.php" style="padding:0px;"><img alt="ブランド" src="img/logo1.png" width="300" height="80" class="logo"></a></li>
        <li><a href="#concept">コンセプト</a></li>
        <li><a href="#kind">事業内容</a>
          <ul>
            <li><a href="#develop">ランドシステム事業</a></li>
            <li><a href="https://b-renovation.co.jp">リノベーション事業</a></li>
          </ul>
        </li>
        <li><a href="about.html">会社概要</a>
        </li>
        <li><a href="contact.html">お問い合わせ</a>
        </li>
      </ul>
    </div>
  <main role="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12  d-none d-lg-block px-0">
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
      <div id="concept" class="row text-center justify-content-center mb-5 py-5">
        <div class="col-12 col-xl-12 text-center fadein text-primary">
          <h3>CONCEPT</h3>
          <h1>お客様に信頼を頂けるご提案やサービスを提供する。</h1>
        </div>
        <div class="col-12 col-xl-6 fadein">
          <p>ビーライトプレミアムでは新店舗開発をお考えのお客様に対して企画提案・行政上の許認可申請・設計・建築施工までワンストップサービスをご提供致します。
          </p>
        </div>
      </div>
      <hr class="featurette-divider">

            <div class="row justify-content-center py-5 bg-light">
              <div class="col-12 text-center" id="kind">
                <h1>ビーライトプレミアムとは</h1>
              </div>
            </div>

            <div class="row justify-content-center py-5 my-5">
              <div class="col-12 col-md-4 bg-light img-fluid pb-5 ">
                <div class="card w-75 h-75 my-5-minus mx-auto">
                  <img class="card-img shadow" src="img/card1.jpg" alt="カードの画像">
                </div>
              </div>
              <div class="col-12 col-md-4 bg-light pb-5">
                <h1>ランドシステム事業</h1>
                <p>新店舗開発のお客様に対して企画提案・行政上の許認可申請・設計・施工までワンストップサービスを提供いたします。</p>
                <a href="#develop"><button type="button" class="btn btn-premium  btn-block badge-pill shadow fadein">ランドシステム事業</button></a>
              </div>
            </div>
            <div class="row justify-content-center py-5 my-5">
              <div class="col-12 col-md-4 order-xl-2 bg-light img-fluid pb-5 ">
                <div class="card w-75 h-75 my-3-minus mx-auto">
                  <img class="card-img shadow" src="img/card2.jpg" alt="カードの画像">
                </div>
              </div>
              <div class="col-12 col-md-4 bg-light pb-5">
                <h1>リノベーション事業</h1>
                <p>リノベーション住宅で夢のようなマイホームを提供することをコンセプトに<br>
                  東海地域で事業展開しております。住宅を通して快適・安全・安心を提供いたします。</p>
                <a href="https://b-renovation.co.jp"><button type="button" class="btn  btn-premium  btn-block badge-pill shadow fadein">リノベーション事業</button></a>
              </div>
            </div>
      <!-- フィーチャーを開始  500x500-->
      <hr class="featurette-divider">

      <div class="row justify-content-center py-5" id="develop">
        <div class="col-12 text-center">
        <h1 >ランドシステム・総合建築</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12 justify-content-center">
          <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item">
              <a href="#tab1" class="nav-link active" data-toggle="tab">出店用地・物件をお探しのお客様</a>
            </li>
            <li class="nav-item">
              <a href="#tab2" class="nav-link" data-toggle="tab">土地活用をお考えの土地所有者様</a>
            </li>

          </ul>
          <div class="tab-content">
            <div id="tab1" class="tab-pane active">
              <div class="row p-5">
                <div class="col-12 col-md-12">
                  <h3>商業施設・医療施設開発担当者様へ</h3>
                  <p>東海エリアに特化して、開発担当者様がお探しの土地を探し、店舗開発から開店までをサポートいたします。
                  </p>
                  <p>弊社は、開発担当者様の要望に合わせて、立地提案から地主様との条件折衝、契約締結まで直接交渉を行います。 又、ご指定していただいた土地も弊社にて迅速に交渉対応いたします。 賃貸借契約締結後は、店舗の企画立案・行政上の許認可申請・設計・建築施工まで、一気通貫でサポートいたします。
                  </p>
                </div>
                <div class="col-12 col-md-6 my-2">
                  <div class="ribbon_box text-center">
                    <h3 class="ribbon18">1</h3>
                    <h4>ご依頼・ご相談</h4>
                    <p>まずはお客様のご希望や悩みをお聞かせください。</p>
                    <p>店舗の出店内容や・立地の希望・出店に係る資金計画をご相談ください</p>
                  </div>
                </div>
                <div class="col-12 col-md-6 my-2">
                  <div class="ribbon_box text-center">
                    <h3 class="ribbon18">2</h3>
                    <h4>物件候補探し・交渉</h4>
                    <p>お客様の希望にそって、土地の候補を弊社で探します。</p>
                    <p>お客様でご希望の土地がございましたら、その土地のオーナー様と賃貸借の交渉をいたします</p>
                  </div>
                </div>
                <div class="col-12 col-md-6 my-2">
                  <div class="ribbon_box text-center">
                    <h3 class="ribbon18">3</h3>
                    <h4>プランの設計</h4>
                    <p>物件候補が決まりましたら、計画にそって賃貸借契約までの手続きのサポートをいたします。</p>
                  </div>
                </div>
                <div class="col-12 col-md-6 my-2">
                  <div class="ribbon_box text-center">
                    <h3 class="ribbon18">4</h3>
                    <h4>開店までのサポート</h4>
                    <p>実際の店舗の企画や諸々の認可の申請、建物の設計施工事業へ移行し、お客様の店舗開業までをサポートいたします。</p>
                  </div>
                </div>
                <div class="col-12 my-2">
                  <div class="ribbon_box text-center">
                    <h3 class="ribbon18">5</h3>
                    <h4>開店後</h4>
                    <p>実際に開店された後も、総合的にお客様のビジネスをサポートいたします。</p>
                  </div>
                </div>
            </div>
          </div>
            <div id="tab2" class="tab-pane">
              <div class="row p-5">
                <div class="col-12 col-md-12">
                  <h3>事業計画や遊休地の活用など、土地活用をご検討の土地所有者様へ</h3>
                  <p>オーナー様の遊休地や空き店舗がございましたら、ぜひ弊社へご相談ください。
                  </p>
                  <p>
                 お客様の眠っている資産を「活かすための資産」にするために、活用のための立案から実現までをしっかりサポートさせていただきます。
                  </p>
                  <p>
                  弊社は、東海エリアに土地資産活用の実績が多数ございます。
                  </p>
                  <p>
                  東海エリアに於いて
                  <br>・市街地ならば最適な活用プランは何か？
                  <br>・郊外ならば最適な活用プランは何か？
                  <br>・幹線道路沿いならば最適な活用プランは何か？
                  <br>そのエリアの魅力や効果が最大限に生かされるご提案をさせていただきます
                  </p>
                </div>
                <div class="col-12 col-md-6 my-2">
                  <div class="ribbon_box text-center">
                    <h3 class="ribbon18">1</h3>
                    <h4>ご依頼・ご相談</h4>
                    <p>まずはお客様のご希望や悩みをお聞かせください。</p>
                    <p>出店にベストなテナントの提案、契約形態の提案をさせていただきます。</p>
                  </div>
                </div>
                <div class="col-12 col-md-6 my-2">
                  <div class="ribbon_box text-center">
                    <h3 class="ribbon18">2</h3>
                    <h4>賃貸条件の提案</h4>
                    <p>お客様の希望に沿いながら、賃料・保証金等の経済条件、その他の契約条件を詰めていきます。</p>
                  </div>
                </div>
                <div class="col-12 col-md-6 my-2">
                  <div class="ribbon_box text-center">
                    <h3 class="ribbon18">3</h3>
                    <h4>賃貸借契約の締結</h4>
                    <p>借主に対しての賃貸借契約、ほか法務手続きを進めてまいります。</p>
                  </div>
                </div>
                <div class="col-12 col-md-6 my-2">
                  <div class="ribbon_box text-center">
                    <h3 class="ribbon18">4</h3>
                    <h4>ご契約後</h4>
                    <p>ご契約後もお客様の賃貸不動産に関して、最適な管理をサポートさせていただきます。</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <hr class="featurette-divider">

      <div class="row text-center justify-content-center py-5 my-4">
        <div class="col-12 text-center fadein text-primary">
          <h1>ビーライトプレミアムが選ばれる理由</h1>
        </div>
        <div class="col-12 col-xl-6 fadein">
          <h5>土地探しから店舗の企画立案・行政上の許認可申請・設計・建築施工まで、ワンストップサービスを提供致します。
            また東海地域に特化しているため、地域に密着した
          アドバイス、そして、グループ企業の多くの建築実績があるためハイクオリティの施工を行います。
          </h5>
        </div>
      </div>
      <div class="row my-5">
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
           <div class="col-md-3 float-right"><a href="news.php"><button type="button" class="btn btn-premium">一覧</button></a></div>
        </div>
      </div>
      <!-- /フィーチャーを終了 -->
    </div>
    <!--選ばれる理由 -->

    <!-- /.container -->
    <div class="jumbotron jumbotron-fluid mb-0 mt-4">
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
            <button type="button" class="btn d-inline-block shadow fadein btn-lg btn-block badge-pill btn-outline-white disabled scrollin">インターンシップ</button>
          </div>
          <div class="col-lg-3 my-xl-5 mx-4 my-3 text-center">
            <a href="https://recruitment.b-light-group.co.jp"> <button type="button" class="btn d-inline-block shadow fadein btn-lg btn-block badge-pill btn-outline-white scrollin">新卒採用</button></a>
          </div>
          <div class="col-lg-3 my-xl-5 mx-4 my-3 text-center">
            <button type="button" class="btn d-inline-block shadow fadein btn-lg btn-block badge-pill btn-outline-white disabled scrollin">中途採用</button>
          </div>
        </div>
      </div>
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
          <li class="none">中途採用</a></li>
          <li class="none">インターン・アルバイト</li>
          <li class="none">エントリーはこちら</li>
        </ul>
      </div>

    </div>
  </footer>
</body>

</html>
