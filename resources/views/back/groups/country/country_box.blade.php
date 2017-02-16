<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Страна  {{$item->sorter_field}} </h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{-- {{$item->id_field}} --}}"
                data-block="advantages">Удалить
        </button>
    </div>
    <div class="box-body">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label>Название страны</label>
                        <input class="form-control string"
                               type="text"
                               placeholder="Введите текст"
                               value="{{$item->country_name_field}}"
                               data-name="country_name"
                               data-type="string"
                               data-block="country"
                               data-id="{{$item->id_field}}">
                    </div>
                </div>
            </div>
    </div>
</div>