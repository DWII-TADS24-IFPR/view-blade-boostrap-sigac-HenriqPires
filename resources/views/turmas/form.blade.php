<div class="mb-3">
    <label for="ano" class="form-label">Ano:</label>
    <input type="text" name="ano" value="{{ old('ano', $turma->ano ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label for="curso_id" class="form-label">Curso:</label>
    <select name="curso_id" class="form-control" required>
        <option value="">Selecione</option>
        @foreach($cursos as $curso)
            <option value="{{ $curso->id }}" {{ old('curso_id', $turma->curso_id ?? '') == $curso->id ? 'selected' : '' }}>
                {{ $curso->nome }}
            </option>
        @endforeach
    </select>
</div>
