<form action="[{$oViewConf->getSelfLink()}]" method="POST">
    [{$oViewConf->getHiddenSid()}]
    <input type="hidden" name="cl" value="product_counter_greeting">
    <input type="hidden" name="fnc" value="save">

    <input type='checkbox' name='editval[greetingactive]' id='greetingActive' [{if $greetingActive}]checked[{/if}] />
    <label for='greetingActive'>[{oxmultilang ident='oxacproductcountermodule_setting_greetingActive'}]</label><br /><br />

    <input type='submit' name='submit' value='Save' />
</form>
