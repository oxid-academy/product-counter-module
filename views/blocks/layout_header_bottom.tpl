[{$smarty.block.parent}]

[{assign var="oConfig" value=$oViewConf->getConfig()}]​

[{if $numberOfProducts}]
    <div style='padding: 20px; font-weight: bold; background: #ffe082;'>
        [{if $oxcmp_user && $oConfig->getConfigParam('oxacproductcountermodule_greetingactive')}]
            [{oxmultilang ident='oxacproductcountermodule_bannerGreeting'}] [{$oxcmp_user->oxuser__oxfname}]!
        [{/if}]
        [{oxmultilang ident='oxacproductcountermodule_bannerBeforeCounter'}] [{$numberOfProducts}] [{oxmultilang ident='oxacproductcountermodule_bannerAfterCounter'}]
    </div>
[{/if}]
