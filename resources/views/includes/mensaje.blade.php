@if (session("mensaje"))
<div class="alert alert-success alert-dismissible" data-auto-dismiss="2000">     {{-- (para el ejemplo tardara 3 segundos)cuando anexamos este parametro data-auto-dismiss="3000" le estamos ordenando el tiempo de espera --}}
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">*</button>
    <h4><i class="icon fa fa-check"></i>Mensaje sistema Biblioteca1</h4>
        <ul>
            <li>{{session("mensaje")}}</li>
        </ul>
    </div>
@endif