<!doctype html>
<html lang="pt-BR">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Bora estudar</title>
</head>

<body class="">

  <div class="container">

    <h1>Bora testar esse algoritmo!</h1>

    <form id="form1">
      <div class="mb-3">
        <label for="formMessage" class="form-label">Digite a mensagem que deseja codificar</label>
        <textarea class="form-control" id="message" rows="3"></textarea>
      </div>
      <div class="mb-3">
        <label for="level" class="form-label">Nível</label>
        <input type="range" class="form-range" min="3" max="9" step="2" name="level" id="level">
      </div>
      <select class="form-select mb-3" id="option">
        <option selected value="0">Encriptar</option>
        <option value="1">Decriptar</option>
      </select>
      <button type="submit" form="form1" class="btn btn-success">Vai</button>
    </form>

    <div id="card-message"></div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>