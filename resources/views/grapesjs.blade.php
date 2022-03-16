@extends('welcome')

@section('bodyTag')

  <div class="panel__top">
    <div class="panel__basic-actions"></div>
    <div class="panel__devices"></div>
    <div class="panel__switcher"></div>
  </div>
  <div class="editor-row">
    <div class="editor-canvas">
      <div id="gjs"></div>
    </div>
    <div class="panel__right">
      <div class="layers-container"></div>
      <div class="styles-container"></div>
      <div class="traits-container"></div>
      <div class="blocks-container"></div>

    </div>
  </div>
  <div id="blocks"></div>

@endsection