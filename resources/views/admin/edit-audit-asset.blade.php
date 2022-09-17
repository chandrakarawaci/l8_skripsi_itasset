@extends('layouts.template')

@section('sidemenu')
  @include('admin.sidemenu')
@endsection

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Edit Audit Asset</h3>
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
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="id_auditor_lead">Auditor Name</label>
                              <input type="text" id="id_auditor_lead" class="form-control" placeholder="Auditor Name"
                              name="id_auditor_lead">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="tgl_audit">Date</label>
                              <input type="date" id="tgl_audit" class="form-control" name="tgl_audit" data-toggle="tooltip"
                              data-trigger="hover" data-placement="top" data-title="Date Opened">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="audit_no">Audit Number</label>
                              <input type="text" id="audit_no" class="form-control" placeholder="Audit Number" name="audit_no" value="{{ $audit_code }}" readonly>
                            </div>
                          </div>
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
                        </div>
                        <h4 class="form-section"></i></h4>                          
                          <div class="form-group">
                              <label for="id_vendor">Auditor</label>
                              <input type="text" id="id_vendor" class="form-control" placeholder="Vendor 1 (username)"
                              name="id_vendor" readonly>
                          </div>
                            <div class="form-group">
                              <label for="id_asset">Serial Number</label>
                              <input type="text" id="id_asset" class="form-control" placeholder="Serial Number"
                              name="id_asset">
                            </div>                                                 
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="id_asset">Asset Type</label>
                              <input type="text" id="id_asset" class="form-control" placeholder="Asset Type"
                              name="id_asset" readonly>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="id_asset">Model</label>
                              <input type="text" id="id_asset" class="form-control" placeholder="Model" name="id_asset" readonly>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                              <label for="condition">Condition</label>
                              <select id="condition" name="condition" class="form-control">
                                <option value="none" selected="" disabled=""></option>
                                <option value="CWJ 31">Active-Good</option>
                                <option value="CWJ 32">Inactive-Broken</option>
                                <option value="CWJ 33">Inactive-Keep</option>
                              </select>
                            </div>
                        <div class="form-group">
                          <label for="projectinput8">Remarks</label>
                          <textarea id="projectinput8" rows="5" class="form-control" name="comment" placeholder="Remarks Audit"></textarea>
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