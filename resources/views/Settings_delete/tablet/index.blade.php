@extends('layouts.app')

@section('content')
               
               
    <h1>Tablet User Settings</h1>

    <table>
    <tr>
        <th>ID</th>       
        <th>Organisation</th>
        <th>Project</th>
        <th>Full Name</th>
        <th>Familiar Name</th>
        <th>Gender</th>
        <th>City</th>     
        <th>PostCode</th>
        <th>Phone No.</th>
        <th>Country</th>
        <th>Time Zone</th>
        <th>Language</th>
        <th>Profile Pic</th>
    </tr>

    
    @foreach ($my_tablet_users as $tablet)
    <tr>
        <td>{{ $tablet->id }}</td>
        <td>{{ $tablet->organisation_id }}</td>
        <td>{{ $tablet->projects_id }}</td>
        <td>{{ $tablet->full_name }}</td>
        <td>{{ $tablet->familiar_name }}</td>
        <td>{{ $tablet->gender }}</td>
        <td>{{ $tablet->city }}</td>
        <td>{{ $tablet->postcode}}</td>
        <td>{{ $tablet->phone}}</td>
        <td>{{ $tablet->country }}</td>
        <td>{{ $tablet->timezone}}</td>
        <td>{{ $tablet->language}}</td>
        <td>{{ $tablet--profile_pic}}</td>
       
    </tr>
    @endforeach

    </table>






    

@endsection