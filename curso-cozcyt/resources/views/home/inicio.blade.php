@extends('layouts.template')

@section('title', 'Something | Fun')

@section('content')
<div class="row">
  <div class="col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">List</h3>
      </div>
      <div class="panel-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th class="left">ID</th>
              <th>Column1</th>
              <th>Column2</th>                
              <th>Column3</th>                
              <th>Column4</th>                              
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="left">Data</td>
              <td>Data</td>
              <td>Data</td>
              <td>Data</td>
              <td><a class="btn btn-default" href="#" role="button">Edit</a>                
              </td>  
            </tr>
            <tr>
              <td class="left">Data</td>
              <td>Data</td>
              <td>Data</td>
              <td>Data</td>
              <td><a class="btn btn-default" href="#" role="button">Edit</a>                
              </td>  
            </tr>
            <tr>
              <td class="left">Data</td>
              <td>Data</td>
              <td>Data</td>
              <td>Data</td>
              <td><a class="btn btn-default" href="#" role="button">Edit</a>                
              </td>  
            </tr>
          </tbody>           
        </table>
      </div>
    </div>         
  </div>
</div>
@endsection

@section('footer')
<p class="pull-right"><a href="#">Back to top</a></p>
<p>&copy; 2017 My Site, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
@endsection