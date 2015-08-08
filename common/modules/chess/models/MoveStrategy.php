<?php
/**
 * Created by PhpStorm.
 * User: Alexey
 * Date: 17.05.2015
 * Time: 17:38
 */

namespace common\modules\chess\models;


use yii\base\Model;

class MoveStrategy extends Model {

    /**
     * @var Board
     */
    protected $board;

    public function __construct(Board $board)
    {
        $this->board = $board;
    }

    public function getAvailableMoves(Piece $piece)
    {

    }
} 