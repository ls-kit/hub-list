<template lang="">
    <div>
    <section class="header-breadcrumb bgimage overlay overlay--dark">
        <div class="bg_image_holder"><img src="img/breadcrumb1.jpg" alt=""></div>
        <MainMenu ></MainMenu>
        <div class="breadcrumb-wrapper content_above">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="page-title">Add Listing</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Listings</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div><!-- ends: .breadcrumb-wrapper -->
    </section>
    <section class="add-listing-wrapper border-bottom section-bg section-padding-strict">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="atbd_content_module">
                        <div class="atbd_content_module__tittle_area">
                            <div class="atbd_area_title">
                                <h4><span class="la la-user"></span>General Information</h4>
                            </div>
                        </div>
                        <div class="atbdb_content_module_contents">
                            <form action="/">
                                <div class="form-group">
                                    <label for="title" class="form-label">Job Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Enter Title" required>
                                </div>
                                <div class="form-group">
                                    <label for="title" class="form-label">Company Name</label>
                                    <input type="text" class="form-control" id="title" placeholder="Enter Title" required>
                                </div>

                                <div class="form-group">
                                    <label for="title" class="form-label">Shot Description</label>
                                    <input type="text" class="form-control" id="shot_description" placeholder="Short Description" required>
                                </div>

                                <div class="form-group">
                                    <label for="desc" class="form-label">Long Description</label>
                                    <textarea id="desc" rows="8" class="form-control" placeholder="Description"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="desc" class="form-label">Requirement</label>
                                    <textarea id="desc" rows="8" class="form-control" placeholder="Requirement"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="title" class="form-label">Job Nature</label>
                                    <input type="text" class="form-control" id="job_nature" placeholder="eg: Full Time" required>
                                </div>


                            </form>
                        </div><!-- ends: .atbdb_content_module_contents -->
                    </div><!-- ends: .atbd_content_module -->
                </div><!-- ends: .col-lg-10 -->
                <div class="col-lg-10 offset-lg-1">
                    <div class="atbd_content_module">
                        <div class="atbd_content_module__tittle_area">
                            <div class="atbd_area_title">
                                <h4><span class="la la-user"></span>Contact Information</h4>
                            </div>
                        </div>
                        <div class="atbdb_content_module_contents">
                            <form>
                            <!---
                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary m-bottom-20">
                                    <input type="checkbox" class="custom-control-input" id="hide_contace_info">
                                    <label class="custom-control-label" for="hide_contace_info">Check it to hide contact
                                        information for this listing</label>
                                </div>
                            -->
                                <div class="form-group">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" placeholder="Listing Address eg. Houghton Street London WC2A 2AE UK" id="address" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone_number" class="form-label">Phone Number</label>
                                    <input type="text" placeholder="Phone Number" id="phone_number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="contact_email" class="form-label">Email</label>
                                    <input type="email" id="contact_email" class="form-control" placeholder="Enter Email" required>
                                </div>


                            </form>
                        </div><!-- ends: .atbdb_content_module_contents -->
                    </div><!-- ends: .atbd_content_module -->
                </div><!-- ends: .col-lg-10 -->

                <div class="col-lg-10 offset-lg-1 text-center">
                    <div class="atbd_term_and_condition_area custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                        <input type="checkbox" class="custom-control-input" name="listing_t" value="1" id="listing_t">
                        <label for="listing_t" class="not_empty custom-control-label">I Agree with all <a href="" id="listing_t_c">Terms & Conditions</a></label>
                    </div>
                    <div class="btn_wrap list_submit m-top-25">
                        <button type="submit" class="btn btn-primary btn-lg listing_submit_btn">Submit listing</button>
                    </div>
                </div><!-- ends: .col-lg-10 -->
            </div>
        </div>
    </section><!-- ends: .add-listing-wrapper -->
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
