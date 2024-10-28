@extends('user.layout')
@section('content')
<div class="position-relative mb-3">
    <img class="img-fluid w-50 float-center ml-4 mb-2" src="{{ asset('img/'.$detail->gambar ) }}"style="object-fit: cover;">
    <div class="overlay position-relative bg-light">
        <div class="mb-3">
            <a href="">Technology</a>
            <span class="px-1">/</span>
            <span>January 01, 2045</span>
        </div>
        <div>
            <h3 class="mb-3">{{ $detail->judul }}</h3>
            <p>{{ $detail->isi }}</p>
            <h4 class="mb-3">Est dolor lorem et ea</h4>
            <img class="img-fluid w-50 float-left mr-4 mb-2" src="img/news-500x280-1.jpg">
            <p>Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor
                invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam
                lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor
                rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor
                sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at
                lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at
                sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos. Invidunt sed diam
                dolores takimata dolor dolore dolore sit. Sit ipsum erat amet lorem et, magna
                sea at sed et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et. Et
                duo tempor sea kasd clita ipsum et.</p>
            <h5 class="mb-3">Est dolor lorem et ea</h5>
            <img class="img-fluid w-50 float-right ml-4 mb-2" src="img/news-500x280-2.jpg">
            <p>Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor
                invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam
                lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor
                rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor
                sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at
                lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at
                sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos. Invidunt sed diam
                dolores takimata dolor dolore dolore sit. Sit ipsum erat amet lorem et, magna
                sea at sed et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et. Et
                duo tempor sea kasd clita ipsum et. Takimata kasd diam justo est eos erat
                aliquyam et ut.</p>
        </div>
    </div>
</div>
@endsection