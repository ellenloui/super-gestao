<h2>Fornecedor</h2>

{{-- @dd($fornecedores)

@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) >= 10)
    <h3>Existem varios fornecedores cadastrados</h3>
@else 
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif
Fornecedor: {{  $fornecedores[0]['nome'] }}
<br>
Status: {{  $fornecedores[0]['status'] }}

<br>
@if (!($fornecedores[0]['status'] == 'S'))
    Fornecedor inativo
@else
    Fornecedor ativo
@endif

@unless ($fornecedores[0]['status'] == 'S')
   <br>
    Fornecedor inativo
@endunless
--}}
@isset($fornecedores)
    @php $i = 0; @endphp
    @forelse($fornecedores as $indice => $fornecedor)
        {{ $loop->iteration }}
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchdio' }}
        <br>
        Telefone : ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}

        @switch($fornecedores[$i]['ddd'] ?? '')
            @case('011')
                São Paulo - SP
            @break

            @case('032')
                Juiz de Fora - MG
            @break

            @case('38')
                Montes Claros - MG
            @break
        @endswitch
        <hr>
        @empty
            Não existem fornecedores cadastrados!!!
        @endforelse


    @endisset
