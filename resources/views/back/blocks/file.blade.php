@section('content')
    @extends('back.layout')

    @include('back.content-top', ['title' => 'Строки'])

    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">File</h3>
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
                                                <p style="font-size: 120px;"><i class="fa fa-file-pdf-o "></i></p>
                                            </div>
                                            <div class="file-thumbnail-footer">
                                                <div class="file-actions">
                                                    <input type="text"
                                                           class="form-control title"
                                                    data-block="solo_widgets"
                                                    data-name="title"
                                                    data-type="file"
                                                    value="{{$file->test_field->title}}"
                                                    data-id="0"
                                                    placeholder="Имя файла при скачивании">
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
                                <input type="file" class="form-control files"
                                       data-block="solo_widgets"
                                       data-name="test"
                                       data-type="file"
                                       accept="application/pdf"
                                       data-id="0">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection