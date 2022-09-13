<?php require __DIR__ . "/../share/head.php"; ?>

<h1>Escolher Eletiva</h1>
<hr>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nome completo</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Zezinho Cleonildo da Silva...">
</div>

<select class="form-select" aria-label="Default select example">
  <option selected>Selecione a Eletiva desejada</option>
  <option value="1">Mídias Digitais</option>
  <option value="2">Matemática Basica</option>
  <option value="3">Oratória</option>
</select>
<br>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Por que você deveria entrar nesta eletiva?</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<br>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Matrícula</label>
  <input type="id" class="form-control" id="Matrícula" placeholder="484842315516">
</div>

<?php require __DIR__ . "/../share/footer.php"; ?>