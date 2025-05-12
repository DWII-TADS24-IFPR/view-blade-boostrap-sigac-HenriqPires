<div class="mb-3">
    <label for="atividade" class="form-label">Atividade:</label>
    <input type="text" name="atividade" value="{{ old('atividade', $comprovante->atividade ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label for="horas" class="form-label">Horas:</label>
    <input type="number" step="0.01" name="horas" value="{{ old('horas', $comprovante->horas ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label for="categoria_id" class="form-label">Categoria:</label>
    <select name="categoria_id" class="form-control" required>
        <option value="">Selecione</option>
        @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}" {{ old('categoria_id', $comprovante->categoria_id ?? '') == $categoria->id ? 'selected' : '' }}>
                {{ $categoria->nome }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="aluno_id" class="form-label">Aluno:</label>
    <select name="aluno_id" class="form-control" required>
        <option value="">Selecione</option>
        @foreach($alunos as $aluno)
            <option value="{{ $aluno->id }}" {{ old('aluno_id', $comprovante->aluno_id ?? '') == $aluno->id ? 'selected' : '' }}>
                {{ $aluno->nome }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="user_id" class="form-label">Usuário:</label>
    <select name="user_id" class="form-control" required>
        <option value="">Selecione</option>
        @foreach($users as $user)
            <option value="{{ $user->id }}" {{ old('user_id', $comprovante->user_id ?? '') == $user->id ? 'selected' : '' }}>
                {{ $user->name }}
            </option>
        @endforeach
    </select>
</div>
