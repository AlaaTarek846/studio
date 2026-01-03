<ul class="main-menu">

    <!-- Start::slide -->
    <li class="slide">
        <a href="{{ route('admin.dashboard') }}"
            class="side-menu__item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="bx bx-home side-menu__icon"></i>
            <span class="side-menu__label">{{ __('translation.main') }}</span>
        </a>
    </li>

    <!-- Start::home -->
        <li
            class="slide has-sub {{ request()->routeIs('admin.page.home-sliders')   || request()->routeIs('admin.page.partners')  || request()->routeIs('admin.page.team') || request()->routeIs('admin.page.clients') ? 'active open' : '' }}">
            <a href="javascript:void(0);"
                class="side-menu__item {{ request()->routeIs('admin.page.home-sliders') ||  request()->routeIs('admin.page.partners')  || request()->routeIs('admin.page.team') || request()->routeIs('admin.page.clients') ? 'active' : '' }}">
                <i class="bi bi-map side-menu__icon"></i>
                <span class="side-menu__label">الصفحة الرئيسية</span>
                <i class="fe fe-chevron-right side-menu__angle"></i>
            </a>
            <ul class="slide-menu child1">
                <li class="slide side-menu__label1">
                    <a href="javascript:void(0)">الصفحة الرئيسية</a>
                </li>
                <li class="slide">
                    <a href="{{ route('admin.page.home-sliders') }}"
                        class="side-menu__item {{ request()->routeIs('admin.page.home-sliders') ? 'active' : '' }}">
                        السكشن المتحرك
                    </a>
                </li>

