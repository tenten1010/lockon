<?php
use Cake\Core\Configure;
use Cake\Error\Debugger;

$this->layout = 'error';

if (Configure::read('debug')) :
    $this->layout = 'dev_error';

    $this->assign('title', $message);
    $this->assign('templateName', 'error400.ctp');

    $this->start('file');
?>
<?php if (!empty($error->queryString)) : ?>
    <p class="notice">
        <strong>SQL Query: </strong>
        <?= h($error->queryString) ?>
    </p>
<?php endif; ?>
<?php if (!empty($error->params)) : ?>
        <strong>SQL Query Params: </strong>
        <?php Debugger::dump($error->params) ?>
<?php endif; ?>
<?= $this->element('auto_table_warning') ?>
<?php
if (extension_loaded('xdebug')) :
    xdebug_print_function_stack();
endif;

$this->end();
endif;
$this->layout = 'lockon'; 
$this->start('meta');
$option = [
    "title" => 'ページが見つかりませんでした',
    "description" => 'お探しのページが見つかりませんでした',
    "robot" => 'noindex,follow',
];
echo $this->element('meta',$option);
$this->end();
?>
<div class="error">
    <h2>404 Not Found</h2>
    <p>お探しのページが見つかりませんでした</p>
    <a href="/">トップへ</a>  
</div>