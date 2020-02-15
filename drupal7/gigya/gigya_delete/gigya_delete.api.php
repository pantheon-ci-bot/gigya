<?php
/**
 * Created by PhpStorm.
 * User: Yaniv Aran-Shamir
 * Date: 10/23/16
 * Time: 9:18 AM
 */

/**
 *
 * This is an example of how to fetch ds data only for the current user uid.
 *
 */
function fetch_ds_data_only() {
  global $user;
  $gigya_uid = _gigya_get_guid_by_duid($user->uid);
  if (!empty($gigya_uid)) {
    $ds_data = gigya_delete_get_data($gigya_uid);
  }


}

/**
 * The following example add a value to the ds data array.
 * @param $ds_data
 */
function hook_gigya_delete_data_alter(&$ds_data) {
//  $ds_data['type']['field'] = "d";
}
