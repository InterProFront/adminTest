@section('content')
    @extends('back.layout')

    @include('back.content-top', ['title' => 'Строки'])

    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">BOOL</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label>
                            <input type="checkbox" class="minimal  bool"
                                   data-name="bool_1"
                                   data-type="bool"
                                   data-block="solo_widgets"
                                   data-id="0"
                                   @if($solo_widgets->bool_1_field) checked @endif>
                            Bool_1
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection