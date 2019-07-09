@extends('frontEnd/footer')
@section('content')
@extends('layouts.app')
@section('content')
<nav class=" row nav-front navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link " id="pills-hoe-tab" data-toggle="pill" href="#pills-Cadatro-Console" role="tab"
          aria-controls="pills-Cadatro-Console" aria-selected="false">Cadastrar Console</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-Cadatro-Roms" role="tab"
          aria-controls="pills-Cadatro-Roms" aria-selected="false">Cadastrar Roms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-Lista-Consoles" role="tab"
          aria-controls="pills-Lista-Consoles" aria-selected="false">Listar Consoles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-Lista-Roms" role="tab"
          aria-controls="pills-Lista-Roms" aria-selected="false">Listar Rooms</a>
      </li>
    </ul>
  </div>
</nav>


<div tyle="margin-top:5px;" class="row container tab-content" id="pills-tabContent">
  <div class="col-md-4"></div>
  <div class="col-md-6 tab-pane fade " id="pills-Cadatro-Console" role="tabpanel">
    <div class=" container form-group">
      <label for="exampleFormControlInput1"><strong>Nome do Console</strong></label>
      <input type="text" class="form-control" id="name" placeholder="Nome do Console">
      <button type="button" style="margin-top:5px;" class="btn btn-secondary" id="save">Create</button>     


    </div>
    
      
    
  </div>
  <div class="tab-pane fade" id="pills-Cadatro-Roms" role="tabpanel">Cadastro de Roms</div>
  <div class="tab-pane fade" id="pills-Lista-Consoles" role="tabpanel">Lista de console</div>
  <div class="tab-pane fade" id="pills-Lista-Roms" role="tabpanel">Lista de roms</div>
</div>



@endsection
@endsection
