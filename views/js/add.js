var number = document.getElementById("nombre");
var fields = document.getElementById("donnee-produit");


var max;

number.addEventListener('input', function () {
  if (number.value !== "") {
    fields.innerHTML = "";
    max = number.value


    for (let i = 1; i <= max; i++) {
      console.log(max);
      fields.innerHTML +=
        `
        <p class="text-white text-center pt-3">Donnée de produit ${i}: </p>
          <form action="" method="post">
              <div class="form-group">
                  <label class="mb-1">NOM</label>
                  <input type="text" class="form-control" id="name${i}" name="name" required>
              </div>
              <div class="form-group">
                  <label class="mb-1">QUANTITE</label>
                  <input type="text" class="form-control" id="quantite" name="quantite${i}" required>
              </div>
              <div class="form-group">
                  <label class="mb-1"> PRIX</label>
                  <input type="text" class="form-control" id="prix" name="prix${i}" required>
              </div>
              <div class="form-group">
                  <label class="mb-1">IMAGE</label>
                  <input type="file" class="form-control" id="image" name="image${i}" required>
              </div>
             
          </form>
        `
    }
  } else {
    fields.innerHTML = "";
  };
});