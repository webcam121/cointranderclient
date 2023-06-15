<?php

class __MyTemplates_dc835b05125ae7f2f24920b240c5721c extends Mustache_Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        // 'data' section
        $value = $context->find('data');
        $buffer .= $this->section1751acd1f972d102be287286058b988a($context, $indent, $value);

        return $buffer;
    }

    private function section1751acd1f972d102be287286058b988a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
<div class="nk-content ">
<style>
    .form-dropdown .select2-selection {
        border: none !important;
    }
</style>
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body row">
                <div class="buysell wide-xs m-auto">
                    
                     <div class="card card-bordered">
                        <div class="card-inner">
                            <div id="depositDiv" class="buysell-block">
                                <form action="#" class="buysell-form">
                                    <div class="buysell-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label">Choose which account you want to top up</label>
                                        </div>
                                        <div class="dropdown buysell-cc-dropdown">
                                            <a href="#" class="buysell-cc-choosen">
                                                <div class="coin-item coin-btc">
                                                    <div class="coin-icon" id="algorthumType">
                                                        
                                                    </div>
                                                    <div class="coin-info" style="width: 100%">
                                                        
                                                        <select id="tokenType" name="tokenType" class="form-select form-control form-control-lg" data-ui="lg" required>
                                                            <option value="gd">Apollo</option>
                                                            <option value="gd+">Thor</option>
                                                            <option value="pt">Odin</option>
                                                            <option value="zu">Zeus</option>
                                                            <option value="st">Staking</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="buysell-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label">Payment Method</label>
                                        </div>
                                        <div class="form-pm-group">
                                            <ul class="buysell-pm-list depositMethod">
                                               <!-- <li class="buysell-pm-item">
                                                    <input class="buysell-pm-control" type="radio" name="bs-method" id="creditCard" disabled/>
                                                    <label class="buysell-pm-label" for="creditCard">
                                                        <span class="pm-name">Credit Card</span>
                                                        <span class="pm-icon"><em class="icon ni ni-cc-alt2"></em></span>
                                                    </label>
                                                </li>-->
                                               <!-- <li class="buysell-pm-item">
                                                    <input class="buysell-pm-control" type="radio" name="bs-method" id="bankTransfer" disabled/>
                                                    <label class="buysell-pm-label" for="bankTransfer">
                                                        <span class="pm-name">Bank Transfer</span>
                                                        <span class="pm-icon"><em class="icon ni ni-building"></em></span>
                                                    </label>
                                                </li>-->
                                                <li class="buysell-pm-item">
                                                    <input class="buysell-pm-control" type="radio" name="bs-method" id="cryptoCurrency" />
                                                    <label class="buysell-pm-label" for="cryptoCurrency">
                                                        <span class="pm-name">Cryptocurrency</span>
                                                        <span class="pm-icon"><em class="icon ni ni-bitcoin"></em></span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="buysell-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="depositAmount">Deposit equivalent in fiat</label>
                                        </div>
                                        <div class="form-control-group">
                                        <div id="textAmount" name="textAmount">

                                            
                                        </div>
                                            <div class="form-dropdown">
                                                <select class="form-select" id="depositCurrency" data-ui="lg">
                                                    <option value="USD">USDT</option>
                                                    
                                            
                                               
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="buysell-field form-action">
                                        <a href="#" id="continueDeposit" class="btn btn-lg btn-block btn-info" style="background: #054ab3;" data-toggle="modal" data-target="#depositModal">Upgrade Account</a>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>                                
                </div>                                    
            </div>
            
            
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
     $("#algorthumType").html(\'<img src="./assets/images/banner/Apollo.svg" style="width:25px" alt="algorthum Image" />\');
     $("#textAmount").html(\'<input type="text" class="form-control form-control-lg form-control-number" id="depositAmount" autocomplete="off" name="depositAmount" min="1000" placeholder="Min Amount is 1000$" value="1000">\');
    $("#tokenType").change(function(){
    if($(this).val() == \'gd\'){
        $("#algorthumType").html(\'<img src="./assets/images/banner/Apollo.svg" style="width:25px" alt="algorthum Image" />\');
        $("#textAmount").html(\'<input type="text" class="form-control form-control-lg form-control-number" id="depositAmount" autocomplete="off" name="depositAmount" min="1000" placeholder="Min Amount is 1000$" value="1000">\');
    }else if($(this).val() == \'gd+\') {
        $("#algorthumType").html(\'<img src="./assets/images/banner/Thor.svg" style="width:25px" alt="algorthum Image" />\');
        $("#textAmount").html(\'<input type="text" class="form-control form-control-lg form-control-number" id="depositAmount" autocomplete="off" name="depositAmount" min="5000" placeholder="Min Amount is 5000$" value="5000">\');
    }else if($(this).val() == \'pt\') {
        $("#algorthumType").html(\'<img src="./assets/images/banner/Odin.svg" style="width:25px" alt="algorthum Image" />\');
        $("#textAmount").html(\'<input type="text" class="form-control form-control-lg form-control-number" id="depositAmount" autocomplete="off" name="depositAmount" min="20000" placeholder="Min Amount is 20000$" value="20000">\');
    }else if($(this).val() == \'zu\') {
        $("#algorthumType").html(\'<img src="./assets/images/banner/Zeus.svg" style="width:25px" alt="algorthum Image" />\');
        $("#textAmount").html(\'<input type="text" class="form-control form-control-lg form-control-number" id="depositAmount" autocomplete="off" name="depositAmount" min="50000" placeholder="Min Amount is 50000$" value="50000">\');
    }else if($(this).val() == \'st\') {
        $("#algorthumType").html(\'<img src="./assets/images/banner/Staking.svg" style="width:25px" alt="algorthum Image" />\');
        $("#textAmount").html(\'<input type="text" class="form-control form-control-lg form-control-number" id="depositAmount" autocomplete="off" name="depositAmount" min="20000" placeholder="Min Amount is 20000$" value="20000">\');
    }
   
  });

    $(\'#btnDeposit\').click(function() {
        $(\'#depositDiv\').show();
        $(\'#withdrawDiv\').hide();

        $(\'#walletQRCodeImage\').attr(\'src\', \'/uploads/documents/BTC-QR-CODE.png\');
        $(\'.walletAddressTitle\').text(\'BTC Deposit Address\');
        $(\'#walletAddress\').text(\'bc1qqt5wmadxltm2zkejt0rqvmzhg9t7ptc8af0jrm\');
    });

    $(\'#btnDeposit\').click();

    $(\'#btnWithdraw\').click(function() {
        $(\'#depositDiv\').hide();
        $(\'#withdrawDiv\').show();

        $(\'#walletQRCodeImage\').attr(\'src\', \'/uploads/documents/BTC-QR-CODE.png\');
        $(\'.walletAddressTitle\').text(\'BTC Deposit Address\');
        $(\'#walletAddress\').text(\'bc1qqt5wmadxltm2zkejt0rqvmzhg9t7ptc8af0jrm\');
    });

    $(\'#downloadPayment\').show();
    $(\'#viewWalletAddress\').hide();

    $(\'#bankTransfer\').on(\'click\', function() {
        $(\'#depositMethod\').attr(\'data\', \'bankTransfer\');
        $(\'#depositMethod\').html(\'Bank Transfer\');

        var currencyOption = `<option value="USD">USDT</option>
                        <option value="EUR">EUR</option>
                        <option value="GBP">GBP</option>
                        <option value="CHF">CHF</option>
                        <option value="JPY">JPY</option>
                        <option value="AUD">AUD</option>`;
        $(\'#depositCurrency\').html(currencyOption);
        $(\'#depositCurrency1\').text(\'USDT\');

        $(\'#downloadPayment\').show();
        $(\'#viewWalletAddress\').hide();
    });

    $(\'#cryptoCurrency\').on(\'click\', function() {
        $(\'#depositMethod\').attr(\'data\', \'cryptoCurrency\');
        $(\'#depositMethod\').html(\'Cryptocurrency\');

        var currencyOption = `<option value="USD">USDT</option>
                        <option value="EUR">EUR</option>
                        <option value="GBP">GBP</option>
                  
                        <option value="BTC">BTC</option>
                        <option value="ETH">ETH</option>
                        <option value="LTC">LTC</option>
                        <option value="XRP">XRP</option>
                        <option value="LINK">LINK</option>
                        <option value="BCH">BCH</option>`;
        $(\'#depositCurrency\').html(currencyOption);
        $(\'#depositCurrency1\').text(\'BTC\');

        $(\'#walletQRCodeImage\').attr(\'src\', \'/uploads/documents/BTC-QR-CODE.png\');
        $(\'.walletAddressTitle\').text(\'BTC wallet address\');
        $(\'#walletAddress\').text(\'bc1qqt5wmadxltm2zkejt0rqvmzhg9t7ptc8af0jrm\');

        $(\'#downloadPayment\').hide();
        $(\'#viewWalletAddress\').show();
    });

    $(\'#depositAmount\').on(\'blur\', function(e) {
        $(\'#continueDeposit\').attr(\'data-target\', \'#depositModal\');
        var minDeposit = parseInt($(this).attr(\'min\'));
        var depositAmount = parseInt($(this).val().replace(\',\', \'\'));
        if (isNaN(depositAmount)) {
            
            $(this).val(minDeposit.toLocaleString(undefined,{ minimumFractionDigits: 0}));
            $(\'#depositAmount1\').text($(this).val());
        } else {
            if (minDeposit > depositAmount) {
                $(this).val(minDeposit.toLocaleString(undefined,{ minimumFractionDigits: 0}));
                $(\'#depositAmount1\').text($(this).val());
            } else {
                $(this).val(depositAmount.toLocaleString(undefined,{ minimumFractionDigits: 0}));
                $(\'#depositAmount1\').text($(this).val());
            }
        }
    });

    $(\'#depositCurrency\').on(\'change\', function() {
        $(\'#depositCurrency1\').text($(this).val());
        $(\'#downloadPayment\').attr(\'href\', \'/uploads/documents/Cointraderclient-\'+ $(this).val() +\'-Remittance.pdf\');

        var currency = $(this).val();
        var walletAddressTitle = currency +\' wallet address \';
        var walletAddress = \'\';
        switch(currency) {
            case \'BTC\':
                walletAddress = \'bc1qqt5wmadxltm2zkejt0rqvmzhg9t7ptc8af0jrm\';
            break;

            case \'ETH\':
                walletAddress = \'0x8540F0D6655e52FB9d68e2640b1e80120c803CF5\';
            break;

            case \'LTC\':
                walletAddress = \'LNYWvmSC2716dZVwxteYDCQ7BTe42Gpd2b\';
            break;

            case \'BCH\':
                walletAddress = \'qqu03jun3cmcexnkl8spq0h7525a05zsq56zzrgp3m\';
            break;

            case \'LINK\':
                walletAddress = \'0x8540F0D6655e52FB9d68e2640b1e80120c803CF5\';
            break;

            case \'XRP\':
                walletAddress = \'rnRghBiA4MZ9c7crVnQoWspMcM8ZBnXgfQ\';
            break;
        }

        $(\'#walletQRCodeImage\').attr(\'src\', \'/uploads/documents/\'+ currency +\'-QR-CODE.png\');
        $(\'.walletAddressTitle\').text(walletAddressTitle);
        $(\'#walletAddress\').text(walletAddress);
    });

    $(\'#continueDeposit\').on(\'click\', function() {  
        if ($(\'#depositAmount\').val() == \'\') {
            $(this).attr(\'data-target\', \' \');
            $(\'#depositAmount\').focus();
        }
        var amount;
        if(isNaN($(\'#depositAmount\').val())) {
           var  x = parseInt($(\'#depositAmount\').val().replace(/[,]/g,\'\'));
        }
         if($(\'#tokenType\').val() ==\'gd\'){
            if( x > 1000){
                amount = $(\'#depositAmount\').val() + \'$\';
            }else{
                amount = 1000 + \'$\';
            }
         }else if($(\'#tokenType\').val() ==\'gd+\'){
            if( x > 5000){
                amount = $(\'#depositAmount\').val() + \'$\';
            }else{
                amount = 5000 + \'$\';
            }
         }else if($(\'#tokenType\').val() ==\'pt\'){
            if( x > 20000){
                amount = $(\'#depositAmount\').val() + \'$\';
            }else{
                amount = 20000 + \'$\';
            }
         }else if($(\'#tokenType\').val() ==\'zu\'){
            if( x > 50000){
                amount = $(\'#depositAmount\').val() + \'$\';
            }else{
                amount = 50000 + \'$\';
            }
         }else if($(\'#tokenType\').val() ==\'st\'){
            if( x > 20000){
                amount = $(\'#depositAmount\').val() + \'$\';
            }else{
                amount = 20000 + \'$\';
            }
         }
         
        
        
         $(\'#depositAmount1\').text(amount);

    });


    $(\'#debitCard\').on(\'click\', function() {
        $(\'#withdrawMethod\').attr(\'data\', \'debitCard\');
        $(\'#withdrawMethod\').html(\'Cointraderclient Debit Card\');
        $(\'#withdrawCurrency1\').val(\'USD\');

        var currencyOption = `<option value="USD">USDT</option>
                        <option value="EUR">EUR</option>
                        <option value="GBP">GBP</option>
                        <option value="CHF">CHF</option>
                        <option value="JPY">JPY</option>
                        <option value="AUD">AUD</option>`;
        $(\'#withdrawCurrency\').html(currencyOption);
    });

    $(\'#bankTransfer1\').on(\'click\', function() {
        $(\'#withdrawMethod\').attr(\'data\', \'bankTransfer\');
        $(\'#withdrawMethod\').html(\'Bank Transfer\');
        $(\'#withdrawCurrency1\').val(\'USD\');

        var currencyOption = `<option value="USD">USDT</option>
                        <option value="EUR">EUR</option>
                        <option value="GBP">GBP</option>
                        <option value="CHF">CHF</option>
                        <option value="JPY">JPY</option>
                        <option value="AUD">AUD</option>`;
        $(\'#withdrawCurrency\').html(currencyOption);
    });

    $(\'#cryptoCurrency1\').on(\'click\', function() {
        $(\'#withdrawMethod\').attr(\'data\', \'cryptoCurrency\');
        $(\'#withdrawMethod\').html(\'Cryptocurrency\');
        $(\'#withdrawCurrency1\').val(\'BTC\');

        var currencyOption = `<option value="BTC">BTC</option>
                        <option value="ETH">ETH</option>
                        <option value="LTC">LTC</option>
                        <option value="XRP">XRP</option>
                        <option value="LINK">LINK</option>
                        <option value="BCH">BCH</option>`;
        $(\'#withdrawCurrency\').html(currencyOption);
    });

    $(\'#withdrawAmount\').on(\'blur\', function(e) {      
        $(\'#continueWithdraw\').attr(\'data-target\', \'#withdrawModal\');
        var minWithdraw = parseInt($(this).attr(\'min\'));
        var withdrawAmount = parseInt($(this).val().replace(\',\', \'\'));
        if (isNaN(withdrawAmount)) {
            $(this).val(minWithdraw.toLocaleString(undefined,{ minimumFractionDigits: 0}));
            $(\'#withdrawAmount1\').text($(this).val());
        } else {
            if (minWithdraw > withdrawAmount) {
                $(this).val(minWithdraw.toLocaleString(undefined,{ minimumFractionDigits: 0}));
                $(\'#withdrawAmount1\').text($(this).val());
            } else {
                $(this).val(withdrawAmount.toLocaleString(undefined,{ minimumFractionDigits: 0}));
                $(\'#withdrawAmount1\').text($(this).val());
            }
        }
    });

    $(\'#withdrawCurrency\').on(\'change\', function() {
        $(\'#withdrawCurrency1\').val($(this).val());
    });

    $(\'#continueWithdraw\').on(\'click\', function() {
        
        if ($(\'#withdrawAmount\').val() == \'\') {
            $(this).attr(\'data-target\', \' \');
            $(\'#withdrawAmount\').focus();
        }
    });
});

</script>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="nk-content ">
';
                $buffer .= $indent . '<style>
';
                $buffer .= $indent . '    .form-dropdown .select2-selection {
';
                $buffer .= $indent . '        border: none !important;
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '</style>
';
                $buffer .= $indent . '    <div class="container-fluid">
';
                $buffer .= $indent . '        <div class="nk-content-inner">
';
                $buffer .= $indent . '            <div class="nk-content-body row">
';
                $buffer .= $indent . '                <div class="buysell wide-xs m-auto">
';
                $buffer .= $indent . '                    
';
                $buffer .= $indent . '                     <div class="card card-bordered">
';
                $buffer .= $indent . '                        <div class="card-inner">
';
                $buffer .= $indent . '                            <div id="depositDiv" class="buysell-block">
';
                $buffer .= $indent . '                                <form action="#" class="buysell-form">
';
                $buffer .= $indent . '                                    <div class="buysell-field form-group">
';
                $buffer .= $indent . '                                        <div class="form-label-group">
';
                $buffer .= $indent . '                                            <label class="form-label">Choose which account you want to top up</label>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="dropdown buysell-cc-dropdown">
';
                $buffer .= $indent . '                                            <a href="#" class="buysell-cc-choosen">
';
                $buffer .= $indent . '                                                <div class="coin-item coin-btc">
';
                $buffer .= $indent . '                                                    <div class="coin-icon" id="algorthumType">
';
                $buffer .= $indent . '                                                        
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="coin-info" style="width: 100%">
';
                $buffer .= $indent . '                                                        
';
                $buffer .= $indent . '                                                        <select id="tokenType" name="tokenType" class="form-select form-control form-control-lg" data-ui="lg" required>
';
                $buffer .= $indent . '                                                            <option value="gd">Apollo</option>
';
                $buffer .= $indent . '                                                            <option value="gd+">Thor</option>
';
                $buffer .= $indent . '                                                            <option value="pt">Odin</option>
';
                $buffer .= $indent . '                                                            <option value="zu">Zeus</option>
';
                $buffer .= $indent . '                                                            <option value="st">Staking</option>
';
                $buffer .= $indent . '                                                        </select>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </a>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="buysell-field form-group">
';
                $buffer .= $indent . '                                        <div class="form-label-group">
';
                $buffer .= $indent . '                                            <label class="form-label">Payment Method</label>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="form-pm-group">
';
                $buffer .= $indent . '                                            <ul class="buysell-pm-list depositMethod">
';
                $buffer .= $indent . '                                               <!-- <li class="buysell-pm-item">
';
                $buffer .= $indent . '                                                    <input class="buysell-pm-control" type="radio" name="bs-method" id="creditCard" disabled/>
';
                $buffer .= $indent . '                                                    <label class="buysell-pm-label" for="creditCard">
';
                $buffer .= $indent . '                                                        <span class="pm-name">Credit Card</span>
';
                $buffer .= $indent . '                                                        <span class="pm-icon"><em class="icon ni ni-cc-alt2"></em></span>
';
                $buffer .= $indent . '                                                    </label>
';
                $buffer .= $indent . '                                                </li>-->
';
                $buffer .= $indent . '                                               <!-- <li class="buysell-pm-item">
';
                $buffer .= $indent . '                                                    <input class="buysell-pm-control" type="radio" name="bs-method" id="bankTransfer" disabled/>
';
                $buffer .= $indent . '                                                    <label class="buysell-pm-label" for="bankTransfer">
';
                $buffer .= $indent . '                                                        <span class="pm-name">Bank Transfer</span>
';
                $buffer .= $indent . '                                                        <span class="pm-icon"><em class="icon ni ni-building"></em></span>
';
                $buffer .= $indent . '                                                    </label>
';
                $buffer .= $indent . '                                                </li>-->
';
                $buffer .= $indent . '                                                <li class="buysell-pm-item">
';
                $buffer .= $indent . '                                                    <input class="buysell-pm-control" type="radio" name="bs-method" id="cryptoCurrency" />
';
                $buffer .= $indent . '                                                    <label class="buysell-pm-label" for="cryptoCurrency">
';
                $buffer .= $indent . '                                                        <span class="pm-name">Cryptocurrency</span>
';
                $buffer .= $indent . '                                                        <span class="pm-icon"><em class="icon ni ni-bitcoin"></em></span>
';
                $buffer .= $indent . '                                                    </label>
';
                $buffer .= $indent . '                                                </li>
';
                $buffer .= $indent . '                                            </ul>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="buysell-field form-group">
';
                $buffer .= $indent . '                                        <div class="form-label-group">
';
                $buffer .= $indent . '                                            <label class="form-label" for="depositAmount">Deposit equivalent in fiat</label>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="form-control-group">
';
                $buffer .= $indent . '                                        <div id="textAmount" name="textAmount">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                            
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                            <div class="form-dropdown">
';
                $buffer .= $indent . '                                                <select class="form-select" id="depositCurrency" data-ui="lg">
';
                $buffer .= $indent . '                                                    <option value="USD">USDT</option>
';
                $buffer .= $indent . '                                                    
';
                $buffer .= $indent . '                                            
';
                $buffer .= $indent . '                                               
';
                $buffer .= $indent . '                                                </select>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="buysell-field form-action">
';
                $buffer .= $indent . '                                        <a href="#" id="continueDeposit" class="btn btn-lg btn-block btn-info" style="background: #054ab3;" data-toggle="modal" data-target="#depositModal">Upgrade Account</a>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </form>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>                                
';
                $buffer .= $indent . '                </div>                                    
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            
';
                $buffer .= $indent . '            
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '<script>
';
                $buffer .= $indent . '$(document).ready(function() {
';
                $buffer .= $indent . '     $("#algorthumType").html(\'<img src="./assets/images/banner/Apollo.svg" style="width:25px" alt="algorthum Image" />\');
';
                $buffer .= $indent . '     $("#textAmount").html(\'<input type="text" class="form-control form-control-lg form-control-number" id="depositAmount" autocomplete="off" name="depositAmount" min="1000" placeholder="Min Amount is 1000$" value="1000">\');
';
                $buffer .= $indent . '    $("#tokenType").change(function(){
';
                $buffer .= $indent . '    if($(this).val() == \'gd\'){
';
                $buffer .= $indent . '        $("#algorthumType").html(\'<img src="./assets/images/banner/Apollo.svg" style="width:25px" alt="algorthum Image" />\');
';
                $buffer .= $indent . '        $("#textAmount").html(\'<input type="text" class="form-control form-control-lg form-control-number" id="depositAmount" autocomplete="off" name="depositAmount" min="1000" placeholder="Min Amount is 1000$" value="1000">\');
';
                $buffer .= $indent . '    }else if($(this).val() == \'gd+\') {
';
                $buffer .= $indent . '        $("#algorthumType").html(\'<img src="./assets/images/banner/Thor.svg" style="width:25px" alt="algorthum Image" />\');
';
                $buffer .= $indent . '        $("#textAmount").html(\'<input type="text" class="form-control form-control-lg form-control-number" id="depositAmount" autocomplete="off" name="depositAmount" min="5000" placeholder="Min Amount is 5000$" value="5000">\');
';
                $buffer .= $indent . '    }else if($(this).val() == \'pt\') {
';
                $buffer .= $indent . '        $("#algorthumType").html(\'<img src="./assets/images/banner/Odin.svg" style="width:25px" alt="algorthum Image" />\');
';
                $buffer .= $indent . '        $("#textAmount").html(\'<input type="text" class="form-control form-control-lg form-control-number" id="depositAmount" autocomplete="off" name="depositAmount" min="20000" placeholder="Min Amount is 20000$" value="20000">\');
';
                $buffer .= $indent . '    }else if($(this).val() == \'zu\') {
';
                $buffer .= $indent . '        $("#algorthumType").html(\'<img src="./assets/images/banner/Zeus.svg" style="width:25px" alt="algorthum Image" />\');
';
                $buffer .= $indent . '        $("#textAmount").html(\'<input type="text" class="form-control form-control-lg form-control-number" id="depositAmount" autocomplete="off" name="depositAmount" min="50000" placeholder="Min Amount is 50000$" value="50000">\');
';
                $buffer .= $indent . '    }else if($(this).val() == \'st\') {
';
                $buffer .= $indent . '        $("#algorthumType").html(\'<img src="./assets/images/banner/Staking.svg" style="width:25px" alt="algorthum Image" />\');
';
                $buffer .= $indent . '        $("#textAmount").html(\'<input type="text" class="form-control form-control-lg form-control-number" id="depositAmount" autocomplete="off" name="depositAmount" min="20000" placeholder="Min Amount is 20000$" value="20000">\');
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '   
';
                $buffer .= $indent . '  });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#btnDeposit\').click(function() {
';
                $buffer .= $indent . '        $(\'#depositDiv\').show();
';
                $buffer .= $indent . '        $(\'#withdrawDiv\').hide();
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        $(\'#walletQRCodeImage\').attr(\'src\', \'/uploads/documents/BTC-QR-CODE.png\');
';
                $buffer .= $indent . '        $(\'.walletAddressTitle\').text(\'BTC Deposit Address\');
';
                $buffer .= $indent . '        $(\'#walletAddress\').text(\'bc1qqt5wmadxltm2zkejt0rqvmzhg9t7ptc8af0jrm\');
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#btnDeposit\').click();
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#btnWithdraw\').click(function() {
';
                $buffer .= $indent . '        $(\'#depositDiv\').hide();
';
                $buffer .= $indent . '        $(\'#withdrawDiv\').show();
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        $(\'#walletQRCodeImage\').attr(\'src\', \'/uploads/documents/BTC-QR-CODE.png\');
';
                $buffer .= $indent . '        $(\'.walletAddressTitle\').text(\'BTC Deposit Address\');
';
                $buffer .= $indent . '        $(\'#walletAddress\').text(\'bc1qqt5wmadxltm2zkejt0rqvmzhg9t7ptc8af0jrm\');
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#downloadPayment\').show();
';
                $buffer .= $indent . '    $(\'#viewWalletAddress\').hide();
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#bankTransfer\').on(\'click\', function() {
';
                $buffer .= $indent . '        $(\'#depositMethod\').attr(\'data\', \'bankTransfer\');
';
                $buffer .= $indent . '        $(\'#depositMethod\').html(\'Bank Transfer\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        var currencyOption = `<option value="USD">USDT</option>
';
                $buffer .= $indent . '                        <option value="EUR">EUR</option>
';
                $buffer .= $indent . '                        <option value="GBP">GBP</option>
';
                $buffer .= $indent . '                        <option value="CHF">CHF</option>
';
                $buffer .= $indent . '                        <option value="JPY">JPY</option>
';
                $buffer .= $indent . '                        <option value="AUD">AUD</option>`;
';
                $buffer .= $indent . '        $(\'#depositCurrency\').html(currencyOption);
';
                $buffer .= $indent . '        $(\'#depositCurrency1\').text(\'USDT\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        $(\'#downloadPayment\').show();
';
                $buffer .= $indent . '        $(\'#viewWalletAddress\').hide();
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#cryptoCurrency\').on(\'click\', function() {
';
                $buffer .= $indent . '        $(\'#depositMethod\').attr(\'data\', \'cryptoCurrency\');
';
                $buffer .= $indent . '        $(\'#depositMethod\').html(\'Cryptocurrency\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        var currencyOption = `<option value="USD">USDT</option>
';
                $buffer .= $indent . '                        <option value="EUR">EUR</option>
';
                $buffer .= $indent . '                        <option value="GBP">GBP</option>
';
                $buffer .= $indent . '                  
';
                $buffer .= $indent . '                        <option value="BTC">BTC</option>
';
                $buffer .= $indent . '                        <option value="ETH">ETH</option>
';
                $buffer .= $indent . '                        <option value="LTC">LTC</option>
';
                $buffer .= $indent . '                        <option value="XRP">XRP</option>
';
                $buffer .= $indent . '                        <option value="LINK">LINK</option>
';
                $buffer .= $indent . '                        <option value="BCH">BCH</option>`;
';
                $buffer .= $indent . '        $(\'#depositCurrency\').html(currencyOption);
';
                $buffer .= $indent . '        $(\'#depositCurrency1\').text(\'BTC\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        $(\'#walletQRCodeImage\').attr(\'src\', \'/uploads/documents/BTC-QR-CODE.png\');
';
                $buffer .= $indent . '        $(\'.walletAddressTitle\').text(\'BTC wallet address\');
';
                $buffer .= $indent . '        $(\'#walletAddress\').text(\'bc1qqt5wmadxltm2zkejt0rqvmzhg9t7ptc8af0jrm\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        $(\'#downloadPayment\').hide();
';
                $buffer .= $indent . '        $(\'#viewWalletAddress\').show();
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#depositAmount\').on(\'blur\', function(e) {
';
                $buffer .= $indent . '        $(\'#continueDeposit\').attr(\'data-target\', \'#depositModal\');
';
                $buffer .= $indent . '        var minDeposit = parseInt($(this).attr(\'min\'));
';
                $buffer .= $indent . '        var depositAmount = parseInt($(this).val().replace(\',\', \'\'));
';
                $buffer .= $indent . '        if (isNaN(depositAmount)) {
';
                $buffer .= $indent . '            
';
                $buffer .= $indent . '            $(this).val(minDeposit.toLocaleString(undefined,{ minimumFractionDigits: 0}));
';
                $buffer .= $indent . '            $(\'#depositAmount1\').text($(this).val());
';
                $buffer .= $indent . '        } else {
';
                $buffer .= $indent . '            if (minDeposit > depositAmount) {
';
                $buffer .= $indent . '                $(this).val(minDeposit.toLocaleString(undefined,{ minimumFractionDigits: 0}));
';
                $buffer .= $indent . '                $(\'#depositAmount1\').text($(this).val());
';
                $buffer .= $indent . '            } else {
';
                $buffer .= $indent . '                $(this).val(depositAmount.toLocaleString(undefined,{ minimumFractionDigits: 0}));
';
                $buffer .= $indent . '                $(\'#depositAmount1\').text($(this).val());
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#depositCurrency\').on(\'change\', function() {
';
                $buffer .= $indent . '        $(\'#depositCurrency1\').text($(this).val());
';
                $buffer .= $indent . '        $(\'#downloadPayment\').attr(\'href\', \'/uploads/documents/Cointraderclient-\'+ $(this).val() +\'-Remittance.pdf\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        var currency = $(this).val();
';
                $buffer .= $indent . '        var walletAddressTitle = currency +\' wallet address \';
';
                $buffer .= $indent . '        var walletAddress = \'\';
';
                $buffer .= $indent . '        switch(currency) {
';
                $buffer .= $indent . '            case \'BTC\':
';
                $buffer .= $indent . '                walletAddress = \'bc1qqt5wmadxltm2zkejt0rqvmzhg9t7ptc8af0jrm\';
';
                $buffer .= $indent . '            break;
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            case \'ETH\':
';
                $buffer .= $indent . '                walletAddress = \'0x8540F0D6655e52FB9d68e2640b1e80120c803CF5\';
';
                $buffer .= $indent . '            break;
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            case \'LTC\':
';
                $buffer .= $indent . '                walletAddress = \'LNYWvmSC2716dZVwxteYDCQ7BTe42Gpd2b\';
';
                $buffer .= $indent . '            break;
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            case \'BCH\':
';
                $buffer .= $indent . '                walletAddress = \'qqu03jun3cmcexnkl8spq0h7525a05zsq56zzrgp3m\';
';
                $buffer .= $indent . '            break;
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            case \'LINK\':
';
                $buffer .= $indent . '                walletAddress = \'0x8540F0D6655e52FB9d68e2640b1e80120c803CF5\';
';
                $buffer .= $indent . '            break;
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            case \'XRP\':
';
                $buffer .= $indent . '                walletAddress = \'rnRghBiA4MZ9c7crVnQoWspMcM8ZBnXgfQ\';
';
                $buffer .= $indent . '            break;
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        $(\'#walletQRCodeImage\').attr(\'src\', \'/uploads/documents/\'+ currency +\'-QR-CODE.png\');
';
                $buffer .= $indent . '        $(\'.walletAddressTitle\').text(walletAddressTitle);
';
                $buffer .= $indent . '        $(\'#walletAddress\').text(walletAddress);
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#continueDeposit\').on(\'click\', function() {  
';
                $buffer .= $indent . '        if ($(\'#depositAmount\').val() == \'\') {
';
                $buffer .= $indent . '            $(this).attr(\'data-target\', \' \');
';
                $buffer .= $indent . '            $(\'#depositAmount\').focus();
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '        var amount;
';
                $buffer .= $indent . '        if(isNaN($(\'#depositAmount\').val())) {
';
                $buffer .= $indent . '           var  x = parseInt($(\'#depositAmount\').val().replace(/[,]/g,\'\'));
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '         if($(\'#tokenType\').val() ==\'gd\'){
';
                $buffer .= $indent . '            if( x > 1000){
';
                $buffer .= $indent . '                amount = $(\'#depositAmount\').val() + \'$\';
';
                $buffer .= $indent . '            }else{
';
                $buffer .= $indent . '                amount = 1000 + \'$\';
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '         }else if($(\'#tokenType\').val() ==\'gd+\'){
';
                $buffer .= $indent . '            if( x > 5000){
';
                $buffer .= $indent . '                amount = $(\'#depositAmount\').val() + \'$\';
';
                $buffer .= $indent . '            }else{
';
                $buffer .= $indent . '                amount = 5000 + \'$\';
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '         }else if($(\'#tokenType\').val() ==\'pt\'){
';
                $buffer .= $indent . '            if( x > 20000){
';
                $buffer .= $indent . '                amount = $(\'#depositAmount\').val() + \'$\';
';
                $buffer .= $indent . '            }else{
';
                $buffer .= $indent . '                amount = 20000 + \'$\';
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '         }else if($(\'#tokenType\').val() ==\'zu\'){
';
                $buffer .= $indent . '            if( x > 50000){
';
                $buffer .= $indent . '                amount = $(\'#depositAmount\').val() + \'$\';
';
                $buffer .= $indent . '            }else{
';
                $buffer .= $indent . '                amount = 50000 + \'$\';
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '         }else if($(\'#tokenType\').val() ==\'st\'){
';
                $buffer .= $indent . '            if( x > 20000){
';
                $buffer .= $indent . '                amount = $(\'#depositAmount\').val() + \'$\';
';
                $buffer .= $indent . '            }else{
';
                $buffer .= $indent . '                amount = 20000 + \'$\';
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '         }
';
                $buffer .= $indent . '         
';
                $buffer .= $indent . '        
';
                $buffer .= $indent . '        
';
                $buffer .= $indent . '         $(\'#depositAmount1\').text(amount);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#debitCard\').on(\'click\', function() {
';
                $buffer .= $indent . '        $(\'#withdrawMethod\').attr(\'data\', \'debitCard\');
';
                $buffer .= $indent . '        $(\'#withdrawMethod\').html(\'Cointraderclient Debit Card\');
';
                $buffer .= $indent . '        $(\'#withdrawCurrency1\').val(\'USD\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        var currencyOption = `<option value="USD">USDT</option>
';
                $buffer .= $indent . '                        <option value="EUR">EUR</option>
';
                $buffer .= $indent . '                        <option value="GBP">GBP</option>
';
                $buffer .= $indent . '                        <option value="CHF">CHF</option>
';
                $buffer .= $indent . '                        <option value="JPY">JPY</option>
';
                $buffer .= $indent . '                        <option value="AUD">AUD</option>`;
';
                $buffer .= $indent . '        $(\'#withdrawCurrency\').html(currencyOption);
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#bankTransfer1\').on(\'click\', function() {
';
                $buffer .= $indent . '        $(\'#withdrawMethod\').attr(\'data\', \'bankTransfer\');
';
                $buffer .= $indent . '        $(\'#withdrawMethod\').html(\'Bank Transfer\');
';
                $buffer .= $indent . '        $(\'#withdrawCurrency1\').val(\'USD\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        var currencyOption = `<option value="USD">USDT</option>
';
                $buffer .= $indent . '                        <option value="EUR">EUR</option>
';
                $buffer .= $indent . '                        <option value="GBP">GBP</option>
';
                $buffer .= $indent . '                        <option value="CHF">CHF</option>
';
                $buffer .= $indent . '                        <option value="JPY">JPY</option>
';
                $buffer .= $indent . '                        <option value="AUD">AUD</option>`;
';
                $buffer .= $indent . '        $(\'#withdrawCurrency\').html(currencyOption);
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#cryptoCurrency1\').on(\'click\', function() {
';
                $buffer .= $indent . '        $(\'#withdrawMethod\').attr(\'data\', \'cryptoCurrency\');
';
                $buffer .= $indent . '        $(\'#withdrawMethod\').html(\'Cryptocurrency\');
';
                $buffer .= $indent . '        $(\'#withdrawCurrency1\').val(\'BTC\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        var currencyOption = `<option value="BTC">BTC</option>
';
                $buffer .= $indent . '                        <option value="ETH">ETH</option>
';
                $buffer .= $indent . '                        <option value="LTC">LTC</option>
';
                $buffer .= $indent . '                        <option value="XRP">XRP</option>
';
                $buffer .= $indent . '                        <option value="LINK">LINK</option>
';
                $buffer .= $indent . '                        <option value="BCH">BCH</option>`;
';
                $buffer .= $indent . '        $(\'#withdrawCurrency\').html(currencyOption);
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#withdrawAmount\').on(\'blur\', function(e) {      
';
                $buffer .= $indent . '        $(\'#continueWithdraw\').attr(\'data-target\', \'#withdrawModal\');
';
                $buffer .= $indent . '        var minWithdraw = parseInt($(this).attr(\'min\'));
';
                $buffer .= $indent . '        var withdrawAmount = parseInt($(this).val().replace(\',\', \'\'));
';
                $buffer .= $indent . '        if (isNaN(withdrawAmount)) {
';
                $buffer .= $indent . '            $(this).val(minWithdraw.toLocaleString(undefined,{ minimumFractionDigits: 0}));
';
                $buffer .= $indent . '            $(\'#withdrawAmount1\').text($(this).val());
';
                $buffer .= $indent . '        } else {
';
                $buffer .= $indent . '            if (minWithdraw > withdrawAmount) {
';
                $buffer .= $indent . '                $(this).val(minWithdraw.toLocaleString(undefined,{ minimumFractionDigits: 0}));
';
                $buffer .= $indent . '                $(\'#withdrawAmount1\').text($(this).val());
';
                $buffer .= $indent . '            } else {
';
                $buffer .= $indent . '                $(this).val(withdrawAmount.toLocaleString(undefined,{ minimumFractionDigits: 0}));
';
                $buffer .= $indent . '                $(\'#withdrawAmount1\').text($(this).val());
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#withdrawCurrency\').on(\'change\', function() {
';
                $buffer .= $indent . '        $(\'#withdrawCurrency1\').val($(this).val());
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#continueWithdraw\').on(\'click\', function() {
';
                $buffer .= $indent . '        
';
                $buffer .= $indent . '        if ($(\'#withdrawAmount\').val() == \'\') {
';
                $buffer .= $indent . '            $(this).attr(\'data-target\', \' \');
';
                $buffer .= $indent . '            $(\'#withdrawAmount\').focus();
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '</script>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
