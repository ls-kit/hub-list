<template lang="">
    <div>
        <div class="modal fade" id="signup_modal" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i> Sign Up</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="signup-form" @submit.prevent="handleRegister">
                        <span class='text-danger' v-if="errors.name">{{errors.name[0]}}</span>
                        <input v-model="form.name" type="text" class="form-control" placeholder="Name" required>

                        <span class='text-danger' v-if="errors.phone">{{errors.phone[0]}}</span>
                        <input v-model="form.phone" type="phone" class="form-control" placeholder="Phone" required>

                        <span class='text-danger' v-if="errors.password">{{errors.password[0]}}</span>
                        <input v-model="form.password" type="password" class="form-control" placeholder="Password" required>

                        <span class='text-danger' v-if="errors.password_confirmation">{{errors.password_confirmation[0]}}</span>
                        <input v-model="form.password_confirmation" type="password" class="form-control" placeholder="Confirm Password" required>
                        <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Sign Up</button>
                    </form>
                    <!--
                    <div class="form-excerpts">
                        <ul class="list-unstyled">
                            <li>Already a member? <a href="">Sign In</a></li>
                            <li><a href="">Recover Password</a></li>
                        </ul>
                        <div class="social-login">
                            <span>Or Signup with</span>
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

import { Inertia } from '@inertiajs/inertia'
import axios from 'axios';
import $ from 'jquery';

export default {

    data() {
        return {
            errors: {},
            form: {
                name: '',
                phone: '',
                password: '',
                password_confirmation: '',
            },
        }
    },
    methods: {
       async handleRegister() {
          await axios.post(route('frontend.register'), this.form)
                .then(response => {
                    /* hide signup modal */
                    $('.modal-backdrop').remove();
                    $('body').removeClass('modal-open');
                    $('body').css('padding-right', '0px');

                    this.$toast.success('Successfully registered');

                    /* redirect to path*/
                    this.$inertia.get(`/`);
                })
                .catch(error => {
                    this.errors = error.response.data.errors;
                })
        }
    },

}
</script>
<style lang="">

</style>
