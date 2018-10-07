<template>
   <div class="container">
      <nav class="navbar navbar-expand-sm bg-light">
         <!-- Links -->
         <ul class="navbar-nav">
        <li class="nav-item">
               <router-link tag="li" class="nav-item" to="/laraveVue">
                  <a class="nav-link">Home</a>
               </router-link>
            </li>
            <li class="nav-item">
               <router-link tag="li" class="nav-item" to="/AddUser">
                  <a class="nav-link">Add user</a>
               </router-link>
            </li>
            <li class="nav-item">
               <router-link tag="li" class="nav-item" to="/Listuser">
                  <a class="nav-link">List user</a>
               </router-link>
            </li>
         </ul>
      </nav>
      <div class="card card-default">
        <div class="card-header">Panel</div>
        <div class="card-body">
       
    <br>
        <router-view></router-view>
        </div>
      </div>
   </div>
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>