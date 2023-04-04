@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="my-5">お問い合わせ内容の確認</h1>

    <form method="POST" action="{{ route('contacts.store') }}">
      @csrf
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">名前</label>
        <div class="col-sm-10">
          <p class="form-control-plaintext">{{ $input['fullname'] }}</p>
          <input type="hidden" name="fullname" value="{{ $input['fullname'] }}">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">性別</label>
        <div class="col-sm-10">
          <p class="form-control-plaintext">{{ $gender }}</p>
          <input type="hidden" name="gender" value="{{ $input['gender'] }}">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">メールアドレス</label>
        <div class="col-sm-10">
          <p class="form-control-plaintext">{{ $input['email'] }}</p>
          <input type="hidden" name="email" value="{{ $input['email'] }}">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">郵便番号</label>
        <div class="col-sm-10">
          <p class="form-control-plaintext">{{ $input['postcode'] }}</p>
          <input type="hidden" name="postcode" value="{{ $input['postcode'] }}">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">住所</label>
        <div class="col-sm-10">
          <p class="form-control-plaintext">{{ $input['address'] }}</p>
          <input type="hidden" name="address" value="{{ $input['address'] }}">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">建物名</label>
        <div class="col-sm-10">
          <p class="form-control-plaintext">{{ $input['building_name'] }}</p>
          <input type="hidden" name="building_name" value="{{ $input['building_name'] }}">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">ご意見</label>
        <div class="col-sm-10">
          <p class="form-control-plaintext">{{ $input['opinion'] }}</p>
          <input type="hidden" name="opinion" value="{{ $input['opinion'] }}">
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
          <button type="submit" name="action" value="back" class="btn btn-secondary">修正する</button>
          <button type="submit" value="submit" class="btn btn-primary">送信する</button>
        </div>
    </div>
  </form>
</div>
@endsection