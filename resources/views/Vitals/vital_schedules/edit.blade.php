@extends('layouts.app')

@section('content')
               
<a href="{{ route('vital_schedules.index')}}" class="underline text-gray-900 dark:text-white">Back to Vital Schedules</a> 

    <h1>Edit Vitals</h1>

    <table>

    <form action="{{ route('vital_schedules.update', $vitalSchedule->id) }}" method="POST" >
    @csrf
    @method('PUT')

    <input type="hidden" name="alert_sent" value=false />
    <input type="hidden" name="scheduled_by" value="{{ $my_user_id }}" />

    <tr>
        <td><strong>Reference</strong></td>
        <td><input type="text" name="reference" value="{{ $vitalSchedule->reference }}" /></td>
    </tr>
    <tr>
        <td><strong>Start Date</strong></td>
        <td><input type="text" name="start_date" value="{{ $vitalSchedule->start_date }}" /></td>
    </tr>
    <tr>
        <td><strong>End Date</strong></td>
        <td><input type="text" name="end_date" value="{{ $vitalSchedule->end_date }}" /></td>
    </tr>
    <tr>
        <td><strong>Prompt Time</strong></td>
        <td><input type="text" name="prompt_time" value="{{ $vitalSchedule->prompt_time }}" /></td>
    </tr>
    <tr>
        <td><strong>Repeat</strong></td>
        <td><select name="repeat" >
            <option value="Never" 
            @if($vitalSchedule->repeat == 'Never')
            selected
            @endif
            >Never</option>
            <option value="Daily" 
            @if($vitalSchedule->repeat == 'Daily')
            selected
            @endif
            >Daily</option>
            <option value="Every Other Day" 
            @if($vitalSchedule->repeat == 'Every Other Day')
            selected
            @endif
            >Every Other Day</option>
            <option value="Weekly" 
            @if($vitalSchedule->repeat == 'Weekly')
            selected
            @endif
            >Weekly</option>
        </select></td>
    </tr>
    <tr>
        <td><strong>Alert</strong></td>
        <td><input type="checkbox" name="use_alert" value="1" 
        @if($vitalSchedule->use_alert)
        checked="checked"
        @endif
        /></td>
    </tr>

        
    @foreach ($my_vital_questions as $question)
        <tr>
            <td><strong>{{ $question->prompt }}</strong></td>
            <td>
            @if($question->name == 'systolic')
                <input type="checkbox" name="use_{{$question->name}}" value="1" 
                @if($vitalSchedule->use_systolic)
                checked="checked"
                @endif
                />
            <input type="text" name="{{ $question->name }}_min" value="{{ $vitalSchedule->systolic_min }}" />
            <input type="text" name="{{ $question->name }}_max" value="{{ $vitalSchedule->systolic_max }}"/></td>
            @elseif($question->name == 'diastolic')
                <input type="checkbox" name="use_{{$question->name}}" value="1" 
                @if($vitalSchedule->use_diastolic)
                checked="checked"
                @endif
                />
            <input type="text" name="{{ $question->name }}_min" value="{{ $vitalSchedule->diastolic_min }}" />
            <input type="text" name="{{ $question->name }}_max" value="{{ $vitalSchedule->diastolic_max }}"/></td>
            @elseif($question->name == 'oximetry')
                <input type="checkbox" name="use_{{$question->name}}" value="1" 
                @if($vitalSchedule->use_oximetry)
                checked="checked"
                @endif
                />
            <input type="text" name="{{ $question->name }}_min" value="{{ $vitalSchedule->oximetry_min }}" />
            <input type="text" name="{{ $question->name }}_max" value="{{ $vitalSchedule->oximetry_max }}"/></td>
            @elseif($question->name == 'pulse')
                <input type="checkbox" name="use_{{$question->name}}" value="1" 
                @if($vitalSchedule->use_pulse)
                checked="checked"
                @endif
                />
            <input type="text" name="{{ $question->name }}_min" value="{{ $vitalSchedule->pulse_min }}" />
            <input type="text" name="{{ $question->name }}_max" value="{{ $vitalSchedule->pulse_max }}"/></td>
            @elseif($question->name == 'respiration')
                <input type="checkbox" name="use_{{$question->name}}" value="1" 
                @if($vitalSchedule->use_respiration)
                checked="checked"
                @endif
                />
            <input type="text" name="{{ $question->name }}_min" value="{{ $vitalSchedule->respiration_min }}" />
            <input type="text" name="{{ $question->name }}_max" value="{{ $vitalSchedule->respiration_max }}"/></td>
            @elseif($question->name == 'temperature')
                <input type="checkbox" name="use_{{$question->name}}" value="1" 
                @if($vitalSchedule->use_temperature)
                checked="checked"
                @endif
                />
            <input type="text" name="{{ $question->name }}_min" value="{{ $vitalSchedule->temperature_min }}" />
            <input type="text" name="{{ $question->name }}_max" value="{{ $vitalSchedule->temperature_max }}"/></td>
            @elseif($question->name == 'blood_glucose')
                <input type="checkbox" name="use_{{$question->name}}" value="1" 
                @if($vitalSchedule->use_blood_glucose)
                checked="checked"
                @endif
                />
            <input type="text" name="{{ $question->name }}_min" value="{{ $vitalSchedule->blood_glucose_min }}" />
            <input type="text" name="{{ $question->name }}_max" value="{{ $vitalSchedule->blood_glucose_max }}"/></td>
            @endif

        </tr>
    @endforeach

    
      

    <tr>
        <td><button type="submit">Update</button></td>
    </tr>

    </form>
    </table>



@endsection