{{--                <li class="slide">--}}
{{--                    <a href="{{ route('admin.page.partners') }}"--}}
{{--                        class="side-menu__item {{ request()->routeIs('admin.page.partners') ? 'active' : '' }}">--}}
{{--                        فيديو تعرفي--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="slide">
                    <a href="{{ route('admin.page.team') }}"
                        class="side-menu__item {{ request()->routeIs('admin.page.team') ? 'active' : '' }}">
                        اعضاء الشركة
                    </a>
                </li>
                <li class="slide">
                    <a href="{{ route('admin.page.clients') }}"
                        class="side-menu__item {{ request()->routeIs('admin.page.clients') ? 'active' : '' }}">
                        الشركاء
                    </a>
                </li>
                <li class="slide">
                    <a href="{{ route('admin.page.testimonial') }}"
                        class="side-menu__item {{ request()->routeIs('admin.page.testimonial') ? 'active' : '' }}">
                        اراء العملاء
                    </a>
                </li>

            </ul>
        </li>
    <!-- End::home -->

    <!-- Start::about -->
        <li class="slide">
            <a href="{{ route('admin.page.one-about') }}"
               class="side-menu__item {{ request()->routeIs('admin.page.one-about') ? 'active' : '' }}">
                <i class="bi bi-map side-menu__icon"></i>
                <span class="side-menu__label">صفحة من نحن</span>
            </a>
        </li>
    <!-- End::about -->

    <!-- Start::service -->
        <li class="slide">
            <a href="{{ route('admin.page.services') }}"
               class="side-menu__item {{ request()->routeIs('admin.page.services') ? 'active' : '' }}">
                <i class="bi bi-map side-menu__icon"></i>
                <span class="side-menu__label">صفحة الخدمات</span>
            </a>
        </li>
    <!-- End::service -->

    <!-- Start::articles -->
        <li
                class="slide has-sub {{ request()->routeIs('admin.page.articles') || request()->routeIs('admin.page.articles-queries') || request()->routeIs('admin.page.article-categories') ? 'active open' : '' }}">
            <a href="javascript:void(0);"
               class="side-menu__item {{ request()->routeIs('admin.page.articles') || request()->routeIs('admin.page.articles-queries') || request()->routeIs('admin.page.article-categories') ? 'active' : '' }}">
                <i class="bi bi-map side-menu__icon"></i>
                <span class="side-menu__label">صفحة المقالات</span>
                <i class="fe fe-chevron-right side-menu__angle"></i>

            </a>

            <ul class="slide-menu child1">
                <li class="slide side-menu__label1">
                    <a href="javascript:void(0)">صفحة المقالات</a>
                </li>

                <li class="slide">
                    <a href="{{ route('admin.page.article-categories') }}"
                       class="side-menu__item {{ request()->routeIs('admin.page.article-categories') ? 'active' : '' }}">
                        فئات المقالات
                    </a>
                </li>

                <li class="slide">
                    <a href="{{ route('admin.page.articles') }}"
                       class="side-menu__item {{ request()->routeIs('admin.page.articles') ? 'active' : '' }}">
                        المقالات
                    </a>
                </li>

                <li class="slide">
                    <a href="{{ route('admin.page.articles-queries') }}"
                       class="side-menu__item {{ request()->routeIs('admin.page.articles-queries') ? 'active' : '' }}">
                        استعلامات المقالات
                    </a>
                </li>

            </ul>
        </li>
    <!-- End::articles -->





    <!-- Start::faq -->
    <li class="slide">
        <a href="{{ route('admin.page.gallery') }}"
           class="side-menu__item {{ request()->routeIs('admin.page.gallery') ? 'active' : '' }}">
            <i class="bi bi-map side-menu__icon"></i>
            <span class="side-menu__label">صور</span>
        </a>
    </li>
    <!-- End::faq -->


    <!-- Start::home -->
    <li
            class="slide has-sub {{ request()->routeIs('admin.page.property-types')   || request()->routeIs('admin.page.companies')  || request()->routeIs('admin.page.projects') || request()->routeIs('admin.page.areas')|| request()->routeIs('admin.page.properties')|| request()->routeIs('admin.page.resales') ? 'active open' : '' }}">
        <a href="javascript:void(0);"
           class="side-menu__item {{ request()->routeIs('admin.page.property-types') ||  request()->routeIs('admin.page.companies')  || request()->routeIs('admin.page.projects') || request()->routeIs('admin.page.areas')|| request()->routeIs('admin.page.properties')|| request()->routeIs('admin.page.resales') ? 'active' : '' }}">
            <i class="bi bi-map side-menu__icon"></i>
            <span class="side-menu__label">المشاريع </span>
            <i class="fe fe-chevron-right side-menu__angle"></i>
        </a>
        <ul class="slide-menu child1">
            <li class="slide side-menu__label1">
                <a href="javascript:void(0)">المشاريع</a>
            </li>
            <li class="slide">
                <a href="{{ route('admin.page.property-types') }}"
                   class="side-menu__item {{ request()->routeIs('admin.page.property-types') ? 'active' : '' }}">
                    أنواع العقارات
                </a>
            </li>
            <!-- Start::articles -->
            <li
                    class="slide has-sub {{ request()->routeIs('admin.page.projects') || request()->routeIs('admin.page.companies') || request()->routeIs('admin.page.areas') || request()->routeIs('admin.page.properties') ? 'active open' : '' }}">
                <a href="javascript:void(0);"
                   class="side-menu__item {{ request()->routeIs('admin.page.projects') || request()->routeIs('admin.page.companies') || request()->routeIs('admin.page.areas')|| request()->routeIs('admin.page.properties') ? 'active' : '' }}">
                    <i class="bi bi-map side-menu__icon"></i>
                    <span class="side-menu__label"> primary</span>
                    <i class="fe fe-chevron-right side-menu__angle"></i>

                </a>

                <ul class="slide-menu child1">
                    <li class="slide side-menu__label1">
                        <a href="javascript:void(0)"> primary</a>
                    </li>

                    <li class="slide">
                        <a href="{{ route('admin.page.companies') }}"
                           class="side-menu__item {{ request()->routeIs('admin.page.companies') ? 'active' : '' }}">
                            الشركات
                        </a>
                    </li>

                    <li class="slide">
                        <a href="{{ route('admin.page.projects') }}"
                           class="side-menu__item {{ request()->routeIs('admin.page.projects') ? 'active' : '' }}">
                            المشاريع
                        </a>
                    </li>

                    <li class="slide">
                        <a href="{{ route('admin.page.areas') }}"
                           class="side-menu__item {{ request()->routeIs('admin.page.areas') ? 'active' : '' }}">
                            المناطق
                        </a>
                    </li>

                   <li class="slide">
                        <a href="{{ route('admin.page.properties') }}"
                           class="side-menu__item {{ request()->routeIs('admin.page.properties') ? 'active' : '' }}">
                            العقارات
                        </a>
                    </li>



                </ul>
            </li>
            <!-- End::articles -->
            <!-- Start::articles -->
            <li
                    class="slide has-sub {{ request()->routeIs('admin.page.resales')   ? 'active open' : '' }}">
                <a href="javascript:void(0);"
                   class="side-menu__item {{ request()->routeIs('admin.page.resales')  ? 'active' : '' }}">
                    <i class="bi bi-map side-menu__icon"></i>
                    <span class="side-menu__label"> Resale</span>
                    <i class="fe fe-chevron-right side-menu__angle"></i>

                </a>

                <ul class="slide-menu child1">
                    <li class="slide side-menu__label1">
                        <a href="javascript:void(0)"> Resale</a>
                    </li>



                   <li class="slide">
                        <a href="{{ route('admin.page.resales') }}"
                           class="side-menu__item {{ request()->routeIs('admin.page.resales') ? 'active' : '' }}">
                            العقارات
                        </a>
                    </li>



                </ul>
            </li>
            <!-- End::articles -->


        </ul>
    </li>
    <!-- End::home -->





    <li
            class="slide has-sub {{ request()->routeIs('admin.page.setting') || request()->routeIs('admin.page.policies') || request()->routeIs('admin.page.faq') || request()->routeIs('admin.page.subscribes') || request()->routeIs('admin.page.contact-messages') ? 'active open' : '' }}">
        <a href="javascript:void(0);"
           class="side-menu__item {{ request()->routeIs('admin.page.setting') || request()->routeIs('admin.page.policies') || request()->routeIs('admin.page.faq') || request()->routeIs('admin.page.subscribes')|| request()->routeIs('admin.page.contact-messages') ? 'active' : '' }}">
            <i class="bi bi-map side-menu__icon"></i>
            <span class="side-menu__label"> الاعدادات</span>
            <i class="fe fe-chevron-right side-menu__angle"></i>

        </a>

        <ul class="slide-menu child1">
            <li class="slide side-menu__label1">
                <a href="javascript:void(0)"> الاعدادات</a>
            </li>

            <li class="slide">
                <a href="{{ route('admin.page.setting') }}"
                   class="side-menu__item {{ request()->routeIs('admin.page.setting') ? 'active' : '' }}">
                    الاعدادات
                </a>
            </li>

            <li class="slide">
                <a href="{{ route('admin.page.policies') }}"
                   class="side-menu__item {{ request()->routeIs('admin.page.policies') ? 'active' : '' }}">
                    سياسات الشركة
                </a>
            </li>

            <li class="slide">
                <a href="{{ route('admin.page.faq') }}"
                   class="side-menu__item {{ request()->routeIs('admin.page.faq') ? 'active' : '' }}">
                    الأسئلة الشائعة
                </a>
            </li>

            <li class="slide">
                <a href="{{ route('admin.page.contact-messages') }}"
                   class="side-menu__item {{ request()->routeIs('admin.page.contact-messages') ? 'active' : '' }}">
                    رسائل التواصل
                </a>
            </li>

            <li class="slide">
                <a href="{{ route('admin.page.subscribes') }}"
                   class="side-menu__item {{ request()->routeIs('admin.page.subscribes') ? 'active' : '' }}">
                    المشتركين
                </a>
            </li>

        </ul>
    </li>


</ul>
