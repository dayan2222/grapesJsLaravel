@extends('welcome')

@section('bodyTag')

<input type="text" value="{{$viewWebPages[0]->gjs_html}}" id="html">
<input type="text" value="{{$viewWebPages[0]->gjs_css}}" id="css">
<input type="text" value="{{$viewWebPages[0]->gjs_styles}}" id="styles">
<input type="text" value="{{$viewWebPages[0]->gjs_components}}" id="components">
<input type="text" value="{{$viewWebPages[0]->gjs_assets}}" id="assets">

  <script>
      
      window.localStorage.clear();
      var html = document.getElementById('html').value;
      var css = document.getElementById('css').value;  
      var styles = document.getElementById('styles').value;  
      var assets = document.getElementById('assets').value;  
      var components = document.getElementById('components').value;  
    localStorage.setItem('gjs-html', html);

    localStorage.setItem('gjs-css', css);
    localStorage.setItem('gjs-components', components);
    localStorage.setItem('gjs-styles', styles);
    localStorage.setItem('gjs-assets', assets);

    
    

  </script>
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

      <div class="blocks-container"></div>


      <div class="layers-container"></div>
      <div class="styles-container"></div>
      <div class="traits-container"></div>
      <div class="blocks-container"></div>

    </div>
  </div>
  <div id="blocks"></div>


@endsection