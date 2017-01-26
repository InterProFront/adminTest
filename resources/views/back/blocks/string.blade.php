@section('content')
    @extends('back.layout')

    @include('back.content-top', ['title' => 'Строки'])

    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">STRING</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label>Строка 1</label>
                        <input class="form-control string"
                               type="text"
                               placeholder="Введите текст"
                               value="{{$solo_widgets->string_1_field}}"
                               data-name="string_1"
                               data-type="string"
                               data-block="solo_widgets"
                               data-id="0">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection