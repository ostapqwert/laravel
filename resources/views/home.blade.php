@extends('layouts.app')
@section('content')



<div class="row">


    <div class="col-md-6">
       <h3>Nick Name</h3>
        <p>
            <img class="round-avatar" src="https://what-messenger.com/uploads/posts/2015-10/1443925048_106987245_2953960_kung_fu_panda_by_juliafox90d4a031w.jpg" width="150" height="150">
        </p>
    </div>


    <section class="row new-post">
        <div class="col-md-6">
            <header><h3>Что у вас нового?</h3></header>

            <form action="{{ route('post.create') }}" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="body" id="new-post" rows="5"></textarea>
                    {{ csrf_field() }}
                </div>

                <button class="btn btn-primary" type="submit">Post It!</button>
                {{--<input type="submit" class="btn btn-primary" value="Post it!">--}}
            </form>


        </div>
    </section>


        <div class="col-md-6">

            <div class="col-md-6">

                <header><h3>Меню пользователя</h3></header>
                    <ul class="nav nav-pills nav-stacked nav-pills-stacked-example">
                        <li class="active"><a href="#">Профиль</a></li>
                        <li role="presentation"><a href="#">Настройки</a></li>
                        <li><a href="#">Сообщения</a></li>
                        <li><a href="#">Сорвенования</a></li>
                        <li><a href="#">Клан</a></li>
                    </ul>

            </div>


        </div>

        <section class="row posts">
            <div class="col-md-6">
                <header><h3>Что у вас нового?</h3></header>

                <article class="post">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus autem, corporis dignissimos eligendi eos eveniet ex fuga hic illo in maiores minima minus nihil placeat possimus saepe sequi veniam voluptatem?</p>
                    <div class="info">Posted by Max at 2017-04-11</div>
                    <div class="interaction">
                        <a href="#">Like</a> |
                        <a href="#">DisLike</a> |
                        <a href="#">Otpiska</a>
                    </div>
                </article>
                <hr>

                <article class="post">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus autem, corporis dignissimos eligendi eos eveniet ex fuga hic illo in maiores minima minus nihil placeat possimus saepe sequi veniam voluptatem?</p>
                    <div class="info">Posted by Max at 2017-04-11</div>
                    <div class="interaction">
                        <a href="#">Like</a> |
                        <a href="#">DisLike</a> |
                        <a href="#">Otpiska</a>
                    </div>
                </article>
                <hr>

                <article class="post">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus autem, corporis dignissimos eligendi eos eveniet ex fuga hic illo in maiores minima minus nihil placeat possimus saepe sequi veniam voluptatem?</p>
                    <div class="info">Posted by Max at 2017-04-11</div>
                    <div class="interaction">
                        <a href="#">Like</a> |
                        <a href="#">DisLike</a> |
                        <a href="#">Otpiska</a>
                    </div>
                </article>
                <hr>

            </div>
        </section>
</div>


@endsection
