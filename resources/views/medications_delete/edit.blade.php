@extends('layouts.app')

@section('content')
               
<a href="{{ route('medication_schedules.index')}}" class="underline text-gray-900 dark:text-white">Back to Medication Schedules</a> 

    <h1>Edit Medications</h1>

    <table>

    <form action="{{ route('medication_schedules.update', $medicationSchedule->id) }}" method="POST" >
    @csrf
    @method('PUT')

    <input type="hidden" name="alert_sent" value=false />
    <input type="hidden" name="scheduled_by" value="{{ $my_user_id }}" />

    <tr>
        <td><strong>Reference</strong></td>
        <td><input type="text" name="reference" value="{{ $medicationSchedule->reference }}" /></td>
    </tr>
    <tr>
        <td><strong>Instructions</strong></td>
        <td><input type="text" name="instruction" value="{{ $medicationSchedule->instruction }}" /></td>
    </tr>
    <tr>
        <td><strong>Start Date</strong></td>
        <td><input type="text" name="start_date" value="{{ $medicationSchedule->start_date }}" /></td>
    </tr>
    <tr>
        <td><strong>End Date</strong></td>
        <td><input type="text" name="end_date" value="{{ $medicationSchedule->end_date }}" /></td>
    </tr>
    <tr>
        <td><strong>Prompt Time</strong></td>
        <td><input type="text" name="prompt_time" value="{{ $medicationSchedule->prompt_time }}" /></td>
    </tr>
    <tr>
        <td><strong>Repeat</strong></td>
        <td><select name="repeat" >
            <option value="Never" 
            @if($medicationSchedule->repeat == 'Never')
            selected
            @endif
            >Never</option>
            <option value="Daily" 
            @if($medicationSchedule->repeat == 'Daily')
            selected
            @endif
            >Daily</option>
            <option value="Every Other Day" 
            @if($medicationSchedule->repeat == 'Every Other Day')
            selected
            @endif
            >Every Other Day</option>
            <option value="Weekly" 
            @if($medicationSchedule->repeat == 'Weekly')
            selected
            @endif
            >Weekly</option>
        </select></td>
    </tr>
    <tr>
        <td><strong>Alert</strong></td>
        <td><input type="checkbox" name="use_alert" value="1" 
        @if($medicationSchedule->use_alert)
        checked="checked"
        @endif
        /></td>
    </tr>

        
    

    
      

    <tr>
        <td><button type="submit">Update</button></td>
    </tr>

    </form>
    </table>



@endsection