@extends('layouts')


@section('conten')
    <div>
        @if($errors->any())
            <div>
                @foreach($errors->all() as $error)
                    {{$error}}
                @endforeach
            </div>
        @endif
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title m-b-0">
                            <form action="{{asset('/store')}}" method="POST">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="name" placeholder="Input Todos" required autocomplete="off" />
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                  </div>
                            </form>
                        </h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Completed</th>
                                    <th scope="col">Todos Name</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="customtable">
                                @foreach($todo as $temp)
                                <tr>
                                    <th>
                                        <form action="/convert_status" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$temp->id}}" />
                                            <label class="customcheckbox m-b-20"><input type="checkbox" name='id1' value="{{$temp->id}}" onclick="this.form.submit()"
                                            <?php 
                                            if ($temp->completed==TRUE):
                                                echo 'checked';
                                            
                                            endif;
                                            ?>
                                            > <span
                                            class="checkmark"></span> </label> </th>
                                        </button>
                                        </form> 
                                        <!-- <label class="customcheckbox m-b-20"> <input type="checkbox" id="{{$temp->id}}"
                                    
                                    > <span
                          class="checkmark"></span> </label> </th> -->
                                    <th scope="col">{!! $temp->name !!} </th>
                                    <th scope="col"><form action="/delete" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$temp->id}}" />
                                        <button class=btn btn-danger my-2>X</button>
                                    </form></th>
                                    <!-- <th scope="col"><a href="/{{$temp->id}}/delete"  class=btn btn-danger my-2>X</th> -->
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection