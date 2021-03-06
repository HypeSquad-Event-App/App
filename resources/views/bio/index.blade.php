@php
    use App\User_Bios;
@endphp
@section('title', 'Bio')
@section('content')
    @extends('layouts.base')
<section class="hero is-medium is-primary bg">
    <div class="hero-head">@include ('layouts.nav')</div>
    @foreach (User_Bios::all() as $user)
    <a href="#{{ $user->slug }}">
        <div class="container" style="padding: 10px;">

    <div class="box is-fullheight">
        <article class="media">
          <div class="media-left">
            <figure class="image is-64x64">
                <img class="is-rounded" src="{{ $user->avatar }}" alt="Image">
            </figure>
          </div>
          <div class="media-content">
            <div class="content">
              <p>
                <strong>{{ $user->username }}</strong><small>#{{ $user->discrim }}</small>
                <br />
                <span class="tag is-primary"><i class="fas fa-clock"></i>&nbsp;{{ $user->status }}</span> <span class="tag is-danger"><i class="fas fa-file-code"></i>&nbsp;Lead Developer</span>
                <br />
              </p>
              <div class="columns is-multiline is-centered">

              <div class="column is-one-third">
                <p><strong><i class="fas fa-info-circle"></i>&nbsp;Description:&nbsp;</strong> {{ $user->description }}
                </div></p>
                <div class="column is-one-third">
                    <p><strong><i class="fas fa-envelope-square"></i>&nbsp;Email:&nbsp;</strong> {{ $user->email }}</p>
                </div>
                <div class="column is-one-third">
                <p><strong><i class="far fa-calendar-times"></i>&nbsp;Date of Birth:&nbsp;</strong> {{ $user->dob }}</p>
                </div>
                <div class="column is-one-third">
                    <p><strong><i class="far fa-user"></i>&nbsp;Gender:&nbsp;</strong> {{ $user->gender }}</p>
                </div>
                <div class="column is-one-third">
                    <p><strong><i class="far fa-user"></i>&nbsp;Occupation:&nbsp;</strong> {{ $user->occupation }}</p>
                </div>
                <div class="column is-one-third">
                    <p><strong><i class="far fa-user"></i>&nbsp;Created At:&nbsp;</strong> {{ $user->created_at }}</p>
                </div>
                <div class="column is-one-third">
                    <p><strong><i class="far fa-user"></i>&nbsp;Updated At:&nbsp;</strong> {{ $user->updated_at }}</p>
                </div>

              </div>


            </div>
        </div>
        </article>
      </div>
    </div>
    </a>
      @endforeach

</section>

@endsection

<style>
    bg {
        background-image: url("{{ asset('img/svg_wave.svg') }}");
opacity: 0.9;
background-position: center center;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
    }
</style>
