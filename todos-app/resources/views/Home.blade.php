<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title m-b-0">
                        <form action="{{asset('/store')}}" method="POST">
                            @csrf
                            <div>
                                <input type="text" name="name" placeholder="Input Todos" required autocomplete="off" />
                                <button type="submit">submit</button>
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
                            </tr>
                        </thead>
                        <tbody class="customtable">
                            @foreach($todo as $temp)
                            <tr>
                                <th> <label class="customcheckbox m-b-20"> <input type="checkbox" id="mainCheckbox"> <span
                      class="checkmark"></span> </label> </th>
                                <th scope="col">{!! $temp->name!!}</th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
