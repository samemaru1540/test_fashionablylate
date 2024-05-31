@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')


<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>Content</h2>
  </div>


  <form class="form" action="/contacts/confirm" method="post">
    @csrf

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お名前</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="first_name" placeholder="姓" />
          <input type="text" name="last_name" placeholder="名" />
        </div>
        <div class="form__error">
          @error('first_name')
          {{ $message }}
        @enderror
        </div>
        <div class="form__error">
          @error('last_name')
          {{ $message }}
        @enderror
        </div>
      </div>
    </div>


    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">性別</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text-2">
          <input type="radio" name="gender" placeholder="男性" />男性
          <input type="radio" name="gender" placeholder="女性" />女性
          <input type="radio" name="gender" placeholder="その他" />その他
        </div>
        <div class="form__error">
          @error('gender')
            {{ $message }} 
          @enderror
        </div>
      </div>
    </div>


    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">メールアドレス</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" placeholder="test@example.com" />
        </div>
        <div class="form__error">
          @error('email')
            {{ $message }} 
          @enderror
        </div>
      </div>
    </div>


    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">電話番号</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="tel" name="tel" placeholder="090" />
          -
          <input type="tel" name="tel" placeholder="1234" />
          -
          <input type="tel" name="tel" placeholder="5678" />
        </div>
        <div class="form__error">
          @error('tel')
            {{ $message }} 
          @enderror
        </div>
      </div>
    </div>

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">住所</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="address" placeholder="例:東京都渋谷区1-2-3" />
        </div>
        <div class="form__error">
          @error('address')
            {{ $message }} 
          @enderror
        </div>
      </div>
    </div>

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">建物名</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="building" placeholder="恵比寿マンション" />
        </div>
        <div class="form__error">
          @error('building')
            {{ $message }} 
          @enderror
        </div>
      </div>
    </div>

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お問い合わせの種類</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="select" name="inquiry" placeholder=/>
        </div>
        <div class="form__error">
          @error('inquiry')
            {{ $message }} 
          @enderror
        </div>
      </div>
    </div>


    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お問い合わせ内容</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--textarea">
          <textarea name="detail" placeholder="お問い合わせ内容をご記載下さい"></textarea>
        </div>
        <div class="form__error">
          @error('detail')
            {{ $message }} 
          @enderror
        </div>
      </div>
    </div>


    <div class="form__button">
      <button class="form__button-submit" type="submit">確認画面</button>
    </div>
  </form>
</div>
@endsection