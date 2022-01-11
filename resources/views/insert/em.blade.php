@extends('desing.rahma')
<div class="container-fluid">
    <div class="row justify-content-center" >

        <div class="col-12">

                        <div class="card card-body">

                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                            <form class="form-horizontal" action="{{url('employees/store')}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">اسم الموظف</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="emp_name"  placeholder="اسم الموظف">
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">اسم المؤسسة</label>
                                        <div class="col-sm-9">

                                            <select class="form-control" name="inst_name" >

                                                @foreach($institutions as $inst)

                                                    <option  value="{{$inst->id}}"> {{$inst->name}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">العمر</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="age" placeholder="العمر">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">تاريخ التعيين</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" name="appation_date" placeholder="تاريخ التعيين">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">الراتب الاساسي</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="primary_sal"  placeholder="الراتب الاساسي">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">الايميل</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control"  name="email" placeholder="الايميل">
                                    </div>
                                </div>


                                <div class="form-group m-b-5">
                                    <div class="offset-sm-3 col-sm-9">
                                        <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">حفظ</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
</div>
</div>
