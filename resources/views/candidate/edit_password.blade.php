@extends('front.layout.app')

@section('main_content')
<div class="page-top" style="background-image: url('{{ asset('uploads/'.$global_banner_data->banner_candidate_panel) }}')">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Password</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content user-panel">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="card">
                    @include('candidate.sidebar')
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <form action="{{ route('candidate_edit_password_update') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="current_password">Current Password *</label>
                            <div class="form-group">
                                <input type="password" id="current_password" name="current_password" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="password">New Password *</label>
                            <div class="form-group">
                                <input type="password" id="password" name="password" class="form-control">
                                <div class="input-group-append">
                                    <span class="input-group-text toggle-password" toggle="#password">
                                        <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="retype_password">Retype Password *</label>
                            <div class="form-group">
                                <input type="password" id="retype_password" name="retype_password" class="form-control">
                                <div class="input-group-append">
                                    <span class="input-group-text toggle-password" toggle="#retype_password">
                                        <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection