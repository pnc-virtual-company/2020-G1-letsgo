@extends('layouts.main')
@yield('content')
@include('layouts.navbar')

<div class="container mt-5">
    <h2 class="text-center"><strong class="Text-success">W</strong>elcome To Your Event !</h2>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
           

            <div class="md-form active-pink active-pink-2 mb-3 mt-0">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search event...">
              </div>
            
               <div class="text-right">
                <a href="" class="btn btn-warning btn-sm text-white font-weight-bolder" data-toggle="modal" data-target="#createPizza">
                    <i class="material-icons float-left" data-toggle="tooltip" title="Add Pizza!" data-placement="left">add</i>&nbsp;CREATE EVENT
                </a>
            </div>
            <div class="container">
                <div class="col-12">
                      <!-- Actual search box -->
                   
                      {{-- <h1>Events</h1> --}}
                      {{-- <h6 class="text-primary">Saturday, July 4</h6>  --}}
                      <a href="" class="text-primary">Saturday, July 4 </a>
                  <div class="card mb-3" style="border-radius: 20px;">
                      <div class="card-body" >
                          {{-- loop to show event --}}
                        <div class="row">
                          <div class="col-sm-3"><br><h5 class="text-secondary">8:00 PM</h5></div>
                          <div class="col-sm-4">
                              <p><b class="text-primary">Sport</b></p>
                              <h4 class="text-warning">Running</h4>
                              <p> <strong class="text-warning">6</strong>  member going</p>
                          </div>
                          <div class="col-sm-3">
                              {{-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSe0tC6P0G3n_CeYFdklK3aN5VEUjAJJV1Oag&usqp=CAU" style="width: 130px; height: 120px;"  class="img-thumbnail" alt="Cinque Terre"> --}}
                              <img class="mx-auto d-block" src="https://cdn5.vectorstock.com/i/1000x1000/58/29/girl-cartoon-running-jogging-icon-graphic-vector-10785829.jpg" width="105" style="border-radius: 105px;" height="105" alt="Avatar">
                          </div>
                          <div class="col-sm-2">
                              <br>
                              {{-- <a href="#" style="font-size:22px" class="btn btn-outline-danger btn-center"><i class="fa fa-times-circle" style="color:red"></i>&nbsp;Remove</a> --}}
                              <a href="" data-toggle="modal" data-target="#updatePizza"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Pizza!" data-placement="left">edit</i></a>
							<a href="" data-toggle="tooltip" title="Delete Pizza!" data-placement="right"><i class="material-icons text-danger">delete</i></a>
                          </div>
                        </div>
                        {{-- end foreach of event --}}
                      </div>
                  </div>
              </div>
          </div>   
            <div class="container">
                <div class="col-12">
                      <!-- Actual search box -->
                      {{-- <div class="form-group has-search">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control" placeholder="Search">
                      </div>
                      <h1>Events</h1> --}}
                      {{-- <h5>Saturday,July 11</h5>  --}}
                      <a href="" class="text-primary">Monday, July 5 </a>
                  <div class="card mb-3" style="border-radius: 20px;">
                      <div class="card-body" >
                          {{-- loop to show event --}}
                        <div class="row">
                          <div class="col-sm-3"><br><h5 class="text-secondary">4:00 PM</h5></div>
                          <div class="col-sm-4">
                              <p><b class="text-primary">Bord game</b></p>
                              <h4 class="text-warning">The Duck is Back</h4>
                              <p> <strong class="text-warning">4</strong>  member going</p>
                          </div>
                          <div class="col-sm-3">
                              {{-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSe0tC6P0G3n_CeYFdklK3aN5VEUjAJJV1Oag&usqp=CAU" style="width: 130px; height: 120px;"  class="img-thumbnail" alt="Cinque Terre"> --}}
                              <img class="mx-auto d-block" src="https://progameguides.com/wp-content/uploads/2019/06/fortnite-back-bling-quack-pack.jpg" width="105" style="border-radius: 105px;" height="105" alt="Avatar">
                          </div>
                          <div class="col-sm-2">
                              <br>
                              {{-- <a href="#" style="font-size:22px" class="btn btn-outline-danger btn-center"><i class="fa fa-times-circle" style="color:red"></i>&nbsp;Remove</a> --}}
                              <a href="" data-toggle="modal" data-target="#updatePizza"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Pizza!" data-placement="left">edit</i></a>
							<a href="" data-toggle="tooltip" title="Delete Pizza!" data-placement="right"><i class="material-icons text-danger">delete</i></a>
                          </div>
                        </div>
                        {{-- end foreach of event --}}
                      </div>
                  </div>
              </div>
          </div>   
              <style>
                  /* .has-search .form-control {
                      padding-left: 2.375rem;
                  }
                  .has-search .form-control-feedback {
                      position: absolute;
                      z-index: 2;
                      display: block;
                      width: 2.375rem;
                      height: 2.375rem;
                      line-height: 2.375rem;
                      text-align: center;
                      pointer-events: none;
                      color: #aaa;
                  } */
          .btn-label {
              position: relative;
              left: -12px;
              display: inline-block;
              padding: 6px 12px;
              background: rgba(0,0,0,0.15);
              border-radius: 3px 0 0 3px;
          }
          .btn-labeled {
              padding-top: 0;
              padding-bottom: 0;
          }
          .btn { 
              margin-bottom:10px; 

          }
            .active-pink-2 input.form-control[type=text]:focus:not([readonly]) {
            border-bottom: 1px solid #f48fb1;
            box-shadow: 0 1px 0 0 #f48fb1;
            }
              </style>
          

        </div>
        <div class="col-2"></div>
    </div>
</div>




