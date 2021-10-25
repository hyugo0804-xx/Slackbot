@extends('layouts.app')

@section('title', 'お問合わせ')

@section('script')
<script>
  function onClick(e) {
    document.getElementById("contactform").submit();
  }
</script>
@endsection

@section('content')
  @error('token')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <form method="POST" id="contactform" action="/inquiry/confirm">
    @csrf
    <table class="table-form">
      <tr>
        <th>お名前</th>
        <td>
          <input type="text" name="name" value="{{ old('name') }}"/>
          @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </td>
      </tr>
      <tr>
        <th>メールアドレス</th>
        <td>
          <input type="email" name="email" value="{{ old('email') }}"/>
          @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </td>
      </tr>
      <tr>
        <th>メッセージ</th>
        <td>
          <textarea name="message">{{ old('message') }}</textarea>
          @error('message')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </td>
      </tr>
    </table>
    <div class="button-area">
      <button type="button" class="go" onclick="onClick(event)">確認する</button>
    </div>
  </form>
@endsection