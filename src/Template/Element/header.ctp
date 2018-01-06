<header>
<?php if($isMobile){?>
	<nav>
		<span>≡</span>
		<h1><a href="/"><img src="https://image.lock-on.tokyo/lockon-logo-header.png"></a></h1>
	</nav>
<?php }else{ ?>
	<a class="biglogo" href="/"><img src="https://image.lock-on.tokyo/lockon-logo-big.png"></a>
    <nav>
    	<h1><a href="/"><img src="https://image.lock-on.tokyo/lockon-logo-header.png"></a></h1>
    	<ul>
    		<li><a href="/">ホーム</a></li>
    		<li><a href="/talents/">タレント</a></li>
    		<li><a href="/news">最新情報</a></li>
            <li><a href="/appoint">面接について</a></li>
    		<li><a href="/company">会社概要</a></li>
    	</ul>
    </nav>
<?php } ?>
</header>