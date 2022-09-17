@extends('layouts.template')

@section('sidemenu')
  @include('admin.sidemenu')
@endsection

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Edit Maintenance Asset</h3>
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
                    <form class="form">
                      <div class="form-body">
                      <div class="form-group">
                          <label for="companyName">Maintenance Asset ID</label>
                          <input type="text" id="maintenance_asset_id" class="form-control" placeholder="Username"
                          name="maintenance_asset_id" value="" readonly>
                        </div>
                         <div class="form-group">
                          <label for="id_user">Username</label>
                          <input type="text" id="id_user" class="form-control" placeholder="Username"
                          name="id_user">
                        </div>
                        <div class="form-group">
                          <label for="tgl_request_mtn">Date</label>
                          <input type="date" id="tgl_request_mtn" class="form-control" name="tgl_request_mtn" data-toggle="tooltip"
                          data-trigger="hover" data-placement="top" data-title="Date Opened">
                        </div>
                        <div class="form-group">
                              <label for="id_jenis_asset">Asset Type</label>
                              <select id="id_jenis_asset" name="id_jenis_asset" class="form-control">
                                <option value="none" selected="" disabled=""></option>
                                <option value="Laptop">Laptop</option>
                                <option value="PC Desktop">PC Desktop</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="id_asset_location">Location</label>
                              <select id="id_asset_location" name="id_asset_location" class="form-control">
                                <option value="none" selected="" disabled=""></option>
                                <option value="CWJ 31">CWJ 31</option>
                                <option value="CWJ 32">CWJ 32</option>
                                <option value="CWJ 33">CWJ 33</option>
                                <option value="CWJ 34">CWJ 34</option>
                                <option value="Bandung Dago">Bandung Dago</option>
                                <option value="Juanda">Juanda</option>
                                <option value="Medan Imam Bonjol">Medan Imam Bonjol</option>
                                <option value="Surabaya Galaxy">Surabaya Galaxy</option>
                              </select>
                            </div> 
                        <div class="form-group">
                          <label for="id_asset">Hostname</label>
                          <input type="text" id="id_asset" class="form-control" placeholder="Hostname"
                          name="id_asset">
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