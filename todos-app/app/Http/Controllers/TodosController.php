<?php

namespace App\Http\Controllers;

use App\Models\TodosList;
use Illuminate\Http\Request;
use App\Providers\HelperProvider;
class TodosController extends Controller
{
    public function index(Request $request)
    {
        $temp=TodosList::all();
        return view('HomePage')->with('todo', $temp);
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required|min:6|max:300'
        ]);

        $data = $request->all();
        $data_info = HelperProvider::mb_trim($data['name']);
        $todo_info = str_replace(' ', '&nbsp;', $data_info);
        $todo_info=strip_tags($todo_info);
        $todo = new TodosList();
        $todo->name = $todo_info;
        $todo->save();
        return redirect('/');
    }

    public function delete(Request $request)
    {
        $todoid=$request->all()['id'];
        $todo=TodosList::find($todoid);
        $todo->delete();
        return redirect('/');
    }

    public function convert_status(Request $request)
    {
        if(isset($request->all()['id1']))
        {
            $todoid=$request->all()['id1'];
            $todo=TodosList::find($todoid);
            $todo->completed+=1;
        }
        else
        {
            $todoid=$request->all()['id'];
            $todo=TodosList::find($todoid);
            $todo->completed-=1;
        }
        $todo->save();
        return redirect('/');
    }
}
