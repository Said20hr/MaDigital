@extends('admin.includes.master-new')
@section('title', 'dashboard')
@section('stylesheet')
    <link rel="stylesheet" href="assets/css/store.css" type="text/css">
@endsection

@section('content')
    <div class="main-content">


        @include('admin/includes/header-new')
        <div class="home-section-four pt-5">
            <div class="m-md-4">
                <div class="manage-store-containner">
                    <div class="card bg-light" style="border-radius: 10px !important; width: 100%; margin: 1em 0 2em 0">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-center align-items-center fw-bolder">
                                <div style="font-size: 20px;color: rgba(68,68,68,0.98)">Manage Store</div>
                            </div>
                            <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                                style="width: 30px;height: 30px"><i class="fa fa-question text-white"></i></div>
                        </div>
                    </div>

                    <div class="select-store">
                        <div class="select-store__title">
                            <h5>Select Store</h5>
                            <span>9</span>
                        </div>
                        <div class="select-store__controls">
                            <div class="select-store__search-containner">
                                <i class="fal fa-search"></i>
                                <input type="text" placeholder="Search">
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Select All</label>
                            </div>
                        </div>
                        <div class="select-store__stores-containner">
                            <div class="select-store__store">
                                <div class="img-containner">
                                    <img src="img/spotify.png" alt="spotify logo">
                                </div>
                                <div class="store-name">
                                    Spotify
                                </div>
                            </div>
                            <div class="select-store__store select-store__store--selected">
                                <div class="img-containner">
                                    <img src="img/spotify.png" alt="spotify logo">
                                </div>
                                <div class="store-name">
                                    Spotify
                                </div>
                            </div>
                            <div class="select-store__store">
                                <div class="img-containner">
                                    <img src="img/spotify.png" alt="spotify logo">
                                </div>
                                <div class="store-name">
                                    Spotify
                                </div>
                            </div>
                            <div class="select-store__store">
                                <div class="img-containner">
                                    <img src="img/apple.png" alt="apple logo">
                                </div>
                                <div class="store-name">
                                    Apple
                                </div>
                            </div>
                            <div class="select-store__store">
                                <div class="img-containner">
                                    <img src="img/apple.png" alt="apple logo">
                                </div>
                                <div class="store-name">
                                    Apple
                                </div>
                            </div>
                            <div class="select-store__store">
                                <div class="img-containner">
                                    <img src="img/apple.png" alt="apple logo">
                                </div>
                                <div class="store-name">
                                    Apple
                                </div>
                            </div>
                            <div class="select-store__store select-store__store--selected">
                                <div class="img-containner">
                                    <img src="img/amazon.png" alt="amazon logo">
                                </div>
                                <div class="store-name">
                                    Amazon
                                </div>
                            </div>
                            <div class="select-store__store">
                                <div class="img-containner">
                                    <img src="img/amazon.png" alt="amazon logo">
                                </div>
                                <div class="store-name">
                                    Amazon
                                </div>
                            </div>
                            <div class="select-store__store">
                                <div class="img-containner">
                                    <img src="img/amazon.png" alt="amazon logo">
                                </div>
                                <div class="store-name">
                                    Amazon
                                </div>
                            </div>
                            <div class="select-store__store">
                                <div class="img-containner">
                                    <img src="img/apple.png" alt="apple logo">
                                </div>
                                <div class="store-name">
                                    Apple
                                </div>
                            </div>
                            <div class="select-store__store">
                                <div class="img-containner">
                                    <img src="img/apple.png" alt="apple logo">
                                </div>
                                <div class="store-name">
                                    Apple
                                </div>
                            </div>
                            <div class="select-store__store">
                                <div class="img-containner">
                                    <img src="img/apple.png" alt="apple logo">
                                </div>
                                <div class="store-name">
                                    Apple
                                </div>
                            </div>
                            <div class="select-store__store select-store__store--selected">
                                <div class="img-containner">
                                    <img src="img/amazon.png" alt="amazon logo">
                                </div>
                                <div class="store-name">
                                    Amazon
                                </div>
                            </div>
                            <div class="select-store__store">
                                <div class="img-containner">
                                    <img src="img/amazon.png" alt="amazon logo">
                                </div>
                                <div class="store-name">
                                    Amazon
                                </div>
                            </div>
                            <div class="select-store__store">
                                <div class="img-containner">
                                    <img src="img/amazon.png" alt="amazon logo">
                                </div>
                                <div class="store-name">
                                    Amazon
                                </div>
                            </div>
                            <div class="select-store__store">
                                <div class="img-containner">
                                    <img src="img/spotify.png" alt="spotify logo">
                                </div>
                                <div class="store-name">
                                    Spotify
                                </div>
                            </div>
                            <div class="select-store__store">
                                <div class="img-containner">
                                    <img src="img/spotify.png" alt="spotify logo">
                                </div>
                                <div class="store-name">
                                    Spotify
                                </div>
                            </div>
                            <div class="select-store__store">
                                <div class="img-containner">
                                    <img src="img/spotify.png" alt="spotify logo">
                                </div>
                                <div class="store-name">
                                    Spotify
                                </div>
                            </div>
                            <div class="select-store__store">
                                <div class="img-containner">
                                    <img src="img/apple.png" alt="apple logo">
                                </div>
                                <div class="store-name">
                                    Apple
                                </div>
                            </div>
                            <div class="select-store__store select-store__store--selected">
                                <div class="img-containner">
                                    <img src="img/apple.png" alt="apple logo">
                                </div>
                                <div class="store-name">
                                    Apple
                                </div>
                            </div>
                            <div class="select-store__store">
                                <div class="img-containner">
                                    <img src="img/apple.png" alt="apple logo">
                                </div>
                                <div class="store-name">
                                    Apple
                                </div>
                            </div>
                            <div class="select-store__store">
                                <div class="img-containner">
                                    <img src="img/amazon.png" alt="amazon logo">
                                </div>
                                <div class="store-name">
                                    Amazon
                                </div>
                            </div>
                            <div class="select-store__store">
                                <div class="img-containner">
                                    <img src="img/amazon.png" alt="amazon logo">
                                </div>
                                <div class="store-name">
                                    Amazon
                                </div>
                            </div>
                            <div class="select-store__store">
                                <div class="img-containner">
                                    <img src="img/amazon.png" alt="amazon logo">
                                </div>
                                <div class="store-name">
                                    Amazon
                                </div>
                            </div>
                        </div>
                        <div class="select-store__agreement">
                            <div class="select-store__store select-store__store--selected">
                                <div class="img-containner">
                                    <img src="img/amazon.png" alt="amazon logo">
                                </div>
                                <div class="store-name">
                                    Amazon
                                </div>
                            </div>
                            <div class="select-store__agreemnts">
                                <p>Import information! By selecting youtube you agree to following:</p>
                                <p>Your audio is valid for content id: contains no samples, crreative commons or public
                                    domain audio,<br /> is not a karaoke or sound-a-like, is not meditation music.</p>
                                <p>YouTube Your audio has not been distributed to YouTube by any other party.</p>
                            </div>
                        </div>
                    </div>


                </div>

                <!--Save banner-->
                <div class="card mt-5" style="border-radius: 10px !important;">
                    <div class="card-body d-flex justify-content-between align-items-center text-center">
                        <div class="col-md-4 d-flex justify-content-center">
                            <div class="d-flex justify-content-center align-items-center"
                                style="font-size: 1.625em;color: rgba(68,68,68,0.98);border-radius: 50% ;border: 2px #3858f9 solid;width:3.125em;height: 3.125em">
                                <i class="fa fa-chevron-left text-primary "></i>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-primary btn-lg  py-3 col-md-4" type="button"
                                style="font-size:1.25em;border-radius: 15px">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
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
                                    <label for="firstName" class="col-sm-4"><span
                                            class="h6 small bg-white text-muted pt-1 pl-2 pr-2">First Name</span></label>
                                    <input type="text" style="padding-left: 35px;" class="form-control mt-n3 input-field"
                                        id="firstName">
                                </div>

                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-icons">
                                    <i class="fa fa-user icon"></i>
                                    <label for="lastName" class="col-sm-4"><span
                                            class="h6 small bg-white text-muted pt-1 pl-2 pr-2">Last Name</span></label>
                                    <input type="text" style="padding-left: 35px;" class="form-control mt-n3 input-field"
                                        id="lastName">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <div class="input-icons">
                                    <i class="fa fa-user icon"></i>
                                    <label for="userName" class="col-sm-2"><span
                                            class="h6 small bg-white text-muted pt-1 pl-2 pr-2">Username</span></label>
                                    <input type="text" style="padding-left: 35px;" class="form-control mt-n3 input-field"
                                        id="userName">
                                </div>

                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-icons">
                                    <i class="fas fa-envelope icon"></i>
                                    <label for="email" class="col-sm-2"><span
                                            class="h6 small bg-white text-muted pt-1 pl-2 pr-2">Email</span></label>
                                    <input type="text" style="padding-left: 35px;" class="form-control mt-n3 input-field"
                                        id="email">
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="input-icons">
                                    <i class="fas fa-phone-alt phone-icon"></i>
                                    <label for="conNumber" class="col-sm-4"><span
                                            class="h6 small bg-white text-muted pt-1 pl-2 pr-2">Contact
                                            Number</span></label>
                                    <input type="number" style="padding-left: 35px;" class="form-control mt-n3 input-field"
                                        id="conNumber">
                                </div>
                            </div>



                            <div class="form-group col-md-12">
                                <div class="input-icons">
                                    <label for="payMethod" class="col-sm-4"><span
                                            class="h6 small bg-white text-muted pt-1 pl-2 pr-2">Payment
                                            Method</span></label>
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
                                    <label for="password" class="col-sm-2"><span
                                            class="h6 small bg-white text-muted pt-1 pl-2 pr-2">Password</span></label>
                                    <input type="number" style="padding-left: 35px;" class="form-control mt-n3 input-field"
                                        id="password">
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="input-icons">
                                    <label for="confPassword" class="col-sm-4"><span
                                            class="h6 small bg-white text-muted pt-1 pl-2 pr-2">Confirm
                                            Password</span></label>
                                    <input type="number" style="padding-left: 35px;" class="form-control mt-n3 input-field"
                                        id="confPassword">
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