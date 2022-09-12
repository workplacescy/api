@extends('twill::layouts.form')

@section('contentFields')
    <x-twill::medias label="Photos" name="photos" :max="5"/>
    <x-twill::input label="Description" name="description" type="textarea"/>
    <x-twill::radios label="Type" name="type" :options="$form['types']['options']" :default="$form['types']['default']"/>
    <x-twill::radios label="City" name="city" :options="$form['cities']['options']" :default="$form['cities']['default']"/>
    <x-twill::radios label="Sockets" name="sockets" :options="$form['sockets']['options']" :default="$form['sockets']['default']"/>
    <x-twill::radios label="Noise" name="noise" :options="$form['noises']['options']" :default="$form['noises']['default']"/>
    <x-twill::radios label="Size" name="size" :options="$form['sizes']['options']" :default="$form['sizes']['default']"/>
    <x-twill::radios label="Busyness" name="busyness" :options="$form['busynesses']['options']" :default="$form['busynesses']['default']"/>
    <x-twill::radios label="View" name="view" :options="$form['views']['options']" :default="$form['views']['default']"/>
    <x-twill::radios label="Cuisine" name="cuisine" :options="$form['cuisines']['options']" :default="$form['cuisines']['default']"/>
@stop

@section('sideFieldset')
    <p>place_id<br>{{ $item->place_id }}</p>
    <p>address<br>{{ $item->address }}</p>
    <p>latitude, longitude<br>{{ $item->latitude }}, {{ $item->longitude }}</p>
    <p>url<br><a href="{{ $item->url }}" target="_blank" rel="nofollow noopener">{{ $item->url }}</a></p>
    <p>v_rate<br>{{ $item->v_rate }}</p>
@endsection
