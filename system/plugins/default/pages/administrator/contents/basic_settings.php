<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network (OSSN)
 * @author    OSSN Core Team <info@openteknik.com>
 * @copyright (C) OpenTeknik LLC
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
?>

<?php
echo ossn_view_form('admin/basic_settings', array(
    'action' => ossn_site_url('action/admin/settings/save/basic'),
    'class' => 'ossn-admin-form'
));
?>

<?php
