@extends('admin.includes.master-new')
@section('title', 'dashboard')
@section('content')
    <div class="main-content">
        <!-- main-header -->
    @include('admin/includes/header-new')
    <!-- /main-header -->
        <!-- container -->
        <!-- HOME SECTION ONE -->

        <!-- HOME SECTION ONE END -->
        <!-- SECTION TWO -->


        <!-- SECTION TWO END -->

        <!-- SECTION THREE -->

        <!-- SECTION THREE END -->

        <!-- SECTION FOUR -->
        <div class="home-section-four pt-5">
        {{--   <style type="text/css">
               .custom-tabs .tab-one, .tab-two, .tab-three, .tab-four{
                   background-color: white;
                   border-radius: .5rem;
               }

               .custom-tabs .tab-one, .tab-two, .tab-three, .tab-four{
                   margin-top: 12px;
               }
               .custom-tabs .tab-one.active{
                   background-color: #3858F9;
                   color: white;
               }
               .custom-tabs .tab-three.active{
                   background-color: #3858F9;
                   color: white;
               }
               .custom-tabs .tab-four.active{
                   background-color: #3858F9;
                   color: white;
               }
               .custom-tabs .tab-two.active{
                   background-color: #3858F9;
                   color: white;
               }

               /* .custom-tabs p{
                   color:  #2D3144;
                }*/
               /*         .custom-tabs .tab-one:focus{
                           background-color: black;
                        }*/

               /*   .custom-tabs .tab-one h5{
                    color: black;
                 }*/

               .custom-tabs .tab-two h4{
                   color: #FF4E5F;
               }

               .custom-tabs .tab-three h4{
                   color: #219653;
               }

               .custom-tabs .tab-four h4{
                   color: #6F42C1;
               }



               .custom-tabs .tab-one-padding, .tab-two-padding, .tab-three-padding, .tab-four-padding{
                   padding: 15px;
               }
           </style>--}}


        <!-- Tab Heading Section -->
            <div class="m-md-4">

              notions html
                <div class="card bg-light" style="border-radius: 10px !important;">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-center align-items-center fw-bolder">
                            <div style="font-size: 20px;color: rgba(68,68,68,0.98)">Uplaod Audio</div>
                        </div>
                        <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                             style="width: 30px;height: 30px"><i class="fa fa-question text-white"></i></div>
                    </div>
                </div>


            </div>

            <!-- Tab Content One-->




        </div>

        <!-- SECTION FOUR END -->


        <!-- /container -->
    </div>




    <!-- FORM POPUP -->

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
      Launch demo modal
    </button> -->

    <!-- Modal -->
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

                    <!--    <form class="col-md-6">
                          <div class="form-group">
                             <label for="input1" class="col-sm-2">
                           <span class="h6 small bg-white text-muted pt-1 pl-2 pr-2">Username</span></label>
                             <input type="text" class="form-control mt-n3" id="input1" value="boern">
                          </div>
                       </form> -->

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
                                    <!-- <i class="fas fa-envelope icon"></i> -->
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
                <!--   <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div> -->
            </div>
        </div>
    </div>


@endsection

