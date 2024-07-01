@extends('administrativo.index')
@section('conteudo')


<h1 class="mt-5">Clientes Cadastrados</h1>
        <a href="/clientes/cadastro" class="btn btn-primary mt-3 mb-3">Cadastrar Novo Cliente</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>CPF</th>
                    <th>Logradouro</th>
					<th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                <tr>
                    <td><?php echo $cliente['id_cliente']; ?></td>
                    <td><?php echo $cliente['nome']; ?></td>
                    <td><?php echo $cliente['email']; ?></td>
                    <td><?php echo $cliente['cpf']; ?></td>
                    <td><?php echo $cliente['logradouro']; ?></td>
					<td><?php echo $cliente['status']; ?></td>
                    <td>
                        <a href="clientes_edita.php?id=<?php echo $cliente['id_cliente']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="clientes_remover.php?id=<?php echo $cliente['id_cliente']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja remover este cliente?')">Remover</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

@endsection