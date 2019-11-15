@if(isset($data))
    @if(count($data) > 0)
        @if($result == 'city')
            <option value="city">Chọn thành phố</option>
            @foreach($cities as $key => $city)
            <option value="{{ $city->id }}" @if($city->id == $city_id) selected @endif>{{ $city->city }}</option>
            @endforeach
        @elseif($result == 'district')
            <option value="district">Chọn quận</option>
            @foreach($data as $key => $district)
            <option value="{{ $district->id }}">{{ $district->district }}</option>
            @endforeach
        @elseif($result == 'street')
            <option value="street">Chọn đường</option>
            @foreach($data as $key => $street)
            <option value="{{ $street->id }}">{{ $street->street }}</option>
            @endforeach
        @endif
    @endif
@else
@if($result == 'city')
            <option value="city">Chọn thành phố</option>
            @foreach($cities as $key => $city)
            <option value="{{ $city->id }}" @if($city->id == $city_id) selected @endif>{{ $city->city }}</option>
            @endforeach
        @elseif($result == 'district')
            <option value="district">Chọn quận</option>
            @foreach($data as $key => $district)
            <option value="{{ $district->id }}">{{ $district->district }}</option>
            @endforeach
        @elseif($result == 'street')
            <option value="street">Chọn đường</option>
            @foreach($data as $key => $street)
            <option value="{{ $street->id }}">{{ $street->street }}</option>
            @endforeach
        @endif
@endif
