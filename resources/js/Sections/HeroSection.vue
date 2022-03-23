<template lang="">
    <div>
    <section class="intro-wrapper bgimage overlay overlay--dark">
        <div class="bg_image_holder"><img src="img/intro.jpg" alt=""></div>

        <MainMenu></MainMenu>

        <div class="directory_content_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="search_title_area">
                            <h2 class="title">Find the Best Places to Be</h2>
                            <p class="sub_title">All the top locations – from restaurants and clubs, to galleries, famous places and more..</p>
                        </div><!-- ends: .search_title_area -->
                        <form action="/" class="search_form">
                            <div class="atbd_seach_fields_wrapper">
                                <div class="single_search_field search_query">
                                    <input class="form-control search_fields" type="text" placeholder="What are you looking for?">
                                </div>
                                <div class="single_search_field search_category">
                                    <select class="search_fields" id="at_biz_dir-category">
                                        <option value="">Select a category</option>
                                        <option value="automobile">Automobile</option>
                                        <option value="education">Education</option>
                                        <option value="event">Event</option>
                                    </select>
                                </div>
                                <div class="single_search_field search_location">
                                    <select class="search_fields" id="at_biz_dir-location">
                                        <option value="">Select a location</option>
                                        <option value="ab">AB Simple</option>
                                        <option value="australia">Australia</option>
                                        <option value="australia-australia">Australia</option>
                                    </select>
                                </div>
                                <div class="atbd_submit_btn">
                                    <button type="submit" class="btn btn-block btn-gradient btn-gradient-one btn-md btn_search">Search</button>
                                </div>
                            </div>
                        </form><!-- ends: .search_form -->
                        <div class="directory_home_category_area">
                            <ul class="categories">
                                <li>
                                    <a href="">
                                        <span class="color-primary"><i class="la la-cutlery"></i></span>
                                        Restaurants
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="color-success"><i class="la la-map-marker"></i></span>
                                        Places
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="color-warning"><i class="la la-shopping-cart"></i></span>
                                        Shopping
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="color-danger"><i class="la la-bed"></i></span>
                                        Hotels
                                    </a>
                                </li>
                            </ul>
                        </div><!-- ends: .directory_home_category_area -->
                    </div><!-- ends: .col-lg-10 -->
                </div>
            </div>
        </div><!-- ends: .directory_search_area -->
    </section><!-- ends: .intro-wrapper -->
    </div>
</template>
<script>

import MainMenu from '../Components/Menu.vue'

export default {

    components: {
        MainMenu,
    }
}
</script>
<style lang="">

</style>
