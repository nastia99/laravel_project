@extends('template')

@section('titrePage')
    Modifier un film
@endsection

@section('titreItem')
    <h1>Modifier un film</h1>
@endsection

@section('contenu')
    <div class="col-sm-offset-3 col-sm-6">
        <div class="card">
            <div class="card-header">Modifier un film</div>
            <div class="card-body">
                {!! Form::model($film, ['route' => ['films.update', $film], 'method' => 'PUT']) !!}
                <div class="form-group {{ $errors->has('titre') ? 'has-error' : '' }}">
                    {!! Form::text('titre', null, ['class' => 'form-control', 'placeholder' => 'Titre']) !!}
                    {!! $errors->first('titre', '<small class="help-block text-danger">:message</small>') !!}
                </div>
                <div class="form-group {{ $errors->has('titre') ? 'has-error' : '' }}">
                    {!!
                        Form::select('id_categorie', $categories, null, ['placeholder' => 'Categorie...']);
                    !!}
                    {!! $errors->first('id_categorie', '<small class="help-block text-danger">a categorie is required</small>') !!}
                </div>
                <div class="form-group {{ $errors->has('anneeSortie') ? 'has-error' : '' }}">
                    {!! Form::number('anneeSortie', null, ['class' => 'form-control', 'placeholder' => '2020']) !!}
                    {!! $errors->first('anneeSortie', '<small class="help-block text-danger">:message</small>') !!}
                </div>
                <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Description']) !!}
                    {!! $errors->first('description', '<small class="help-block text-danger">:message</small>') !!}
                </div>
                {!! Form::submit('Valider', ['class' => 'btn btn-info pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <p></p>
@endsection