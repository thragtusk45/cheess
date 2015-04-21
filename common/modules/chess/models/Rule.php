<?php
/**
 * Created by PhpStorm.
 * User: Alexey
 * Date: 29.03.2015
 * Time: 22:28
 */

namespace common\modules\chess\models;


use yii\db\ActiveRecord;

class Rule extends ActiveRecord {

    const RULE_TYPE_PIECE = 1;
    const RULE_TYPE_TILE = 2;

} 