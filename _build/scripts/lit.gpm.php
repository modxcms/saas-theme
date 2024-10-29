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
        $setting = $this->modx->getObject(\MODX\Revolution\modSystemSetting::class, ['key' => 'saas.lit']);
        if (!$setting) {
            $setting = $this->modx->newObject(\MODX\Revolution\modSystemSetting::class);
            $setting->fromArray([
                'key' => 'saas.lit',
                'namespace' => 'saas',
                'xtype' => 'textfield',
                'area' => 'saas',
                'editedon' => time(),
                'editedby' => 0,
            ]);
        }
        $setting->set('value', time());
        $setting->save();
    }
};