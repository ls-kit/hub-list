<template lang="">
    <div>
    <div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="login_modal_label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="login_modal_label"><i class="la la-lock"></i> Sign In</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  id="login-form" @submit.prevent="handleLogin">
                        <span class='text-danger' v-if="errors.phone">{{errors.phone[0]}}</span>
                        <input type="text" class="form-control" v-model="form.phone" placeholder="Phone" required>

                        <span class='text-danger' v-if="errors.password">{{errors.password[0]}}</span>
                        <input type="password" class="form-control" v-model="form.password" placeholder="Password" required>
                        <div class="keep_signed custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                            <input type="checkbox" class="custom-control-input" name="keep_signed_in" value="1" id="keep_signed_in">
                            <label for="keep_signed_in" class="not_empty custom-control-label">Keep me signed in</label>
                        </div>
                        <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Sign In</button>
                    </form>
                    <!--
                    <div class="form-excerpts">
                        <ul class="list-unstyled">
                            <li>Not a member? <a href="">Sign up</a></li>
                            <li><a href="">Recover Password</a></li>
                        </ul>
                        <div class="social-login">
                            <span>Or connect with</span>
                            <p><a href="" class="btn btn-outline-secondary"><i class="fab fa-facebook-f"></i> Facebook</a><a href="" class="btn btn-outline-danger"><i class="fab fa-google-plus-g"></i> Google</a></p>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>

    </div>
</template>
<script>
export default {
    data() {
        return {
            errors: {},
            form: {
                phone: '',
                password: '',
            },
        };
    },
    methods: {
        async handleLogin() {
            await axios.post(route('frontend.login'), this.form)
                .then(response => {
                    if (response.data.status == 'success') {
                        /* hide signup modal */
                        $('.modal-backdrop').remove();
                        $('body').removeClass('modal-open');
                        $('body').css('padding-right', '0px');
                        this.$toast.success('Successfully registered');
                        /* redirect to path*/
                        this.$inertia.get(`/`);
                    }
                })
                .catch(error => {
                    if(error.response.data.status == 'error') {
                        this.$toast.error(error.response.data.message);
                        this.form.password = '';
                    }else{
                        this.errors = error.response.data.errors;
                    }

                });
        }
    }
}
</script>
<style lang="">

</style>
