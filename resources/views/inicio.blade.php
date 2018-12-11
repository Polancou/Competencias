@extends('template')
@section('body')
    <!-- Page Content
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h4 class="mt-5">INSTRUMENTACIÓN DIDÁCTICA PARA LA FORMACIÓN Y DESARROLLO DE COMPETENCIA</h4>
            </div>
        </div>
    </div>-->
    <form class="col s12" method="post" action="">
        {{ csrf_field() }}
        <div class="row">
            <div class="col s12 m12">
                <div class="row center ">
                    <div class="row col s12 m9">
                        <blockquote>
                            <h4 class="left-align ">INSTRUMENTACIÓN DIDÁCTICA PARA LA FORMACIÓN Y DESARROLLO DE
                                COMPETENCIAS</h4>
                        </blockquote>
                    </div>
                </div>
                <div style="margin: auto; ">

                        <div class="card col s12 m6" >
                            <div class="row col s12 m12">
                                <div class="input-field col s12 m12">
                                    <input type="text"  name="periodo" id="periodo" value="" />
                                    <label  for="periodo">Periodo</label>
                                </div>
                                <div class="input-field col s12 m12">
                                    <input class="white-text" type="text" id="asignatura"
                                           value="" name="asignatura">
                                    <label for="asignatura">Nombre de asignatura</label>
                                </div>
                                <div class="input-field col s12 m12">
                                    <input type="text" id="planestudios"
                                           value="" name="planestudios">
                                    <label for="planestudios">Plan de estudios</label>
                                </div>
                                <div class="input-field col s12 m12">
                                    <input type="text" id="claveasignatura"
                                           value="" name="claveasignatura">
                                    <label for="claveasignatura">Clave de la asignatura</label>
                                </div>
                            </div>
                        </div>

                    <div class="card col s12 m12">
                        <div class="input-field col s12">
                            <h5>1. Caracterización de la asignatura</h5>
                            <textarea id="caracterizacion" class="materialize-textarea"></textarea>
                        </div>

                    </div>

                    <div class="card col s12 m12">
                        <div class="input-field col s12">
                            <h5>2. Intención Didáctica</h5>
                            <textarea id="intencion" class="materialize-textarea"></textarea>
                        </div>
                    </div>

                    <div class="card col s12 m12">

                        <div class="input-field col s12">
                            <h5>3. Competencia de la asignatura</h5>
                            <textarea id="competencia" class="materialize-textarea"></textarea>
                        </div>
                    </div>

                    <div class="card col s12 m12">
                        <div class="input-field col s12">
                            <h5>4. Análisis por competencias específicas</h5>
                            <div class="input-field">
                                <input type="text" id="ncompetencia" name="ncompetencia">
                                <label for="ncompetencia">Número de competencias</label>
                            </div>
                        </div>
                        <a class="btn" onclick="showCompetencias()">Aceptar</a>
                        <div class="posts row" id="posts">

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </form>





@endsection
@section('scripts')
    <script>
        function showCompetencias() {
            var num = document.getElementById('ncompetencia').value;
            console.log(num);
            $.ajax({
                type: 'post',
                url: '{{ route('vercuatro') }}',
                beforeSend: function (xhr) {
                    var token = $('meta[name="csrf-token"]').attr('content');
                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                data: {
                    numero: num
                },
                success: function (response) {
                    var cosas = response.html;
                    $('.posts').html(response);
                    document.getElementById('posts').innerHTML = cosas;
                    console.log(response);
                    $(document).ajaxComplete(function(){

                    });
                    //MostrarOcultos();
                }
            });
        }
    </script>
@endsection