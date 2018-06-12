@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1>Analíticos de Aprendizagem - História</h1>
        <hr>
        
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-area-chart"></i> Desempenho Geral das Turmas
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Example Bar Chart Card-->
                        <div class="card mb-3">
                            <div class="card-header">
                                <i class="fa fa-bar-chart"></i> Turma 1 - Língua Portuguesa
                            </div>
                            <a class="card-body" href="{{ route('analyticalByTurma01') }}">
                                <canvas id="myBarChart" width="100%" height="50"></canvas>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <!-- Example Bar Chart Card-->
                        <div class="card mb-3">
                            <div class="card-header">
                                <i class="fa fa-bar-chart"></i> Turma 2 - Português Instrumental
                            </div>
                            <div class="card-body">
                                <canvas id="myBarChart2" width="100%" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <!-- Example Bar Chart Card-->
                        <div class="card mb-3">
                            <div class="card-header">
                                <i class="fa fa-bar-chart"></i> Turma 3 - Língua Portuguesa
                            </div>
                            <div class="card-body">
                                <canvas id="myBarChart3" width="100%" height="50"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <!-- Example Bar Chart Card-->
                        <div class="card mb-3">
                            <div class="card-header">
                                <i class="fa fa-bar-chart"></i> Turma 4 - Português Instrumental
                            </div>
                            <div class="card-body">
                                <canvas id="myBarChart4" width="100%" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <canvas id="myAreaChart" width="5000" height="1">
        </canvas> 
                  
    </div>    
@endsection