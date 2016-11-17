@extends('layouts.demo-app')

@section('content')



<div id="hero">
    <div class="container v-space">
        <div class="content" id="vcss">
            <div class="row">
                <div class="col-lg-6">
                    <div class="jumbotron">
                        <h1>@{{ appName }}</h5>

                        <!--<div v-for="transition in transitions" :key="transition">
                            <p>
                                @{{ transition }}
                            </p>
                        </div>-->

                        <form v-on:submit.prevent="onSubmit">
                            <!--<div class="form-group">

                              <button class="btn btn-success" @click="newTransition">Add new Transition</button>
                              <select class="form-control">
                                <option v-for="transition in transitions" :key="transition">

                                </option>
                              </select>
                          </div>-->
                            <div class="form-group" >
                                <label for="exampleSelect1" >Choose Up to 3 Transitions</label>
                                    <select  v-model="totalTransitions" class="form-control" >
                                        <!-- in (element, indexValue) :key for binding to track position-->
                                        <option  v-for="transition in customTransitions" :key="transition" ><!--@{{ transition.propertyType }} (@{{ i }})</option>-->
                                        <!--@{{ transition.transition }}-->
                                        <template v-for="(value, key, index) in transition">
                                            <span ><!--@{{ key }}, -->@{{ value }} <!--in index (@{{ index }})--></span>
                                        </template>
                                    </option>
                                    </select>
                            </div>
                            <div class="form-group" >
                                    <select  class="form-control" >
                                        <!-- use value to iterate out values of nested for loops -->
                                        <option v-for="transition in prebuiltTransitions">
                                            <!--@{{ transition.transition }}-->
                                            <template v-for="(value, key, index) in transition">
                                                <span><!--@{{ key }}, -->@{{ value }} <!--in index (@{{ index }})--></span>
                                            </template>
                                        </option>
                                    </select>
                            </div>
                            <div class="form-group" >
                                    <select  class="form-control" >
                                        <!-- use value to iterate out values of nested for loops -->
                                        <option v-for="transition in prebuiltTransitions">
                                            <!--@{{ transition.transition }}-->
                                            <template v-for="(value, key, index) in transition">
                                                <span><!--@{{ key }}, -->@{{ value }} <!--in index (@{{ index }})--></span>
                                            </template>
                                        </option>
                                    </select>
                            </div>
                            <!--<div class="form-group" >
                                    <select  class="form-control" >-->
                                        <!-- template makes children only come out of nested views -->
                                        <!--<template v-for="transition in transitions">
                                            <option>@{{ transition.transition }}</option>
                                        </template>
                                    </select>
                            </div>-->
                            <button class="btn btn-primary" @click="addTransition">Add New Transition</button>
                            <button class="btn btn-primary" @click="startTransition">Start Transition</button>
                        </form>
                        <p v-if="!show">
                            Your transition type is @{{ totalTransitions }}
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

                            <div class="circle animated" :class="{}" >

                            </div>


                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
