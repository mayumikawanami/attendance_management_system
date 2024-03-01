@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css')}}">
@endsection

@section('link')
<ul class="header-nav">
    <li class="header-nav__item">
        <a class="header-nav__link" href="/">ホーム</a>
        <a class="header-nav__link" href="/attendance">日付一覧</a>
    </li>
    <li class="header-nav__item">
        <form action="/logout" method="post">
            @csrf
            <input class="header-nav__link" type="submit" value="ログアウト">
        </form>
    </li>
</ul>
@endsection

@section('content')
<div class="stamp-form">
    @if(auth()->check())
    <h2 class="stamp-form__heading content__heading">{{ auth()->user()->name }}さんお疲れ様です！</h2>
    @else
    <h2 class="stamp-form__heading content__heading">さんお疲れ様です！</h2>
    @endif
    <div class="stamp-form__container">
        <button id="startWorkButton">勤務開始</button>
        <button id="endWorkButton">勤務終了</button>
        <button id="startBreakButton">休憩開始</button>
        <button id="endBreakButton">休憩終了</button>
    </div>
</div>
@endsection