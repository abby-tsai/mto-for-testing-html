<!doctype html>
<html>

<head>
	<?php include_once("at_include/CG_config.php"); ?>
	<title><?php echo $webTitle; ?></title>
	<meta name="keywords" content="<?php echo $MetaCopyright; ?>" />
	<!-- 網頁描述 -->
	<meta name="description" content="<?php echo $MetaDescription; ?>" />
	<meta name="Author" content="<?php echo $MetaAuthor; ?>" />
	<meta name="copyright" content="<?php echo $MetaCopyright; ?>">
	<!-- iCon圖示 -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- FB  -->
	<meta property="og:title" content="<?php echo $webTitle; ?>" />
	<meta property="og:url" content="<?php echo $URL; ?>" />
	<meta property="og:image" content="<?php echo $Meta_ogImg_0; ?>" />
	<meta property="og:description" content="<?php echo $MetaDescription; ?>" />
	<meta property="fb:app_id" content="<?php echo $FB_ID; ?>" />
	<!-- CSS -->
	<link href="css/at_cage.css" rel="stylesheet" type="text/css" />
	<link href="css/basic_findtheone.css" rel="stylesheet" type="text/css" />
	<?php include_once("at_include/inc_facebook.php"); ?>
	<!-- Plug -->
	<link href="css/cropper.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="member">
	<div id="fb-root"></div>
	<?php include_once("at_include/header.php"); ?>
	<div id="main">
		<h2>我的檔案</h2>
		<div class="memberCount">

			<div class="mt-10 dis-none dis-sp-block"></div>
			<div class="topNote ta-C">
				<p>
					<!-- 女-文案 -->
					自介如何幫你更容易找到合適對象？
					<span id="noteBtn" class="note-btn">
						<img src="images/abby/5/question-icon.png" alt="">
					</span>
				</p>
				<div id="noteContent" class="note-content">
					<!-- 女-文案 -->
					<p>
						根據統計，<span class="color-red">找認真關係、有深度的男生，也會想認識妳的內在和溫度。</span>透過<span class="color-red">完整自我介紹</span>和<span class="color-red">多張不同面貌的照片</span>，大方展現你自己，不再錯過適合你的「好男人」！
					</p>
					<button type="button" id="closeBtn" class="close-btn">
						<img src="images/abby/5/close-icon.png" alt="">
					</button>
				</div>
			</div>
			<div class="mt-20"></div>

			<div class="memberPad clear">
				<div class="myphoto">
					<h2>照片管理</h2>
					<p class="task-text">
						<!-- 如果任務一、任務二完成，請程式在.task-text內的span標籤加上css .complete 作顯示和隱藏的切換 -->
						<span class="">(任務一：上傳2張個人照)</span>
					</p>
					<div class="myCover">
						<img alt="" src="images/user_photo_default_l.png" />
						<p>大頭照</p>
						<i>看不到臉</i>
						<span class="suggest-box">
							<span class="icon">
								<span class="text">頭占比過大，全身/半身照尤佳</span>
							</span>
						</span>
						<a href="uploadpicture.php" class="camera"></a>
					</div>
					<div class="uploadphoto">
						<ul>
							<li><a href="uploadpicture.php"></a></li>
							<li><img alt="" src="images/user_default_0.jpg" /><a class="editer"></a><i>使用不雅照片</i>
								<span class="suggest-box">
									<span class="icon">
										<span class="text">頭占比過大，全身/半身照尤佳</span>
									</span>
								</span>
							</li>
							<li><img alt="" src="images/portrait-img01.jpg" /><a class="editer"></a>
								<span class="suggest-box">
									<span class="icon">
										<span class="text">頭占比過大，全身/半身照尤佳</span>
									</span>
								</span>
							</li>
						</ul>
						<ul>
							<li><img alt="" src="images/portrait-img02.jpg" /><a class="editer"></a>
								<span class="suggest-box">
									<span class="icon">
										<span class="text">頭占比過大，全身/半身照尤佳</span>
									</span>
								</span>
							</li>
							<li><img alt="" src="images/user_photo_default_l.png" /><a class="editer"></a>
								<span class="suggest-box">
									<span class="icon">
										<span class="text">頭占比過大，全身/半身照尤佳</span>
									</span>
								</span>
							</li>
							<li><img alt="" src="images/image_06.jpg" /><a class="editer"></a>
								<span class="suggest-box">
									<span class="icon">
										<span class="text">頭占比過大，全身/半身照尤佳</span>
									</span>
								</span>
							</li>
						</ul>
					</div>
					<div class="tip-box">
						<p>照片是你被看見、對方決定是否成為好友的關鍵第一步！</p>
						<a href="#">如何挑選好照片？</a>
					</div>
				</div>
				<div class="aboutMe">
					<h2>關於我 <span>(可編輯)</span></h2>
					<div class="mt-15 dis-sp-none"></div>
					<div>
						<ul class="editor_about">
							<li>自我介紹
								<span class="task-text">
									<!-- 如果任務一、任務二完成，請程式在.task-text內的span標籤加上css .complete 作顯示和隱藏的切換 -->
									<span class="">(任務二：填寫50字以上)</span>
								</span>
								<a href="C1_newlist.php" class="link">如何寫好自我介紹？</a>
							</li>
							<li>請用輕鬆的方式描述一下，你是一個甚麼樣的人</li>
						</ul>
						<ul class="editor_about">
							<li>我所尋找的關係是</li>
							<li>認真交往的關係、已結婚為前提的交往</li>
						</ul>
						<ul class="editor_about">
							<li>別人對我的第一印象</li>
							<li>如果把其他的交友服務比喻成人力銀行，可以提供數千筆的的求職者名單</li>
						</ul>
						<ul class="editor_about">
							<li>我的夢想是</li>
							<li>認真交往的關係、已結婚為前提的交往</li>
						</ul>
						<ul class="editor_about">
							<li>最讓我有熱情的是</li>
							<li>認真交往的關係、已結婚為前提的交往</li>
						</ul>
						<ul class="editor_about">
							<li>我的另一半最需要的特質</li>
							<li>認真交往的關係、已結婚為前提的交往</li>
						</ul>
						<ul class="editor_about">
							<li>我覺得最浪漫的事</li>
							<li>認真交往的關係、已結婚為前提的交往</li>
						</ul>
						<ul class="editor_about">
							<li>我生命中不可或缺的是</li>
							<li>認真交往的關係、已結婚為前提的交往</li>
						</ul>
						<ul class="editor_about">
							<li>休閒時最常做的ㄧ些事</li>
							<li>認真交往的關係、已結婚為前提的交往</li>
						</ul>
						<ul class="editor_about">
							<li>最喜歡的旅行方式</li>
							<li>認真交往的關係、已結婚為前提的交往</li>
						</ul>
					</div>
				</div>
				<hr />
				<div class="myBasicdata clear">
					<h2>基本資料 <span>(可編輯)</span></h2>
					<div>
						<ul>
							<li class="editor_basic">
								<p>暱稱</p>
								<p>海苔熊</p>
							</li>
							<li>
								<p>性別</p>
								<p>男</p>
							</li>
							<li>
								<p>生日</p>
								<p>1984/3/9</p>
							</li>
							<li>
								<p>身高</p>
								<p>180</p>
							</li>
							<li>
								<p>居住地</p>
								<p>台北市</p>
							</li>
							<li class="editor_basic">
								<p>國籍</p>
								<p>台灣</p>
							</li>
							<li class="editor_basic">
								<p>學歷</p>
								<p>碩士</p>
							</li>
						</ul>
						<ul>
							<li class="editor_basic">
								<p>畢業學校</p>
								<p class="dataShow">北卡羅萊納大學格林斯博羅分校</p>
							</li>
							<li class="editor_basic">
								<p>學校國家</p>
								<p>台灣</p>
							</li>
							<li class="editor_basic">
								<p>職務別</p>
								<p class="dataShow">CNC電腦程式編排人員</p>
							</li>
							<li class="editor_basic">
								<p>機構名稱<span>(保密)</span></p>
								<p>華碩電腦</p>
							</li>
							<li class="editor_basic">
								<p>機構規模</p>
								<p>100人以上</p>
							</li>
							<li class="editor_basic">
								<p>年收入<span>(保密)</span></p>
								<p>60-89萬</p>
							</li>
							<li class="editor_basic">
								<p>工作資歷</p>
								<p class="dataShow">公務員資格、外商企業、上市櫃公司</p>
							</li>
						</ul>
						<ul>
							<li>
								<p>感情狀態</p>
								<p>海苔熊</p>
							</li>
							<li class="editor_basic">
								<p>生小孩</p>
								<p>不一定</p>
							</li>
							<li class="editor_basic">
								<p>宗教信仰</p>
								<p>基督教</p>
							</li>
							<li class="editor_basic">
								<p>吃素</p>
								<p>無</p>
							</li>
							<li class="editor_basic">
								<p>抽菸</p>
								<p>無</p>
							</li>
							<li class="editor_basic">
								<p>國外經驗</p>
								<p>有</p>
							</li>
							<li class="editor_basic">
								<p>興趣</p>
								<p class="dataShow">水上活動 (游泳、潛水 ...) / 球類運動 (籃球、壘球 ...) /舞蹈 (國標舞、芭蕾舞 ...) / 爬山、攀岩 / 改裝車、重機車、賽車 / 極限運動</p>
							</li>
						</ul>
						<ul>
							<li class="editor_basic basicData_work">
								<p>主要工作時間</p>
								<div class="reportDetial">
									<div class="reportChart topic_level4">
										<h4>週間</h4>
										<div>
											<ul>
												<li>
													<p>上午</p>
												</li>
												<li class="active">
													<p>下午</p>
												</li>
												<li class="active">
													<p>晚上</p>
												</li>
												<li>
													<p>凌晨</p>
												</li>
											</ul>
										</div>
									</div>
									<div class="reportChart topic_level4">
										<h4>假日</h4>
										<div>
											<ul>
												<li class="active"></li>
											</ul>
										</div>
									</div>
									<div class="reportChart topic_level4">
										<h4>輪班</h4>
										<div>
											<ul>
												<li class=""></li>
											</ul>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<hr />
				<div class="myBasicdata clear">
					<h2>見面聊期待 <span>(可編輯)</span></h2>
					<div>
						<ul>
							<li class="editor_basic">
								<p>見面時間</p>
								<p class="dataShow">周末(午餐、晚餐)、周間(下午茶)</p>
							</li>
							<li class="editor_basic">
								<p>想聊話題</p>
								<p class="dataShow">輕鬆聊、人生夢想、婚姻家庭</p>
							</li>
						</ul>
						<ul>
							<li class="editor_basic">
								<p>參加人員</p>
								<p>2人單獨聊</p>
							</li>
							<li class="editor_basic">
								<p>人均花費</p>
								<p>$100-200</p>
							</li>
						</ul>
						<ul>
							<li class="editor_basic">
								<p>付款方式</p>
								<p>各付各的</p>
							</li>
							<li>
								<p></p>
							</li><!-- 不要只有一個 li -->
						</ul>
					</div>
				</div>

			</div><!-- memberPad END -->
			<?php include_once("at_include/plus_applink.php"); ?>
		</div><!-- memberCount END -->
	</div><!-- main END -->

	<!-- 任務完成的彈跳通知，要請程式判斷是否已經完成任務再跳出來 -->
	<div class="task_complete">兩項任務皆已完成！明日起，即可天天收到完整配對名單</div>

	<?php include_once("at_include/footer.php"); ?>
	<!-- Light Box -->
	<div class="pop-sty-1">
		<div id="popContainer">

			<div class="popContent basic">
				<ul>
					<li class="title">【我的檔案】使用說明</li>
					<li class="content my-file">
						<div class="step-slider">
							<div class="wrapper">
								<div class="slides">
									<div class="slide" id="page1">
										<div class="img-box">
											<div class="image-bg myFile-step-1"></div>
											<span class="mark"></span>
										</div>
										<div class="text-box ta-C">
											<h5 class="top">上傳照片</h5>
											<p class="desc">
												點擊後，即可上傳或更換照片
											</p>
										</div>
										<div class="btn-box ta-C">
											<button type="button" id="page1_next" class="button btn-blue">下一步</button>
										</div>
									</div>
									<div class="slide" id="page2">
										<div class="img-box">
											<div class="image-bg myFile-step-2"></div>
											<span class="mark"></span>
											<span class="txt red-txt">
												五官模糊或戴墨鏡
											</span>
										</div>
										<div class="text-box ta-C">
											<h5 class="top">審核未通過</h5>
											<p class="desc">
												照片需更換的原因說明；<br>
												審核通過後，即可正常使用
											</p>
										</div>
										<div class="btn-box ta-C">
											<button type="button" id="page2_prev" class="button btn-border">上一步</button>
											<button type="button" id="page2_next" class="button btn-blue">下一步</button>
										</div>
									</div>
									<div class="slide" id="page3">
										<div class="img-box">
											<div class="image-bg myFile-step-3"></div>
											<span class="mark"></span>
											<span class="txt green-txt">
												建議換張解析度更高的照片
											</span>
										</div>
										<div class="text-box ta-C">
											<h5 class="top">照片加分秘訣</h5>
											<p class="desc">
												「！」表示我們建議換張更好的照片。點擊後，將出現「加分秘訣」
											</p>
										</div>
										<div class="btn-box ta-C">
											<button type="button" id="page3_prev" class="button btn-border">上一步</button>
											<button type="button" id="page3_done" class="button btn-blue">開始使用</button>
										</div>
									</div>
								</div>
							</div>
							<div class="bullet">
								<ul>
									<li id="b_1"><i></i></li>
									<li id="b_2"><i></i></li>
									<li id="b_3"><i></i></li>
								</ul>
							</div>
						</div>
					</li>
				</ul>
				<button type="button" id="popCloseBtn" class="close-btn">
					<img src="images/abby/7/close-icon.png" alt="">
				</button>
			</div>

			<!-- 原本有跳出來，可是會遮到【我的檔案】使用說明，所以先註解起來 -->
			<!-- <div class="popContent basic">
				<ul>
					<li class="title">照片未通過審核</li>
					<li class="content">您所上傳的照片未通過審核，請重新上傳，審核通過之前，暫時無法使用其他功能</li>
				</ul> -->
			<!--		<ul class="btn_closePop"></ul>		-->
			<!-- </div> -->

			<div class="popContent editorPicPop">
				<ul>
					<li class="title ta-L">刪除照片</li>
					<li class="content ta-L">你確定要刪除嗎?</li>
					<li>
						<div class="ctrlPad"><input type="button" class="btn_red" value="刪除" /></div>
					</li>
				</ul>
				<!--		<ul class="btn_closePop"></ul>		-->
			</div>
			<div class="popContent editorAboutPop">
				<form>
					<ul>
						<li class="mobileTitle btn_closePop">
							<!--<i class="fa fa-angle-left" aria-hidden="true"></i>-->基本資料
						</li>
						<li class="title">自我介紹 <span>(100字為限)</span></li>
						<li class="content">
							<textarea rows="4"></textarea>
						</li>
						<li>
							<div class="ctrlPad"><input type="submit" class="btn_red" value="儲存" /></div>
						</li>
					</ul>
				</form>
				<!--		<ul class="btn_closePop"></ul>	-->
			</div>
			<div class="popContent editorBasicDataPop">
				<form>
					<ul>
						<li class="mobileTitle btn_closePop">
							<!--<i class="fa fa-angle-left" aria-hidden="true"></i>-->基本資料
						</li>
						<li class="content">
							<div class="topic  ansType_check_n">
								<div>
									<h2 class="title">您可以接受對方的居住地? <span>(複選)</span></h2>
									<div class="ansPad aho">
										<ul>
											<li><input type="checkbox" name="sel400" value="1" id="sel401"><label for="sel401">不拘</label></li>
											<li><input type="checkbox" name="sel400" value="2" id="sel402"><label for="sel402">台灣</label></li>
											<li><input type="checkbox" name="sel400" value="3" id="sel403"><label for="sel403">中港澳</label></li>
											<li><input type="checkbox" name="sel400" value="4" id="sel404"><label for="sel404">日韓</label></li>
											<li><input type="checkbox" name="sel400" value="5" id="sel405"><label for="sel405">美加</label></li>
											<li><input type="checkbox" name="sel400" value="6" id="sel406"><label for="sel406">東南亞</label></li>
											<li><input type="checkbox" name="sel400" value="7" id="sel407"><label for="sel407">其他地區</label></li>
										</ul>
										<ul>
											<li class="ba-ga">台灣居住地進階設定</li>
										</ul>
										<ul>
											<li><input type="checkbox" name="sel410" value="2" id="sel412"><label for="sel412">北北基</label></li>
											<li><input type="checkbox" name="sel410" value="3" id="sel413"><label for="sel413">桃竹苗</label></li>
											<li><input type="checkbox" name="sel410" value="4" id="sel414"><label for="sel414">中彰投</label></li>
											<li><input type="checkbox" name="sel410" value="5" id="sel415"><label for="sel415">雲嘉南</label></li>
											<li><input type="checkbox" name="sel410" value="6" id="sel416"><label for="sel416">高屏</label></li>
											<li><input type="checkbox" name="sel410" value="7" id="sel417"><label for="sel417">花東</label></li>
											<li><input type="checkbox" name="sel410" value="8" id="sel418"><label for="sel418">金門澎湖</label></li>
										</ul>
									</div>
									<div class="ctrlPad"><a class="prev"></a><a class="next"></a></div>
								</div>
							</div>
						</li>
						<li>
							<div class="ctrlPad"><input type="submit" class="btn_red" value="儲存" /></div>
						</li>
					</ul>
				</form>
				<!--		<ul class="btn_closePop"></ul>	-->
			</div>

		</div>
	</div>
	<!-- jQuery -->
	<script type="text/javascript" src="js/jquery.min-2.2.4.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery.touchwipe.min.js"></script>
	<script type="text/javascript" src="js/at_Rev.min.js"></script>
	<script type="text/javascript" src="js/cropper.min.js"></script>
	<script type="text/javascript" src="js/at_cage.js"></script>

	<!-- 美術檔 js -->
	<script type="text/javascript" src="js/abby/abby.js"></script>

	<script>
		$(window).load(function() {
			$('#popContainer').show();
		})
		$(document).ready(function() {
			//$('.subHeader').find('li').eq(4).addClass('active');

			$('.editer').click(function() {
				$('#popContainer').fadeIn();
				$('.editorPicPop').css({
					'display': 'block'
				}).siblings().css({
					'display': 'none'
				});
				$('.before').css({
					'display': 'block'
				});
				$('.btn_closePop').css({
					'display': 'block'
				});
			});
			$('.editor_about').click(function() {
				$('#popContainer').fadeIn();
				$('.editorAboutPop').css({
					'display': 'block'
				}).siblings().css({
					'display': 'none'
				});
				$('.before').css({
					'display': 'block'
				});
				$('.btn_closePop').css({
					'display': 'block'
				});
			});
			$('.editor_basic').click(function() {
				$('#popContainer').fadeIn();
				$('.editorBasicDataPop').css({
					'display': 'block'
				}).siblings().css({
					'display': 'none'
				});
				$('.before').css({
					'display': 'block'
				});
				$('.btn_closePop').css({
					'display': 'block'
				});
			});
		});
	</script>
</body>

</html>