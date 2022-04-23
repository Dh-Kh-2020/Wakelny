
@extends('client.master_layout')
@section('content')
    <section class="ftco-section">
        <div class="container  ">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="login-wrap p-4 p-md-5 border shadow-sm my-5">

                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                
                                            @if (session('status'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ session('status') }}
                                                </div>
                                            @endif
                                            <form method="POST" action="{{route('forget-pass')}}" class="login-form">
                                        @csrf
                                

                            <div class="form-password-toggle">
                                <label class="form-label" for="password">E-Mail Address</label>
                                <div class="input-group input-group-merge">
                                    <input type="email" class="form-control" id="email" type="email"  name="email" value="{{ old('email') }}" autocomplete="email" autofocus />

                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                      
                            <button class="wak_btn d-grid w-100"> ارسال رابط التحقق للايميل
                            </button>
                            {{ csrf_field() }}

                        </form>
                              



                                
                          
                          
                        </div>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
