@extends('layout.app')

@section("title", "Home")

@section("header")
        <header class="masthead" style="background-image: url('assets/image/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Clean Blog</h1>
                            <span class="subheading">A Blog Theme by Start Bootstrap</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
@endsection

@section("content")
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    {{-- props method --}}
                {{-- <x-cart-post-component title="Man must explore, and this is exploration at its greatest" subtitle="Problems look mighty small from 150 miles up" /> --}}
                {{-- slot method --}}
                @foreach($posts as $post)
                <x-cart-post-component >
                    <x-slot name="title">{{ $post['title'] }}</x-slot>
                    <x-slot name="subtitle">{{ $post['subtitle'] }}</x-slot>
                    <x-slot name="create_name">{{ $post['create_name'] }}</x-slot>
                    <x-slot name="created_at">{{ $post['created_at'] }}</x-slot>
                </x-cart-post-component>
                @endforeach
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>
@endsection
