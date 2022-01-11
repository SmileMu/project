@extends('desing.rahma') 
                    <div class="col-md-6">
                        <div class="card card-body">
                            
                            <form class="form-horizontal" action="{{route('inst.update',$inst->id)}}" method="POST">
                           
                            @csrf
                            <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">اسم المؤسسة</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="inst_name" placeholder="اسم المؤسسة"  value="{{old('inst_name',$inst->inst_name)}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">نوع القطاع</label>
                                       <div class="col-sm-9">

                                           <select class="form-control" name="section_type"  value="{{old('section_type',$inst->section_type)}}">
                                          
                                            <option> قطاع تجاري</option>
                                            <option>قطاع خدمي</option>
                                           </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label" >نوع المؤسسة</label>
                                          <div class="col-sm-9">
                                          
                                            <select class="form-control" name="inst_type"  value="{{old('inst_type',$inst->inst_type)}}">
                                             <option>مؤسسة خاصة</option>
                                             <option>مؤسسة حكومية</option>
                                            
                                            </select>
                                            </div>
                                    </div> 
                                    <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">سنة التاسيس</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" name="found_year"  placeholder="سنة التاسيس"  value="{{old('found_year',$inst->found_year)}}">
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">الموقع</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="location"  placeholder="الموقع"  value="{{old('location',$inst->location)}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">الهاتف</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="phone_no"  placeholder="الهاتف"  value="{{old('phone_no',$inst->phone_no)}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">البريد الالكتروني</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control"name="email"placeholder="البريد الالكتروني"  value="{{old('email',$inst->email)}}">
                                    </div>
                                </div>
                                
                                
                                <div class="form-group m-b-0">
                                    <div class="offset-sm-3 col-sm-9">
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-t-10">تعديل</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>