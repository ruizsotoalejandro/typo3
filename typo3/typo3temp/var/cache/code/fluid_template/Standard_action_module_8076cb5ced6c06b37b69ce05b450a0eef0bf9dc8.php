<?php

class Standard_action_module_8076cb5ced6c06b37b69ce05b450a0eef0bf9dc8 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Login';
}
public function hasLayout() {
return TRUE;
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
 * section loginFormFields
 */
public function section_d125784443bed2140f366503ba88a5689028c882(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <div class="form-group t3js-login-username-section" id="t3-login-username-section">
        <div class="form-control-wrap">
            <div class="form-control-holder">
                <input type="text" id="t3-username" name="username" value="';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('presetUsername', $array1)]);

$output0 .= '" aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['key'] = NULL;
$arguments2['id'] = NULL;
$arguments2['default'] = NULL;
$arguments2['arguments'] = NULL;
$arguments2['extensionName'] = NULL;
$arguments2['languageKey'] = NULL;
$arguments2['alternativeLanguageKeys'] = NULL;
$arguments2['key'] = 'login.username';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext)]);

$output0 .= '" placeholder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['key'] = NULL;
$arguments4['id'] = NULL;
$arguments4['default'] = NULL;
$arguments4['arguments'] = NULL;
$arguments4['extensionName'] = NULL;
$arguments4['languageKey'] = NULL;
$arguments4['alternativeLanguageKeys'] = NULL;
$arguments4['key'] = 'login.username';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output0 .= '" class="form-control input-login t3js-clearable t3js-login-username-field" autofocus="autofocus" autocomplete="username" required="required" />
                <div role="status" class="form-notice-capslock hidden t3js-login-alert-capslock">
                    <img aria-hidden="true" src="';
$array6 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('images.capslock', $array6)]);

$output0 .= '" width="14" height="14" alt="" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['key'] = NULL;
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$arguments7['languageKey'] = NULL;
$arguments7['alternativeLanguageKeys'] = NULL;
$arguments7['key'] = 'login.error.capslock';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output0 .= '" />
                    <span class="visually-hidden">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['key'] = NULL;
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$arguments9['languageKey'] = NULL;
$arguments9['alternativeLanguageKeys'] = NULL;
$arguments9['key'] = 'login.error.capslockStatus';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output0 .= '</span>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group t3js-login-password-section" id="t3-login-password-section">
        <div class="form-control-wrap">
            <div class="form-control-holder">
                <input type="password" id="t3-password" name="p_field" value="';
$array11 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('presetPassword', $array11)]);

$output0 .= '" aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['key'] = NULL;
$arguments12['id'] = NULL;
$arguments12['default'] = NULL;
$arguments12['arguments'] = NULL;
$arguments12['extensionName'] = NULL;
$arguments12['languageKey'] = NULL;
$arguments12['alternativeLanguageKeys'] = NULL;
$arguments12['key'] = 'login.password';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);

$output0 .= '" placeholder="';
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
$arguments14['key'] = 'login.password';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext)]);

$output0 .= '" class="form-control input-login t3js-clearable t3js-login-password-field" autocomplete="current-password" required="required" />
                <div role="status" class="form-notice-capslock hidden t3js-login-alert-capslock">
                    <img aria-hidden="true" src="';
$array16 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('images.capslock', $array16)]);

$output0 .= '" width="14" height="14" alt="" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['key'] = NULL;
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['languageKey'] = NULL;
$arguments17['alternativeLanguageKeys'] = NULL;
$arguments17['key'] = 'login.error.capslock';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output0 .= '" />
                    <span class="visually-hidden">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['key'] = NULL;
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['languageKey'] = NULL;
$arguments19['alternativeLanguageKeys'] = NULL;
$arguments19['key'] = 'login.error.capslockStatus';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output0 .= '</span>
                </div>
            </div>
        </div>
    </div>
';

return $output0;
}
/**
 * section ResetPassword
 */
public function section_024f69d538e88fd3fcfacf0dbfbf7563a4597961(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output21 = '';

$output21 .= '
    <div class="forgot-password my-3">
        <div class="text-end">
            <a href="';
$array22 = array (
);
$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('forgetPasswordUrl', $array22)]);

$output21 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['key'] = NULL;
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$arguments23['languageKey'] = NULL;
$arguments23['alternativeLanguageKeys'] = NULL;
$arguments23['key'] = 'login.password_forget';

$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output21 .= '</a>
        </div>
    </div>
';

return $output21;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output25 = '';

$output25 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['name'] = NULL;
$arguments26['name'] = 'Login';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output25 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
    <div class="form-group t3js-login-username-section" id="t3-login-username-section">
        <div class="form-control-wrap">
            <div class="form-control-holder">
                <input type="text" id="t3-username" name="username" value="';
$array31 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('presetUsername', $array31)]);

