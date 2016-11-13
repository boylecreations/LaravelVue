@extends('layouts.app')

@section('content')
<section id="hero">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div id="vcform">
                    <h1 class="jumbotron">This is the @{{ heading }} Page.</h1>

                    <div>
                        <!-- Restricts Watcher Binding to fire when enter is hit, but keydown still listens to update -->
                        <input type="text" v-model="name" v-on:keydown.enter="name = $event.target.value" />
                        <p>
                            @{{ name }}
                        </p>
                        <input type="text" v-on:keydown.enter="email = $event.target.value" />
                        <p>
                            @{{ email }}
                        </p>
                        <input type="text" v-on:keydown.enter="subject = $event.target.value" />
                        <p>
                            @{{ subject }}
                        </p>
                        <input type="text" v-on:keydown.enter="message = $event.target.value" />
                        <p>
                            @{{ message }}
                        </p>
                        <button type="button" class="btn btn-primary">Submit.</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
