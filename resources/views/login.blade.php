<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col lg:flex-row-reverse">
          <div class="text-center lg:text-left">
            <h1 class="text-5xl font-bold">Silakan Login!</h1>
          </div>
          <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
            <div class="card-body">
                <form action="/login/auth" method="post">
                    @csrf
                    <div class="form-control">
                      <label class="label">
                        <span class="label-text">NIP</span>
                      </label>
                      <input type="text" name="nip" placeholder="NIP ..." class="input input-bordered" />
                    </div>
                    <div class="form-control">
                      <label class="label">
                        <span class="label-text">Password</span>
                      </label>
                      <input type="text" name="password" placeholder="password ..." class="input input-bordered" />
                      <label class="label">
                        <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
                      </label>
                    </div>
                    <div class="form-control mt-6">
                      <button type="submite" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
</body>
</html>