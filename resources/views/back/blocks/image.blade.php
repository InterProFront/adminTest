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

                                        <div class="file-preview-frame">
                                            <div class="kv-file-content">
                                                <img src="{{$solo_widgets->image_1_field->preview_resize->link}}" class="kv-preview-data file-preview-image" title="2.jpg" alt="2.jpg" style="width:auto;height:160px;">
                                            </div>
                                            <div class="file-thumbnail-footer">
                                                <div class="file-footer-caption" title="2.jpg">{{$solo_widgets->image_1->name_field}} <br><samp>(425.24 KB)</samp></div>
                                                <div class="file-actions">
                                                    <input type="text" class="form-control alt-text" value="{{$solo_widgets->image_1_field->alt}}" data-block="solo_widgets" data-type="images" data-id="0" data-name="alt">
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>

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
                                <input type="file" class="form-control file"
                                       data-block="solo_widgets"
                                       data-name="image_1"
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