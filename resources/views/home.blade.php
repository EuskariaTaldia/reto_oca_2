@extends('layouts.master')

@section('content')

    <div class="modal" id="myModal" style="background-image:url('../resources/images/feminismo.jpg');" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row justify-content-center">     
                                                
                        <div class="col-md-8">
                        
                            {{-- TIPO DE JUEGO --}}
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text">Tipo de juego</label>
                                </div>
        
                                <select class="custom-select">
                                    <option selected>Elige la opción</option>
                                    <option value="1">Con Preguntas</option>
                                    <option value="2">Sin preguntas</option>
                                </select>
                            </div>        
        
        
                            {{-- FILTRO --}}
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text">Filtro</label>
                                </div>
        
                                <select class="custom-select">
                                    <option selected>Elige la opción</option>
                                    {{-- Aqui deberia de ir un select a la base de datoss --}}
                                    <option value="1">Al azar</option>
                                    <option value="2">Campo</option>
                                    <option value="3">Geografico</option>
                                    <option value="4">Siglo</option>
                                </select>
                            </div>        
        
        
                            {{-- ESPECIFICACION --}}
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text">Especificacion</label>
                                </div>
        
                                <select class="custom-select">
                                    <option selected>Elige la opción</option>
                                    {{-- Aqui deberia de ir un select que depende el anterior --}}
                                    <option value="1">Al azar</option>
                                    <option value="2">Campo</option>
                                    <option value="3">Geografico</option>
                                    <option value="4">Siglo</option>
                                </select>
                            </div>                              
                        </div>
                    </div>


                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Jugar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Borrar</button>
                </div>
            </div>
        </div>
    </div>
    
@endsection
