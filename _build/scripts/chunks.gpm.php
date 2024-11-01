<?php

use MODX\Revolution\modChunk;
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
        $chunks = [
            'saas.custom.footer-scripts',
            'saas.custom.header-scripts',
        ];

        foreach ($chunks as $chunk) {
            $obj = $this->modx->getObject(modChunk::class, ['name' => $chunk]);
            if (empty($obj)) {
                $obj = $this->modx->newObject(modChunk::class);
                $obj->fromArray([
                    'name' => $chunk,
                    'content' => '<!-- INSERT CUSTOM SCRIPTS HERE -->',
                ]);
            }
        }
    }
};