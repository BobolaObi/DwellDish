
<script setup>
import { Head, Link } from '@inertiajs/vue3';

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
   <nav>
       <div>
           <img src="/assets/images/MapleLeaf.png" alt="maple-leaf" width="30">
           <p>Komuneaty</p>
       </div>


       <button>
       </button>
<!--       <div>-->
<!--           <div v-if="canLogin" class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">-->
<!--                      <Link-->
<!--                          v-if="$page.props.auth.user"-->
<!--                          :href="route('dashboard')"-->
<!--                          >Dashboard</Link-->
<!--                      >-->

<!--                      <template v-else>-->
<!--                          <Link-->
<!--                              :href="route('login')"-->
<!--                              >Log in</Link-->
<!--                          >-->

<!--                          <Link-->
<!--                              v-if="canRegister"-->
<!--                              :href="route('register')"-->
<!--                              >Register</Link-->
<!--                          >-->
<!--                      </template>-->
<!--                  </div>-->
<!--       </div>-->
   </nav>
</template>


<style scoped>
 p {
     font-weight: 500;
     font-size: 15px;
     margin-left: 10px;
 }

 div {
     display: flex;
     justify-content: center;
     align-items: center;
 }

 nav {
     display: flex;
     justify-content: space-between;
     padding: 15px 30px;
     color: black;
 }

</style>


