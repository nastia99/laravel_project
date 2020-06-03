@extends('template')

@section('titrePage')
    Ajouter une catégorie
@endsection

@section('titreItem')
    <h1>Ajouter une catégorie</h1>
@endsection

@section('contenu')
    <div class="col-sm-offset-3 col-sm-6">
        <div class="card">
            <div class="card-header">Créer une catégorie</div>
            <div class="card-body">
                {!! Form::open(['url' => 'categories']) !!}
                <div class="form-group {{ $errors->has('libelle') ? 'has-error' : '' }}">
                    {!! Form::text('libelle', null, ['class' => 'form-control', 'placeholder' => 'Libelle']) !!}
                    {!! $errors->first('libelle', '<small class="help-block text-danger">:message</small>') !!}
                </div>
                {!! Form::submit('Valider', ['class' => 'btn btn-info pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <p></p>
@endsection