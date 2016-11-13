@extends('layouts.app')

@section('content')
<section id="hero">
    <div class="film">
    <div class="container">
        <div class="row" id="vcform">
            <div class="col-sm-12">
                <h1 class="jumbotron dark">This is the @{{ heading }} Page.</h1>
            </div>
            <div class="col-md-6 dark">

                        <!-- Restricts Watcher Binding to fire when enter is hit, but keydown still listens to update -->
                        <input type="text" v-model="name" v-on:keydown.tab="name = $event.target.value" />
                        <!--<p>@{{ name }}</p>-->
                        <hr  />
                        <input type="email" v-on:keydown.tab="email = $event.target.value" />
                        <!--<p>@{{ email }}</p>-->
                        <hr  />
                        <input type="text" v-on:keydown.tab="subject = $event.target.value" />
                        <!--<p>@{{ subject }}</p>-->
                        <hr  />
                        <input type="text" v-on:keydown.enter="message = $event.target.value" />
                        <!--<p>@{{ message }}</p>-->
                        <hr  />

                        <button type="button" class="btn btn-primary" @click="calculate()">Submit</button>


            </div>

            <div class="col-md-6 dark">
                <button class="btn btn-primary" @click="counter += 5">Increment</button>
                <button class="btn btn-danger" @click="counter -= 5">Decrement</button>

                <hr  />

                <p class="light">Text value : @{{ counter }}</p>
                <!-- use of model prevents the need to use a javascript object in :class for block 1-->
                <input type="text" v-model="color" style="margin-bottom:20px;"/>
            </div>





                <div class="col-sm-3">
                        <!-- :class binding can be used on top of class and is compiled into once class -->
                        <div @click="attachedRed = !attachedRed" :class="[{red: attachedRed}, color]" class="demoBlock"></div>
                </div>
                <div class="col-sm-3">
                        <!-- :class binding can be used on top of class and is compiled into once class -->
                        <div @click="attachedGreen = !attachedGreen" :class="{green: attachedGreen}" class="demoBlock"></div>
                </div>
                <div class="col-sm-3">
                        <!-- :class binding can be used on top of class and is compiled into once class -->
                        <div @click="attachedBlue = !attachedBlue" :class="{blue: attachedBlue}" class="demoBlock"></div>
                </div>
                <div class="col-sm-3">
                        <!-- :class binding can be used on top of class and is compiled into once class -->
                        <div @click="attachedPink = !attachedPink" :class="{pink: attachedPink}" class="demoBlock"></div>
                </div>


                <div class="col-sm-12">
                    <div @click="" :class="" class="jumbotron">
                        <h1 @click="" :class="{jumbotron: enlarge}" class="">Heading.</h1>
                    </div>
                </div>






        </div>
    </div>
    </div>
</section>
@endsection
