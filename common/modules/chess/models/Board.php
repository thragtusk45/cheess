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
class Board extends Model {

    /**
     * @var array[Tile]
     */
    private $tiles = [];

    public function  __construct(BoardState $state = null) {
        if($state) {
            $this->load($state->attributes);
        } else {

            for($i = 1; $i<= 8; $i++) {
                for($j = 1; $j<= 8; $j++) {
                    $this->tiles[$i][$j] = new Tile($i, $j);
                }
            }
        }

    }


} 