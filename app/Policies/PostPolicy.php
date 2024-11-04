<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    /**
     * Determine whether the user can view any models.
    //  */
    // public function viewAny(User $user): bool
    // {
    //     //
    // }

    // /**
    //  * Determine whether the user can view the model.
    //  */
    // public function view(User $user, Post $post): bool
    // {
    //     //
    // }

    // /**
    //  * Determine whether the user can create models.
    //  */
    // public function create(User $user): bool
    // {
    //     //
    // }

    // /**
    //  * Determine whether the user can update the model.
    //  */
    // public function update(User $user, Post $post): bool
    // {
    //     //
    // }

    // /**
    //  * Determine whether the user can delete the model.
    //  */
    // public function delete(User $user, Post $post): bool
    // {
    //     //
    // }

    // /**
    //  * Determine whether the user can restore the model.
    //  */
    // public function restore(User $user, Post $post): bool
    // {
    //     //
    // }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function modify(User $user, Post $post): Response
    {
        // Jika user id di tabel user sama dengan di tabel post yang mewakili post
        // Maka dia bisa menghapusnya
        // Jika tidak maka tolak dan beri pesan "anda bukan pemilik post"
        return $user->id === $post->user_id ? Response::allow() : Response::deny('anda bukan pemilik post');
    }
}
