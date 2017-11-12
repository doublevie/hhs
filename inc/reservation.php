<section class="fdb-block pt-0 " id="reservation" style="background:#EDEDED">

    <div class="container">
      <h1 class="nt">Reserver</h1>
      <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5">
          <form>

            <div class="row mt-4">
              <div class="col">
                <input type="text" class="form-control" placeholder="Nom" name="nom" required>
              </div>
              </div>

              <div class="row mt-4">
              <div class="col">
                <input type="text" class="form-control" placeholder="Prenom" name="prenom" required>
              </div>
              </div>


            <div class="row mt-4">
              <div class="col">
                <input type="text" class="form-control" placeholder="Numero de telephone" name="telephone">
              </div>
            </div>
            <div class="row mt-4">
              <div class="col">
                <input type="email" class="form-control" placeholder="Email"  name="email">
              </div>
            </div>
            <div class="row mt-4">
              <div class="col">
                <select class="form-control" name="type">
<option value="-" >Type de chambre </option>
<option value="1" >Single</option>
<option value="2" >Double</option>
<option value="3" >mini suite</option>
<option value="4" >suite</option>

               </select>
              </div>
            </div>




        </div>

        <div class="col-12 col-md-6 ml-auto pt-5 pt-md-0">




            <div class="row mt-4">
              <div class="col">
                 <select class="form-control" name="adultes">
<option value="-" >nombre d'adultes</option>
<option value="1" >1</option>
<option value="2" >2</option>
<option value="3" >3</option>
<option value="4" >4</option>
<option value="5" >5</option>
<option value="6" >6</option>
<option value="7" >7</option>
<option value="8" >8</option>
                </select>
              </div>

            </div>

            <div class="row mt-4">
              <div class="col">
                 <select class="form-control" name="enfantes">
<option value="-" >nombre d'enfants </option>
<option value="1" >1</option>
<option value="2" >2</option>
<option value="3" >3</option>
<option value="4" >4</option>
<option value="5" >5</option>
<option value="6" >6</option>
<option value="7" >7</option>
<option value="8" >8</option>
                </select>
              </div>

            </div>

            <div class="row mt-4">
              <div class="col">
                <input type="date" class="form-control"  name="date1" placeholder="Date d'arivrivée">
              </div>
            </div>

            <div class="row mt-4">
              <div class="col">
                <input type="date" class="form-control"  name="date2" placeholder="Date de départ">
              </div>
            </div>



            <div class="row mt-4">
              <div class="col">
                <button type="submit" class="btn btn-warning">Valider</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
