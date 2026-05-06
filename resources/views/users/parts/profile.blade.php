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
                    class="form-control @error('type') is-invalid @enderror"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                >
                    @foreach (['PJ', 'PF'] as $type)
                        <option
                            valoe="{{ $type }}"
                            @selected(old('type') === $type || $user?->profile?->type === $type)
                        >
                            {{ $type }}
                        </option>
                    @endforeach
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
                    type="text"
                    name="address"
                    value="{{ old('address') ?? $user?->profile?-> address }}"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                >

                @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">
                Atualizar
            </button>
        </div>
    </form>
</div>
