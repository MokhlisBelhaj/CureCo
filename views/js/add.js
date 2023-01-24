var number = document.getElementById("nombre");
var fields = document.getElementById("donnee-produit");


var max;

number.addEventListener('input', function () {
  if (number.value !== "") {
    fields.innerHTML = "";
    max = number.value


    for (let i = 1; i <= max; i++) {
      fields.innerHTML +=
        `
        <p class="text-white text-center pt-3">Donnée de produit ${i}: </p>
          
              <div class="form-group">
                  <label class="mb-1">NOM</label>
                  <input type="text" class="form-control" id="name" name="name[]" required>
              </div>
              <div class="form-group">
                  <label class="mb-1">QUANTITE</label>
                  <input type="number" class="form-control" id="quantite" name="quantite[]" required>
              </div>
              <div class="form-group">
                  <label class="mb-1"> PRIX</label>
                  <input type="number" class="form-control" id="prix" name="prix[]" required>
              </div>
              <div class="form-group">
                  <label class="mb-1">IMAGE</label>
                  <input type="file" class="form-control" id="image" name="image[]" required>
              </div>
          
        `
    }
  } else {
    fields.innerHTML = "";
  };
});