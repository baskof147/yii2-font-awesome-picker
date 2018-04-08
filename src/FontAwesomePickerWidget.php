<?php

namespace baskof147\fontawesomepicker;

use baskof147\fontawesomepicker\assets\FontAwesomePickerAsset;
use rmrevin\yii\fontawesome\FA;
use yii\helpers\Html;
use yii\widgets\InputWidget;

/**
 * Class FontAwesomePickerWidget
 * @package baskof147\fontawesomepicker
 * @author Ilya Loginov
 */
class FontAwesomePickerWidget extends InputWidget
{
    /**
     * @inheritdoc
     */
    public function run()
    {
        FontAwesomePickerAsset::register($this->view);
        $content = Html::hiddenInput($this->model, $this->attribute, [
            'id' => $this->getId()
        ]);
        return Html::tag('div', $content);
    }

    /**
     * @return array
     */
    protected function getItems()
    {
        $items = [];
        foreach (FA::getConstants() as $icon) {
            $value = FA::icon($icon) . ' ' . $icon;
            $items[] = Html::tag('div', $value, [
                'item-icon',
                'data' => [
                    'icon' => $icon
                ]
            ]);
        }

        return $items;
    }
}
