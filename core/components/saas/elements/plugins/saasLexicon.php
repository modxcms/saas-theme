<?php

$lexicons = ['saas:default'];

switch ($modx->event->name) {
    case 'FredBeforeRender':
        $modx->event->_output = [
            'lexicons' => $lexicons
        ];
        break;
}
return;