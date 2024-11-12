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
            $defaultRTE = $this->modx->getObject(\Fred\Model\FredElementRTEConfig::class, ['name' => 'TinyMCE', 'theme' => $theme->get('id')]);
            if (empty($defaultRTE)) {
                $this->modx->log(modX::LOG_LEVEL_ERROR, 'TinyMCE RTE Config not found');
                return;
            }
            $backupRTE = $this->modx->getObject(\Fred\Model\FredElementRTEConfig::class, ['name' => 'TinyMCE Backup']);
            if (empty($backupRTE)) {
                $this->modx->log(modX::LOG_LEVEL_ERROR, 'TinyMCE RTE Backup Config not found');
                return;
            }
            $defaultRTE->set('data', $backupRTE->get('data'));
            if ($defaultRTE->save()) {
                $this->modx->log(modX::LOG_LEVEL_INFO, 'TinyMCE RTE Config restored');
                $backupRTE->remove();
            } else {
                $this->modx->log(modX::LOG_LEVEL_ERROR, 'TinyMCE RTE Config not restored');
            }
        }
    }
};
