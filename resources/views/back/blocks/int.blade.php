@section('content')
    @extends('back.layout')

    @include('back.content-top', ['title' => 'Строки'])

    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">INT</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label>Целое число</label>
                        <input class="form-control int"
                               type="number"
                               placeholder="Введите текст"
                               value="{{$solo_widgets->int_1_field}}"
                               data-name="int_1"
                               data-type="int"
                               data-block="solo_widgets"
                               data-id="0">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection