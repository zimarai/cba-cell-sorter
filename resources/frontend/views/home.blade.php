@extends('layouts.main', [$body_class='index-page'])

@section('page')
<div class="page-header header-filter clear-filter" data-parallax="true"
  style="background-image: url('{{ asset('img/geo-bg.jpg') }}');">
  <div class="container">
    <div class="row">
      <div class="col-md-10 ml-auto mr-auto">
        <div class="brand">
          <h1>Cell Sorter</h1>
          <h3>CBA Usach pone a disposición Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</h3>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">

    <div class="col-md-4 mx-auto">
      <div class="card">
        <div class="card-body">
           <div class="icon icon-info">
            <i class="material-icons">chat</i>
          </div>
          <h4 class="info-title">Free Chat</h4>
          <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mx-auto">
      <div class="card">
        <div class="card-body">
          <div class="icon icon-danger">
            <i class="material-icons">fingerprint</i>
          </div>
          <h4 class="info-title">Fingerprint</h4>
          <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mx-auto">
      <div class="card">
        <div class="card-body">
          <div class="icon icon-success">
            <i class="material-icons">verified_user</i>
          </div>
          <h4 class="info-title">Verified Users</h4>
          <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="main">
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mx-auto">

          <img src="{{ asset('img/cba-logo.png') }}" class="img-fluid">
        </div>
        <div class="col-md-8 mx-auto">
          <h3>Agenda horas de uso para utilizar el equipo Cell Sorter</h3>
          <h4>Existen dos jornadas, en la mañana y a media tarde. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</h4>
          <a href="#" class="btn btn-primary btn-lg">
            <i class="fa fa-clock"></i> Agendar jornada
          </a>
        </div>
      </div>
      <br><br>
    </div>
  </div>

  <div class="section cd-section" id="javascriptComponents">
    <div class="container">
      <div class="title">
        <h2>Javascript components</h2>
      </div>
      <!--                 modals -->
      <div class="row" id="modals">
        <div class="col-md-6">
          <div class="title">
            <h3>Modal</h3>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#myModal">
                <i class="material-icons">library_books</i>
                Classic
              </button>
            </div>
          </div>
          <div class="col-md-12">
            <div class="title">
              <h3>Datetime Picker</h3>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="label-control">Datetime Picker</label>
                  <input type="text" class="form-control datetimepicker" value="10/05/2016">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="title">
            <h3>Popovers</h3>
          </div>
          <button type="button" class="btn" data-toggle="popover" data-placement="left" title="Popover on left"
            data-content="Here will be some very useful information about his popover. Here will be some very useful information about his popover."
            data-container="body">On left</button>
          <button type="button" class="btn" data-toggle="popover" data-placement="top" title="Popover on top"
            data-content="Here will be some very useful information about his popover." data-container="body">On
            top</button>
          <button type="button" class="btn" data-toggle="popover" data-placement="bottom" title="Popover on bottom"
            data-content="Here will be some very useful information about his popover." data-container="body">On
            bottom</button>
          <button type="button" class="btn" data-toggle="popover" data-placement="right" title="Popover on right"
            data-content="Here will be some very useful information about his popover." data-container="body">On
            right</button>
          <br><br>
          <div class="title">
            <h3>Tooltips</h3>
          </div>
          <button type="button" class="btn" data-toggle="tooltip" data-placement="left" title="Tooltip on left"
            data-container="body">On left</button>
          <button type="button" class="btn" data-toggle="tooltip" data-placement="top" title="Tooltip on top"
            data-container="body">On top</button>
          <button type="button" class="btn" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom"
            data-container="body">On bottom</button>
          <button type="button" class="btn" data-toggle="tooltip" data-placement="right" title="Tooltip on right"
            data-container="body">On right</button>
        </div>
      </div>
      <!--                 end modals	             -->
      <div class="title">
        <h3>Carousel</h3>
      </div>
    </div>
  </div>

</div>
 <!-- Classic Modal -->
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body">
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link">Nice Button</button>
          <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('custom_footer')

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      materialKit.initFormExtendedDatetimepickers();
    });

    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>

@endsection