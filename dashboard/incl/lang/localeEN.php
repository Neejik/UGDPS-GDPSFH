<?php
global $dbPath;
include __DIR__."/../../".$dbPath."config/dashboard.php";
$string["homeNavbar"] = "Home";
$string["welcome"] = "Welcome to ".$gdps.' Dashboard!';
$string["didntInstall"] = "<div style='color:#47a0ff'><b>Warning!</b> You haven't fully installed dashboard! Click on the text to do this.</div>";
$string["levelsWeek"] = "Levels uploaded in a week";
$string["levels3Months"] = "Levels uploaded in 3 months";
$string["footer"] = "✨〃Unnamed GDPS, 2021 - ".date('Y', time())."</br>⚙ GDPSCore v2.0.0-beta";
$string["tipsAfterInstalling"] = "Welcome to Dashboard! We give you some hints after installation:<br>
1. It seems that new permissions have appeared in SQL in the 'roles' table! You should check it out...<br>
2. If you put 'icon.png' to the 'dashboard' folder, then the icon of your GDPS will appear on the top left!<br>
3. You should configure config/dashboard.php!";

$msg[0] = "What are you gonna do today?";
$msg[1] = "Programmer was high af";
$msg[2] = "Oh, hi! First time?";
$msg[3] = "Lastingbeats joins the music library!";
$msg[4] = "Ah, welcome";
$msg[5] = "Well met!";
$msg[6] = "It's not snowing anymore :c";
$msg[7] = "Better than [name a generic GDPS]";
$msg[8] = "MegaSa1nt, I have a crush on you (jk)";
$msg[9] = "Also try Lightsync!";
$msg[10] = "Why is everyone so wild here?";
$msg[11] = "Thanks to LeMaple for the idea";
$msg[12] = "So 0.2.0 finally came out";
$msg[13] = "Nejik.✦ approved this";
$msg[14] = "<div style='color:#47ff47'>This seems like a good place to hide something...</div>";
$msg[15] = "This is a random splash";
$msg[16] = "Welcome to Unnamed GDPS Dashboard!";
$msg[17] = "Did I greet you already?";
$msg[18] = "I was doing this when 2.201 update came out";
$msg[19] = "What is bro cookin?";
$msg[20] = "FIRE- wait.. WATER ON THE HILL! 🌊";
$msg[21] = "<div style='color:#ff4747'><b>Don't use Dashboard at 3AM!</b></div>";
$msg[22] = "9/11 what's your emergency?";
$msg[23] = "Have a nice day ^^";
$msg[24] = "<a style='text-decoration:underline' href='#'> Free 🛠CP generator 2025 download! </a>";
$msg[25] = "Happy 2024 :D";
$msg[26] = "print('Hello World!')";
$msg[27] = "Exclusive edition!";
$msg[28] = "It's a page!";
$msg[29] = "Successful connection";
$msg[30] = "0.3.0 update Coming Soon!";

$string["wwygdt"] = $msg[rand(0, 30)];
$string["game"] = "Game";
$string["guest"] = "guest";
$string["account"] = "Account";
$string["levelsOptDesc"] = "View levels list";
$string["songsOptDesc"] = "View songs list";
$string["yourClanOptDesc"] = "View team \"%s\"";
$string["clanOptDesc"] = "View teams list";
$string["yourProfile"] = "Your profile";
$string["profileOptDesc"] = "View your profile";
$string["messengerOptDesc"] ="Open messenger";
$string["addSongOptDesc"] = "Add song to server";
$string["loginOptDesc"] = "Login to account";
$string["createAcc"] = "Create an account";
$string["registerOptDesc"] = "Register on %s";
$string["downloadOptDesc"] = "Download %s";

$string["tryCron"] = "Run Cron";
$string["cronSuccess"] = "Success!";
$string["cronError"] = "Error!";

