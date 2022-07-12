@extends('layouts.app')

@section('content')
<div class="container">
        <div id="wrap-draw-area">
          <div id="cursor" class="hideDotCursor"></div>
          <button id="black" class="color selected draw">ペン</button>
          <!--<button id="darkgrey" class="color draw">Dark</button>-->
          <button id="grey" class="color draw">灰色</button>
          <button id="lightgrey" class="color draw">薄灰色</button>
          <button id="white" class="color draw">白色</button>
          <button id="red" class="color draw">赤色</button>
          <button id="orange" class="color draw">橙色</button>
          <button id="blue" class="color draw">青色</button>
          <button id="eraser" class="color draw" value="40">消しゴム</button>
          <button id="clear" class="draw">全消去</button>
          <button id="download" class="draw">ダウンロード</button>
          <br>
          <div id="wrap-edit-buttons">
            <button id="editMode" class="draw">オブジェクト化</button>
            <button id="delete" class="draw" disabled>オブジェクト削除</button>
            <button id="undo" class="draw" disabled>戻る</button>
            <button id="redo" class="draw" disabled>進む</button>
            <br>
          </div>

          <div class="radio-wrapper">
            <label class="draw"><input type="radio" id="5px" class="selectLineWidth draw" name="lineWidth" value="5" checked>5px</label>
            <label class="draw"><input type="radio" id="10px" class="selectLineWidth draw" name="lineWidth" value="10">10px</label>
            <label class="draw"><input type="radio" id="20px" class="selectLineWidth draw" name="lineWidth" value="20">20px</label>
            <label class="draw"><input type="radio" id="40px" class="selectLineWidth draw" name="lineWidth" value="40">40px</label>
          </div>
          <br>

          <div id="canvas-container">
            <canvas id="canvas"></canvas>
          </div>
        </div>


  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/4.2.0/fabric.min.js"></script>
<script src={{asset('js/draw.js')}}></script>
@endsection