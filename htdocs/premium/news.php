<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
  <title>お知らせ一覧/株式会社ビーライトプレミアム</title>
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



/* /Pager style */
</style>

<script type="text/javascript">
<!--
function openwin(url) {//PC用ポップアップ。ウインドウの幅、高さなど自由に編集できます（ポップアップで開く場合のみ）
 wn = window.open(url, 'win','width=680,height=550,status=no,location=no,scrollbars=yes,directories=no,menubar=no,resizable=no,toolbar=no');wn.focus();
}
-->
</script>
<!--▲▲CSSとポップアップ用JS。既存ページ埋め込み時　要コピペ（head部分）▲▲-->

</head>
<?php //▼▼ 既存ページヘ埋め込み時はまるっとコピペ下さい （この行も含みページ最上部に）※.phpでかつUTF-8のページのみ可▼▼
//※逆にこのページに対して既存のページのhtmlを記述する形でももちろんOKです。
//----------------------------------------------------------------------
// ページング付き一覧ページ（投稿がどんなに増えても自動でページングを調整します）
// 設定ファイルの読み込みとページ独自設定
//----------------------------------------------------------------------
include_once("./pkobo_news/admin/include/config.php");//（必要に応じてパスは適宜変更下さい）
$img_updir = './pkobo_news/upload';//画像保存パス（必要に応じてパスは適宜変更下さい）

/* ▽オプション設定▽ */
//※1ページあたりの表示件数などは設定ファイルで指定できます（デフォルトは20件）

//本文の抜粋を表示するかどうか（0=しない、1=する）
$commentDsp = 0;

//本文を抜粋表示する場合の表示文字数 （単位はバイト。全角文字は「2バイト」で1文字となります。また末尾の文字「...」も含みます）
//※htmlタグは削除されます「0」にすれば全文をhtmlもそのままで表示します。（レイアウトに問題が出る可能性があるのでオススメしません）
$commentNum = 200;

//サムネイルを表示するか（0=しない、1=する）※アップファイルの1枚目が画像の場合のみ有効
$dspThumbNail = 0;

//表示するカテゴリを指定（指定なし（空）の場合は全件表示 ※デフォルト）
//このページで特定カテゴリのみ表示したい場合、0からの番号を指定下さい。 （1番目が0，2番目が1になるので注意）
//要するに複数のカテゴリがある場合でそれぞれ別々のファイルで表示したい場合用です
//このファイルを複製すればOKです（カテゴリごとにデザインを変えたい場合など）
//例　$category = '1'; ※この場合カテゴリ番号「1」（設定ファイルでの2番目）の記事のみが表示されます
$category = '';
//またはURLのパラメータでも指定可能です。番号ルールは↑と同じです。例 news.php?cat=0 や news.php?cat=1 とするだけです
//1ファイルでパラメータを変えるだけでそれぞれのカテゴリを表示できるので便利です。（全カテゴリでデザインは共通で良い場合）


//----------------------------------------------------------------------
// 設定ファイルの読み込みとページ独自設定
//----------------------------------------------------------------------
$getFormatDataArr = getLines2DspData($file_path,$img_updir,$config,'',$category);//（変更不可）
$pagerRes = pager_dsp($getFormatDataArr,$pagelength,$pagerDispLength,$config['encodingType']);//ページャー生成（変更不可）
$pagerDsp = (count($getFormatDataArr) > $pagelength) ? '<p class="pager">'.$pagerRes['dsp'].'</p>' : '';//ページャー用タグセット（変更不可）

//▲▲ コピペここまで ▲▲（この行も含む）?>
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
	<main class="role">
		<div class="row">
			<div class="col-md-12 col-md text-center">
				<div class="row text-center justify-content-center mb-3 py-5">
					<h1 class="col-8 text-center">お知らせ一覧</h1></div>
					<div class="container justify-content-center bg-light pt-5">
						<!--▼▼既存ページ埋め込み時はここから以下をコピーして任意の場所に貼り付けてください（html部は自由に編集可。不要なものは削除可です）▼▼-->
						<div id="newsWrap col-md-6 offset-md-3">
						<?php echo $pagerDsp;//ページャー表示?>

						<ul id="newsList" class="list-unstyled">

						<?php if(!$copyright){echo $warningMesse;exit;}else{for($i = $pagerRes['index']; ($i-$pagerRes['index']) < $pagelength; $i++){if(!empty($getFormatDataArr[$i])){$data=$getFormatDataArr[$i];?>

						<li id="postID_<?php echo $data['id'];?>" class="cat-<?php echo $data['categoryNum'];?> clearfix h5 mb-1">
						<span class="up_ymd"><?php echo $data['up_ymd'];//日付表示?></span>
						<?php if(!empty($data['category'])) echo '<span class="catName">'.$data['category'].'</span>';//カテゴリ名表示?>
            <br>
						<span class="title"><?php echo $data['title'];//タイトル表示?></span>
						<?php if($data['newmark'] == 1) echo ' <span class="newMark">New!</span>';//New表示。タグ変更可（表示期間は設定ファイルで）?>

						<!--　サムネイルと本文表示（不要な場合削除OK）-->
						<?php if(dspThumb($data) || ($commentDsp == 1 && !empty($data['comment'][0]))){ ?>
						<div class="clearfix">
						<span class="thumbNailWrap"><?php echo (dspThumb($data)) ? dspThumb($data,100) : '　';//サムネイル表示（数字は表示幅）サムネイルが無い場合には空白を入れておく（NoPhotoなどのimg画像でもOKです）?></span>
						<span class="comment"><?php if($commentDsp == 1) echo str2Format($data['comment'],$commentNum,$config['encodingType']);//本文抜粋表示。表示する設定の場合のみ?></span>
						</div>
						<?php } ?>
						<!--　/サムネイルと本文表示（不要な場合削除OK）-->

						</li>
            <hr class="col-md-10 my-3">

						<?php } } ?>

						</ul>

						<?php echo $pagerDsp;//ページャー表示?>
						</div>
						<?php echo $copyright;}//著作権表記削除不可?>

						<!--▲▲既存ページ埋め込み時　コピーここまで▲▲-->

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
					<li class="none">中途採用</li>
					<li class="none">インターン・アルバイト</li>
					<li class="none">エントリーはこちら</li>
				</ul>
			</div>

		</div>
	</footer>
</body>
</html>
