@extends('frontend_seller.layout.index')

@section('content')
    <div class="row" >
        <div class="container col-md-12 mt-4">
        <div class="card">
            <h4 class="card-header"><i class="fa fa-bars">&nbsp;Meetings</i></h4>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">
                    <table class="table table-hover">
                        <thead>
                          <tr >
                            <th style="width: 40%" scope="col">Product Title</th>
                            <th style="width: 20%" scope="col">Wishlist Count</th>
                            <th style="width: 20%" scope="col">Rating</th>
                            <th style="width: 20%"scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="table-success">
                            <th scope="row">1</th>
                            <td>(today)Monday 18,2020 - 12:30</td>
                            <td>21-mar-23</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                  </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark is annowed with all thsi  sdsdn,ks,d  ,nknlsdnj</td>
                            <td>21-mar-23</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                  </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark is annowed with all thsi  sdsdn,ks,d  ,nknlsdnj</td>
                            <td>21-mar-23</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                  </div>
                            </td>
                          </tr>
                         
                        </tbody>
                      </table>
                </p>
            </div>
        </div>
        </div>
    </div>
@endsection