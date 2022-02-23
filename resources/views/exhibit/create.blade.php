@extends('layouts.main')
@section('css')


@endsection
@section('content')
<div class="p-mypageExhibitCreate">
    <div class="inner u-inner-1200">
        <form id="form" name="form" action="{{route('exhibit.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
                <div class="u-alert danger" id="alertElement">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="needsclick dropzone @error('photos') is-invalid @enderror" id="photos-dropzone">

            </div>
            <div class="form-group first">
                <p>商品名</p>
                <input type="text" name="title" id="title" class="@error('title') is-invalid @enderror" placeholder="" value="{{ old('title') }}">
            </div>
            <div class="form-group first">
                <p>商品説明</p>
                <textarea name="description" id="description" class="@error('description') is-invalid @enderror" cols="30" rows="10" placeholder="">{{ old('description') }}</textarea>
            </div>
            <div class="form-group">
                <p>カテゴリー</p>
                <div>
                    @foreach(config('myconfig.category') as $key => $value)
                        <label class="u-radio">{{$value}}
                            <input type="radio" id="category{{ $key+1 }}" name="category" value="{{$key}}" {{ $key== 0 ? "checked": "" }}/>
                            <span class="checkmark"></span>
                        </label>
                    @endforeach
                </div>
            </div>            
            <div class="form-group price">
                <p>価格</p>
                <div>
                    <span>¥</span>
                    <input type="number" name="price" id="price" placeholder="" class="@error('price') is-invalid @enderror" min="100" value="{{ old('price') }}">
                    
                </div>
            </div>
            <div class="form-group quantity">
                <p>数量</p>
                <div>
                    <input type="number" name="quantity" id="quantity" placeholder="" class="@error('quantity') is-invalid @enderror" min="100" value="{{ old('quantity') }}">                    
                </div>
            </div>
            <div class="u-center btn">
                <a class="u-btn u-btn-black" href="{{ route('exhibit.index') }}">戻る</a>
                <button class="u-btn u-btn-black" type="button" data-izimodal-open="#modal">登録する</button>
            </div>
        </form>
        <div id="modal">
            <div class="u-modal">
                <div class="u-modal__title">登録しますか？</div>
                <div class="u-modal__btns">
                    <button type="button" class="u-btn u-btn-black sm" id="okBtn">はい</button>
                    <button type="button" class="u-btn u-btn-gray sm" data-dismiss="modal" data-izimodal-close="">いいえ</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    var uploadedPhotosMap = {}
    Dropzone.options.photosDropzone = {
        dictDefaultMessage: "画像を選択してください",
        url: "{{ route('exhibit.media') }}",
        maxFilesize: 2, // MB
        acceptedFiles: '.jpeg,.jpg,.png,.gif',
        addRemoveLinks: true,
        headers: {
        'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        params: {
        size: 2,
        width: 4096,
        height: 4096
        },
        success: function (file, response) {
        $('form').append('<input type="hidden" name="photos[]" value="' + response.name + '">')
        uploadedPhotosMap[file.name] = response.name
        },
        removedfile: function (file) {
        console.log(file)
        file.previewElement.remove()
        var name = ''
        if (typeof file.file_name !== 'undefined') {
            name = file.file_name
        } else {
            name = uploadedPhotosMap[file.name]
        }
        $('form').find('input[name="photos[]"][value="' + name + '"]').remove()
        },
        init: function () {
            @if(isset($exhibit) && $exhibit->photos)
                var files =
                    {!! json_encode($exhibit->photos) !!}
                    for (var i in files) {
                    var file = files[i]
                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, file.url)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="photos[]" value="' + file.file_name + '">')
                    }
            @endif
        },
        error: function (file, response) {
            if ($.type(response) === 'string') {
                var message = response //dropzone sends it's own error messages in string
            } else {
                var message = response.errors.file
            }
            file.previewElement.classList.add('dz-error')
            _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
            _results = []
            for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                node = _ref[_i]
                _results.push(node.textContent = message)
            }

            return _results
        }
    }
</script>
<script>
    $(document).ready(function() {
        $("#modal").iziModal({
            width: 400
        });
        $("#okBtn").click(function(){
            var form = document.getElementById("form");
            form.submit();
        });
    });
</script>
@endsection