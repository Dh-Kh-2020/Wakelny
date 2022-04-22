 <form action="{{ route('save_user') }}" method="POST" class="login-form">
                        @csrf
                            <div class="form-group mb-2">
                                <label for="username" class="form-label">{{ __('login.name') }}</label>
                                <input type="text" class="form-control rounded-left" placeholder="Enter Your Name"  name="name">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="form-group mb-2">
                                <label for="text" class="form-label">{{ __('login.email') }}</label>
                                <input type="email" class="form-control rounded-left" placeholder="Enter Your Email"  name="email" value="{{ $data->name }}">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password">{{ __('login.password') }}</label>
                                <div class="input-group input-group-merge">
                                    <input style="height: 38px;" type="password" class="form-control" name="user_pass"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" name="password" />

                                    @error('user_pass')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password">{{ __('login.cpassword') }}</label>
                                <div class="input-group input-group-merge">
                                    <input style="height: 38px;" type="password" class="form-control" name="confirm_pass"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password"  />
                                    @error('confirm_pass')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    {{-- <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span> --}}
                                </div>
                            </div>
                            <button class="wak_btn d-grid w-100">{{ __('login.register') }}
                            </button>
                            {{ csrf_field() }}
                            <button class="wak_btn green_border w-100 mt-3">
                                {{ __('login.register') }} مع Google
                            </button>
                            <p class="text-center mt-3">
                                <span>{{ __('login.have_account') }}?</span>
                                <a href="{{route('login')}}">
                                    <span style="color: #0d41fd">Sign in instead</span>
                                </a>
                            </p>
                        </form>