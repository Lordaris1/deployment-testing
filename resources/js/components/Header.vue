<template>
    <div class="row header-hinulawan">
        <div class="col-lg-6 px-3 banner-card-1 pb-3">
            <b-card class="header-card-1 border-0 outline-0">
                <b-card-text class="banner-text-1 wow animate__animated animate__slideInLeft" data-wow-delay="0.2s">
                    <h3 class="header-title font-weight-bold">
                        What is Hinulawanlab?
                    </h3>
                    <p class="header-paragraph font-weight-bold">
                        Hinulawan came from two Cebuano Words "Hinaguan" and "Bulawan" which
                        technically means a "Hard-Earned Gold". Hinulawanlab always believed that
                        hardwork pays off golden results. Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptate rerum atque quia vitae blanditiis aperiam quis odit reprehenderit quidem. Accusantium
                        dolor voluptas quasi laboriosam atque, quos eveniet pariatur nisi repellat?
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    </p>
                </b-card-text>
            </b-card>
            <div>
                <b-img v-bind="headerImageOne" class="wow animate__animated animate__slideInLeft" data-wow-delay="0.1s" fluid></b-img>
            </div>
        </div>
        <div class="col-lg-6 px-3 banner-card-2 pb-3">
            <b-card class="header-card-2 border-0 rounded-0 outline-0">
                <b-card-text class="banner-text-2 wow animate__animated animate__slideInRight" data-wow-delay="0.3s">
                    <h3 class="header-title font-weight-bold">
                        Our Aim
                    </h3>
                    <p class="header-paragraph font-weight-bold">
                        Hinulawan aims to be a world-class Android and Web Development Company.
                        We aim to help companies Android and Web Applications for their business venture.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas suscipit similique incidunt obcaecati
                        asperiores repudiandae, repellat voluptatem aspernatur maiores, odio consectetur nulla.
                        Ducimus, qui! Iusto iure ducimus doloremque quam sed. Accusantium
                        dolor voluptas quasi laboriosam adipisicing elit.
                    </p>
                </b-card-text>
            </b-card>
            <div>
                <b-img v-bind="headerImageTwo" class="wow animate__animated animate__slideInRight" data-wow-delay="0.4s" fluid></b-img>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                headerImageOne: {
                    class: 'object-fit',
                    src: '/images/carousel_3.png'
                },
                headerImageTwo: {
                    class: 'object-fit',
                    src: '/images/passafund.png'
                }
            }
        }
    }
</script>

