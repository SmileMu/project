@extends('desing.rahma')

<div class="container-fluid p-5 ">
  <div class="row justify-content-center" >

                    <div class="col-md-6">
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

                            <form class="form-horizontal" action="{{url('inst/store')}}" method="POST">
                            @csrf
                            <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">اسم المؤسسة</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="inst_name" placeholder="اسم المؤسسة">
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">نوع القطاع</label>
                                       <div class="col-sm-9">

                                           <select class="form-control" name= "section_id" >

                                               @foreach($sections as $section)

                                                   <option  value= "{{$section->id}}"> {{$section->name}} </option>
                                              @endforeach
                                           </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label" >نوع المؤسسة</label>
                                          <div class="col-sm-9">

                                              <select class="form-control" name="type_id" >

                                                 @foreach($types as $type)

                                                     <option  value="{{$type->id}}"> {{$type->name}} </option>
                                                  @endforeach
                                              </select>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">سنة التاسيس</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" name="found_year"  placeholder="سنة التاسيس">
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">الموقع</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="location"  placeholder="الموقع">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">الهاتف</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="phone_no"  placeholder="الهاتف">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">البريد الالكتروني</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control"name="email"placeholder="البريد الالكتروني">
                                    </div>
                                </div>


                                <div class="form-group m-b-0">
                                    <div class="offset-sm-3 col-sm-9">
                                        <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">حفظ</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
</div>
</div>
