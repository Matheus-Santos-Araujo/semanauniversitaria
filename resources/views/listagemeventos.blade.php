@extends('main')  
  @section('conteudo') 
    <div class="alert alert-success">
        <i class="fa fa-eye fa-lg"></i><strong> Veja os eventos</strong> 
    </div><table id="container">
  <!-- percorre contatos montando as linhas da tabela -->
  @foreach($eventos as $p)
  <div class="grid">
      <ul class="container-fluid col-lg-12">
          <dl class="list-group-item"><h3 style="font-family: helvetica; margin-left: auto; margin-right: auto; font-size: 13pt; color: #0d3a0d; font-weight: bold;
            display: inline;">Nome: </h3><h2 style="font-family: helvetica; margin-left: auto; margin-right: auto; font-size: 15pt; color:#2d9402;
            font-style: italic;">{{$p->nome}}</h2></dl>
          <dl class="list-group-item"><h3 style="font-family: helvetica; margin-left: auto; margin-right: auto; font-size: 13pt; color: #0d3a0d; font-weight: bold;
            display: inline;">Sigla: </h3> <h2 style="font-family: helvetica; margin-left: auto; margin-right: auto; font-size: 15pt; color:#2d9402;
            font-style: italic;">{{$p->sigla}}</h2></dl>
          <dl class="list-group-item"><h3 style="font-family: helvetica; margin-left: auto; margin-right: auto; font-size: 13pt; color: #0d3a0d; font-weight: bold;
            display: inline;">Abertura: </h3> <h2 style="font-family: helvetica; margin-left: auto; margin-right: auto; font-size: 15pt; color:#2d9402;
            font-style: italic;">{{$p->abertura}}</h2></dl>
          <dl class="list-group-item"><h3 style="font-family: helvetica; margin-left: auto; margin-right: auto; font-size: 13pt; color: #0d3a0d; font-weight: bold;
            display: inline;">Deadline: </h3> <h2 style="font-family: helvetica; margin-left: auto; margin-right: auto; font-size: 15pt; color:#2d9402;
            font-style: italic;">{{$p->deadline}}</h2></dl>
                <dl class="list-group-item"><h3 style="font-family: helvetica; margin-left: auto; margin-right: auto; font-size: 13pt; color: #0d3a0d; font-weight: bold;
                    display: inline;">Área de Concentração: </h3> <h2 style="font-family: helvetica; margin-left: auto; margin-right: auto; font-size: 15pt; color:#2d9402;
                    font-style: italic;">{{$p->areaconcentracao}}</h2></dl>
                  <dl class="list-group-item">
                      <div class="row">
              <form action="RemoverPergunta" method="post"> 
                  <input type="text"  hidden="" value="" name="id"> 
                  <button type="submit" style="margin-right: 10px;" onClick="" id="DeletarUsuario"  value="Deletar Pergunta" class="btn btn-outline-danger btn-sm btn-responsive">
                      <i class="fa fa-trash-o">
                      </i> Excluir Evento
                  </button>
              </form>

              <form action="editarpergunta" method="post"> 
                  <input type="text"  hidden="" value="" name="id"> 
                <button type="submit" id="DeletarUsuario" value="Editar Pergunta" class="btn btn-outline-primary btn-sm btn-responsive">
                    <i class="fa fa-pencil">
                    </i> Editar Evento
                </button>
            </form> 
                      </div>
          </dl>
      </ul>
      </div>             
      @endforeach
    </table>
  </div>
@stop

