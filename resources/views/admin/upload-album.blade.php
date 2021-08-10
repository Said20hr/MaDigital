@extends('admin.includes.master-new')
@section('title', 'dashboard')
@section('stylesheet')
    <link rel="stylesheet" href="assets/css/upload-album.css" type="text/css">
@endsection

@section('content')
    <div class="main-content" style="background-color: #f8f7ff">


        @include('admin/includes/header-new')
        <div class="home-section-four pt-5">
            <div class="m-md-4">
                <div class="upload-album-containner">
                    <div class="card"
                        style="border-radius: 10px !important; width: 100%; margin: 1em 0 2em 0; background-color: white; box-shadow: none">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-center align-items-center fw-bolder">
                                <div style="font-size: 20px;color: rgba(68,68,68,0.98)">Upload Album Artwork</div>
                            </div>
                            <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                                style="width: 30px;height: 30px"><i class="fa fa-question text-white"></i></div>
                        </div>
                    </div>

                    <div class="album-containner">
                        <div class="album-containner__title">
                            <h5>Album Artwork</h5>
                        </div>
                        <div class="album-containner__group">
                            <div class="album-containner__img-containner">
                                <img src="images/song.jpg" alt="song">
                            </div>
                            <div class="album-containner__controls">
                                <button>Edit</button>
                                <button>Delete</button>
                            </div>
                            <div class="album-containner__recommandation">
                                Need some stock photos for your cover art? Check out our selection of <span> Image
                                    Databases</span> that
                                you
                                can use!
                            </div>
                        </div>
                    </div>

                    <div class="album-rules">
                        <div class="album-rules__should">
                            <h5>You Should Do</h5>
                            <div class="album-rules__rule">
                                <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 30px;height: 30px"><i class=" fal fa-check"></i>
                                </div>
                                <p>3000px x 3000px</p>
                            </div>
                            <div class="album-rules__rule">
                                <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 30px;height: 30px"><i class="fal fa-check"></i></div>
                                <p>Less than 25MB</p>
                            </div>
                            <div class="album-rules__rule">
                                <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 30px;height: 30px"><i class="fal fa-check"></i></div>
                                <p>RGB Colour Space</p>
                            </div>
                            <div class="album-rules__rule">
                                <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 30px;height: 30px"><i class="fal fa-check"></i></div>
                                <p>Professional quality, product relevant images</p>
                            </div>
                        </div>
                        <div class="album-rules__should-not">
                            <h5>You Should Not Do</h5>
                            <div class="album-rules__rule">
                                <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 30px;height: 30px"><i class="fal fa-times"></i>
                                </div>
                                <p>Website URL</p>
                            </div>
                            <div class="album-rules__rule">
                                <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 30px;height: 30px"><i class="fal fa-times"></i>
                                </div>
                                <p>Contact information (i.e. email address, phone number etc.)</p>
                            </div>
                            <div class="album-rules__rule">
                                <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 30px;height: 30px"><i class="fal fa-times"></i>
                                </div>
                                <p>Pornographic images</p>
                            </div>
                            <div class="album-rules__rule">
                                <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 30px;height: 30px"><i class="fal fa-times"></i>
                                </div>
                                <p>Pricing information</p>
                            </div>
                            <div class="album-rules__rule">
                                <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 30px;height: 30px"><i class="fal fa-times"></i>
                                </div>
                                <p>Scan of a CD (must be retail ready artwork)</p>
                            </div>
                            <div class="album-rules__rule">
                                <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 30px;height: 30px"><i class="fal fa-times"></i>
                                </div>
                                <p>Blurry or pixelated images</p>
                            </div>
                            <div class="album-rules__rule">
                                <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 30px;height: 30px"><i class="fal fa-times"></i>
                                </div>
                                <p>Need some stock photos for your cover art? Check out our selection of Image Databases
                                    that you can use!</p>
                            </div>
                            <div class="album-rules__rule">
                                <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 30px;height: 30px"><i class="fal fa-times"></i>
                                </div>
                                <p>By uploading your Artwork to RouteNote, you acknowledge that you agree to RouteNote’s
                                    Terms and Conditions. Please be sure not to violate the copyright or privacy rights of
                                    others, learn more.</p>
                            </div>
                        </div>
                    </div>

                    <p class="album-agreement">By uploading your Artwork to RouteNote, you acknowledge that you agree to
                        RouteNote’s Terms and
                        Conditions. Please be sure not to violate the copyright or privacy rights of others, learn more</p>

                    <!--save banner-->
                    <div class="card mt-5" style="border-radius: 10px !important; width: 100%">
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