$output30 .= '" aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['key'] = NULL;
$arguments32['id'] = NULL;
$arguments32['default'] = NULL;
$arguments32['arguments'] = NULL;
$arguments32['extensionName'] = NULL;
$arguments32['languageKey'] = NULL;
$arguments32['alternativeLanguageKeys'] = NULL;
$arguments32['key'] = 'login.username';

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext)]);

$output30 .= '" placeholder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['key'] = NULL;
$arguments34['id'] = NULL;
$arguments34['default'] = NULL;
$arguments34['arguments'] = NULL;
$arguments34['extensionName'] = NULL;
$arguments34['languageKey'] = NULL;
$arguments34['alternativeLanguageKeys'] = NULL;
$arguments34['key'] = 'login.username';

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);

$output30 .= '" class="form-control input-login t3js-clearable t3js-login-username-field" autofocus="autofocus" autocomplete="username" required="required" />
                <div role="status" class="form-notice-capslock hidden t3js-login-alert-capslock">
                    <img aria-hidden="true" src="';
$array36 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('images.capslock', $array36)]);

$output30 .= '" width="14" height="14" alt="" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['key'] = NULL;
$arguments37['id'] = NULL;
$arguments37['default'] = NULL;
$arguments37['arguments'] = NULL;
$arguments37['extensionName'] = NULL;
$arguments37['languageKey'] = NULL;
$arguments37['alternativeLanguageKeys'] = NULL;
$arguments37['key'] = 'login.error.capslock';

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext)]);

$output30 .= '" />
                    <span class="visually-hidden">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['key'] = NULL;
$arguments39['id'] = NULL;
$arguments39['default'] = NULL;
$arguments39['arguments'] = NULL;
$arguments39['extensionName'] = NULL;
$arguments39['languageKey'] = NULL;
$arguments39['alternativeLanguageKeys'] = NULL;
$arguments39['key'] = 'login.error.capslockStatus';

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext)]);

$output30 .= '</span>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group t3js-login-password-section" id="t3-login-password-section">
        <div class="form-control-wrap">
            <div class="form-control-holder">
                <input type="password" id="t3-password" name="p_field" value="';
$array41 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('presetPassword', $array41)]);

$output30 .= '" aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['key'] = NULL;
$arguments42['id'] = NULL;
$arguments42['default'] = NULL;
$arguments42['arguments'] = NULL;
$arguments42['extensionName'] = NULL;
$arguments42['languageKey'] = NULL;
$arguments42['alternativeLanguageKeys'] = NULL;
$arguments42['key'] = 'login.password';

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext)]);

$output30 .= '" placeholder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['key'] = NULL;
$arguments44['id'] = NULL;
$arguments44['default'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['extensionName'] = NULL;
$arguments44['languageKey'] = NULL;
$arguments44['alternativeLanguageKeys'] = NULL;
$arguments44['key'] = 'login.password';

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output30 .= '" class="form-control input-login t3js-clearable t3js-login-password-field" autocomplete="current-password" required="required" />
                <div role="status" class="form-notice-capslock hidden t3js-login-alert-capslock">
                    <img aria-hidden="true" src="';
$array46 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('images.capslock', $array46)]);

$output30 .= '" width="14" height="14" alt="" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['key'] = NULL;
$arguments47['id'] = NULL;
$arguments47['default'] = NULL;
$arguments47['arguments'] = NULL;
$arguments47['extensionName'] = NULL;
$arguments47['languageKey'] = NULL;
$arguments47['alternativeLanguageKeys'] = NULL;
$arguments47['key'] = 'login.error.capslock';

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext)]);

$output30 .= '" />
                    <span class="visually-hidden">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['key'] = NULL;
$arguments49['id'] = NULL;
$arguments49['default'] = NULL;
$arguments49['arguments'] = NULL;
$arguments49['extensionName'] = NULL;
$arguments49['languageKey'] = NULL;
$arguments49['alternativeLanguageKeys'] = NULL;
$arguments49['key'] = 'login.error.capslockStatus';

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext)]);

$output30 .= '</span>
                </div>
            </div>
        </div>
    </div>
';
return $output30;
};
$arguments28 = array();
$arguments28['name'] = NULL;
$arguments28['name'] = 'loginFormFields';

$output25 .= NULL;

$output25 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
    <div class="forgot-password my-3">
        <div class="text-end">
            <a href="';
$array54 = array (
);
$output53 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('forgetPasswordUrl', $array54)]);

$output53 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['key'] = NULL;
$arguments55['id'] = NULL;
$arguments55['default'] = NULL;
$arguments55['arguments'] = NULL;
$arguments55['extensionName'] = NULL;
$arguments55['languageKey'] = NULL;
$arguments55['alternativeLanguageKeys'] = NULL;
$arguments55['key'] = 'login.password_forget';

$output53 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext)]);

$output53 .= '</a>
        </div>
    </div>
';
return $output53;
};
$arguments51 = array();
$arguments51['name'] = NULL;
$arguments51['name'] = 'ResetPassword';

$output25 .= NULL;

$output25 .= '

';

return $output25;
}


}
#