@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="table-responsive">
                          <table class="table table-hover thead-primary" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                              <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Family Type</th>
                                <th scope="col">Income</th>
                                <th scope="col">Occupation</th>
                                <th scope="col">Is Manglik</th>
                                <th scope="col">Date Of Bitrh</th>
                                <th scope="col">Partner Prefrence Manglik</th>
                                <th scope="col">Match Percentage</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $list)
                                <tr>
                                    <td>{{$list->name}}</td>
                                    <td>{{$list->email}}</td>
                                    @if ($list->gender==0)
                                    <td>Female</td>
                                    @else
                                    <td>Male</td>
                                    @endif

                                    <td>{{$list->family_type}}</td>

                                    <td>{{$list->income}}</td>
                                    <td>{{$list->occupation}}</td>
                                    <td>{{$list->is_manglik}}</td>
                                    <td>{{$list->date_of_birth}}</td>
                                    <td>{{$list->ptr_manglik}}</td>
                                    <td><?php $per= 3/3*100; echo $per?></td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tbody>
                                @foreach ($show as $list)
                                <tr>
                                    <td>{{$list->name}}</td>
                                    <td>{{$list->email}}</td>
                                    @if ($list->gender==0)
                                    <td>Female</td>
                                    @else
                                    <td>Male</td>
                                    @endif

                                    <td>{{$list->family_type}}</td>

                                    <td>{{$list->income}}</td>
                                    <td>{{$list->occupation}}</td>
                                    <td>{{$list->is_manglik}}</td>
                                    <td>{{$list->date_of_birth}}</td>
                                    <td>{{$list->ptr_manglik}}</td>
                                    <td><?php $per= 2/3*100; echo $per?></td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tbody>
                                @foreach ($show1 as $list)
                                <tr>
                                    <td>{{$list->name}}</td>
                                    <td>{{$list->email}}</td>
                                    @if ($list->gender==0)
                                    <td>Female</td>
                                    @else
                                    <td>Male</td>
                                    @endif

                                    <td>{{$list->family_type}}</td>

                                    <td>{{$list->income}}</td>
                                    <td>{{$list->occupation}}</td>
                                    <td>{{$list->is_manglik}}</td>
                                    <td>{{$list->date_of_birth}}</td>
                                    <td>{{$list->ptr_manglik}}</td>
                                    <td><?php $per= 2/3*100; echo $per?></td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tbody>
                                @foreach ($show2 as $list)
                                <tr>
                                    <td>{{$list->name}}</td>
                                    <td>{{$list->email}}</td>
                                    @if ($list->gender==0)
                                    <td>Female</td>
                                    @else
                                    <td>Male</td>
                                    @endif

                                    <td>{{$list->family_type}}</td>

                                    <td>{{$list->income}}</td>
                                    <td>{{$list->occupation}}</td>
                                    <td>{{$list->is_manglik}}</td>
                                    <td>{{$list->date_of_birth}}</td>
                                    <td>{{$list->ptr_manglik}}</td>
                                    <td><?php $per= 1/3*100; echo $per?></td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tbody>
                                @foreach ($show3 as $list)
                                <tr>
                                    <td>{{$list->name}}</td>
                                    <td>{{$list->email}}</td>
                                    @if ($list->gender==0)
                                    <td>Female</td>
                                    @else
                                    <td>Male</td>
                                    @endif

                                    <td>{{$list->family_type}}</td>

                                    <td>{{$list->income}}</td>
                                    <td>{{$list->occupation}}</td>
                                    <td>{{$list->is_manglik}}</td>
                                    <td>{{$list->date_of_birth}}</td>
                                    <td>{{$list->ptr_manglik}}</td>
                                    <td><?php $per= 0/3*100; echo $per?></td>
                                </tr>
                                @endforeach
                            </tbody>

                          </table>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
