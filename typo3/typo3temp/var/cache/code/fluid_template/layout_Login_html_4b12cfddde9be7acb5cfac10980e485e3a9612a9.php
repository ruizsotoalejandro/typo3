<?php

class layout_Login_html_4b12cfddde9be7acb5cfac10980e485e3a9612a9 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<div class="typo3-login">
    <div class="typo3-login-inner">
        <div class="typo3-login-container">
            <div class="typo3-login-wrap">
                <div class="card card-login">
                    <header class="card-heading">
                        <h1 class="visually-hidden">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'login.header';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</h1>
                        <div class="typo3-login-logo">
                            <img src="';
$array3 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logo', $array3)]);

$output0 .= '" class="typo3-login-image" alt="';
$array4 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array4)]);

$output0 .= '" />
                        </div>
                    </header>
                    <main class="card-body">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output177 = '';

$output177 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
$output180 = '';

$output180 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
$output186 = '';

$output186 .= '
                                    <div class="t3js-login-error mb-2" id="t3-login-error">
                                        <div class="alert alert-danger">
                                            <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments187 = array();
$arguments187['key'] = NULL;
$arguments187['id'] = NULL;
$arguments187['default'] = NULL;
$arguments187['arguments'] = NULL;
$arguments187['extensionName'] = NULL;
$arguments187['languageKey'] = NULL;
$arguments187['alternativeLanguageKeys'] = NULL;
$arguments187['key'] = 'login.error.message';

$output186 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext)]);

$output186 .= '</strong>
                                            <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['key'] = NULL;
$arguments189['id'] = NULL;
$arguments189['default'] = NULL;
$arguments189['arguments'] = NULL;
$arguments189['extensionName'] = NULL;
$arguments189['languageKey'] = NULL;
$arguments189['alternativeLanguageKeys'] = NULL;
$arguments189['key'] = 'login.error.description';

$output186 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext)]);

$output186 .= '</p>
                                        </div>
                                    </div>
                                ';
return $output186;
};
$arguments181 = array();
$arguments181['then'] = NULL;
$arguments181['else'] = NULL;
$arguments181['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array183 = array();
$array184 = array (
);$array183['0'] = $renderingContext->getVariableProvider()->getByPath('hasLoginError', $array184);

$expression185 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments181['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression185(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array183)
					),
					$renderingContext
				);
$arguments181['__thenClosure'] = $renderChildrenClosure182;

$output180 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);

$output180 .= '
                                <noscript>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments191 = array();
$arguments191['message'] = NULL;
$arguments191['title'] = NULL;
$arguments191['state'] = -2;
$arguments191['iconName'] = NULL;
$arguments191['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments193 = array();
$arguments193['key'] = NULL;
$arguments193['id'] = NULL;
$arguments193['default'] = NULL;
$arguments193['arguments'] = NULL;
$arguments193['extensionName'] = NULL;
$arguments193['languageKey'] = NULL;
$arguments193['alternativeLanguageKeys'] = NULL;
$arguments193['key'] = 'login.error.javascript';
$arguments191['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext)]);
$arguments191['state'] = 2;
$renderChildrenClosure192 = ($arguments191['message'] !== null) ? function() use ($arguments191) { return $arguments191['message']; } : $renderChildrenClosure192;
$output180 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output180 .= '
                                </noscript>
                                <div class="hidden t3js-login-error-nocookies">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments195 = array();
$arguments195['message'] = NULL;
$arguments195['title'] = NULL;
$arguments195['state'] = -2;
$arguments195['iconName'] = NULL;
$arguments195['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments197 = array();
$arguments197['key'] = NULL;
$arguments197['id'] = NULL;
$arguments197['default'] = NULL;
$arguments197['arguments'] = NULL;
$arguments197['extensionName'] = NULL;
$arguments197['languageKey'] = NULL;
$arguments197['alternativeLanguageKeys'] = NULL;
$arguments197['key'] = 'login.error.cookies';
$arguments195['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext)]);
$arguments195['state'] = 2;
$renderChildrenClosure196 = ($arguments195['message'] !== null) ? function() use ($arguments195) { return $arguments195['message']; } : $renderChildrenClosure196;
$output180 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output180 .= '
                                </div>
                                <div class="hidden t3js-login-error-noreferrer">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments199 = array();
$arguments199['message'] = NULL;
$arguments199['title'] = NULL;
$arguments199['state'] = -2;
$arguments199['iconName'] = NULL;
$arguments199['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments201 = array();
$arguments201['key'] = NULL;
$arguments201['id'] = NULL;
$arguments201['default'] = NULL;
$arguments201['arguments'] = NULL;
$arguments201['extensionName'] = NULL;
$arguments201['languageKey'] = NULL;
$arguments201['alternativeLanguageKeys'] = NULL;
$arguments201['key'] = 'login.error.referrer';
$arguments199['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext)]);
$arguments199['state'] = 2;
$renderChildrenClosure200 = ($arguments199['message'] !== null) ? function() use ($arguments199) { return $arguments199['message']; } : $renderChildrenClosure200;
$output180 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output180 .= '
                                </div>
                                <div class="typo3-login-form t3js-login-formfields">
                                    <form action="';
$array203 = array (
);
$output180 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formActionUrl', $array203)]);

$output180 .= '" method="post" name="loginform" id="typo3-login-form">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments204 = array();
$arguments204['additionalAttributes'] = NULL;
$arguments204['data'] = NULL;
$arguments204['aria'] = NULL;
$arguments204['name'] = NULL;
$arguments204['value'] = NULL;
$arguments204['property'] = NULL;
$arguments204['class'] = NULL;
$arguments204['dir'] = NULL;
$arguments204['id'] = NULL;
$arguments204['lang'] = NULL;
$arguments204['style'] = NULL;
$arguments204['title'] = NULL;
$arguments204['accesskey'] = NULL;
$arguments204['tabindex'] = NULL;
$arguments204['onclick'] = NULL;
$arguments204['respectSubmittedDataValue'] = true;
$arguments204['name'] = 'login_status';
$arguments204['value'] = 'login';

$output180 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);

$output180 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments206 = array();
$arguments206['additionalAttributes'] = NULL;
$arguments206['data'] = NULL;
$arguments206['aria'] = NULL;
$arguments206['name'] = NULL;
$arguments206['value'] = NULL;
$arguments206['property'] = NULL;
$arguments206['class'] = NULL;
$arguments206['dir'] = NULL;
$arguments206['id'] = NULL;
$arguments206['lang'] = NULL;
$arguments206['style'] = NULL;
$arguments206['title'] = NULL;
$arguments206['accesskey'] = NULL;
$arguments206['tabindex'] = NULL;
$arguments206['onclick'] = NULL;
$arguments206['respectSubmittedDataValue'] = true;
$arguments206['name'] = 'userident';
$arguments206['id'] = 't3-field-userident';
$arguments206['class'] = 't3js-login-userident-field';
$arguments206['value'] = '';

$output180 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output180 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments208 = array();
$arguments208['additionalAttributes'] = NULL;
$arguments208['data'] = NULL;
$arguments208['aria'] = NULL;
$arguments208['name'] = NULL;
$arguments208['value'] = NULL;
$arguments208['property'] = NULL;
$arguments208['class'] = NULL;
$arguments208['dir'] = NULL;
$arguments208['id'] = NULL;
$arguments208['lang'] = NULL;
$arguments208['style'] = NULL;
$arguments208['title'] = NULL;
$arguments208['accesskey'] = NULL;
$arguments208['tabindex'] = NULL;
$arguments208['onclick'] = NULL;
$arguments208['respectSubmittedDataValue'] = true;
$arguments208['name'] = 'redirect_url';
$array210 = array (
);$arguments208['value'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array210);

$output180 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output180 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments211 = array();
$arguments211['additionalAttributes'] = NULL;
$arguments211['data'] = NULL;
$arguments211['aria'] = NULL;
$arguments211['name'] = NULL;
$arguments211['value'] = NULL;
$arguments211['property'] = NULL;
$arguments211['class'] = NULL;
$arguments211['dir'] = NULL;
$arguments211['id'] = NULL;
$arguments211['lang'] = NULL;
$arguments211['style'] = NULL;
$arguments211['title'] = NULL;
$arguments211['accesskey'] = NULL;
$arguments211['tabindex'] = NULL;
$arguments211['onclick'] = NULL;
$arguments211['respectSubmittedDataValue'] = true;
$arguments211['name'] = 'loginRefresh';
$array213 = array (
);$arguments211['value'] = $renderingContext->getVariableProvider()->getByPath('loginRefresh', $array213);

$output180 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output180 .= '

                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments214 = array();
$arguments214['section'] = NULL;
$arguments214['partial'] = NULL;
$arguments214['delegate'] = NULL;
$arguments214['renderable'] = NULL;
$arguments214['arguments'] = array (
);
$arguments214['optional'] = false;
$arguments214['default'] = NULL;
$arguments214['contentAs'] = NULL;
$arguments214['debug'] = true;
$arguments214['section'] = 'loginFormFields';

$output180 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output180 .= '

                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments216 = array();
$arguments216['section'] = NULL;
$arguments216['partial'] = NULL;
$arguments216['delegate'] = NULL;
$arguments216['renderable'] = NULL;
$arguments216['arguments'] = array (
);
$arguments216['optional'] = false;
$arguments216['default'] = NULL;
$arguments216['contentAs'] = NULL;
$arguments216['debug'] = true;
$arguments216['partial'] = 'Login/InterfaceSelector';
$arguments216['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output180 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext);

$output180 .= '

                                        <div class="form-group mb-2" id="t3-login-submit-section">
                                            <button class="btn btn-block btn-login t3js-login-submit" id="t3-login-submit" type="submit" name="commandLI" data-loading-text="<i class=\'fa fa-circle-o-notch fa-spin\'></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments219 = array();
$arguments219['key'] = NULL;
$arguments219['id'] = NULL;
$arguments219['default'] = NULL;
$arguments219['arguments'] = NULL;
$arguments219['extensionName'] = NULL;
$arguments219['languageKey'] = NULL;
$arguments219['alternativeLanguageKeys'] = NULL;
$arguments219['key'] = 'login.process';

$output180 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext)]);

$output180 .= '" autocomplete="off">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments221 = array();
$arguments221['key'] = NULL;
$arguments221['id'] = NULL;
$arguments221['default'] = NULL;
$arguments221['arguments'] = NULL;
$arguments221['extensionName'] = NULL;
$arguments221['languageKey'] = NULL;
$arguments221['alternativeLanguageKeys'] = NULL;
$arguments221['key'] = 'login.submit';

$output180 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext)]);

