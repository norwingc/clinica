<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show  c-sidebar-minimized" id="sidebar">
	<div class="c-sidebar-brand d-lg-down-none">
		<a href="/" class="c-sidebar-brand-full">
			<img src="/images/logo.png" width="55" alt="Logo" />
		</a>
		<a href="/" class="c-sidebar-brand-minimized">
			<img src="/images/logo.png" width="46" alt="Logo" />
		</a>
	</div>
	<ul class="c-sidebar-nav">
		<li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
			<a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
				<i class="c-sidebar-nav-icon fas fa-search"></i> Busqueda
			</a>
			<ul class="c-sidebar-nav-dropdown-items">
				<li class="c-sidebar-nav-item">
					<div class="c-sidebar-nav-link p-3 py-0">
						<form action="" autocomplete="off" method="POST">
							@csrf
							<div class="input-group">
								<input type="text" name="id_number" class="form-control" placeholder="Numero de Cedula" required>
							</div>
						</form>
					</div>
					<div class="c-sidebar-nav-link px-3 pb-3">
						<form action="" autocomplete="off" method="POST">
							@csrf
							<div class="input-group">
								<input type="text" name="name" class="form-control" placeholder="Nombre" required>
							</div>
						</form>
					</div>
				</li>
			</ul>
		</li>
		<li class="c-sidebar-nav-item">
			<a class="c-sidebar-nav-link" href="/">
				<i class="c-sidebar-nav-icon fas fa-home"></i> Inicio
			</a>
		</li>
		<li class="c-sidebar-nav-item">
			<a class="c-sidebar-nav-link" href="{{ route('paciente.index') }}">
				<i class="c-sidebar-nav-icon fas fa-users"></i> Pacientes
			</a>
		</li>
	</ul>
	<button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>
