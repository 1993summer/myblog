<div id="footer">
		<footer>
		<div class="container">
			<div class="row">
				<ul class="contact-list col-md-8">
					<li><i class="fa fa-envelope-o"></i> 邮箱in1993summer@163.com</li>
					<li><i class="fa fa-comments"></i> 企鹅878039245</li>
					<li><i class="fa fa-map-marker"></i> Theme by <a href="./index.php">mingzhongshui.com</a></li>
				</ul>
				<ul class="social-list col-md-4">
					<li><a href="http://www.w3school.com.cn/html5/"><i class="fa fa-html5"></i></a></li>
					<li><a href="http://www.w3school.com.cn/css3/"><i class="fa fa-css3"></i></a></li>
					<li><a href="http://typecho.org/"><i class="fa fa-tumblr-square"></i></a></li>
					<li><a href="http://weibo.com/3185577483/profile?rightmod=1&wvr=6&mod=personnumber&is_all=1"><i class="fa fa-weibo" target="_Blank"></i></a></li>
					<li class="copyright">© <?php $this->date('Y'); ?><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a></li>
				</ul>
			</div>
		</div>
	</footer>
<?php $this->footer(); ?>
<script src="<?php $this->options->themeUrl('js/backgroundcheck.js'); ?>"></script>
<script type="text/javascript" charset="utf-8" src="<?php $this->options->themeUrl('js/jquery.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/main.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/plugins.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/retina.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/404.js'); ?>"></script>
</body>
</html>