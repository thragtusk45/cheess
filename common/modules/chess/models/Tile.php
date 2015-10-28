<?php
/**
 * Created by PhpStorm.
 * User: Alexey
 * Date: 29.03.2015
 * Time: 22:38
 */

namespace common\modules\chess\models;


use yii\base\Model;

class Tile {

    const BASE_COLOR_BLACK = 1;
    const BASE_COLOR_WHITE = 2;

    protected $baseColor;

    protected $row;

    protected $col;

    /**
     * @var Piece|null $piece
     */
    protected $piece;

    public function __construct($row, $col) {
        $this->row = $row;
        $this->col = $col;
        if($row % 2 == 1) {
            $this->baseColor = ($col % 2 == 1)  ? static::BASE_COLOR_BLACK : static::BASE_COLOR_WHITE;
        } else {
            $this->baseColor = ($col % 2 == 1)  ? static::BASE_COLOR_WHITE : static::BASE_COLOR_BLACK;
        }
        $this->piece = null;
    }

    public function setPiece(Piece $piece)
    {
        $this->piece = $piece;
    }

} 