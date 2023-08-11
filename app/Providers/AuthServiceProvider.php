<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('add-post', function (User $user) {
            return $user->role === 'employer';
        });
        Gate::define('update-post', function (User $user, Job $job) {
            $employer = Employer::where('user_id',$user->id)->value('id');
            return $user->role === 'employer' && $employer === $job->employer_id;
        });
        // Gate::define('update-post', function (User $user, Post $post) {
        //     return $user->id === $post->user_id;
        // });
        // Gate::define('update-post', function (User $user, Post $post) {
        //     return $user->id === $post->user_id;
        // });
    }
}
