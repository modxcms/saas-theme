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
            $defaultElement = $theme->get('default_element');
            if (empty($defaultElement)) {
                $setting = $this->modx->getObject(\MODX\Revolution\modSystemSetting::class, ['key' => 'saas.default_element']);
                if (empty($setting)) {
                    $element = $this->modx->getObject(\Fred\Model\FredElement::class, ['uuid' => 'd4817e56-488c-4445-b9e1-9d5f445fe957']);
                    if ($element) {
                        $defaultElement = $element->get('id') . '|text-0';
                    }
                } else {
                    $defaultElement = $setting->get('value');
                }
                $theme->set('default_element', $defaultElement);
                $theme->save();
            }
        }
    }
};
