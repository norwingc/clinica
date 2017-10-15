<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="/img/avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>Salud Materno Fetal</p>
        </div>
    </div>
    <!-- search form (Optional) -->
    {!! Form::open(['route' => 'paciente.findById', 'class' => 'sidebar-form']) !!}
        <div class="input-group">
            <input type="text" name="id_number" class="form-control cedula" placeholder="Cedula" required>
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>
        </div>
    {!! Form::close() !!}
    <!-- /.search form -->
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="#"><i class="fa fa-home"></i><span>Home</span></a></li>
        <li><a href="#"><i class="fa fa-database"></i> <span>Pacientes</span></a></li>
        <li class="treeview">
            <a href="#"><i class="fa fa-bar-chart"></i> <span>Citas</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="#">Agregar Cita</a></li>
            </ul>
        </li>
    </ul>
    <!-- /.sidebar-menu -->
</section>
