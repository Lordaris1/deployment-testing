<template>
    <div class="app-banner">
        <div class="our-apps">
            <h5 class="text-center font-weight-bold">Our Apps</h5>
            <h1 class="text-center font-weight-bold">Applications That We Developed</h1>
            <div class="row border border-secondary app-banner-1 border-0 outline-0">
                <div class="col-lg-4 d-flex justify-content-center wow animate__animated animate__fadeInUp"
                    data-wow-delay="0.1s">
                    <b-img v-bind="bannerImageOne" rounded="circle"></b-img>
                </div>
                <div class="col-lg-4 d-flex justify-content-center wow animate__animated animate__fadeInUp"
                    data-wow-delay="0.2s">
                    <b-img v-bind="bannerImageTwo" rounded="circle"></b-img>
                </div>
                <div class="col-lg-4 d-flex justify-content-center wow animate__animated animate__fadeInUp"
                    data-wow-delay="0.3s">
                    <b-img v-bind="bannerImageOne" rounded="circle"></b-img>
                </div>
            </div>
        </div>
        <div class="why-hinulawan">
            <h5 class="text-center font-weight-bold">Choose Hinulawanlab</h5>
            <h1 class="text-center font-weight-bold">Why Choose Hinulawanlab?</h1>
            <div class="row border border-secondary app-banner-2 border-0">
                <div class="col-lg-4 d-flex justify-content-center py-3 wow animate__animated animate__fadeInUp"
                    data-wow-delay="0.1s">
                    <b-img thumbnail fluid src="https://picsum.photos/250/250/?image=54" alt="Image 1"></b-img>
                </div>
                <div class="col-lg-4 d-flex justify-content-center py-3 wow animate__animated animate__fadeInUp"
                    data-wow-delay="0.2s">
                    <b-img thumbnail fluid src="https://picsum.photos/250/250/?image=58" alt="Image 2"></b-img>
                </div>
                <div class="col-lg-4 d-flex justify-content-center py-3 wow animate__animated animate__fadeInUp"
                    data-wow-delay="0.3s">
                    <b-img thumbnail fluid src="https://picsum.photos/250/250/?image=59" alt="Image 3"></b-img>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                bannerImageOne: {
                    width: 300,
                    height: 300,
                    class: 'my-3',
                    src: '/images/tinda-logo.jpeg'
                },
                bannerImageTwo: {
                    width: 300,
                    height: 300,
                    class: 'my-3',
                    src: '/images/passafund-logo.png'
                }
            }
        }
    }
</script>
