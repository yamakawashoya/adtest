<!DOCTYPE html>
<html>
<head>
    <title>お問い合わせフォーム</title>
</head>
<body>
    <h1>お問い合わせフォーム</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('contact.confirm') }}" method="POST">
        @csrf
        <div>
            <label for="fullname">名前<span>*</span></label>
            <input type="text" name="fullname" value="{{ old('fullname') }}">
        </div>
        <div>
            <label for="gender">性別</label>
            <input type="radio" name="gender" value="1" {{ old('gender', '1') == '1' ? 'checked' : '' }}>男性
            <input type="radio" name="gender" value="2" {{ old('gender') == '2' ? 'checked' : '' }}>女性
        </div>
        <div>
            <label for="email">メールアドレス<span>*</span></label>
            <input type="email" name="email" value="{{ old('email') }}">
        </div>
        <div>
            <label for="postcode">郵便番号<span>*</span></label>
            <input type="text" name="postcode" value="{{ old('postcode') }}">
        </div>
        <div>
            <label for="address">住所<span>*</span></label>
            <input type="text" name="address" value="{{ old('address') }}">
        </div>
        <div>
            <label for="building_name">建物名</label>
            <input type="text" name="building_name" value="{{ old('building_name') }}">
        </div>
        <div>
            <label for="opinion">ご意見<span>*</span></label>
            <textarea name="opinion">{{ old('opinion') }}</textarea>
        </div>
        <div>
            <input method="POST" action="{{ route('contacts.store') }}" type="submit" name="submit" value="確認">
        </div>
    </form>
</body>
</html>