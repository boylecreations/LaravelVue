@extends('layouts.app')

@section('content')
<section id="hero">
    <div class="film">
    <div class="container">
        <div class="row" id="vcform">
            <div class="col-sm-12">
                <h1 class="jumbotron dark">This is the @{{ heading }} Page.</h1>
            </div>
            <div class="col-md-6">

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
                        <label>@{{ output }}</label>
                        <button type="button" class="btn btn-primary" @click="calculate()">Submit</button>


            </div>
            <div class="col-md-6">
                <button class="btn btn-primary" @click="counter += 5">Increment</button>
                <button class="btn btn-danger" @click="counter -= 5">Decrement</button>

                <hr  />

                <p>current value : @{{ counter }}</p>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
