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
                <br />
                <div class="card card-plain card-blog">
                  <div class="row">
                    <!-- end card -->
                    <div class="col-12">
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
  <!-- /perspective -->
  <script src="./assets/js/classie.js"></script>
  <script src="./assets/js/menu.js"></script>
  <script>
    new WOW().init();
  </script>
</body>
</html>
