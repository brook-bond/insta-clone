@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle" alt="" style="width: 150px; height: 150px">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-center pb-4">
                <div class="d-flex align-items-center">
                    <div class="h4">{{ $user->username }}</div>
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>
                @can('update', $user->profile)
            <a href="/p/create">Add New Post</a>
                @endcan
            </div>
            @can('update', $user->profile)

            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div style="padding-right: 10px"><b>{{ $postsCount }}</b> posts</div>
                <div style="padding-right: 10px"><b>{{ $followersCount }}</b> followers</div>
                <div style="padding-right: 10px"><b>{{ $followingCount }}</b> following</div>
            </div>
            <div class="pt-4"><b>{{ $user->profile->title }}</b></div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
        <div class="row pt-4">
            @foreach ($user->posts as $post)
            <div class="col-4 pb-4" >
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" alt="" class="w-100 h-100">
                </a>
            </div>
            @endforeach
           
            
        </div>
    </div>
</div>
@endsection
