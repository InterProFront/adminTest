@section('content')
    @extends('back.layout')

    @include('back.content-top', ['title' => 'Строки'])

    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">LINK</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label>Обычный селект</label>
                        <select class="form-control custom-select" style="width: 100%;"
                                data-name="countr"
                                data-type="numb"
                                data-block="solo_widgets"
                                data-id="0">
                            @foreach($country  as $item)
                                <option value="{{$item->id_field}}"
                                @if($item->id_field  == $solo_widgets->countr_field)
                                    selected
                                @endif
                                >{{$item->country_name_field}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                        <pre>
                        &#60;div class="form-group"&#62;
                            &#60;label&#62;Обычный селект&#60;/label&#62;
                            &#60;select class="form-control custom-select" style="width: 100%;" 
                                    data-name="countr" 
                                    data-type="numb" 
                                    data-block="solo_widgets" 
                                    data-id="0"&#62; 
                                  &#64;foreach($country as $item)
                                    &#60;option value="@{{$item->id_field}}" 
                                     &#64;if($item->id_field  == $solo_widgets->countr_field)}} 
                                            selected 
                                      &#64;endif}} 
                                    &#62;@{{$item->country_name_field}}&#60;/option&#62; 
                                 &#64;endforeach 
                            &#60;/select&#62; 
                        &#60;/div&#62;
                        </pre>

                </div>
            </div>
        </div>
    </div>

@endsection

