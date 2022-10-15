@if(session('mensagem'))
    <div class="alert alert-success">
        <p>{{session('mensagem')}}</p>
    </div>
@endif
@if($errors->first() != '')
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">x</span></button>
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif