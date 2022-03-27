<template lang="">
    <div>
            <div class="mainmenu-wrapper">
            <div class="menu-area menu1 menu--light">
                <div class="top-menu-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="menu-fullwidth">
                                    <div class="logo-wrapper order-lg-0 order-sm-1">
                                        <div class="logo logo-top">
                                            <Link href="/"><img src="/frontend/img/logo-white.png" alt="logo image" class="img-fluid"></Link>
                                        </div>
                                    </div><!-- ends: .logo-wrapper -->
                                    <div class="menu-container order-lg-1 order-sm-0">
                                        <div class="d_menu">
                                            <nav class="navbar navbar-expand-lg mainmenu__menu">
                                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#direo-navbar-collapse" aria-controls="direo-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                                                    <span class="navbar-toggler-icon icon-menu"><i class="la la-reorder"></i></span>
                                                </button>
                                                <!-- Collect the nav links, forms, and other content for toggling -->
                                                <div class="collapse navbar-collapse" id="direo-navbar-collapse">
                                                    <ul class="navbar-nav">
                                                        <li>
                                                            <Link href="/">Home</Link>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /.navbar-collapse -->
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="menu-right order-lg-2 order-sm-2">
                                        <div class="search-wrapper">
                                            <div class="nav_right_module search_module">

                                            </div>
                                            <div class="search-categories">
                                                <ul class="list-unstyled">
                                                    <li><a href=""><span class="la la-glass bg-danger"></span> Food & Drinks</a></li>
                                                    <li><a href=""><span class="la la-cutlery bg-primary"></span> Restaurants</a></li>
                                                    <li><a href=""><span class="la la-map-marker bg-success"></span> Places</a></li>
                                                    <li><a href=""><span class="la la-shopping-cart bg-secondary"></span> Shopping & Store</a></li>
                                                    <li><a href=""><span class="la la-bed bg-info"></span> Hotels</a></li>
                                                    <li><a href=""><span class="la la-bank bg-warning"></span> Art & History</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- ends: .search-wrapper -->
                                        <!-- start .author-area -->
                                        <div class="author-area">
                                            <div class="author__access_area">
                                                <ul class="d-flex list-unstyled align-items-center">
                                                    <li v-if="$page.props.authCheck">
                                                        <Link href="/add-listing"  class="btn btn-xs btn-gradient btn-gradient-two">
                                                            <span class="la la-plus"></span> Add Listing
                                                        </Link>
                                                    </li>
                                                    <li v-if="!$page.props.authCheck" >
                                                        <a href="" class="access-link" data-toggle="modal" data-target="#login_modal">Login</a>
                                                        <span>or</span>
                                                        <a href="" class="access-link" data-toggle="modal" data-target="#signup_modal">Register</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end .author-area -->

                                        <div v-if="$page.props.authCheck" class="offcanvas-menu " >

                                            <a href="javascript:void(0);" @click="toggleSideBar" class="offcanvas-menu__user"><i class="la la-user"></i></a>
                                            <div class="offcanvas-menu__contents" :class="toggle ? 'active' : ''">
                                                <a href="javascript:void(0);" class="offcanvas-menu__close" @click="toggleSideBar"><i class="la la-times-circle"></i></a>
                                                <div class="author-avatar">
                                                    <img src="img/author-avatar.png" alt="" class="rounded-circle">
                                                </div>
                                                <ul class="list-unstyled">
                                                    <li><Link href="/dashboard">My Profile</Link></li>
                                                    <li><a href="javascript:void(0);">My Listing</a></li>
                                                    <li><a href="javascript:void(0);">Add Listing</a></li>
                                                    <li><a href="javascript:void(0);" @click="logoutUser">Logout</a></li>
                                                </ul>
                                                <div class="search_area">
                                                    <form action="/">
                                                        <div class="input-group input-group-light">
                                                            <input type="text" class="form-control search_field" placeholder="Search here..." autocomplete="off">
                                                        </div>
                                                        <button type="submit" class="btn btn-sm btn-secondary">Search</button>
                                                    </form>
                                                </div><!-- ends: .search_area -->
                                            </div><!-- ends: .author-info -->
                                        </div><!-- ends: .offcanvas-menu -->

                                    </div><!-- ends: .menu-right -->
                                </div>
                            </div>
                        </div>
                        <!-- end /.row -->
                    </div>
                    <!-- end /.container -->
                </div>
                <!-- end  -->
            </div>
        </div><!-- ends: .mainmenu-wrapper -->
        <LoginModal ></LoginModal>
        <RegisterModal></RegisterModal>
    </div>
</template>
<script>
import LoginModal from './LoginModal.vue';
import RegisterModal from './RegisterModal.vue';
import axios from 'axios';
import { Link } from '@inertiajs/inertia-vue3'

export default {
    components: {
        LoginModal,
        RegisterModal,
        Link
    },
    data() {
        return {
            toggle: false
        }
    },

    methods: {
        toggleSideBar() {
            this.toggle = !this.toggle;
             console.log(this.$page)
        },

        async logoutUser() {
            await axios.get(route('frontend.logout'))
                .then((response) => {
                    this.$page.props.authCheck = false;
                    this.$toast.success(response.data.message);
                    /* redirect to path*/
                    this.$inertia.get(`/`);
                })
                .catch((error) => {
                    this.$toast.error(error.response.data.message);
                });
        }

    }
}
</script>
<style lang="">

</style>
