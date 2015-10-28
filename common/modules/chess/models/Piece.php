<?php
/**
 * Created by PhpStorm.
 * User: Alexey
 * Date: 23.04.2015
 * Time: 10:29
 */

namespace common\modules\chess\models;


use yii\base\Model;

abstract class Piece extends Model {

    const COLOR_WHITE = 1;
    const COLOR_BLACK = 2;
    /**
     * @var Player
     */
    protected $owner;

    protected $color;
    /**
     * @var int
     */
    protected  $row;
    /**
     * @var int
     */
    protected $col;

    abstract function getMoves(Board $board);


} 