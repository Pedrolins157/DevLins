<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
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
        <div class="col-12 col-sm-6">
          @include('layout.inform')
        </div>
        <div class="col-12 col-sm-6 img-tamplate">
        </div>
      </div>
    </div>
    <div class="img-bottom">
      <div class="container">
      </div>
    </div>
  </section>
  <!-- Conteúdo abaixo da seção das fotos e conteudos-->
  <section class="">
    <div class="container section-content" >
      @include('layout.content')
    </div>
  </section>
<!-- tecnologias -->
  <section style="background-color:#f9f9f9;padding:5px;">
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
  <section class="section-form" style="background-color: #f9f9f9;height:650px;">
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