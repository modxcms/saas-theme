<nav class="navbar navbar-expand-md p-4 navbar-light bg-light border border-top-0 border-right-0 border-left-0">
    <div class="container">
        <a class="navbar-brand nav-item mx-2 h5 text-uppercase fw-bolder" href="[[~1]]">
            [[++saas.setting.logo_light:ne=``:then=`
            <img src="[[++saas.setting.logo_light]]" width="[[++saas.setting.logo_width:default=`30`]]" height="[[++saas.setting.logo_height:default=`30`]]" alt="[[++saas.setting.site_name]]">
            `]]
            [[++saas.setting.show_company:is=`1`:then=`[[++saas.setting.site_name]]`]]
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse text-center justify-content-end" id="navbar">
            [[Wayfinder?
                &startId=`0`
                &level=`1`
                &displayStart=`0`
                &excludeDocs=`1,7,6`
                &outerTpl=`saas-nav-main-outer`
                &innerTpl=`saas-nav-main-inner`
                &rowTpl=`saas-nav-main-row`
                &rowClass=`nav-item mx-3`
            ]]
        </div>
    </div>
</nav>