$output180 .= '
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
$output228 = '';

$output228 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments229 = array();
$arguments229['section'] = NULL;
$arguments229['partial'] = NULL;
$arguments229['delegate'] = NULL;
$arguments229['renderable'] = NULL;
$arguments229['arguments'] = array (
);
$arguments229['optional'] = false;
$arguments229['default'] = NULL;
$arguments229['contentAs'] = NULL;
$arguments229['debug'] = true;
$arguments229['section'] = 'ResetPassword';
$arguments229['arguments'] = $renderingContext->getVariableProvider()->getAll();
// Rendering Boolean node
// Rendering Array
$array232 = array();
$array232['0'] = 'true';

$expression233 = function($context) {return TRUE;};
$arguments229['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression233(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array232)
					),
					$renderingContext
				);

$output228 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);

$output228 .= '
                                ';
return $output228;
};
$arguments223 = array();
$arguments223['then'] = NULL;
$arguments223['else'] = NULL;
$arguments223['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array225 = array();
$array226 = array (
);$array225['0'] = $renderingContext->getVariableProvider()->getByPath('enablePasswordReset', $array226);

$expression227 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments223['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression227(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array225)
					),
					$renderingContext
				);
$arguments223['__thenClosure'] = $renderChildrenClosure224;

$output180 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output180 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$output241 = '';

$output241 .= '
                                    <nav aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments242 = array();
$arguments242['key'] = NULL;
$arguments242['id'] = NULL;
$arguments242['default'] = NULL;
$arguments242['arguments'] = NULL;
$arguments242['extensionName'] = NULL;
$arguments242['languageKey'] = NULL;
$arguments242['alternativeLanguageKeys'] = NULL;
$arguments242['key'] = 'login.navigation.loginProvider';

$output241 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext)]);

$output241 .= '">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
return 'role is for VoiceOver';
};
$arguments244 = array();

$output241 .= NULL;

$output241 .= '
                                        <ul class="list-unstyled typo3-login-links" role="list">
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
$output249 = '';

$output249 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
$output255 = '';

$output255 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
$output262 = '';

$output262 .= '
                                                        <li class="t3js-loginprovider-switch" data-providerkey="';
$array263 = array (
);
$output262 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('providerKey', $array263)]);

$output262 .= '">
                                                            <a href="?loginProvider=';
$array264 = array (
);
$output262 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('providerKey', $array264)]);

$output262 .= '">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
$output276 = '';

$output276 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
$output279 = '';

$output279 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments280 = array();
$arguments280['identifier'] = NULL;
$arguments280['size'] = 'small';
$arguments280['overlay'] = NULL;
$arguments280['state'] = 'default';
$arguments280['alternativeMarkupIdentifier'] = NULL;
$array282 = array (
);$arguments280['identifier'] = $renderingContext->getVariableProvider()->getByPath('provider.iconIdentifier', $array282);
$arguments280['size'] = 'small';

$output279 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext);

$output279 .= '
                                                                    ';
return $output279;
};
$arguments277 = array();

$output276 .= '';

$output276 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
$output285 = '';

$output285 .= '
                                                                        <i class="fa fa-fw ';
$array286 = array (
);
$output285 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('provider.icon-class', $array286)]);

$output285 .= '"></i>
                                                                    ';
return $output285;
};
$arguments283 = array();
$arguments283['if'] = NULL;

$output276 .= '';

$output276 .= '
                                                                ';
return $output276;
};
$arguments265 = array();
$arguments265['then'] = NULL;
$arguments265['else'] = NULL;
$arguments265['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array273 = array();
$array274 = array (
);$array273['0'] = $renderingContext->getVariableProvider()->getByPath('provider.iconIdentifier', $array274);

$expression275 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments265['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression275(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array273)
					),
					$renderingContext
				);
$arguments265['__thenClosure'] = function() use ($renderingContext, $self) {
$output267 = '';

$output267 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments268 = array();
$arguments268['identifier'] = NULL;
$arguments268['size'] = 'small';
$arguments268['overlay'] = NULL;
$arguments268['state'] = 'default';
$arguments268['alternativeMarkupIdentifier'] = NULL;
$array270 = array (
);$arguments268['identifier'] = $renderingContext->getVariableProvider()->getByPath('provider.iconIdentifier', $array270);
$arguments268['size'] = 'small';

$output267 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext);

$output267 .= '
                                                                    ';
return $output267;
};
$arguments265['__elseClosures'][] = function() use ($renderingContext, $self) {
$output271 = '';

$output271 .= '
                                                                        <i class="fa fa-fw ';
$array272 = array (
);
$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('provider.icon-class', $array272)]);

$output271 .= '"></i>
                                                                    ';
return $output271;
};

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext);

$output262 .= '
                                                                <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments287 = array();
