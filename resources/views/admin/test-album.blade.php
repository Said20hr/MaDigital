@extends('admin.includes.master-new')
@section('title', 'dashboard')
@section('stylesheet')
    <link rel="stylesheet" href="assets/css/test-album.css" type="text/css">
@endsection

@section('content')
    <div class="main-content" style="background-color: #f8f7ff">


        @include('admin/includes/header-new')
        <div class="home-section-four pt-5">
            <div class="m-md-4">
                <div class="test-album-containner">
                    <div class="card"
                        style="border-radius: 10px !important; width: 100%; margin: 1em 0 2em 0; background-color: white; box-shadow: none">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-center align-items-center fw-bolder">
                                <div style="font-size: 20px;color: rgba(68,68,68,0.98)">Test Album</div>
                            </div>
                            <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                title="Tooltip on top">
                                <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 30px;height: 30px"><i class="fa fa-question text-white"></i></div>
                            </button>
                        </div>
                    </div>

                    <div class="steps">
                        <div class="steps__step">
                            <div class="rounded-circle d-flex justify-content-center align-items-center"
                                style="width: 30px;height: 30px; background-color: #219653"><i class=" fal fa-check"></i>
                            </div>
                            <div class="status">
                                <span>Step 1</span>
                                <span>Completed</span>
                            </div>
                        </div>
                        <div class="steps__step">
                            <div class="rounded-circle d-flex justify-content-center align-items-center"
                                style="width: 30px;height: 30px; background-color: #219653"><i class=" fal fa-check"></i>
                            </div>
                            <div class="status">
                                <span>Step 2</span>
                                <span>Completed</span>
                            </div>
                        </div>
                        <div class="steps__step">
                            <div class="rounded-circle d-flex justify-content-center align-items-center"
                                style="width: 30px;height: 30px; background-color: #219653"><i class=" fal fa-check"></i>
                            </div>
                            <div class="status">
                                <span>Step 3</span>
                                <span>Completed</span>
                            </div>
                        </div>
                        <div class="steps__step">
                            <div class="rounded-circle d-flex justify-content-center align-items-center"
                                style="width: 30px;height: 30px; background-color: #219653"><i class=" fal fa-check"></i>
                            </div>
                            <div class="status">
                                <span>Step 4</span>
                                <span>Completed</span>
                            </div>
                        </div>
                    </div>

                    <div class="album-details">
                        <div class="album-details__title">
                            <h6>Album Details</h6>
                            <div class="album-details__edit">
                                <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 25px;height: 25px"><i class="fas fa-pen"></i></div>
                                <span>Edit</span>
                            </div>
                        </div>
                        <div class="album-details__details">
                            <div class="left-part">
                                <div class="img-containner">
                                    <img src="images/song.jpg" alt="song">
                                </div>
                                <div class="boxes-containner">
                                    <p>UPC: 254212455245652</p>
                                    <p>Test</p>
                                    <p>Alpha</p>
                                </div>
                            </div>
                            <div class="right-part">
                                <p>Alternative</p>
                                <p>Label: Madigital</p>
                                <p>© C Line: Under exclusive license to M...<br />
                                    ℗ P Line: Under exclusive license to M...
                                </p>
                                <p>Release Date: 07/08/2021 &#160 &#160 &#160 Uploaded Date: 07/08/2021
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="release-details">
                        <div class="release-details__title">
                            <h6>Release Details</h6>
                        </div>
                        <div class="release-details__steps">
                            <div class="release-details__step">
                                <span>Album Details</span>
                                <div class="rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 30px;height: 30px; background-color: #219653"><i
                                        class=" fal fa-check"></i>
                                </div>
                            </div>
                            <div class="release-details__step">
                                <span>Add Audio</span>
                                <div class="rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 30px;height: 30px; background-color: #219653"><i
                                        class=" fal fa-check"></i>
                                </div>
                            </div>
                            <div class="release-details__step">
                                <span>Add Artwork</span>
                                <div class="rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 30px;height: 30px; background-color: #219653"><i
                                        class=" fal fa-check"></i>
                                </div>
                            </div>
                            <div class="release-details__step">
                                <span>Manage Stores</span>
                                <div class="rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 30px;height: 30px; background-color: #219653"><i
                                        class=" fal fa-check"></i>
                                </div>
                            </div>
                        </div>
                        <p>Complete your releases by clicking on the four steps below and filling in each page.</p>
                    </div>

                    <div class="terms">
                        <p>Please review your release before selecting your distribution model as further audio and playlist
                            changes are not permitted beyond this point! Metadata changes are permitted but have an update
                            period of 30 days.</p>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">I understand and accept RouteNote's <a
                                    href="#">Terms
                                    and Conditions</a> and have read through the <a href="#">Artist/Label Agreement.</a>
                            </label>
                        </div>
                    </div>

                    <div class="pricing">
                        <div class="pricing__free">
                            <p> <span class="red">Free</span> distribution model allows artists to upload their
                                music to The
                                World's
                                largest music
                                stores without having to pay upfront.
                            </p>
                            <p>Artists keep 85% of the royalties.</p>
                            <div class="btns-containner">
                                <button>Learn More</button>
                                <button>Distributre Free</button>
                            </div>
                        </div>
                        <div class="pricing__premium">
                            <p>Our <a href="#">Premium</a> Distribution model allows the artists to pay a
                                small fee upfront but <a href="#">keep 100% of
                                    the royalties.</a> </p>
                            <p>$37<span>/Year</span></p>
                            <div class="btns-containner">
                                <button>Learn More</button>
                                <button>Distributre Premium</button>
                            </div>
                        </div>
                    </div>

                    <div class="selected-store">
                        <div class="selected-store__title">
                            <h6>Your Selected Store</h6>
                            <div class="selected-store__edit">
                                <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 25px;height: 25px"><i class="fas fa-pen"></i></div>
                                <span>Edit</span>
                            </div>
                        </div>
                        <div class="selected-store__stores-containner">
                            <div class="selected-store__store">
                                <img src="./img/apple.png" alt="Apple icon">
                            </div>
                            <div class="selected-store__store">
                                <img src="./img/amazon.png" alt="Amazon icon">
                            </div>
                            <div class="selected-store__store">
                                <img src="./img/spotify.png" alt="Spotify icon">
                            </div>
                            <div class="selected-store__store">
                                <img src="./img/apple.png" alt="Apple icon">
                            </div>
                            <div class="selected-store__store">
                                <img src="./img/amazon.png" alt="Amazon icon">
                            </div>
                            <div class="selected-store__store">
                                <img src="./img/spotify.png" alt="Spotify icon">
                            </div>
                            <div class="selected-store__store">
                                <img src="./img/apple.png" alt="Apple icon">
                            </div>
                            <div class="selected-store__store">
                                <img src="./img/amazon.png" alt="Amazon icon">
                            </div>
                            <div class="selected-store__store">
                                <img src="./img/spotify.png" alt="Spotify icon">
                            </div>
                            <div class="selected-store__store">
                                <img src="./img/apple.png" alt="Apple icon">
                            </div>
                            <div class="selected-store__store">
                                <img src="./img/amazon.png" alt="Amazon icon">
                            </div>
                            <div class="selected-store__store">
                                <img src="./img/spotify.png" alt="Spotify icon">
                            </div>
                            <div class="selected-store__store">
                                <img src="./img/apple.png" alt="Apple icon">
                            </div>
                            <div class="selected-store__store">
                                <img src="./img/amazon.png" alt="Amazon icon">
                            </div>
                            <div class="selected-store__store">
                                <img src="./img/spotify.png" alt="Spotify icon">
                            </div>
                            <div class="selected-store__store">
                                <img src="./img/apple.png" alt="Apple icon">
                            </div>
                            <div class="selected-store__store">
                                <img src="./img/amazon.png" alt="Amazon icon">
                            </div>
                            <div class="selected-store__store">
                                <img src="./img/spotify.png" alt="Spotify icon">
                            </div>
                            <div class="selected-store__store">
                                <img src="./img/apple.png" alt="Apple icon">
                            </div>
                            <div class="selected-store__store">
                                <img src="./img/amazon.png" alt="Amazon icon">
                            </div>
                        </div>
                    </div>

                    <div class="track-title">
                        <table class="desktop">
                            <thead>
                                <tr>
                                    <td>Track Title</td>
                                    <td>Duration</td>
                                    <td>Artist</td>
                                    <td>Role</td>
                                    <td>Isrc</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span>The last name .mp3</span> <br /> OK</td>
                                    <td>3.26</td>
                                    <td>Alpha</td>
                                    <td>Primary</td>
                                    <td>gx2kjhblk3333j4h</td>
                                    <td class="action">
                                        <div class="rounded-circle d-flex justify-content-center align-items-center"
                                            style="width: 30px;height: 30px; border: 1px solid gainsboro"><i
                                                class="far fa-eye"></i>
                                        </div>
                                        <div class="rounded-circle d-flex justify-content-center align-items-center"
                                            style="width: 30px;height: 30px; border: 1px solid gainsboro"><i
                                                class="fas fa-pen"></i>
                                        </div>
                                        <div class="rounded-circle d-flex justify-content-center align-items-center"
                                            style="width: 30px;height: 30px; border: 1px solid gainsboro"><i
                                                class="fas fa-trash-alt"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span>The last name .mp3</span><br /> OK</td>
                                    <td>3.26</td>
                                    <td>Alpha</td>
                                    <td>Primary</td>
                                    <td>gx2kjhblk3333j4h</td>
                                    <td class="action">
                                        <div class="rounded-circle d-flex justify-content-center align-items-center"
                                            style="width: 30px;height: 30px; border: 1px solid gainsboro"><i
                                                class="far fa-eye"></i>
                                        </div>
                                        <div class="rounded-circle d-flex justify-content-center align-items-center"
                                            style="width: 30px;height: 30px; border: 1px solid gainsboro"><i
                                                class="fas fa-pen"></i>
                                        </div>
                                        <div class="rounded-circle d-flex justify-content-center align-items-center"
                                            style="width: 30px;height: 30px; border: 1px solid gainsboro"><i
                                                class="fas fa-trash-alt"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span>The last name .mp3</span><br /> OK</td>
                                    <td>3.26</td>
                                    <td>Alpha</td>
                                    <td>Primary</td>
                                    <td>gx2kjhblk3333j4h</td>
                                    <td class="action">
                                        <div class="rounded-circle d-flex justify-content-center align-items-center"
                                            style="width: 30px;height: 30px; border: 1px solid gainsboro"><i
                                                class="far fa-eye"></i>
                                        </div>
                                        <div class="rounded-circle d-flex justify-content-center align-items-center"
                                            style="width: 30px;height: 30px; border: 1px solid gainsboro"><i
                                                class="fas fa-pen"></i>
                                        </div>
                                        <div class="rounded-circle d-flex justify-content-center align-items-center"
                                            style="width: 30px;height: 30px; border: 1px solid gainsboro"><i
                                                class="fas fa-trash-alt"></i>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <table class="mobile">
                            <thead>
                                <tr>
                                    <td>Track Title</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span>The last name .mp3</span> <br /> OK</td>
                                    <td class="action">
                                        <div class="rounded-circle d-flex justify-content-center align-items-center"
                                            style="width: 30px;height: 30px; border: 1px solid gainsboro"><i
                                                class="far fa-eye"></i>
                                        </div>
                                        <div class="rounded-circle d-flex justify-content-center align-items-center"
                                            style="width: 30px;height: 30px; border: 1px solid gainsboro"><i
                                                class="fas fa-pen"></i>
                                        </div>
                                        <div class="rounded-circle d-flex justify-content-center align-items-center"
                                            style="width: 30px;height: 30px; border: 1px solid gainsboro"><i
                                                class="fas fa-trash-alt"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span>The last name .mp3</span> <br /> OK</td>
                                    <td class="action">
                                        <div class="rounded-circle d-flex justify-content-center align-items-center"
                                            style="width: 30px;height: 30px; border: 1px solid gainsboro"><i
                                                class="far fa-eye"></i>
                                        </div>
                                        <div class="rounded-circle d-flex justify-content-center align-items-center"
                                            style="width: 30px;height: 30px; border: 1px solid gainsboro"><i
                                                class="fas fa-pen"></i>
                                        </div>
                                        <div class="rounded-circle d-flex justify-content-center align-items-center"
                                            style="width: 30px;height: 30px; border: 1px solid gainsboro"><i
                                                class="fas fa-trash-alt"></i>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!--save banner-->
                    <div class="card mt-5 save-banner" style="border-radius: 10px !important; width: 100%">
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
