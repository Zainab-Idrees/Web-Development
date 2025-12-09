@extends('layout.master')

@section('content')

<div class="card p-4" 
     style="
        border-radius: 14px; 
        border: 1px solid #e0e0e0; 
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
     ">

    <h3 class="mb-3 fw-bold" style="font-size: 1.6rem; color:#333;">
        Users List
    </h3>

    <table class="table table-bordered table-hover" 
           style="border-radius:10px; overflow:hidden;">

        <thead class="table-dark">
            <tr>
                <th style="width:80px;">#</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            <tr style="transition:0.3s;">
                <td>1</td>
                <td>Zainab Idrees</td>
                <td>zainab@gmail.com</td>
            </tr>

            <tr style="transition:0.3s;">
                <td>2</td>
                <td>Ayesha Noor</td>
                <td>ayesha@example.com</td>
            </tr>
        </tbody>

    </table>

</div>

@endsection
