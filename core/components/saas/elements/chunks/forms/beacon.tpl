<div class="py-4 bg-dark text-white">
    <div class="container">
        <div class="row pt-3">
            <div class="col-md-2 text-center">
                <img class="img-fluid" src="[[++saas.theme_dir]]web/img/product-opt-in@2x.png">
            </div>
            <div class="col-md-8 px-5 pt-lg-3 mt-5 mt-md-0">
                <h2>[[%saas.fe.beacon? &topic=`fe` &namespace=`saas`]]</h2>
                <p class="lead">[[%saas.fe.beacon_desc? &topic=`fe` &namespace=`saas`]]</p>
                <form class="form-inline">
                    <label class="col-lg-4 col-sm-12"><input type="text" class="form-control me-lg-2 mb-2 border" placeholder="[[%saas.fe.form_name? &topic=`fe` &namespace=`saas`]]"></label>
                    <label class="col-lg-5 col-sm-12"><input type="email" class="form-control me-lg-2 mb-2 border" placeholder="[[%saas.fe.form_email? &topic=`fe` &namespace=`saas`]]"></label>
                    <div class="col"><button type="submit" class="btn btn-primary text-white mb-sm-2">[[%saas.fe.beacon_action? &topic=`fe` &namespace=`saas`]]</button></div>
                </form>
            </div>
        </div>
    </div>
</div>