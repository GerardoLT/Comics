@extends('Plantilla_1')


@section('Contenido')

<!-- Topic Cards -->
<div class="text-center">
        <br>
        <a class="btn btn-default ml-4" href="{{ route('VentArticulos') }}"><i class="fas fa-magic mr-1"></i>Articulos</a>
        <a class="btn btn-primary active" href="{{ route('VentComics') }}">Comics <i class="fas fa-magic ml-1"></i></a>
    </div>
<div id="cards_landscape_wrap-2">
    
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="card-flyer">
                    <div class="text-box">
                        <div class="image-box">
                            <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/c4c0230e-617c-4870-b158-1cb768fe3045/dbei3yc-bf7aeb01-7b2a-4328-90e6-c4af28ff4e28.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2M0YzAyMzBlLTYxN2MtNDg3MC1iMTU4LTFjYjc2OGZlMzA0NVwvZGJlaTN5Yy1iZjdhZWIwMS03YjJhLTQzMjgtOTBlNi1jNGFmMjhmZjRlMjguanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.gYzOcfwqszK782AuNZHcy17fu4qAC1FWPbH3aoYmb34" alt="" />
                        </div>
                        <div class="text-container">
                            <h6>Comic 1</h6>
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
                            <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/c4c0230e-617c-4870-b158-1cb768fe3045/db0r870-5d777120-cea5-41be-9730-8f997b297d30.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2M0YzAyMzBlLTYxN2MtNDg3MC1iMTU4LTFjYjc2OGZlMzA0NVwvZGIwcjg3MC01ZDc3NzEyMC1jZWE1LTQxYmUtOTczMC04Zjk5N2IyOTdkMzAuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.PRO710aQKhpp9jMS5eilotNFMqZ3dTTh2vRMkmLsVso" alt="" />
                        </div>
                        <div class="text-container">
                            <h6>Comic 2</h6>
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
                            <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/fd7c0697-63f5-4f26-8db8-6dad33e98c46/dcomnc5-c60e0955-a532-4048-a189-70c2565413a2.jpg/v1/fill/w_600,h_849,q_75,strp/venom_by_ry_spirit_dcomnc5-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9ODQ5IiwicGF0aCI6IlwvZlwvZmQ3YzA2OTctNjNmNS00ZjI2LThkYjgtNmRhZDMzZTk4YzQ2XC9kY29tbmM1LWM2MGUwOTU1LWE1MzItNDA0OC1hMTg5LTcwYzI1NjU0MTNhMi5qcGciLCJ3aWR0aCI6Ijw9NjAwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.IAhyoExlYyOmdnLvWJ5FrvEPOFg-K_ISw89b63EWAUI" alt="" />
                        </div>
                        <div class="text-container">
                            <h6>Comic 3</h6>
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
                            <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/fd7c0697-63f5-4f26-8db8-6dad33e98c46/d7fhr82-ff3c82e1-d1c8-4d5e-a935-64437cab0d8d.jpg/v1/fill/w_600,h_928,q_75,strp/the_winter_soldier_by_ry_spirit_d7fhr82-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9OTI4IiwicGF0aCI6IlwvZlwvZmQ3YzA2OTctNjNmNS00ZjI2LThkYjgtNmRhZDMzZTk4YzQ2XC9kN2ZocjgyLWZmM2M4MmUxLWQxYzgtNGQ1ZS1hOTM1LTY0NDM3Y2FiMGQ4ZC5qcGciLCJ3aWR0aCI6Ijw9NjAwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.4aGBkcL8xkcc-P5oPHicBQ1OGNwVwsVwQlfHlHWr_Jc" alt="" />
                        </div>
                        <div class="text-container">
                            <h6>Comic 4</h6>
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
                            <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/c4c0230e-617c-4870-b158-1cb768fe3045/dbfmkzr-b9204e26-14fd-4523-a4d2-66fe0325f1a5.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2M0YzAyMzBlLTYxN2MtNDg3MC1iMTU4LTFjYjc2OGZlMzA0NVwvZGJmbWt6ci1iOTIwNGUyNi0xNGZkLTQ1MjMtYTRkMi02NmZlMDMyNWYxYTUuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.kHCVjJuLy1zIxDCTwu8pDtjeDvuNDKgAlZ0622dqWJg" alt="" />
                        </div>
                        <div class="text-container">
                            <h6>Comic 5</h6>
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
                            <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/c4c0230e-617c-4870-b158-1cb768fe3045/db0r870-5d777120-cea5-41be-9730-8f997b297d30.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2M0YzAyMzBlLTYxN2MtNDg3MC1iMTU4LTFjYjc2OGZlMzA0NVwvZGIwcjg3MC01ZDc3NzEyMC1jZWE1LTQxYmUtOTczMC04Zjk5N2IyOTdkMzAuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.PRO710aQKhpp9jMS5eilotNFMqZ3dTTh2vRMkmLsVso" alt="" />
                        </div>
                        <div class="text-container">
                            <h6>Comic 6</h6>
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
                            <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/fd7c0697-63f5-4f26-8db8-6dad33e98c46/dcomnc5-c60e0955-a532-4048-a189-70c2565413a2.jpg/v1/fill/w_600,h_849,q_75,strp/venom_by_ry_spirit_dcomnc5-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9ODQ5IiwicGF0aCI6IlwvZlwvZmQ3YzA2OTctNjNmNS00ZjI2LThkYjgtNmRhZDMzZTk4YzQ2XC9kY29tbmM1LWM2MGUwOTU1LWE1MzItNDA0OC1hMTg5LTcwYzI1NjU0MTNhMi5qcGciLCJ3aWR0aCI6Ijw9NjAwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.IAhyoExlYyOmdnLvWJ5FrvEPOFg-K_ISw89b63EWAUI" alt="" />
                        </div>
                        <div class="text-container">
                            <h6>Comic 7</h6>
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
                            <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/fd7c0697-63f5-4f26-8db8-6dad33e98c46/d7fhr82-ff3c82e1-d1c8-4d5e-a935-64437cab0d8d.jpg/v1/fill/w_600,h_928,q_75,strp/the_winter_soldier_by_ry_spirit_d7fhr82-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9OTI4IiwicGF0aCI6IlwvZlwvZmQ3YzA2OTctNjNmNS00ZjI2LThkYjgtNmRhZDMzZTk4YzQ2XC9kN2ZocjgyLWZmM2M4MmUxLWQxYzgtNGQ1ZS1hOTM1LTY0NDM3Y2FiMGQ4ZC5qcGciLCJ3aWR0aCI6Ijw9NjAwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.4aGBkcL8xkcc-P5oPHicBQ1OGNwVwsVwQlfHlHWr_Jc" alt="" />
                        </div>
                        <div class="text-container">
                            <h6>comic 8</h6>
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