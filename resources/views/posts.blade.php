@extends('layouts.main')

@section('pageTitle')
    Hello
@endsection

@section('content')
    <section id="top_posts">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8">
                    <div id="featured_posts">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="https://tinyurl.com/5n6tf6sw" alt="" class="w-100">
                                <h3>Hello</h3>
                            </div>
                            <div class="col-sm-6">
                                <div class="row gap-2">
                                    <div class="col-sm-12">
                                        <div class="d-flex gap-2">
                                            <div class="w-50">
                                                <img src="https://tinyurl.com/5n6tf6sw" alt="" class="w-100 object-fit-cover">
                                            </div>
                                            <h3>Hello</h3>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="d-flex gap-2">
                                            <div class="w-50">
                                                <img src="https://tinyurl.com/5n6tf6sw" alt="" class="w-100 object-fit-cover">
                                            </div>
                                            <h3>Hello</h3>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="d-flex gap-2">
                                            <div class="w-50">
                                                <img src="https://tinyurl.com/5n6tf6sw" alt="" class="w-100 object-fit-cover">
                                            </div>
                                            <h3>Hello</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <aside></aside>
                </div>
            </div>
        </div>
    </section>
    <section id="highlight"></section>
    <section id="today_choice"></section>
    <section id="main_posts">
        <div class="container">
            <div id="recent-posts"></div>
            <aside></aside>
        </div>
    </section>
@endsection
