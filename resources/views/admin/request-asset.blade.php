@extends('layouts.template')

@section('sidemenu')
  @include('admin.sidemenu')
@endsection

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Request Asset Form</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
            </div>
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
                  <h4 class="card-title" id="basic-layout-form">Please fill below :</h4>
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
{{--                       <p>This is the most basic and default form having form sections.
                        To add form section use <code>.form-section</code> class
                        with any heading tags. This form has the buttons on the bottom
                        left corner which is the default position.</p>
                    </div> --}}
                    <form method="POST" action="{{ route('req_asset.store') }}" class="form" novalidate>@csrf
                    <form class="form">
                      <div class="form-body">
                      <div class="form-group">
                          <label for="companyName">Request Asset ID</label>
                          <input type="text" id="kode_request" class="form-control" placeholder="Request Asset ID"
                          name="kode_request" value="{{ $request_code }}" readonly>
                        </div>
                         <div class="form-group">
                          <label for="user_name">Username</label>
                          <input type="text" id="user_name" class="form-control" placeholder="Username"
                          name="user_name">
                        </div>
                        <div class="form-group">
                          <label for="tgl_request">Date</label>
                          <input type="date" id="tgl_request" class="form-control" name="tgl_request" data-toggle="tooltip"
                          data-trigger="hover" data-placement="top" data-title="Date Opened">
                        </div>
                        <div class="form-group">
                              <label for="id_jenis_asset">Asset Type</label>
                              <select id="id_jenis_asset" name="id_jenis_asset" class="form-control">
                                @foreach($jenis as $data)
                                <option value="{{$data->id}}">{{$data->jenis}}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="id_asset_location">Location</label>
                              <select id="id_asset_location" name="id_asset_location" class="form-control">
                                @foreach($location as $data)
                                <option value="{{$data->id}}">{{$data->location_name}}</option>
                                @endforeach
                              </select>
                            </div>
                        <div class="form-group">
                          <label for="keterangan">Remarks</label>
                          <textarea id="keterangan" rows="5" class="form-control" name="keterangan" placeholder="Remarks"></textarea>
                        </div>
                      </div>
                      <div class="form-actions right">
                        <button type="button" class="btn btn-danger btn-min-width">
                         Cancel
                        </button>
                        <button type="submit" class="btn btn-success btn-min-width">
                          Save
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
