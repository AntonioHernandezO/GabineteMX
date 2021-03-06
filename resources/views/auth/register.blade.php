@extends('layouts.plantilla')
@section('seccion')
<!-- Inicia Contenido -->
<style>
    .invalid-feedback{
        color:red;
    }
</style>

<div class="contenido">
    <div class="RegistroUserCss">
        <div class="marizq"></div>
        <div class="RegistroUserTituloCss">
            <h3>Registrate</h3>

            <h6>Ingresa los siguientes datos:</h6>
                <br><br>
        </div>
        <form class="col s12" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="blockUnoRegistroUserCss" id="blockUnoRegistroUserCss">

                <div class="RegistreUserPrimerApeCss">

                    <input id="first_name" type="text" value="{{old('ape1')}}" class="validate" name="ape1">
                    <label for="first_name">{{'Primer Apellido'}}</label>
                    <br>
                    @error('ape1')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                </div>
                <div class="RegistreUserSegundoApeCss">
                    <input id="last_name" type="text" value="{{old('ape2')}}" class="validate" name="ape2">
                    <label for="last_name">{{'Segundo Apellido'}}</label>
                    <br>
                    @error('ape2')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                </div>
                <div class="RegistreUserNombreCss">
                    <input id="Nombre" type="text" value="{{old('nom')}}" class="validate" name="nom">
                    <label for="Nombre">{{'Nombre(s)'}}</label>
                    <br>
                    @error('nom')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    <center>
                    <a class="btn" id="siguienteDos">
                        Siguiente
                    </a>
                
                    </center>
                </div>
            </div>
            <div class="blockDosRegistroUserCss" id="blockDosRegistroUserCss"  >

                <div class="RegistroUserTelCss">
                    <input id="Num" type="text" value="{{old('telefono')}}" class="validate" name="telefono">
                    <label for="Num">{{'Numero de telefono'}}</label>
                    <br>
                    @error('telefono')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="RegistroUserEmailCss">
                    <input id="email" type="email" value="{{old('email')}}" class="validate" name="email">
                    <label for="email">{{'Email'}}</label>
                    <br>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
               
                    <br>
                    <center>          
                 
                    <a class="btn" id="siguienteTres">
                        Siguiente
                    </a>
                    <br>
                    <br>
                    <a id="RegresaUno">
                        Regresar!
                    </a>
                    </center>
                </div>
            </div>
            <div class="blockTresRegistroUserCss" id="blockTresRegistroUserCss">

                <div class="RegistroUserPassUnoCss">
                    <input id="password" type="password" class="validate" name="password">
                    <label for="password">{{'Password'}}</label>
                    <br>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="RegistroUserPassConfirmaCss">
                    <input id="password-confirm" type="password" class="validate" name="password_confirmation">
                    <label for="password">{{'Confirmar Password'}}</label>
                    <br>
                    <center>
                    <input class="btn" type="submit" value="Enviar" id="Enviar">
                        
                    <br>
                    <br>
                    <a id="RegresaDos">
                        Regresar!
                    </a>
                    

                    </center>
                </div>
            </div>

            <div class="RegistroUserBtnCss">
                <center> 
       
                </center>
            </div>
        </form>
        <div class="marder"></div>
    </div>
    <script src="js/RegistrarUser.js"></script>
</div>
<!-- Termina contenido -->
@endsection