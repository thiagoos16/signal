@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1>Analíticos de Aprendizagem - Professor</h1>
        <hr>
        
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-area-chart"></i> Desempenho Geral - Turma 1
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body" style="padding:0.20rem">
                                <div class="card-body-icon" style="top:-7px; right:-7px; font-size:2rem;">
                                    <i class="fa fa-fw fa-list"></i>
                                </div>
                                <div class="mr-5" style="text-align:center;">Média Geral da Nota</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 2.20rem" >
                                <span class="h4 mb-0 text-primary" style="font-size:25px;"><b>300</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <a class="card text-white bg-primary o-hidden h-100" href="#" style="text-decoration:none;">
                            <div class="card-body" style="padding:0.20rem">
                                <div class="mr-1" style="text-align:center;">Média Geral do Desvio</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 2.30rem" >
                                <span class="h4 mb-0 text-primary" style="font-size:25px;"><b>6,85</b></span>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem">
                                <div class="mr-1" style="text-align:center;">Média do Tempo de Resposta</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 2.20rem" >
                                <span class="h4 mb-0 text-primary" style="font-size:25px;"><b>1055</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem">
                                <div class="mr-1" style="text-align:center;">Nível de Compreensão</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 1.30rem" >
                                <span class="h4 mb-0 text-primary" style="font-size:25px;"><b>44 min.</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem">
                                <div class="mr-1" style="text-align:center;">Média Geral do Score</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 1.30rem" >
                                <span class="h4 mb-0 text-primary" style="font-size:25px;"><b>300</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem">
                                <div class="mr-1" style="text-align:center;">Média Geral da Nota</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 1.30rem" >
                                <span class="h4 mb-0 text-primary" style="font-size:25px;"><b>6,85</b></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem">
                                <div class="mr-1" style="text-align:center;">Média Geral do Desvio</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 2.10rem" >
                                <span class="h4 mb-0 text-primary" style="font-size:25px;"><b>1055</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem">
                                <div class="mr-1" style="text-align:center;">Média Geral do Tempo de Resposta(Todas as Avaliações)</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 2.10rem" >
                                <span class="h4 mb-0 text-primary" style="font-size:25px;"><b>1055</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem">
                                <div class="mr-1" style="text-align:center;">Média Geral do Tempo de Resposta(por questão)</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 1.20rem" >
                                <span class="h4 mb-0 text-primary" style="font-size:25px;"><b>44 min.</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem">
                                <div class="mr-1" style="text-align:center;">Tempo Médio de Acesso aos Recursos</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 0.50rem" >
                                <span class="h4 mb-0 text-primary" style="font-size:25px;"><b>30 Horas</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem">
                                <div class="mr-1" style="text-align:center;">Média Geral da Dúvida</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 1.20rem" >
                                <span class="h4 mb-0 text-primary" style="font-size:25px;"><b>456</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem">
                                <div class="mr-1" style="text-align:center;">Média Geral do índice de Desordem</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 0.50rem" >
                                <span class="h4 mb-0 text-primary" style="font-size:25px;"><b>30 Horas</b></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem">
                                <div class="mr-1" style="text-align:center;">Média do índice de pedidos de ajuda</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 2.40rem" >
                                <span class="h4 mb-0 text-primary" style="font-size:25px;"><b>80%</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem">
                                <div class="mr-1" style="text-align:center;">Tempo Médio da Ajuda</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 2.40rem" >
                                <span class="h4 mb-0 text-primary" style="font-size:25px;"><b>35%</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem">
                                <div class="mr-1" style="text-align:center;">Média do Nível de Compreenssão</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 2.40rem" >
                                <span class="h4 mb-0 text-primary" style="font-size:25px;"><b>65%</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem">
                                <div class="mr-1" style="text-align:center;">Média da Curva de Aprendizagem</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 2.40rem" >
                                <span class="h4 mb-0 text-primary" style="font-size:25px;"><b>50%</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem; vertical-align:middle;">
                                <div class="mr-1" style="text-align:center;">Média da Taxa de Confusão</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 2.50rem" >
                                <span class="h4 mb-0 text-primary" style="font-size:25px;"><b>223</b></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-sm-6 mb-3">
                        <a class="card text-white bg-primary o-hidden h-100" href="#" data-toggle="modal" data-target="#recomendModal" style="text-decoration:none">
                            <div class="card-body" style="padding: 1rem 0.5rem">
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
                <canvas id="myBarChart" width="100%" height="30">
                </canvas>
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