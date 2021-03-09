@extends('front.layout.app')
@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="inner-heading">
                        <h2>All Blogs</h2>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <aside class="left-sidebar">
                        <div class="widget">
                            <form class="form-search">
                                <input placeholder="Type something" type="text" class="input-medium search-query">
                                <button type="submit" class="btn btn-square btn-theme">Search</button>
                            </form>
                        </div>
                        <div class="widget">
                            <h5 class="widgetheading">Categories</h5>
                            <ul class="cat">
                                @foreach($categories as $category)
                                <li><i class="icon-angle-right"></i><a href="#">{{$category->name}}</a><span></span></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget">
                            <h5 class="widgetheading">Popular tags</h5>
                            <ul class="tags">
                                <li><a href="#">Web design</a></li>
                                <li><a href="#">Trends</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Internet</a></li>
                                <li><a href="#">Tutorial</a></li>
                                <li><a href="#">Development</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="span8">
                    <article>
                        @foreach($posts as $post)
                        <div class="row">
                            <div class="span8">
                                <div class="post-image">
                                    <div class="post-heading">
                                        <h3><a href="#">{{$post->title}}</a></h3>
                                    </div>
                                    <img src="{{asset('storage/post/'.$post->image)}}" alt="" />
                                </div>
                                <p>
                                    {!! $post->description !!}
                                </p>
                                <div class="bottom-article">
                                    <ul class="meta-post">
                                        <li><i class="icon-user"></i><a href="#">{{ Auth::user()->name }}</a></li>
                                        <li><i class="icon-folder-open"></i><a href="#">Blog</a></li>
                                        <li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
                                    </ul>
                                    <a href="{{route('blog.view',$post->url_slug)}}" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </article>
                    </div>
            </div>
        </div>
    </section>
@endsection
