<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use Dompdf\Dompdf;

class RelatorioController extends Controller

{

    public function emiteRelatorio(){
        $dados = [
            'curso' => 'Análise e Desenvolvimento de Sistemas',
            'alunos' => ['Henrique', 'Gustavo', 'Gabriela'],
            'duracao' => 4
        ];
    
        // Passando os dados para a view e renderizando
        $html = View::make('relatorio.curso', ['dados' => $dados])->render();
    
        // Inicializando o Dompdf
        $dompdf = new \Dompdf\Dompdf(); 
        $dompdf->loadHtml($html); // Corrigido para não usar aspas simples
    
        // Definindo o tamanho e a orientação da página
        $dompdf->setPaper('A4', 'landscape');
    
        // Renderizando o PDF
        $dompdf->render();
    
        // Exibindo o PDF para o usuário
        $dompdf->stream('relatorio.pdf');
    }
    

 
    }
