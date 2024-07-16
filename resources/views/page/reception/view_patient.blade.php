@extends('masterLayout')

@section('title')
    View Patient |
@endsection

@section('body')
    <div>
        <p>
            @if (session('status'))
                <p class="text-red-700 rounded-md mt-[-15px]">
                    {{ session('status') }}
                </p>
            @endif
        </p>
        <table class="border">
            <thead class="border bg-black text-white">
                <tr>
                    <td>Id</td>
                    <td>Card Type</td>
                    <td>Card No </td>
                    <td>title</td>
                    <td>fname</td>
                    <td>mname</td>
                    <td>lname</td>
                    <td>dob</td>
                    <td>age</td>
                    <td>gender</td>
                    <td>mobile1</td>
                    <td>mobile2</td>
                    <td>blood group</td>
                    <td>email</td>
                    <td>area </td>
                    <td>address </td>
                    <td>register at</td>
                </tr>
            </thead>
            <tbody class="border ">
                    @forelse ($patientdata as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->user_id_type}}</td>
                        <td>{{$data->user_card_no}}</td>
                        <td>{{$data->title}}</td>
                        <td>{{$data->fname}}</td>
                        <td>{{$data->mname}}</td>
                        <td>{{$data->lname}}</td>
                        <td>{{$data->dob}}</td>
                        <td>{{$data->age}}</td>
                        <td>{{$data->gender}}</td>
                        <td>{{$data->mobile1}}</td>
                        <td>{{$data->mobile2}}</td>
                        <td>{{$data->blood_group}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->area}}</td>
                        <td>{{$data->adress}}</td>
                        <td>{{$data->register_date}}</td>
                    </tr>
                    @empty
                    <p>NO Data Available</p>
                    @endforelse
                </tbody>
            </table>
            
    </div>
@endsection
