<template>
    <div class="container">
        <h2>Vue Form Validations.</h2>
        <p v-if="errors.length">
            <b>Please correct the following error(s):</b>
            <ul>
              <p>{{ errors }}</p>
            </ul>
        </p>
          <form @submit="checkForm">
            <div class="form-group">
              <label for="email">Email:</label>
              <input v-model="email" type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
    </div>
</template>
<script>
    export default {
        mounted() {
            
        },
        data() {
        return {
            errors: [],
            email: '',
        }
    },
    methods:{
    checkForm: function (e) {
       
      this.errors = '';
      if (!this.email) {
        this.errors = 'Email required.';
      }
      e.preventDefault();
    }
  }
    }
</script>