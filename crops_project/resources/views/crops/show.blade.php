<div >          
        @foreach ($crops as $crop )
        
            The crop type : {{$crops->crop_type}}
            <br><br>
            The crop name : {{$crops->crop_name}}

    <form method="POST" action="{{ route('crops.destroy', ['crop' => $crop->id]) }}">
 
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        <div style="float:left;" >
            <input type="submit"  value="Delete crop">
        </div>
    </form>
        @endforeach
<center>
        <form method="Get" action="{{ route('crops.create') }}">
 
 {{ csrf_field() }}
 <div >
     <input type="submit"  value="Do you like to add any other crops?">