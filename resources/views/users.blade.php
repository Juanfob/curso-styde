@include('header')
    <div class="row mt-5">
      <div class="col-8">
        <h1>{{ $title }}</h1>


        @if(! empty($users))
            <ul>
                @foreach ($users as $user)
                    <li>{{ $user }} </li>
                @endforeach
            </ul>
        @else
            <p>No hay usuarios registrados</p>
        @endif
    </div>
        @include('sidebar')
    </div>
@include('footer')