$arguments287['key'] = NULL;
$arguments287['id'] = NULL;
$arguments287['default'] = NULL;
$arguments287['arguments'] = NULL;
$arguments287['extensionName'] = NULL;
$arguments287['languageKey'] = NULL;
$arguments287['alternativeLanguageKeys'] = NULL;
$array289 = array (
);$arguments287['key'] = $renderingContext->getVariableProvider()->getByPath('provider.label', $array289);
$array290 = array (
);$arguments287['default'] = $renderingContext->getVariableProvider()->getByPath('provider.label', $array290);

$output262 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext)]);

$output262 .= '</span>
                                                            </a>
                                                        </li>
                                                    ';
return $output262;
};
$arguments256 = array();
$arguments256['then'] = NULL;
$arguments256['else'] = NULL;
$arguments256['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array258 = array();
$array259 = array (
);$array258['0'] = $renderingContext->getVariableProvider()->getByPath('loginProviderIdentifier', $array259);
$array258['1'] = ' != ';
$array260 = array (
);$array258['2'] = $renderingContext->getVariableProvider()->getByPath('providerKey', $array260);

$expression261 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments256['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression261(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array258)
					),
					$renderingContext
				);
$arguments256['__thenClosure'] = $renderChildrenClosure257;

$output255 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext);

$output255 .= '
                                                ';
return $output255;
};
$arguments250 = array();
$arguments250['then'] = NULL;
$arguments250['else'] = NULL;
$arguments250['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array252 = array();
$array253 = array (
);$array252['0'] = $renderingContext->getVariableProvider()->getByPath('provider.label', $array253);

$expression254 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments250['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression254(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array252)
					),
					$renderingContext
				);
$arguments250['__thenClosure'] = $renderChildrenClosure251;

$output249 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext);

$output249 .= '
                                            ';
return $output249;
};
$arguments246 = array();
$arguments246['each'] = NULL;
$arguments246['as'] = NULL;
$arguments246['key'] = NULL;
$arguments246['reverse'] = false;
$arguments246['iteration'] = NULL;
$array248 = array (
);$arguments246['each'] = $renderingContext->getVariableProvider()->getByPath('loginProviders', $array248);
$arguments246['as'] = 'provider';
$arguments246['key'] = 'providerKey';

$output241 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext);

$output241 .= '
                                        </ul>
                                    </nav>
                                ';
return $output241;
};
$arguments234 = array();
$arguments234['then'] = NULL;
$arguments234['else'] = NULL;
$arguments234['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array236 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
$array239 = array (
);return $renderingContext->getVariableProvider()->getByPath('loginProviders', $array239);
};
$arguments237 = array();
$arguments237['subject'] = NULL;
$renderChildrenClosure238 = ($arguments237['subject'] !== null) ? function() use ($arguments237) { return $arguments237['subject']; } : $renderChildrenClosure238;$array236['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);
$array236['1'] = ' > 1';

$expression240 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments234['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression240(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array236)
					),
					$renderingContext
				);
$arguments234['__thenClosure'] = $renderChildrenClosure235;

$output180 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext);

$output180 .= '
                            ';
return $output180;
};
$arguments178 = array();

$output177 .= '';

$output177 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
$output296 = '';

$output296 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments297 = array();
$arguments297['section'] = NULL;
$arguments297['partial'] = NULL;
$arguments297['delegate'] = NULL;
$arguments297['renderable'] = NULL;
$arguments297['arguments'] = array (
);
$arguments297['optional'] = false;
$arguments297['default'] = NULL;
$arguments297['contentAs'] = NULL;
$arguments297['debug'] = true;
$arguments297['section'] = 'ResetPassword';
$arguments297['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output296 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext);

$output296 .= '
                            ';
return $output296;
};
$arguments291 = array();
$arguments291['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array293 = array();
$array294 = array (
);$array293['0'] = $renderingContext->getVariableProvider()->getByPath('enablePasswordReset', $array294);

$expression295 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments291['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression295(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array293)
					),
					$renderingContext
				);

$output177 .= '';

$output177 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
$output302 = '';

$output302 .= '
                                <form action="';
$array303 = array (
);
$output302 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formActionUrl', $array303)]);

$output302 .= '" method="post" name="loginform">
                                    <input type="hidden" name="login_status" value="logout" />
                                    <div class="t3-login-box-body">
                                        <div class="t3-login-logout-form">
                                            <div class="t3-login-username">
                                                <div class="t3-login-label t3-username">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments304 = array();
$arguments304['key'] = NULL;
$arguments304['id'] = NULL;
$arguments304['default'] = NULL;
$arguments304['arguments'] = NULL;
$arguments304['extensionName'] = NULL;
$arguments304['languageKey'] = NULL;
$arguments304['alternativeLanguageKeys'] = NULL;
$arguments304['key'] = 'login.username';

$output302 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext)]);

$output302 .= '
                                                </div>
                                                <div class="t3-username-current">
                                                    ';
$array306 = array (
);
$output302 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.username', $array306)]);

$output302 .= '
                                                </div>
                                            </div>
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
$output328 = '';

$output328 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure330 = function() use ($renderingContext, $self) {
$output331 = '';

$output331 .= '
                                                    <div class="t3-login-interface">
                                                        <div class="t3-login-label t3-interface-selector">
                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments332 = array();
$arguments332['key'] = NULL;
$arguments332['id'] = NULL;
$arguments332['default'] = NULL;
$arguments332['arguments'] = NULL;
$arguments332['extensionName'] = NULL;
$arguments332['languageKey'] = NULL;
$arguments332['alternativeLanguageKeys'] = NULL;
$arguments332['key'] = 'login.interface';

$output331 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext)]);

$output331 .= '
                                                        </div>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure335 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments334 = array();
$arguments334['additionalAttributes'] = NULL;
$arguments334['data'] = NULL;
$arguments334['aria'] = NULL;
$arguments334['name'] = NULL;
$arguments334['value'] = NULL;
$arguments334['property'] = NULL;
$arguments334['class'] = NULL;
$arguments334['dir'] = NULL;
$arguments334['id'] = NULL;
$arguments334['lang'] = NULL;
$arguments334['style'] = NULL;
$arguments334['title'] = NULL;
$arguments334['accesskey'] = NULL;
$arguments334['tabindex'] = NULL;
$arguments334['onclick'] = NULL;
$arguments334['size'] = NULL;
$arguments334['disabled'] = NULL;
$arguments334['options'] = NULL;
$arguments334['optionsAfterContent'] = false;
$arguments334['optionValueField'] = NULL;
$arguments334['optionLabelField'] = NULL;
$arguments334['sortByOptionLabel'] = false;
$arguments334['selectAllByDefault'] = false;
$arguments334['errorClass'] = 'f3-form-error';
$arguments334['prependOptionLabel'] = NULL;
$arguments334['prependOptionValue'] = NULL;
$arguments334['multiple'] = false;
$arguments334['required'] = false;
$arguments334['name'] = 'users';
$array336 = array (
);$arguments334['options'] = $renderingContext->getVariableProvider()->getByPath('interfaces', $array336);
$arguments334['optionValueField'] = 'jumpScript';
$arguments334['optionLabelField'] = 'label';

$output331 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments334, $renderChildrenClosure335, $renderingContext);

$output331 .= '
                                                    </div>
                                                ';
return $output331;
};
$arguments329 = array();

$output328 .= '';

$output328 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
$output339 = '';

