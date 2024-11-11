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
        $defaultElement = '';
        if ($theme) {
            $defaultElement = $theme->get('default_element');
        }
        $setting = $this->modx->getObject(\MODX\Revolution\modSystemSetting::class, ['key' => 'saas.default_element']);
        if (empty($setting)) {
            $setting = $this->modx->newObject(\MODX\Revolution\modSystemSetting::class);
            $setting->set('key', 'saas.default_element');
        }
        $setting->set('namespace', 'saas');
        $setting->set('value', $defaultElement);
        $setting->save();
    }
};
