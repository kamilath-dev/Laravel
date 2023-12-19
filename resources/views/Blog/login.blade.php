@extends('app')

@section('title', 'Registration')

@section('content')

<!-- content -->
<form action="{{ route('store') }}" method="POST">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-md-7">
               <h1 class="text-left">Bootstrap Registration Form</h1>
                <p class="text-left">Lorem ipsum dolor sit amet consectetur,
                    adipisicing elit. Expedita accusamus laudantium a id porro
                    quasi accusantium veniam! Deserunt ea esse alias sint aperiam,
                    nam delectus ipsa saepe quis adipisci accusantium.Lorem ipsum dolor sit amet consectetur,
                    adipisicing elit. Expedita accusamus laudantium a id porro
                    quasi accusantium veniam! Deserunt ea esse alias sint aperiam,
                    nam delectus ipsa saepe quis adipisci accusantium.Lorem ipsum dolor sit amet consectetur,
                    adipisicing elit. Expedita accusamus laudantium a id porro
                    quasi accusantium veniam! Deserunt ea esse alias sint aperiam,
                    nam delectus ipsa saepe quis adipisci accusantium.Lorem ipsum dolor sit amet consectetur,
                    adipisicing elit. Expedita accusamus laudantium a id porro
                    quasi accusantium veniam! Deserunt ea esse alias sint aperiam,
                    nam delectus ipsa saepe quis adipisci accusantium.
                </p>
            </div>
            <div class="col-md-5">
                <!-- make a 2 colum of 6 -->
                <div class="row">
                    <div class="col-md-6">
                       <h3 class="text-left">Registration Form</h3>
                    </div>
                    <div class="col-md-6">
                       <span class="glyphicon glyphicon-pencil"></span>
                    </div>
                </div>
                <hr>
                <!-- close -->
                <!-- make another colum for textbox and label -->
                <div class="row">
                    <label class="label col-md-2 control-label">Nom</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="nom" placeholder="Nom" required  >
                    </div>
                </div>
                <div class="row">
                    <label class="label col-md-2 control-label">Prenom</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="prenom" placeholder="Prenom" required >
                    </div>
                </div>
                <div class="row">
                    <label class="label col-md-2 control-label">E-mail</label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" name="email" placeholder="E-mail" required >
                    </div>
                </div>
                <div class="row">
                    <label class="label col-md-2 control-label">Password</label>
                    <div class="col-md-10">
                        <input type="password" class="form-control" name="password" placeholder="Password" required >
                    </div>
                </div>
                <!-- close -->
                <button type="submit" class="btn btn-info">Submit</button>
                <a href="{{ route('Blog.Accueil') }}">
                    <div class="btn btn-warning">Cancel</div>
                </a>
                <!-- close -->
            </div>
        </div>
    </div>
</form>

@if(Session::has('succes'))
    <div class="alert alert-success">
        {{ Session::get('succes') }}
    </div>
@endif

@if(Session::has('erreur'))
    <div class="alert alert-danger">
        {{ Session::get('erreur') }}
    </div>
@endif


@endsection