$string["profile"] = "Profile";
$string["empty"] = "Empty...";
$string["writeSomething"] = "Write something!";  
$string["replies"] = "Replies";
$string["replyToComment"] = "Reply to a comment";
$string["settings"] = "Settings";
$string["allowMessagesFrom"] = "Allow messages from...";
$string["allowFriendReqsFrom"] = "Allow friend requests from...";
$string["showCommentHistory"] = "Show comments history...";
$string["timezoneChoose"] = "Choose timezone";
$string["yourYouTube"] = "Your YouTube channel";
$string["yourVK"] = "Your page on VK";
$string["yourTwitter"] = "Your page on Twitter";
$string["yourTwitch"] = "Your Twitch channel";
$string["saveSettings"] = "Save settings";
$string["all"] = "All";
$string["friends"] = "Friends";
$string["none"] = "None";
$string["youBlocked"] = "This player blocked you!";
$string["cantMessage"] = "You can't message this player!";
  
$string["accountManagement"] = "Account management";
$string["changePassword"] = "Change password";
$string["changeUsername"] = "Change username";
$string["unlistedLevels"] = "Your unlisted levels";

$string["manageSongs"] = "Manage songs";
$string["gauntletManage"] = "Manage Story Mode";
$string["suggestLevels"] = "Suggested levels";

$string["modTools"] = "Mod tools";
$string["leaderboardBan"] = "Ban a user";
$string["unlistedMod"] = "Unlisted levels";

$string["reuploadSection"] = "Server";
$string["songAdd"] = "Add a song";
$string["songLink"] = "Add a song by link";
$string["packManage"] = "Manage Map Zones";

$string["browse"] = "Browse";
$string["statsSection"] = "Stats";
$string["dailyTable"] = "Daily levels";
$string["modActionsList"] = "Mod actions";
$string["modActions"] = "Server moderators";
$string["gauntletTable"] = "Story Mode";
$string["packTable"] = "Map Zones";
$string["leaderboardTime"] = "Leaderboard 24h";

$string["download"] = "Download";
$string["forwindows"] = "For Windows";
$string["forandroid"] = "For Android";
$string["formac"] = "For Mac OS";
$string["forios"] = "For iOS";
$string["third-party"] = "Third-party";
$string["thanks"] = "Thanks to these people!";
$string["language"] = "Language";

$string["loginHeader"] = "Hi, %s!";
$string["logout"] = "Logout";
$string["login"] = "Login";
$string["wrongNickOrPass"] = "Wrong username or password!";
$string["invalidid"] = "Invalid ID!";
$string["loginBox"] = "Login to account";
$string["loginSuccess"] = "You successfully login to your account!";
$string["loginAlready"] = "You already logged in!";
$string["clickHere"] = "Dashboard";
$string["enterUsername"] = "Enter username";
$string["enterPassword"] = "Enter password";
$string["loginDesc"] = "Here you can login to your account!";

$string["register"] = "Register";
$string["registerAcc"] = "Account registration";
$string["registerDesc"] = "Register your account!<p style='color:#ffb0b0; width:100%; background:rgba(244,141,138,.2); border:2px solid #e76161; border-radius:15px; margin-top:-10px; padding:10px 20px'>You can only create one per hour";
$string["repeatpassword"] = "Repeat password";
$string["email"] = "Email";
$string["repeatemail"] = "Repeat email";
$string["smallNick"] = "Username is too small!";
$string["smallPass"] = "Password is too small!";
$string["passDontMatch"] = "Passwords don't match!";
$string["emailDontMatch"] = "Emails don't match";
$string["registered"] = "You successfully registered an account!<br>
<p style='margin:0 0 20px'><a href='login/activate.php'>Activate your account!</a></p>";
$string["bigNick"] = "Username is too long!";
$string["mailExists"] = "There is a registered account using this email!";
$string["badUsername"] = "Please choose another username.";

$string["changePassTitle"] = "Change password";
$string["changedPass"] = "Password successfully changed! You need to login to you account again.";
$string["wrongPass"] = "Wrong password!";
$string["samePass"] = "Passwords you entered are the same!";
$string["changePassDesc"] = "Here you can change your password!";
$string["oldPassword"] = "Old password";
$string["newPassword"] = "New password";
$string["confirmNew"] = "Confirm password";

