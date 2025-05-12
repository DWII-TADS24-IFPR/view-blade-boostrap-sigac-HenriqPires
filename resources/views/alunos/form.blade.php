<div class="mb-3">
    <label for="nome" class="form-label">Nome:</label>
    <input type="text" name="nome" value="{{ old('nome', $aluno->nome ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label for="cpf" class="form-label">CPF:</label>
    <input type="text" name="cpf" value="{{ old('cpf', $aluno->cpf ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" name="email" value="{{ old('email', $aluno->email ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label for="senha" class="form-label">Senha:</label>
    <input type="text" name="senha" value="{{ old('senha', $aluno->senha ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label for="user_id" class="form-label">Usuário:</label>
    <select name="user_id" class="form-control" required>
        <option value="">Selecione</option>
        @foreach($users as $user)
            <option value="{{ $user->id }}" {{ old('user_id', $aluno->user_id ?? '') == $user->id ? 'selected' : '' }}>
                {{ $user->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="curso_id" class="form-label">Curso:</label>
    <select name="curso_id" class="form-control" required>
        <option value="">Selecione</option>
        @foreach($cursos as $curso)
            <option value="{{ $curso->id }}" {{ old('curso_id', $aluno->curso_id ?? '') == $curso->id ? 'selected' : '' }}>
                {{ $curso->nome }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="turma_id" class="form-label">Turma:</label>
    <select name="turma_id" class="form-control" required>
        <option value="">Selecione</option>
        @foreach($turmas as $turma)
            <option value="{{ $turma->id }}" {{ old('turma_id', $aluno->turma_id ?? '') == $turma->id ? 'selected' : '' }}>
                {{ $turma->ano }}
            </option>
        @endforeach
    </select>
</div>
