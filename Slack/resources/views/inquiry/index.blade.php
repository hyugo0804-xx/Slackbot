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
  @honeypot
    <table class="table-form">
     <!-- 名前 -->
     <div class="form">
                <div class="column_area">
                  <div class="column_item must">
                    <span>必須</span>
                  </div>
                  <label for="last_name" class="column">お名前</label>
                </div>

                <div class="input_area">
                  <div class="input_item">
                    <input
                      type="text"
                      id="last_name"
                      name="last_name"
                      placeholder="山田"
                    />
                    @error('last_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <p>姓</p>
                  </div>
                  <div class="input_item">
                    <input
                      type="text"
                      id="first_name"
                      name="first_name"
                      placeholder="太郎"
                    />
                    @error('first_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <p>名</p>
                  </div>
                </div>
              </div>

              <!-- フリガナ -->
              <div class="form">
                <div class="column_area">
                  <div class="column_item must">
                    <span>必須</span>
                  </div>
                  <label for="last_name_kana" class="column">フリガナ</label>
                </div>

                <div class="input_area">
                  <div class="input_item">
                    <input
                      type="text"
                      id="last_name_kana"
                      name="last_name_kana"
                      placeholder="ヤマダ"
                    />
                    @error('last_name_kana')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <p>セイ</p>
                  </div>
                  <div class="input_item">
                    <input
                      type="text"
                      id="first_name_kana"
                      name="first_name_kana"
                      placeholder="タロウ"
                    />
                    @error('first_name_kana')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <p>メイ</p>
                  </div>
                </div>
              </div>
         <tr>
        <th>メールアドレス</th>
         <!-- メールアドレス -->
         <div class="form">
                <div class="column_area">
                  <div class="column_item must">
                    <span>必須</span>
                  </div>
                  <label for="email" class="column">メールアドレス</label>
                </div>

               <div class="input_area">
                <div class="input_item">
                    <input
                      type="email"
                      id="email"
                      name="email"
                      placeholder="mailaddress@gmail.com"
                    />
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
              </div> 
          </div>
         </tr>
         <!-- 電話番号 -->
         <div class="form">
                <div class="column_area">
                  <div class="column_item optional">
                    <span>任意</span>
                  </div>
                  <label
                    for="phone"
                    class="column"
                    style="width: 100%; box-sizing: border-box"
                    value="幅100%"
                    >電話番号</label
                  >
                </div>

                <div class="input_area">
                  <div class="input_item">
                    <input
                      type="text"
                      id="phone"
                      name="phone"
                      placeholder="09012345678"
                    />

                    @error('phone')
                   <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>
      <tr>
        <!-- お問い合わせ種類 -->
        <div class="form">
                <div class="column_area">
                  <div class="column_item must">
                    <span>必須</span>
                  </div>
                  <p class="column">お問い合わせ種類</p>
                </div>

                <div class="input_area_radio">
                  <div class="input_radio">
                    <input
                      type="radio"
                      id="hoge1"
                      name="contact-type"
                      value="1"
                      checked
                    />
                    <label for="hoge1" class="choices">見積もり相談</label>
                  </div>
                  <div class="input_radio">
                    <input
                      type="radio"
                      id="hoge2"
                      name="contact-type"
                      value="2"
                    />
                    <label for="hoge2" class="choices">プロジェクト支援相談</label>
                  </div>
                  <div class="input_radio">
                    <input
                      type="radio"
                      id="hoge3"
                      name="contact-type"
                      value="3"
                    />
                    <label for="hoge3" class="choices"
                      >その他お問い合わせ</label
                    >
                  </div>
                </div>
              </div>
          </tr>
      <tr>
        <!-- お問い合わせ内容 -->
        <div class="form">
                <div class="column_area">
                  <div class="column_item must">
                    <span>必須</span>
                  </div>
                  <label class="column" for="contact_detail"
                    >お問い合わせ内容</label
                  >
                </div>

                <div class="input_area">
                  <div class="input_item">
                    <textarea
                      id="contact_detail"
                      name="contact_detail"
                      class="contact_detail"
                    ></textarea>
                    @error('contact_detail')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>
              
      </tr>
    </table>
    <div class="button-area">
      <button type="button" class="go" onclick="onClick(event)">確認する</button>
    </div>
  </form>
@endsection