$string["forcePassword"] = "Force change password";
$string["forcePasswordDesc"] = "Here you can force change player's password!";
$string["forceNick"] = "Force change username";
$string["forceNickDesc"] = "Here you can force change player's username!";
$string["forceChangedPass"] = "<b>%s</b>'s password has been successfully changed!";
$string["forceChangedNick"] = "<b>%s</b>'s username has been successfully changed!";
$string["changePassOrNick"] = "Change player's username or password";

$string["changeNickTitle"] = "Change username";
$string["changedNick"] = "Username successfully changed! You need to login to you account again.";
$string["wrongNick"] = "Wrong username!";
$string["sameNick"] = "Usernames you entered are the same!";
$string["alreadyUsedNick"] = "Username you entered is already taken!";
$string["changeNickDesc"] = "Here you can change your username!";
$string["oldNick"] = "Old username";
$string["newNick"] = " New username";
$string["password"] = "Password";

$string["packCreate"] = "Create a Map Zone";
$string["packCreateTitle"] = "Create a Map Zone with rewards";
$string["packCreateDesc"] = "Here you can create a Map Zone!";
$string["packCreateSuccess"] = "You successfully created a Map Zone called";
$string["packCreateOneMore"] = "Add another Map Zone";
$string["packName"] = "Name of Map Zone";
$string["color"] = "Color";
$string["sameLevels"] = "You chose the same levels!";
$string["show"] = "Show";
$string["packChange"] = "Change Map Zone";
$string["createNewPack"] = "Create new Map Zone!"; // Translate word "create" like its call to action

$string["gauntletCreate"] = "Create Chapter";
$string["gauntletCreateTitle"] = "Create Chapter";
$string["gauntletCreateDesc"] = "Here you can create a chapter for Story Mode!";
$string["gauntletCreateSuccess"] = "You successfully created a Chapter!";
$string["gauntletCreateOneMore"] = "Add another Chapter";
$string["chooseLevels"] = "Choose levels!";
$string["checkbox"] = "Confirm";
$string["level1"] = "1st level";
$string["level2"] = "2nd level";
$string["level3"] = "3rd level";
$string["level4"] = "4th level";
$string["level5"] = "5th level";
$string["gauntletChange"] = "Change Chapter";
$string["createNewGauntlet"] = "Create new Chapter!"; // Translate word "create" like its call to action
$string["gauntletCreateSuccessNew"] = 'You successfully created <b>%1$s</b>!';
$string["gauntletSelectAutomatic"] = "Choose Chapter automatically";

$string["addQuest"] = "Add quest";
$string["addQuestDesc"] = "Here you can create a quest!";
$string["questName"] = "Quest name";
$string["questAmount"] = "Required amount";
$string["questReward"] = "Reward";
$string["questCreate"] = "Create a quest";
$string["questsSuccess"] = "You successfully created a quest";
$string["invalidPost"] = "Invalid data!";
$string["fewMoreQuests"] = "It's reccomend to create a few more quests.";
$string["oneMoreQuest?"] = "Create another quest";
$string["changeQuest"] = "Change quest";
$string["createNewQuest"] = "Create new quest!"; // like gauntlets and mappacks above

$string["levelReupload"] = "Reupload level";
$string["levelReuploadDesc"] = "Here you can reupload a level from any server!<p style='color:#ffb0b0; width:100%; background:rgba(244,141,138,.2); border:2px solid #e76161; border-radius:15px; margin-top:-10px; padding:10px 20px'>You can only reupload one per week";
$string["advanced"] = "Advanced options";
$string["errorConnection"] = "Connection error!";
$string["levelNotFound"] = "This level doesn't exist!";
$string["robtopLol"] = "Nejik doesn't like you :c";
$string["sameServers"] = "Host server and the target server are the same!";
$string["levelReuploaded"] = "Level reuploaded! Level ID:";
$string["oneMoreLevel?"] = "Reupload another level";
$string["levelAlreadyReuploaded"] = "Level already reuploaded!";
$string["server"] = "Server";
$string["levelID"] = "Level ID";
$string["pageDisabled"] = "This page is disabled!";
$string["levelUploadBanned"] = "You're banned from uploading levels!";

