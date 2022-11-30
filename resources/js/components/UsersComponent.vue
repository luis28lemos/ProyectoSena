<template>
    <div class="container">
          <h1 class="display-6 text-muted">Users</h1>
          <div class="d-flex flex-row-reverse">
              <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success">Nuevo</button>
          </div>
  
          <table class="table">
              <thead>
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">Id usuario</th>
                      <th scope="col">CC usuario</th>
                      <th scope="col">Estado usuario</th>
                      <th scope="col">contraseña</th>
                      
                      <th scope="col">Acciones</th>
                  </tr>
              
              </thead>           
              <tbody>
                  <tr>
                  <th scope="row">1</th>
                  <td>1048644</td>
                  <td>1003584939</td>
                  <td>venta</td>
                  <td>usu12345</td>
  
                  <td>
                      <button type="button" class="btn btn-primary">Editar</button>
                      <button type="button" class="btn btn-danger">Eliminar</button>
                  </td>
                  </tr>
              </tbody>
                  <tbody><tr>
                    <th scope="row">2</th>
                    <td>104532</td>
                    <td>10567212</td>
                    <td>venta</td>
                    <td>usu1432</td>
    
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
                      <label class="col col-form-label">Id usuario</label>
                      <input class="form-control" type="text" placeholder="" aria-label="default input example">
                  </div>
                 
                    <div class="row">
                        <div class="col  ">
                            <label class="col col-form-label">CC usuario</label>
                            <input class="form-control" type="text" placeholder="" aria-label="default input example">
                        </div>
                        </div>
                    
                          <div class="row">
                              <div class="col  ">
                                  <label class="col col-form-label">Estado usuario</label>
                                  <input class="form-control" type="text" placeholder="" aria-label="default input example">
                              </div>
                              </div>
                              
                                <div class="row">
                                    <div class="col  ">
                                        <label class="col col-form-label">Contraseña</label>
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