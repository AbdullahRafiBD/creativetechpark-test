<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .title-box {
            background-color: #3800AF;
            border-radius: 8px;
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .title-box h1 {
            color: white;
        }

        .about-box {
            background-color: #3800AF;
            border-radius: 8px;
            height: 100%;
            color: white;
        }
        .footer-box {
            background-color: #3800AF;
            border-radius: 8px;
            height: 100%;
            color: white;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

    </style>

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container">

        <div class="row">

            {{-- Title the time Start and End --}}
            <div class="col-md-12 title-box">
                <h1>Start time 2.15 PM - End time 3.30 PM </h1>
            </div>

        </div>

        <div class="row">
            {{-- About my self --}}
            <div class="col-md-3 mt-2 about-box">
                <h3 class="mt-5">About My self</h3>
                <p>This is Abdullah Al Shihab, an enthusiastic individual. I believe I have the qualifications with skills to make a significant contribution to your organization.
I have completed my B.B.A in Management from Govt Titumir College. Before my graduation, I have completed Laravel course of 6 months where I have learned with an excellent team and proved myself as a great team player and my excellency will be proven again with right opportunity. Also I have done courses on Web Application Design from Creative It Institute.

Right now, I am in my earlier period of career where I am very much eager to learn and develop myself with the organization. So being a part of your organization, I can be one of the greatest assets you have.</p>
            </div>

            <div class="col-md-9">
                <div class="row">
                    {{-- post item here --}}
                    @foreach ($posts as $post)
                    <div class="col-md-4 mt-2">
                        <div class="card">
                            <img src="{{$post['image']}}" style="width: ; height: 100px;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ Illuminate\Support\Str::limit($post['title'], $limit = 20, $end = '...') }}</h5>
                                <p class="card-text">{{ Illuminate\Support\Str::limit($post['description'], $limit = 80, $end = '...') }}</p>
                                <a href="{{ route('single.post', $post['id']) }}" class="btn btn-primary">Read Now</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div style="margin: 0 auto; max-width: 600px;" class="mt-3">
                        {{ $posts->links('pagination::bootstrap-4') }}
                    </div>

                    <div class="col-md-12 footer-box">
                        <h1>Github Repository Link</h1>
                    </div>

                </div>
            </div>

        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>
