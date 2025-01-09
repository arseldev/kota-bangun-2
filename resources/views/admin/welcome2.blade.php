@extends('admin.layouts.parent')


@section('title', 'Admin')


@section('subtitle', 'Dashboard')
@section('main', 'Dashboard')

@section('location')
    <div class="breadcrumb-item">Dashboard</div>
@endsection

@section('content')
    <h2 class="section-title">Simple Map</h2>
    <p class="section-lead">
        Here is a simple example using the map, we use the plugin <code>gmaps.js</code> made by <a
            href="https://github.com/hpneo" target="_blank">@hpneo</a>. You can learn more about this plugin <a
            href="https://github.com/hpneo/gmaps" target="_blank">here</a>.
    </p>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Map</h4>
                </div>
                <div class="card-body">

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3883.2821608787103!2d116.55384758310986!3d-0.38106515495863597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df64fe33e2a41e1%3A0x22d17a80795d6b10!2sKANTOR%20DESA%20KOTA%20BANGUN%20II!5e0!3m2!1sid!2sid!4v1721869242728!5m2!1sid!2sid"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </div>
    </div>
@endsection
