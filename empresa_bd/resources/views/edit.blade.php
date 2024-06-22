@extends('layout')

@section('title', 'Editar Persona')

@section('content')

    <h2>Personas</h2>
    <table cellpadding="3" cellspacing="5">
        <tr>
            <th colspan="4">Edita los campos que necesites: </th>
        </tr>
        <!-- @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }} </li>
                @endforeach
            </ul>
        @endif -->
        <form action="{{ route('personas.update', $persona) }}" method="post">
            @csrf @method('PATCH')
            <tr>
                <th>Nombre: </th>
                <td>
                    <input type="text" name="cPerNombre" value="{{ old('cPerNombre',$persona->cPerNombre) }}">
                    @error('cPerNombre')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <th>Apellido: </th>
                <td><input type="text" name="cPerApellido" value="{{ old('cPerApellido',$persona->cPerApellido) }}"> 
                    <br> {{ $errors->first('cPerApellido') }}
                </td>
            </tr>
            <tr>
                <th>Direccion: </th>
                <td><input type="text" name="cPerDireccion" value="{{ old('cPerDireccion',$persona->cPerDireccion) }}"> 
                    <br> {{ $errors->first('cPerDireccion') }}
                </td>
            </tr>
            <tr>
                <th>Fecha Nacimiento: </th>
                <td><input type="date" name="dPerFecNac" value="{{ old('dPerFecNac',$persona->dPerFecNac) }}"> 
                    <br> {{ $errors->first('dPerFecNac') }}
                </td>
            </tr>
            <tr>
                <th>Edad: </th>
                <td><input type="number" name="nPerEdad" value="{{ old('nPerEdad',$persona->nPerEdad) }}"> 
                    <br> {{ $errors->first('nPerEdad') }}
                </td>
            </tr>
            <tr>
                <th>Sueldo: </th>
                <td><input type="number" name="nPerSueldo" value="{{ old('nPerSueldo',$persona->nPerSueldo) }}"> 
                    <br> {{ $errors->first('nPerSueldo') }}
                </td>
            </tr>
            <tr>
                <th>Estado: </th>
                <td>
                    <select name="nPerEstado" >
                        <option value="1" {{ old('nPerEstado',$persona->nPerEstado) == '1' ? 'selected' : '' }}>Activo</option>
                        <option value="0" {{ old('nPerEstado',$persona->nPerEstado) == '0' ? 'selected' : '' }}>Inactivo</option>
                    </select>
                    @error('nPerEstado')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                
                        <br> {{ $errors->first('nPerEstado') }}
                    </td>
            </tr>
            
            <tr>
                <td colspan="2" align="center"><button>Guardar</button> </td>
            </tr>
        </form>
    </table>
        
@endsection