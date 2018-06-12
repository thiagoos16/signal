@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1>Analíticos de Aprendizagem - Ciências Humanas</h1>
        <hr>
        
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-area-chart"></i> Desempenho na Área
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
                                <span class="h4 mb-0 text-orange" style="font-size:25px;"><b>40</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-orange o-hidden h-100">
                            <div class="card-body" style="padding:0.20rem">
                                <div class="mr-1" style="text-align:center;">Média das Notas nas Avaliações</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 2.30rem" >
                                <span class="h4 mb-0 text-orange" style="font-size:25px;"><b>8,0</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-orange o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem">
                                <div class="mr-1" style="text-align:center;">Média dos Desvios nas Avaliações</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 2.20rem" >
                                <span class="h4 mb-0 text-orange" style="font-size:25px;"><b>345</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-orange o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem">
                                <div class="mr-1" style="text-align:center;">Tempo Médio de Resposta dos Questionários</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 1.30rem" >
                                <span class="h4 mb-0 text-orange" style="font-size:25px;"><b>30 min.</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-orange o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem">
                                <div class="mr-1" style="text-align:center;">Tempo Médio de Resposta das Questões</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 1.30rem" >
                                <span class="h4 mb-0 text-orange" style="font-size:25px;"><b>6 min.</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-orange o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem">
                                <div class="mr-1" style="text-align:center;">Tempo Médio de Acesso aos Recursos</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 0.80rem" >
                                <span class="h4 mb-0 text-orange" style="font-size:25px;"><b>20 horas</b></span>
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
                                <span class="h4 mb-0 text-orange" style="font-size:25px;"><b>123</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-orange o-hidden h-100">
                            <div class="card-body" style="padding:0.20rem">
                                <div class="mr-1" style="text-align:center;">Média de Dúvidas por Questão</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 2.80rem" >
                                <span class="h4 mb-0 text-orange" style="font-size:25px;"><b>10</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-orange o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem">
                                <div class="mr-1" style="text-align:center;">Nível Geral de Compreensão</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 2.30rem" >
                                <span class="h4 mb-0 text-orange" style="font-size:25px;"><b>85%</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-orange o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem">
                                <div class="mr-1" style="text-align:center;">Curva Geral de Aprendizagem</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 2.30rem" >
                                <span class="h4 mb-0 text-orange" style="font-size:25px;"><b>25%</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-6 mb-3">
                        <div class="card text-white bg-orange o-hidden h-100">
                            <div class="card-body" style="padding:0.25rem">
                                <div class="mr-1" style="text-align:center;">Média da tax de Confusão</div>
                            </div>
                            <div class="card-footer text-white clearfix small z-1" style="background-color:white; padding:0.75rem 2.30rem" >
                                <span class="h4 mb-0 text-orange" style="font-size:25px;"><b>30%</b></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-area-chart"></i> Disciplinas da Área
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-xl-6 col-sm-6 mb-3">
                        <a class="card text-white bg-orange o-hidden h-100" href="#" style="text-decoration:none">
                            <div class="card-body" style="padding:0.5rem 0.25rem">
                                <div class="mr-1" style="text-align:center; font-size:20px;">História</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-6 col-sm-6 mb-3">
                        <a class="card text-white bg-orange o-hidden h-100" href="#" style="text-decoration:none">
                            <div class="card-body" style="padding:0.5rem 0.25rem">
                                <div class="mr-1" style="text-align:center; font-size:20px;">Geografia</div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-sm-6 mb-3">
                        <a class="card text-white bg-orange o-hidden h-100" href="#" style="text-decoration:none">
                            <div class="card-body" style="padding:0.5rem 0.25rem">
                                <div class="mr-1" style="text-align:center; font-size:20px;">Filosofia</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-6 col-sm-6 mb-3">
                        <a class="card text-white bg-orange o-hidden h-100" href="#" style="text-decoration:none">
                            <div class="card-body" style="padding:0.5rem 0.25rem">
                                <div class="mr-1" style="text-align:center; font-size:20px;">Sociologia</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection