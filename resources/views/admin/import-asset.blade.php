@extends('layouts.template')

@section('sidemenu')
  @include('admin.sidemenu')
@endsection

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Import Asset</h3>
          <div class="row breadcrumbs-top">
          </div>
        </div>
      </div>
      <div class="content-body">
        <!-- Basic form layout section start -->
        <section id="basic-form-layouts">
          <div class="row match-height">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-form">Impor Asset Form</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <div class="card-text">

                    <form method="POST" action="{{ route('admin.import') }}" class="form">@csrf
                      <div class="form-body">
                        <div class="form-group">
                          <label>Select File Asset (Excell Format)</label>
                          <label id="projectinput7" class="file center-block">
                            <input type="file" id="file">
                            <span class="file-custom"></span>
                          </label>
                        </div>
                      </div>
                      <div class="form-actions right">
                        <a href="{{ URL::previous() }}" class="btn btn-danger btn-min-width">Cancel</a>
                        <button type="submit" class="btn btn-success btn-min-width">
                          Import
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </section>
        <!-- // Basic form layout section end -->
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
@endsection
