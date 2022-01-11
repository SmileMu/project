@extends('desing.rahma')  

<div class="container-fluid p-5 ">
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
                            <div class="card-body ">
                            <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">بيانات المؤسسة </h2>
                              <a href="{{ route('inst.create') }}" class="btn btn-sm btn-info">اضافة</a>
                               
                                    <table class="table display table-bordered table-striped ">
                                        <thead>
                                            <tr>
                                                <th>الرقم</th>
                                                <th>اسم المؤسسة</th>
                                                <th>نوع القطاع </th>
                                                <th>نوع المؤسسة</th>
                                                <th> تاريخ التاسيس </th>
                                                <th>الموقع </th>
                                                <th>الهاتف </th>
                                                <th>البريد الالكتروني</th>
                                                <th>الاجراء </th>
                                                <th>الاجراء </th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                        @foreach($institutions as $inst)
                                            <tr>
                                                <td>{{ $inst->id }}</td>
                                                <td>{{ $inst->inst_name }}</td>
                                                <td>{{ $inst->section_type }}</td>
                                                <td>{{ $inst->inst_type }}</td>
                                                <td>{{ $inst->found_year }}</td>
                                                <td>{{ $inst->location }}</td>
                                                <td>{{ $inst->phone_no }}</td>
                                                <td>{{ $inst->email }}</td>

                                              <td>   
                                                <!-- Edit -->
                                               <a href="{{ route('inst.edit',$inst->id) }}" class="btn btn-sm btn-success">تعديل</a>
                                              </td>
                                               <!-- Delete -->
                                              <td>
                                               <a href="{{ route('inst.delete',$inst->id) }}" class="btn btn-sm btn-danger">حذف</a>
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