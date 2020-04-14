<?php

// main.schirrms-custom-login.php : the place to store php code
// don't forget to update the module.schirrms-custom-login.php file
// to include this file !
//
// Trying to include the php code needed to customize the login screen.
// source : 
// https://www.itophub.io/wiki/page?id=2_7_0:customization:login_screen

class CustomCSSLoginExtension implements iLoginUIExtension
{
	public function ListSupportedLoginModes()
	{
		return null;
	}

	public function GetTwigContext()
	{
		$oLoginContext = new LoginTwigContext();
		$oLoginContext->AddCSSFile(utils::GetAbsoluteUrlModulesRoot().'/schirrms-custom-login/css/custom.css');
		return $oLoginContext;
	}
}
