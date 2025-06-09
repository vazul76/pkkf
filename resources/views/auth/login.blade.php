<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./assets/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>
<body class="bg-gradient-to-b from-[#0f2b24] to-[#c6d7d3] min-h-screen flex items-center justify-center px-4">

  <!-- Wrapper dengan background gambar -->
  <div class="w-full max-w-5xl min-h-[75vh] bg-[url('./assets/images/bg-login.jpg')] bg-cover bg-center rounded-3xl shadow-2xl flex flex-col md:flex-row overflow-hidden">

    <!-- Kiri: Teks sambutan -->
    <div class="flex-1 flex items-center justify-center p-8 backdrop-brightness-75 text-white">
      <h1 class="text-4xl md:text-5xl font-bold drop-shadow-lg">Long time no see!</h1>
    </div>

    <!-- Kanan: Form Login -->
    <div class="flex-1 flex items-center justify-center backdrop-brightness-75">
      <div class="w-full max-w-sm text-white bg-white/40 backdrop-blur-md p-3 md:p-10 rounded-3xl shadow-lg">
        <form class="flex flex-col gap-4" method="POST" action="{{ route('login') }}">
          @csrf
          <div>
            <label class="text-sm font-medium block mb-1 text-black" for="email">Email:</label>
            <input class="w-full rounded-lg p-2.5 text-sm bg-white/20 text-white placeholder:text-white/70" id="email" type="email" name="email" placeholder="email@example.com" required>
            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
            @enderror
          </div>
          <div>
            <label class="text-sm font-medium block mb-1 text-black" for="password">Password:</label>
            <input class="w-full rounded-lg p-2.5 text-sm bg-white/20 text-white placeholder:text-white/70" id="password" type="password" name="password" placeholder="Enter Password" required>
            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
            @enderror
            <p class="mt-2 hover:text-white cursor-pointer text-sm text-black">Forgot password?</p>
          </div>
          @if(session('error'))
          <div class="mb-4 p-3 bg-red-100 text-red-700 rounded-lg text-center">
            {{ session('error') }}
          </div>
          @endif
          <div class="flex flex-col gap-2">
            <button type="submit" class="bg-[#6C8976] text-white px-4 py-2 rounded-lg hover:bg-emerald-950 transition-colors text-center">Login</button>
            <a href="/auth/google" class="transition-colors focus:ring-2 p-0.5 disabled:cursor-not-allowed bg-white hover:bg-gray-100 text-gray-900 border border-gray-200 disabled:bg-gray-300 disabled:text-gray-700 rounded-lg text-center">
            <span class="flex items-center justify-center gap-2 font-medium py-1 px-2.5 text-base">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1"
                viewBox="0 0 48 48" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8
                    c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657
                    C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20
                    C44,22.659,43.862,21.35,43.611,20.083z" />
                <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12
                    c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4
                    C16.318,4,9.656,8.337,6.306,14.691z" />
                <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238
                    C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025
                    C9.505,39.556,16.227,44,24,44z" />
                <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303
                    c-0.792,2.237-2.231,4.166-4.087,5.571l6.19,5.238C36.971,39.205,44,34,44,24
                    C44,22.659,43.862,21.35,43.611,20.083z" />
                </svg>
                Continue with Google
            </span>
            </a>
          </div>
          <div class="text-center mt-4 text-sm text-white">
            New user? <a href="{{ route('register') }}" class="text-[#003332] underline hover:text-emerald-200">Create account here</a>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
