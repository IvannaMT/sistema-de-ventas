<div class="modal fade modal-slide-in-rigth" aria-hidden="true" role="dialog"
tabindex="-1" id="modal-delete-{{$cat->idcategoria}}">
{{ Form::open(['route' => ['categoria.destroy', $cat->idcategoria], 'method' => 'delete']) }}
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"
            aria-label="close">
            <span aria-hidden="true">x</span>        
        </button>
        <h4 class="modal-tittle">Eliminar categoria</h4>
        </div>
        <div class="modal-body">
            <p>Confirme si desea Elimnar la categoria</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
    </div>
</div>
 {{Form::close() }}
</div>