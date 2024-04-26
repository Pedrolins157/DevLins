<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevLins</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- navbar -->
  <section style="height:800px;">
    <div class="container">
        @include('layout.nav')
      <div class="row">
        <div class="col-6">
          @include('layout.inform')
        </div>
        <div class="col-6 img-tamplate">
          <!-- Conteúdo da seção das fotos -->
        </div>
      </div>
    </div>
    <div class="img-bottom">
      <div class="container">
      </div>
    </div>
  </section>
  <!-- Conteúdo abaixo da seção das fotos e conteudos-->
  <section style="position:relative;top:5%;">
    <div class="container" style="max-width:1200px;margin-left: 21%;">
      @include('layout.content')
    </div>
  </section>
<!-- tecnologias -->
  <section style="background-color:#f3f3f3;padding:5px;">
    <div class="container mt-5 mb-5">
      @include('layout.technology')
    </div>
  </section>
<!-- Informe -->
  <section>
      <div class="container mt-5">
      @include('layout.reports')
      </div>
  </section>
<!-- formulario de cadastro -->
  <section style="background-color: #1071a9;height:350px;">
    <div class="container mt-5">
    @include('layout.form')
    </div>
  </section>
  <section style="background-color: writh;height:400px;">
    <div class="container mt-5">
    </div>
  </section>

  <!-- footer -->
  @include('layout.footer')

</body>
</html>