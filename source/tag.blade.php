@extends('_layouts.master')

@section('title', '分類一覧')

@section('content')
    <h1>分類一覧</h1>
 <hr style="border-color: silver"/>
<ul>
<li><a href="/tags/addons" >Addons</a></li>
<li><a href="/tags/shf" >SHF</a></li>
<li><a href="/tags/csm" >CSM</a></li>
<li><a href="/tags/ur" >UR</a></li>
 <br>
<hr style="border-color: silver"/>
<h2><li><a href="/tags/kamenrider" >仮面ライダーKamenRider</a></li><h2>
  <li><a href="/tags/geats" >仮面ライダーギーツGeats</a></li>
  <li><a href="/tags/revice" > 仮面ライダーリバイスRevice</a></li>
  <li><a href="/tags/saber" > 仮面ライダーセイバーsaber</a></li>
<li><a href="/tags/zeroone" > 仮面ライダーゼロワンZeroOne</a></li>
 <li><a href="/tags/zio" > 仮面ライダージオウZio</a></li>
 <li><a href="/tags/build" >仮面ライダービルドBuild</a></li>
 <li><a href="/tags/exaid" >仮面ライダーエグゼイドExaid</a></li>
<br>
<hr style="border-color: silver"/> 
<h2><li><a href="/tags/ultraman" >ウルトラマンUltraman</a></li><h2>
<li><a href="/tags/decker" >ウルトラマンデッカーDecker</a></li>
 <li><a href="/tags/trigger" >ウルトラマントリガーTrigger</a></li>
<li><a href="/list" >商品一覧</a></li>
</ul>
@endsection
