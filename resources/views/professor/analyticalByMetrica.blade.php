@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1>Analíticos de Aprendizagem - Professor</h1>
        <hr>
        
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-area-chart"></i> Turma 1 - Desvio - Todas as Avaliações 
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body" style="padding:0.20rem">
                                <div class="card-body-icon" style="top:-7px; right:-7px; font-size:2rem;">
                                    <i class="fa fa-fw fa-list"></i>
                                </div>
                                <div class="mr-5" style="text-align:center;">Média da Métrica</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 2.20rem" >
                                <span class="h4 mb-0 text-primary" style="font-size:25px;"><b>6.85</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <a class="card text-white bg-primary o-hidden h-100" href="#" data-toggle="modal" data-target="#recomendModal" style="text-decoration:none">
                            <div class="card-body" style="padding: 1rem 0.2rem">
                                <div class="mr-1" style="text-align:center;">Recomendações</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-area-chart"></i> Histórico das Avaliações 
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered"  width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="vertical-align:top;">Alunos</th>
                                <th>AV. 1</th>
                                <th>AV. 2</th>
                                <th>AV. 3</th>
                                <th>Média</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="{{ route('analyticalStudentByDisciplina') }}" style="text-decoration:none;">
                                        Aluno 1
                                    </a>
                                </td>
                                <td>8.0</td>
                                <td>7.0</td>
                                <td></td>
                                <td>7.5</td>
                            </tr>
                            <tr>
                                <td>Aluno 2</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>8</td>
                            </tr>
                            <tr>
                                <td>Aluno 3</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        <tbody>
                    </table>
                </div>
            </div>
        </div>

        <canvas id="myAreaChart" width="5000" height="1">
        </canvas> 
    </div>

    <!-- Recomendações Modal-->
    <div class="modal fade" id="recomendModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Recomendações</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-bordered"  width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="vertical-align:top;">Estudar o Tópico com pior desempenho</th>
                                    <th>Tópico em que o aluno está com a maior discrepância score/desvio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tópico que o aluno está quase aprendendo</td>
                                    <td>Questionário com mais dúvidas</td>
                                </tr>
                                <tr>
                                    <td>Questionário com maior confusão</td>
                                    <td>Questionário mais demorado</td>
                                </tr>
                                <tr>
                                    <td>Questionário com menor índice de compreensão</td>
                                    <td>Questionário com maior curva de aprendizado</td>
                                </tr>
                            <tbody>
                        </table>
                    </div>
                </div>

                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>    
@endsection