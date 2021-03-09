@extends('front.layout.app')
@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="inner-heading">
                        <h2>Single Post</h2>
                    </div>
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
                                        <li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
                                        <li><i class="icon-tags"></i><a href="#">Web design</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- author info -->
                    <div class="about-author">
                        <a href="#" class="thumbnail align-left"><img src="img/avatar.png" alt="" /></a>
                        <h5><strong><a href="#">{{ Auth::user()->name }}</a></strong></h5>
                        <p>
                           Hello this is Your author. I write about music production, composition and you can watch my staging tutorials on my youtube channel.
                        </p>
                    </div>
                    <div class="comment-area">
                        <h4>Comments</h4>
                        <div class="media">
                            <a href="#" class="thumbnail pull-left"><img src="img/avatar.png" alt="" /></a>
                            <div class="media-body">
                                <div class="media-content">
                                    <h6><span>March 12, 2013</span> Karen medisson</h6>
                                    <p>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </p>
                                    <a href="#" class="align-right">Reply comment</a>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <a href="#" class="thumbnail pull-left"><img src="img/avatar.png" alt="" /></a>
                            <div class="media-body">
                                <div class="media-content">
                                    <h6><span>March 12, 2013</span> Smith sanderson</h6>
                                    <p>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </p>
                                    <a href="#" class="align-right">Reply comment</a>
                                </div>
                                <div class="media">
                                    <a href="#" class="thumbnail pull-left"><img src="img/avatar.png" alt="" /></a>
                                    <div class="media-body">
                                        <div class="media-content">
                                            <h6><span>March 12, 2013</span> Thomas guttenberg</h6>
                                            <p>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                            </p>
                                            <a href="#" class="align-right">Reply comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <a href="#" class="thumbnail pull-left"><img src="img/avatar.png" alt="" /></a>
                            <div class="media-body">
                                <div class="media-content">
                                    <h6><span>March 12, 2013</span> Vicky lumora</h6>
                                    <p>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </p>
                                    <a href="#" class="align-right">Reply comment</a>
                                </div>
                            </div>
                        </div>
                        <h4>Leave your comment</h4>
                        <form id="commentform" action="#" method="post" name="comment-form">
                            <div class="row">
                                <div class="span4">
                                    <input type="text" placeholder="* Enter your full name" />
                                </div>
                                <div class="span4">
                                    <input type="text" placeholder="* Enter your email address" />
                                </div>
                                <div class="span4 margintop10">
                                    <input type="text" placeholder="Enter your website" />
                                </div>
                                <div class="span8 margintop10">
                                    <p>
                                        <textarea rows="12" class="input-block-level" placeholder="*Your comment here"></textarea>
                                    </p>
                                    <p>
                                        <button class="btn btn-theme margintop10" type="submit">Submit comment</button>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
