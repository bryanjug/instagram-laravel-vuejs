@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" src="https://scontent-lax3-1.cdninstagram.com/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=scontent-lax3-1.cdninstagram.com&_nc_ohc=wbBX-0-mRFwAX-nI-2H&tp=1&oh=328804d6f132084e94178a12de95969f&oe=605BA967" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            
            <div class="d-flex">
                <div class="pr-5">
                    <strong>153 </strong>
                    Posts
                </div>
                <div class="pr-5">
                    <strong>23k </strong>
                    followers
                </div>
                <div class="pr-5">
                    <strong>212 </strong>
                    following
                </div>
            </div>
            <div class="pt-4 font-weight-bold">
                {{ $user->profile->title }}
            </div>
            <div>
                {{ $user->profile->description }}
            </div>
            <div>
                <a href='#'>{{ $user->profile->url }}</a>
            </div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img class="w-100" src="https://scontent-lax3-1.cdninstagram.com/v/t51.2885-15/e35/c0.20.866.866a/s320x320/150607721_1232644437130448_5432726904860811056_n.jpg?_nc_ht=scontent-lax3-1.cdninstagram.com&_nc_cat=108&_nc_ohc=LWkl5luZdusAX_3G8iQ&tp=1&oh=70e5e21b00436a2f11b96ab0ac5c2642&oe=606043CF" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://scontent-lax3-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c0.65.943.943a/s640x640/148526975_459153691922829_5035445392948180720_n.jpg?_nc_ht=scontent-lax3-1.cdninstagram.com&_nc_cat=109&_nc_ohc=JwA3UY_b24wAX8y47jr&tp=1&oh=de9bc42592ce701f1b5c43a2238c7676&oe=605F2F02" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://scontent-lax3-1.cdninstagram.com/v/t51.2885-15/e35/c105.0.617.617a/s480x480/145878027_842261619672422_3701576441888003086_n.jpg?_nc_ht=scontent-lax3-1.cdninstagram.com&_nc_cat=102&_nc_ohc=yuTK-d0THW0AX8BDJjm&tp=1&oh=1dd577c3a67235c0110d77196eb2dfa2&oe=605E7127" alt="">
        </div>
    </div>
</div>
@endsection
