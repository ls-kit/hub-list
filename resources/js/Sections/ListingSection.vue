<template lang="">
    <div>
            <section class="listing-cards section-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Best Job Listings Around the World</h2>
                        <p>Explore the popular Job listings around the world</p>
                    </div>
                </div>
                <div class="listing-cards-wrapper col-lg-12">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6" v-for="listing in listings">
                            <div class="atbd_single_listing ">
                                <article class="atbd_single_listing_wrapper">
                                    <figure class="atbd_listing_thumbnail_area">
                                        <div class="atbd_listing_image">
                                            <a href="">
                                                <img src="/frontend/img/p1.jpg" alt="listing image">
                                            </a>
                                        </div><!-- ends: .atbd_listing_image -->
                                        <div class="atbd_author atbd_author--thumb">
                                            <a href="">
                                                <img src="/frontend/img/author-thumb2.jpg" alt="Author Image">
                                                <span class="custom-tooltip">Jeffery A, Owner</span>
                                            </a>
                                        </div>
                                        <div class="atbd_thumbnail_overlay_content">
                                            <ul class="atbd_upper_badge">
                                                <li><span class="atbd_badge atbd_badge_featured">Featured</span></li>
                                            </ul><!-- ends .atbd_upper_badge -->
                                        </div><!-- ends: .atbd_thumbnail_overlay_content -->
                                    </figure><!-- ends: .atbd_listing_thumbnail_area -->
                                    <div class="atbd_listing_info">
                                        <div class="atbd_content_upper">
                                            <h4 class="atbd_listing_title">
                                                <Link :href="route('showlisting',['job', listing.id])">{{ listing.title }}</Link>
                                            </h4>
                                            <div class="atbd_listing_meta">
                                                <!-- <span class="atbd_meta atbd_listing_rating">4.5<i class="la la-star"></i></span> -->
                                                <span class="atbd_meta atbd_listing_price">{{ listing.salary }}</span>
                                                <!-- <span class="atbd_meta atbd_badge_open">Open Now</span> -->
                                            </div><!-- End atbd listing meta -->
                                            <div class="atbd_listing_data_list">
                                                <ul>
                                                    <li>
                                                        <p><span class="la la-map-marker"></span>{{ listing.address }}</p>
                                                    </li>
                                                    <li>
                                                        <p><span class="la la-phone"></span>{{ listing.phone }}</p>
                                                    </li>
                                                    <li>
                                                        <p><span class="la la-calendar-check-o"></span></p>
                                                    </li>
                                                </ul>
                                            </div><!-- End atbd listing meta -->
                                        </div><!-- end .atbd_content_upper -->
                                        <div class="atbd_listing_bottom_content">
                                            <div class="atbd_content_left">
                                                <div class="atbd_listing_category">
                                                    <a href=""><span class="la la-glass"></span>Restaurant</a>
                                                </div>
                                            </div>
                                            <ul class="atbd_content_right">
                                                <li class="atbd_count"><span class="la la-eye"></span>900+</li>
                                                <li class="atbd_save">
                                                    <span class="la la-heart-o"></span>
                                                </li>
                                            </ul>
                                        </div><!-- end .atbd_listing_bottom_content -->
                                    </div><!-- ends: .atbd_listing_info -->
                                </article><!-- atbd_single_listing_wrapper -->
                            </div>
                        </div><!-- ends: .col-lg-4 -->



                        <div class="col-lg-12 text-center m-top-20">
                            <Link href="/show" class="btn btn-gradient btn-gradient-two">Explore All</Link>
                        </div>
                    </div>
                </div><!-- ends: .listing-cards-wrapper -->
            </div>
        </div>
    </section><!-- ends: .listing-cards -->
                        <!-- job opening card  -->
    <section class="listing-cards section-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Jop openings</h2>
                        <p>Explore the popular listings around the world</p>
                    </div>
                </div>
                <div class="listing-cards-wrapper job-opening col-lg-12">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="atbd_single_listing ">
                                <article class="atbd_single_listing_wrapper">
                                    <div class="item-wrapper-top d-flex align-items-center">
                                        <div class="img mr-3">
                                            <img src="https://main.mylistingtheme.com/wp-content/uploads/sites/6/2019/11/logo60-1-150x150.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <h4 class="title mb-2">Full stack developer</h4>
                                            <span class="loc sm-txt mr-2">
                                                <i class="la la-map-marker"></i>
                                                Chivers Rd
                                            </span>
                                            <span class="phn sm-txt">
                                                <i class="icon-location-pin-check-2 sm-icon"></i>
                                                +88745247
                                            </span>
                                        </div>
                                    </div>
                                    <div class="item-wrapper-bottom">
                                        <div class="position sm-txt d-flex align-items-center">
                                            <i class="la la-map-marker icon-bg"></i>
                                            Part Time
                                        </div>
                                    </div>
                                </article><!-- atbd_single_listing_wrapper -->
                            </div>
                        </div><!-- ends: .col-lg-4 -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="atbd_single_listing ">
                                <article class="atbd_single_listing_wrapper">
                                    <div class="item-wrapper-top d-flex align-items-center">
                                        <div class="img mr-3">
                                            <img src="https://main.mylistingtheme.com/wp-content/uploads/sites/6/2019/11/logo60-1-150x150.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <h4 class="title mb-2">Full stack developer</h4>
                                            <span class="loc sm-txt mr-2">
                                                <i class="la la-map-marker"></i>
                                                Chivers Rd
                                            </span>
                                            <span class="phn sm-txt">
                                                <i class="icon-location-pin-check-2 sm-icon"></i>
                                                +88745247
                                            </span>
                                        </div>
                                    </div>
                                    <div class="item-wrapper-bottom">
                                        <div class="position sm-txt d-flex align-items-center">
                                            <i class="la la-map-marker icon-bg"></i>
                                            Part Time
                                        </div>
                                    </div>
                                </article><!-- atbd_single_listing_wrapper -->
                            </div>
                        </div><!-- ends: .col-lg-4 -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="atbd_single_listing ">
                                <article class="atbd_single_listing_wrapper">
                                    <div class="item-wrapper-top d-flex align-items-center">
                                        <div class="img mr-3">
                                            <img src="https://main.mylistingtheme.com/wp-content/uploads/sites/6/2019/11/logo60-1-150x150.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <h4 class="title mb-2">Full stack developer</h4>
                                            <span class="loc sm-txt mr-2">
                                                <i class="la la-map-marker"></i>
                                                Chivers Rd
                                            </span>
                                            <span class="phn sm-txt">
                                                <i class="icon-location-pin-check-2 sm-icon"></i>
                                                +88745247
                                            </span>
                                        </div>
                                    </div>
                                    <div class="item-wrapper-bottom">
                                        <div class="position sm-txt d-flex align-items-center">
                                            <i class="la la-map-marker icon-bg"></i>
                                            Part Time
                                        </div>
                                    </div>
                                </article><!-- atbd_single_listing_wrapper -->
                            </div>
                        </div><!-- ends: .col-lg-4 -->
                    </div>
                </div><!-- ends: .listing-cards-wrapper -->
            </div>
        </div>
    </section><!-- ends: .listing-cards -->
    </div>
