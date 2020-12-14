@extends('layouts.app')

@section('content')
               

<div id="app">

    <!-- Display Uploaded Media -->

    <uploaded></uploaded>


    <!-- Add New Media -->

    <upload></upload>

</div>


               
    



    





    <h1>Old Code</h1>

    <table>

    <form action="{{ route('uploads.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    
    <input type="hidden" name="tablet_users_id" value="{{ $my_tablet_id }}" />
    

    <tr>
        <td><strong>Reference</strong></td>
        <td><input type="text" name="reference" placeholder="Reference" /></td>
    </tr>

    <tr>
        <td><strong>File</strong></td>
        <td><input type="file" name="file_upload" /></td>
    </tr>
    
        

    <tr>
        <td><button type="submit">Save</button></td>
    </tr>

    </form>
    </table>



@endsection