$output339 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure341 = function() use ($renderingContext, $self) {
$output345 = '';

$output345 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments346 = array();
$arguments346['additionalAttributes'] = NULL;
$arguments346['data'] = NULL;
$arguments346['aria'] = NULL;
$arguments346['name'] = NULL;
$arguments346['value'] = NULL;
$arguments346['property'] = NULL;
$arguments346['class'] = NULL;
$arguments346['dir'] = NULL;
$arguments346['id'] = NULL;
$arguments346['lang'] = NULL;
$arguments346['style'] = NULL;
$arguments346['title'] = NULL;
$arguments346['accesskey'] = NULL;
$arguments346['tabindex'] = NULL;
$arguments346['onclick'] = NULL;
$arguments346['respectSubmittedDataValue'] = true;
$arguments346['name'] = 'interface';
$array348 = array (
);$arguments346['value'] = $renderingContext->getVariableProvider()->getByPath('interface', $array348);

$output345 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext);

$output345 .= '
                                                    ';
return $output345;
};
$arguments340 = array();
$arguments340['then'] = NULL;
$arguments340['else'] = NULL;
$arguments340['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array342 = array();
$array343 = array (
);$array342['0'] = $renderingContext->getVariableProvider()->getByPath('interface', $array343);

$expression344 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments340['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression344(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array342)
					),
					$renderingContext
				);
$arguments340['__thenClosure'] = $renderChildrenClosure341;

$output339 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments340, $renderChildrenClosure341, $renderingContext);

$output339 .= '
                                                ';
return $output339;
};
$arguments337 = array();
$arguments337['if'] = NULL;

$output328 .= '';

$output328 .= '
                                            ';
return $output328;
};
$arguments307 = array();
$arguments307['then'] = NULL;
$arguments307['else'] = NULL;
$arguments307['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array325 = array();
$array326 = array (
);$array325['0'] = $renderingContext->getVariableProvider()->getByPath('showInterfaceSelector', $array326);

$expression327 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments307['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression327(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array325)
					),
					$renderingContext
				);
$arguments307['__thenClosure'] = function() use ($renderingContext, $self) {
$output309 = '';

$output309 .= '
                                                    <div class="t3-login-interface">
                                                        <div class="t3-login-label t3-interface-selector">
                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments310 = array();
$arguments310['key'] = NULL;
$arguments310['id'] = NULL;
$arguments310['default'] = NULL;
$arguments310['arguments'] = NULL;
$arguments310['extensionName'] = NULL;
$arguments310['languageKey'] = NULL;
$arguments310['alternativeLanguageKeys'] = NULL;
$arguments310['key'] = 'login.interface';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments310, $renderChildrenClosure311, $renderingContext)]);

$output309 .= '
                                                        </div>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments312 = array();
$arguments312['additionalAttributes'] = NULL;
$arguments312['data'] = NULL;
$arguments312['aria'] = NULL;
$arguments312['name'] = NULL;
$arguments312['value'] = NULL;
$arguments312['property'] = NULL;
$arguments312['class'] = NULL;
$arguments312['dir'] = NULL;
$arguments312['id'] = NULL;
$arguments312['lang'] = NULL;
$arguments312['style'] = NULL;
$arguments312['title'] = NULL;
$arguments312['accesskey'] = NULL;
$arguments312['tabindex'] = NULL;
$arguments312['onclick'] = NULL;
$arguments312['size'] = NULL;
$arguments312['disabled'] = NULL;
$arguments312['options'] = NULL;
$arguments312['optionsAfterContent'] = false;
$arguments312['optionValueField'] = NULL;
$arguments312['optionLabelField'] = NULL;
$arguments312['sortByOptionLabel'] = false;
$arguments312['selectAllByDefault'] = false;
$arguments312['errorClass'] = 'f3-form-error';
$arguments312['prependOptionLabel'] = NULL;
$arguments312['prependOptionValue'] = NULL;
$arguments312['multiple'] = false;
$arguments312['required'] = false;
$arguments312['name'] = 'users';
$array314 = array (
);$arguments312['options'] = $renderingContext->getVariableProvider()->getByPath('interfaces', $array314);
$arguments312['optionValueField'] = 'jumpScript';
$arguments312['optionLabelField'] = 'label';

$output309 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext);

$output309 .= '
                                                    </div>
                                                ';
return $output309;
};
$arguments307['__elseClosures'][] = function() use ($renderingContext, $self) {
$output315 = '';

$output315 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
$output321 = '';

$output321 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments322 = array();
$arguments322['additionalAttributes'] = NULL;
$arguments322['data'] = NULL;
$arguments322['aria'] = NULL;
$arguments322['name'] = NULL;
$arguments322['value'] = NULL;
$arguments322['property'] = NULL;
$arguments322['class'] = NULL;
$arguments322['dir'] = NULL;
$arguments322['id'] = NULL;
$arguments322['lang'] = NULL;
$arguments322['style'] = NULL;
$arguments322['title'] = NULL;
$arguments322['accesskey'] = NULL;
$arguments322['tabindex'] = NULL;
$arguments322['onclick'] = NULL;
$arguments322['respectSubmittedDataValue'] = true;
$arguments322['name'] = 'interface';
$array324 = array (
);$arguments322['value'] = $renderingContext->getVariableProvider()->getByPath('interface', $array324);

$output321 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments322, $renderChildrenClosure323, $renderingContext);

$output321 .= '
                                                    ';
return $output321;
};
$arguments316 = array();
$arguments316['then'] = NULL;
$arguments316['else'] = NULL;
$arguments316['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array318 = array();
$array319 = array (
);$array318['0'] = $renderingContext->getVariableProvider()->getByPath('interface', $array319);

$expression320 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments316['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression320(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array318)
					),
					$renderingContext
				);
$arguments316['__thenClosure'] = $renderChildrenClosure317;

$output315 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext);

$output315 .= '
                                                ';
return $output315;
};

$output302 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext);

$output302 .= '
                                            <input type="hidden" name="p_field" value="" />
                                            <input class="btn btn-block btn-lg" type="submit" name="commandLO" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments349 = array();
$arguments349['key'] = NULL;
$arguments349['id'] = NULL;
$arguments349['default'] = NULL;
$arguments349['arguments'] = NULL;
$arguments349['extensionName'] = NULL;
$arguments349['languageKey'] = NULL;
$arguments349['alternativeLanguageKeys'] = NULL;
$arguments349['key'] = 'login.submit';

$output302 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments349, $renderChildrenClosure350, $renderingContext)]);

$output302 .= '" id="t3-login-submit" />
                                        </div>
                                    </div>
                                </form>
                            ';
return $output302;
};
$arguments300 = array();
$arguments300['if'] = NULL;

$output177 .= '';

$output177 .= '
                        ';
return $output177;
};
$arguments5 = array();
$arguments5['then'] = NULL;
$arguments5['else'] = NULL;
$arguments5['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array174 = array();
$array175 = array (
);$array174['0'] = $renderingContext->getVariableProvider()->getByPath('action', $array175);
$array174['1'] = ' == \'login\'';

$expression176 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'login');};
$arguments5['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression176(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array174)
					),
					$renderingContext
				);
$arguments5['__thenClosure'] = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
                                    <div class="t3js-login-error mb-2" id="t3-login-error">
                                        <div class="alert alert-danger">
                                            <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['key'] = NULL;
$arguments14['id'] = NULL;
$arguments14['default'] = NULL;
$arguments14['arguments'] = NULL;
$arguments14['extensionName'] = NULL;
$arguments14['languageKey'] = NULL;
$arguments14['alternativeLanguageKeys'] = NULL;
$arguments14['key'] = 'login.error.message';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext)]);

$output13 .= '</strong>
                                            <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['key'] = NULL;
$arguments16['id'] = NULL;
$arguments16['default'] = NULL;
$arguments16['arguments'] = NULL;
$arguments16['extensionName'] = NULL;
$arguments16['languageKey'] = NULL;
$arguments16['alternativeLanguageKeys'] = NULL;
$arguments16['key'] = 'login.error.description';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext)]);

