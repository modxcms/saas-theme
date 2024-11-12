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
                $backupRTE = $this->modx->newObject(\Fred\Model\FredElementRTEConfig::class);
                $backupRTE->set('name', 'TinyMCE Backup');
                $backupRTE->set('description', 'Backup of the TinyMCE RTE Config');
            }
            $backupRTE->set('data', $defaultRTE->get('data'));
            if ($backupRTE->save()) {
                $this->modx->log(modX::LOG_LEVEL_INFO, 'TinyMCE Backup RTE Config created');
            } else {
                $this->modx->log(modX::LOG_LEVEL_ERROR, 'TinyMCE Backup RTE Config not created');
            }
        }
    }
};
