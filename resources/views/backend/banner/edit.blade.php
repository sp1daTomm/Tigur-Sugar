@extends('layouts.backend-template')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
@section('css')

@endsection

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <h4 class="card-header">
                        廣告橫幅管理-編輯
                    </h4>
                    <div class="card-body">
                        <form method="POST" action=/admin/banner/update/{{$id}}" enctype="multipart/form-data">
                            @csrf
                            <input hidden class="form-control" name="type" id="banner_type" value="{{$info->type}}" required>

                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link  @if($info->type =='圖片') active @endif" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">圖片</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if($info->type =='影片') active @endif" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">影片</a>
                                </li>
                            </ul>

                            <hr>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade @if($info->type =='圖片') show active @endif" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="form-group row">
                                        <label for="now_image" class="col-2 col-form-label">當前圖片</label>
                                        <div class="col-10">
                                            <img src="{{$info->pc_image_url}}" alt="" width="250">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pc_image_url" class="col-2 col-form-label">更新圖片</label>
                                        <div class="col-10">
                                            <input type="file" class="form-control-file" id="pc_image_url" name="pc_image_url">
                                        </div>
                                        <div class="col-12">
                                            <p class="text-danger">
                                                *注意：1.上傳後，將覆蓋掉原有照片！
                                                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.建議尺寸：1920 * 907 (px)
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="now_image_mb" class="col-2 col-form-label">當前圖片(手機版)</label>
                                        <div class="col-10">
                                            <img src="{{$info->mb_image_url}}" alt="" width="250">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="mb_image_url" class="col-2 col-form-label">更新圖片(手機版)</label>
                                        <div class="col-10">
                                            <input type="file" class="form-control-file" id="mb_image_url" name="mb_image_url">
                                        </div>
                                        <div class="col-12">
                                            <p class="text-danger">
                                                *注意：1.上傳後，將覆蓋掉原有照片！
                                                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.建議尺寸：420 * 640 (px)
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="image_alt" class="col-2 col-form-label">圖片替代文字(alt)</label>
                                        <div class="col-10">
                                            <input type="text" class="form-control" id="image_alt" name="image_alt" value="{{$info->image_alt}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="link_url" class="col-2 col-form-label">圖片連結</label>
                                        <div class="col-10">
                                            <input type="text" class="form-control" id="link_url" name="link_url" value="{{$info->link_url}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="link_url" class="col-2 col-form-label">另開視窗</label>
                                        <div class="col-10"  style="padding-left: 35px">
                                            <input class="form-check-input" type="checkbox" value="link_target" name="link_target" id="link_target" @if($info->link_target == 'link_target') checked @endif>
                                            <label class="form-check-label" for="link_target">
                                                另開新視窗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade @if($info->type =='影片') show active @endif" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="form-group row">
                                        <label for="pc_video_url" class="col-2 col-form-label">設定影片連結<br>(Youtube連結)</label>
                                        <div class="col-10">
                                            <input type="text" class="form-control" id="pc_video_url" name="pc_video_url" value="https://www.youtube.com/watch?v={{$info->pc_video_url}}">
                                        </div>
                                        <div class="col-12"><p class="text-danger">*注意：建議尺寸：1920 * 907 (px)</p></div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="mb_video_url" class="col-2 col-form-label">設定影片連結<br>(Youtube連結)</label>
                                        <div class="col-10">
                                            <input type="text" class="form-control" id="mb_video_url" name="mb_video_url" value="https://www.youtube.com/watch?v={{$info->mb_video_url}}">
                                        </div>
                                        <div class="col-12"><p class="text-danger">*注意：建議尺寸：420 * 640 (px)</p></div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <label for="sort" class="col-2 col-form-label">權重</label>
                                <div class="col-10">
                                    <input type="number" class="form-control" id="sort" name="sort" required value="{{$info->sort}}" min="0" max="999">
                                </div>
                            </div>

                            <hr>

                            <button type="submit" class="btn btn-primary d-block mx-auto">修改</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
            if($(e.target).attr('id') == 'pills-home-tab'){
                document.querySelector("#banner_type").setAttribute('value','圖片');
            }else{
                document.querySelector("#banner_type").setAttribute('value','影片');
            }
        })
    </script>
@endsection
