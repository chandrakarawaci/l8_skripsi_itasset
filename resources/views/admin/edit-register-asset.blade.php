@extends('layouts.template')

@section('sidemenu')
  @include('admin.sidemenu')
@endsection

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Edit Master Asset Form</h3>
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
                  <h4 class="card-title" id="basic-layout-form">Asset Info</h4>
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
                    <form method="POST" action="{{ route('asset.update', $asset->id) }}" class="form" novalidate>@csrf
                        @method('PUT')
                      <div class="form-body">
                        <div class="form-group">
                          <label for="companyName">Asset ID</label>
                          <input type="text" id="kode_asset" class="form-control" placeholder="Asset ID"
                          name="kode_asset">
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput1">Hostname</label>
                              <input type="text" id="host_name" class="form-control" placeholder="Hostname"
                              name="host_name">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput2">Serial Number</label>
                              <input type="text" id="serial_number" class="form-control" placeholder="Serial Number"
                              name="serial_number">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="id_jenis_asset">Asset Type</label>
                              <select id="id_jenis_asset" name="id_jenis_asset" class="form-control">
                                <option value="none" selected="" disabled=""></option>
                                <option value="Laptop">Laptop</option>
                                <option value="PC Desktop">PC Desktop</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput4">Model</label>
                              <input type="text" id="model" class="form-control" placeholder="Model" name="model">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput3">PO Number</label>
                              <input type="text" id="no_po" class="form-control" placeholder="PO Number" name="no_po">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="companyName">PO Date</label>
                              <input type="date" id="po_date" class="form-control" name="po_date" data-toggle="tooltip"
                              data-trigger="hover" data-placement="top" data-title="Date Opened">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput3">Requestor Name</label>
                              <input type="text" id="requestor" class="form-control" placeholder="Requestor Name" name="requestor">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput4">User Name</label>
                              <input type="text" id="user_name" class="form-control" placeholder="User Name" name="user_name">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="dept">Department</label>
                              <select id="dept" name="dept" class="form-control">
                                <option value="none" selected="" disabled=""></option>
                                <option value="HR">Human Resource</option>
                                <option value="Finance">Finance</option>
                                <option value="IBG">IBG</option>
                                <option value="CBG">CBG</option>
                                <option value="RMG">RMG</option>
                                <option value="T&O">T&O</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="division">Division</label>
                              <select id="division" name="division" class="form-control">
                                  <option value="none" selected="" disabled=""></option>
                                  <option value="HRIS">HRIS</option>
                                  <option value="Tax">Tax</option>
                                  <option value="CBG Channel Opas">CBG Channel Opas</option>
                                  <option value="IT Infra">IT Infrastructure</option>
                                  <option value="IT Apps">IT Applications</option>
                                  <option value="L&D">Learning & Development</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
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
                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                              <label for="id_asset_status">Asset Status</label>
                              <select id="id_asset_status" name="id_asset_status" class="form-control">
                                <option value="none" selected="" disabled=""></option>
                                <option value="Active">Active</option>
                                <option value="Available">Available</option>
                                <option value="Maintenance">Maintenance</option>
                                <option value="Broken">Broken</option>
                                <option value="Decom">Decom</option>
                                <option value="Active-Standalone">Active-Standalone</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Select File</label>
                          <label id="projectinput7" class="file center-block">
                            <input type="file" id="file">
                            <span class="file-custom"></span>
                          </label>
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