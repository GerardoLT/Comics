@extends('Plantilla_1')



@section('Contenido')

<!-- Topic Cards -->
<div class="text-center">
        <br>
        <a class="btn btn-primary active ml-4" href="{{ route('VentArticulos') }}"><i class="fas fa-magic mr-1"></i> Articulos</a>
        <a class="btn btn-default" href="{{ route('VentComics') }}">Comics <i class="fas fa-magic ml-1"></i></a>
    </div>
<div id="cards_landscape_wrap-2">
    
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="card-flyer">
                    <div class="text-box">
                        <div class="image-box">
                            <img src="https://cdn.pixabay.com/photo/2022/06/18/06/54/superman-7269293__340.jpg" alt="" />
                        </div>
                        <div class="text-container">
                            <h6>Articulo 1</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <p>$xxxx.xx</p>
                        </div>
                        <button class="btn btn-theme float-left" type="button">-</button>
                        <label for="add" name="cantidad" value="{{old('cantidad')}}"> 0 </label>
                        <button class="btn btn-theme float-right" type="button">+</button>
                        <div class="card-footer text-center">
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

                <div class="card-flyer">
                    <div class="text-box">
                        <div class="image-box">
                            <img src="https://cdn.pixabay.com/photo/2022/01/04/16/28/joker-6915446__340.jpg" alt="" />
                        </div>
                        <div class="text-container">
                            <h6>Articulo 2</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <p>$xxxx.xx</p>
                        </div>
                        <button class="btn btn-theme float-left" type="button">-</button>
                        <label for="add" name="cantidad" value="{{old('cantidad')}}"> 0 </label>
                        <button class="btn btn-theme float-right" type="button">+</button>
                        <div class="card-footer text-center">
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="card-flyer">
                    <div class="text-box">
                        <div class="image-box">
                            <img src="https://cdn.pixabay.com/photo/2015/09/09/22/07/iron-man-933709__340.jpg" alt="" />
                        </div>
                        <div class="text-container">
                            <h6>Articulo 3</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <p>$xxxx.xx</p>
                        </div>
                        <button class="btn btn-theme float-left" type="button">-</button>
                        <label for="add" name="cantidad" value="{{old('cantidad')}}"> 0 </label>
                        <button class="btn btn-theme float-right" type="button">+</button>
                        <div class="card-footer text-center">
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="card-flyer">
                    <div class="text-box">
                        <div class="image-box">
                            <img src="https://images.pexels.com/photos/4061662/pexels-photo-4061662.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="" />
                        </div>
                        <div class="text-container">
                            <h6>Articulo 4</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <p>$xxxx.xx</p>
                        </div>
                        <button class="btn btn-theme float-left" type="button">-</button>
                        <label for="add" name="cantidad" value="{{old('cantidad')}}"> 0 </label>
                        <button class="btn btn-theme float-right" type="button">+</button>
                        <div class="card-footer text-center">
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Siguiente fila -->
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="card-flyer">
                    <div class="text-box">
                        <div class="image-box">
                            <img src="https://cdn.pixabay.com/photo/2022/06/18/06/54/superman-7269293__340.jpg" alt="" />
                        </div>
                        <div class="text-container">
                            <h6>Articulo 1</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <p>$xxxx.xx</p>
                        </div>
                        <button class="btn btn-theme float-left" type="button">-</button>
                        <label for="add" name="cantidad" value="{{old('cantidad')}}"> 0 </label>
                        <button class="btn btn-theme float-right" type="button">+</button>
                        <div class="card-footer text-center">
                            
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

                <div class="card-flyer">
                    <div class="text-box">
                        <div class="image-box">
                            <img src="https://cdn.pixabay.com/photo/2022/01/04/16/28/joker-6915446__340.jpg" alt="" />
                        </div>
                        <div class="text-container">
                            <h6>Articulo 2</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <p>$xxxx.xx</p>
                        </div>
                        <button class="btn btn-theme float-left" type="button">-</button>
                        <label for="add" name="cantidad" value="{{old('cantidad')}}"> 0 </label>
                        <button class="btn btn-theme float-right" type="button">+</button>
                        <div class="card-footer text-center">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="card-flyer">
                    <div class="text-box">
                        <div class="image-box">
                            <img src="https://cdn.pixabay.com/photo/2015/09/09/22/07/iron-man-933709__340.jpg" alt="" />
                        </div>
                        <div class="text-container">
                            <h6>Articulo 3</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <p>$xxxx.xx</p>
                        </div>
                        <button class="btn btn-theme float-left" type="button">-</button>
                        <label for="add" name="cantidad" value="{{old('cantidad')}}"> 0 </label>
                        <button class="btn btn-theme float-right" type="button">+</button>
                        <div class="card-footer text-center">
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="card-flyer">
                    <div class="text-box">
                        <div class="image-box">
                            <img src="https://images.pexels.com/photos/4061662/pexels-photo-4061662.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="" />
                        </div>
                        <div class="text-container">
                            <h6>Articulo 4</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <p>$xxxx.xx</p>
                        </div>
                        <button class="btn btn-theme float-left" type="button">-</button>
                        <label for="add" name="cantidad" value="{{old('cantidad')}}"> 0 </label>
                        <button class="btn btn-theme float-right" type="button">+</button>
                        <div class="card-footer text-center" id="adminopcion">
                            
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a type="button" href="4" class="mdc-fab mdc-fab--extended">
            <div class="mdc-fab__ripple"></div>
            <span class="material-icons mdc-fab__icon">shopping_cart</span>
            <span class="mdc-fab__label">Add to cart</span>
        </a>
    </div>
</div>

@stop