@extends('layout.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div id="card" class="card">
                    <div id="blog-list-header" class="card-header [ d-flex justify-content-between fw-800 ]">
                       <span class="fs-25">Players List</span> 
                
                       
                
                    </div>
                       
                   
                        
            

                    <div class="card-body">

                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif

                        <table class="table [ user-approve-table ]">
                            <tr>
                                <th></th>
                                <th>  
                                    <div class="d-flex justify-content-center">
                                    Name
                                    </div>
                                </th>
                                <th>  
                                    <div class="d-flex justify-content-center">
                                    Age
                                    </div>
                                </th>
                                <th>  
                                    <div class="d-flex justify-content-center">
                                    {{ $salary }}
                                    </div>
                                </th>
                                <th>  
                                    <div class="d-flex justify-content-center">
                                    Position
                                    </div>
                                </th>
                                <th>  
                                    <div class="d-flex justify-content-center">
                
                                    </div>
                                </th>
                            </tr>

    
          @foreach($players as $player)

          <tr>
            <td class="d-flex justify-content-center">
                <div class="blog-img">
                    <img src="/img/football/{{ $player->image }}" alt="">
                </div>
                
            </td>
            <td> 
                <div class="d-flex justify-content-center">
                {{ $player->name }} 
                </div>
            </td>
            <td>
                <div class="d-flex justify-content-center">
                {{ $player->age }}
                </div>
              
            </td>
            <td>
            <div class="d-flex justify-content-center">
                {{ $player->weekly_salary ??  $player->annual_salary ?? $player->contract_value ?? $player->transfer_fee  }}
            </div>
            </td>
            <td>
            <div class="d-flex justify-content-center">
                {{ $player->position }}
            </div>
            </td>
            <td> 
           
            </td>
          </tr>

          @endforeach
           

              
          </div>
      </div>

</div>
@endsection