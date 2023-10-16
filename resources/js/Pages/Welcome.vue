<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import Navbar from "@/Components/Common/Navbar.vue";
import Footer from "@/Components/Common/Footer.vue";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Komuneaty" />
<body>
    <div>


        <!-- Navbar -->

        <Navbar/>
      <section class="hero">
        <span>built for the community by the community</span>
        <img src="/assets/images/MapleLeaf.png" alt="maple-leaf" width="70">
        <h1> Komuneaty </h1>
        <p>An open-source solution for residential houses to manage residents and their meals, built with <strong>Laravel</strong> and <strong>Vue.js.</strong></p>
        <button class="btn"> <font-awesome-icon icon="github" /> Github </button>

        <img src="/assets/images/doodle.png" alt="food-doodle" >

      </section>
        <!-- Footer -->
        <Footer/>
    </div>
</body>

</template>

<style scoped>
body {
    text-align: center;
}

.hero {
    margin-top: 40px;
    display: flex;
    flex-direction: column;
    justify-self: center;
    align-items: center;
}

.hero p {
    max-width: 400px;
}


img[alt="maple-leaf"] {
    padding-top: 20px;
}

img[alt="food-doodle"]{
    height: 50vh;
    width: 100vw;
    padding-top: 40px;
    object-fit: cover;
}

h1 {
    font-size: 50px;
    font-weight: 900;
}

h1, h2, h3, h4, h5, p {
    font-family: 'Work Sans', sans-serif;
}

span {
    font-family: 'Ramaraja', serif;
    padding: 5px 20px;
    background-color: #DDABE8;
    border-radius: 25px;
    text-align: center;
   font-size: 14px;
}
.btn {
margin:20px 0;
  padding: 10px 53px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #000000;
  border: none;
  border-radius: 55px;
}

.btn:hover {background-color: #3e8e41}

.btn:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

@media (max-width: 768px) {
    .hero p {
        max-width: 357px;
    }
}
</style>
