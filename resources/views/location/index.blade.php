<div class="tab-pane" id="address">
    <div class="row gy-4">       
        <div class="col-md-6">
            <div class="form-group">
                <label for="province">Tỉnh/Thành Phố</label>
                <select class="form-control" id="province-dropdown">
                    <option value="">Chọn tỉnh/thành phố</option>
                    @foreach ( App\Models\Province::all() as $province)
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
                <select class="form-control" id="district-dropdown">
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="ward">Phường/Xã</label>
                <select class="form-control" id="ward-dropdown" name="ward_id">
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <label for="address">Thôn/Xóm/Số nhà</label>
            <input id="address" type="text" class="form-control" name="address">
        </div>
    </div>
</div><!-- .tab-pane -->
<br>
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
