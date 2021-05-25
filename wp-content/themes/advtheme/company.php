<?php
/**
 * Template Name: Company page */
get_header();

?>
	<section id="pre-header" class="uk-visible@m"></section>
	<section id="fact_sheet" class="uk-section uk-section-default ">
		<div class="uk-container uk-container-small ">
			<h1 class="uk-text-center">会社概要</h1>
			<table class="uk-table uk-table-divider">

		    <tbody>
		        <tr>
		            <td>会社名</td>
		            <td>アドベンチャーズ株式会社　(Adventures Inc.)</td>
		        </tr>
		        <tr>
		            <td>所在地</td>
		            <td>東京都港区西麻布3丁目8-11</td>
		        </tr>
		        <tr>
		            <td>連絡先</td>
		            <td>info@adventuresjp.com</td>
		        </tr>
						<tr>
		            <td>設立年月</td>
		            <td>2020年11月</td>
		        </tr>
						<tr>
		            <td>資本金</td>
		            <td>100万円</td>
		        </tr>
						<tr>
		            <td>代表者</td>
		            <td>玉井友里</td>
		        </tr>
						<tr>
		            <td>事業内容</td>
		            <td>
									<ul>
										<li>ウェブサイト、ウェブコンテンツの企画、制作、運営及び販売</li>
										<li>アプリケーション及びソフトウェアの開発、設計、販売及び保守</li>
										<li>マーケティングサポート業務</li>
										<li>翻訳業</li>
									</ul>
								</td>
		        </tr>
						<tr>
							<td>取引銀行</td>
							<td>三菱UFJ銀行　麻布支店</td>
						</tr>
		    </tbody>
		</table>
		</div>
	</section>

	<section id="profile" class="uk-section uk-section-default ">
		<div id="profile_inner" class="uk-container">
			<div class="uk-child-width-1-2@m uk-child-width-1-2@s uk-height-1-1 uk-flex uk-flex-middle" uk-grid>
				<div>
					<h2>玉井　友里<a href="https://www.linkedin.com/in/yuri-tamai-325b2779/" target="_blank"><span class="uk-margin-left" uk-icon="linkedin"></span></a></h2>
					<p>
						代表取締役
					</p>
					<p>
						国内ITベンチャー、グローバルIT企業などを経てアドベンチャーズ株式会社を設立。
					</p>
				</div>
				<div class=" uk-text-center">
					<img class="box_shadow profile_photo" data-src="/wp-content/themes/advtheme/img/profile.jpg" alt="" uk-img>
				</div>

			</div>

		</div>
	</section>


	<?php the_content(); ?>

	<?php
get_footer(); ?>
