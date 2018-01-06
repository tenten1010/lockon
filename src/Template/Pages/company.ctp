<?php $this->layout = 'lockon';
$this->start('meta');
$option = [
    "title" => 'ロックオン芸能事務所｜会社概要',
    "description" => '会社概要',
];
echo $this->element('meta',$option);
$this->end();?>
<style type="text/css">
.pc #map {width: 450px; float: left;}
.sp #map {width: 100%; border-radius: 10px;height: 300px}
.pc article table {width: 400px; float: right; margin: 0 25px;}
.sp article table {border-radius: 10px}
table tr th{border:none;color: #000; width: 30%;color:#cc0033;}
</style>
<article>
	<div class="title">
		<h2>会社概要</h2>
	</div>
	<div class="contents">
		<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.585774855523!2d139.69889271549337!3d35.66257593860189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ca883911557%3A0x3872d9a3f791821e!2z44CSMTUwLTAwNDEg5p2x5Lqs6YO95riL6LC35Yy656We5Y2X77yR5LiB55uu77yR77yR4oiS77yV!5e0!3m2!1sja!2sjp!4v1514266556960" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		<table>
			<tbody>
				<tr>
					<th>会社名</th>
					<td>株式会社ロックオン</td>
				</tr>
				<tr>
					<th>所在地</th>
					<td>〒150-0041<br>渋谷区神南1-11-5ダイネス壱番館渋谷908<br></td>
				</tr>
				<tr>
					<th>お問い合わせ</th>
					<td><a class="red" href="mailto:lockonoffice@gmail.com">lockonoffice@gmail.com</a></td>
				</tr>
				<tr>
					<th>代表取締役</th>
					<td>髙田弘樹</td>
				</tr>
				<tr>
					<th>資本金</th>
					<td>5000万</td>
				</tr>
				<tr>
					<th>主要取引先</th>
					<td style="line-height: 2">日本放送協会<br>
						日本テレビ放送網(株)<br>
						(株)テレビ朝日<br>
						(株)TBSテレビ<br>
						(株)テレビ東京<br>
						(株)フジテレビジョン<br>
						関西テレビ(株)<br>
						中京テレビ(株)<br>
						(株)サイバーエージェント<br>
						(株)コムドアーズ<br>
					</td>
				</tr>											
			</tbody>
		</table>
	</div>
</article>