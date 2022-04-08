<div class="tab-pane" id="address">
    <div class="row gy-4">
        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label" for="address">Địa chỉ</label>
                <input type="text" class="form-control form-control-lg" id="address"
                    value="{{ Auth()->user()->address }}" name="address">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="province">Tỉnh/Thành Phố</label>
                <select class="form-control" id="province-dropdown">
                    <option value="">Chọn tỉnh/thành phố</option>
                    @foreach ($provinces as $province)
                        <option value="{{ $province->id }}">
                            {{ $province->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="district">Quận/Huyện</label>
                @if(Auth()->user()->ward_id != NULL)
                <select class="form-control" id="district-dropdown">
                    <option value="  {{ Auth()->user()->ward->district->id }}">
                        {{ Auth()->user()->ward->district->name }}
                    </option>
                </select>
                @else
                <select class="form-control" id="district-dropdown">
                </select>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="ward">Phường/Xã</label>
                @if(Auth()->user()->ward_id != NULL)
                <select class="form-control" id="ward-dropdown" name="ward_id">
                    <option value="  {{ Auth()->user()->ward->id }}">
                        {{ Auth()->user()->ward->name }}
                    </option>
                </select>
                @else
                <select class="form-control" id="ward-dropdown" name="ward_id">
                </select>
                @endif
            </div>
        </div>
    </div>
</div><!-- .tab-pane -->
<br>
<button class="btn btn-primary" value="submit">Cập nhật</button>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#province-dropdown').on('change', function() {
            var province_id = this.value;
            $("#district-dropdown").html('');
            $.ajax({
                url: "{{ route('locations.get-district') }}",
                type: "POST",
                data: {
                    province_id: province_id,
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(result) {
                    $('#district-dropdown').html(
                        '<option value="">Chọn quận/huyện</option>');
                    $.each(result.districts, function(key, value) {
                        $("#district-dropdown").append('<option value="' + value
                            .id +
                            '">' + value.name + '</option>');
                    });
                    $('#ward-dropdown').html(
                        '<option value="">Chọn phường xã </option>');
                }
            });
        });

        $('#district-dropdown').on('change', function() {
            var district_id = this.value;
            $("#ward-dropdown").html('');
            $.ajax({
                url: "{{ route('locations.get-ward') }}",
                type: "POST",
                data: {
                    district_id: district_id,
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(result) {
                    $('#ward-dropdown').html('<option value="">Chọn phường/xã</option>');
                    $.each(result.wards, function(key, value) {
                        $("#ward-dropdown").append('<option value="' + value.id +
                            '">' + value.name + '</option>');
                    });
                }
            });
        });

    });
</script>
