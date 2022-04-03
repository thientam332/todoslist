<form action="{{route('todos.edit',$temp['id']) }}" method="POST">
                                            @csrf
                                            @method('GET')
                                            <input type="hidden" name="id" value="{{$temp->id}}" />
                                            <label class="customcheckbox m-b-20"><input type="checkbox" onclick="this.form.submit()"
                                            <?php 
                                            if ($temp->completed==TRUE):
                                                echo 'checked';
                                            
                                            endif;
                                            ?>
                                            > <span
                                            class="checkmark"></span> </label> </th>
                                        </button>
                                        </form>
                                        
public function edit($id)
    {
        $todo=TodosList::find($id);
        $todo->completed=!$todo->completed;
        $todo->save();
        if($todo->completed==True)
        {
            return Redirect::back()->withErrors(['mess' => 'Completed','name' => $todo->name]);
        }
        return Redirect::back()->withErrors(['mess' => 'Working','name' => $todo->name]);
    }
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>
