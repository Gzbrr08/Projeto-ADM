 <div class="card">
    <form
         action="{{ route('users.updateProfile', $user->id) }}" 
        method="POST"
    >
        @csrf
        @method('PUT')
    
    <div class="card-header">
        Perfil
    </div>

     <div class="card-body">

        <div class="mb-3">
        <label class="form-label">Tipo de pessoa</label>
        <select
            name="type"
            class="form-control @error('type') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
        >
            <option valoe="PJ">PJ</option>
            <option valoe="PF">PF</option>
    
        </select>

            @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
        <label class="form-label">Endereço</label>
        <input 
            required
            type="text"
            name="address"
            value="{{ old('address') }}"
            class="form-control"
            id="exampleInputEmail1" aria-describedby="emailHelp">

            @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Voltar</a>
    </div>

    </div>

       
    

        
  