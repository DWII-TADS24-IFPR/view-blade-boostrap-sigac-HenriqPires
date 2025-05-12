<div class="mb-3">
    <label for="nome" class="form-label">Nome:</label>
    <input type="text" name="nome" value="{{ old('nome', $curso->nome ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label for="sigla" class="form-label">Sigla:</label>
    <input type="text" name="sigla" value="{{ old('sigla', $curso->sigla ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label for="total_horas" class="form-label">Total de Horas:</label>
    <input type="number" name="total_horas" step="0.01" value="{{ old('total_horas', $curso->total_horas ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label for="nivel_id" class="form-label">Nível:</label>
    <select name="nivel_id" class="form-control" required>
        <option value="">Selecione</option>
        @foreach($nivels as $nivel)
            <option value="{{ $nivel->id }}" {{ old('nivel_id', $curso->nivel_id ?? '') == $nivel->id ? 'selected' : '' }}>
                {{ $nivel->nome }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="eixo_id" class="form-label">Eixo:</label>
    <select name="eixo_id" class="form-control" required>
        <option value="">Selecione</option>
        @foreach($eixos as $eixo)
            <option value="{{ $eixo->id }}" {{ old('eixo_id', $curso->eixo_id ?? '') == $eixo->id ? 'selected' : '' }}>
                {{ $eixo->nome }}
            </option>
        @endforeach
    </select>
</div>
