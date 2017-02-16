@section('content')
    @extends('back.layout')

    @include('back.content-top', ['title' => 'Строки'])

    <div class="box box-info group-item-widget"
         data-block="country">
        <div class="box-header with-border">
            <h3 class="box-title">Страны</h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить
            </button>
        </div>
        <div class="box-body">
            <div class="groupflat-widget group-item-wrap">
                @foreach($links->country_group as $item)
                    @include('back.groups.country.country_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>

@endsection