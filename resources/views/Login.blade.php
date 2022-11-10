@extends('Plantilla_1')


@section('Contenido')

<br>
<section class="mt-4 vh-100 gradient-custom">
    <form action="PostLogin" method="post">
        @csrf
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Ingrese su usuario y password!</p>

                                <div class="form-outline form-white mb-4">
                                    <input type="text" id="User" name="txtUser" class="form-control form-control-lg" value="{{old('txtUser')}}"/>
                                    <label class="form-label" for="USer">Usuario</label>
                                    <p class="text-danger fst-italic">{{ $errors->first('txtUser') }}</p>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" id="password" name="txtPassword" class="form-control form-control-lg" value="{{old('txtPassword')}}"/>
                                    <label class="form-label" for="typePasswordX">Password</label>
                                    <p class="text-danger fst-italic">{{ $errors->first('txtPassword') }}</p>
                                </div>
                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

                                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

@stop