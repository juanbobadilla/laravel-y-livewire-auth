<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Comment;

class Comentarios extends Component
{
	public $nuevoComentario;
	public $usuarioComentario;
	//public $comentario;

	public function mount(){

		//$initialComment = Comment::all();
		//$initialComment = Comment::latest()->get();
		//$this->comentario = $initialComment;
	}

    public function render()
    {
        return view('livewire.comentarios',[
        	'comentario' =>Comment::latest()->paginate(10)
        ]);
    }

	public function agregarComentarios(){

		$this->validate([
			'usuarioComentario'=>'required',
			'nuevoComentario'=>'required'
		]);

		$createComment = Comment::create([
			'nameComment'=> $this->usuarioComentario,
			'body'=> $this->nuevoComentario,
		]);

		//$this->comentario->push($createComment);
		//$this->comentario->prepend($createComment);

		session()->flash('message', 'Agregado Correctamente.');

		return redirect()->to('/');

		$this->clean();
	}

	public function clean(){
		$this->nuevoComentario ="";
		$this->usuarioComentario="";
	}

	public function remove($id){
		$comment = Comment::FindOrFail($id);
		$comment->delete();
		//$this->comentario = $this->comentario->where('id','!=',$id);
		//$this->mount();
		session()->flash('message', 'Eliminado Correctamente.');
		return redirect()->to('/');
	}

}
