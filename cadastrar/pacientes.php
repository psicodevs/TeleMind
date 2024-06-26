<?php include('cabecalho.php'); ?>
<?php include("conexao.php"); ?>

  <div class="container">

    <div>
      <img id="cabecalho" src="assets/group-490.svg"
        alt=" Imagens de uma casinha, uma agenda, um calendário e o símbolo de um cifrão">
    </div>

    <section class="header">
      <h2>Consultas</h2>
    </section>

    <form id="form" class="form">
      <div class="form-content">
        <label for="username">Nome</label>
        <input type="text" id="username" placeholder="Nome do Paciente..." />
        <a>Aqui vai a mensagem de erro....</a>
      </div>

      <div class="form-content">
        <label for="cpf">CPF</label>
        <input type="text" id="cpf" placeholder="CPF..." />
        <a>Aqui vai a mensagem de erro....</a>
      </div>

      <div class="form-content">
        <label for="date">Data de Nascimento</label>
        <input type="date" id="date" placeholder="Data de Nasc..." />
        <a>Aqui vai a mensagem de erro....</a>
      </div>

      <div class="form-content">
        <label for="endereco">Endereço</label>
        <input type="text" id="endereco" placeholder="Endereço..." />
        <a>Aqui vai a mensagem de erro....</a>
      </div>

      <div class="form-content">
        <label for="telefone">Telefone</label>
        <input type="number" id="telefone" placeholder="Telefone..." />
        <a>Aqui vai a mensagem de erro....</a>
      </div>

      <div class="form-content">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Digite o seu email..." />
        <a>Aqui vai a mensagem de erro....</a>
      </div>

      <div class="form-content">
        <label for="responsaveis">Responsáveis</label>
        <input type="text" id="responsaveis" placeholder="Responsáveis..." />
        <a>Aqui vai a mensagem de erro....</a>
      </div>

      <div class="form-content">
        <label for="cid">CID</label>
        <input type="text" id="cid" placeholder="CID..." />
        <a>Aqui vai a mensagem de erro....</a>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="descricao">Descrição</label>
        </div>
        <div class="col-75">
          <textarea id="descricao" name="descricao" placeholder=" Escreva algo..." style="height:200px"></textarea>
        </div>
      </div>
      
      <button type="submit">Pesquisar</button>

      
    </form>

  </div>

  <script src="./script.js"></script>

  <?php include('rodape.php'); ?>
  