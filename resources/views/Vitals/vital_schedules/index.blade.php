@extends('layouts.app')

@section('content')
               
               
    <h1>Scheduled Vitals</h1>



    <table>
    <tr>
        <th>Reference</th>
        @foreach ($my_vital_questions as $question)
        <th>{{ $question->prompt }}</th>
        @endforeach
        <th>Start Date</th>
        <th>End Date</th>
        <th>Prompt Time</th>
        <th>Repeat</th>
        <th>Alert</th>
        <th>Actions</th>
    </tr>

    
    @foreach ($my_vital_schedules as $schedule)
    <tr>
        <td>{{ $schedule->reference }}</td>
        <td>{{ $schedule->use_systolic }}</td>
        <td>{{ $schedule->use_diastolic }}</td>
        <td>{{ $schedule->use_oximetry }}</td>
        <td>{{ $schedule->use_pulse }}</td>
        <td>{{ $schedule->use_respiration }}</td>
        <td>{{ $schedule->use_temperature }}</td>
        <td>{{ $schedule->use_blood_glucose }}</td>
        <td>{{ $schedule->start_date}}</td>
        <td>{{ $schedule->end_date}}</td>
        <td>{{ $schedule->prompt_time}}</td>
        <td>{{ $schedule->repeat}}</td>
        <td>{{ $schedule->use_alert}}</td>
        <td> <a href="{{ route('vital_schedules.edit', $schedule->id )}}">Edit</a>
        
        / Delete
        </td>
    </tr>
    @endforeach

    </table>






    <h1>Add to Schedule</h1>

    <table>

    <form action="{{ route('vital_schedules.store') }}" method="POST" >
    @csrf

    <input type="hidden" name="alert_sent" value=false />
    <input type="hidden" name="tablet_users_id" value="{{ $my_tablet_id }}" />
    <input type="hidden" name="scheduled_by" value="{{ $my_user_id }}" />

    <tr>
        <td><strong>Reference</strong></td>
        <td><input type="text" name="reference" placeholder="Reference" value="myref" /></td>
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

        @foreach ($my_vital_questions as $question)
        <tr>
            <td><strong>{{ $question->prompt }}</strong></td>
            <td><input type="checkbox" name="use_{{$question->name}}" value=1 />
            <input type="text" name="{{ $question->name }}_min" placeholder="{{ $question->min }}" value="10" />
            <input type="text" name="{{ $question->name }}_max" placeholder="{{ $question->max }}" value="90"/></td>
        </tr>
        @endforeach

    <tr>
        <td><button type="submit">Save</button></td>
    </tr>

    </form>
    </table>



@endsection