window.onload = function() {
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
    e.preventDefault();

    document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
    });
  });
  });
};


function rota($pdo) {
  <?php

  //Incluir a conexão do BD
  include_once("conexao.php");

  $sql = "SELECT * FROM usuario";

  $result = $pdo->query($sql);
  while ($row = $result->fetch()) {

      echo "matricula: ".$row['email']." - Nome:".$row['senha']."\n";


      $texto = "Olá";

      echo "<span style=\"color:#FF0000;\"> ".$texto." </span> \n";


      $email = $row['email'];
      $senha = $row['senha'];


      // Chamar a tela e inserir os valores no input text
    }


   ?>
}
