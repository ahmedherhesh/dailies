@extends('base')
@section('content')
    <table class="table table-bordered text-center ">
        <thead>
            <tr class="table-dark">
                <th scope="row">القطاع</th>
                <th scope="col">مكان الخدمة</th>
                @foreach ($periods as $period)
                    <th scope="col">{{ $period->title }}<br>{{ $period->period }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($sectors as $sector)
                <tr>
                    <td scope="col">{{ $sector->title }}</td>
                    <td scope="col">{{ $sector->description }}</td>
                    <td scope="col">
                        @foreach ($sector->sectorServices as $service)
                            @if ($service->period_id % 3 == 1)
                                {{ $service->user->name }} {{ $service->notes }}<br>
                            @endif
                        @endforeach
                    </td>
                    <td scope="col">
                        @foreach ($sector->sectorServices as $service)
                            @if ($service->period_id % 3 == 2)
                                {{ $service->user->name }} {{ $service->notes }}<br>
                            @endif
                        @endforeach
                    </td>
                    <td scope="col">
                        @foreach ($sector->sectorServices as $service)
                            @if ($service->period_id % 3 == 3)
                                {{ $service->user->name }} {{ $service->notes }}<br>
                            @endif
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <table class="table table-bordered text-center">
        <thead>
            <tr class="table-dark">
                <th colspan="2">الخدمات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <td>{{ $service->title }}</td>
                <td>{{ $service->user->name }} </td>
            @endforeach
        </tbody>
    </table>
@endsection
