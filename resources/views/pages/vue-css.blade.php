@extends('layouts.demo-app')

@section('content')



<div id="hero">
    <div class="container v-space">
        <div class="content" id="vcss">
            <div class="row">
                <div class="col-lg-6">
                    <div class="jumbotron">
                        <h1>@{{ appName }}</h5>

                        <div v-for="transition in transitions" :key="transition">
                            <p>
                                @{{ transition }}
                            </p>
                        </div>

                        <form>
                            <div class="form-group" >

                                <label for="exampleSelect1" >Choose Up to 3 Transitions</label>
                                    <select v-model="firstTransition" class="form-control" >
                                        <!-- in (element, indexValue) :key for binding to track position-->
                                        <option v-for="(transition, i) in transitions" :key="transition" >@{{ transition.propertyType }} (@{{ i }})</option>
                                    </select>
                            </div>
                            <div class="form-group" >
                                    <select v-model="secondTransition" class="form-control" >
                                        <!-- use value to iterate out values of nested for loops -->
                                        <option v-for="transition in transitions">
                                            @{{ transition.propertyType }}
                                            <template v-for="(value, key, index) in transition">
                                                <span>@{{ key }}, @{{ value }} in index (@{{ index }})</span>
                                            </template>
                                        </option>
                                    </select>
                            </div>
                            <div class="form-group" >
                                    <select v-model="thirdTransition" class="form-control" >
                                        <!-- template makes children only come out of nested views -->
                                        <template v-for="transition in transitions">
                                            <option>@{{ transition.propertyType }}</option>
                                        </template>
                                    </select>
                            </div>
                            <button @click="addTransition()">Add another Transition</button>
                            <button @click="transitions.push('a new transition')">Add New</button>
                        </form>
                        <p v-if="!show">
                            Your transition type is @{{  }}
                        </p>
                        <p v-else>
                            You have not chosen a Transition.
                        </p>
                        <p v-show="!show">
                            Good Job Selecting!
                        </p>
                        <button @click="show = !show">Swap</button>
                    </div>
                </div>
                <div class="col-sm-6">
                        <div class="jumbotron">
                            @{{ appName }} - Column 2
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
