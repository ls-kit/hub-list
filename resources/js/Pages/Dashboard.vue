<template lang="">
    <section class="header-breadcrumb bgimage overlay overlay--dark">
        <div class="bg_image_holder"><img src="img/breadcrumb1.jpg" alt=""></div>
        <MainMenu></MainMenu>
        <div class="breadcrumb-wrapper content_above">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="page-title">Dashboard</h1>
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
    <section class="dashboard-wrapper section-bg p-bottom-70">
        <div class="dashboard-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard-nav-area">
                            <ul class="nav" id="dashboard-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="all-listings" data-toggle="tab" href="#listings" role="tab" aria-controls="listings" aria-selected="true">My Listings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">My Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="faborite-listings" data-toggle="tab" href="#favorite" role="tab" aria-controls="favorite" aria-selected="false">Favorite Listing</a>
                                </li>
                            </ul>
                            <div class="nav_button">
                                <a href="add-listing.html" class="btn btn-primary"><span class="la la-plus"></span> Add Listing</a>
                                <a href="" class="btn btn-secondary">Log Out</a>
                            </div>
                        </div>
                    </div><!-- ends: .col-lg-12 -->
                </div>
            </div>
        </div><!-- ends: .dashboard-nav -->
        <div class="tab-content p-top-100" id="dashboard-tabs-content">
        
        <!-- starts: listing section -->
        <MyListingSection :listings="listings" :loading="isLoading"></MyListingSection>
        <!-- ends: listing section -->

        <ProfileSection></ProfileSection>

        </div>
        <!-- Modal -->
        <div class="modal fade" id="modal-item-remove" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center p-top-40 p-bottom-50">
                        <span class="la la-exclamation-circle color-warning"></span>
                        <h1 class="display-3 m-bottom-10">Are you sure?</h1>
                        <p class="m-bottom-30">Do you really want to delete this item?</p>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary m-right-15" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger">Yes, Delete it!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
import MyListingSection from '../Sections/MyListingSection.vue'
import ProfileSection from '../Sections/ProfileSection.vue'
import MainMenu from '../Components/Menu.vue'
export default {
    components: {
        MyListingSection,
        ProfileSection,
        MainMenu
    },
    data() {
        return {
            isLoading: true,
            userId: this.$page.props.auth.user.id,
            listings: [],
        }
    },
    created() {
        this.getListings();
    },
    methods: {
        async getListings() {
            await axios.get(route('getlisting', this.userId))
                .then(response => {
                    this.listings = response.data
                    this.isLoading = false;
                })
                .catch(error => {
                    console.log(error)
                })
        }
    }
}
</script>

