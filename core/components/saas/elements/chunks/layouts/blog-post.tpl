<div class="py-5">
    <div class="container">
        <div class="row">
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
            <div class="col pr-md-5" data-fred-dropzone="content" style="min-height: 500px;">
                [[*content]]
            </div>
            <div class="col-md-4 pl-md-5">
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
            &parents=`[[*parent]]`
            &depth=`1`
            &tpl=`saas_blog_featured-item`
            &limit=`[[++saas.setting.blog_show]]`
            &tvFilters=`saas_blog_featured==1`
            &where=`{"id:!=":[[*id]]}`
            ]]
        </div>
    </div>
</div>