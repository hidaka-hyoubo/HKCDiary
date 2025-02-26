    <div class="flex justify-center">
        @if (isset($user))
        <form method="POST" action="{{ route('register') }}" class="w-1/2">
            @csrf

            <div class="form-control my-4">
                <label for="name" class="label">
                    <span class="label-text">Name</span>
                </label>
                <input type="text" name="name" value="{{ $user->name }}" class="input input-bordered w-full">
            </div>

            <div class="form-control my-4">
                <label for="email" class="label">
                    <span class="label-text">Email</span>
                </label>
                <input type="email" name="email" value="{{ $user->email }}"  class="input input-bordered w-full">
            </div>

            <div class="form-control my-4">
                <label for="password" class="label">
                    <span class="label-text">Password</span>
                </label>
                <input type="password" name="password" value="{{ $user->password }}" class="input input-bordered w-full">
            </div>
        @if(Auth::id() == $user->id)
            <button type="submit" class="btn btn-primary btn-block normal-case">更新（未）</button>
        @endif
        </form>
        @endif
    </div>
