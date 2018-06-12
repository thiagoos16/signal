@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1>Analíticos de Aprendizagem - História</h1>
        <hr>
        
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-area-chart"></i> Turma 1 - Avaliação 1
            </div>

            <div class="card-body">
                <h3> Métrica: Desvio | *Média da Turma: 7.75* </h3>
                <h3> Aluno 1 </h3>

                <canvas id="myBarChart" width="100%" height="30" style="padding-top:2rem;">
                </canvas>
            </div>
        </div>

        <canvas id="myAreaChart" width="5000" height="1">
        </canvas> 
    </div>
@endsection