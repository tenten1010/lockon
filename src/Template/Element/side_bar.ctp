<script type="text/javascript">
$(function(){
	$('header nav span').on('click', function(){
		if($('#side_bar').is(":hidden")){
			$('#side_bar').show();
			$('#side_bar ul').slideDown(500);
		}else{
			$('#side_bar ul').slideUp(300);
			setTimeout(function(){
				$('#side_bar').hide();
			},300);
		}
	});
});
</script>
<style type="text/css">
.sp #side_bar {position: fixed;top: 0;width: 100%;height: 100%;z-index: 90;background-color: rgba(0,0,0,0.5);}
.sp #side_bar ul {position: absolute;top: 44px;left:0;margin:0;width: 100%;height: 100%}
.sp #side_bar li {height: 60px;background-color: #cc0033;}
.sp #side_bar li a {margin:0 30px;border: 1px #fff solid; border-width: 0 0 1px 0;text-align: center;color: #fff;display: block;height: 60px;line-height: 60px;}

</style>
<div id="side_bar" style="display: none">
	<div></div>
	<ul style="display: none">
		<li><a href="/">ホーム</a></li>
    	<li><a href="/talents/">タレント</a></li>
    	<li><a href="/news">最新情報</a></li>
    	<li><a href="/appoint">面接について</a></li>
    	<li><a style="border:0px" href="/company">会社概要</a></li>
	</ul>
</div>