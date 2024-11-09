<?php

use MODX\Revolution\modX;

return new class() {
    protected modX $modx;
    protected $action;
    public function __invoke(modX $modx, $action)
    {
        $this->modx = $modx;
        $this->action = $action;
        $this->run();
        return true;
    }

    private function run(): void
    {
        $theme = $this->modx->getObject(\Fred\Model\FredTheme::class, ['uuid' => '6cd24798-f105-4372-934c-9d5d51e190a9']);
        if ($theme) {
            $element = $this->modx->getObject(\Fred\Model\FredElement::class, ['uuid' => 'd4817e56-488c-4445-b9e1-9d5f445fe957']);
            if ($element) {
                $theme->set('default_element', $element->get('id') . '|text-0');
                $theme->save();
            }
        }
    }
};
