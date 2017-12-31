CREATE TABLE articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) DEFAULT NULL,
    body TEXT DEFAULT NULL,
    thumb VARCHAR(255) DEFAULT NULL,
    status INT(1) DEFAULT NULL,
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL
) CHARSET = utf8mb4;

INSERT INTO articles (title,body,thumb,status,created,modified)
VALUES ('新人オーディションについて',
    '新人オーディションについて',
    'http://www.pyramid.tokyo/wp-content/uploads/2015/01/NEW-e1511933253852.jpg',
    1,NOW(),NOW());

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    talent_id INT DEFAULT 0,
    username VARCHAR(50),
    password VARCHAR(255),
    role VARCHAR(20),
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL
) CHARSET = utf8mb4;

INSERT INTO users (username,password,role,created,modified)
VALUES ('admin','$2y$10$Ify4444s0d24gDJohQ3y6ObZJ8Jn/Phyakf9kB0sdjXhuAze38k/O','admin',now(),now());


CREATE TABLE talents (
    id INT AUTO_INCREMENT PRIMARY KEY,
    orders INT(11) DEFAULT NULL,
    name VARCHAR(50) NOT NULL,
    name_jp VARCHAR(50) DEFAULT NULL,
    age INT(11) DEFAULT NULL,
    thumb VARCHAR(255) DEFAULT NULL,
    blog VARCHAR(255) DEFAULT NULL,
    twitter VARCHAR(255) DEFAULT NULL,
    facebook VARCHAR(255) DEFAULT NULL,
    instagram VARCHAR(255) DEFAULT NULL,
    birthday DATE DEFAULT NULL,
    birthplace VARCHAR(255) DEFAULT NULL,
    bloodtype VARCHAR(50) DEFAULT NULL,
    size VARCHAR(50) DEFAULT NULL,
    hobby VARCHAR(255) DEFAULT NULL,
    skill VARCHAR(255) DEFAULT NULL,
    description TEXT DEFAULT NULL,
    series TEXT DEFAULT NULL,
    event TEXT DEFAULT NULL,
    drama TEXT DEFAULT NULL,
    cm TEXT DEFAULT NULL,
    movie TEXT DEFAULT NULL,
    radio TEXT DEFAULT NULL,
    magazine TEXT DEFAULT NULL,
    mook TEXT DEFAULT NULL,
    other TEXT DEFAULT NULL,
    status INT(1) DEFAULT NULL,
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL
) CHARSET = utf8mb4;

CREATE TABLE medias (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    talent_id INT DEFAULT NULL,
    `orders` INT(1) DEFAULT NULL,
    type VARCHAR(50) DEFAULT NULL,
    url VARCHAR(255) DEFAULT NULL,
    title VARCHAR(255) DEFAULT NULL,
    description TEXT DEFAULT NULL,
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL,
    FOREIGN KEY talent_key (talent_id) REFERENCES talents(id)
) CHARSET = utf8mb4;

INSERT INTO medias (talent_id,orders,type,url,title,description,created,modified)
VALUES (1,2,'image','http://image.lock-on.tokyo.s3-ap-northeast-1.amazonaws.com/talents/rin_shibasaki/1.JPG','title','＊NTV『カウントダウン hulu』※NA 〈毎週月曜21:54～22:00 O.A〉
＊FM-FUJI『Lovelizm』※MC 〈毎週土曜23:00～23:30 O.A〉
＊NHKラジオ第一『つぶや句575』〈不定期放送18:00～20:00 O.A〉',now(),now());

INSERT INTO talents (name,name_jp,thumb,birthday,birthplace,bloodtype,size,hobby,skill,description,series,drama,cm,movie,radio,magazine,mook,other,status,created,modified)
VALUES ('loveli_a','ラブリ','http://www.pyramid.tokyo/wp-content/uploads/2015/01/NEW-e1511933253852.jpg','1989-11-27','愛媛県','O型','81,57,83,165,23.5','神社仏閣巡り(お遍路)、登山、盆栽、ヨガ、ボクシング、マラソン','乗馬(5級)、絵','◎レギュラー情報
＊NTV『カウントダウン hulu』※NA 〈毎週月曜21:54～22:00 O.A〉
＊FM-FUJI『Lovelizm』※MC 〈毎週土曜23:00～23:30 O.A〉
＊NHKラジオ第一『つぶや句575』〈不定期放送18:00～20:00 O.A〉','■レギュラー
CX『 めざましテレビ』(MOTTO いまドキ)〈10年4月～11年3月〉
NTV『 PON! 』〈12年4月～12年12月〉
NTV『ネプ＆イモトの世界番付』　〈12年5月～15年5月〉
TX『オードリーの神アプリ＠新世紀』〈13年1月～14年3月〉
千葉テレビ『SAKAJO』〈15年8月～15年12月〉
★NTV『カウントダウンhulu』〈16年4月～〉
BS-TBS『男子視聴禁止！』〈16年4月～16年9月〉','■レギュラー
EX『ガールズトーク～十人のシスターたち～』1話、2話、3話〈12年10月2日、9日、16日〉','＊ブルボン「じゃがチョコ」〈13年2月～14年1月〉
＊ティー・アンド・エイチ「ヌーディーアイ」〈13年2月～15年1月〉
＊ユニーク「Realta」〈13年4月～14年10月〉
＊SBY「Diamond Lash」〈13年8月～14年7月〉
＊ドウシシャ「ルビンローザ（腕時計）」〈13年11月～14年9月〉
＊JAえひめ中央「ラブリィかんきつキャンペーン」〈14年11月～15年5月〉
＊ジングループ 「ミュゼプラチナム」「ミュゼコスメ」「ミュゼトラベル」「ミュゼホワイトニング」〈15年4月～〉','','■レギュラー
FM-FUJI『劇団サンバカーニバル』〈13年4月6日～9月〉
MBSラジオ『イマドキッ』〈13年4月21日～16年12月〉
★FM-FUJI『Lovelizm』〈14年10月5日～O,A〉

■ゲスト
MBSラジオ『ゴチャ・まぜっ！火曜日』〈12年11月20日O.A〉
InterFM『ANA SKY STORY』〈12年12月1,8,15,22,29日O.A〉
LF『ほろよいイブニングトーク』〈12年12月25,26,27日O.A〉
『島田秀平の開運ラジオ』〈AM16局2月2,3,4,8日O.A〉
FM-FUJI『SUNDAY in the Park』〈13年2月10日O.A〉
MBSラジオ『ゴチャ・まぜっ！月曜日』〈13年3月10日O.A〉
QR『レコメン』〈13年3月25日O.A〉
JFM『スクールナイン』〈13年3月28日O.A〉
YBSラジオ『ラララ♪モーニング』〈13年4月19日O.A〉
NACK5『One More Pint』〈13年5月10日 O.A〉
LF『高田文夫のラジオビバリー昼ズ』〈13年5月14日O.A〉
QR『大竹まことのゴールデンラジオ』〈13年6月25日O.A〉
J-WAVE『PARADISO』〈13年7月12日 O.A〉
NHKラジオ第一『つぶや句575』〈13年7月15日O.A〉
NHKラジオ第一『つぶや句575』〈13年9月16日O.A〉
NHKラジオ第一『つぶや句575』〈13年11月23日O.A〉','JJ専属モデル〈2012年12月発売号〜2015年11月発売号〉','スタイルブック『LOVE』（光文社）2015年2月20日発売','■カレンダー
2014年版ラブリカレンダー(トライエックス) 13年秋発売',1,NOW(),NOW());
