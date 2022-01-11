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
                    <div class="col-6">
                        
                        <div class="card">
                            <div class="card-body">
                            <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">بيانات القطاع </h2>
                              <a href="{{ route('section.create') }}" class="btn btn-sm btn-info">اضافة</a>
                               
                                    <table class="table display table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>الرقم</th>
                                                <th>نوع القطاع </th>
                                                <th>الاجراء  </th>
                                                <th>الاجراء  </th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                        @foreach($sections as $se)
                                            <tr>
                                                <td>{{ $se->id}}</td>
                                                <td>{{ $se->section_type }}</td>
                                                
                                                <td>
                 <!-- Edit -->
                 <a href="{{ route('section.edit',$se->id) }}" class="btn btn-sm btn-info">تعديل</a>
             </td>
                  <!-- Delete -->
                <td>
                 <a href="{{ route('section.delete',$se->id) }}" class="btn btn-sm btn-danger">حذف</a>
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