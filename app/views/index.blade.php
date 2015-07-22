@extends('_frontend.master')

@section('breadcrumb')
    {{ HTML::decode(Breadcrumbs::render('fooldal')) }}
@stop

@section('content')


    <div class="row">
        <div class="col-xs-12">
            <div id="articles" class="row">
                @foreach($articles as $article)
                    <article>
                            @if(count($article->gallery) && count($article->gallery->pictures))
                                <img class="img-responsive"
                                     src="{{URl::route('kep.show',['url'=>urlencode($article->gallery->pictures[0]->picture_path),'width'=>300,'height'=>200]) }}"
                                     alt="{{$article->gallery->pictures[0]->name}}"
                                     title="{{$article->gallery->pictures[0]->name}}"/>
                            @endif
                            <h3>{{HTML::linkRoute('hirek.show',$article->title,array('id'=>$article->id,'title'=>\Str::slug($article->title)))}}</h3>

                            <p class="text-muted">{{$article->getCreatedAt()}}</p>

                            <p class="article-content">{{$article->getParragraph()}}</p>
                            {{HTML::linkRoute('hirek.show','Bővebben',array('id'=>$article->id,'title'=>\Str::slug($article->title)),array('class'=>'btn btn-sm btn-lightsky'))}}
                    </article>
                @endforeach
            </div>

            <div class="text-center">
                {{$articles->links()}}
            </div>
        </div>
    </div>


@stop