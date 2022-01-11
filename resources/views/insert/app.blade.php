@extends('desing.rahma')
<table>
  <tbody>
        @foreach($employees as $emp)
           <tr>
              <td>{{ $emp->emp_no}}</td>
              <td>{{ $emp->emp_name }}</td>
              <td>{{ $emp->inst_name }}</td>
              <td>{{ $emp->primary_sal }}</td>
              <td>{{ $emp->appation_date }}</td>
              <td>{{ $emp->email }}</td>
             
              <td>
                 <!-- Edit -->
                 <a href="{{ route('employees.edit',$emp->emp_no) }}" class="btn btn-sm btn-info">Edit</a>
             </td>
                <td>
                 <a href="{{ route('employees.delete',$emp->emp_no) }}" class="btn btn-sm btn-danger">Delete</a>
               </td>
                  
               
              
           </tr>
        @endforeach
        <table>
  <tbody>