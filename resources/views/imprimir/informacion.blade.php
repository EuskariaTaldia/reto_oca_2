@extends('layouts.master')

@section('content')

    <h2>Imprimir el listado:<h2>

    <h2>Filtrado</h2>
    <div class="row">
        <div class="form-group col">
            <label for="estu">Estudios:</label>
            <select class="form-control " id="estu">
                <option value=""></option>
                <option value="Historia">Historia</option>
                <option value="Derecho">Derecho</option>
                <option value="Antropologia">Antropología</option>
                <option value="Geografia">Geografía</option>
                <option value="Filosofia">Filosofía</option>
                <option value="Psicologia">Psicología</option>
                <option value="Economia">Economía</option>
                <option value="Sociologia">Sociología</option>
                <option value="Pedagogía">Pedagogía</option>
            </select>
        </div>

        <div class="form-group col">
            <label for="geo">Geografico:</label>
            <select class="form-control" id="geo">
                <option value=""></option>
                    <option value="Europa">Europa</option>
                    <option value="Norteamerica">Norteamérica</option>
                    <option value="AmericaLatina">América Latina</option>
                    <option value="Asia">Asia</option>
                    <option value="Oceania">Oceanía</option>
                    <option value="Africa">África</option>
            </select>
        </div>    
    </div>

    <hr>    

    <h6 style="display: flex;justify-content: center;align-items: center;">Leyenda</h6>
    <div class="leyenda">
        <div class="row d-flex justify-content-center" style="margin-bottom: 20px;">
            <div class="cuadrado" style="background-color:yellow;">Historia</div>
            <div class="cuadrado" style="background-color:green;">Derecho</div>
            <div class="cuadrado" style="background-color:blue;">Antropología</div>
            <div class="cuadrado" style="background-color:grey;">Geografía</div>
            <div class="cuadrado" style="background-color:purple;">Filosofía</div>
            <div class="cuadrado" style="background-color:pink;">Psicología</div>
            <div class="cuadrado" style="background-color:red;">Economía</div>
            <div class="cuadrado" style="background-color:orange;">Sociología</div>
            <div class="cuadrado" style="background-color:white;">Pedagogía</div>
        </div>
    </div>

    <div class="card-columns offset-1 col-10">

    <?php
        $cantidad =  30;

        for($i = 0; $i < $cantidad; $i++ ){
    ?>

        <div class="card text-white bg-dark mb-3 " style="max-width: 18rem;">
            <img class="card-img-top" src="imagenes/oficina1r.jpg" alt="Argazkia 1">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6>Urtea - Lekua</h6>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                
                <a href="#">Ver más</a>
            </div>
        </div>
        
                
        <?php
            }        
        ?>
    </div>

@stop