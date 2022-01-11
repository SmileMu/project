@extends('desing.rahma')  

<div class="col-lg-6 col-lg-push-3">
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

                           
                            <form class="form-horizontal" action="{{url('section/store')}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">اسم القطاع </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="section_type"  placeholder="اسم القطاع">
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