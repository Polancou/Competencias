@foreach(range(1,$ntemas) as $ntema)
    <div class="row">
        <h5>Tema {{ $ntema }}</h5>
        <div class="input-field">
            <input type="text" id="nombretema" name="nombretema">
            <label for="nombretema">Nombre</label>
        </div>
        <div class="input-field">
            <input type="text" id="actividad_apren" name="actividades_apren">
            <label for="actividad_apren">Actividades de Aprendizaje</label>
        </div>
        <div class="input-field">
            <input type="text" id="actividad_ense" name="actividades_ense">
            <label for="actividad_ense">Actividades de Enseñanza</label>
        </div>
        <div class="input-field">
            <input type="text" id="desarrollo_compe" name="desarrollo_compe">
            <label for="desarrollo_compe">Desarrollo de competencias genéricas</label>
        </div>
        <div class="input-field">
            <input type="text" id="horas" name="horas">
            <label for="horas">Horas Teórico-Práctica</label>
        </div>
    </div>
@endforeach