@extends('_layouts.master')

@section('title', '分類一覧')

@section('content')
    <h1>分類一覧</h1>
    <hr style="border-color: silver"/>
 <ul>
 <li><a href="/tags/kamenrider" >仮面ライダー</a></li>
 <li><a href="/tags/ultraman" >ウルトラマン</a></li>
  <li><a href="/tags/geats" >仮面ライダーギーツ</a></li>
  <li><a href="/tags/revice" > 仮面ライダーリバイス</a></li>
  <li><a href="/tags/decker" >ウルトラマンデッカー</a></li>
 <li><a href="/tags/trigger" >ウルトラマントリガー</a></li>
  <li><a href="/list" >商品一覧</a></li>
    </ul>
@endsection
