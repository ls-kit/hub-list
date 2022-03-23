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
                    <form action="/" id="signup-form">
                        <span v-if="errors.phone">{{errors.phone[0]}}</span>
                        <input v-model="form.phone" type="phone" class="form-control" placeholder="Phone" required>

                        <span v-if="errors.password">{{errors.password[0]}}</span>
                        <input v-model="form.password" type="password" class="form-control" placeholder="Password" required>

                        <span v-if="errors.password_confirmation">{{errors.password_confirmation[0]}}</span>
                        <input v-model="form.password_confirmation" type="password" class="form-control" placeholder="Confirm Password" required>
                        <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Sign Up</button>
                    </form>
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
                </div>
            </div>
        </div>
    </div>
    </div>
</template>
<script>

import { Inertia } from '@inertiajs/inertia'
import axios from 'axios';

export default {

    data() {
        return {
            errors: {},
            form: {
                phone: '',
                password: '',
                password_confirmation: '',
            },
        }
    },
    methods: {
        handleRegister() {
            axios.post(route('frontend.register'), this.form)
                .then(response => {


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
