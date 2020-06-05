<div class="formulario">
  <form action="grava.php" method="post">
    <label>Nome produto</label>
    <input type="text" name="nome" placehold="nome">
    <label>Fornecedor</label>
    <input type="text" name="Forne" placehold="nome">
    <label>Quantidade</label>
    <input type="number" name="qtd" placehold="nome">
    <button name="enviar">Cadastrar</button>
    <button>Listar</button>
  </form>
</div>

<style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
  .formulario
  {
    display: flex;
    align-items: center;
    margin: 20px 15px;
    width: 1140px;
    height: 250px;
    background-color: #fff;
    flex-direction: column;
    justify-content: space-between;
    color: #b4afaf;
  }
  form input{
    display: flex;
    max-width:100%;
    align-items: center;
  }
  input{
    width: 500px;
    margin: 10px;
  }
  label{
    margin: 5px;
  }
  button{
    width: 100px;
    text-align: center;
    border-radius: 20px;
    background-color: #f7f5f5;
    justify-content: space-between;
    color: #b4afaf;
  }
  @media(max-width: 375px)
  {
    .formulario{
      width: 375px;
      height: 250px;
      flex-direction: row;
    }
    input{
      width: 270px;
    }
  }
  @media(min-width:400px) and (max-width: 600px)
  {
    .formulario{
      width: 600px;
      height: 250px;
      flex-direction: row;
    }
    input{
      width: 370px;
    }
  }
  @media(min-width: 601px) and   (max-width: 800px)
  {
    .formulario{
      width: 800px;
      height: 200px;
    }
    input{
      width: 700px;
    }
  }
</style>