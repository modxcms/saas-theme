<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col mb-sm-4">
                <h1 >[[*pagetitle]]</h1>
            </div>
            [[++saas.setting.blog_search_resource:gt=`0`:then=`
            <div class="col-md-4">
                <form action="[[~[[++saas.setting.blog_search_resource]]]]">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search Blog">
                        <button class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            `]]
        </div>
        <hr>
        <div class="row">
            <div class="col pr-md-5">
                [[!getPage@SaaSgetPage?
                &parents=`[[*id]]`
                &depth=`0`
                &elementClass=`modSnippet`
                &element=`getResources`
                &prepareTVs=`1`
                &includeTVs=`1`
                &includeTVList=`saas_page_featured_image`
                &tpl=`saas-blog-item`
                &limit=`4`
                ]]
                <nav class="row mb-5 gap-4">
                    [[!+page.nav]]
                </nav>
            </div>
            <div class="col-md-4 pl-md-5" data-fred-dropzone="saas_blog_sidebar" data-fred-target="saas_blog_sidebar" style="min-height: 500px;">
                [[*saas_blog_sidebar]]
            </div>
        </div>
    </div>
</div>
<div class="py-5 bg-primary text-white">
    <div class="container">
        <h1 class="text-center py-4">Popular Posts</h1>
        <div class="row py-4">
            [[getResources?
            &parents=`[[*id]]`
            &depth=`0`
            &prepareTVs=`1`
            &includeTVs=`1`
            &includeTVList=`saas_page_featured_image`
            &tpl=`saas_blog_featured-item`
            &limit=`[[++saas.setting.blog_show]]`
            &tvFilters=`saas_blog_featured==1`
            ]]
        </div>
    </div>
</div>