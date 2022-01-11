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
                            <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">بيانات نوع المؤسسة </h2>
                              <a href="{{ route('type.create') }}" class="btn btn-sm btn-info">اضافة</a>
                               
                                    <table class="table display table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>الرقم</th>
                                                <th>نوع المؤسسة </th>
                                                <th>الاجراء  </th>
                                                <th>الاجراء  </th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                        @foreach($types as $ty)
                                            <tr>
                                                <td>{{ $ty->id }}</td>
                                                <td>{{ $ty->type_name }}</td>
                                                
                                                 <!-- Edit -->
                                            <td>
            
                                                  <a href="{{ route('type.edit',$ty->id) }}" class="btn btn-sm btn-info">تعديل</a>
                                           </td>
                                             <!-- Delete -->
                                               <td>
                                                   <a href="{{ route('type.delete',$ty->id) }}" class="btn btn-sm btn-danger">حذف</a>
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


            </div>
</div>