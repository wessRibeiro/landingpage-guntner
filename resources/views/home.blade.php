@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div>
                    Logo
                </div>
                <div>
                    LIDERANÇA EM SOLUÇÕES DE ENGENHARIA
                </div>
                <div>
                    Trabalhamos envolvidos em diversas áreas de atuação, como manter os alimentos frescos, fornecer temperaturas interiores confortáveis para edifícios comerciais e permitir a produção de energia renovável.
                </div>
                <div>
                    ACESSE ABAIXO NOSSOS MATERIAIS ÚTEIS
                </div>
                <div>
                    Catálogos e Flyers
                    <br>
                    IOMs
                    <br>
                    Quick Instalation
                </div>
            </div>
            <div class="col">
                <div>
                    TEM ALGUMA DÚVIDA OU PRECISA DE ALGUM OUTRO MATERIAL ESPECÍFICO?
                </div>
                <div>
                    Solicite abaixo
                </div>
                <form action="{{route('create_message')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <input type="text" placeholder="Nome" class="form-control" id="inputName" name="inputName">
                    </div>
                    <div class="mb-3">
                        <input type="text" placeholder="telefone" class="form-control" id="inputTelephone" name="inputTelephone">
                    </div>
                    <div class="mb-3">
                        <input type="email" placeholder="Email" class="form-control" id="inputEmail" name="inputEmail">
                    </div>
                    <div class="mb-3">
                        <input type="text" placeholder="Assunto" class="form-control" id="inputSubject" name="inputSubject">
                    </div>
                    <div class="mb-3">
                        <textarea placeholder="Mensagem" class="form-control" id="inputMessage" name="inputMessage" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
