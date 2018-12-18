@extends('layouts.app')

@section('content')
<div id="change">
    <div style="width:50%; margin-left: 5%">
        <b>Normal table</b>
    </div>
   <table style="width:50%; margin-left: 10%">
      <tr>
         <th>Reservation Number</th>
         <th>User</th>
         <th>Amount of people</th>
         <th>Date</th>
         <th>Time</th>
         <th>Status</th>
      </tr>
      @foreach($reservationskey as $reservation)
         <tr>
            <td>{{$reservation->id}}</td>
            <td>{{$reservation->user_id}}</td>
            <td>{{$reservation->amount_of_people}}</td>
            <td>{{$reservation->reservation_date}}</td>
            <td>{{$reservation->reservation_time}}</td>
            <td>{{$reservation->reservation_status}}</td>
         </tr>
      @endforeach
   </table>
    <br><br>

    <div style="width:50%; margin-left: 5%">
        <b>Button table</b>
    </div>
    <table style="width:50%; margin-left: 10%">
        <tr>
            <th>Reservation Number</th>
            <th>User</th>
            <th>Amount of people</th>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
            <th>Buttons</th>
        </tr>
        @foreach($reservationskey as $reservation)
            <tr class="data">
                <td id="id">{{$reservation->id}}</td>
                <td id="user">{{$reservation->user_id}}</td>
                <td id="amount">{{$reservation->amount_of_people}}</td>
                <td id="date">{{$reservation->reservation_date}}</td>
                <td id="time">{{$reservation->reservation_time}}</td>
                <td id="status">{{$reservation->reservation_status}}</td>
                <td><button type="button" class="edit" data-id="{{$reservation->id}}">Edit</button></td>
                <td><button type="button" class="delete" data-id="{{$reservation->id}}">Delete</button></td>
                <td><button type="button" class="view" data-id="{{$reservation->id}}">View</button></td>
            </tr>
        @endforeach
    </table>
    <br>
</div>
@endsection