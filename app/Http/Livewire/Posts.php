<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Validator;

class Posts extends Component
{
	public $posts, $title, $description, $post_id;
    public $updateMode = false;
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->posts = Post::all();
        return view('livewire.posts');
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->title = '';
        $this->description = '';
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $validatedDate = $this->validate([
            'title' 		=> 'required',
            'description' 	=> 'required',
        ],

    	[
    		'title.required'	=> 'Judul wajib terisi',
    		'description.required'	=> 'Pesan wajib terisi',
    	]);
  
        Post::create($validatedDate);
  
        session()->flash('message', 'Post Berhasil Di Buat');
  
        $this->resetInputFields();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $this->post_id = $id;
        $this->title = $post->title;
        $this->description = $post->description;
        $this->updateMode = true;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function update()
    {
        $validatedDate = $this->validate([
            'title' => 'required',
            'description' => 'required',
        ],
    	[
    		'title.required'	=> 'Judul wajib terisi',
    		'description.required'	=> 'Pesan wajib terisi',
    	]);
  
        $post = Post::find($this->post_id);
        $post->update([
            'title' => $this->title,
            'description' => $this->description,
        ]);
  
        $this->updateMode = false;
  
        session()->flash('message', 'Post Berhasil Di Perbarui');
        $this->resetInputFields();
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Post::find($id)->delete();
        session()->flash('message', 'Post Berhasil Dihapus.');
    }
}