$string["activateAccount"] = "Account activation";
$string["activateDesc"] = "Activate your account!";
$string["activated"] = "Your account has been successfully activated!";
$string["alreadyActivated"] = "Your account is already activated";
$string["maybeActivate"] = "Maybe you didn't activated your account yet.";
$string["activate"] = "Activate";
$string["activateDisabled"] = "Account activation is disabled!";

$string["addMod"] = "Add Mod";
$string["addModDesc"] = "Here you can promote someone to Moderator!";
$string["modYourself"] = "You can't grant yourself Mod!";
$string["alreadyMod"] = "This player is already a Moderator!";
$string["addedMod"] = "You successfully granted Mod to a player";
$string["addModOneMore"] = "Add another Mod";
$string["modAboveYourRole"] = "You\'re trying to give a role above yours!";
$string["makeNewMod"] = "Make someone Moderator!";
$string["reassignMod"] = "Reassign Mod";
$string["reassign"] = "Reassign";
$string['demotePlayer'] = "Demote player";
$string['demotedPlayer'] = "You successfully demoted <b>%s</b>!";
$string['addedModNew'] = "You successfully granted Mod to <b>%s</b>!";
$string['demoted'] = 'Demoted';

$string["shareCPTitle"] = "Share Creator Points";
$string["shareCPDesc"] = "Here you can share Creator Points with player!";
$string["shareCP"] = "Share";
$string["alreadyShared"] = "This level already shared CP to this player!";
$string["shareToAuthor"] = "You tried to share CP to level author!";
$string["userIsBanned"] = "This player is banned!";
$string["shareCPSuccess"] = "You successfully shared Creator Points of level";
$string["shareCPSuccess2"] = "to player";
$string["updateCron"] = "Maybe you should update Creator Points.";
$string["shareCPOneMore"] = "Share more CP";
$string['shareCPSuccessNew'] = 'You successfully shared Creator Points of level <b>%1$s</b> to player <b>%2$s</b>!';

$string["messenger"] = "Messenger";
$string["write"] = "Write";
$string["send"] = "Send";
$string["noMsgs"] = "Start dialog!";
$string["subject"] = "Subject";
$string["msg"] = "Message";
$string["tooFast"] = "You're typing too fast!";

$string["levelToGD"] = "Transfer level to target server";
$string["levelToGDDesc"] = "Here you can transfer your level to target server!";
$string["usernameTarget"] = "Username for target server";
$string["passwordTarget"] = "Password for target server";
$string["notYourLevel"] = "This is not your level!";
$string["reuploadFailed"] = "Level transfer error!";

$string["search"] = "Search...";
$string["searchCancel"] = "Cancel search";
$string["emptySearch"] = "Nothing found!";

