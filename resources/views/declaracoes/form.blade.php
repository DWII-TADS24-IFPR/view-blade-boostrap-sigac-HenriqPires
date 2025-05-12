<div class="mb-3">
    <label for="hash" class="form-label">Hash:</label>
    <input type="text" name="hash" value="{{ old('hash', $declaracao->hash ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label for="data" class="form-label">Data:</label>
    <input type="datetime-local" name="data"
        value="{{ old('data', isset($declaracao) ? \Carbon\Carbon::parse($declaracao->data)->format('Y-m-d\TH:i') : '') }}"
        class="form-control" required>
</div>

<div class="mb-3">
    <label for="aluno_id" class="form-label">Aluno:</label>
    <select name="aluno_id" class="form-control" required>
        <option value="">Selecione</option>
        @foreach($alunos as $aluno)
            <option value="{{ $aluno->id }}" {{ old('aluno_id', $declaracao->aluno_id ?? '') == $aluno->id ? 'selected' : '' }}>
                {{ $aluno->nome }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="comprovante_id" class="form-label">Comprovante:</label>
    <select name="comprovante_id" class="form-control" required>
        <option value="">Selecione</option>
        @foreach($comprovantes as $comprovante)
            <option value="{{ $comprovante->id }}" {{ old('comprovante_id', $declaracao->comprovante_id ?? '') == $comprovante->id ? 'selected' : '' }}>
                {{ $comprovante->atividade }}
            </option>
        @endforeach
    </select>
</div>