$output13 .= '</p>
                                        </div>
                                    </div>
                                ';
return $output13;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array10 = array();
$array11 = array (
);$array10['0'] = $renderingContext->getVariableProvider()->getByPath('hasLoginError', $array11);

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression12(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)
					),
					$renderingContext
				);
$arguments8['__thenClosure'] = $renderChildrenClosure9;

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
                                <noscript>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['message'] = NULL;
$arguments18['title'] = NULL;
$arguments18['state'] = -2;
$arguments18['iconName'] = NULL;
$arguments18['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['key'] = NULL;
$arguments20['id'] = NULL;
$arguments20['default'] = NULL;
$arguments20['arguments'] = NULL;
$arguments20['extensionName'] = NULL;
$arguments20['languageKey'] = NULL;
$arguments20['alternativeLanguageKeys'] = NULL;
$arguments20['key'] = 'login.error.javascript';
$arguments18['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);
$arguments18['state'] = 2;
$renderChildrenClosure19 = ($arguments18['message'] !== null) ? function() use ($arguments18) { return $arguments18['message']; } : $renderChildrenClosure19;
$output7 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output7 .= '
                                </noscript>
                                <div class="hidden t3js-login-error-nocookies">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['message'] = NULL;
$arguments22['title'] = NULL;
$arguments22['state'] = -2;
$arguments22['iconName'] = NULL;
$arguments22['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['key'] = NULL;
$arguments24['id'] = NULL;
$arguments24['default'] = NULL;
$arguments24['arguments'] = NULL;
$arguments24['extensionName'] = NULL;
$arguments24['languageKey'] = NULL;
$arguments24['alternativeLanguageKeys'] = NULL;
$arguments24['key'] = 'login.error.cookies';
$arguments22['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext)]);
$arguments22['state'] = 2;
$renderChildrenClosure23 = ($arguments22['message'] !== null) ? function() use ($arguments22) { return $arguments22['message']; } : $renderChildrenClosure23;
$output7 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output7 .= '
                                </div>
                                <div class="hidden t3js-login-error-noreferrer">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['message'] = NULL;
$arguments26['title'] = NULL;
$arguments26['state'] = -2;
$arguments26['iconName'] = NULL;
$arguments26['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['key'] = NULL;
$arguments28['id'] = NULL;
$arguments28['default'] = NULL;
$arguments28['arguments'] = NULL;
$arguments28['extensionName'] = NULL;
$arguments28['languageKey'] = NULL;
$arguments28['alternativeLanguageKeys'] = NULL;
$arguments28['key'] = 'login.error.referrer';
$arguments26['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);
$arguments26['state'] = 2;
$renderChildrenClosure27 = ($arguments26['message'] !== null) ? function() use ($arguments26) { return $arguments26['message']; } : $renderChildrenClosure27;
$output7 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output7 .= '
                                </div>
                                <div class="typo3-login-form t3js-login-formfields">
                                    <form action="';
$array30 = array (
);
$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formActionUrl', $array30)]);

$output7 .= '" method="post" name="loginform" id="typo3-login-form">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['additionalAttributes'] = NULL;
$arguments31['data'] = NULL;
$arguments31['aria'] = NULL;
$arguments31['name'] = NULL;
$arguments31['value'] = NULL;
$arguments31['property'] = NULL;
$arguments31['class'] = NULL;
$arguments31['dir'] = NULL;
$arguments31['id'] = NULL;
$arguments31['lang'] = NULL;
$arguments31['style'] = NULL;
$arguments31['title'] = NULL;
$arguments31['accesskey'] = NULL;
$arguments31['tabindex'] = NULL;
$arguments31['onclick'] = NULL;
$arguments31['respectSubmittedDataValue'] = true;
$arguments31['name'] = 'login_status';
$arguments31['value'] = 'login';

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output7 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['additionalAttributes'] = NULL;
$arguments33['data'] = NULL;
$arguments33['aria'] = NULL;
$arguments33['name'] = NULL;
$arguments33['value'] = NULL;
$arguments33['property'] = NULL;
$arguments33['class'] = NULL;
$arguments33['dir'] = NULL;
$arguments33['id'] = NULL;
$arguments33['lang'] = NULL;
$arguments33['style'] = NULL;
$arguments33['title'] = NULL;
$arguments33['accesskey'] = NULL;
$arguments33['tabindex'] = NULL;
$arguments33['onclick'] = NULL;
$arguments33['respectSubmittedDataValue'] = true;
$arguments33['name'] = 'userident';
$arguments33['id'] = 't3-field-userident';
$arguments33['class'] = 't3js-login-userident-field';
$arguments33['value'] = '';

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output7 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['additionalAttributes'] = NULL;
$arguments35['data'] = NULL;
$arguments35['aria'] = NULL;
$arguments35['name'] = NULL;
$arguments35['value'] = NULL;
$arguments35['property'] = NULL;
$arguments35['class'] = NULL;
$arguments35['dir'] = NULL;
$arguments35['id'] = NULL;
$arguments35['lang'] = NULL;
$arguments35['style'] = NULL;
$arguments35['title'] = NULL;
$arguments35['accesskey'] = NULL;
$arguments35['tabindex'] = NULL;
$arguments35['onclick'] = NULL;
$arguments35['respectSubmittedDataValue'] = true;
$arguments35['name'] = 'redirect_url';
$array37 = array (
);$arguments35['value'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array37);

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output7 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['additionalAttributes'] = NULL;
$arguments38['data'] = NULL;
$arguments38['aria'] = NULL;
$arguments38['name'] = NULL;
$arguments38['value'] = NULL;
$arguments38['property'] = NULL;
$arguments38['class'] = NULL;
$arguments38['dir'] = NULL;
$arguments38['id'] = NULL;
$arguments38['lang'] = NULL;
$arguments38['style'] = NULL;
$arguments38['title'] = NULL;
$arguments38['accesskey'] = NULL;
$arguments38['tabindex'] = NULL;
$arguments38['onclick'] = NULL;
$arguments38['respectSubmittedDataValue'] = true;
$arguments38['name'] = 'loginRefresh';
$array40 = array (
);$arguments38['value'] = $renderingContext->getVariableProvider()->getByPath('loginRefresh', $array40);

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output7 .= '

                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['section'] = NULL;
$arguments41['partial'] = NULL;
$arguments41['delegate'] = NULL;
$arguments41['renderable'] = NULL;
$arguments41['arguments'] = array (
);
$arguments41['optional'] = false;
$arguments41['default'] = NULL;
$arguments41['contentAs'] = NULL;
$arguments41['debug'] = true;
$arguments41['section'] = 'loginFormFields';

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output7 .= '

                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['section'] = NULL;
$arguments43['partial'] = NULL;
$arguments43['delegate'] = NULL;
$arguments43['renderable'] = NULL;
$arguments43['arguments'] = array (
);
$arguments43['optional'] = false;
$arguments43['default'] = NULL;
$arguments43['contentAs'] = NULL;
$arguments43['debug'] = true;
$arguments43['partial'] = 'Login/InterfaceSelector';
$arguments43['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output7 .= '

                                        <div class="form-group mb-2" id="t3-login-submit-section">
                                            <button class="btn btn-block btn-login t3js-login-submit" id="t3-login-submit" type="submit" name="commandLI" data-loading-text="<i class=\'fa fa-circle-o-notch fa-spin\'></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['key'] = NULL;
$arguments46['id'] = NULL;
$arguments46['default'] = NULL;
$arguments46['arguments'] = NULL;
$arguments46['extensionName'] = NULL;
$arguments46['languageKey'] = NULL;
$arguments46['alternativeLanguageKeys'] = NULL;
$arguments46['key'] = 'login.process';

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext)]);

$output7 .= '" autocomplete="off">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['key'] = NULL;
$arguments48['id'] = NULL;
$arguments48['default'] = NULL;
$arguments48['arguments'] = NULL;
$arguments48['extensionName'] = NULL;
$arguments48['languageKey'] = NULL;
$arguments48['alternativeLanguageKeys'] = NULL;
$arguments48['key'] = 'login.submit';

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext)]);

$output7 .= '
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['section'] = NULL;
$arguments56['partial'] = NULL;
$arguments56['delegate'] = NULL;
$arguments56['renderable'] = NULL;
$arguments56['arguments'] = array (
);
$arguments56['optional'] = false;
$arguments56['default'] = NULL;
$arguments56['contentAs'] = NULL;
$arguments56['debug'] = true;
$arguments56['section'] = 'ResetPassword';
$arguments56['arguments'] = $renderingContext->getVariableProvider()->getAll();
// Rendering Boolean node
// Rendering Array
$array59 = array();
$array59['0'] = 'true';

$expression60 = function($context) {return TRUE;};
$arguments56['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression60(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array59)
					),
					$renderingContext
				);

