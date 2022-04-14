<template lang="">
    <div>
    <footer class="footer-three footer-grey p-top-95">
        <div class="footer-top p-bottom-25">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-sm-6">
                        <div class="widget widget_pages">
                            <h2 class="widget-title">Company Info</h2>
                            <ul class="list-unstyled">
                                <li  v-for="menu in menus.footer_menu_1" class="page-item">
                                    <Link :href="menu.link">{{menu.label}}</Link>
                                </li>
                            </ul>
                        </div>
                    </div><!-- ends: .col-lg-3 -->
                    <div class="col-lg-3 d-flex justify-content-lg-center  col-sm-6">
                        <div class="widget widget_pages">
                            <h2 class="widget-title">Helpful Links</h2>
                            <ul class="list-unstyled">
                                <li  v-for="menu in menus.footer_menu_2" class="page-item">
                                    <Link :href="menu.link">{{menu.label}}</Link>
                                </li>
                            </ul>
                        </div>
                    </div><!-- ends: .col-lg-3 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget widget_social">
                            <h2 class="widget-title">Connect with Us</h2>
                            <ul class="list-unstyled social-list">
                                <li  v-for="menu in menus.footer_menu_3" class="page-item">
                                    <Link :href="menu.link">{{menu.label}}</Link>
                                </li>
                            </ul>
                        </div><!-- ends: .widget -->
                    </div><!-- ends: .col-lg-3 -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="widget widget_text">
                            <h2 class="widget-title">Direo on Mobile</h2>
                            <div class="textwidget">
                                <p>Download the Direo app today so you can find your events anytime, anywhere.</p>
                                <ul class="list-unstyled store-btns">
                                    <li><a href="" class="btn-gradient btn-gradient-two btn btn-md btn-icon icon-left"><span class="fab fa-apple"></span> App Store</a></li>
                                    <li><a href="" class="btn btn-dark btn-md btn-icon btn-icon"><span class="fab fa-android"></span> Google Play</a></li>
                                </ul>
                            </div>
                        </div><!-- ends: .widget -->
                    </div><!-- ends: .col-lg-3 -->
                </div>
            </div>
        </div><!-- ends: .footer-top -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-bottom--content">
                            <a href="" class="footer-logo"><img src="img/logo.png" alt=""></a>
                            <p class="m-0 copy-text">©2022 Lskit. Made with <span class="la la-heart-o"></span> by <a href="">Aazztech</a></p>
                            <ul class="list-unstyled lng-list">
                                <li><a href="">English</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- ends: .footer-bottom -->
    </footer><!-- ends: .footer -->
    </div>
</template>
<script>
import {Link} from '@inertiajs/inertia-vue3'
export default {
    components: {
        Link,
    },
    data() {
        return {
            menus: this.$page.props.menu,
        }
    }

}
</script>
<style lang="">

</style>
