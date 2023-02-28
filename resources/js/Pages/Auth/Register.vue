<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>

    <main class="main-content  mt-0">
        <section>
            <Head title="Register" />

            <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                {{ status }}
            </div>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">Sign In</h4>
                                    <p class="mb-0">Enter your email and password to sign in</p>
                                </div>
                                <div class="card-body">
                                    <form @submit.prevent="submit">
                                        <div class="mb-3">
                                            <input type="text" class="form-control " placeholder="Name" aria-label="Name" v-model="form.name">
                                            <InputError class="mt-2" :message="form.errors.name" />
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" class="form-control " placeholder="Email" aria-label="Email" v-model="form.email">
                                            <InputError class="mt-2" :message="form.errors.email" />
                                        </div>
                                        <div class="mb-3">
                                            <input type="password" class="form-control " placeholder="Password" aria-label="Password" v-model="form.password">
                                            <InputError class="mt-2" :message="form.errors.password" />
                                        </div>
                                        <div class="mb-3">
                                            <input type="password" class="form-control " placeholder="Confirm Password" aria-label="Confirm Password" v-model="form.password_confirmation">
                                            <InputError class="mt-2" :message="form.errors.password_confirmation" />
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Already Have an account
                                        <Link :href="route('login')" class="text-primary text-gradient font-weight-bold">Sign In</Link>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative  h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://www.drawingskill.com/wp-content/uploads/5/Art-Sketch-Drawing-Beautiful-Image.jpg');background-size: cover;">
                                <span class="mask  opacity-6"></span>
                                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new currency"</h4>
                                <p class="text-white position-relative">The more effortless the writing looks, the more effort the writer actually put into the process.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</template>
