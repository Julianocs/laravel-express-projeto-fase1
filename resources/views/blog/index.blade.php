@extends('template')

@section('title')
    Primeiro Blog em Laravel
@stop

@section('content')
        <!-- Page Heading -->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Meu primeiro Blog Laravel
                    <small>Vai funcionar</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

    @foreach($listablog as $blog)
        <!-- linha -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>{{ $blog }}</h3>
                <h4>{{ $blog }}</h4>
                <p>{{ $blog }}</p>
                <a class="btn btn-primary" href="#">Visualize os projetos <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>
    @endforeach




        

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2015</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>
@stop
