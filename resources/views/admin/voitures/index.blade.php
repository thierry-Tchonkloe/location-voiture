@extends('partials.admin_layout')

@section('content')
<!-- Hover table card start -->
<div class="col-sm-12">
<div class="card">
    <div class="card-header">
        <h5>Listes des fournisseurs</h5>
        {{-- <span>use class <code>table-hover</code> inside table element</span> --}}
        <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
    </div>
    <div class="card-block table-border-style">
         @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Type</th>
                        <th>Nom</th>
                        <th>Prix de Réservation avec chauffeur</th>
                        <th>Prix de Réservation sans chauffeur</th>
                        <th>Image</th>
                        <th colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($voitures as $voiture)
                    <tr>
                        <th scope="row"></th>
                        <td>{{$voiture->type}}</td>
                        <td>{{$voiture->nom}}</td>
                        <td> {{$voiture->prix_avec_chauffeur}} </td>
                        <td> {{$voiture->prix_sans_chauffeur}} </td>
                        <td><a target="blank" href=""><img height="50" width="50" src="{{$voiture->image}}" alt=""></a></td>
                        
                        <td>
                            <a class="btn btn-info" href="{{Route('creerVoiture.edit',$voiture->id)}}"><i class="ti-pencil-alt"></i></a>
                                <form action="{{Route('creerVoiture.destroy',$voiture->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete_modal">
                                <i class="ti-trash"></i></button>
                                
                                </form>
                            
                        </td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<!-- Hover table card end -->
@endSection
