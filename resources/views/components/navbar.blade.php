<li class="{{ request()->is('dashboard')? 'active':''}}">
    <a href="{{ url ('dasboard')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
</li>
<h3 class="menu-title">Menu</h3><!-- /.menu-title -->
<li class="{{ request()->is('data-pasien')? 'active':''}}">
    <a href="{{ url ('data-pasien')}}"> <i class="menu-icon fa fa-user-plus" aria-hidden="true"></i>Data Pasien </a>
</li>
<li class="{{ request()->is('data-obat')? 'active':''}}">
    <a href="{{ url ('data-obat')}}"> <i class="menu-icon fa fa-medkit" aria-hidden="true"></i>Data Obat </a>
</li>
<li class="{{ request()->is('data-dokter')? 'active':''}}">
  <a href="{{ url ('data-dokter')}}"> <i class="menu-icon fa fa-user-md" aria-hidden="true"></i>Data Dokter </a>
</li>
<li class="{{ request()->is('data-rekamedis')? 'active':''}}">
<a href="{{ url ('data-rekamedis')}}"> <i class="menu-icon fa fa-address-card" aria-hidden="true"></i>Rekaman Medis </a>
</li>