@section('content')
    @extends('back.layout')

    @include('back.content-top', ['title' => 'Текст'])

    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">TEXT</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label>Текст 1</label>
                        <textarea class="form-control text"
                               type="text"
                               placeholder="Введите текст"
                               data-name="text_1"
                               data-type="text"
                               data-block="solo_widgets"
                               data-id="0">{{$solo_widgets->text_1_field}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection