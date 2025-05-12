<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Relatório do Curso PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            padding: 20px;
        }
        h1 {
            color: #4CAF50;
        }
        .dados {
            margin-top: 20px;
        }
        .dados p {
            font-size: 14px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Relatório do Curso: {{ $dados['curso'] }}</h1>

        <div class="dados">
            <p><strong>Curso:</strong> {{ $dados['curso'] }}</p>
            <p><strong>Duração:</strong> {{ $dados['duracao'] }} anos</p>
            <p><strong>Alunos:</strong></p>
            <ul>
                @foreach ($dados['alunos'] as $aluno)
                    <li>{{ $aluno }}</li>
                @endforeach
            </ul>
        </div>

        <h2>Detalhes do Curso</h2>
        <table>
            <thead>
                <tr>
                    <th>Nome do Aluno</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dados['alunos'] as $aluno)
                    <tr>
                        <td>{{ $aluno }}</td>
                        <td>Ativo</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
