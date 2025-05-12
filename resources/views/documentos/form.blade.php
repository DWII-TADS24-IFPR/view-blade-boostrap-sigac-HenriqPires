<div class="mb-3">
    <label for="nome" class="form-label">Nome do Documento:</label>
    <input type="text" name="nome" value="{{ old('nome', $documento->nome ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label for="categoria_id" class="form-label">Categoria:</label>
    <select name="categoria_id" class="form-control" required>
        <option value="">Selecione</option>
        @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}" {{ old('categoria_id', $documento->categoria_id ?? '') == $categoria->id ? 'selected' : '' }}>
                {{ $categoria->nome }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="user_id" class="form-label">Usuário:</label>
    <select name="user_id" class="form-control" required>
        <option value="">Selecione</option>
        @foreach($users as $user)
            <option value="{{ $user->id }}" {{ old('user_id', $documento->user_id ?? '') == $user->id ? 'selected' : '' }}>
                {{ $user->name }}
            </option>
        @endforeach
    </select>
</div>
