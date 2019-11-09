@if($result == 'city')
    <option value="">Chọn thành phố</option>
    @foreach($cities as $key => $city)
    <option value="{{ $city->id }}">{{ $city->city }}</option>
    @endforeach
@elseif($result == 'district')
    <option value="">Chọn quận</option>
    @foreach($data as $key => $district)
    <option value="{{ $district->id }}">{{ $district->district }}</option>
    @endforeach
@elseif($result == 'street')
    <option value="">Chọn đường</option>
    @foreach($data as $key => $street)
    <option value="{{ $street->id }}">{{ $street->street }}</option>
    @endforeach
@endif