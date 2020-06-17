<template>
    <div class="blog-area pb-60 pt-115">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-2 text-center">
              <h2>VIEW ALL NEIGHBORHOODS</h2>
            </div>
          </div>
        </div> 
          <div class="blog-carousel row">
              <!-- blog-item -->
              <div class="col-md-4" v-for="neighbours in neighbour" :key="neighbours.id">
                <article class="blog-item bg-gray">
                  <div class="blog-image">
                    <a href="#">
                      <img :src="'uploads/locations/'+neighbours.image" alt />
                    </a>
                  </div>
                  <div class="blog-info">
                    <div class="post-title-time">
                      <h5>
                        <a href="#"><b>{{neighbours.title}}</b></a>
                        <a>{{key}}</a>
                      </h5>
                      <p>{{neighbours.subdivission}}, {{neighbours.state}}, {{neighbours.county}}</p>
                    </div>
                    <p>
                       {{neighbours.description}}
                    </p>
                    <a class="read-more" href="#">Read more</a>
                  </div>
                </article>
              </div>   
          </div>
          </div>
    </div>
</template>

<script>
    export default {
  data(){
    return{
      neighbour:{},
       
    }
  },
  methods:  {
   loadHomeNeighbour()
    {
      axios.get("api/home-neighbour").then(({data})=>(this.neighbour = data)); 
    }
  },

  mounted() {
    console.log("Component mounted.");
    this.loadHomeNeighbour();
  }
};
</script>
