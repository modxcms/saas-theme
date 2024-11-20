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
        if (!in_array($this->action, ['install', 'upgrade', 0, 1])) {
            return;
        }
        $setting = $this->modx->getObject(\MODX\Revolution\modSystemSetting::class, ['key' => 'seosuite.meta.default_meta_title']);
        if (!$setting) {
            $setting = $this->modx->newObject(\MODX\Revolution\modSystemSetting::class);
            $setting->fromArray([
                'key' => 'seosuite.meta.default_meta_title',
                'namespace' => 'seosuite',
                'xtype' => 'textfield',
                'area' => 'seosuite_tab_meta',
                'editedon' => time(),
                'editedby' => 0,
            ]);
        }
        $value = $setting->get('value');
        if (empty($value)) {
            $setting->set('value', '[[+longtitle]] | [[++saas.setting.site_name]]');
        } else {
            $setting->set('value', str_replace('[[++site_name]]', '[[++saas.setting.site_name]]', $value));
        }
        $setting->save();
    }
};