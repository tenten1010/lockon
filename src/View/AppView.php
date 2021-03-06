<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     3.0.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\View;

use Cake\View\View;

/**
 * Application View
 *
 * Your application’s default view class
 *
 * @link https://book.cakephp.org/3.0/en/views.html#the-app-view
 */
class AppView extends View
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading helpers.
     *
     * e.g. `$this->loadHelper('Html');`
     *
     * @return void
     */
    public function initialize()
    {
    }

    public function echoThreeSize($size){
        $size_data = explode(',', $size);
        $size_label = ['B','W','H','T','S'];
        $result = [];
        foreach ($size_data as $key => $value) {
            $result[] = $size_label[$key].$value;
        }
        return join(' / ', $result);
    }

    public function echoTalent($talent){
        $talent->name_en = strtoupper(str_replace('_', ' ', $talent->name));
        $talent->birthday = ($talent->birthday) ? date('Y年m月d日',strtotime($talent->birthday)): '未公開';
        return $talent;
    }

    public function echoEditTalent($talent){
        $talent->birthday = ($talent->birthday) ? date('Y-m-d', strtotime($talent->birthday)) : null;
        return $talent;
    }
}
