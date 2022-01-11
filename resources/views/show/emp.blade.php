@extends('desing.rahma')  

<div class="container-fluid ">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                   <!-- Alert message (start) -->
      @if(Session::has('message'))
      <div class="alert {{ Session::get('alert-class') }}">
         {{ Session::get('message') }}
      </div>
      @endif
      <!-- Alert message (end) -->
                <div class="row">
                    <div class="col-12">
                        
                        <div class="card">
                            <div class="card-body">
                            
						       <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">بيانات الموظفين </h2>
                              <a href="{{ route('employees.create') }}" class="btn btn-sm btn-info">اضافة</a>
						
						    </div>
                           
                        
                                    <table class="table display table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>الرقم</th>
                                                <th>اسم الموظف</th>
                                                <th>اسم المؤسسة</th>
                                                <th>العمر</th>
                                                <th>تاريخ التعيين </th>
                                                <th>الراتب الاساسي</th>
                                                <th>البريد الالكتروني</th>
                                                <th>الاجراء  </th>
                                                <th>الاجراء  </th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                        @foreach($employees as $emp)
                                            <tr>
                                                <td>{{ $emp->id }}</td>
                                                <td>{{ $emp->emp_name }}</td>
                                                <td>{{ $emp->inst_name }}</td>
                                                <td>{{ $emp->age }}</td>
                                                <td>{{ $emp->appation_date }}</td>
                                                <td>{{ $emp->primary_sal }}</td>
                                                <td>{{ $emp->email }}</td>

                                                <td>
                 <!-- Edit -->
                 <a href="{{ route('employees.edit',$emp->id) }}" class="btn btn-sm btn-info">Edit</a>
             </td>
                  <!-- Delete -->
                <td>
                 <a href="{{ route('employees.delete',$emp->id) }}" class="btn btn-sm btn-danger">Delete</a>
               </td>
                                            </tr>
                                            @endforeach
                                           
                                              
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>