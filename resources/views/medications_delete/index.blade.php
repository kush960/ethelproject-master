@extends('layouts.app')

@section('content')
               
               
    <h1>Scheduled Medications</h1>



    <table>
    <tr>
        <th>Reference</th>        
        <th>Instruction</th>        
        <th>Start Date</th>
        <th>End Date</th>
        <th>Prompt Time</th>
        <th>Repeat</th>
        <th>Alert</th>
        <th>Actions</th>
    </tr>

    
    @foreach ($my_medication_schedules as $medication)
    <tr>
        <td>{{ $medication->reference }}</td>
        <td>{{ $medication->instruction }}</td>        
        <td>{{ $medication->start_date}}</td>
        <td>{{ $medication->end_date}}</td>
        <td>{{ $medication->prompt_time}}</td>
        <td>{{ $medication->repeat}}</td>
        <td>{{ $medication->use_alert}}</td>
        <td> <a href="{{ route('medication_schedules.edit', $medication->id )}}">Edit</a>
        
        / Delete
        </td>
    </tr>
    @endforeach

    </table>






    <h1>Add to Schedule</h1>

    <table>

    <form action="{{ route('medication_schedules.store') }}" method="POST" >
    @csrf

    <input type="hidden" name="alert_sent" value=false />
    <input type="hidden" name="tablet_users_id" value="{{ $my_tablet_id }}" />
    <input type="hidden" name="scheduled_by" value="{{ $my_user_id }}" />

    <tr>
        <td><strong>Reference</strong></td>
        <td><input type="text" name="reference" placeholder="Reference" value="myref" /></td>
    </tr>
    <tr>
        <td><strong>Instruction</strong></td>
        <td><input type="text" name="instruction" placeholder="Instruction" value="instruct" /></td>
    </tr>
    <tr>
        <td><strong>Start Date</strong></td>
        <td><input type="text" name="start_date" placeholder="12/11/2020" value="12/11/2020" /></td>
    </tr>
    <tr>
        <td><strong>End Date</strong></td>
        <td><input type="text" name="end_date" placeholder="12/12/2021" value="12/12/2021" /></td>
    </tr>
    <tr>
        <td><strong>Prompt Time</strong></td>
        <td><input type="text" name="prompt_time" placeholder="7:30" value="07:30" /></td>
    </tr>
    <tr>
        <td><strong>Repeat</strong></td>
        <td><select name="repeat" >
            <option value="Never">Never</option>
            <option value="Daily">Daily</option>
            <option value="Every Other Day">Every Other Day</option>
            <option value="Weekly">Weekly</option>
        </select></td>
    </tr>
    <tr>
        <td><strong>Alert</strong></td>
        <td><input type="checkbox" name="use_alert" value=1 /></td>
    </tr>

        

    <tr>
        <td><button type="submit">Save</button></td>
    </tr>

    </form>
    </table>



@endsection