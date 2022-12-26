@extends('layouts.website')
@section('title', "Feed")
@section('content')

    <!-- link css -->
    <link rel="stylesheet" href="{{ URL::to('assets/css/feed.css') }}">
    <!-- end link css -->

    <section class="container section">
        <div class="row">
            <div class="col-md-8">
                <div class="create-feed">
                    <form action="{{ url('/auth/feed') }}" method="post" enctype="multipart/form-data">
                        <div class="title">
                            <label for="post">New Post</label>
                            <textarea name="post" id="post" rows="3" class="@error('post') is-invalid @enderror">{{ old('post') }}</textarea>
                            <div class="btn-area">
                                <ul>
                                    <li>
                                        <button type="button">
                                            <i class="fa-solid fa-paperclip"></i>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button">

                                            <i class="fa-regular fa-images"></i>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button">
                                            <i class="fa-solid fa-film"></i>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="submit">
                                            <i class="fa-regular fa-paper-plane"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="sort-area">
                    <div class="line"></div>
                    <div class="sort"></div>
                    <div class="line"></div>
                </div>
            </div>
        </div>
    </section>

@endsection
