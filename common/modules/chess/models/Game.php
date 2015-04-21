<?php
/**
 * Created by PhpStorm.
 * User: Alexey
 * Date: 29.03.2015
 * Time: 22:30
 */

namespace common\modules\chess\models;


use yii\base\Model;

class Game extends Model {

    /**
     * @var array[Rule]
     * additional rules
     */
    protected $rules = [];

    /**
     * @var Board
     */
    protected $board;


    public function __construct($rules, BoardState $state) {
        foreach($rules as $rule) {
            if($rule instanceof Rule) {
                $this->rules[] = $rule;
            }
        }
    }

    /**
     * @param BoardState $state
     * Init new board or load an existing board state
     */
    public function initBoard(BoardState $state = null) {
        $this->board = !empty($state) ? new Board($state) : new Board();
    }
} 