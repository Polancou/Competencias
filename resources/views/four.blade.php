@foreach(range(1,$competencias) as $ncompetencia)
    <h5>Competencia No. {{ $ncompetencia }}</h5>
    <div class="input-field">
        <input type="text" name="descripcion" id="descripcion">
        <label for="descripcion">Descripción:</label>
    </div>

    <div class="input-field">
        <input type="text" id="ntemas" name="ntemas">
        <label for="ntemas">Número de temas:</label>
    </div>
    <a class="btn" onclick="showTemas()">Aceptar</a>

    <div class="nexts{{ $ncompetencia }}" id="nexts{{ $ncompetencia }}" name="nexts{{ $ncompetencia }}"></div>

    <script>

        function showTemas() {
            var num = document.getElementById('ntemas').value;
            console.log(num);
            $.ajax({
                type: 'post',
                url: '{{ route('vertemas') }}',
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
                    $('.nexts{{ $ncompetencia }}').html(response);
                    document.getElementById('nexts{{ $ncompetencia }}').innerHTML = cosas;
                    console.log(response);
                    //MostrarOcultos();
                }
            });
        }
    </script>
@endforeach