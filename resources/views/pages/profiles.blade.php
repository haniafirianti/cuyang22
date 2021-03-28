@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center">CUYANG PROFILE</div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="form-group">
                    <form>
                    <img id="tampil_picture" style="object-fit: cover; height: 200px; width: 200px; border-radius:5px;" />
                    <input type="file" name="profile_picture" id="preview_gambar" class="img-thumbnail" style="display:none; border-radius: 5px;" onchange="document.getElementById('user_profile').value=this.value" /><br>

                    <button type="button" id="user_profile" class="btn btn-outline-primary btn-sm m-2" onclick="document.getElementById('preview_gambar').click()">Pilih Gambar</button>
                    </form>
                    </div>

                </div>
                
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body card-message" id="card-message-scroll">
                           
                            <h5 v-else class="text-center">Pilih Pengguna untuk Memulai chat</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
<script>
    function bacaGambar(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#tampil_picture').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#preview_gambar").change(function() {
        bacaGambar(this);
    });
</script>
@endpush
@endsection
