<template>
  <div class="mapsearch-area bg-blue plr-140 ptb-50">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12 form-group">
          <input
            type="text"
            class="form-control search-field"
            data-default-value
            value
            name="title"
            placeholder="Address, Zip, Neighborhood"
          />
          <a href="#">
            <i class="icon-search2"></i>
          </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 form-group">
          <select
            name="type"
            title="Property Types"
            class="search-field form-control"
            data-default-value
          >
            <option value="apartment">Apartment</option>>
            <option value selected>Property Types</option>
          </select>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12 form-group">
          <select
            name="neighborhoods"
            title="Neighborhoods"
            class="search-field form-control"
            data-default-value
          >
            <option value>Any Neighborhoods</option>
            <option value="1">Schools</option>
          </select>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 form-group">
          <select name="price" title="Price" class="search-field form-control" data-default-value>
            <option value>Any Price</option>
            <option value="1000">$1,000</option>
          </select>
        </div>
      </div>
    </div>
      <google-map
        :center="mapICenter"
        :zoom="9"
        style="width: 100%; height: 500px"
      >
        <!-- <gmap-custom-marker
          v-for="(community, index) in communities"
          :key="index"
          :marker="{ lat: community.lat, lng: community.lng }"
          @click.native="toggleInfoWindow(community, index)"
        >
          <img class="pin-img" src="/img/pin.png" />
        </gmap-custom-marker>
        <gmap-info-window
          :options="infoOptions"
          :position="infoWindowPos"
          :opened="infoWinOpen"
          @closeclick="infoWinOpen=false"
        >
          <div v-html="infoContent"></div>
        </gmap-info-window> -->
      </google-map>
  </div>
</template>

<script>
export default {
  data() {
    return {
      mapICenter: { lat: 32.6536305, lng: -96.9418801 },
      communities: "",
      infoContent: "",
      display_mode: 3,
      infoWindowPos: { lat: 0, lng: 0 },
      infoWinOpen: false,
      currentMidx: null,
      infoOptions: {
        pixelOffset: {
          width: 0,
          height: -70
        }
      }
    };
  },
  methods: {
    toggleInfoWindow: function(community, idx) {
      this.infoWindowPos = {
        lat: Number(community.lat),
        lng: Number(community.lng)
      };
      this.infoContent = this.getInfoWindowContent(community);

      //check if its the same marker that was selected if yes toggle
      if (this.currentMidx == idx) {
        this.infoWinOpen = !this.infoWinOpen;
      }
      //if different marker set infowindow to open and reset current marker index
      else {
        this.infoWinOpen = true;
        this.currentMidx = idx;
      }
    },

    getInfoWindowContent: function(community) {
      return `<div class="map-card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="/uploads/${community.banner}" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                        <div class="media-content">
                            <p class="title is-4">${community.name}</p>
                        </div>
                        </div>
                        <div class="content">
                        ${community.location}
                        </div>
                    </div>
                    </div>`;
    }
  },
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
