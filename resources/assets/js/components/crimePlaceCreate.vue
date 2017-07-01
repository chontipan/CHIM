<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        <form @submit.prevent="save()">
                            Name :
                            <input type="text" v-model="place.name" />
                            <div>
                                Lat: <input type="text" v-model="marker.lat" />
                            </div>
                            <div>
                                Lng: <input type="text" v-model="marker.lng" />
                            </div>
                            <div>

                                <gmap-map
                                        :center="center"
                                        :zoom="7"
                                        style="width: 500px; height: 300px"
                                >
                                    <gmap-marker

                                            :position="marker"
                                            :clickable="true"
                                            :draggable="true"
                                            @position_changed="updatePlace"
                                    ></gmap-marker>
                                </gmap-map>
                            </div>

                            <button type=submit>Submit</button>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>

</template>

<script>
    Vue.component('google-marker', VueGoogleMaps.Marker);
    export default {
        data () {
            return {
                place:{},
                marker: {lat: 10.0, lng: 10.0},
                center: {lat: 10.0, lng: 10.0},
            }
        },
        methods: {


            save: function(){
               // console.log(this.place);
                axios.post('/crime_place/create', {
                    place: this.place,
                    marker: this.marker
                })
                    .then(function (response) {
                        console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            updatePlace(newPosition) {
                this.marker = {
                    lat: newPosition.lat(),
                    lng: newPosition.lng(),
                }
            }
        },

    mounted: function() {
        console.log("Hello")
    }
    }

</script>
