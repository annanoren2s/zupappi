<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Credential;
use Illuminate\Auth\Access\HandlesAuthorization;

class CredentialPolicy
{
    use HandlesAuthorization;

    public function before(User $user, $ability)
    {
        return true;
    }

    /**
     * Determine whether the credential can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list credentials');
    }

    /**
     * Determine whether the credential can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Credential  $model
     * @return mixed
     */
    public function view(User $user, Credential $model)
    {
        return $user->hasPermissionTo('view credentials');
    }

    /**
     * Determine whether the credential can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create credentials');
    }

    /**
     * Determine whether the credential can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Credential  $model
     * @return mixed
     */
    public function update(User $user, Credential $model)
    {
        return $user->hasPermissionTo('update credentials');
    }

    /**
     * Determine whether the credential can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Credential  $model
     * @return mixed
     */
    public function delete(User $user, Credential $model)
    {
        return $user->hasPermissionTo('delete credentials');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Credential  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete credentials');
    }

    /**
     * Determine whether the credential can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Credential  $model
     * @return mixed
     */
    public function restore(User $user, Credential $model)
    {
        return false;
    }

    /**
     * Determine whether the credential can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Credential  $model
     * @return mixed
     */
    public function forceDelete(User $user, Credential $model)
    {
        return false;
    }
}
