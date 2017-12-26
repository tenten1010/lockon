<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?= $title ?></title>

<link href="http://image.lock-on.tokyo.s3-ap-northeast-1.amazonaws.com/icon-02.png" type="image/x-icon" rel="shortcut icon" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<meta property="og:title" content="<?= h($title); ?>" />
<meta property="og:type" content="article" />
<meta property="og:description" content="<?= h($description); ?>" />

<meta property="og:url" content="<?= 'http://lock-on.tokyo'.$this->request->here(); ?>" />

<meta property="og:site_name" content="Lock On芸能事務所" />
<meta property="og:locale" content="ja_JP" />

<meta name="robots" content="<?= (isset($robots))?$robots:'index,follow'; ?>">
