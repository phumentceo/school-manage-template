@extends('components.master')
@section('contents')
<div class="card">
  <div class="card-body p-5">

    <div class="d-flex justify-content-between align-items-center">
        <h5 class="mb-4">ថ្នាក់ 7A</h5>
        <select style="width:200px;" class="form-control text-center" value="">
            <option value="">ឆ្នាំសិក្សា 2018-2019</option>
            <option value="">ឆ្នាំសិក្សា 2019-2020</option>
            <option value="">ឆ្នាំសិក្សា 2021-2022</option>
            <option value="">ឆ្នាំសិក្សា 2022-2023</option>
        </select>
    </div>
    
    <table class="table table-hover datatable">
      <thead>
        <tr style="background-color: black;" class="">
          <th><b>N</b>ame</th>
          <th>Ext.</th>
          <th>City</th>
          <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
          <th>Completion</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Unity Pugh</td>
          <td>9958</td>
          <td>Curicó</td>
          <td>2005/02/11</td>
          <td>37%</td>
        </tr>
        <tr>
          <td>Theodore Duran</td>
          <td>8971</td>
          <td>Dhanbad</td>
          <td>1999/04/07</td>
          <td>97%</td>
        </tr>
        <tr>
          <td>Unity Pugh</td>
          <td>9958</td>
          <td>Curicó</td>
          <td>2005/02/11</td>
          <td>37%</td>
        </tr>
        <tr>
          <td>Theodore Duran</td>
          <td>8971</td>
          <td>Dhanbad</td>
          <td>1999/04/07</td>
          <td>97%</td>
        </tr>
        <tr>
          <td>Unity Pugh</td>
          <td>9958</td>
          <td>Curicó</td>
          <td>2005/02/11</td>
          <td>37%</td>
        </tr>
        <tr>
          <td>Theodore Duran</td>
          <td>8971</td>
          <td>Dhanbad</td>
          <td>1999/04/07</td>
          <td>97%</td>
        </tr>
      </tbody>
    </table>

  </div>
</div>

<div class="card">
  <div class="card-body p-3">
    <div class="row">
        <div class="col-lg-6">
          <div class="card p-5">
            <h5 class="mb-4 text-center">ជម្រើស</h5>
            <div class="d-flex justify-content-start gap-3">
              <button class="btn btn-primary">ស្រង់វត្តមាន</button>
              <button class="btn btn-success">តារាងពិន្ទុ</button>
              <button class="btn btn-success">តារាងចំណាត់ថ្នាក់</button>
              <button class="btn btn-warning">តារាងកិត្តិយស</button>
            </div>
          </div>
          
        </div>
        
        <div class="col-lg-6">
            <div class="card p-5">
              <div class=" p-3">
                <h5 class="mb-4 text-center mb-4">ស្ថានភាពថ្នាក់</h5>
                <div class="row">
                    <div class="col-lg-2">ស្រី</div>
                    <div class="col-lg-10">
                        <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                        </div>
        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">ប្រុស</div>
                    <div class="col-lg-10">
                        <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                        </div>
                    </div>

                </div>
            </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
