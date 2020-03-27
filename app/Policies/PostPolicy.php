<?php

namespace App\Policies;

use App\Models\Post;
use App\User;
use Carbon\Carbon;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Post $post)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Post $post)
    {
        return $post->user_id == $user->id && Carbon::now()->diffInSeconds($post->created_at) < 10 * 60;
    }

    public function delete(User $user, Post $post)
    {
        return $post->user_id == $user->id && Carbon::now()->diffInSeconds($post->created_at) < 10 * 60;
    }
}
