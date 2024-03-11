@extends('partials.admin_layout')

@section('content')
<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <h5>Formulaire d'enregistrement des voitures
            </h5>
            {{-- <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span> --}}
            <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i></div>

            <div class="card-header-right">
                <i class="icofont icofont-spinner-alt-5"></i>
            </div>

        </div>
        <div class="card-block">
            <h4 class="sub-title">Veuillez remplir tout les champs</h4>
            <form method="POST" action="{{Route('creerVoiture.store')}}" enctype="multipart/form-data">
            @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Type de Voiture <span>*</span></label>
                    <div class="col-sm-10">
                        <input name="type" type="text" class="form-control form-control-round" placeholder="...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nom <span>*</span></label>
                    <div class="col-sm-10">
                        <input name="nom" type="text" class="form-control form-control-round" placeholder="...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Image<span>*</span></label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="image" id="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Prix de réservation sans chauffeur<span>*</span></label>
                    <div class="col-sm-10">
                        <input name="prix_sans" type="text" class="form-control form-control-round" placeholder="...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Prix de réservation avec chauffeur<span>*</span></label>
                    <div class="col-sm-10">
                        <input name="prix_avec" type="text" class="form-control form-control-round" placeholder="...">
                    </div>
                </div>

                
                
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="submit" class="form-control form-control-round form-bg-info" name="ENREGISTRER">
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
