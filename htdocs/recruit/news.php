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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="https://recruitment.b-light-group.co.jp/assets/img/favicon.ico" />
	<meta http-equiv="X-UA-Compatible" content="IE=10,chrome=1" />
	<meta name="robots" content="index" />
	<meta name="keywords" content="株式会社ビーライトグループ,ビーライト,太陽光発電,メンテナンス,愛知県,名古屋市,コンサルタント,就職,施工管理" />
	<meta name="description" content="" />



	<meta property="og:title" content="株式会社ビーライトグループ採用ページ" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="https://recruitment.b-light-group.co.jp/assets/img/message1.png" />
	<meta property="og:url" content="https://recruitment.b-light-group.co.jp/" />
	<meta property="og:site_name" content="株式会社ビーライトグループ採用ページ" />
	<meta property="og:description" content="電気のあらゆることなら、安心・安全の株式会社ビーライトグループへ。株式会社ビーライトグループは、ビーライトグループ企業運営に関する指導・統括・コンサルタント事業を行うホールディングスカンパニーです。電気設備の設計施工やアライアンス事業、太陽光発電システムの施工からメンテナンスなど、電気設備に関するインフラを総合的に受託いたします。" />
	<meta name="Description" content="<?php echo h(strip_tags($dataArr['title']));//タイトルを表示（必要に応じてコピペ下さい）?>" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<link rel="canonical" href="https://recruitment.b-light-group.co.jp/" />
	<title><?php echo h(strip_tags($dataArr['title']));//タイトルを表示（必要に応じてコピペ下さい）?>｜詳細ページ</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
	<!-- CSS Files -->
	<link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="./assets/css/paper-kit.css?v=2.2.1" rel="stylesheet" />
	<link href="./assets/css/nav.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="./assets/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="./assets/css/nav1.css" />
	<link rel="stylesheet" type="text/css" href="./assets/css/component.css" />
	<link rel="stylesheet" type="text/css" href="./assets/css/custom.css" />
	<link rel="stylesheet" type="text/css" href="./assets/demo/demo.css" />
	<script src="./assets/js/modernizr.custom.25376.js" type="text/javascript"></script>
	<script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
	<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/wow.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
	<!-- Plugins -->

	<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
	<script src="assets/js/plugins/bootstrap-switch.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/plugins/nouislider.js"></script>

	<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
	<script src="assets/js/plugins/bootstrap-selectpicker.js"></script>

	<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
	<script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
<!--▼▼CSS。既存ページヘの埋め込み時はコピペ下さい（head部分に）▼▼-->
<style type="text/css">
/* CSSは必要最低限しか指定してませんのでお好みで（もちろん外部化OK） */
</style>
<!--▲▲CSS。既存ページヘの埋め込み時　コピペここまで（head部分に）▲▲-->

<!--▼▼CSSとポップアップ用JS。既存ページ埋め込み時　要コピペ（head部分）▼▼-->
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
<body class="presentation-page sidebar-collapse">
  <div id="perspective" class="perspective effect-moveleft">
    <div class="container-fluid">
      <div class="wrapper">
        <!--     *********     BLOGS 1      *********      -->
        <div class="blog-1" id="blog-1">
          <div class="container-fluid bg-gray">
            <div class="row">
              <div class="col-md-10 ml-auto mr-auto">
                <div class="d-flex flex-row justify-content-between sticky-top">
                  <a href="index.html"><button class="btn btn-move-left btn-round btn-primary d-inline-block"><i class="nc-icon nc-minimal-left"></i> Back</button></a>
              <p><button id="showMenu" class="btn-primary d-inline-block">Menu</button></p>
                </div>
                <h2 class="title">News</h2>
                <br />
                <div class="card card-plain card-blog">
                  <div class="row">
                    <!-- end card -->
                    <div class="col-12">
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

                <!-- 斎藤さん-->
              </div>
            </div>
          </div>
        </div>
        <!--     *********    END BLOGS 1      *********      -->
        <footer class="footer footer-gray footer-big">
          <div class="container">
            <div class="row">
              <div class="col-md-2 text-center col-sm-3 col-12 ml-auto mr-auto">
                <a href="index.html"><h4 class="lead text-center">B-Light-Group<br>recruitment</h4></a>
              </div>
              <div class="col-md-9 col-sm-9 col-12 ml-auto mr-auto">
                <div class="row">
                  <div class="col-md-2 col-sm-2 col-6">
                    <div class="links">
                      <ul class="uppercase-links stacked-links">
                        <li>
                          <a href="index.html" target="_blank">採用トップ</a>
                        </li>
                        <li>
                          <a href="messsge.html" target="_blank">メッセージ</a>
                        </li>
                        <li>
                          <a href="infometion.html" target="_blank">ビジョン</a>
                        </li>
												<li>
													<a href="recruit.html" target="_blank">募集要項</a>
												</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-6">
                    <div class="links">
                      <ul class="uppercase-links stacked-links">
                        <li>
                          <a>グループ会社</a>
                        </li>
                        <li>
                          <a href="http://b-light.co.jp" target="_blank">株式会社ビーライト</a>
                        </li>
                        <li>
                          <a href="https://b-light-neo.co.jp" target="_blank">株式会社ビーライトネオ</a>
                        </li>
												<li>
                          <a href="https://b-premium.co.jp" target="_blank">株式会社ビーライトプレミアム</a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-3 col-6">
                    <div class="links">
                      <ul class="uppercase-links stacked-links">
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F%25E3%2583%2593%25E3%2583%25BC%25E3%2583%25A9%25E3%2582%25A4%25E3%2583%2588%25E3%2582%25B0%25E3%2583%25AB%25E3%2583%25BC%25E3%2583%2597-%25E6%2596%25B0%25E5%258D%2592%25E6%258E%25A1%25E7%2594%25A8-264969910774109%2F&tabs=timeline&width=400px&height=200px&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=258042521710074" width="400px" height="200px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-3 col-6">
                    <div class="links">

                    </div>
                  </div>
                </div>
                <hr />
                <div class="copyright">
                  <div class="pull-left">
                    &copy;
                    <script>
                      document.write(new Date().getFullYear())
                    </script> Copyright © B-Light-Group Inc. All Rights Reserved.
                  </div>
                  <div class="links pull-right">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <!-- wrapper -->
    </div>
    <!-- /container -->
		<nav class="outer-nav right vertical">
			<a href="index.html">Home</a>
			<a href="news.php">News</a>
			<a href="message.html">TopMessage</a>
			<a href="recruit.html">Recruitment</a>
			<a href="interview.html">Interview</a>
			<a href="infometion.html#company-info">Information</a>
			<a href="https://b-light-group.co.jp">B-Light-Group</a>
			<a href="contact.html">Contact</a>
		</nav>
  </div>
  <!-- /perspective -->
  <script src="./assets/js/classie.js"></script>
  <script src="./assets/js/menu.js"></script>
  <script>
    new WOW().init();
  </script>
</body>

</html>
