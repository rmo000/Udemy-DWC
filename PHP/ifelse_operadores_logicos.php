<html>

<head>
  <meta charset="utf-8">
  <title>Curso PHP</title>
</head>

<body>
  <?php

  //operadores condicionais
  //==
  //===
  //!= ou <>
  //!==
  //<
  //>
  //<=
  //>=

  //operadores lógicos
  //E: && ou AND -> retorna verdadeiro se todos os resultados das expressões forem verdadeiros
  //OU: || ou OR -> retorna verdadeiro se apenas um dos resultados das expressões for verdadeiro
  //XOR: XOR -> retorna verdadeiro se uma das expressões for verdadeira e a outra falsa, ou vice-versa
  //! -> inverte o resultado retornado pela expressão

  //() estabelecer precedência

  if ((22 == 22 && 3 == 3) || 5 != 5) {
    echo 'Verdadeiro';
  } else {
    echo 'Falso';
  }
  ?>
</body>

</html>