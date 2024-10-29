<footer class="bg-dark text-white">

    <div class="container">

        <div class="row">

            <div class="col-md-2 pb-md-5 pt-5">
                <p class="mx-2 h5 text-uppercase fw-bolder text-md-start text-center">
                    [[++saas.setting.logo_dark:ne=``:then=`
                        <img src="[[++logo_dark]]" width="30" height="30" alt="[[++site_name]]">
                    `:else=`
                        [[++saas.setting.logo_light:ne=``:then=`
                            <img src="[[++logo_light]]" width="30" height="30" alt="[[++site_name]]">
                        `]]
                    `]]
                    [[++saas.setting.show_company:ne=``:then=`[[++site_name]]`]]
                </p>
            </div>

            <div class="col-md-8 py-5 small text-md-start text-center">
                [[Wayfinder?
                    &startId=`0`
                    &level=`2`
                    &displayStart=`0`
                    &outerTpl=`saas-nav-footer-outer`
                    &innerTpl=`saas-nav-footer-inner`
                    &rowTpl=`saas-nav-footer-row`
                    &categoryFoldersTpl=`saas-nav-footer-row-container`
                    &innerRowTpl=`saas-nav-footer-row-inner`
                    &rowClass=`nav-item fw-bold`
                ]]
            </div>

            <div class="col-md-2 py-md-5 text-md-right text-center">
                <p class="small">&copy; Copyright [[+nowdate:default=`now`:strtotime:date=`%Y`]]</p>

                <ul class="list-inline">
                    [[++saas.setting.social_li:ne=``:then=`
                    <li class="list-inline-item">
                        <a class="text-white" href="[[++saas.setting.social_li]]"><i class="fab fa-lg fa-linkedin"></i></a>
                    </li>
                    `]]
                    [[++saas.setting.social_in:ne=``:then=`
                    <li class="list-inline-item">
                        <a class="text-white" href="[[++saas.setting.social_in]]"><i class="fab fa-lg fa-instagram"></i></a>
                    </li>
                    `]]
                    [[++saas.setting.social_fa:ne=``:then=`
                    <li class="list-inline-item">
                        <a class="text-white" href="[[++saas.setting.social_fa]]"><i class="fab fa-lg fa-facebook-square"></i></a>
                    </li>
                    `]]
                    [[++saas.setting.social_tw:ne=``:then=`
                    <li class="list-inline-item">
                        <a class="text-white" href="[[++saas.setting.social_tw]]"><i class="fab fa-lg fa-twitter-square"></i></a>
                    </li>
                    `]]
                    [[++saas.setting.social_yt:ne=``:then=`
                    <li class="list-inline-item">
                        <a class="text-white" href="[[++saas.setting.social_yt]]"><i class="fab fa-lg fa-youtube-square"></i></a>
                    </li>
                    `]]
                </ul>
            </div>

        </div>

    </div>

</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous" defer></script>
<script src="[[!getLatestFile?option=`js`]]" defer></script>

</body>

</html>
