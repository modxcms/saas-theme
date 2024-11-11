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
            $defaultRTE = $theme->getOne('RTEConfig', ['name' => 'TinyMCE']);
            if (empty($defaultRTE)) {
                return;
            }
            $backupRTE = $theme->getOne('RTEConfig', ['name' => 'TinyMCE Backup']);
            if (empty($backupRTE)) {
                return;
            }
            $defaultRTE->set('data', $backupRTE->get('data'));
            $defaultRTE->save();
        }
    }
};