$output55 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
                                ';
return $output55;
};
$arguments50 = array();
$arguments50['then'] = NULL;
$arguments50['else'] = NULL;
$arguments50['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array52 = array();
$array53 = array (
);$array52['0'] = $renderingContext->getVariableProvider()->getByPath('enablePasswordReset', $array53);

$expression54 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments50['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression54(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)
					),
					$renderingContext
				);
$arguments50['__thenClosure'] = $renderChildrenClosure51;

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output7 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output68 = '';

$output68 .= '
                                    <nav aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['key'] = NULL;
$arguments69['id'] = NULL;
$arguments69['default'] = NULL;
$arguments69['arguments'] = NULL;
$arguments69['extensionName'] = NULL;
$arguments69['languageKey'] = NULL;
$arguments69['alternativeLanguageKeys'] = NULL;
$arguments69['key'] = 'login.navigation.loginProvider';

$output68 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext)]);

$output68 .= '">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return 'role is for VoiceOver';
};
$arguments71 = array();

$output68 .= NULL;

$output68 .= '
                                        <ul class="list-unstyled typo3-login-links" role="list">
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
                                                        <li class="t3js-loginprovider-switch" data-providerkey="';
$array90 = array (
);
$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('providerKey', $array90)]);

$output89 .= '">
                                                            <a href="?loginProvider=';
$array91 = array (
);
$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('providerKey', $array91)]);

$output89 .= '">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['identifier'] = NULL;
$arguments107['size'] = 'small';
$arguments107['overlay'] = NULL;
$arguments107['state'] = 'default';
$arguments107['alternativeMarkupIdentifier'] = NULL;
$array109 = array (
);$arguments107['identifier'] = $renderingContext->getVariableProvider()->getByPath('provider.iconIdentifier', $array109);
$arguments107['size'] = 'small';

$output106 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output106 .= '
                                                                    ';
return $output106;
};
$arguments104 = array();

$output103 .= '';

$output103 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
                                                                        <i class="fa fa-fw ';
$array113 = array (
);
$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('provider.icon-class', $array113)]);

$output112 .= '"></i>
                                                                    ';
return $output112;
};
$arguments110 = array();
$arguments110['if'] = NULL;

$output103 .= '';

$output103 .= '
                                                                ';
return $output103;
};
$arguments92 = array();
$arguments92['then'] = NULL;
$arguments92['else'] = NULL;
$arguments92['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array100 = array();
$array101 = array (
);$array100['0'] = $renderingContext->getVariableProvider()->getByPath('provider.iconIdentifier', $array101);

$expression102 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments92['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression102(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array100)
					),
					$renderingContext
				);
$arguments92['__thenClosure'] = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['identifier'] = NULL;
$arguments95['size'] = 'small';
$arguments95['overlay'] = NULL;
$arguments95['state'] = 'default';
$arguments95['alternativeMarkupIdentifier'] = NULL;
$array97 = array (
);$arguments95['identifier'] = $renderingContext->getVariableProvider()->getByPath('provider.iconIdentifier', $array97);
$arguments95['size'] = 'small';

$output94 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '
                                                                    ';
return $output94;
};
$arguments92['__elseClosures'][] = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
                                                                        <i class="fa fa-fw ';
$array99 = array (
);
$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('provider.icon-class', $array99)]);

$output98 .= '"></i>
                                                                    ';
return $output98;
};

$output89 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output89 .= '
                                                                <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['key'] = NULL;
$arguments114['id'] = NULL;
$arguments114['default'] = NULL;
$arguments114['arguments'] = NULL;
$arguments114['extensionName'] = NULL;
$arguments114['languageKey'] = NULL;
$arguments114['alternativeLanguageKeys'] = NULL;
$array116 = array (
);$arguments114['key'] = $renderingContext->getVariableProvider()->getByPath('provider.label', $array116);
$array117 = array (
);$arguments114['default'] = $renderingContext->getVariableProvider()->getByPath('provider.label', $array117);

$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext)]);

$output89 .= '</span>
                                                            </a>
                                                        </li>
                                                    ';
return $output89;
};
$arguments83 = array();
$arguments83['then'] = NULL;
$arguments83['else'] = NULL;
$arguments83['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array85 = array();
$array86 = array (
);$array85['0'] = $renderingContext->getVariableProvider()->getByPath('loginProviderIdentifier', $array86);
$array85['1'] = ' != ';
$array87 = array (
);$array85['2'] = $renderingContext->getVariableProvider()->getByPath('providerKey', $array87);

$expression88 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments83['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression88(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array85)
					),
					$renderingContext
				);
$arguments83['__thenClosure'] = $renderChildrenClosure84;

$output82 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= '
                                                ';
return $output82;
};
$arguments77 = array();
$arguments77['then'] = NULL;
$arguments77['else'] = NULL;
$arguments77['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array79 = array();
$array80 = array (
);$array79['0'] = $renderingContext->getVariableProvider()->getByPath('provider.label', $array80);

$expression81 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments77['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression81(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array79)
					),
					$renderingContext
				);
$arguments77['__thenClosure'] = $renderChildrenClosure78;

$output76 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output76 .= '
                                            ';
return $output76;
};
$arguments73 = array();
$arguments73['each'] = NULL;
$arguments73['as'] = NULL;
$arguments73['key'] = NULL;
$arguments73['reverse'] = false;
$arguments73['iteration'] = NULL;
$array75 = array (
);$arguments73['each'] = $renderingContext->getVariableProvider()->getByPath('loginProviders', $array75);
$arguments73['as'] = 'provider';
$arguments73['key'] = 'providerKey';

$output68 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output68 .= '
                                        </ul>
                                    </nav>
                                ';
return $output68;
};
$arguments61 = array();
$arguments61['then'] = NULL;
$arguments61['else'] = NULL;
$arguments61['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array63 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$array66 = array (
);return $renderingContext->getVariableProvider()->getByPath('loginProviders', $array66);
};
$arguments64 = array();
$arguments64['subject'] = NULL;
$renderChildrenClosure65 = ($arguments64['subject'] !== null) ? function() use ($arguments64) { return $arguments64['subject']; } : $renderChildrenClosure65;$array63['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);
$array63['1'] = ' > 1';

$expression67 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments61['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression67(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array63)
					),
					$renderingContext
				);
$arguments61['__thenClosure'] = $renderChildrenClosure62;

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output7 .= '
                            ';
