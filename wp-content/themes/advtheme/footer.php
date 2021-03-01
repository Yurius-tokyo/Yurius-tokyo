	<section id="contact" class="uk-section">
		<div class="uk-container">
			<h2 class="uk-text-center">お見積もりご依頼</h2>
			<div class="uk-flex uk-flex-center uk-flex-middle">
				<?php echo do_shortcode('[wpforms id="12" title="false" description="false"]'); ?>

			</div>
		</div>
	</section>
	<footer class="uk-section">
		<div id="contact-form" class="uk-container">

			<div class="uk-child-width-1-4@m uk-child-width-1-1@s" uk-grid>
				<div>
					<h2 class="uk-link-text"><a href="/">アドベンチャーズ株式会社</a></h2>
				</div>
				<div class="">
					<h3><a href="/tips/" class="uk-link-text">お役立ち記事</a></h3>
					<ul class="uk-list uk-link-text">
							<li class=""><a href="/tips/">全て</a></li>
							<li class=""><a href="/category/tips_web/">Web制作</a></li>
							<li class="uk-hidden"><a href="/category/tips_business/">ビジネス</a></li>
							<li class=""><a href="/category/tips_marketing/">マーケティング</a></li>
							<li class=""><a href="/category/tips_translation/">翻訳</a></li>
							<li class="uk-hidden"><a href="/category/tips_game/">ゲーム</a></li>
					</ul>
	    	</div>
	    	<div>
					<h3>サービス</h3>
	    		<ul class="uk-list uk-link-text">
						<li><a href="/web_development/">ホームページ制作</a></li>
						<li><a href="/marketing/">マーケティング支援</a></li>
						<li><a href="/localization/">翻訳</a></li>
	    		</ul>
	    	</div>
				<div>
					<ul class="uk-list uk-link-text">
						<li><a href="/company/">会社案内</a></li>
						<li><a href="/news/">ニュース</a></li>
						<li><a href="https://global.adventuresjp.com/" target="_blank" class="">Global Services<span class="uk-margin-left" uk-icon="icon: forward"></span></a></li>


	    		</ul>
				</div>
	  	</div>
		</div>

	</footer>
	<section id="copyright"><span class="uk-text-small">© 2020 Adventures Inc.  All Rights Reserved.</span></section>
	<?php wp_footer(); ?>
</body>
</html>
<script>
let headH = 80;

let smoothScroll = (target, offset) => {
  let toY;
  let nowY = window.pageYOffset;      //現在のスクロール値
  const divisor = 8;                  //近づく割合（数値が大きいほどゆっくり近く）
  const range = (divisor / 2) + 1;    //どこまで近づけば処理を終了するか(無限ループにならないように divisor から算出)

  //ターゲットの座標
  const targetRect = target.getBoundingClientRect();   //ターゲットの座標取得
  const targetY = targetRect.top + nowY - offset;      //現在のスクロール値 & ヘッダーの高さを踏まえた座標
  //スクロール終了まで繰り返す処理
  (function () {
    let thisFunc = arguments.callee;                      //自身を呼び出すために変数に代入
    toY = nowY + Math.round((targetY - nowY) / divisor);  //次に移動する場所（近く割合は除数による。）
    window.scrollTo(0, toY);                              //スクロールさせる
    nowY = toY;                                           //nowY更新

    if (document.body.clientHeight - window.innerHeight < toY) {

      //最下部にスクロールしても対象まで届かない場合は下限までスクロールして強制終了
      window.scrollTo(0, document.body.clientHeight);
      return;

    }
    if (toY >= targetY + range || toY <= targetY - range) {

      //+-rangeの範囲内へ近くまで繰り返す
      window.setTimeout(thisFunc, 10);

    } else {

      //+-range の範囲内にくれば正確な値へ移動して終了。
      window.scrollTo(0, targetY);

    }
  })();
};

const smoothOffset = headH;  //Fixされているヘッダーの高さ分スクロール先の座標をずらすために、変数に高さを入れておく
const links = document.querySelectorAll('a[href*="#"]');  //#がリンクに含まれているアンカータグを全て取得
for (let i = 0; i < links.length; i++) {
  links[i].addEventListener('click', function (e) {

    const href = e.currentTarget.getAttribute('href');   //href取得
    const splitHref = href.split('#');
    const targetID = splitHref[1];
    const target = document.getElementById(targetID);    //リンク先の要素（ターゲット）取得

    if (target) {
      smoothScroll(target, smoothOffset);
    } else {
      return true;
    }
    return false;
  });
}

</script>