$string["demonlist"] = 'Demonlist';
$string["demonlistRecord"] = '<b>%s</b>\'s record';
$string["alreadyApproved"] = 'Already approved!';
$string["alreadyDenied"] = 'Already denied!';
$string["approveSuccess"] = 'You\'ve successfully approved <b>%s</b>\'s record!';
$string["denySuccess"] = 'You\'ve successfully denied <b>%s</b>\'s record!';
$string["recordParameters"] = '<b>%s</b> has beated <b>%s</b> in <b>%d</b> attempts';
$string["approve"] = 'Approve';
$string["deny"] = 'Deny';
$string["submitRecord"] = 'Submit record';
$string["submitRecordForLevel"] = 'Submit record for <b>%s</b>';
$string["alreadySubmitted"] = 'You\'ve already submitted an record for <b>%s</b>!';
$string["submitSuccess"] = 'You\'ve successfully submitted an record for <b>%s</b>!';
$string["submitRecordDesc"] = 'Submit records only if you beated the level!';
$string["atts"] = 'Attempts';
$string["ytlink"] = 'YouTube video ID (dQw4w9WgXcQ)';
$string["submit"] = 'Submit';
$string["addDemonTitle"] = 'Add demon';
$string["addDemon"] = 'Add demon to demonlist';
$string["addedDemon"] = 'You\'ve been added <b>%s</b> to <b>%d</b> place!';
$string["addDemonDesc"] = 'Here you can add a demon to demonlist!';
$string["place"] = 'Place';
$string["giveablePoints"] = 'Giveable points';
$string["add"] = 'Add';
$string["recordApproved"] = 'Record approved!';
$string["recordDenied"] = 'Record denied!';
$string["recordSubmitted"] = 'Record submitted!';
$string["nooneBeat"] = '0 victors'; //let it be lowercase
$string["oneBeat"] = '1 victor'; 
$string["lower5Beat"] = '%d victors'; // russian syntax, sorry
$string["above5Beat"] = '%d victors'; 
$string["demonlistLevel"] = '%s <text class="dltext">by <button type="button" onclick="a(\'profile/%3$s\', true, true)" style="font-size:25px" class="accbtn" name="accountID" value="%d">%s</button></text>';
$string["noDemons"] = 'It seems that your demonlist doesn\'t have any demons...';
$string["addSomeDemons"] = 'Add some demons to fill up demonlist!';
$string["askForDemons"] = 'Ask server\'s administrator to add some!';
$string["recordList"] = 'List of records';
$string["status"] = 'Status';
$string["checkRecord"] = 'Check record';
$string["record"] = 'Record';
$string["recordDeleted"] = 'Record was deleted!';
$string["changeDemon"] = 'Change demon';
$string["demonDeleted"] = 'Demon was deleted!';
$string["changedDemon"] = 'You replaced <b>%s</b> to <b>%d</b> place!';
$string["changeDemonDesc"] = 'Here you can change a demon!<br>
If you want to delete demon, set place to 0.';

$string["didntActivatedEmail"] = 'You haven\'t verified your email yet!';
$string["checkMail"] = 'A mail verification have been sent to your email<p style="color:#ff9b47; margin-top:-20px; margin-bottom:20px">Check your Spam folder!';

$string["likeSong"] = "Add to favourites";
$string["dislikeSong"] = "Remove from favourites";
$string["favouriteSongs"] = "Favourite songs";
$string["howMuchLiked"] = "How much liked?";
$string["nooneLiked"] = "Noone liked";

$string["clan"] = "Team";
$string["joinedAt"] = "Joined team at: <b>%s</b>";
$string["createdAt"] = "Created team at: <b>%s</b>";
$string["clanMembers"] = "Team members";
$string["noMembers"] = "No members";
$string["clanOwner"] = "Team owner";
$string["noClanDesc"] = "<i>No description</i>";
$string["noClan"] = "This team doesn't exist!";
$string["clanName"] = "Team name";
$string["clanDesc"] = "Team description";
$string["clanColor"] = "Team color";
$string["dangerZone"] = "Danger zone";
$string["giveClan"] = "Transfer ownership";
$string["deleteClan"] = "Delete team";
$string["goBack"] = "Go back";
$string["areYouSure"] = "Are you sure?";
$string["giveClanDesc"] = "Here you can give your team to a player.";
$string["notInYourClan"] = "This player is not in your team!";
$string["givedClan"] = "You successfully gived your team to <b>%s</b>!";
$string["deletedClan"] = "You deleted <b>%s</b> team.";
$string["deleteClanDesc"] = "<p style='margin-bottom:20px'>Your team will be permanently deleted";
$string["yourClan"] = "Your team";
$string["members0"] = "<b>1</b> member";
$string["members1"] = "<b>%d</b> members"; 
$string["members2"] = "<b>%d</b> members"; 
$string["noRequests"] = "There is no requests. Chill!";
$string["pendingRequests"] = "Team requests";
$string["closedClan"] = "Private team";
$string["kickMember"] = "Kick member";
$string["leaveFromClan"] = "Leave team";
$string["askToJoin"] = "Send join request";
$string["removeClanRequest"] = "Delete join request";
$string["joinClan"] = "Join team";
$string["noClans"] = "There is no teams";
$string["clans"] = "Teams";
$string["alreadyInClan"] = "You're already in team!";
$string["createClan"] = "Create team";
$string["createdClan"] = "You successfully created <span style='font-weight:700;color:#%s'>%s</span> team!";
$string["createClanDesc"] = "Here you can create a team!";
$string["create"] = "Create";
$string["mainSettings"] = "Main settings";
$string["takenClanName"] = "This team name was already taken!";
$string["takenClanTag"] = "This clan tag was already taken!";

