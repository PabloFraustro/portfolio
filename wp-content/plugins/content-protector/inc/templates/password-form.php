<div class="passster-form[PASSSTER_HIDE]" id="[PASSSTER_ID]">
    <form class="password-form" method="post" autocomplete="off" target="_top">
        <h4>[PASSSTER_FORM_HEADLINE]</h4>
        <p>[PASSSTER_FORM_INSTRUCTIONS]</p>
        <fieldset>
            <span class="ps-loader"><img src="https://pablofraustro.github.io/portfolio/wp-content/plugins/content-protector/inc/templates/[PS_AJAX_LOADER]"></span>
            <label for="[PASSSTER_AUTH]" style="display:none;">Enter your password</label>
            <input placeholder="[PASSSTER_PLACEHOLDER]" type="password" tabindex="1" name="[PASSSTER_AUTH]" id="[PASSSTER_AUTH]" class="passster-password" autocomplete="off" data-protection-type="[PASSSTER_TYPE]" data-list="[PASSSTER_LIST]" data-lists="[PASSSTER_LISTS]" data-area="[PASSSTER_AREA]" data-protection="[PASSSTER_PROTECTION]">
            [PASSSTER_SHOW_PASSWORD]
            <button name="submit" type="submit" class="passster-submit" data-psid="[PASSSTER_ID]" data-submit="...Checking Password" data-redirect="[PASSSTER_REDIRECT]">[PASSSTER_BUTTON_LABEL]
            </button>
            <div class="passster-error"></div>
        </fieldset>
    </form>
</div>