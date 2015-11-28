<?php namespace KurtJensen\MyCalendar\Traits;

use Auth;
use DB;
use KurtJensen\MyCalendar\Models\Settings;
//use ShahiemSeymor\Roles\Models\UserPermission as Permission;
use RainLab\User\Models\User as User;

trait LoadPermissions {
	/**
	 * @var array Permissions array for current user
	 */
	public $permarray = [];

	public function loadPermissions($user_id = null) {
		if (count($this->permarray)) {
			return $this->permarray;
		}

		if (!$user_id) {
			$User = Auth::getUser();
			$user_id = $User->id;
		}
		$deny_perm = intval(Settings::get('deny_perm'));

		if ($user_id) {
			$roles = DB::table('shahiemseymor_assigned_roles')->
				where('user_id', '=', $user_id)->lists('role_id');

			$this->permarray = array_merge(
				DB::table('shahiemseymor_permission_role')->
					wherein('role_id', $roles)->
					where('permission_id', '<>', $deny_perm)->
					lists('permission_id'),
				[Settings::get('public_perm')]);

			$this->permarray = array_unique($this->permarray);
			return $this->permarray;
		} else {
			$this->permarray = [Settings::get('public_perm')];
		}

		return $this->permarray;
	}
}