return $output7;
};
$arguments5['__elseClosures'][] = function() use ($renderingContext, $self) {
$output118 = '';

$output118 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments119 = array();
$arguments119['section'] = NULL;
$arguments119['partial'] = NULL;
$arguments119['delegate'] = NULL;
$arguments119['renderable'] = NULL;
$arguments119['arguments'] = array (
);
$arguments119['optional'] = false;
$arguments119['default'] = NULL;
$arguments119['contentAs'] = NULL;
$arguments119['debug'] = true;
$arguments119['section'] = 'ResetPassword';
$arguments119['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output118 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output118 .= '
                            ';
return $output118;
};
$arguments5['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array122 = array();
$array123 = array (
);$array122['0'] = $renderingContext->getVariableProvider()->getByPath('enablePasswordReset', $array123);

$expression124 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression124(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array122)
					),
					$renderingContext
				);
};
$arguments5['__elseClosures'][] = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
                                <form action="';
$array126 = array (
);
$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formActionUrl', $array126)]);

$output125 .= '" method="post" name="loginform">
                                    <input type="hidden" name="login_status" value="logout" />
                                    <div class="t3-login-box-body">
                                        <div class="t3-login-logout-form">
                                            <div class="t3-login-username">
                                                <div class="t3-login-label t3-username">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments127 = array();
$arguments127['key'] = NULL;
$arguments127['id'] = NULL;
$arguments127['default'] = NULL;
$arguments127['arguments'] = NULL;
$arguments127['extensionName'] = NULL;
$arguments127['languageKey'] = NULL;
$arguments127['alternativeLanguageKeys'] = NULL;
$arguments127['key'] = 'login.username';

$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext)]);

$output125 .= '
                                                </div>
                                                <div class="t3-username-current">
                                                    ';
$array129 = array (
);
$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.username', $array129)]);

$output125 .= '
                                                </div>
                                            </div>
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output151 = '';

$output151 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$output154 = '';

$output154 .= '
                                                    <div class="t3-login-interface">
                                                        <div class="t3-login-label t3-interface-selector">
                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments155 = array();
$arguments155['key'] = NULL;
$arguments155['id'] = NULL;
$arguments155['default'] = NULL;
$arguments155['arguments'] = NULL;
$arguments155['extensionName'] = NULL;
$arguments155['languageKey'] = NULL;
$arguments155['alternativeLanguageKeys'] = NULL;
$arguments155['key'] = 'login.interface';

$output154 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext)]);

$output154 .= '
                                                        </div>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments157 = array();
$arguments157['additionalAttributes'] = NULL;
$arguments157['data'] = NULL;
$arguments157['aria'] = NULL;
$arguments157['name'] = NULL;
$arguments157['value'] = NULL;
$arguments157['property'] = NULL;
$arguments157['class'] = NULL;
$arguments157['dir'] = NULL;
$arguments157['id'] = NULL;
$arguments157['lang'] = NULL;
$arguments157['style'] = NULL;
$arguments157['title'] = NULL;
$arguments157['accesskey'] = NULL;
$arguments157['tabindex'] = NULL;
$arguments157['onclick'] = NULL;
$arguments157['size'] = NULL;
$arguments157['disabled'] = NULL;
$arguments157['options'] = NULL;
$arguments157['optionsAfterContent'] = false;
$arguments157['optionValueField'] = NULL;
$arguments157['optionLabelField'] = NULL;
$arguments157['sortByOptionLabel'] = false;
$arguments157['selectAllByDefault'] = false;
$arguments157['errorClass'] = 'f3-form-error';
$arguments157['prependOptionLabel'] = NULL;
$arguments157['prependOptionValue'] = NULL;
$arguments157['multiple'] = false;
$arguments157['required'] = false;
$arguments157['name'] = 'users';
$array159 = array (
);$arguments157['options'] = $renderingContext->getVariableProvider()->getByPath('interfaces', $array159);
$arguments157['optionValueField'] = 'jumpScript';
$arguments157['optionLabelField'] = 'label';

$output154 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output154 .= '
                                                    </div>
                                                ';
return $output154;
};
$arguments152 = array();

$output151 .= '';

$output151 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
$output162 = '';

$output162 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
$output168 = '';

$output168 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments169 = array();
$arguments169['additionalAttributes'] = NULL;
$arguments169['data'] = NULL;
$arguments169['aria'] = NULL;
$arguments169['name'] = NULL;
$arguments169['value'] = NULL;
$arguments169['property'] = NULL;
$arguments169['class'] = NULL;
$arguments169['dir'] = NULL;
$arguments169['id'] = NULL;
$arguments169['lang'] = NULL;
$arguments169['style'] = NULL;
$arguments169['title'] = NULL;
$arguments169['accesskey'] = NULL;
$arguments169['tabindex'] = NULL;
$arguments169['onclick'] = NULL;
$arguments169['respectSubmittedDataValue'] = true;
$arguments169['name'] = 'interface';
$array171 = array (
);$arguments169['value'] = $renderingContext->getVariableProvider()->getByPath('interface', $array171);

$output168 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output168 .= '
                                                    ';
return $output168;
};
$arguments163 = array();
$arguments163['then'] = NULL;
$arguments163['else'] = NULL;
$arguments163['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array165 = array();
$array166 = array (
);$array165['0'] = $renderingContext->getVariableProvider()->getByPath('interface', $array166);

$expression167 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments163['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression167(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array165)
					),
					$renderingContext
				);
$arguments163['__thenClosure'] = $renderChildrenClosure164;

$output162 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output162 .= '
                                                ';
return $output162;
};
$arguments160 = array();
$arguments160['if'] = NULL;

$output151 .= '';

$output151 .= '
                                            ';
return $output151;
};
$arguments130 = array();
$arguments130['then'] = NULL;
$arguments130['else'] = NULL;
$arguments130['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array148 = array();
$array149 = array (
);$array148['0'] = $renderingContext->getVariableProvider()->getByPath('showInterfaceSelector', $array149);

$expression150 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments130['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression150(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array148)
					),
					$renderingContext
				);
$arguments130['__thenClosure'] = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
                                                    <div class="t3-login-interface">
                                                        <div class="t3-login-label t3-interface-selector">
                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['key'] = NULL;
$arguments133['id'] = NULL;
$arguments133['default'] = NULL;
$arguments133['arguments'] = NULL;
$arguments133['extensionName'] = NULL;
$arguments133['languageKey'] = NULL;
$arguments133['alternativeLanguageKeys'] = NULL;
$arguments133['key'] = 'login.interface';

$output132 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext)]);

$output132 .= '
                                                        </div>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments135 = array();
$arguments135['additionalAttributes'] = NULL;
$arguments135['data'] = NULL;
$arguments135['aria'] = NULL;
$arguments135['name'] = NULL;
$arguments135['value'] = NULL;
$arguments135['property'] = NULL;
$arguments135['class'] = NULL;
$arguments135['dir'] = NULL;
$arguments135['id'] = NULL;
$arguments135['lang'] = NULL;
$arguments135['style'] = NULL;
$arguments135['title'] = NULL;
$arguments135['accesskey'] = NULL;
$arguments135['tabindex'] = NULL;
$arguments135['onclick'] = NULL;
$arguments135['size'] = NULL;
$arguments135['disabled'] = NULL;
$arguments135['options'] = NULL;
$arguments135['optionsAfterContent'] = false;
$arguments135['optionValueField'] = NULL;
$arguments135['optionLabelField'] = NULL;
$arguments135['sortByOptionLabel'] = false;
$arguments135['selectAllByDefault'] = false;
$arguments135['errorClass'] = 'f3-form-error';
$arguments135['prependOptionLabel'] = NULL;
$arguments135['prependOptionValue'] = NULL;
$arguments135['multiple'] = false;
$arguments135['required'] = false;
$arguments135['name'] = 'users';
$array137 = array (
);$arguments135['options'] = $renderingContext->getVariableProvider()->getByPath('interfaces', $array137);
$arguments135['optionValueField'] = 'jumpScript';
$arguments135['optionLabelField'] = 'label';

