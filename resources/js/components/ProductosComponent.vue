<template>
    <div class="container">
          <h1 class="display-6 text-muted">Productos</h1>
          <div class="d-flex flex-row-reverse">
              <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success">Nuevo</button>
          </div>
  
          <table class="table">
              <thead>
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">Id</th>
                      <th scope="col">Codigo producto</th>
                      <th scope="col">Nombre producto</th>
                      <th scope="col">Cantidad producto</th>
                      <th scope="col">precio</th>
                      <th scope="col">fecha</th>
                      <th scope="col">Id referencia</th>
                      
                      <th scope="col">Acciones</th>
                  </tr>
              
              </thead>           
              <tbody>
                  <tr>
                  <th scope="row">1</th>
                  <td>24343</td>
                  <td>334</td>
                  <td>camiseta tipo polo</td>
                  <td>1</td>
                  <td>60000</td>
                  <td>23/01/2021</td>
                  <td>33225</td>
  
                  <td>
                      <button type="button" class="btn btn-primary">Editar</button>
                      <button type="button" class="btn btn-danger">Eliminar</button>
                  </td>
                  </tr>
              </tbody>
                  <tbody><tr>
                    <th scope="row">2</th>
                    <td>104532</td>
                    <td>335</td>
                    <td>sueter blanco</td>
                    <td>1</td>
                    <td>30000</td>
                    <td>28/11/2020</td>
                    <td>57843</td>
    
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
                            <label class="col col-form-label">Codigo producto</label>
                            <input class="form-control" type="text" placeholder="" aria-label="default input example">
                        </div>
                        </div>
                    
                          <div class="row">
                              <div class="col  ">
                                  <label class="col col-form-label">Nombre producto</label>
                                  <input class="form-control" type="text" placeholder="" aria-label="default input example">
                              </div>
                              </div>
                              
                                <div class="row">
                                    <div class="col  ">
                                        <label class="col col-form-label">Cantidad producto</label>
                                        <input class="form-control" type="text" placeholder="" aria-label="default input example">
                                    </div>
                                    </div>
                                   
                                      <div class="row">
                                          <div class="col  ">
                                              <label class="col col-form-label">Precio</label>
                                              <input class="form-control" type="text" placeholder="" aria-label="default input example">
                                          </div>
                                          </div>
                                          
                                            <div class="row">
                                                <div class="col  ">
                                                    <label class="col col-form-label">fecha</label>
                                                    <input class="form-control" type="text" placeholder="" aria-label="default input example">
                                                  </div>
                                              </div>
                                              <div class="row">
                                                <div class="col  ">
                                                    <label class="col col-form-label">Id referencia</label>
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