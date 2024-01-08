@extends("User.style.index")

@section("content")

<div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Table / Users</h4>
                    <p class="card-description"> Add class <code>.table-{color}</code>
                    </p>
                    <table class="table table-bordered">
                      <thead>
    
                        <tr>
                          <th> id </th>
                          <th> username </th>
                          <th> num_of_login </th>
                          <th> data_login </th>
                          <th> data_logout </th>
                        </tr>
                      </thead>
                      <tbody>
                    @forelse ($all_data as $all_data)
                    
                  <tr class="table-info">
                    <td>{{$id++}}</td>
                    <td>{{$all_data->id_user==4?"mohand":"watch"}}</td>
                    <td>{{$all_data->num_of_login}}</td>
                    <td>{{$all_data->date_login}}</td>
                    <td>{{$all_data->date_logout}}</td>
                    
                    </tr>
                  
                      
                    @empty
                      
                    @endforelse
                        
                            
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
@endsection