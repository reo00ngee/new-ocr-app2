@extends('layouts.app')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">OCR登録</div>

                <div class="card-body">
                    <form method='POST' action="/store" enctype="multipart/form-data">
                        @csrf
                        <input type='hidden' name='user_id' value="{{ $user['id'] }}">
                        <!-- 画像をアップロードするフォーム -->
                        <div class="form-group">
                            <h4>OCRする画像をアップロードしてください</h4>
                            <div>
                                <input type="file" class="form-control-file" name='image' id="image">
                            </div>
                        </div>
                        <button type='submit' class="btn btn-primary btn-lg">保存</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">このアプリについて</div>
                <div class="card-body">
                    <form method='GET' action="/ocrResult">
                        @csrf
                        <input type='hidden' name='user_id' value="{{ $user['id'] }}">

                        <p>文章が書かれた画像ファイルをアップロードすることで、OCRされた文章とそれを要約した文章を閲覧することができるアプリです。 </p>
                        <p>活用例は以下になります。</p>
                        <p>・本や記事、名刺などのスクリーンショットを文章化しノートに写せるようにする</p>
                        <p>・請求書の画像を文章化し、手入力を省く</p>
                        <p>画像ファイルは、jpgとpngを利用できます。</p>
                        <p>画像アップロードには10秒ほどかかります。</p>


                        <button type='submit' class="btn btn-primary btn-lg" id="indicator">OCR一覧へ移動</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection