<?php
/**
 * MyBBPublisher Plugin for MyBB
 * Copyright 2011 CommunityPlugins.com, All Rights Reserved
 *
 * Website: http://www.communityplugins.com
 * Version 1.7.0
 * License: Creative Commons Attribution-NonCommerical ShareAlike 3.0
				http://creativecommons.org/licenses/by-nc-sa/3.0/legalcode
 *
 */

/************************************
Admin tools
************************************/
$l['mybbpublisher_no_manage'] = "You do not appear to be the administrator of any apps, pages or groups. Please verify that you own the application you are trying to setup, it should have been listed here.";
$l['mybbpublisher_label_own'] = "Nothing to manage: Just use your own stuff:";

$l['mybbpublisher_tw_step1'] = "Zugangsdaten überprüfen";
$l['mybbpublisher_tw_step2'] = "Show Current Available (check rate limiting)";
$l['mybbpublisher_tw_step3'] = "Show Lastest Statuses (will verify app and settings are correct)";

$l['mybbpublisher_tw_step1_results'] = "Results of Step 1: Twitter - Verify Credentials";
$l['mybbpublisher_tw_step2_results'] = "Results of Step 2: Twitter - Show Current Available";
$l['mybbpublisher_tw_step3_results'] = "Results of Step 3: Twitter - Show Lastest Statuses";

$l['mybbpublisher_tw_missing'] = "If you are expecting to see Twitter tests here, you need to populate the MyBB Publisher settings with the minimum of Consumer Key, Consumer Secret, Token and Token Secret in the Twitter Section.";

$l['mybbpublisher_fb_step1'] = "Verify App ID Setting";
$l['mybbpublisher_fb_step2'] = "Get Access Token for your Personal FB Account.";
$l['mybbpublisher_fb_step3'] = "Select where to post and specify author.";
$l['mybbpublisher_fb_step4'] = "Create/Delete a Test Post";

$l['mybbpublisher_fb_step1_results'] = "Results of Step 1: Facebook - Verify App ID Setting";
$l['mybbpublisher_fb_step2_results'] = "Results of Step 2: Facebook - Get Access Token for your Personal FB Account.";
$l['mybbpublisher_fb_step3_results'] = "Results of Step 3: Facebook - Select where to post and specify author.";
$l['mybbpublisher_fb_step4_results'] = "Results of Step 4: Facebook - Create/Delete a Test Post";

$l['mybbpublisher_fb_missing'] = "If you are expecting to see Facebook tests here, you need to populate the MyBB Publisher settings with the minimum of Application ID and Application Secret inthe Facebook Section.";
$l['mybbpublisher_fb_missing2'] = "You must provide the Application ID and Application Secret before proceeding.";

$l['mybbpublisher_fb_appid_check'] = "The output should contain the name and description of your application as you entered it. If not, then the APP ID you provided is incorrect or the application is not correctly setup on Facebook";

$l['mybbpublisher_fb_token_success'] = "Successfully obtained access_token:";
$l['mybbpublisher_fb_token_saved'] = "This token has been saved to your MyBBPublisher settings";

$l['mybbpublisher_fb_manage_success'] = "Successfully updated where to post and whom to post as.";

$l['mybbpublisher_fb_error'] = "Something went wrong. No error information available.";

$l['mybbpublisher_fb_test_success'] = "Successfully deleted. Return value: ";
$l['mybbpublisher_fb_test_failed'] = "Delete failed. Return value: ";
$l['mybbpublisher_fb_test_return'] = "Return value of test post update:";
$l['mybbpublisher_fb_test_made'] = "Verify test post has been made to your account/page then ";
$l['mybbpublisher_fb_test_delete'] = "attempt to delete it";
$l['mybbpublisher_fb_test_failed2'] = "Test post was not made. See output above.";

$l['mybbpublisher_curl'] = "MyBB Publisher requires cURL to be enabled. Please ask your host to install/enable it.";
$l['mybbpublisher_json'] = "MyBB Publisher requires JSON to be enabled. Please ask your host to install/enable it.";

/************************************
Facebook language
************************************/
$l['mybbpublisher_at'] = " - ";
$l['mybbpublisher_activated'] = "MyBBPublisher activated successfully, please configure the settings below.";

/************************************
Facebook language
************************************/
$l['mybbpublisher_fb_icon_alt'] = "New threads in this forum are published to Facebook.";
$l['mybbpublisher_new_announce_fb'] = "A new announcement, {msg}, has been posted to our forums{urlbit}";
$l['mybbpublisher_new_thread_fb'] = "A new thread, {msg}, has been posted to our forums{urlbit}";

/************************************
Twitter language
************************************/
$l['mybbpublisher_tw_icon_alt'] = "New threads in this forum are published to Twitter.";
//$l['mybbpublisher_new_announce_tw'] = "A new announcement, {msg}, has been posted to our forums{urlbit}";
//$l['mybbpublisher_new_thread_tw'] = "A new thread, {msg}, has been posted to our forums{urlbit}";

/**
it is recommended to use these shorter language setting for Twitter (_tw) to stay within their 140 character
limit for status updates
**/
$l['mybbpublisher_new_announce_tw'] = "Neue #uhuc Ankündigung: {msg} {urlbit} #announcement";
$l['mybbpublisher_new_thread_tw'] = "Neues Thema auf #uhuc: {msg} {urlbit}";


?>
