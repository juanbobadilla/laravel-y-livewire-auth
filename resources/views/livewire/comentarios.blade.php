<div class="flex justify-content-center container">
    <div>
            <h1 class="my-10 text-3x1">Comentarios</h1>
        <!-- valido las alertas -->
        <div>
		        @if (session()->has('message'))
		            <div class="alert alert-success rounded">
		                {{ session('message') }}
		            </div>
            @elseif(session()->has('messages'))
                <div class="alert alert-warning rounded">
                    {{ session('messages') }}
                </div>
		        @endif
    		</div>
			
			@error('usuarioComentario') <span class="text-warning text-xl-left">{{ $message }}</span> @enderror

			</br>

			 @error('nuevoComentario') <span class="text-warning text-xl-left">{{ $message }}</span> @enderror

            <form class="mb-3" wire:submit.prevent="agregarComentarios">
            	<div class="form-group">
	            	<input type="text" class="form-control font-weight-bold" placeholder="Usuario" aria-label="Recipient's username" aria-describedby="button-addon2" wire:model.lazy="usuarioComentario">
	            </div>
				<div class="form-group">
                  <input type="text" class="form-control font-weight-bold" placeholder="Que estas pensando ?" aria-label="Recipient's username" aria-describedby="button-addon2" 
                  wire:model.lazy="nuevoComentario">
                  </div>

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-outline-secondary" type="button" id="button-addon2">
                    Agregar
                	</button>
                  </div>
            </form>

			@foreach($comentario as $comentarios)

            <div class="card text-left mb-3">
              <div class="card-header font-weight-bold">
                {{ $comentarios->nameComment }}

                <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                wire:click="remove({{ $comentarios->id }})">
    				<span aria-hidden="true">&times;</span>
  				</button>
              </div>

              <div class="card-body">
                <p class="card-text">{{ $comentarios->body }}</p>
              </div>
              <div class="card-footer text-muted font-weight-bold">
                {{ $comentarios->created_at->diffForHumans() }}
              </div>

            </div>
            @endforeach
			
			 <div class="d-flex justify-content-center fixed-bottom table-responsive">
          <div class="ml-5">
              {{ $comentario->withQueryString()->links() }}
          </div>
			</div>
            
    </div>
</div>

