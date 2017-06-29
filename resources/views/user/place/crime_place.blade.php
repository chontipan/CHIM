@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <a href="/home">หน้าหลัก</a>/แบบประวัติสถานที่ทั่วไป
            <h1>
                แบบประวัติสถานที่ทั่วไป
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <div id="app">
                <div v-if="currentState == states[0]">

                    <form @submit.prevent="save()">
                        Name :
                        <input type="text" v-model="employee.name" />
                        <br/> Age :
                        <input type="text" v-model="employee.age" />
                        <br/> Salary :
                        <input type="text" v-model="employee.salary" />
                        <br/>
                        <button type=submit>Submit</button>
                    </form>
                </div>

                <div v-if="currentState == states[1]">
                    <h1>State 2</h1>
                    <button @click="currentState = states[0]">Back</button>
                </div>
            </div>


        </section>
        <!-- /.content -->
    </div>

@endsection

@section('javascript')
    <script type="text/javascript">
        var app = new Vue({
            el: "#app",
            data: {
                states: ["one", "two"],
                currentState: "one",
                employee: {
                    name: "",
                    age: "",
                    salary: "",
                }
            },
            methods: {
                save: function() {
                    this.$http.post('/echo/json', {
                        employee: {},
                        company: {},
                    })
                        .then(function(response) {
                            console.log(response)
                        })


                    this.currentState = this.states[1]
                }
            },
            mounted: function() {
                console.log("Hello")
            }
        })

    </script>

@endsection