$string["suggestedName"] = '<button type="button" onclick="a(\'profile/%1$s\', true, true)" class="accbtn" name="accountID">%1$s</button><text class="dltext"> suggested <b>%4$s%3$s</b> for</text><text class="levelname">%2$s</text>'; // %1$s - Mod username, %2$s - level name, %3$s - x stars, %4$s - Featured/Epic (%4$s%3$s - Featured, x stars)
$string["reportedName"] = '%1$s<text class="dltext"> was reported</text><text class="levelname">%2$s</text>';

$string['listTable'] = "Lists";
$string['listTableMod'] = "Unlisted lists";
$string['listTableYour'] = "Your unlisted lists";

$string['forgotPasswordChangeTitle'] = "Change password";
$string["successfullyChangedPass"] = "Password was successfully changed!";
$string['forgotPasswordTitle'] = "Forgot password?";
$string['maybeSentAMessage'] = "We'll send you an email if this account exists.";
$string['forgotPasswordDesc'] = "Here you can request change password link if you forgot it!";
$string['forgotPasswordButton'] = "Request link";

$string['sfxAdd'] = "Add SFX";
$string["sfxAddError-5"] = "SFX's size is higher than $sfxSize megabytes!";
$string["sfxAddError-6"] = "Something went wrong while uploading SFX!";
$string["sfxAddError-7"] = "You can only upload audio!";
$string['sfxAdded'] = 'SFX added';
$string['yourNewSFX'] = "Take a look at your new SFX!";
$string["sfxAddAnotherBTN"] = "One more SFX?";
$string["sfxAddDesc"] = "Here you can add your SFX!";
$string["chooseSFX"] = "Choose SFX";
$string["sfxAddNameFieldPlaceholder"] = "Name";
$string['sfxs'] = 'SFXs';
$string['sfxID'] = 'SFX ID';
$string['manageSFX'] = 'Manage SFXs';

$string['featureLevel'] = 'Feature level';

$string['banList'] = 'Banned people list';
$string['expires'] = 'Expires';
$string['unbanPerson'] = 'Unban';
$string['IP'] = 'IP-address';
$string['noBanInPast'] = 'You can\'t ban until past!';
$string['banSuccess'] = 'You successfully banned <b>%1$s</b> until <b>%3$s</b> in «<b>%2$s</b>»!';
$string['person'] = 'Person';
$string['youAreBanned'] = 'You were banned until <b>%2$s</b> for reason:<br><b>%1$s</b>';
$string['banChange'] = 'Change';
$string['system'] = 'System';

/*
	REUPLOAD
*/

