<?php
ini_set('error_reporting', 1);
ini_set('display_errors', true);
define('SMTP_HOST','mail.cointraderclient.com');
define('SMTP_USER','admin@cointraderclient.com');
define('SMTP_PASSWORD','Uh;ErB48bm?M');
define('EMAIL_FROM','admin@cointraderclient.com');
require 'Classes/Mustache/Autoloader.php';
Mustache_Autoloader::register();

$mustache = new Mustache_Engine(array(
    'template_class_prefix' => '__MyTemplates_',
    'cache' => dirname(__FILE__) . '/tmp/cache/mustache',
    'cache_file_mode' => 0666, // Please, configure your umask instead of doing this :)
    'cache_lambda_templates' => true,
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/templates'),
    'partials_loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/templates/partials'),
    'helpers' => array('i18n' => function ($text) {
        // do something translatey here...
    }),
    'escape' => function ($value) {
        return htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
    },
    'charset' => 'ISO-8859-1',
    'logger' => new Mustache_Logger_StreamLogger('php://stderr'),
    'strict_callables' => true,
    'pragmas' => [Mustache_Engine::PRAGMA_FILTERS],
));

include 'context.php';

?>

<!DOCTYPE html>
<html  lang="en-US">
<head>
    <?php
        include 'includes/head.php';
    ?>
</head>

<body class="nk-body bg-lighter npc-default has-sidebar">
    
    <div class="nk-main">

        <?php 

        if ($_SESSION['userId']) {
            if($pageData->isAdmin) {
                include 'includes/adminsidebar.php';
            }else if($pageData->isAgent){
                include 'includes/agentsidebar.php';
            }else {
                include 'includes/usersidebar.php';
            }
        ?>

            <div class="nk-wrap ">
                <?php

                if($pageData->isAdmin) {
                    include 'includes/adminheader.php';
                }else if($pageData->isAgent) {
                    include 'includes/agentheader.php';
                }else {
                    include 'includes/userheader.php';
                }

                //start usercontent
                $result = dbAction('trialday', (object) array('id' => $_SESSION['userId']));
                $regdate = $result[0]->dateCreated;
                $expdate = $result[0]->trialExpiryDate;

                $d1 = strtotime(date('Y-m-d'));
                $your_date = strtotime($expdate);
                $datediff = $your_date - $d1;
                $trial = floor($datediff / (60 * 60 * 24));



                echo $data->template->render((object) array('data' => $data->data));
                //end usercontent
                
                if($pageData->isAdmin) {
                    include 'includes/adminfooter.php';
                }else if($pageData->isAgent){
                    include 'includes/adminfooter.php';
                }else {
                    include 'includes/userfooter.php';
                }
                ?>
            </div
        <?php
        } else {
            echo $data->template->render((object) array('data' => $data->data));
        }
        ?>
    </div>
    
    <?php include 'includes/modal.php'?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <div class="container">
        <div class="modal fade" id="myModalnotification" role="dialog">
            <div class="modal-dialog modal-lg" role="document" style="justify-content:center">
                <div class="modal-content" style="width:60%">
                    <div class="modal-body p-0">
                        <div style="display: flex;flex-direction: column;align-items: center;">
                            <div style="width: 20%;margin-top: 20px;">
                                <img src="./assets/images/icons/emails.svg" alt="email icon"/>
                            </div>
                            <h4 style="margin-bottom:20px">You have a new email</h4>
                           
                            <?php
                            if($pageData->isAdmin){
                                echo('<a type="button" href="./adminMessages" style="padding: 5px 20px;font-size: 17px;font-weight: 700;color: #364a63;border: solid 2px #364a63;border-radius: 10px;margin-bottom: 30px;">Inbox</a>');
                            }else if($pageData->isAgent){
                                echo('<a type="button" href="./agentMessages" style="padding: 5px 20px;font-size: 17px;font-weight: 700;color: #364a63;border: solid 2px #364a63;border-radius: 10px;margin-bottom: 30px;">Inbox</a>');
                            }else{
                                echo('<a type="button" href="./messages" style="padding: 5px 20px;font-size: 17px;font-weight: 700;color: #364a63;border: solid 2px #364a63;border-radius: 10px;margin-bottom: 30px;">Inbox</a>');
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/scripts.js?ver=2.2.0"></script>
    
    <script src="./assets/js/charts/chart-crypto.js?ver=2.2.0"></script>
    <script src="./assets/js/charts/chart-ecommerce.js?ver=2.2.0"></script>
    <script src="./assets/js/example-chart.js?ver=2.2.0"></script>
    
    <script src="./assets/js/apps/inbox.js?ver=2.2.0"></script>
    <script src="./assets/js/libs/tagify.js?ver=2.2.0"></script>

    <script>
    function notification(){
            var userId="<?php echo $_SESSION['userId'] ?>";
            $.ajax({
                type: "POST",
                url: '/checknewemail',
                data: {userId:userId},
                success: function(data) {
                    console.log(data);
                    if (data=='yes'){
                        $("#myModalnotification").modal('show');
                    }

                }
            });

        }
    notification();    
    // setInterval(notification, 5000);

    </script>

</body>
</html>