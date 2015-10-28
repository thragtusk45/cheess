<?php
/**
 * Created by PhpStorm.
 * User: Alexey
 * Date: 23.04.2015
 * Time: 10:32
 */

namespace common\modules\chess\models;

use Yii;
class Pawn extends Piece {


    /**
     * @var bool
     */
    protected $moved = false;

    protected $enPassant = false;

    public function getMoves(Board $board) {
        $availableMoves = [];
        if (Board::cellExists($this->col,$this->row+1)) {
            $availableMoves[] = [
                'col' => $this->col,
                'row' => ($this->color == self::COLOR_WHITE) ? $this->row+1 : $this->row-1
            ];
        }
        if(!$this->moved) {
            $availableMoves[] = [
                'col' => $this->col,
                'row' =>($this->color == self::COLOR_WHITE) ? $this->row+2 : $this->row-2
            ];
        }


    }
} 