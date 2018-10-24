<?php //▼▼ 既存ページヘ埋め込み時はまるっとコピペ下さい （この行も含みページ最上部に）※.phpでかつUTF-8のページのみ可▼▼
//※逆にこのページに対して既存のページのhtmlを記述する形でももちろんOKです。
//----------------------------------------------------------------------
// 詳細ページ（ポップアップと兼用）
// 設定ファイルの読み込みとページ独自設定
//----------------------------------------------------------------------
include_once("./pkobo_news/admin/include/config.php");//（必要に応じてパスは適宜変更下さい）
$img_updir = './pkobo_news/upload';//画像保存パス（必要に応じてパスは適宜変更下さい）

$id = (!empty($_GET['id'])) ? h($_GET['id']) : exit('パラメータがありません');
$getFormatDataArr = getLines2DspData($file_path,$img_updir,$config,$id);
$dataArr = (!empty($getFormatDataArr)) ? $getFormatDataArr : exit('データが存在しません');
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
  <title>ニュース/株式会社ビーライトプレミアム</title>
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
  <style type="text/css"></style>
</head>

<body>
  <div class="menu">
    <ul>
      <li class="logo"><a href="index.php" style="padding:0px;"><img alt="ブランド" src="img/logo1.png" width="300" height="80" class="logo"></a></li>
      <li><a href="index.php#concept">コンセプト</a></li>
      <li><a href="index.php#kind">事業内容</a>
        <ul>
          <li><a href="index.php#develop">ランドシステム事業</a></li>
          <li><a href="https://b-renovation.co.jp">リノベーション事業</a></li>
        </ul>
      </li>
      <li><a href="about.html">会社概要</a>
      </li>
      <li><a href="contact.html">お問い合わせ</a>
      </li>
    </ul>
  </div>
  <main role="main" class="border-top">
    <div class="container justify-content-center bg-light pt-5 ">
      <div class="col-md-8 offset-md-2 py-2">

        <?php if(!$copyright){echo $warningMesse;exit;}else{ ?>

        <?php if($config['popupFlag'] == 0){ //ポップアップ表示の場合は表示しない?>
        <div class="pNav"><a href="./">トップページ</a> &gt; <a href="news.php">お知らせ一覧</a> &gt; <?php echo h(strip_tags($dataArr['title']));?></div><!-- パンくずナビ（必要に応じて変更、削除下さい） -->
        <?php } ?>
        <h2 class=""><?php echo h(strip_tags($dataArr['title']));?></h2>
        <div id="up_ymd" class="text-right"><?php echo h($dataArr['up_ymd']);?></div>
        <div id="detail">
        <?php
        for($i=0;$i<=$maxCommentCount;$i++){
        	if(!empty($dataArr['comment'][$i]) || !empty($dataArr['upfile_path'][$i])){

        		//アップファイル表示用のタグをセット。 画像の場合はimgタグ、その他の場合はファイルにリンクする（タグ部分は自由に変更可）
        		$upfileTag = '';//初期化
        		if(!empty($dataArr['upfile_path'][$i])){
        			if($dataArr['file_type'][$i] == 'img'){
        				$upfileTag = '<img src="'.$dataArr['upfile_path'][$i].'?'.uniqid().'" />';//画像の場合のタグ
        			}else{
        				$linkText = (isset($extensionListText[$dataArr['extension'][$i]])) ? $extensionListText[$dataArr['extension'][$i]] : 'アップファイル（'.$dataArr['extension'][$i].'）';//リンクテキストをセット
        				$upfileTag = '<a href="'.$dataArr['upfile_path'][$i].'" target="_blank">'.$linkText.'</a>';//画像以外の場合のタグ
        			}
        			$upfileTag = '<div class="detailUpfile">'.$upfileTag.'</div>';
        		}
        ?>
        <div class="detailText px-3 my-3"><?php echo (!empty($dataArr['comment'][$i])) ? $dataArr['comment'][$i] : '';?></div>
        <?php echo $upfileTag;?>
        <?php
        	}
        }
        ?>
        </div>
        <div class="backORcloseBtn text-right"><?php echo ($config['popupFlag'] == 1) ? '<a href="javascript:window.close()">× 閉じる</a>' : '<a href="javascript:history.back()">&lt;&lt;戻る</a>';//CLOSEボタン、または戻るボタン?></div>
        <?php echo $copyright;}//著作権表記削除不可?>

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
          <li class="none">中途採用</li>
          <li class="none">インターン・アルバイト</li>
          <li class="none">エントリーはこちら</li>
        </ul>
      </div>

    </div>
  </footer>
  </div>
</body>

</html>
