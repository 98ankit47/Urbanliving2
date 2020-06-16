<template>
       <div class="subscribe-area bg-blue call-to-bg plr-140 ptb-50">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-12">
            <div class="section-title text-white">
              <h3>SUBSCRIBE</h3>
              <h2 class="h1">NEWSLETTER</h2>
            </div>
          </div>
          <div class="col-lg-9 col-md-8 col-12">
            <div class="subscribe">
               <form @submit.prevent="subscribe" @keydown="form.onKeydown($event)">
                <input type="email" required v-model="form.email" name="email" :class="{ 'is-invalid': form.errors.has('email') }" placeholder="Enter your email here..." />
                <button type="submit" value="send">Send</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
   export default {
  data(){
    return{
      form: new Form({
        email:''
      })
    }
  },
  methods:  {
      subscribe () {
      // Submit the form via a POST request
      this.form.post('/api/news-letter')
        .then(({ data }) => { console.log(data) })
        }
      },
  mounted() {
    console.log("Component mounted.");
    this.loadHomeNeighbour();
  }
};
</script>