$string["reuploadBTN"] = "Upload";
$string["errorGeneric"] = "Error appeared!";
$string["smthWentWrong"] = "Something went wrong!";
$string["tryAgainBTN"] = "Try again";
// songAdd.php
$string["songAddDesc"] = "Here you can add your song!";
$string["songAddUrlFieldLabel"] = "Song URL: (Direct or Dropbox links only)";
$string["songAddUrlFieldPlaceholder"] = "Song URL";
$string["songAddNameFieldPlaceholder"] = "Name";
$string["songAddAuthorFieldPlaceholder"] = "Author";
$string["songAddButton"] = "Choose song";
$string["songAddAnotherBTN"] = "Add Another Song";
$string["songAdded"] = "Song added";
$string["deletedSong"] = "You successfully deleted song";
$string["renamedSong"] = "You successfully renamed song to";
$string["songID"] = "Song ID: ";
$string["songIDw"] = "Song ID";
$string["songAuthor"] = "Author";
$string["size"] = "Size";
$string["delete"] = "Delete";
$string["change"] = "Change";
$string["chooseFile"] = "Choose a song";
$string['yourNewSong'] = "Take a look at your new song!";
///errors
$string["songAddError-2"] = "Invalid URL";
$string["songAddError-3"] = "This song has been reuploaded already with ID:";
$string["songAddError-4"] = "This song isn't reuploadable";
$string["songAddError-5"] = "Song size is higher than $songSize megabytes";
$string["songAddError-6"] = "Something went wrong while uploading a song!";
$string["songAddError-7"] = "You can only upload audio!";

$string[400] = "Bad request!";
$string["400!"] = "Check drivers of your network hardware.";
$string[403] = "Forbidden!";
$string["403!"] = "You don't have access to this page!";
$string[404] = "Page not found!";
$string["404!"] = "Are you sure you typed address correctly?";
$string[500] = "Internal server error!";
$string["500!"] = "Coder made an mistake in the code,</br>
please say about this problem here:</br>
https://github.com/Cvolton/GMDprivateServer/pull/883";
$string[502] = "Server is down!";
$string["502!"] = "Load on the server is too big.</br>
Come back later within several hours!";

$string["invalidCaptcha"] = "Invalid captcha response!";
$string["page"] = "Page";
$string["emptyPage"] = "This page is empty!";

/*
	STATS
*/
$string["ID"] = "ID";
$string["orbs"] = "Orbs";
$string["stars"] = "Stars";
$string["coins"] = "Coins";
$string["accounts"] = "Accounts";
$string["levels"] = "Levels";
$string["songs"] = "Songs";
$string["author"] = "Creator";
$string["name"] = "Name";
$string["date"] = "Date";
$string["type"] = "Type";
$string["reportCount"] = "Report count";
$string["reportMod"] = "Reports";
$string["username"] = "Username";
$string["accountID"] = "Account ID";
$string["registerDate"] = "Register date";
$string["levelAuthor"] = "Level author";
$string["isAdmin"] = "Role on server";
$string["isAdminYes"] = "Yes";
$string["isAdminNo"] = "No";
$string["userCoins"] = "User Coins";
$string["time"] = "Time";
$string["deletedLevel"] = "Deleted Level";
$string["mod"] = "Moderator";
$string["count"] = "Amount of actions";
$string["ratedLevels"] = "Rated Levels";
$string["lastSeen"] = "Last Time Online";
$string["level"] = "Level";
$string["pageInfo"] = "Showing page %s of %s";
$string["first"] = "First";
$string["previous"] = "Previous";
$string["next"] = "Next";
$string["never"] = "(No date)";
$string["last"] = "Last";
$string["go"] = "Go";
$string["levelid"] = "Level ID";
$string["levelname"] = "Level name";
$string["leveldesc"] = "Level description";
$string["noDesc"] = "No description";
$string["levelpass"] = "Password";
$string["nopass"] = "No password";
$string["unrated"] = "Unrated";
$string["rate"] = "Rate";
$string["stats"] = "Stats";
$string["suggestFeatured"] = "Featured?";
$string["whoAdded"] = "Who added?";
$string["moons"] = "Moons";
//modActionsList
$string["banDesc"] = "Here you can ban a player!";
$string["playerTop"] = 'Top of players';
$string["creatorTop"] = 'Top of creators';
$string["levelUploading"] = 'Uploading levels';
$string["successfullyBanned"] = 'Player <b>%1$s</b> with account ID <b>%2$s</b> was successfully banned!';
$string["successfullyUnbanned"] = 'Player <b>%1$s</b> with account ID <b>%2$s</b> was successfully unbanned!';
$string["commentBan"] = 'Commenting';

