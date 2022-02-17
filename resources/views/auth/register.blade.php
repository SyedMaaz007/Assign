@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="date_of_birth" class="col-md-4 col-form-label text-md-end">{{ __('Date of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" required autocomplete="date_of_birth">

                                @error('date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="income" class="col-md-4 col-form-label text-md-end">{{ __('Annual Income') }}</label>

                            <div class="col-md-6">
                                <input id="income" type="number" class="form-control @error('income') is-invalid @enderror" name="income" value="{{ old('income') }}" required autocomplete="income">

                                @error('income')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="gender1" value="1" />
                                <label class="form-check-label" for="gender1">Male</label>
                              </div>

                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="gender2" value="0" />
                                <label class="form-check-label" for="gender2">Female</label>
                              </div>

                        </div>

                        <div class="row mb-3">
                            <label for="occupation" class="col-md-4 col-form-label text-md-end">{{ __('Occupation') }}</label>
                            <div class="col-md-6">
                                <select class="browser-default custom-select" name="occupation">
                                <option selected>Select</option>
                                <option value="Private_job">Private Job</option>
                                <option value="Gvnt_job">Government Job</option>
                                <option value="Business">Business</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="family" class="col-md-4 col-form-label text-md-end">{{ __('Family_type') }}</label>
                            <div class="col-md-6">
                                <select class="browser-default custom-select" name="family_type">
                                <option selected>Select</option>
                                <option value="Joint_Family">Joint Family</option>
                                <option value="Nuclear_Family">Nuclear Family</option>
                              </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="is_manglik" class="col-md-4 col-form-label text-md-end">{{ __('Manglik') }}</label>
                            <div class="col-md-6">
                                <select class="browser-default custom-select" name="is_manglik">
                                <option selected>Select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                </select>
                            </div>
                        </div>


                        <div class="card-header">{{ __('Partner Preference') }}</div>

                        <div class="row mb-3">
                            <label for="expect_income" class="col-md-4 col-form-label text-md-end">{{ __('Expected Income') }}</label>
                            <input type="number" id="amount" readonly style="border:0; font-weight:bold;" name="price1">

                            <input type="number" id="amount2" readonly style="border:0; font-weight:bold;" name="price2">

                        </div>
                        <div class="col-md-12">
                            <div id="slider-range"></div>
                        </div>
                        <br>
                        <div class="row mb-3">
                            <label for="ptr_family" class="col-md-4 col-form-label text-md-end">{{ __('Partner Family Type') }}</label>
                            <div class="col-md-6">
                                <select  class="browser-default custom-select" id="ptr_family" name="p_family[]" multiple="multiple">

                                    <option value="Joint_Family">Joint Family</option>
                                    <option value="Nuclear_Family">Nuclear Family</option>
                                  </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="ptr_occupation" class="col-md-4 col-form-label text-md-end">{{ __('Partner Occupation') }}</label>
                            <div class="col-md-6">
                                <select  class="browser-default custom-select" id="ptr_occupation" name="p_occupation[]" multiple="multiple">

                                    <option value="Private_job">Private Job</option>
                                    <option value="Gvnt_job">Government Job</option>
                                    <option value="Business">Business</option>
                                    </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="ptr_manglik" class="col-md-4 col-form-label text-md-end">{{ __('Patner Manglik') }}</label>
                            <div class="col-md-6">
                                <select class="browser-default custom-select" name="ptr_manglik">
                                <option selected>Select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                <option value="Both">Both</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

