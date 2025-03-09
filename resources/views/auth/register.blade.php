<x-public-area.layouts.app-layout>
    <x-slot name="page">

<!-- Hero Section -->
<section id="hero" class="hero section">

    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <h1>Register with <span>Axcert</span></h1>
      <p>Et voluptate esse accusantium accusamus natus reiciendis quidem voluptates similique aut.</p>

    </div>

  </section><!-- /Hero Section -->


  <section id="about" class="about section">


    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center " data-aos="fade-up" data-aos-delay="200">

        <div class="card shadow mt-4 mb-4">
            <div class="card-body">
                <div class="col-lg-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                          <label for="inp-name">Name</label>
                          <input type="text"
                            class="form-control" name="name" id="inp-name" value="{{ old('name') }}" placeholder="Enter your name" required>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="inp-email">Email</label>
                            <input type="email"
                              class="form-control" name="email" id="inp-email" value="{{ old('email') }}" placeholder="Enter your email" required>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="inp-password">Password</label>
                            <input type="password"
                              class="form-control" name="password" id="inp-password"  placeholder="Enter your password" required>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="inp-name">Confirm Password</label>
                            <input type="password"
                              class="form-control" name="password_confirmation" id="inp-password_confirmation"  placeholder="Enter your password" required>
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>

                            <button type="submit" class="btn btn-primary">
                               Sign Up
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>

    </div>

  </section><!



    </x-slot>
</x-public-area.layouts.app-layout>


