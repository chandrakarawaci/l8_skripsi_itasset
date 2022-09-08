@extends('layouts.template')

@section('sidemenu')
  @include('admin.sidemenu')
@endsection

@section('data-tables')
<link rel="stylesheet" type="text/css" href="{{ asset('modernadmin/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('modernadmin/app-assets/vendors/css/tables/extensions/buttons.dataTables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('modernadmin/app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
@endsection
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-body">
        <!-- HTML5 export buttons table -->
        <section id="html5">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Report Request Asset</h4>
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
                  <div class="card-body card-dashboard">

                      <table class="table table-striped table-bordered dataex-html5-export-print">
                        <thead>
                          <tr>
                            <th>Request Number</th>
                            <th>Username</th>
                            <th>Date</th>
                            <th>Asset Type</th>
                            <th>Serial Number</th>
                            <th>Hostname</th>
                            <th>Location</th>
                            <th>Request Status</th>
                            <th>Remarks</th>          
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>REQAST001</td>
                            <td>chandra2</td>
                            <td>01 August 2022</td>
                            <td>Laptop</td>
                            <td>PC1234</td>
                            <td>10PC1234</td>
                            <td>Medan Imam Bonjol</td>
                            <td>Approve</td>
                            <td>Laptop for new joiner</td>
                          </tr>
                          <tr>
                            <td>REQAST002</td>
                            <td>ayuniws</td>
                            <td>04 August 2022</td>
                            <td>PC Desktop</td>
                            <td>PD1234</td>
                            <td>10PD1234</td>
                            <td>CWJ 33</td>
                            <td>Approve</td>
                            <td>PC Desktop for Audit OJK</td>
                          </tr>
                          <tr>
                            <td>REQAST003</td>
                            <td>fhurqon</td>
                            <td>04 August 2022</td>
                            <td>Laptop</td>
                            <td>PC5678</td>
                            <td>10PC5678</td>
                            <td>Mega Kuningan</td>
                            <td>Approve</td>
                            <td>Laptop backup for waiting repair</td>
                          </tr>
                          <tr>
                            <td>REQAST004</td>
                            <td>rahma</td>
                            <td>05 August 2022</td>
                            <td>Laptop</td>
                            <td>PC2233</td>
                            <td>10PC2233</td>
                            <td>CWJ 31</td>
                            <td>Waiting</td>
                            <td>Laptop for new joiner</td>
                          </tr>
                          <tr>
                            <td>REQAST005</td>
                            <td>yodyy</td>
                            <td>07 August 2022</td>
                            <td>Laptop</td>
                            <td>PC7788</td>
                            <td>10PC7788</td>
                            <td>CWJ 37</td>
                            <td>Waiting</td>
                            <td>Laptop for new joiner</td>
                          </tr>                          
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/ HTML5 export buttons table -->
      </div>
    </div>
  </div>
  @endsection