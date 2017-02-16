@section('content')
    @extends('back.layout')

    @include('back.content-top', ['title' => 'Строки'])

    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Float</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label> Дробное 1</label>
                        <input class="form-control float"
                               type="string"
                               placeholder="Введите число"
                               value="{{$solo_widgets->float_1_field}}"
                               data-name="float_1"
                               data-type="float"
                               data-block="solo_widgets"
                               data-id="0">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection