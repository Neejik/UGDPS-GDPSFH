<?php
$sessionGrants = false; // false = GJP check is done every time; true = GJP check is done once per hour; significantly improves performance, slightly decreases security
$unregisteredSubmissions = false; // false = green accounts can't upload levels, appear on the leaderboards etc; true = green accounts can do everything
$preactivateAccounts = true; // false = accounts need to be activated at dashboard/login/activate.php; true = accounts can log in immediately
$activeBanIP = true; // false = no check for banned IPs, true = active banip check (IP check every connection to GDPS)

$filterUsernames = 0; // 0 = Disabled, 1 = Checks if the username is word, 2 = Checks if the username contains word
$bannedUsernames = [ // Add words to ban if it is a username/if it is in a username
	'RobTop'
];

/*
	Captcha settings
	Supports: hCaptcha, reCaptcha, Cloudflare Turnstile (why not!)
	hCaptcha: https://www.hcaptcha.com/
	reCaptcha: https://www.google.com/recaptcha/
	Cloudflare Turnstile: https://www.cloudflare.com/products/turnstile/
*/

$enableCaptcha = true;
$captchaType = 2; // 1 for hCaptcha, 2 for reCaptcha and 3 for CF-Turnstile
$CaptchaKey = "6LfWCVEpAAAAAIKzB7iw0M7ePPJwuuK_9yP_BcYt";
$CaptchaSecret = "6LfWCVEpAAAAAHHc2Jp2KfB8jqwIRDOwNuYWtkHT";

/*
	Block access from free proxies and common VPNs
	Below are URLs for proxies and VPSs
	Should only return list of IPs without any other HTML code
	Syntax: $proxies['NAME OF IPs'] = 'LINK';
*/

$blockFreeProxies = true; // true = check if person uses free proxy
$blockCommonVPNs = true; // true = check if person uses a common VPN
// URLs for IPs of proxies
$proxies['http'] = 'https://fhgdps.com/proxies/http.txt';
$proxies['https'] = 'https://fhgdps.com/proxies/https.txt';
$proxies['socks4'] = 'https://fhgdps.com/proxies/socks4.txt';
$proxies['socks5'] = 'https://fhgdps.com/proxies/socks5.txt';
$proxies['unknown'] = 'https://fhgdps.com/proxies/unknown.txt';
// URLs for IP ranges of VPNs
$vpns['vpn'] = 'https://raw.githubusercontent.com/X4BNet/lists_vpn/main/output/vpn/ipv4.txt';
?>