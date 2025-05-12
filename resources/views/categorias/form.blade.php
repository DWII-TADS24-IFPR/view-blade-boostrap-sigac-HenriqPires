<div class="mb-3">
    <label for="nome" class="form-label">Nome:</label>
    <input type="text" name="nome" value="{{ old('nome', $categoria->nome ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label for="maximo_horas" class="form-label">Máximo de Horas:</label>
    <input type="number" name="maximo_horas" step="0.01" value="{{ old('maximo_horas', $categoria->maximo_horas ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label for="curso_id" class="form-label">Curso:</label>
    <select name="curso_id" class="form-control" required>
        <option value="">Selecione</option>
        @foreach($cursos as $curso)
            <option value="{{ $curso->id }}" {{ old('curso_id', $categoria->curso_id ?? '') == $curso->id ? 'selected' : '' }}>
                {{ $curso->nome }}
            </option>
        @endforeach
    </select>
</div>
