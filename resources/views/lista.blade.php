@extends('layouts.app')

@section('content')
    <div class="container">

        @include('layouts.messages')
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Familiares
                    </div>
                    <div class="card-body">
                        <table class="table table-vcenter">
                            {{-- <th>
                                <a class="th-list" href="{{ route('lista', ['OrderdenarPor' => 'id']) }}">
                                    ID
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-sort-down-alt" viewBox="0 0 16 16">
                                        <path
                                            d="M3.5 3.5a.5.5 0 0 0-1 0v8.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L3.5 12.293V3.5zm4 .5a.5.5 0 0 1 0-1h1a.5.5 0 0 1 0 1h-1zm0 3a.5.5 0 0 1 0-1h3a.5.5 0 0 1 0 1h-3zm0 3a.5.5 0 0 1 0-1h5a.5.5 0 0 1 0 1h-5zM7 12.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5z" />
                                    </svg>
                                </a>

                            </th> --}}
                            <th>
                                <a class="th-list" href="{{ route('lista', ['OrderdenarPor' => 'nome']) }}">
                                    Nome
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-sort-down-alt" viewBox="0 0 16 16">
                                        <path
                                            d="M3.5 3.5a.5.5 0 0 0-1 0v8.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L3.5 12.293V3.5zm4 .5a.5.5 0 0 1 0-1h1a.5.5 0 0 1 0 1h-1zm0 3a.5.5 0 0 1 0-1h3a.5.5 0 0 1 0 1h-3zm0 3a.5.5 0 0 1 0-1h5a.5.5 0 0 1 0 1h-5zM7 12.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5z" />
                                    </svg>
                                </a>
                            </th>
                            <th>
                                <a class="th-list" href="{{ route('lista', ['OrderdenarPor' => 'data_nascimento']) }}">
                                    Nasc.
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-sort-down-alt" viewBox="0 0 16 16">
                                        <path
                                            d="M3.5 3.5a.5.5 0 0 0-1 0v8.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L3.5 12.293V3.5zm4 .5a.5.5 0 0 1 0-1h1a.5.5 0 0 1 0 1h-1zm0 3a.5.5 0 0 1 0-1h3a.5.5 0 0 1 0 1h-3zm0 3a.5.5 0 0 1 0-1h5a.5.5 0 0 1 0 1h-5zM7 12.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5z" />
                                    </svg>
                                </a>
                            </th>
                            <th class="coluna-acoes"></th>
                            <tbody>
                                @foreach ($familiares as $familiar)
                                    <tr>
                                        {{-- <td>{{ $familiar->id }} </td> --}}
                                        <td>{{ $familiar->nome }}
                                            {{ $familiar->apelido ? ' - ' . $familiar->apelido : ''}}</td>
                                        <td> {{ $familiar->data_nascimento ? implode('/', array_reverse(explode('-', $familiar->data_nascimento))) : ' - ' }}
                                        </td>
                                        <td class="btns-acoes btn-container-list">
                                            <a class="btn btn-primary min-mobile btn-list" onclick=showFamiliarDetails({},{{ $familiar->id }})
                                                data-bs-toggle="modal" data-bs-target="#Modal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </a>
                                            @if ( in_array($familiar->id, $perm) || $user->hasRole('admin'))

                                            <a href="familiar-edit/{{ $familiar->id }}" class="btn btn-success min-mobile btn-list">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                                    <path
                                                        d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                                </svg>
                                            </a>

                                            <form method="POST" action="{{url('familiar-delete/'.$familiar->id)}}">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" href="familiar-delete/{{ $familiar->id }}" class="btn btn-danger min-mobile btn-list" onclick="return confirm('Para excluir um cadastro, não pode haver filhos nem agregados vinculados. Essa ação não pode ser desfeita. Deseja continuar?')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                    </svg>
                                                </button>
                                            </form>
                                                
                                            @endif
                                           

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Modal --}}

    <x-modal-familiar id="modal-lg" title="Modal LG" size="lg" />

@endsection
