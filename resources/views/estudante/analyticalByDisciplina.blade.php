@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1>Analíticos de Aprendizagem - História</h1>
        <hr>
        
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-area-chart"></i> Desempenho na Disciplina
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-orange o-hidden h-100">
                            <div class="card-body" style="padding:0.20rem">
                                <div class="card-body-icon" style="top:-7px; right:-7px; font-size:2rem;">
                                    <i class="fa fa-fw fa-list"></i>
                                </div>
                                <div class="mr-5" style="text-align:center;">Total de Scores nas Avaliações</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 2.20rem" >
                                <span class="h4 mb-0 text-orange" style="font-size:25px;"><b>300</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-orange o-hidden h-100">
                            <div class="card-body" style="padding:0.20rem">
                                <div class="mr-1" style="text-align:center;">Média das Notas nas Avaliações</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 2.30rem" >
                                <span class="h4 mb-0 text-orange" style="font-size:25px;"><b>6,85</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-orange o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem">
                                <div class="mr-1" style="text-align:center;">Média dos Desvios nas Avaliações</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 2.20rem" >
                                <span class="h4 mb-0 text-orange" style="font-size:25px;"><b>1055</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-orange o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem">
                                <div class="mr-1" style="text-align:center;">Tempo Médio de Resposta dos Questionários</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 1.30rem" >
                                <span class="h4 mb-0 text-orange" style="font-size:25px;"><b>44 min.</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-orange o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem">
                                <div class="mr-1" style="text-align:center;">Tempo Médio de Resposta das Questões</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 1.30rem" >
                                <span class="h4 mb-0 text-orange" style="font-size:25px;"><b>5 min.</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-orange o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem">
                                <div class="mr-1" style="text-align:center;">Tempo Médio de Acesso aos Recursos</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 0.80rem" >
                                <span class="h4 mb-0 text-orange" style="font-size:25px;"><b>30 horas</b></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-orange o-hidden h-100">
                            <div class="card-body" style="padding:0.20rem">
                                <div class="mr-1" style="text-align:center;">Quantidade Total de Dúvidas</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 2.70rem" >
                                <span class="h4 mb-0 text-orange" style="font-size:25px;"><b>456</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-orange o-hidden h-100">
                            <div class="card-body" style="padding:0.20rem">
                                <div class="mr-1" style="text-align:center;">Média de Dúvidas por Questão</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 2.80rem" >
                                <span class="h4 mb-0 text-orange" style="font-size:25px;"><b>13</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-orange o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem">
                                <div class="mr-1" style="text-align:center;">Nível Geral de Compreensão</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 2.30rem" >
                                <span class="h4 mb-0 text-orange" style="font-size:25px;"><b>80%</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-orange o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem">
                                <div class="mr-1" style="text-align:center;">Curva Geral de Aprendizagem</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 2.30rem" >
                                <span class="h4 mb-0 text-orange" style="font-size:25px;"><b>35%</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-orange o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem">
                                <div class="mr-1" style="text-align:center;">Média da tax de Confusão</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 2.30rem" >
                                <span class="h4 mb-0 text-orange" style="font-size:25px;"><b>65%</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <a class="card text-white bg-orange o-hidden h-100" href="#" data-toggle="modal" data-target="#recomendModal" style="text-decoration:none">
                            <div class="card-body" style="padding:3.0rem 0.25rem">
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
                <canvas id="myAreaChart" width="100%" height="30">
                </canvas>
            </div>
        </div>
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