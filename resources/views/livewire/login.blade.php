<div>
	<h1 class="text-center text-dark my-5">Login</h1>
	<form wire:submit.prevent="submit">
	<div>
		@if(session()->has('message'))
	        <div class="alert alert-warning rounded">
	           {{ session('message') }}
	        </div>
	    @elseif(session()->has('messages'))
			<div class="alert alert-danger rounded">
	           {{ session('messages') }}
	        </div>
		@endif
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
