[{$smarty.block.parent}]

[{assign var="oConfig" value=$oViewConf->getConfig()}]​

[{if $numberOfProducts}]
    <div style='padding: 20px; font-weight: bold; background: #ffe082;'>
        [{if $oxcmp_user && $oConfig->getConfigParam('oxacproductcountermodule_greetingactive')}]
            Hallo [{$oxcmp_user->oxuser__oxfname}]!
        [{/if}]
        Wähle aus [{$numberOfProducts}] verschiedenen Produkten Deine Lieblinge aus!
    </div>
[{/if}]
