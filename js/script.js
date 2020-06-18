/**
 * CODIGO DE FUENTE NSC LOGIN
 *
 * @package	nsc_login
 * @author	Joel Changano Timana
  -----------------------------------------------------------------------------------------------------------------
 */


$('input').focusin(function() {

    $(this).parent('div').addClass("border-input");

})

$('input').focusout(function() {

    $(this).parent('div').removeClass("border-input");

})