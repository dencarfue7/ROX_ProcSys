<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\FundSource;
use Illuminate\Auth\Access\HandlesAuthorization;

class FundSourcePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:FundSource');
    }

    public function view(AuthUser $authUser, FundSource $fundSource): bool
    {
        return $authUser->can('View:FundSource');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:FundSource');
    }

    public function update(AuthUser $authUser, FundSource $fundSource): bool
    {
        return $authUser->can('Update:FundSource');
    }

    public function delete(AuthUser $authUser, FundSource $fundSource): bool
    {
        return $authUser->can('Delete:FundSource');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:FundSource');
    }

    public function restore(AuthUser $authUser, FundSource $fundSource): bool
    {
        return $authUser->can('Restore:FundSource');
    }

    public function forceDelete(AuthUser $authUser, FundSource $fundSource): bool
    {
        return $authUser->can('ForceDelete:FundSource');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:FundSource');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:FundSource');
    }

    public function replicate(AuthUser $authUser, FundSource $fundSource): bool
    {
        return $authUser->can('Replicate:FundSource');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:FundSource');
    }

}