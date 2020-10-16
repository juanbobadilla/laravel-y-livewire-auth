<div>
	<h1 class="text-center text-dark my-5">Registro</h1>

    <form wire:submit.prevent="submit">
	  <div class="form-group">
	    <label>Name</label>
	    <input type="text" class="form-control" wire:model="form.name">
		@error('form.name') <span class="text-warning text-xl-left">{{ $message }}</span> @enderror

	  </div>
	  <div class="form-group">
	    <label>Email</label>
	    <input type="email" class="form-control" wire:model="form.email" >
		@error('form.email') <span class="text-warning text-xl-left">{{ $message }}</span> @enderror

	  </div>
	  <div class="form-group">
	    <label>password</label>
	    <input type="password" class="form-control" wire:model="form.password">
		@error('form.password') <span class="text-warning text-xl-left">{{ $message }}</span> @enderror

	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
