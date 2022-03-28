@extends('welcome')

@section('bodyTag')

  <script type="text/javascript">
    $(window).on('load',function(){
        $('#saveName').modal('show');
    });
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
      {{-- <div class="blocks-container"></div> --}}

    </div>
  </div>
  <input type="hidden" name="webpageID" id="webpageID">
  <div id="blocks"></div>

<!-- Modal -->
<div class="modal fade" id="saveName" tabindex="-1" aria-labelledby="saveNameLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="saveNameLabel">Web Page Name</h5>

      </div>
      <div class="modal-body">
        <form method="post" id="" >
           @csrf
          <div class="form-group">
            <label for="webPageName">Web Page Name</label>
            <input type="text" class="form-control" id="webPageName" placeholder="Enter WebPage Name">
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" id="btnSaveName" class="btn btn-primary">Save Name</button>
      </div>
    </div>
  </div>
</div>


<script>
  $(document).ready(function(){

    $("#btnSaveName").click(function (e) { 
      e.preventDefault();

      $.ajax({
        type: "post",
        url: "/api/getName",
        data: {
          "webPageName": $('#webPageName').val()
        },
        success: function (response) {
          console.log(response);
          if(response.status == 'success'){
            $('#saveName').modal('hide');
            $('#webpageID').val(response.webPageID);
          }
        },
        error: function (error) {
          console.log(error);
          window.location.href = '/';
        }

      });       
    });
     

  });

</script>

@endsection