$output132 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output132 .= '
                                                    </div>
                                                ';
return $output132;
};
$arguments130['__elseClosures'][] = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments145 = array();
$arguments145['additionalAttributes'] = NULL;
$arguments145['data'] = NULL;
$arguments145['aria'] = NULL;
$arguments145['name'] = NULL;
$arguments145['value'] = NULL;
$arguments145['property'] = NULL;
$arguments145['class'] = NULL;
$arguments145['dir'] = NULL;
$arguments145['id'] = NULL;
$arguments145['lang'] = NULL;
$arguments145['style'] = NULL;
$arguments145['title'] = NULL;
$arguments145['accesskey'] = NULL;
$arguments145['tabindex'] = NULL;
$arguments145['onclick'] = NULL;
$arguments145['respectSubmittedDataValue'] = true;
$arguments145['name'] = 'interface';
$array147 = array (
);$arguments145['value'] = $renderingContext->getVariableProvider()->getByPath('interface', $array147);

$output144 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output144 .= '
                                                    ';
return $output144;
};
$arguments139 = array();
$arguments139['then'] = NULL;
$arguments139['else'] = NULL;
$arguments139['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array141 = array();
$array142 = array (
);$array141['0'] = $renderingContext->getVariableProvider()->getByPath('interface', $array142);

$expression143 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments139['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression143(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array141)
					),
					$renderingContext
				);
$arguments139['__thenClosure'] = $renderChildrenClosure140;

$output138 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output138 .= '
                                                ';
return $output138;
};

$output125 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output125 .= '
                                            <input type="hidden" name="p_field" value="" />
                                            <input class="btn btn-block btn-lg" type="submit" name="commandLO" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments172 = array();
$arguments172['key'] = NULL;
$arguments172['id'] = NULL;
$arguments172['default'] = NULL;
$arguments172['arguments'] = NULL;
$arguments172['extensionName'] = NULL;
$arguments172['languageKey'] = NULL;
$arguments172['alternativeLanguageKeys'] = NULL;
$arguments172['key'] = 'login.submit';

$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext)]);

$output125 .= '" id="t3-login-submit" />
                                        </div>
                                    </div>
                                </form>
                            ';
return $output125;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
                    </main>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments351 = array();
$arguments351['section'] = NULL;
$arguments351['partial'] = NULL;
$arguments351['delegate'] = NULL;
$arguments351['renderable'] = NULL;
$arguments351['arguments'] = array (
);
$arguments351['optional'] = false;
$arguments351['default'] = NULL;
$arguments351['contentAs'] = NULL;
$arguments351['debug'] = true;
$arguments351['partial'] = 'LoginNews';
$arguments351['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext);

$output0 .= '
                    <footer class="card-footer">
                        <div class="typo3-login-copyright-wrap">
                            <a href="#loginCopyright" class="typo3-login-copyright-link t3js-login-copyright-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="loginCopyright">
                                <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure355 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments354 = array();
$arguments354['key'] = NULL;
$arguments354['id'] = NULL;
$arguments354['default'] = NULL;
$arguments354['arguments'] = NULL;
$arguments354['extensionName'] = NULL;
$arguments354['languageKey'] = NULL;
$arguments354['alternativeLanguageKeys'] = NULL;
$arguments354['key'] = 'login.copyrightLink';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments354, $renderChildrenClosure355, $renderingContext)]);

$output0 .= '</span>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
return 'the image within the button is only decorative';
};
$arguments356 = array();

$output0 .= NULL;

$output0 .= '
                                <img src="';
$array358 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('images.typo3', $array358)]);

$output0 .= '" alt="" width="70" height="20" />
                            </a>
                            <div id="loginCopyright" class="collapse">
                                <div class="typo3-login-copyright-text">
                                    <p>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure360 = function() use ($renderingContext, $self) {
$array361 = array (
);return $renderingContext->getVariableProvider()->getByPath('copyright', $array361);
};
$arguments359 = array();
$arguments359['value'] = NULL;

$output0 .= isset($arguments359['value']) ? $arguments359['value'] : $renderChildrenClosure360();

$output0 .= '
                                    </p>
                                    <nav aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments362 = array();
$arguments362['key'] = NULL;
$arguments362['id'] = NULL;
$arguments362['default'] = NULL;
$arguments362['arguments'] = NULL;
$arguments362['extensionName'] = NULL;
$arguments362['languageKey'] = NULL;
$arguments362['alternativeLanguageKeys'] = NULL;
$arguments362['key'] = 'login.navigation.typo3';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments362, $renderChildrenClosure363, $renderingContext)]);

$output0 .= '">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
return 'role is for VoiceOver';
};
$arguments364 = array();

$output0 .= NULL;

$output0 .= '
                                        <ul class="list-unstyled" role="list">
                                            <li><a href="https://typo3.org" target="_blank" rel="noreferrer" class="t3-login-link-typo3"><i class="fa fa-external-link"></i> TYPO3.org</a></li>
                                            <li><a href="https://typo3.org/donate/online-donation/" target="_blank" rel="noreferrer" class="t3-login-link-donate"><i class="fa fa-external-link"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments366 = array();
$arguments366['key'] = NULL;
$arguments366['id'] = NULL;
$arguments366['default'] = NULL;
$arguments366['arguments'] = NULL;
$arguments366['extensionName'] = NULL;
$arguments366['languageKey'] = NULL;
$arguments366['alternativeLanguageKeys'] = NULL;
$arguments366['key'] = 'login.donate';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext)]);

$output0 .= '</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure369 = function() use ($renderingContext, $self) {
$output373 = '';

$output373 .= '
            <aside class="typo3-login-footnote" aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure375 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments374 = array();
$arguments374['key'] = NULL;
$arguments374['id'] = NULL;
$arguments374['default'] = NULL;
$arguments374['arguments'] = NULL;
$arguments374['extensionName'] = NULL;
$arguments374['languageKey'] = NULL;
$arguments374['alternativeLanguageKeys'] = NULL;
$arguments374['key'] = 'login.region.footnote';

$output373 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments374, $renderChildrenClosure375, $renderingContext)]);

$output373 .= '">
                <p>';
$array376 = array (
);
$output373 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('loginFootnote', $array376)]);

$output373 .= '</p>
            </aside>
        ';
return $output373;
};
$arguments368 = array();
$arguments368['then'] = NULL;
$arguments368['else'] = NULL;
$arguments368['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array370 = array();
$array371 = array (
);$array370['0'] = $renderingContext->getVariableProvider()->getByPath('loginFootnote', $array371);

$expression372 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments368['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression372(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array370)
					),
					$renderingContext
				);
$arguments368['__thenClosure'] = $renderChildrenClosure369;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments368, $renderChildrenClosure369, $renderingContext);

$output0 .= '
    </div>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure378 = function() use ($renderingContext, $self) {
return 'This link is only used for protection of the backend.';
};
$arguments377 = array();

$output0 .= NULL;

$output0 .= '
    <a href="';
$array379 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('loginUrl', $array379)]);

$output0 .= '" id="t3js-login-url" data-referrer-check-enabled="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure381 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments380 = array();
$arguments380['then'] = NULL;
$arguments380['else'] = NULL;
$arguments380['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array382 = array();
$array383 = array (
);$array382['0'] = $renderingContext->getVariableProvider()->getByPath('referrerCheckEnabled', $array383);

$expression384 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments380['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression384(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array382)
					),
					$renderingContext
				);
$arguments380['then'] = 1;
$arguments380['else'] = 0;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments380, $renderChildrenClosure381, $renderingContext);

$output0 .= '" aria-hidden="true" tabindex="-1"></a>
</div>

';

return $output0;
}


}
#