$string["admin"] = "Owner";
$string["elder"] = "Elder Mod";
$string["moder"] = "Mod";
$string["player"] = "Player";

$string["starsLevel2"] = "stars";
$string["starsLevel1"] = "stars";
$string["starsLevel0"] = "star";
$string["coins2"] = "coins";
$string["coins1"] = "coins";
$string["coins0"] = "coin";
$string["time0"] = "time";
$string["time1"] = "times";
$string["times"] = "times";
$string["action0"] = "action";
$string["action1"] = "actions";
$string["action2"] = "actions";
$string["lvl0"] = "level";
$string["lvl1"] = "levels";
$string["lvl2"] = "levels";
$string["player0"] = "player";
$string["player1"] = "players";
$string["player2"] = "players";
$string["unban"] = "Unban";
$string["isBan"] = "Ban";

$string["noCoins"] = "Without coins";
$string["noReason"] = "No reason";
$string["noActions"] = "No actions";
$string["noRates"] = "No rates";

$string["future"] = "Future";

$string["spoiler"] = "Spoiler";
$string["accid"] = "with account ID";
$string["banned"] = "was successfully banned!";
$string["unbanned"] = "was successfully unbanned!";
$string["ban"] = "Ban";
$string["nothingFound"] = "This player doesn't exist!";
$string["banUserID"] = "Username or account ID";
$string["banUserPlace"] = "Ban a user";
$string["banYourself"] = "You can't ban yourself!"; 
$string["banYourSelfBtn!"] = "Ban someone else";
$string["banReason"] = "Ban reason";
$string["action"] = "Action";
$string["value"] = "1st value";
$string["value2"] = "2nd value";
$string["value3"] = "3rd value";
$string["modAction1"] = "Rated a level";
$string["modAction2"] = "Un/featured a level";
$string["modAction3"] = "Un/verified coins";
$string["modAction4"] = "Un/epiced a level";
$string["modAction5"] = "Set as daily feature";
$string["modAction6"] = "Deleted a level";
$string["modAction7"] = "Creator change";
$string["modAction8"] = "Renamed a level";
$string["modAction9"] = "Changed level password";
$string["modAction10"] = "Changed demon difficulty";
$string["modAction11"] = "Shared CP";
$string["modAction12"] = "Un/published level";
$string["modAction13"] = "Changed level description";
$string["modAction14"] = "Enabled/disabled LDM";
$string["modAction15"] = "Leaderboard un/banned";
$string["modAction16"] = "Song ID change";
$string["modAction17"] = "Created a Map Zone";
$string["modAction18"] = "Created a Chapter";
$string["modAction19"] = "Changed song";
$string["modAction20"] = "Granted Mod to player";
$string["modAction21"] = "Changed Map Zone";
$string["modAction22"] = "Changed Chapter";
$string["modAction23"] = "Changed quest";
$string["modAction24"] = "Reassigned a player";
$string["modAction25"] = "Created a quest";
$string["modAction26"] = "Changed player's username/password";
$string["modAction27"] = "Changed SFX";
$string["modAction28"] = "Banned person";
$string["modAction30"] = "Rated list";
$string["modAction31"] = "Sent list";
$string["modAction32"] = "Un/featured list";
$string["modAction33"] = "Un/published list";
$string["modAction34"] = "Deleted list";
$string["modAction35"] = "Changed list's creator";
$string["modAction36"] = "Changed list's name";
$string["modAction37"] = "Changed list's description";
$string["everyActions"] = "Any actions";
$string["everyMod"] = "All mods";
$string["Kish!"] = "Go away!";
$string["noPermission"] = "You don't have permission!";
$string["noLogin?"] = "You are not logged into your account!";
$string["LoginBtn"] = "Login into account";
$string["dashboard"] = "Dashboard";
$string["userID"] = 'User ID';
//errors
$string["errorNoAccWithPerm"] = "Error: No accounts with the '%s' permission have been found";