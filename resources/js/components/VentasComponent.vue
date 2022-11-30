<template>
    <div class="container">
          <h1 class="display-6 text-muted">Ventas</h1>
          <div class="d-flex flex-row-reverse">
              <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success">Nuevo</button>
          </div>
  
          <table class="table">
              <thead>
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">Id</th>
                      <th scope="col">Cliente venta</th>
                      <th scope="col">Estado venta</th>
                      <th scope="col">Numero venta</th>
                      <th scope="col">Total</th>
                      <th scope="col">Usuario</th>
                      <th scope="col">Fecha</th>
                      
                      <th scope="col">Acciones</th>
                  </tr>
              
              </thead>           
              <tbody>
                  <tr>
                  <th scope="row">1</th>
                  <td>15432</td>
                  <td>Carlos guillermo</td>
                  <td>Compra</td>
                  <td>009</td>
                  <td>2</td>
                  <td>Carlos</td>
                  <td>2022-09-01</td>
  
                  <td>
                      <button type="button" class="btn btn-primary">Editar</button>
                      <button type="button" class="btn btn-danger">Eliminar</button>
                  </td>
                  </tr>
              </tbody>
                  <tbody><tr>
                    <th scope="row">2</th>
                    <td>15436</td>
                    <td>Camilo vargas</td>
                    <td>Compra</td>
                    <td>012</td>
                    <td>3</td>
                    <td>Camilo</td>
                    <td>2022-06-11</td>
    
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
                      <label class="col col-form-label">Id</label>
                      <input class="form-control" type="text" placeholder="" aria-label="default input example">
                  </div>
                 
                    <div class="row">
                        <div class="col  ">
                            <label class="col col-form-label">Cliente venta</label>
                            <input class="form-control" type="text" placeholder="" aria-label="default input example">
                        </div>
                        </div>
                    
                          <div class="row">
                              <div class="col  ">
                                  <label class="col col-form-label">Estado venta</label>
                                  <input class="form-control" type="text" placeholder="" aria-label="default input example">
                              </div>
                              </div>
                              
                                <div class="row">
                                    <div class="col  ">
                                        <label class="col col-form-label">Numero venta</label>
                                        <input class="form-control" type="text" placeholder="" aria-label="default input example">
                                    </div>
                                    </div>
                                   
                                      <div class="row">
                                          <div class="col  ">
                                              <label class="col col-form-label">Total</label>
                                              <input class="form-control" type="text" placeholder="" aria-label="default input example">
                                          </div>
                                          </div>
                                          
                                            <div class="row">
                                                <div class="col  ">
                                                    <label class="col col-form-label">Usuario</label>
                                                    <input class="form-control" type="text" placeholder="" aria-label="default input example">
                                                  </div>
                                              </div>

                                              <div class="row">
                                                <div class="col  ">
                                                    <label class="col col-form-label">Fecha</label>
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