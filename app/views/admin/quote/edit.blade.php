@extend('_backend.master')
@section('content')
    <section class="content-header">
        <h1>Dokumentum módosítása</h1>
        {{-- HTML::decode(Breadcrumbs::render('')) --}}
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                @include('_backend.message')

                {{Form::open(array('url' => URL::route('admin.idezet.update',array('id'=>$quote->id)),'class'=>'form-horizontal','method'=>'PUT','files'=>true))}}
                <div class="box box-solid">
                    <div class="box-body">
                        {{Form::submit('Mentés',array('class'=>'btn btn-divide btn-sm btn-copy'))}}
                    </div>
                </div>

                <div class="box box-solid box-divide">
                    <div class="box-header">
                        <h3 class="box-title">Idézet módosítása</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            {{Form::label('quote', 'Idézet',array('class'=>'col-lg-2 control-label'))}}
                            <div class="col-lg-9">
                                {{Form::textarea('quote',$quote->quote,array('class'=>'form-control','placeholder'=>'Idézet'))}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('author', 'Szerző',array('class'=>'col-lg-2 control-label'))}}
                            <div class="col-lg-9">
                                {{Form::input('text','author',$quote->author,array('class'=>'form-control','placeholder'=>'Szerző'))}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('picture', 'Kép',array('class'=>'col-lg-2 control-label'))}}
                            <div class="col-lg-3">
                                <div class="input-group">
                                    {{Form::input('text','picture',$quote->picture,array('id'=>'picture','class'=>'form-control','placeholder'=>'Kép','readonly'))}}
                                    <span class="input-group-btn">
                                        <a class="btn btn-default popup_selector" href=""
                                           data-inputid="picture">Kép kiválasztása</a>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                {{Form::close()}}


            </div>
        </div>
    </section>
@stop