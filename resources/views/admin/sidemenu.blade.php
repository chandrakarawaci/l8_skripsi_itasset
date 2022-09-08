<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true">
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class=" navigation-header">
        <span data-i18n="nav.category.layouts">Admin Menu</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
        data-placement="right" data-original-title="Layouts"></i>
      </li>
      <li class=" nav-item"><a href="#"><i class="la la-users"></i><span class="menu-title" data-i18n="nav.dash.main">User Management</span></a>
        <ul class="menu-content">
          <li class="menu-item"><a class="menu-item" href="{{ route('admin.dashboard') }}" data-i18n="nav.dash.ecommerce">Dasboard</a>
          </li>
          <li class="menu-item"><a class="menu-item" href="{{ route('pengguna.index') }}" data-i18n="nav.dash.ecommerce">Users</a>
          </li>
          <li><a class="menu-item" href="{{ route('pengguna.create') }}" data-i18n="nav.dash.crypto">Add User</a>
          </li>
        </ul>
      </li>
      <li class=" nav-item"><a href="#"><i class="la la-database"></i><span class="menu-title" data-i18n="nav.dash.main">Asset</span></a>
        <ul class="menu-content">
          <li class="menu-item"><a class="menu-item" href="{{ route('asset.create') }}" data-i18n="nav.dash.ecommerce">Register Asset</a>
          </li>
          <li><a class="menu-item" href="{{ route('admin.import-asset-form') }}" data-i18n="nav.dash.crypto">Import Asset</a>
          </li>
          <li><a class="menu-item" href="{{ route('admin.asset-report') }}" data-i18n="nav.dash.sales">Report Asset</a>
          </li>
        </ul>
      </li>
      <li class=" nav-item"><a href="#"><i class="la la-sign-in"></i><span class="menu-title" data-i18n="nav.dash.main">Request</span></a>
        <ul class="menu-content">
          <li class="menu-item"><a class="menu-item" href="request-asset" data-i18n="nav.dash.ecommerce">Request Asset</a>
          </li>
          <li><a class="menu-item" href="report-request" data-i18n="nav.dash.crypto">Report Request</a>
          </li>
          </ul>
      </li>
     <li class=" nav-item"><a href="#"><i class="la la-retweet"></i><span class="menu-title" data-i18n="nav.dash.main">Return</span></a>
        <ul class="menu-content">
          <li class="menu-item"><a class="menu-item" href="return-asset" data-i18n="nav.dash.ecommerce">Return Asset</a>
          </li>
          <li><a class="menu-item" href="report-return" data-i18n="nav.dash.crypto">Report Return</a>
          </li>
          </ul>
      </li>
      <li class=" nav-item"><a href="#"><i class="la la-wrench"></i><span class="menu-title" data-i18n="nav.dash.main">Maintenance</span></a>
        <ul class="menu-content">
          <li class="menu-item"><a class="menu-item" href="request-maintenance" data-i18n="nav.dash.ecommerce">Request Maintenance</a>
          </li>
          <li><a class="menu-item" href="report-maintenance" data-i18n="nav.dash.crypto">Report Maintenance</a>
          </li>
          </ul>
      </li>
      <li class="nav-item"><a href="#"><i class="la la-search"></i><span class="menu-title" data-i18n="nav.dash.main">Audit</span></a>
        <ul class="menu-content">
          <li class="menu-item"><a class="menu-item" href="audit-asset" data-i18n="nav.dash.ecommerce">Audit Asset</a>
          </li>
          <li><a class="menu-item" href="report-audit" data-i18n="nav.dash.crypto">Report Audit</a>
          </li>
        </ul>
        <li class="menu-item"><a href="{{ route('logout') }}"><i class="la la-power-off"></i><span class="menu-title" data-i18n="nav.scrumboard.main">Logout</span></a>
      </li>
      </li>

    </ul>
  </div>
</div>
