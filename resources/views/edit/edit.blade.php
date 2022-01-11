@extends('desing.rahma') 

<form action="{{route('employees.update',$emp->emp_no)}}" method="post" >
{{csrf_field()}}


       <div class="form-group">
         <label class="control-label col-md-3 col-sm-3 col-xs-12" >اسم الموظف </label>
         <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-12 col-xs-12" name="emp_name" placeholder="Enter emp name"  type="text"
             value="{{old('emp_name',$emp->emp_name)}}">
            

           
         </div>
       </div>

     
       <div class="form-group">
          <div class="col-md-6">
          <button type="submit" class="btn btn-primary">Update Data</button>
          </div>
       </div>

     </form>