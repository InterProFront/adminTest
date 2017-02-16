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
                        <label>Картинка</label>
                        <div class="dropzone">
                            <div class="file-input">
                                <div class="file-preview">
                                    <div class="input-group file-caption-main">

                                        @foreach($img->slider_group as $item)
                                            <div class="file-preview-frame">
                                                <div class="kv-file-content">
                                                    <img src="{{$item->slide_field->link}}"
                                                         class="kv-preview-data file-preview-image"
                                                         title="2.jpg"
                                                         alt="2.jpg" style="width:auto;height:160px;">
                                                </div>
                                                <div class="file-thumbnail-footer">
                                                    <div class="file-footer-caption" title="2.jpg">{{$item->slide_field->name_field}} <br><samp>(425.24 KB)</samp></div>
                                                    <div class="file-actions">
                                                        <input type="text"
                                                               class="form-control alt-text"
                                                               value="{{$item->slide_field->alt}}"
                                                               data-block="slider"
                                                               data-type="slide"
                                                               data-id="{{$item->id_field}}"
                                                               data-name="alt">
                                                        <button class="btn btn-primary btn-block remove-image"
                                                                data-block="slider"
                                                                data-name="slide"
                                                                data-id="{{$item->id_field}}">Удалить</button>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="input-group-btn">
                            <button type="button" tabindex="500" title="Clear selected files" class="btn btn-default fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-trash"></i>  <span class="hidden-xs">Remove</span></button>
                            <button type="button" tabindex="500" title="Abort ongoing upload" class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i class="glyphicon glyphicon-ban-circle"></i>  <span class="hidden-xs">Cancel</span></button>
                            <div tabindex="500" class="btn btn-primary btn-file">
                                <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                                <span class="hidden-xs">Browse …</span>
                                <input type="file" class="form-control multiupload"
                                       data-block="slider"
                                       data-name="slide"
                                       multiple
                                       data-type="image"
                                       data-id="0">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection