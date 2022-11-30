<template>
  <div class="container">
        <h1 class="display-6 text-muted">Clientes</h1>
        <div class="d-flex flex-row-reverse">
            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success">Nuevo</button>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Id cliente</th>
                    <th scope="col">Nombre cliente</th>
                    <th scope="col">CC cliente</th>
                    <th scope="col">telefono</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Email</th>
                    
                    <th scope="col">Acciones</th>
                </tr>
            
            </thead>           
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>1048644</td>
                <td>Luis Gabriel</td>
                <td>1003595069</td>
                <td>3147248288</td>
                <td>cra-24-124</td>
                <td>arcilalemos@gmail.com</td>

                <td>
                    <button type="button" class="btn btn-primary">Editar</button>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </td>
                </tr>
            </tbody>
                <tbody><tr>
                  <th scope="row">2</th>
                  <td>104532</td>
                  <td>Juan jose</td>
                  <td>12472834</td>
                  <td>313245674</td>
                  <td>cra-13-324</td>
                  <td>juanjo@gmail.com</td>
  
                  <td>
                      <button type="button" class="btn btn-primary">Editar</button>
                      <button type="button" class="btn btn-danger">Eliminar</button>
                  </td>
            
        </tr>
            
            </tbody>
        </table>
        
 
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <div class="container">
            <div class="row">
                    <label class="col col-form-label">Id cliente</label>
                    <input class="form-control" type="text" placeholder="" aria-label="default input example">
                </div>
               
                  <div class="row">
                      <div class="col  ">
                          <label class="col col-form-label">Nombre cliente</label>
                          <input class="form-control" type="text" placeholder="" aria-label="default input example">
                      </div>
                      </div>
                  
                        <div class="row">
                            <div class="col  ">
                                <label class="col col-form-label">CC cliente</label>
                                <input class="form-control" type="text" placeholder="" aria-label="default input example">
                            </div>
                            </div>
                            
                              <div class="row">
                                  <div class="col  ">
                                      <label class="col col-form-label">Telefono</label>
                                      <input class="form-control" type="text" placeholder="" aria-label="default input example">
                                  </div>
                                  </div>
                                 
                                    <div class="row">
                                        <div class="col  ">
                                            <label class="col col-form-label">Direccion</label>
                                            <input class="form-control" type="text" placeholder="" aria-label="default input example">
                                        </div>
                                        </div>
                                        
                                          <div class="row">
                                              <div class="col  ">
                                                  <label class="col col-form-label">Email</label>
                                                  <input class="form-control" type="text" placeholder="" aria-label="default input example">
                                                </div>
                                            </div>              
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                              <button type="button" class="btn btn-primary">Guardar</button>
                                            </div>
                                          </div>              
                                                     
                                                    
                                               
          
        
      </div>
    </div>
  </div>
  
  
    </div>
    </div>


  
  
</template>

<script>

</script>