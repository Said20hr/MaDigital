@extends('admin.includes.master-new')
@section('title', 'dashboard')
@section('content')
    <div class="main-content">
     @include('admin/includes/header-new') 
        <div class="home-section-four pt-5">
            <div class="m-md-4">
                <div class="container-fluid custom-tabs">
                    <div class="row pt-4">

                        <div class="col-lg-12">
                            <div class="card bg-light" style="border-radius: 10px !important;">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-center align-items-center fw-bolder">
                                        <div style="font-size: 20px;color: rgba(68,68,68,0.98)">Album Details</div>
                                    </div>
                                    <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                                         style="width: 30px;height: 30px"><i class="fa fa-question text-white"></i></div>
                                </div>
                            </div>
                            <div class="row justify-content-center m-auto mb-4">
                                <div class="col-lg-8 col-md-8">
                                <form action="">
                                    <div class="row mt-4">
                                        <div class="col-md-6 col-lg-6 my-3">
                                            <div class="form-group focused">
                                            <label class="form-control-label" for="Language">Language <span class="text-danger">*</span></label>
                                            <select type="date" name="Language" id="Language" class="form-control form-control-select ">
                                                <option value="" class="form-control form-control-select py-2">English</option>
                                                @foreach($languages as $language)
                                                <option value="{{$language[0]}}" class="form-control form-control-select py-2">{{$language[0]}}</option>
                                                @endforeach
                                            </select>
                                            @error('departments')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 my-3">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="Departments">Explicit Content <span class="text-danger">*</span></label>
                                                <select type="date" name="department" id="Departments" class="form-control form-control-select ">
                                                    <option value="" class="form-control form-control-select py-2" disabled selected>Select</option>
                                                    <option value="" class="form-control form-control-select py-2">Explicit</option>
                                                    <option value="" class="form-control form-control-select py-2">Not Explicite</option>
                                                    <option value="" class="form-control form-control-select py-2">Cleaned Version</option>
                                                </select>
                                                @error('departments')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    @livewire('dropdowns')
                                    <div class="row mt-4">
                                        <div class="col-md-12 col-lg-12 my-3">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for=""> Album/Single/EP Title <span class="text-danger">*</span></label>
                                                <div class="text-muted mb-4" style="font-size: 16px">
                                                    If you don’t have a formality agreed level, your artist name or barand name will be sufficient. description such as “indie” , “independent”, “non” will not be accepted.
                                                </div>
                                                <input type="text" name="album" id="input-rate"
                                                       class="form-control @error('album') is-invalid @enderror"
                                                       placeholder="Album" value="{{old('album')}}" required="">
                                                @error('album')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 my-3">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for=""> Compilation Album <span class="text-danger">*</span></label>
                                                <input type="text" name="compilation" id="input-rate"
                                                       class="form-control @error('compilation') is-invalid @enderror"
                                                       placeholder="Compilation" value="{{old('compilation')}}" required="">
                                                @error('compilation')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-12 my-3">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for=""> Record Label Name  <span class="text-danger">*</span></label>
                                                <div class="text-muted mb-4" style="font-size: 16px">
                                                    If you don’t have a formality agreed level, your artist name or barand name will be sufficient. description such as “indie” , “independent”, “non” will not be accepted.
                                                </div>
                                                <input type="text" name="record" id="input-rate"
                                                       class="form-control @error('record') is-invalid @enderror"
                                                       placeholder=" Record Label Name" value="{{old('record')}}" required="">
                                                @error('record')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 my-3">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="">Composition copyright © <span class="text-danger">*</span></label>
                                                <div class="text-muted mb-4" style="font-size: 16px">
                                                    If you don’t have a formality agreed level, your artist name or barand name will be sufficient. description such as “indie” , “independent”, “non” will not be accepted.
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <input type="year" name="composition[year]" id="input-rate"
                                                               class="form-control @error('composition[year]') is-invalid @enderror px-4"
                                                               placeholder="2021" value="{{old('composition[year]')}}" required="">
                                                        @error('composition[year]')
                                                        <div class="invalid-feedback">
                                                            {{$message}}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <input type="text" name="composition[desc]" id="input-rate"
                                                               class="form-control @error('composition[desc]') is-invalid @enderror px-4"
                                                               placeholder="Under exclusive license to maDigital" value="{{old('rate')}}" required="">
                                                        @error('composition[desc]')
                                                        <div class="invalid-feedback">
                                                            {{$message}}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 my-3">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="">Orginally Released <span class="text-danger">*</span></label>
                                                <input type="date" name="org_rel" id="input-rate"
                                                       class="form-control @error('org_rel') is-invalid @enderror"
                                                        value="{{old('org_rel')}}" required="">
                                                @error('org_rel')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 my-3">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="">Pre Order date </label>
                                                <input type="date" name="pre_ord" id="input-rate"
                                                       class="form-control @error('pre_ord') is-invalid @enderror"
                                                       value="{{old('pre_ord')}}" required="">
                                                @error('pre_ord')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 my-3">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="">Sales Start date</label>
                                                <input type="date" name="sal_st" id="input-rate"
                                                       class="form-control @error('sal_st') is-invalid @enderror"
                                                       value="{{old('sal_st')}}" required="">
                                                @error('sal_st')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                        <div class="px-4 py-4" style="border-radius: 15px;border:1px #c6c5c5 solid;background: rgba(255,255,255,0.07)">

                                            <div class="col-md-6 col-lg-6 my-3">
                                                <div class="form-group focused">
                                                    <label class="form-control-label" for=""> Album Version <span class="text-danger">*</span></label>
                                                    <div class="mt-3">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                            <label class="form-check-label" for="inlineRadio2">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group focused mt-3">
                                                <label class="form-control-label mb-3" for="">Artist name <span class="text-danger">*</span></label>
                                                <div class="row mb-3" >
                                                    <div class="col-md-3">
                                                        <input type="text" name="" id="input-rate"
                                                               class="form-control"
                                                             value="Primary" disabled  required="">
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="" id="input-rate"
                                                               class="form-control"
                                                               value="{{auth()->user()->name}}" disabled  required="">
                                                    </div>

                                                </div>
                                                <div class="field"></div>

                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <button class="btn btn-primary btn-lg col-md-2 py-2 add" type="button" data-id="1" style="font-size:18px;border-radius: 15px">Add</button>
                                            </div>
                                        </div>
                                </form>
                            </div>
                            </div>
                            <div class="card mt-5" style="border-radius: 10px !important;">
                                <div class="card-body d-flex justify-content-between align-items-center text-center">
                                    <div class="col-md-4 d-flex justify-content-center">
                                        <div class="d-flex justify-content-center align-items-center" style="font-size: 26px;color: rgba(68,68,68,0.98);border-radius: 50% ;border: 2px #3858f9 solid;width:50px;height: 50px" >
                                            <i class="fa fa-chevron-left text-primary "></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-primary btn-lg  py-3 col-md-4" type="button"  style="font-size:20px;border-radius: 15px">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="modal fade" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-500" id="exampleModalLongTitle">Edit Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="form-close-icon">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="input-icons">
                                    <i class="fa fa-user icon"></i>
                                    <label for="firstName" class="col-sm-4"><span class="h6 small bg-white text-muted pt-1 pl-2 pr-2">First Name</span></label>
                                    <input type="text" style="padding-left: 35px;" class="form-control mt-n3 input-field" id="firstName">
                                </div>

                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-icons">
                                    <i class="fa fa-user icon"></i>
                                    <label for="lastName" class="col-sm-4"><span class="h6 small bg-white text-muted pt-1 pl-2 pr-2">Last Name</span></label>
                                    <input type="text" style="padding-left: 35px;" class="form-control mt-n3 input-field" id="lastName">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <div class="input-icons">
                                    <i class="fa fa-user icon"></i>
                                    <label for="userName" class="col-sm-2"><span class="h6 small bg-white text-muted pt-1 pl-2 pr-2">Username</span></label>
                                    <input type="text" style="padding-left: 35px;" class="form-control mt-n3 input-field" id="userName">
                                </div>

                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-icons">
                                    <i class="fas fa-envelope icon"></i>
                                    <label for="email" class="col-sm-2"><span class="h6 small bg-white text-muted pt-1 pl-2 pr-2">Email</span></label>
                                    <input type="text" style="padding-left: 35px;" class="form-control mt-n3 input-field" id="email">
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="input-icons">
                                    <i class="fas fa-phone-alt phone-icon"></i>
                                    <label for="conNumber" class="col-sm-4"><span class="h6 small bg-white text-muted pt-1 pl-2 pr-2">Contact Number</span></label>
                                    <input type="number" style="padding-left: 35px;" class="form-control mt-n3 input-field" id="conNumber">
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="input-icons">
                                    <label for="country" class="col-sm-2"><span class="h6 small bg-white text-muted pt-1 pl-2 pr-2">Country</span></label>
                                    <select id="country" class="form-control mt-n3 select-payment">
                                        <option selected disabled>Select Country</option>
                                       @foreach($countries as $country)
                                        <option  value="{{$country}}" class="form-control form-control-alternative py-2">{{$country}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>


                            <div class="form-group col-md-12">
                                <div class="input-icons">
                                    <!-- <i class="fas fa-envelope icon"></i> -->
                                    <label for="payMethod" class="col-sm-4"><span class="h6 small bg-white text-muted pt-1 pl-2 pr-2">Payment Method</span></label>
                                    <select id="payMethod" class="form-control mt-n3 select-payment">
                                        <option selected>Select Payment Method</option>
                                        <option>Payment 1</option>
                                        <option>Payment 2</option>
                                        <option>Payment 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="input-icons">
                                    <!-- <i class="fas fa-phone-alt icon"></i> -->
                                    <label for="password" class="col-sm-2"><span class="h6 small bg-white text-muted pt-1 pl-2 pr-2">Password</span></label>
                                    <input type="number" style="padding-left: 35px;" class="form-control mt-n3 input-field" id="password">
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="input-icons">
                                    <!-- <i class="fas fa-phone-alt icon"></i> -->
                                    <label for="confPassword" class="col-sm-4"><span class="h6 small bg-white text-muted pt-1 pl-2 pr-2">Confirm Password</span></label>
                                    <input type="number" style="padding-left: 35px;" class="form-control mt-n3 input-field" id="confPassword">
                                </div>
                            </div>


                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-one">Update</button>
                            <button type="submit" class="btn btn-primary btn-two">Update</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>


@endsection
