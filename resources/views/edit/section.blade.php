@extends('desing.rahma')  

<div class="col-lg-6 col-lg-push-3">
                        <div class="card card-body">
                           
                            <form action="{{route('section.update',$se->id)}}" method="post" >
                                @csrf
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">اسم القطاع</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="section_type"  placeholder="اسم القطاع" value="{{old('section_type',$se->section_type)}}">
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