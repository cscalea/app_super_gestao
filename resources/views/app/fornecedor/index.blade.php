<h3>Fornecedor</h3>

{{-- {{ ' TEXTO TESTE ' }}


<!-- COMENTÁRIOS EM VIEW - não da pra ver nem no inspecionar elemento -->
{{-- Fica o comentário que será descartado pelo interpretador do blade --}}

<!-- INCLUIR BLOCOS PHP PURO EM VIEWS-->


@php
@endphp

<hr>
@isset($fornecedores)


    @forelse($fornecedores as $indice => $fornecedor)
    @dd($loop)
        Iteração atual {{$loop->iteration}}
        <br>
        Fornecedor: {{$fornecedor['nome']}}
         <br>
         <br>
         Cnpj: {{$fornecedor['cnpj']}}
         <br>
         Ativo: {{$fornecedor['ativo']}}
         <br>
         Telefone: {{$fornecedor['ddd']}} {{$fornecedor['telefone']}}
         <br>
         @if($loop->first)     PRIMEIRA ITERAÇÃO DO LOOP
            Primeira iteração do LOOP
         @endif
           @if($loop->last)    ULTIMA ITERAÇÃO DO LOOP
            Última iteração do LOOP
            <br>
            Total de registros de fornecedores: {{$loop->count}}    CONTA QUANTOS REGISTROS TEM NO ARRAY
         @endif
         <hr>
         @empty
         Não existem fornecedores cadastrados
    @endforelse

@endisset




{{-- $LOOP->LAST, FIRST, COUNT

@forelse($fornecedores as $indice => $fornecedor)
    @dd($loop)
        Iteração atual {{$loop->iteration}}
        <br>
        Fornecedor: {{$fornecedor['nome']}}
         <br>
         <br>
         Cnpj: {{$fornecedor['cnpj']}}
         <br>
         Ativo: {{$fornecedor['ativo']}}
         <br>
         Telefone: {{$fornecedor['ddd']}} {{$fornecedor['telefone']}}
         <br>
         @if($loop->first)     PRIMEIRA ITERAÇÃO DO LOOP
            Primeira iteração do LOOP
         @endif
           @if($loop->last)    ULTIMA ITERAÇÃO DO LOOP
            Última iteração do LOOP
            <br>
            Total de registros de fornecedores: {{$loop->count}}    CONTA QUANTOS REGISTROS TEM NO ARRAY
         @endif
         <hr>
         @empty
         Não existem fornecedores cadastrados
    @endforelse --}}


{{-- INSERIR UM @ À ESQUERDA DO BLOCO DE CÓDIGO, O BLAZE IDENTIFICA QUE NÃO SE DEVE INTERPRETAR O QUE FOI PEDIDO NO CÓDIGO, MOSTRA LITERALMENTE O TEXTO A SEGUIR.

  @forelse($fornecedores as $indice => $fornecedor)
    
        Fornecedor: @{{$fornecedor['nome']}}
         <br>
         <br>
         Cnpj: @{{$fornecedor['cnpj']}}
         <br>
         Ativo: @{{$fornecedor['ativo']}}
         <br>
         Telefone: @{{$fornecedor['ddd']}} @{{$fornecedor['telefone']}}
         <br>
         <hr>
         @empty
         Não existem fornecedores cadastrados
    @endforelse --}}

{{-- FORELSE TEM O EMPTY NA ESTRUTURA DO CÓDIGO QUE CASO O ARRAY ESTEJA VAZIO, CAI NA AÇÃO DO EMPTY

  @forelse($fornecedores as $indice => $fornecedor)
    
        Fornecedor: {{$fornecedor['nome']}}
         <br>
         <br>
         Cnpj: {{$fornecedor['cnpj']}}
         <br>
         Ativo: {{$fornecedor['ativo']}}
         <br>
         Telefone: {{$fornecedor['ddd']}} {{$fornecedor['telefone']}}
         <br>
         <hr>
         @empty
         Não existem fornecedores cadastrados
    @endforelse --}}


{{-- FOREACH SINTAXE BLADE

@foreach($fornecedores as $indice => $fornecedor)
    
    Fornecedor: {{$fornecedor['nome']}}
    <br>
    <br>
    Cnpj: {{$fornecedor['cnpj']}}
    <br>
    Ativo: {{$fornecedor['ativo']}}
    <br>
    Telefone: {{$fornecedor['ddd']}} {{$fornecedor['telefone']}}
    <br>
    <hr>
 
@endforeach --}}

{{-- WHILE na sintaxe BLADE
@php $i = 0; @endphp
@while(isset($fornecedores[$i]))
    
    Fornecedor: {{$fornecedores[$i]['nome']}}
    <br>
    <br>
    Cnpj: {{$fornecedores[$i]['cnpj']}}
    <br>
    Ativo: {{$fornecedores[$i]['ativo']}}
    <br>
    Telefone: {{$fornecedores[$i]['ddd']}} {{$fornecedores[$i]['telefone']}}
    <br>
    <hr>
    @php $i ++; @endphp

@endwhile --}}




{{--FOR FEITO PELO CURSO--}}

{{-- @for($i = 0; ISSET($fornecedores[$i]); $i++)
    
    Fornecedor: {{$fornecedores[$i]['nome']}}
    <br>
    <br>
    Cnpj: {{$fornecedores[$i]['cnpj']}}
    <br>
    Ativo: {{$fornecedores[$i]['ativo']}}
    <br>
    Telefone: {{$fornecedores[$i]['ddd']}} {{$fornecedores[$i]['telefone']}}
    <br>
    <hr>


@endfor --}}

{{-- FOR - EU QUE FIZ
@for($i = 0; $i <= 4; $i++)
    {{$fornecedores[$i]['nome'] ?? ''}}
    <br>
    {{$fornecedores[$i]['cnpj'] ?? ''}}
    <br>
    {{$fornecedores[$i]['ativo'] ?? ''}}
    <br>
    {{$fornecedores[$i]['ddd'] ?? ''}}
    <br>
    {{$fornecedores[$i]['telefone'] ?? ''}}
    <br>
    <br>
    <br>

@endfor --}}


{{-- EXEMPLO USO DO SWITCH CASE
@switch($fornecedores[1]['ddd'])
        @case ('11')
            São Paulo - SP
            @break
        @case ('35')
            Alfenas - MG
            @break
        @case ('32')
            Juiz de Fora - MG
            @break
        @default 
            Estado não identificado.
    @endswitch --}}

 {{-- @isset($fornecedores[0]['ativo'])
    Ativo: {{ $fornecedores[0]['ativo']}}
    @empty($fornecedores[0]['ativo'])
    vazio
    @endempty
    @endisset --}}

{{-- if(empty($variavel)) {} retorna true se a variável estiver vazia
 O PHP considera "vazio" os seguintes valores:
- ''
- 0
- 0.0
- null
- array()
- false
- $var -> variável declarada mas não definida com nenhum valor. --}}


{{-- @dd($fornecedores) --}}
{{-- @unless executa se o retorno for false --}}

{{-- ISSET --}}

    {{-- if(isset($variável)) {} //RETORNA TRUE SE A VARIÁVEL ESTIVER DEFINIDA

 @isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome']}}
    <br>
    Ativo: {{ $fornecedores[0]['ativo']}}
    <br>
    Cnpj: {{ $fornecedores[0]['cnpj']}}
    <br>
    <br>
    <br>
    Fornecedor: {{ $fornecedores[1]['nome']}}
    <br>
    Ativo: {{ $fornecedores[1]['ativo']}}
    <br>
    @isset($fornecedores[1]['cnpj'])
    Cnpj: {{ $fornecedores[1]['cnpj']}}
    <br>
    @endisset
@endisset --}}




{{-- @if(!($fornecedores[0]['ativo'] == 'S'))
    Fornecedor inativo
@endif
<br>
@unless($fornecedores[0]['ativo'] == 'S') <!-- Se o retorno for false -->
    Fornecedor inativo
@endunless
<br> --}}


{{-- IF NA SINTAXE BLADE --}}
    {{-- @if(count($fornecedores) > 0 && count($fornecedores) < 10)
        <h3>Existem alguns fornecedores cadastrados.</h3>

    @elseif(count($fornecedores) > 10)
        <h3>Existem vários fornecedores cadastrados.</h3>

    @else
        <h3>Ainda não existem fornecedores cadastrados.</h3>
    @endif

@php

    // Para comentários de uma linha

    /* Para comentários de múltiplas linhas */

    // echo 'TEXTO TESTE';
@endphp --}}
