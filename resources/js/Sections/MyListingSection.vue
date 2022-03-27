<template lang="">
    <div class="tab-pane fade show active" id="listings" role="tabpanel" aria-labelledby="all-listings">
        <div class="container">
            <Loader v-if="loading"></Loader>
            <div class="row">
                <div class="col-lg-4 col-sm-6" v-for="listing in listings">
                    <div class="atbd_single_listing atbd_listing_card">
                        <article class="atbd_single_listing_wrapper ">
                            <figure class="atbd_listing_thumbnail_area">
                                <div class="atbd_listing_image">
                                    <a href=""><img src="/frontend/img/p1.jpg" alt="listing image"></a>
                                </div>
                                <figcaption class="atbd_thumbnail_overlay_content">
                                    <div class="atbd_upper_badge">
                                        <span class="atbd_badge atbd_badge_featured">Featured</span>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="atbd_listing_info">
                                <div class="atbd_content_upper">
                                    <div class="atbd_dashboard_tittle_metas">
                                        <h4 class="atbd_listing_title">
                                            <a href="">{{ listing.title }}</a>
                                        </h4>
                                    </div><!-- ends: .atbd_dashboard_tittle_metas -->
                                    <div class="atbd_card_action">
                                        <div class="atbd_listing_meta">
                                            <span class="atbd_meta atbd_listing_rating">4.5<i class="la la-star"></i></span>
                                        </div><!-- ends: .atbd listing meta -->
                                        <div class="db_btn_area">
                                            <div class="dropup edit_listing">
                                                <a href="#" role="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Edit</a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href=""><span class="la la-edit color-primary"></span> Edit Your Listing</a>
                                                    <a class="dropdown-item" href=""><span class="la la-money color-secondary"></span> Change Your Plan</a>
                                                </div>
                                            </div>
                                            <a href="#" class="directory_remove_btn btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modal-item-remove">Delete</a>
                                        </div>
                                        <!--ends .db_btn_area-->
                                    </div>
                                </div><!-- end .atbd_content_upper -->
                                <div class="atbd_listing_bottom_content">
                                    <div class="listing-meta">
                                        <p><span>Company Name:</span> {{ listing.company_name }}</p>
                                        <p><span>Job Nature:</span> {{ listing.job_nature }}</p>
                                        <p><span>Salary:</span> {{ listing.salary}}</p>
                                    </div>
                                </div><!-- end .atbd_listing_bottom_content -->
                            </div><!-- ends: .atbd_listing_info -->
                        </article>
                    </div><!-- ends: .atbd_single_listing -->
                </div><!-- ends: .col-lg-4 -->
            </div>
        </div>
    </div><!-- ends: .tab-pane -->
</template>
<script>
import Loader from '../Components/Loader.vue'
export default {
    props: ['listings', 'loading'],
    components: {
        Loader
    }
}
</script>
<style lang="">

</style>
