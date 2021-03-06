<?php

namespace app\modules\bot\controllers\privates;

use app\modules\bot\components\Controller;
use app\modules\bot\components\helpers\MessageText;

/**
 * Class ReverseController
 *
 * @package app\modules\bot\controllers
 */
class ReverseController extends Controller
{
    /**
     * @return array
     */
    public function actionIndex($message = '')
    {
        //TODO add reverse for $$message

        return $this->getResponseBuilder()
            ->editMessageTextOrSendMessage(
                new MessageText($message)
            )
            ->build();
    }
}
