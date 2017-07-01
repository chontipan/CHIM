<template>
    <div class="container">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <a href="/home">หน้าหลัก</a>/แผนที่สถานที่ทั่วไป

            </section>

            <!-- Main content -->
            <section class="content">
                <gmap-map :center="center" :zoom="15" style="width: 100%; height: 500px">
                    <gmap-info-window :options="infoOptions" :position="infoWindowPos" :opened="infoWinOpen" :content="infoContent" @closeclick="infoWinOpen=false"></gmap-info-window>

                    <gmap-marker :key="i" v-for="(m,i) in markers" :position="m.position" :clickable="true" @click="toggleInfoWindow(m,i)"></gmap-marker>
                </gmap-map>
            </section>
            <!-- /.content -->

        </div>
    </div>

</template>

<script>
    Vue.component('google-marker', VueGoogleMaps.Marker);

    export default {

        data () {
            return {
                center: {
                    lat: 47.376332,
                    lng: 8.547511
                },
                infoContent: '',
                infoWindowPos: {
                    lat: 0,
                    lng: 0
                },
                infoWinOpen: false,
                currentMidx: null,
                //optional: offset infowindow so it visually sits nicely on top of our marker
                infoOptions: {
                    pixelOffset: {
                        width: 0,
                        height: -35
                    }
                },
                markers: [
                    {
                    position: {
                        lat: 47.376332,
                        lng: 8.547511
                    },
                    infoText: 'Marker 1'
                }, {
                    position: {
                        lat: 47.374592,
                        lng: 8.548867
                    },
                    infoText: 'Marker 2'
                }, {
                    position: {
                        lat: 47.379592,
                        lng: 8.549867
                    },
                    infoText: 'Marker 3'
                }]
            }
        },
        methods: {

            toggleInfoWindow: function(marker, idx) {
                this.infoWindowPos = marker.position;
                this.infoContent = marker.infoText;
                //check if its the same marker that was selected if yes toggle
                if (this.currentMidx == idx) {
                    this.infoWinOpen = !this.infoWinOpen;
                }
                //if different marker set infowindow to open and reset current marker index
                else {
                    this.infoWinOpen = true;
                    this.currentMidx = idx;
                }
            }

        },

    mounted: function() {
        console.log("Hello")
    }
    }

</script>
