@extends('layouts.app')


@section('content')





<div class="container">
    <div class="row">

            <section id="v-blog" class="row">

                <div  v-for="post in posts">

                    <div class="col-md-3">

                        <h3>@{{post.title.rendered  }}</h3>
                        <p>@{{post.excerpt.rendered }}</p>
                    </div>


                </div>


            </section>


            <section id="v-projects" class="row">

                <div v-for="project in projects" >

                    <div class="col-md-3 flat">
                        <h3>@{{ project.project }}</h3>
                        <p>@{{ project.client }}</p>
                        <a v-bind:href="project.client_feature">
                            <img v-bind:src="project.client_feature"  class="img-responsive img-thumbnail"/ >
                        </a>
                    </div>

                </div>

            </section>



            <!--@foreach($projects as $project)
            <div class="col-sm-3">
                {{ $project->project }}
                <img src="{{ $project->client_thumb }}" class="img-responsive" />
            </div>
            @endforeach-->


        </div>
    </div>




</div>
@endsection
