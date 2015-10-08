<?php
/**
 * Created by PhpStorm.
 * User: Alexey
 * Date: 29.03.2015
 * Time: 22:22
 */
namespace common\modules\chess\models;

use yii\base\Model;

/**
 * Class Board
 * @package common\modules\chess\models
 * Chess game board model
 */
class Board extends Model
{

    /**
     * @var array[Tile]
     */
    private $tiles = [];

    public function  __construct(BoardState $state = null)
    {

        if ($state) {
            $this->load($state->attributes);
        } else {

            for ($i = 1; $i <= 8; $i++) {
                for ($j = 1; $j <= 8; $j++) {
                    $this->tiles[$i][$j] = new Tile($i, $j);
                }
            }
        }
        parent::__construct();
    }

    public function move(Piece $piece, Tile $from, Tile $to)
    {

    }

    private function placePieces()
    {
        for ($col = 1; $col <= 8; $col++) {
            $this->tiles[2][$col] = new Pawn();//white
            $this->tiles[7][$col] = new Pawn();//black
        }
        $this->tiles[1][1] = new Rook();
        $this->tiles[1][8] = new Rook();

        $this->tiles[8][1] = new Rook();
        $this->tiles[8][8] = new Rook();

        $this->tiles[1][2] = new Knight();
        $this->tiles[1][7] = new Knight();

        $this->tiles[8][2] = new Knight();
        $this->tiles[8][7] = new Knight();

        $this->tiles[1][3] = new Bishop();
        $this->tiles[1][6] = new Bishop();

        $this->tiles[8][3] = new Bishop();
        $this->tiles[8][6] = new Bishop();

        $this->tiles[1][4] = new King();
        $this->tiles[8][5] = new King();

        $this->tiles[1][5] = new Queen();
        $this->tiles[8][4] = new Queen();
    }


} 