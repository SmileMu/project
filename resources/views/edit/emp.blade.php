@extends('desing.rahma')  

<div class="col-12">
                        <div class="card card-body">
                           
                            <form  action="{{route('employees.update',$emp->id)}}" method="post" >
                                @csrf
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">اسم الموظف</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="emp_name"  placeholder="اسم الموظف" value="{{old('emp_name',$emp->emp_name)}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">العمر</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="age" placeholder="العمر" value="{{old('age',$emp->age)}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">تاريخ التعيين</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" name="appation_date" placeholder="تاريخ التعيين" value="{{old('appation_date',$emp->appation_date)}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">الراتب الاساسي</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="primary_sal"  placeholder="الراتب الاساسي" value="{{old('primary_sal',$emp->primary_sal)}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">اسم المؤسسة</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="inst_name" placeholder="اسم المؤسسة" value="{{old('inst_name',$emp->inst_name)}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">الايميل</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control"  name="email" placeholder="الايميل" value="{{old('email',$emp->email)}}">
                                    </div>
                                </div>
                               
                                
                                <div class="form-group m-b-5">
                                    <div class="offset-sm-3 col-sm-9">
                                        <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">تعديل</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>