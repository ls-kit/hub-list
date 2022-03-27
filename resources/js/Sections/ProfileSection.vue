<template lang="">
    <div class="tab-pane fade p-bottom-30" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 mb-5 mb-lg-0">
                <div class="user_pro_img_area">
                    <img src="img/author-profile.jpg" alt="">
                    <div class="image-info">
                        <h6>Profile Image</h6>
                        <span>JPG or PNG 120x120 px</span>
                    </div>
                    <div class="custom-file-upload">
                        <input type="file" id="customFile">
                        <label for="customFile" class="btn btn-sm btn-secondary">Upload New Image</label>
                    </div>
                    <button class="btn btn-sm btn-danger">Delete Image</button>
                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="atbd_author_module">
                    <div class="atbd_content_module">
                        <div class="atbd_content_module__tittle_area">
                            <div class="atbd_area_title">
                                <h4><span class="la la-user"></span>My Profile</h4>
                            </div>
                        </div>
                        <div class="atbdb_content_module_contents">
                            <div class="user_info_wrap">
                                <!--Full name-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="full_name" class="not_empty">Full Name</label>
                                            <input class="form-control" type="text" placeholder="Full name" id="full_name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="user_name" class="not_empty">Username</label>
                                            <input class="form-control" id="user_name" type="text" disabled="disabled" value="admin">
                                            <p>(Username can not be changed)</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="first_name" class="not_empty">First Name</label>
                                            <input class="form-control" id="first_name" type="text" name="user[first_name]" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="last_name" class="not_empty">Last Name</label>
                                            <input class="form-control" id="last_name" type="text" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="req_email" class="not_empty">Email (required)</label>
                                            <input class="form-control" id="req_email" type="text" placeholder="mail@example.com" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone" class="not_empty">Cell Number</label>
                                            <input class="form-control" type="tel" placeholder="Phone number" id="phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="website" class="not_empty">Website</label>
                                            <input class="form-control" id="website" type="text" placeholder="Website">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address" class="not_empty">Address</label>
                                            <input class="form-control" id="address" type="text" placeholder="Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="new_pass" class="not_empty">New Password</label>
                                            <input id="new_pass" class="form-control" type="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="confirm_pass" class="not_empty">Confirm New Password</label>
                                            <input id="confirm_pass" class="form-control" type="password" placeholder="Re-enter Password">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="facebook" class="not_empty">Facebook</label>
                                            <input id="facebook" class="form-control" type="url" placeholder="Facebook URL">
                                            <p>Leave it empty to hide</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="twitter" class="not_empty">Twitter</label>
                                            <input id="twitter" class="form-control" type="url" placeholder="Twitter URL">
                                            <p>Leave it empty to hide</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="google" class="not_empty">Google+</label>
                                            <input id="google" class="form-control" type="url" placeholder="Google+ URL">
                                            <p>Leave it empty to hide</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="linkedIn" class="not_empty">LinkedIn</label>
                                            <input id="linkedIn" class="form-control" type="url" placeholder="Linkedin URL">
                                            <p>Leave it empty to hide</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="youtube" class="not_empty">Youtube</label>
                                            <input id="youtube" class="form-control" type="url" placeholder="Youtube URL">
                                            <p>Leave it empty to hide</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="bio" class="not_empty">About Author</label>
                                            <textarea class="wp-editor-area form-control" rows="6" autocomplete="off" id="bio" placeholder="Describe yourself"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--ends social info .row-->
                                <button type="submit" class="btn btn-primary" id="update_user_profile">Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div><!-- ends: .atbd_author_module -->
            </div>
        </div>
    </div>
</div><!-- ends: .tab-pane -->
</template>
<script>
export default {

}
</script>
<style lang="">

</style>
