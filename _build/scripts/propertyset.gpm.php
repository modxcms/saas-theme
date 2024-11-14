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
        $propertySet = $this->modx->getObject(\MODX\Revolution\modPropertySet::class, ['name' => 'SaaSgetPage']);
        if (!$propertySet) {
            $propertySet = $this->modx->newObject(\MODX\Revolution\modPropertySet::class);
            $propertySet->fromArray([
                'name' => 'SaaSgetPage',
                'description' => 'Property set for SaaS getPage',
            ]);
        }
        $properties = [
            [
                'name' => 'cache',
                'desc' => 'Cache requests',
                'type' => 'combo-boolean',
                'value' => '1',
            ],
            [
                'name' => 'pageLimit',
                'desc' => 'Number of pages to show',
                'type' => 'textfield',
                'value' => '3',
            ],
            [
                'name' => 'pageNavOuterTpl',
                'desc' => 'Outer template for page navigation',
                'type' => 'textfield',
                'value' => '<nav aria-label="[[*pagetitle]]"><ul class="pagination">[[+first]] [[+prev]] [[+pages]] [[+next]] [[+last]]</ul></nav>',
            ],
            [
                'name' => 'pageNextTpl',
                'desc' => 'Template for next page link',
                'type' => 'textfield',
                'value' => '<li class="page-item"><a class="page-link" href="[[+href]]"><span class="sr-only">Next</span> <i class="fa fa-angle-right"></i></a></li>',
            ],
            [
                'name' => 'pagePrevTpl',
                'desc' => 'Template for previous page link',
                'type' => 'textfield',
                'value' => '<li class="page-item"><a class="page-link" href="[[+href]]"><i class="fa fa-angle-left"></i> <span class="sr-only">Prev</span></a></li>',
            ],
            [
                'name' => 'pageFirstTpl',
                'desc' => 'Template for next page link',
                'type' => 'textfield',
                'value' => '<li class="page-item"><a class="page-link" href="[[+href]]"><i class="fa fa-angles-left"></i> <span class="sr-only">First</span></a></li>',
            ],
            [
                'name' => 'pageLastTpl',
                'desc' => 'Template for previous page link',
                'type' => 'textfield',
                'value' => '<li class="page-item"><a class="page-link" href="[[+href]]"><span class="sr-only">Last</span> <i class="fa fa-angles-right"></i></a></li>',
            ],
            [
                'name' => 'pageActiveTpl',
                'desc' => 'Template for active page link',
                'type' => 'textfield',
                'value' => '<li class="page-item"><a class="page-link active" aria-current="page" href="[[+href]]">[[+pageNo]]</a></li>',
            ],
            [
                'name' => 'pageNavTpl',
                'desc' => 'Template for page navigation',
                'type' => 'textfield',
                'value' => '<li class="page-item"><a class="page-link" href="[[+href]]">[[+pageNo]]</a></li>',
            ]
        ];
        $propertySet->set('properties', $properties);
        $propertySet->save();
        $snippet = $this->modx->getObject(\MODX\Revolution\modSnippet::class, ['name' => 'getPage']);
        if (empty($snippet)) {
            return;
        }
        $elementPropertySet = $this->modx->getObject(\MODX\Revolution\modElementPropertySet::class, [
            'element_class' => \MODX\Revolution\modSnippet::class,
            'element' => $snippet->get('id'),
            'property_set' => $propertySet->get('id'),
        ]);
        if (empty($elementPropertySet)) {
            $elementPropertySet = $this->modx->newObject(\MODX\Revolution\modElementPropertySet::class);
            $elementPropertySet->fromArray([
                'element_class' => \MODX\Revolution\modSnippet::class,
                'element' => $snippet->get('id'),
                'property_set' => $propertySet->get('id'),
            ]);
            $elementPropertySet->save();
        }
    }
};