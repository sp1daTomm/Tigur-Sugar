@extends('layouts.backend-template')

@section('css')
@endsection

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <h4 class="card-header">
                        飲品管理(中)-新增
                    </h4>
                    <div class="card-body">
                        <form method="POST" action="{{route('back.drink.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="type_id" class="col-2 col-form-label">類別</label>
                                <div class="col-10">
                                    <select class="form-control" name="type_id" id="type_id" required>
                                        @foreach($types as $type)
                                            <option value="{{$type->id}}">{{$type->type_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="drink_name" class="col-2 col-form-label">飲品名稱</label>
                                <div class="col-10">
                                    <input class="form-control" id="drink_name" name="drink_name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="type_name" class="col-2 col-form-label">冷飲/熱飲</label>
                                <div class="col-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="cold" name="cold" value="1" checked>
                                        <label class="form-check-label" for="cold">冷飲</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="hot" name="hot" value="1"  checked>
                                        <label class="form-check-label" for="hot">熱飲</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="sort" class="col-2 col-form-label">權重</label>
                                <div class="col-10">
                                    <input type="number" class="form-control" id="sort" name="sort" required value="0" min="0" max="999">
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary d-block mx-auto">新增</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