</template>
<script>

import { Link } from '@inertiajs/inertia-vue3'
export default {
    props: ['listings'],
    components: {
        Link
    }
}
</script>
<style lang="css">
/* job opening css start  */
.job-opening .item-wrapper-top {
	border-left: 3px solid #903af9;
	padding: 15px;
	padding-bottom: 10px;
}
.job-opening .item-wrapper-top img {
	width: 45px;
	height: 45px;
	object-fit: contain;
	border-radius: 50%;
}
.job-opening .item-wrapper-top .title {
	color: #242429;
	font-size: 14px;
	line-height: 17.5px;
	font-weight: 600;
}
.job-opening .sm-txt {
	color: #242429;
	font-size: 14px;
	line-height: 18.5667px;
	font-weight: 400;
}
.job-opening .item-wrapper-bottom {
	border-top: 1px solid #e3e3e3;
    padding: 15px;
}
.job-opening .icon-bg {
	background-color: #6c1cff;
	width: 30px;
	height: 30px;
	display: flex;
	-webkit-box-pack: center;
	justify-content: center;
	-webkit-box-align: center;
	align-items: center;
	color: #fff;
	border-radius: 50%;
	overflow: hidden;
	min-width: 30px;
	margin-right: 10px;
	font-size: 17px;
}
/* job opening css end */
</style>
